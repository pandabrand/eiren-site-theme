@php(the_content())
@includeWhen(is_page( 'writing' ), 'partials.content-page-writing' )
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
