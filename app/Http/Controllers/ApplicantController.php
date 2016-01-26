<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicantFormRequest;

use App\Applicant;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hello = 'Hello from Applicant Controller';

        return view("application.index", compact('hello'));
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
        if ($request != null) {
            
            $applicant = new Applicant(array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'gender' => $request->get('gender'),
                'date_of_birth' => $request->get('date_of_birth'),
                'id_type' => $request->get('id_type'),
                'id_number' => $request->get('id_number'),
                'marital_status' => $request->get('marital_status'),
                'address' => $request->get('address'),
                'photo' => $request->get('photo'),
                'recommendation_letter' => $request->get('recommendation_letter'),
                'english_translation' => $request->get('english_translation'),
                'bangla_translation' => $request->get('bangla_translation')
                ));
            print_r($applicant);
            exit();
        }

        return Redirect::to('/welcome');
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
