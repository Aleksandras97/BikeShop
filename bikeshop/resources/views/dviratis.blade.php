@extends('layouts.app')

@section('content')

<section id="main">
  <a href="/dviratis"><button type="button" name="button" class="btn btn-success migtukas-atgal">Go back</button></a>
  <table class="table table-striped table-bordered">
    <thead class="thead-light">
      <tr>
        <th scope="col">kiekis</th>
        <th scope="col">įrašyti kieki</th>
        <th scope="col">kaina</th>
        <th scope="col">migtukas užsakyti</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <form action="/DviraciuPirkimai" method="post">
            @csrf
            @if(Auth::check())
            <input type="hidden" name="user_id" value="{{ Auth::user()->getId()}}">
            @else
            <input type="hidden" name="user_id" value="">
            @endif
            <input type="hidden" name="dviratis_id" value="{{ $dviratis->id }}">
            <input type="hidden" name="pavadinimas" value="{{ $dviratis->pavadinimas }}">
            <input type="hidden" name="kaina" value="{{ $dviratis->kaina }}">
            <th scope="col">{{$dviratis->kiekis}}</th>
            <th scope="col ginismas">
              @if(Auth::check())
              <div class="form-group">
                <label for="kiekis"></label>
                <input type="number" class="form-control" name="kiekis" id="kiekis" value="{{ old('kiekis')}}" placeholder="Iveskite kiekį">
              </div>
              @else
              @endif
            </th>
            <th scope="col">{{$dviratis->kaina}}</th>
            <th scope="col">
              @can('Prisijunges')
              @if ($dviratis->kiekis >= 1)
              <button type="submit" class="btn btn-lg btn-block btn-dark"><i class="fas fa-shopping-cart"></i> Užsakyti</button>
              @else
              <h2>Baigėsi</h2>
              @endif
              @endcan
            </th>
          </form>
        </tr>
    </tbody>
  </table>

    <div class="row">



      <div class="nuotraukos-dydis feature-box col-lg-7">
        @can('Admin')
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
        @endcan
        <img src="{{ $dviratis->nuotrauka}}" alt="sample85" />
      </div>
      <div class="feature-box col-lg-5">
        <form action="/DviraciuPirkimai" method="post">
          @csrf
          @if(Auth::check())
          <input type="hidden" name="user_id" value="{{ Auth::user()->getId()}}">
          @else
          <input type="hidden" name="user_id" value="">
          @endif
          <input type="hidden" name="dviratis_id" value="{{ $dviratis->id }}">
          <input type="hidden" name="pavadinimas" value="{{ $dviratis->pavadinimas }}">
          <input type="hidden" name="kaina" value="{{ $dviratis->kaina }}">
          <h2 class="prekes_pavadinimas">{{ $dviratis->pavadinimas }}</h2>
          <h2 class="prekes_pavadinimas" ><strong>Keikis sandelyje: </strong>{{ $dviratis->kiekis}}</h2>
          @if(Auth::check())
          <div class="form-group">
            <label for="kiekis"></label>
            <input type="number" class="form-control" name="kiekis" id="kiekis" value="{{ old('kiekis')}}" placeholder="Iveskite kiekį">
          </div>
          @else
          @endif
          <h3 class="prekes_kaina">{{ $dviratis->kaina}}€</h3>
          @can('Prisijunges')
          @if ($dviratis->kiekis >= 1)
          <button type="submit" class="btn btn-lg btn-block btn-dark"><i class="fas fa-shopping-cart"></i> Užsakyti</button>
          @else
          <h2>Baigėsi</h2>
          @endif
          @endcan
        </form>
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
