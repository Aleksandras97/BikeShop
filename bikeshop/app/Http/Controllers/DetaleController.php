<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detale;

class DetaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detales = Detale::orderBy('kaina', 'asc')->get();
        return view('detales')->with('detales', $detales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreateDetale');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,
        [
          'pavadinimas' => 'required',
          'aprasymas' => 'required',
          'kaina' => 'required',
          'kiekis' => 'required',
          'prekeszenklas' => 'required',
          'nuotrauka' => 'required'
        ]
      );

      $detale = new Detale();
      $detale->pavadinimas = $request->input('pavadinimas');
      $detale->aprasymas = $request->input('aprasymas');
      $detale->kaina = $request->input('kaina');
      $detale->kiekis = $request->input('kiekis');
      $detale->prekeszenklas = $request->input('prekeszenklas');
      $detale->nuotrauka = $request->input('nuotrauka');
      $detale->save();

      return redirect('detale')->with('success', 'Detale pridėta sėkmingai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $detale = Detale::find($id);

      return view('detale')->with('detale', $detale);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $detale = Detale::find($id);

      return view('Editdetale')->with('detale', $detale);
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
      $detale = Detale::find($id);
      $detale->pavadinimas = $request->input('pavadinimas');
      $detale->aprasymas = $request->input('aprasymas');
      $detale->kaina = $request->input('kaina');
      $detale->kiekis = $request->input('kiekis');
      $detale->prekeszenklas = $request->input('prekeszenklas');
      $detale->nuotrauka = $request->input('nuotrauka');
      $detale->save();

      return redirect('detale')->with('success', 'Detale redaguota sėkmingai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $detale = Detale::find($id);
      $detale->delete();

      return redirect('detale')->with('success', 'Detalė pašalinta sėkmingai');
    }
}
