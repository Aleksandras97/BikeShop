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
          @if (count($nupirktidviraciai) > 0 )
            <tbody>
              @foreach ($nupirktidviraciai as $nupirktasdviratis)
              @php
                $id = $nupirktasdviratis->user_id;
                $user = User::find($id);
              @endphp
                <tr>
                  <th scope="col">{{$nupirktasdviratis->id}}</th>
                  <th scope="col">{{$user->name}}</th>
                  <th scope="col">{{$nupirktasdviratis->dviratis_id}}</th>
                  <th scope="col">{{$nupirktasdviratis->pavadinimas}}</th>
                  <th scope="col">{{$nupirktasdviratis->kiekis}}</th>
                  <th scope="col">{{$nupirktasdviratis->kaina}} €</th>
                  <th scope="col">
                    <form  method="post" action="/DviraciuPirkimai/{{ $nupirktasdviratis->id }}">
                      @csrf
                      @method('PUT')
                      @if($nupirktasdviratis->patvirtinti)

                      @else
                      <a href="/DviraciuPirkimai/{{ $nupirktasdviratis->id }}/edit"><button type="submit" class="btn btn-primary">Patvirtinti</button></a>
                      @endif
                      @if($nupirktasdviratis->patvirtinti)
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
