@extends('layouts.app')
@section('content')
  <div class="container">
    <section class="homepage d-flex align-items-center mt-5 py-5">
      <div class="content p-3 border border-aqua border-2">
        <h1 class="display-1 text-aqua">Homepage default</h1>
      </div>
    </section>
    <homepage-blog class="py-3 mb-5" id="bloglist"></homepage-blog>
  </div>
@endsection