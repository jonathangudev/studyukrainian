@extends('layouts.home_layout')

@section('css')

  <link href="css/home.css" rel="stylesheet">
  <link href="css/extra-styles.css" rel="stylesheet">


@endsection


@section('title')
 - Learn Ukrainian Online
@endsection

@section('content')

  <div class="row mt-5">
    <div class="col-sm-12 col-md-6 text-center">
      <div>
        <img class="img-fluid mx-auto" src="/img/logo.png"></img>
      </div>
      <div>
        <img class="img-fluid" src="/img/ctp.jpg"></img>
      </div>
    </div>

    <div class="col-sm-12 col-md-6">

      <div class="pt-5">
        <h1 class="mb-md-3">The most complete resource for learning Ukrainian language online</h1>

        <ul>
        <li>Learn Ukrainian naturally by listening to dialogues.</li>
        <li>Learn how to manage day-to-day situations in Ukrainian.</li>
        <li>Full grammar explanations and word-for-word translations of all dialogues.</li>
        </ul>
        <div class="text-center">
          <a href="/lessons" class="btn btn-sm btn-secondary mx-auto">Start learning now</a>
        </div>
      </div>

    </div>

    <hr class="mt-5 mb-5" style="width: 80%; color: black; height: 1px;" />

      <blockquote class="blockquote col-sm-12 col-md-4">
      <p class="testimonial-quotation mb-0 text-secondary">Thanks a lot for the website!  My grandparents were born in Ukraine and came to Brazil. Now I am trying to learn the language in honor of them.</p>
      <footer class="blockquote-footer">Derick</footer>
      </blockquote>

      <blockquote class="blockquote col-sm-12 col-md-4">
      <p class="testimonial-quotation mb-0 text-secondary">Hello, I wish to say thank you on behalf of my teacher. You have a wonderful training resource and we use your site to teach me Ukrainian 3 days per week.</p>
      <footer class="blockquote-footer">Alec</footer>
      </blockquote>

      <blockquote class="blockquote col-sm-12 col-md-4">
      <p class="testimonial-quotation mb-0 text-secondary">I really like your method for teaching Ukrainian. I am living in Kiev, and it is very helpful to me.</p>
      <footer class="blockquote-footer">Milad</footer>
      </blockquote>

  </div>

@endsection