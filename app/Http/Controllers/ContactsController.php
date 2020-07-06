<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use Illuminate\Support\Facades\DB;
class ContactsController extends Controller
{
    //
    public function index()
    {
    	$contacts = Contacts::all();
    	

    }

    public function create()
    {
    	return view('contacts.create');
    }

     // funcion que sirve para validar reglas luego solo la mando a llamar.
    private function perfomValidation(request $request)
    {
    	$rules = [
    		'fristname' => 'required|min:3'
    	];
    	$message = [
    		'name.required' => 'Es necesario ingresar un nombre',
    		'name.min' => 'como minimo el nombre debe tener 3 caracteres!'
    	];
    	$this->validate($request,$rules,$message);
    }

    public function store(request $request)
    {
    	//dd($request->all());
    	$this->perfomValidation($request);
    	
    	$specialty = new Contacts();
    	$specialty->fristname = strtoupper($request->input('fristname'));
    	$specialty->lastname = strtoupper($request->input('lastname'));
    	$specialty->email = $request->input('email');
    	$specialty->phone = $request->input('phone');
    	$specialty->save();

    	$notification = 'Especialidad Creada Correctamente!';
    	$tiponoti = 'default';
    	//return back(); //lo deja donde esta
    	return redirect('/home')->with(compact('notification','tiponoti'));
    }



       public function destroy(Contacts $contact)
    {
    	    	
    	//DB::table('contacts')->where('id', $contact->id)->update(['stado'=>2]);
    	$contact->delete();

    	$notification = 'La Especialidad  ha sido eliminada Correctamente!';
    	$tiponoti = 'danger';
    	return redirect('/home')->with(compact('notification','tiponoti'));
    }
}
