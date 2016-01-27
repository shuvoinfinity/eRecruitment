<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicantFormRequest;

use App\Applicant;
use App\Experience;
use App\Qualification;
use DB;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view("application.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicantFormRequest $request)
    {
        try {
            
            DB::beginTransaction();

            $applicant = new Applicant;

            $applicant->fill($request->only(
                    'name', 'email', 'phone', 'address', 'gender', 'date_of_birth', 'id_type', 
                    'id_number', 'marital_status', 'english_translation', 'bangla_translation'
                                            ));
            
            if($request->hasFile('photo')){

                $extension = $request->file('photo')->getClientOriginalExtension();
                $photoName = $request->input('email').time().'.'.$extension;

                $request->file('photo')->move('uploads/photos/', $photoName);

                $applicant->photo = $photoName;
            }

            if($request->hasFile('recommendation_letter')){

                $extension = $request->file('recommendation_letter')->getClientOriginalExtension();
                $fileName = $request->input('email').time().'.'.$extension;

                $request->file('recommendation_letter')->move('uploads/letters/', $fileName);

                $applicant->recommendation_letter = $fileName;
            } 

            $applicant->save();

            # Qualification Entry
            $degrees = $request->input('degree');
            $institutes = $request->input('institute');
            $results = $request->input('result');
            $passing_years = $request->input('passing_year');

            if( count( $degrees ) > 0 ) {
                foreach ($degrees as $degree) {
                    $index = array_search($degree, $degrees);

                    $qualification = new Qualification;
                    $qualification->degree = $degrees[$index];
                    $qualification->institute = $institutes[$index];
                    $qualification->result = $results[$index];
                    $qualification->passing_year = $passing_years[$index];
                    $qualification->applicant_id = $applicant->id;
                    $qualification->save();
                }
            }

            # Employments Entry
            $designations = $request->input('designation');
            $organizations = $request->input('organization');
            $froms = $request->input('from');
            $tos = $request->input('to');

            if( count( $designations ) > 0 ) {
                foreach ($designations as $designation) {
                    $index = array_search($designation, $designations);

                    $experience = new Experience;
                    $experience->designation = $designations[$index];
                    $experience->organization = $organizations[$index];
                    $experience->from = $froms[$index];
                    $experience->to = $tos[$index];
                    $experience->applicant_id = $applicant->id;
                    $experience->save();
                }
            }        

            DB::commit();

            return view('application.index')->with('message', 'You have successfully submitted your resume!!');


        } catch (\Exception $e) {
            
            DB::rollback();

            dd( $e->getMessage() );

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
