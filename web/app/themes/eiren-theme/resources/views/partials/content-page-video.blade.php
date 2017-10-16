@if( have_rows( 'videos' ) )
  <div class="video-list">
  @while( have_rows( 'videos' ) )
    @php
      the_row();
      $video_url = get_sub_field( 'video_url' );
      $video_details = get_sub_field( 'video_details' );
    @endphp
    <div class="video-list-item">
      <div class="embed-responsive embed-responsive-16by9">
        {!!  $video_url !!}
      </div>
      @isset( $video_details )
        <div class="video-list-item-details">
          {!! $video_details !!}
        </div>
      @endisset
    </div>
  @endwhile
</div>
@endif
