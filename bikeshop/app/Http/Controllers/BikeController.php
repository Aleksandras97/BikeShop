<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dviratis;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dviraciai = Dviratis::orderBy('kaina', 'asc')->get();
        return view('dviraciai')->with('dviraciai', $dviraciai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreateDviratis');
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

        $dviratis = new Dviratis();
        $dviratis->pavadinimas = $request->input('pavadinimas');
        $dviratis->aprasymas = $request->input('aprasymas');
        $dviratis->kaina = $request->input('kaina');
        $dviratis->kiekis = $request->input('kiekis');
        $dviratis->prekeszenklas = $request->input('prekeszenklas');
        $dviratis->nuotrauka = $request->input('nuotrauka');
        $dviratis->save();

        return redirect('dviratis')->with('success', 'Dviratis pridėtas sėkmingai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dviratis = Dviratis::find($id);

        return view('dviratis')->with('dviratis', $dviratis);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dviratis = Dviratis::find($id);

        return view('EditDviratis')->with('dviratis', $dviratis);
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
      $dviratis = Dviratis::find($id);
      $dviratis->pavadinimas = $request->input('pavadinimas');
      $dviratis->aprasymas = $request->input('aprasymas');
      $dviratis->kaina = $request->input('kaina');
      $dviratis->kiekis = $request->input('kiekis');
      $dviratis->prekeszenklas = $request->input('prekeszenklas');
      $dviratis->nuotrauka = $request->input('nuotrauka');
      $dviratis->save();


      return redirect('dviratis')->with('success', 'Dviratis sėkmingai redaguotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dviratis = Dviratis::find($id);
        $dviratis->delete();

        return redirect('dviratis')->with('success', 'Dviratis pašalintas sėkmingai');
    }
}
