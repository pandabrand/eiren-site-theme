@if( have_rows( 'albums' ) )
  <div class="row">
  @while( have_rows( 'albums' ) )
    @php
      the_row();
      $album_title = get_sub_field( 'album_title' );
      $album_image = get_sub_field( 'album_image' );
      $album_url = get_sub_field( 'album_url' );
      $album_image_src = wp_get_attachment_image_src($album_image, 'eiren-music_thumbnail');
    @endphp
    <div class="col-12 col-sm-6 my-4 px-4 album-block">
      <div class="card">
        @isset( $album_url )
          <a href="{{ $album_url }}" rel="external">
        @endisset
            <img class="card-img-top" src="{{ $album_image_src[0] }}" alt="Card image cap">
        @isset( $album_url )
          </a>
        @endisset
        <div class="card-body">
          <p class="card-text">{{ $album_title }}</p>
        </div>
      </div>
    </div>
  @endwhile
  </div>
@endif
