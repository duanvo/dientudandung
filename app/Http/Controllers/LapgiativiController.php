<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lapgiativi;
use Validator;
use Auth;
use File;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Rule;

class LapgiativiController extends Controller
{
    public function show(){
    	$lapgiativi = Lapgiativi::orderby('id','DESC')->get();

    	return view('admin.lapgiativi.show',compact('lapgiativi'));
    }

    public function add(Request $request){
    	if($request->ajax()){
    		$rules=[
    			'add_tittle_lapgiativi'=>"unique:lapgiativis,tittle"
    		];

    		$messages=[
    			'add_tittle_lapgiativi.unique'=>"Tiêu đề đã tồn tại"
    		];

    		$validator=Validator::make($request->all(),$rules,$messages);

    		if($validator->fails()){
    			return response()->json([
    				'error_add_lapgiativi'=>true,
    				'messages'=>$request->errors()
    				],200);
    		}else{
    			$lapgiativi = New Lapgiativi;

    			$lapgiativi->tittle = $request->add_tittle_lapgiativi;
    			$lapgiativi->cost = $request->add_cost_lapgiativi;
    			$lapgiativi->introduce = $request->add_introduce_lapgiativi;

    			if($lapgiativi->save()){
    				return response()->json([
    					'add_lapgiativi'=>true
    					],200);
    			}
    		}
    	}
    }

    public function information(Request $request){
    	if($request->ajax()){
    		$id=$request->id;
    		$info=Lapgiativi::find($id)->get();

    		return response()->json($info);
    	}
    }

    public function get_edit(Request $request){
    	if($request->ajax()){
    		$id=$request->id;
    		$info_edit=Lapgiativi::find($id);

    		return response()->json($info_edit);
    	}
    }

    public function post_edit(Request $request){
    	$rules=[
    		
    	];
    }
}
