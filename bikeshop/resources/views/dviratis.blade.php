@extends('layouts.app')

@section('content')

<section id="main">
  <a href="/dviratis"><button type="button" name="button" class="btn btn-success migtukas-atgal">Go back</button></a>

    <div class="row">



      <div class="nuotraukos-dydis feature-box col-lg-7">
        <div class="paslinti-redaguoti-migtukai">
          <a href="/dviratis/{{ $dviratis->id }}/edit"><button class="btn btn-sm btn-dark" type="button">Redaguoti</button></a>

        </div>
        <div class="paslinti-redaguoti-migtukai">
          <form action="/dviratis/{{ $dviratis->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="sumbit" class="btn btn-sm btn-danger" type="button">Pašalinti</button>
          </form>
        </div>
        <img src="{{ $dviratis->nuotrauka}}" alt="sample85" />
      </div>
      <div class="feature-box col-lg-5">
        <h2 class="prekes_pavadinimas">{{ $dviratis->pavadinimas}}</h2>
        <h3 class="prekes_kaina">{{ $dviratis->kaina}}€</h3>
        <div class="kiekio_dydis input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Keikis sandelyje {{ $dviratis->kiekis}}</span>
          </div>
          <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <button class="btn btn-lg btn-block btn-dark" type="button">Pirkti</button>
      </div>

      <div class="table-responsive description-box col-lg-12">
        <table class="table-border table table-striped table-dark">
          <tr class="bg-primary">
            <th>specification</th>
            <th>description</th>
          </tr>
          <tr>
            <td>frame</td>
            <td>A1 Premium Aluminum, Sport Trail 27.5 Geometry, Zero-Stack Head Tube, Internal Cable Routing, 135x9mm Forged Dropouts, Chainstay-Mounted Disc Brake, Replaceable alloy derailleur hanger</td>
          </tr>
          <tr>
            <td>fork</td>
            <td>SR SunTour XCE 28, Rx Tune, coil spring, 42mm offset, 80 / 100mm of travel (size-specific)</td>
          </tr>
        </table>
      </div>

    </div>
  </section>

@endsection
