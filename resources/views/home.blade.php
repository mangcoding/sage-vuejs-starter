@extends('layouts.app')
@section('content')
  @while(have_posts()) @php(the_post())
    <div class="container">
      <section class="homepage d-flex align-items-center">
        <div class="content p-3 border border-aqua border-2">
          <h1 class="display-1 text-aqua">Homepage default</h1>
        </div>
      </section>
    </div>
  @endwhile
@endsection