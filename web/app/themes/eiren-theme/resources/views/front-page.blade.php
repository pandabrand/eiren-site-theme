@extends('layouts.app')
@if ( has_post_thumbnail() )
  <style type="text/css" id="custom-background-css">
    body.home {
      background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.65) 0%, rgba(0, 0, 0, 0) 100%)
, url( {{{ wp_get_attachment_url(  get_post_thumbnail_id() ) }}} );
    }
  </style>
@endif
@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-front-page')
  @endwhile
@endsection
