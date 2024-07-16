@extends('layouts.main')

@section('title', 'Home page')

@section('content')

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-20 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($schools as $school)
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                 src="https://dummyimage.com/720x400" alt="blog">
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">
                                    CATEGORY</h2>
                                <h1 class="title-font text-lg font-medium text-white mb-3">{{ $school->name }}</h1>
                                <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings
                                    jianbing microdosing tousled waistcoat.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="{{ route('schools.show', $school->id) }}" class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-6">
                <a href="/schools">See all schools</a>
            </div>
        </div>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($instructors as $instructor)
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                 src="https://dummyimage.com/720x400" alt="blog">
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">
                                    CATEGORY</h2>
                                <h1 class="title-font text-lg font-medium text-white mb-3">{{ $instructor->name }}</h1>
                                <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings
                                    jianbing microdosing tousled waistcoat.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="{{ route('instructors.show', $instructor->id) }}" class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-6">
                <a href="/instructors">See all instructors</a>
            </div>
        </div>
    </section>

@endsection
