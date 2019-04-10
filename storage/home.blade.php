@extends('home_layout')

@section('css')

  <link href="css/home.css" rel="stylesheet">

@endsection


@section('content')

  <div class="row mt-5">
    <div class="col-6 text-center">
      <div>
        <img class="img-fluid mx-auto" src="/img/logo.png"></img>
      </div>
      <div>
        <img class="img-fluid" src="/img/ctp.jpg"></img>
      </div>
    </div>

    <div class="col-6">

      <p>The most complete resource for learning Ukrainian language online.</p>

      <ul>
      <li>Learn Ukrainian naturally by listening to dialogues.</li>
      <li>Learn how to manage day-to-day situations in Ukrainian.</li>
      <li>Full grammar explanations and word-for-word translations of all dialogues.</li>
      </ul>
      <div class="text-center">
        <a href="/lessons" class="btn btn-lg btn-secondary mx-auto">Start learning now</a>
      </div>

    </div>

  </div>

@endsection