<article @php(post_class())>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    <div class="page-body">
      <div class="page-thumbnail px-4">
        @php( the_post_thumbnail( 'large', ['class' => 'img-fluid']))
      </div>
      <div class="page-content">
      @php(the_content())
      </div>
    </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
