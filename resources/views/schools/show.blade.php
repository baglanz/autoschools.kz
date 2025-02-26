@extends('layouts.main')

@section('title', $school->name)

@section('content')

    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/3 w-auto lg:h-auto h-64 object-cover object-center rounded"
                     src="https://dummyimage.com/400x400">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0 ml-4">
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $school->name }}</h1>
                    <div class="flex mb-4">
          <span class="flex items-center">
            <span class="flex items-center">
    @if ($rating !== null && $rating > 0)
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= floor($rating))
                            <!-- Полная звезда -->
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                        @elseif ($i == ceil($rating))
                            @if ($rating - floor($rating) >= 0.5)
                                <!-- Полная звезда для значения >= 0.5 -->
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                    </svg>
                            @else
                                <!-- Полу-заполненная звезда -->
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                        <defs>
                            <linearGradient id="grad" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="50%" stop-color="currentColor" />
                                <stop offset="50%" stop-color="transparent" />
                            </linearGradient>
                        </defs>
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" fill="url(#grad)"></path>
                    </svg>
                            @endif
                        @else
                            <!-- Пустая звезда -->
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                        @endif
                    @endfor
                @else
                    <!-- Скрыть поле если рейтинг отсутствует -->
                    <span>No rating available</span>
                @endif
</span>
            <span class="text-gray-600 ml-3">{{ $school->reviews }} Reviews</span>
          </span>
                        <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                   viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                   viewBox="0 0 24 24">
                <path
                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                   viewBox="0 0 24 24">
                <path
                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
                    </div>
                    <p class="leading-relaxed">{!! nl2br(e($school->description)) !!}</p>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                        <div class="flex">
                            <span class="text-gray-500">{{ $school->address }}</span>
                        </div>
                    </div>
                    @if($school->price)
                        <div class="flex">
                            <span class="title-font font-medium text-2xl text-gray-900">{{ $school->price }}</span>
                        </div>
                    @endif
                    @if(!empty($phones) && is_array($phones))
                        @foreach ($phones as $phone)
                            <div class="flex">
                                <span class="title-font font-medium text-2xl text-gray-900">{{ $phone }}</span>
                            </div>
                        @endforeach
                    @endif
                    @if(!empty($whatsapps) && is_array($whatsapps))
                        <div class="flex">
                            <ul>
                                @foreach ($whatsapps as $whatsapp)
                                    <span class="title-font font-medium text-2xl text-gray-900"><a href="{{ $whatsapp }}">WhatsApp</a></span>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if($school->{'2gis'})
                        <div class="flex">
                            <span class="title-font font-medium text-2xl"><a href="{{ $school->{'2gis'} }}" class="text-blue">Адрес на карте</a></span>
                        </div>
                    @endif
                    @if($school->instagram)
                        <div class="flex">
                            <span class="title-font font-medium text-2xl"><a href="{{ $school->instagram }}" class="text-blue">Instagram</a></span>
                        </div>
                    @endif
                    @foreach ($opening as $day => $hours)
                        <li>{{ $day }}: {{ $hours }}</li>
                    @endforeach
{{--                    @if($school->opening)--}}
{{--                        <div class="flex">--}}
{{--                            <span class="title-font font-medium text-2xl">{{ $school->opening }}</span>--}}
{{--                        </div>--}}
{{--                    @endif--}}
                </div>
            </div>
            <div class="flex justify-center mt-6">
                <button
                    class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">
                    <a href="{{ route('schools.edit', $school->id) }}">
                        Edit school
                    </a>
                </button>
                <button type="submit" form="delete-form"
                        class="ml-4 inline-flex text-white bg-red-600 border-0 py-2 px-6 focus:outline-none hover:bg-red-700 rounded text-lg">
                    Delete schools
                </button>
            </div>
        </div>
        <form method="POST" action="{{ route('schools.destroy', $school->id) }}" class="hidden" id="delete-form">
            @csrf
            @method('DELETE')
        </form>
    </section>

@endsection
