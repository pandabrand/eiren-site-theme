@if( have_rows( 'writing_group' ) )
  @while( have_rows( 'writing_group' ) )
    @php
      the_row();
      $group_name = get_sub_field( 'group_name' );
      $writing_detail = get_sub_field( 'writing_detail' );
    @endphp
    @isset( $group_name )
      <h3>{{ $group_name }}</h3>
    @endisset
    @isset( $writing_detail )
      <div class="writing-list">
        @foreach( $writing_detail as $writingArray )
          @include( 'partials.content-page-writing-detail', $writingArray )
        @endforeach
      </div>
    @endisset
  @endwhile
@endif
