@extends('layouts.app')

@section('content')
<section class="pricing" id="main">
  <div class=" col-lg-2">
    <a href="dviratis/create"><button class="btn btn-lg btn-block btn-outline-dark" type="button">Pridėti Dvirati</button></a>

  </div>
  <h1>Dviračiai</h1>
  <div class="row">
    @if (count($dviraciai) > 0 )
      @foreach ($dviraciai as $dviratis)

            <div class="pricing-cards col-lg-4">
                <div class="card-img card">
                  <img src="{{ $dviratis->nuotrauka}}" alt="sample85" />
                  <div class="color-dviratis card-body">
                    <h3>{{ $dviratis->pavadinimas}}</h3>
                    <p>{{ $dviratis->kaina}} €</p>
                    <a href="dviratis/{{ $dviratis->id }}"><button class="btn btn-lg btn-block btn-outline-dark" type="button">Preview</button></a>

                  </div>
                </div>
              </div>

        @endforeach
    @endif
</div>
</section>

@endsection
