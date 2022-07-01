<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PelangganResource;
use App\Models\pelanggan;
use Illuminate\Http\Request;
use Illuminatee\Support\Facades\Validator;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pelanggan=Pelanggan::all();
        return response([
            'total'=>$pelanggan->count(),
            'messages'=>'Retrieved successfuly',
            'data'=>PelangganResource::collection($pelanggan)
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator=Validator::make($request->all(),[
            'name'=>'required|max:100',
            'telp'=>'required|min:6|digits_between:6,15|numeric'
        ]);
        if($validator->fails()){
            return response([
                'error'=>$validator->errors(),
                'status'=>'Validator Error'
            ]);
        }
        $pelanggan=Pelanggan::create($request->all());
        return response(['data'=>new PelangganResource($pelanggan),'message'=>'Pelanggan has been created!'],201);
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
        $pelanggan=Pelanggan::find($id);
        if($pelanggan!=null){
            return response(['project'=>new PelangganResource($pelanggan),'message'=>'Retrieved successfully'
        ],200);
        }else {
            return response([
                'message'=>'No data found!',
            ],403);
        }
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
        $validator=Validator::make($request->all(),[
            'name'=>'required|max:100',
            'telp'=>'required|min:6|digits_between:6,15|numeric'
        ]);
        if($validator->fails()){
            return response([
                'error'=>$validator->errors(),
                'status'=>'Validation Error'
            ]);
        }
        $pelanggan=Pelanggan::find($id);
        if($pelanggan!=null){
            $pelanggan->update($request->all());
            return response(['data'=>new PelangganResource($pelanggan),'message'=>'Pelanggan has been updated!'],202);
        }else{
            return response(['message'=>'No data found!',],403);
        }
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
        $pelanggan=Pelanggan::find($id);
        if($pelanggan!=null){
            $pelanggan->delete();
            return response(['message'=>'Pelanggan has been deleted!']);
        }else{
            return response([
                'message'=>'No data found!',
            ],403);
        }
    }
}