@extends('layouts.app')

@section('content')

<section id="main">
    <div class="row">
      <div class="feature-box col-lg-12">
        <a href="/dviratis"><button type="button" name="button" class="btn btn-success migtukas-atgal">Go back</button></a>
        <h1 class="keitimo_pavadinimas">Dviračio Pridėjimas</h1>
          <form  method="post" action="/dviratis">
            @csrf
            <div class="input-length form-group">
              <labelfor="pavadinimas">Pavadinimas</label>
              <input type="text" class="form-control" name="pavadinimas" id="pavadinimas" placeholder="pavadinimas" value="{{ old('pavadinimas')}}">
            </div>
            <div class="input-length form-group">
              <labelfor="aprasymas">Aprasymas</label>
              <textarea class="form-control" id="aprasymas" name="aprasymas" value="{{ old('aprasymas')}}" rows="3"></textarea>
            </div>
            <div class="input-length form-group">
              <label for="kaina">Kaina</label>
              <input type="text" class="form-control" name="kaina" id="kaina" value="{{ old('kaina')}}" placeholder="kaina">
            </div>
            <div class="input-length form-group">
              <label for="kiekis">Kiekis</label>
              <input type="text" class="form-control" name="kiekis" id="kiekis" value="{{ old('kiekis')}}" placeholder="kiekis">
            </div>
            <div class="input-length form-group">
              <label for="prekeszenklas">Prekės ženklas</label>
              <input type="text" class="form-control" name="prekeszenklas" id="prekeszenklas" value="{{ old('prekeszenklas')}}" placeholder="prekeszenklas">
            </div>
            <div class="input-length form-group">
              <label for="nuotrauka">Nuotrauka</label>
              <input type="text" class="form-control" name="nuotrauka" id="nuotrauka" value="{{ old('nuotrauka')}}" placeholder="nuotrauka">
            </div>
            <button class="input-length btn btn-lg btn-block btn-dark" type="submit">Pridėti</button>
          </form>
      </div>

    </div>
  </section>

@endsection
