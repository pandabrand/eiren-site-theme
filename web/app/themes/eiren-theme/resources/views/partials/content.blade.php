<article @php(post_class())>
  @includeWhen( has_post_thumbnail(), 'partials.content-thumbnail' )
  <div class="single-content">
    <header>
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
      @include('partials/entry-meta')
    </header>
    <div class="entry-summary">
      @php(the_excerpt())
    </div>
  </div>
</article>
