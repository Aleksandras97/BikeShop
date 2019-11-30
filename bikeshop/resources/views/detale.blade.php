@extends('layouts.app')

@section('content')

<section id="main">
  <a href="/detale"><button type="button" name="button" class="btn btn-success migtukas-atgal">Go back</button></a>

    <div class="row">



      <div class="nuotraukos-dydis feature-box col-lg-7">
        <div class="paslinti-redaguoti-migtukai">
          <a href="/detale/{{ $detale->id }}/edit"><button class="btn btn-sm btn-dark" type="button">Redaguoti</button></a>

        </div>
        <div class="paslinti-redaguoti-migtukai">
          <form action="/detale/{{ $detale->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="sumbit" class="btn btn-sm btn-danger" type="button">Pašalinti</button>
          </form>
        </div>
        <img src="{{ $detale->nuotrauka}}" alt="sample85" />
      </div>
      <div class="feature-box col-lg-5">
        <h2 class="prekes_pavadinimas">{{ $detale->pavadinimas}}</h2>
        <h3 class="prekes_kaina">{{ $detale->kaina}}€</h3>
        <div class="kiekio_dydis input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Keikis sandelyje {{ $detale->kiekis}}</span>
          </div>
          <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <button class="btn btn-lg btn-block btn-dark" type="button">Pirkti</button>
      </div>

      <div class="table-responsive description-box col-lg-12">
        <table class="table-border table table-striped table-dark">
          <tr class="bg-primary">
            <th>description</th>
          </tr>
          <tr>
            <td>{{ $detale->aprasymas }}</td>
          </tr>
          <tr>
            <td>{{ $detale->prekeszenklas }}</td>
          </tr>
        </table>
      </div>

    </div>
  </section>

@endsection
