@extends('layouts.app')

@section('content')

<section id="main">
  <a href="/detale"><button type="button" name="button" class="btn btn-success migtukas-atgal">Go back</button></a>

    <div class="row">



      <div class="nuotraukos-dydis feature-box col-lg-7">
        @can('Admin')
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
        @endcan
        <img src="{{ $detale->nuotrauka}}" alt="sample85" />
      </div>
      <div class="feature-box col-lg-5">
        <form action="/DetaliuPirkimai" method="post">
          @csrf
          <input type="hidden" name="user_id" value="{{Auth::user()->getId()}}">
          <input type="hidden" name="detale_id" value="{{ $detale->id }}">
          <input type="hidden" name="pavadinimas" value="{{ $detale->pavadinimas }}">
          <input type="hidden" name="kaina" value="{{ $detale->kaina }}">
          <h2 class="prekes_pavadinimas">{{ $detale->pavadinimas }}</h2>
          <h2 class="prekes_pavadinimas" ><strong>Keikis sandelyje: </strong>{{ $detale->kiekis}}</h2>
          <div class="form-group">
            <label for="kiekis"></label>
            <input type="number" class="form-control" name="kiekis" id="kiekis" placeholder="Iveskite kiekį">
          </div>
          <h3 class="prekes_kaina">{{ $detale->kaina}}€</h3>
          @if ($detale->kiekis >= 1)
          <button type="submit" class="btn btn-lg btn-block btn-dark"><i class="fas fa-shopping-cart"></i> Pirkti</button>
          @else
          <h2>Baigėsi</h2>
          @endif
        </form>
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
