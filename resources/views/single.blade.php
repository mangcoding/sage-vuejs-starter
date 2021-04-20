@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="container mt-5 pt-5">
      @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
    </div>
  @endwhile
@endsection
