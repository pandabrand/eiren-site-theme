@php($headline = get_field('headline'))
  @if( $headline )
    <div class="h2">{{{ $headline }}}</div>
  @endif
@php(the_content())
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
