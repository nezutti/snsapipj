<?php

namespace App\Http\Controllers;

use App\Models\Heart;
use Illuminate\Http\Request;

class HeartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item=Heart::create($request->all());
        return response()->json([
              'data' => $item
              ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heart  $heart
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
         $item2=['user_uid'=>$request->user_uid];
   
         $item=Heart::find($item2);
         if ($item) {
      return response()->json([
        'data' => $item
      ], 200);
    } else {
      return response()->json([
        'message' => 'Not found'
      ],404);
    }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Heart  $heart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heart $heart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heart  $heart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {  
     $item2=['user_uid'=>$request->user_uid,"message_id"=>$request->message_id];
   
      $item=Heart::where($item2)->delete();
       if ($item) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
