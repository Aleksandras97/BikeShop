@extends('layouts.app')

@section('content')

<section id="main">
    <div class="row">
      <div class="feature-box col-lg-12">
        <a href="/dviratis/{{ $dviratis->id }}"><button type="button" name="button" class="btn btn-success migtukas-atgal">Go back</button></a>
        <h1 class="keitimo_pavadinimas">Dviračio redagavimas</h1>
        <form  method="post" action="/dviratis/{{ $dviratis->id }}">
          @csrf
          @method('PUT')
          <div class="input-length form-group">
            <labelfor="pavadinimas">Pavadinimas</label>
            <input type="text" class="form-control" name="pavadinimas" id="pavadinimas" placeholder="pavadinimas" value="{{ $dviratis->pavadinimas }}">
          </div>
          <div class="input-length form-group">
            <labelfor="aprasymas">Aprasymas</label>
            <textarea class="form-control" id="aprasymas" name="aprasymas" rows="3">{{ $dviratis->aprasymas }}</textarea>
          </div>
          <div class="input-length form-group">
            <label for="kaina">Kaina</label>
            <input type="text" class="form-control" name="kaina" id="kaina" value="{{ $dviratis->kaina }}" placeholder="kaina">
          </div>
          <div class="input-length form-group">
            <label for="kiekis">Kiekis</label>
            <input type="text" class="form-control" name="kiekis" id="kiekis" value="{{ $dviratis->kiekis }}" placeholder="kiekis">
          </div>
          <div class="input-length form-group">
            <label for="prekeszenklas">Prekės ženklas</label>
            <input type="text" class="form-control" name="prekeszenklas" id="prekeszenklas" value="{{ $dviratis->prekeszenklas }}" placeholder="prekeszenklas">
          </div>
          <div class="input-length form-group">
            <label for="nuotrauka">Nuotrauka</label>
            <input type="text" class="form-control" name="nuotrauka" id="nuotrauka" value="{{ $dviratis->nuotrauka }}" placeholder="nuotrauka">
          </div>
          <button class="input-length btn btn-lg btn-block btn-dark" type="submit">Pridėti</button>
        </form>
      </div>

    </div>
  </section>

@endsection
