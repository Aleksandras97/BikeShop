@extends('layouts.app')

@section('content')



<section id="main">
  <!-- <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Dashboard</div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif

                      You are logged in!
                  </div>
              </div>
          </div>
      </div>
  </div> -->
    <div class="row">
      <div class="features col-lg-6">
        <a href="#"><i class="icon fas fa-bicycle fa-5x"></i></a>
        <h3><a href="/dviratis">Dviračiai</a></h3>
      </div>
      <div class="features col-lg-6">
        <a href="#"><i class="icon fas fa-cog fa-5x"></i></a>
        <h3><a href="/detale">Detalės</a></h3>
      </div>

    </div>
  </section>



@endsection
