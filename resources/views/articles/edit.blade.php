@extends('layout')

@section('content')

  <div class="container">
    <p class="title is fluid has-text-centered has-text-black-ter" style="margin-bottom: 3%; font-size: 325%; ">Edit an Article</p>
  </div>

  <div class="box" style="margin: auto; width:50%; margin-bottom: 2em;">

    <form action="{{ env('base_url') }}articles/{{$article->id}}" method="POST">

        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="field">

          <label for="title" class="label">Title</label>

          <input class="input" type="text" name="title" placeholder="Title" value="{{ $article->title }}">

        </div>

        <div class="field">

          <label for="susbtitle" class="label">Subtitle</label>

          <input class="input {{ $errors->has('subtitle') ? 'is-danger' : '' }}" type="text" name="subtitle" placeholder="Subtitle" value="{{ $article->subtitle}}">

        </div>


        <div class="field">

          <label for="owner" class="label">Owner</label>

          <input class="input {{ $errors->has('owner') ? 'is-danger' : '' }}" type="text" name="owner" value="{{ $article->owner}}" placeholder="Owner" >

        </div>

        <div class="field">

          <label for="body" class="label">Body</label>

          <textarea class="textarea {{ $errors->has('body') ? 'is-danger' : '' }}" name="body" rows="8" cols="80" placeholder="Body">{{ $article->body }}</textarea>

        </div>

        <div class="field">

          <button class="button" type="submit">Update An Article</button>

        </div>

        @include('errors')

      </form>

    </div>




@endsection
