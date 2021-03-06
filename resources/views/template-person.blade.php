{{--
  Template Name: Person Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <article @php(post_class('container flex flex-wrap'))>
    <div class="content lg:mb-6 lg:p-6 w-full lg:w-1/3 text-center lg:text-center">
      @component('components.person-image', [
       'src' => $featured_image_square,
       'size' => 'large'])
      @endcomponent
    </div>
    <div class="content lg:mb-6 py-6 lg:p-6 w-full lg:w-2/3">
      <h1 class="h1">{!! $title !!}</h1>
      @php(the_content())
    </div>
  </article>
  @endwhile
@endsection
