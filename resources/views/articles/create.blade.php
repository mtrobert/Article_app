@extends('layout')


@section('content')

<section class="section">

  <div class="container">
    <p class="title is fluid has-text-centered has-text-black-ter" style="margin-bottom: 3%; font-size: 325%; ">Create A New Article</p>
  </div>

  <div class="box" style="margin: auto; width:50%; margin-bottom: 2em;">

    <form action="{{ env('base_url') }}articles" method="POST">

        {{ csrf_field() }}

        <div class="field">

          <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Title" value="{{ old('title') }}">

        </div>

        <div class="field">

          <input class="input {{ $errors->has('subtitle') ? 'is-danger' : '' }}" type="text" name="subtitle" placeholder="Subtitle" value="{{ old('subtitle') }}">

        </div>


        <div class="field">

          <input class="input {{ $errors->has('owner') ? 'is-danger' : '' }}" type="text" name="owner" value="{{ old('owner') }}" placeholder="Owner" >

        </div>

        <div class="field">

          <textarea class="textarea {{ $errors->has('body') ? 'is-danger' : '' }}" name="body" rows="8" cols="80" placeholder="Body">{{ old('body') }}</textarea>

        </div>

        <div class="field">

          <button class="button" type="submit">Create An Article</button>

        </div>

        @include('errors')

      </form>

    </div>



</section>


@endsection
