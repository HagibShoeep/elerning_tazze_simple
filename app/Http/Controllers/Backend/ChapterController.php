<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Http\Requests\StoreChapterRequest;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $chapters = Chapter::all();

        return response()->json([
            'status' => true,
            'chapters' => $chapters
        ]);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreChapterRequest $request)
    {
        $chapters = Chapter::create($request->all());

        return response()->json([
            'status' => true,
            'message'=>"insert successfull chapters",
            'chapters' => $chapters
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
        //edite the resources


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(StoreChapterRequest $request, $id)
    {


        $chapters = Chapter::find($id);
        $chapters->description = $request['description'];
        $chapters->chapter_no =  $request['chapter_no'];
        $chapters->save();
        return response()->json([
        "success" => true,
        "message" => "chapters updated successfully.",
        "data" => $chapters
        ]);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $chapters = Chapter::find($id);
        $chapters->delete();

        return response()->json([
            'status' => true,
            'message' => "emploee Deleted successfully!",
        ], 200);
    }
}
