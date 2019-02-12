@extends('layout')


@section('content')
  <section class="section">

      @foreach ($articles as $article)
        <div class="content">
          <p>
          {{$article->title}}
          </p>

        </div>
      @endforeach

  </section>
@endsection
