<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pilote;

class PiloteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pilotes = pilote::all();

        return view('pilote/index', compact('pilotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pilote/create");
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
        $pilote = new pilote();
        $pilote->Nom = $request->Nom;
        $pilote->Prenom = $request->Prenom;
        $pilote->Date_Of_Birth = $request->Date_Of_Birth;
        $pilote->save();
        return redirect('pilotes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id == "all") {
            $result = Pilote::all();
        } else {
            $result = Pilote::where('id', $id)->get();
        }
        return view("ShowPilote", with(['AllPilotes' => $result]));
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pilote=pilote::find($id);
        return view ("pilote/edit",compact('pilote'));
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

        $pilote =pilote::find($id);
        $pilote->Nom = $request->Nom;
        $pilote->Prenom = $request->Prenom;
        $pilote->Date_Of_Birth = $request->Date_Of_Birth;
        $pilote->save();
        return redirect('pilotes');
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
    }
    public function Delete($id){
        $pilote=Pilote::find($id);
        $pilote->delete();
        return redirect('pilotes'); 
    }
}
