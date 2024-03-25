<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ig;

class IgController extends Controller
{
    public function index(){
        $data['igs'] = Ig::orderBy('id','asc')->paginate(5); 
        return view ('home',$data);
    }
    public function create(){
        return view ('create');
    }
    public function store(Request $request){
        $request->validate([
            'ig_name'=>'required',
            'ig_details'=>'required',
            'ig_status'=>'required'
        ]);
        $ig = new Ig;
        $ig->ig_name = $request->ig_name;
        $ig->ig_details = $request->ig_details;
        $ig->ig_status = $request->ig_status;
        $ig->save();
        return redirect()->route('Instagram.index');

    }
    public function edit(Ig $ig){
        dd($ig);
        return view ('edit',compact('ig'));
    }

     public function update(Request $request,$id){
        $request->validate([
            'ig_name'=>'required',
            'ig_details'=>'required',
            'ig_status'=>'required'
        ]);
        $ig = Ig::find($id);
        $ig->ig_name = $request->ig_name;
        $ig->ig_details = $request->ig_details;
        $ig->ig_status = $request->ig_status;
        $ig->save();
        return redirect()->route('Instagram.index');
    }
    public function destroy(Ig $ig){
        $ig->delete();
        return redirect()->route('Instagram.index');
    }
}
