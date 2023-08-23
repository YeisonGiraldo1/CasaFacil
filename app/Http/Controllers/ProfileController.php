<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{



    public function loadviewprofile(){
    
return view("profile.profile");
    }


    public function loadviewupdateprofile(){
        $id=  auth()->user()->id;
        $data['datos'] = User::select()->where("id",$id)->get();
        return view("profile.update",$data);
            }


        public function updatedata(Request $request){
            $data = $request->except(['_token']);
            $store = User::where('id', $request['id'])->update($data);
            return redirect()->route('update.profile')->with('success', 'Los datos se han actualizado correctamente.');
        }
        


}
