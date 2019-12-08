@extends('layouts.app')

@section('content')
@php
  use App\User;
@endphp
  <section id="main">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Pirkejo vardas</th>
          <th scope="col">PrekesId</th>
          <th scope="col">Pavadinimas</th>
          <th scope="col">kiekis</th>
          <th scope="col">kiana €</th>
          <th scope="col">patvirtinimas</th>
        </tr>
      </thead>
          @if (count($nupirktosdetales) > 0 )
            <tbody>
              @foreach ($nupirktosdetales as $nupirktadetale)
              @php
                $id = $nupirktadetale->user_id;
                $user = User::find($id);
              @endphp
                <tr>
                  <th scope="col">{{$nupirktadetale->id}}</th>
                  <th scope="col">{{$user->name}}</th>
                  <th scope="col">{{$nupirktadetale->detale_id}}</th>
                  <th scope="col">{{$nupirktadetale->pavadinimas}}</th>
                  <th scope="col">{{$nupirktadetale->kiekis}}</th>
                  <th scope="col">{{$nupirktadetale->kaina}} €</th>
                  <th scope="col">
                    <form  method="post" action="/DetaliuPirkimai/{{ $nupirktadetale->id }}">
                      @csrf
                      @method('PUT')
                      @if($nupirktadetale->patvirtinti)

                      @else
                      <a href="/DetaliuPirkimai/{{ $nupirktadetale->id }}/edit"><button type="submit" class="btn btn-primary">Patvirtinti</button></a>
                      @endif
                      @if($nupirktadetale->patvirtinti)
                      <span class="badge badge-success">Patvirtinta</span>
                      @else
                      <span class="badge badge-danger">Nepatvirtinta</span>
                      @endif
                    </form>
                  </th>
                </tr>
              @endforeach
            </tbody>

          @endif
    </table>
  </section>
@endsection
