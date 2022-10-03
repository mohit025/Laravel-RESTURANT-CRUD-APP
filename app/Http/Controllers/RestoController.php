<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class RestoController extends Controller
{
    //
    function index(){

        return view('home');
    }

    function list(){
        $data= Restaurant::all();
        return view('list',["data"=>$data]);
    }

    function add(Request $req){
    //    return $req->input();


            $resto = new Restaurant();
            $resto->name = $req->input('name');

            $resto->email = $req->input('email');

            $resto->address = $req->input('address');

                $resto->save();
         $req->session()->flash('status', 'Resturant is successfully entered in DB');
 
                return redirect('list');
  return ;
        
    }

    function delete($id){
                 Restaurant::find($id)->delete();
                Session::flash('status', 'Resturant is successfully deleted in DB');
 
                return redirect('list');
    }
    function edit($id){
        $data= Restaurant::find($id);
        return view('edit',['data'=>$data]);
    }


    function update(Request $req){
        //    return $req->input();
    
    
                $resto = Restaurant::find($req->id);
                $resto->name = $req->input('name');
    
                $resto->email = $req->input('email');
    
                $resto->address = $req->input('address');
    
                    $resto->save();
             $req->session()->flash('status', 'Resturant is successfully updated in DB');
     
                    return redirect('list');
    
            


        }

        function register(Request $req){
         return $req->input();
        }

        function login(Request $req){
              $user= User::where('email',$req->input('email'))->get();
              return Crypt::decrypt($user[0]->password);
        }
    
}
