<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Students = Student::all();

        return response()->json([
            'status' => true,
            'students' => $Students
        ]);      //show the Student json api

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
    public function store(StoreStudentRequest $request)
    {
        //

        $students = Student::create($request->all());

        return response()->json([
            'status' => true,
            'message'=>"insert successfull chapters",
            'students' => $students
        ], 200);
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
    public function update(StoreStudentRequest $request, $id)
    {
        $students = Student::find($id);
        $students->first_name = $request['first_name'];
        $students->last_name =  $request['last_name'];
        $students->email = $request['email'];
        $students->location =  $request['location'];
        $students->password =  $request['password'];
        $students->save();
        return response()->json([
            "success" => true,
            "message" => "students updated successfully.",
            "data" => $students
        ]);    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $students = Student::find($id);
        $students->delete();
        return response()->json([
            'status' => true,
            'message' => "emploee Deleted successfully!",
        ], 200);

    }
}
