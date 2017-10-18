@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php(the_post())
    @include('partials.content-'.get_post_type())
  @endwhile

  <div class="nav-links d-flex justify-content-between">
    <div class="previous">{!! previous_posts_link( '&laquo; Previous' ) !!}</div>
    <div class="next">{!! next_posts_link( 'Next &raquo;' ) !!}</div>
  </div>
@endsection
