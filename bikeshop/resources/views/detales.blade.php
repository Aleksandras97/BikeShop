@extends('layouts.app')

@section('content')

<section class="pricing" id="main">
  @can('Admin')
  <div class=" col-lg-2">
    <a href="detale/create"><button class="btn btn-lg btn-block btn-outline-dark" type="button">Pridėti Detale</button></a>

  </div>
  @endcan
  <h1>Detalės</h1>
  <div class="row">
    @if (count($detales) > 0 )
      @foreach ($detales as $detale)

            <div class="pricing-cards col-lg-4">
                <div class="card-img card">
                  <img src="{{ $detale->nuotrauka}}" alt="sample85" />
                  <div class="color-dviratis card-body">
                    <h3>{{ $detale->pavadinimas}}</h3>
                    <p>{{ $detale->kaina}} €</p>
                    <a href="detale/{{ $detale->id }}"><button class="btn btn-lg btn-block btn-outline-dark" type="button">Preview</button></a>

                  </div>
                </div>
              </div>

        @endforeach
    @endif
</div>
</section>

@endsection
