<div class="page-body">
  <div class="page-thumbnail px-4">
    @php( the_post_thumbnail( 'large', ['class' => 'img-fluid']))
  </div>
  <div class="page-content">
    @php(the_content())
  </div>
</div>
@includeWhen( is_page( 'writing' ), 'partials.content-page-writing' )
@includeWhen( is_page( 'music' ), 'partials.content-page-music' )
@includeWhen( is_page( 'video' ), 'partials.content-page-video' )
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
