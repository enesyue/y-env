@extends('layouts.app')

@section('content')
  <main id="main" class="main">
    @while(have_posts()) @php(the_post())
      @include('partials.page-header')
      @includeFirst(['partials.content-page', 'partials.content'])
    @endwhile
  </main>
@endsection
