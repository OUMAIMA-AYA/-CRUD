<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class PersonController extends Controller
{
    public function index(){
        $persons = Person::all();
        return view('home',compact('persons'));
    }
    
    public function create() {
        return view('create_person'); // Affiche le formulaire
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:50',
            'age' => 'required|integer',
            'gender' => 'required',
            'work' => 'required|max:100',
        ]);

        Person::create($validateData);

        return redirect('/')->with('success', 'Person added successfully');
    }

    public function show($id){
        $person = Person::whereId($id)->first();
        return view ('show_person', compact('person'));
    }

    public function delete ($id){
        $person = Person::find($id);
        $person->delete();
        return redirect('/');
    }
}
