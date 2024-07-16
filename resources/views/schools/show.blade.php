@extends('layouts.main')

@section('title', $school->name)

@section('content')

    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-20 items-center justify-center flex-col">
            <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
            <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{ $school->name }}</h1>
                <p class="mb-8 leading-relaxed">{{ $school->description }}</p>
                <div class="flex justify-center">
                    <button class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">
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
        </div>
        <form method="POST" action="{{ route('schools.destroy', $school->id) }}" class="hidden" id="delete-form">
            @csrf
            @method('DELETE')
        </form>
    </section>

@endsection
