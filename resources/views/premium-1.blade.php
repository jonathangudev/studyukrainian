@extends('layouts.layout')

@section('title')
 - Premium
@endsection

@section('css')
  <link href="../css/sticky-footer-navbar.css" rel="stylesheet"> <!-- from: http://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/# -->
  <link href="../css/extra-styles.css" rel="stylesheet">

@endsection


@section('content')

<main role="main" class="container">
  <div class="row justify-content-center">

      <div class="col-md-8 mt-3">
          <div class="card">
              <div class="card-header text-center">Study Ukrainian Premium</div>

              <div class="card-body">

                <b>Study Ukrainian</b> now features a premium section with the following features:

                <ul>
                  <li>Thematic vocabulary lists</li>
                  <li>Flashcards from Anki decks</li>
                  <li>Additional dialogues</li>
                  <li>Comprehensive grammar guide</li>
                </ul>

                <div class="text-center">
                  <button type="button" class="btn btn-success">Preview premium features</button>
                </div>

              </div>
            </div>
          </div>
        </div>

</main>


@endsection