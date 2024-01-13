<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\computer;

class ComputresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private static function getData() 
    {
        return [
            ['id'=>1, 'name'=> 'LG', 'origin'=> 'Kuria'],
            ['id'=>2, 'name'=> 'WIKO', 'origin'=> 'France'],
            ['id'=>3, 'name'=> 'HP', 'origin'=> 'USA']
        ];
    }
    public function index()
    {
        return view('computers.index',['computers'=> Computer::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computers.create');
    }


    public function store(Request $request)
    {

        $request->validate([
                'computer-name'=>['required'],
                'computer-origin'=>['required'],
                'computer-price'=>['required','integer']
        ]);

        $computer = new Computer();
        $computer->name = strip_tags($request->input('computer-name'));
        $computer->origin =strip_tags($request->input('computer-origin')); 
        $computer->price = strip_tags($request->input('computer-price'));
        $computer->save();

        return redirect()->route('computers.index');
    }

    public function show($id)
    {

        return view('computers.show',['computer'=> Computer::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('computers.edit',['computer'=>Computer::findOrFail($id)]);
            
            }

    public function update(Request $request, $id)
    {
        $request->validate([
                'computer-name'=>['required'],
                'computer-origin'=>['required'],
                'computer-price'=>['required','integer']
        ]);

        $computer_old = Computer::findOrFail($id);

        $computer_old->name = strip_tags($request->input('computer-name'));
        $computer_old->origin =strip_tags($request->input('computer-origin')); 
        $computer_old->price = strip_tags($request->input('computer-price'));
        $computer_old->save();

        return redirect()->route('computers.show',$id);
         
    }

    public function destroy($id)
    {
        $to_delete = Computer::findOrFail($id);
        $to_delete->delete();
        
        return redirect()->route('computers.index');
    }
}
