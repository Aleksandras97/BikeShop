<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NupirktasDviratis;
use App\Models\Dviratis;

class DviraciuPirkimuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $nupirktidviraciai = NupirktasDviratis::orderBy('id', 'asc')->get();
      return view('DviraciuPirkimai')->with('nupirktidviraciai', $nupirktidviraciai);
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
          'dviratis_id' => 'required',
          'pavadinimas' => 'required',
          'kiekis' => 'required',
          'kaina' => 'required'
        ]
      );

      $nupirktidviraciai = new NupirktasDviratis();
      $nupirktidviraciai->user_id = $request->input('user_id');
      $idDvi = $request->input('dviratis_id');
      $nupirktidviraciai->dviratis_id = $idDvi;
      $nupirktidviraciai->pavadinimas = $request->input('pavadinimas');

      $dviratis = Dviratis::find($idDvi);
      $kiekisDvi = $dviratis->kiekis;
      $kiekis = $request->input('kiekis');
      if ($kiekis < 0 || $kiekis > $kiekisDvi) {
        return redirect('dviratis/ '. $request->input('dviratis_id'))->with('danger', 'Užsakymo klaida, nes sandelyje tiek dviračių nėra');
      }
      $kaina = $request->input('kaina');
      $kiekiokaina = $kiekis * $kaina;
      $nupirktidviraciai->kiekis = $kiekis;
      $nupirktidviraciai->kaina = $kiekiokaina;
      $nupirktidviraciai->save();

      return redirect('dviratis')->with('success', 'Sėkmingai užsakėte laukite patvirtinimo!');
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
      $nupirktidviraciai = NupirktasDviratis::find($id);
      $idDvi = $nupirktidviraciai->dviratis_id;
      $dviratis = Dviratis::find($idDvi);
      $kiekis = $dviratis->kiekis;
      $kiekis -= $nupirktidviraciai->kiekis;
      if ($kiekis >= 0) {
        // code...
        $dviratis->kiekis = $kiekis;
        $dviratis->save();
      }
      else{
        return redirect('DviraciuPirkimai')->with('danger', 'Patvirtinti negalima, nes sandelyje tiek dviračių nėra');
      }
      $patvirtinimas = 1;
      $nupirktidviraciai->patvirtinti = $patvirtinimas;

      $nupirktidviraciai->save();


      return redirect('DviraciuPirkimai')->with('success', 'Patvirtinta');
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
