<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NupirktaDetale;
use App\Models\Detale;

class DetaliuPirkimuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $nupirktadetale = NupirktaDetale::orderBy('id', 'asc')->get();
      return view('DetaliuPirkimai')->with('nupirktosdetales', $nupirktadetale);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
          'user_id' => 'required',
          'detale_id' => 'required',
          'pavadinimas' => 'required',
          'kiekis' => 'required',
          'kaina' => 'required'
        ]
      );

      $nupirktadetale = new NupirktaDetale();
      $nupirktadetale->user_id = $request->input('user_id');
      $nupirktadetale->detale_id = $request->input('detale_id');
      $nupirktadetale->pavadinimas = $request->input('pavadinimas');
      $kiekis = $request->input('kiekis');
      $kaina = $request->input('kaina');
      $kiekiokaina = $kiekis * $kaina;
      $nupirktadetale->kiekis = $kiekis;
      $nupirktadetale->kaina = $kiekiokaina;
      $nupirktadetale->save();

      return redirect('detale')->with('success', 'Sėkmingai nupirkote laukite patvirtinimo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
      $nupirktadetale = NupirktaDetale::find($id);
      $idDvi = $nupirktadetale->detale_id;
      $detale = Detale::find($idDvi);
      $kiekis = $detale->kiekis;
      $kiekis -= $nupirktadetale->kiekis;
      if ($kiekis >= 0) {
        // code...
        $detale->kiekis = $kiekis;
        $detale->save();
      }
      else{
        return redirect('DetaliuPirkimai')->withErrors('success', 'Patvirtinti negalima, nes sandelyje detalių nėra');
      }
      $patvirtinimas = 1;
      $nupirktadetale->patvirtinti = $patvirtinimas;

      $nupirktadetale->save();


      return redirect('DetaliuPirkimai')->with('success', 'Patvirtinta');
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
}
