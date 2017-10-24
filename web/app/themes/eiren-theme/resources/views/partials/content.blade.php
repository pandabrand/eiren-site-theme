<article @php(post_class())>
  @includeWhen( ( !is_category( 'press' ) && has_post_thumbnail() ), 'partials.content-thumbnail' )
  <div class="single-content">
    @if( !is_category( 'press' ) )
      <header>
        <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
        @include('partials/entry-meta')
      </header>
    @endif
    <div class="entry-summary">
      @if( is_category( 'press' ) )
        @php( the_content() )
      @else
        @php(the_excerpt())
      @endif
    </div>
    @if( is_category( 'press' ) )
      <header>
        <h6 class="entry-title press">{{ get_the_title() }}</h6>
        @include('partials/entry-meta')
      </header>
    @endif
  </div>
</article>
