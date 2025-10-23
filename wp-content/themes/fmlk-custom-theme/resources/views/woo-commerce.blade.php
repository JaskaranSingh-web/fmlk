@extends('layouts.app')

@section('content')
<div class="my-20"></div>
  @while(have_posts()) @php the_post() @endphp
    @php the_content() @endphp
  @endwhile
@endsection