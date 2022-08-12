{{--
  Template Name: Members List
--}}

@extends('layouts.app')

@section('container')
  <main class="main">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.breadcrumbs')
    @include('partials.page-header')

    <article @php(post_class('container'))>
      <div class="content lg:mb-6 lg:p-6 w-full">
        @php(the_content())

        <h3 class="mt-6">List of OEG members</h3>
        <p class="mt-6 sustaining-label">@svg('icons/star-solid', 'h-4 -mt-2 inline-block text-blue-500') = Sustaining Member</p>

        <ul class="mt-10 ml-0 pl-0 members-list grid grid-cols-1 md:grid-cols-3 gap-4 grid-flow-col">
          @if ($members_list)
            @foreach ($members_list as $member)
              <li class="list-none ml-0 member-item font-sans bg-gray-white shadow border-gray-500 rounded border-2 p-4 hover:bg-blue-500 hover:color-blue-100">
                @if ($member->membership_status === 'Sustaining')
                  @svg('icons/star-solid', 'h-4 -mt-2 inline-block text-blue-500')
                @endif
                <a href="/members/view/?member_id={!! $member->id !!}">{!! $member->name !!}</a></li>
            @endforeach
          @else
            <p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M633.9 483.4C640.9 488.9 642 498.1 636.6 505.9C631.1 512.9 621 514 614.1 508.6L6.086 28.56C-.8493 23.08-2.033 13.02 3.443 6.086C8.918-.8493 18.98-2.033 25.91 3.443L633.9 483.4zM448 192H496C504.8 192 512 199.2 512 208C512 216.8 504.8 224 496 224H382.8L353.6 200.1C356.2 195.7 361.7 192 368 192H416V38.2L389.1 47.18C380.7 49.97 371.6 45.44 368.8 37.06C366 28.68 370.6 19.62 378.9 16.82L426.9 .8214C431.8-.8048 437.2 .0131 441.4 3.02C445.5 6.028 448 10.86 448 16L448 192zM319.1 144C319.1 153.4 318.4 162.4 315.4 170.8L287.7 148.1C287.9 147.4 288 145.7 288 144V80C288 53.49 266.5 32 240 32H208C191 32 176.1 40.82 167.6 54.12L142.4 34.23C156.8 13.54 180.8 .0006 208 .0006H240C284.2 .0006 320 35.82 320 80L319.1 144zM319.1 368C319.1 358.6 321.6 349.6 324.6 341.2L352.3 363C352.1 364.6 352 366.3 352 368V432C352 458.5 373.5 480 400 480H432C448.1 480 463.9 471.2 472.4 457.9L497.6 477.8C483.2 498.5 459.2 512 432 512H400C355.8 512 319.1 476.2 319.1 432V368zM223.1 480H271.1C280.8 480 287.1 487.2 287.1 496C287.1 504.8 280.8 512 271.1 512H143.1C135.2 512 127.1 504.8 127.1 496C127.1 487.2 135.2 480 143.1 480H191.1V326.2L165.1 335.2C156.7 337.1 147.6 333.4 144.8 325.1C142 316.7 146.6 307.6 154.9 304.8L202.9 288.8C207.8 287.2 213.2 288 217.4 291C221.5 294 223.1 298.9 223.1 304L223.1 480z"/></svg> 
            Error loading members list</p>
          @endif
        </ul>
      </div>
    </article>


    @endwhile

  </main>
@endsection
