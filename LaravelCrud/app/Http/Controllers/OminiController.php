<?php

namespace App\Http\Controllers;
use App\Omino;
use Illuminate\Http\Request;

class OminiController extends Controller
{
    public function index(){
        $omini=Omino::all();
        return view('omini',compact('omini'));
    }

//Visualizzazione dati------------------------------------------------
    public function showOmino($id){
        $omino=Omino::findOrFail($id);
        return view('showOmino',compact('omino'));
    }

//Creazione dati--------------------------------------------------
    public function createOmino(){
        return view('createOmino');
    }

    public function storeOmino(Request $request){
        $omino=$request->all();

        $newOmino= new Omino;

        $newOmino->firstname=$omino['firstname'];
        $newOmino->lastname=$omino['lastname'];
        $newOmino->code=$omino['code'];
        $newOmino->address=$omino['address'];
        $newOmino->state=$omino['state'];
        $newOmino->phone=$omino['phone'];
        $newOmino->role=$omino['role'];

        $newOmino->save();
        return redirect()->route('omini');
    }

//Modifica dati----------------------------------------------------
    public function editOmino($id){
        $omino=Omino::findOrFail($id);
        return view('editOmino',compact('omino'));
    }

    public function updateOmino(Request $request,$id){
        $ominoSelected=$request->all();

        $omino=Omino::findOrFail($id);

        $omino->firstname=$ominoSelected['firstname'];
        $omino->lastname=$ominoSelected['lastname'];
        $omino->code=$ominoSelected['code'];
        $omino->address=$ominoSelected['address'];
        $omino->state=$ominoSelected['state'];
        $omino->phone=$ominoSelected['phone'];
        $omino->role=$ominoSelected['role'];

        $omino->save();
        return redirect()->route('showOmino',$omino['id']);
    }

//Eliminazione dati------------------------------------------------------
    public function destroyOmino($id){
        $omino=Omino::findOrFail($id);
        $omino->delete();
        return redirect()->route('omini');
    }

}
