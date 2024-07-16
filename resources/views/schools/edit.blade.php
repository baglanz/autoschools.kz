@extends('layouts.main')

@section('title', 'Edit auto schools')

@section('content')

    <section class="text-gray-400 bg-gray-900 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">{{ $school->name }}</h1>
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <form action="{{ route('schools.update', $school->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-400">Name</label>
                                <input type="text"
                                       id="name"
                                       name="name"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                       value="{{ $school->name }}"
                                >
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-400">Address</label>
                                <input type="text"
                                       id="address"
                                       name="address"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                       value="{{ $school->address }}"
                                >
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="description" class="leading-7 text-sm text-gray-400">Description</label>
                                <textarea id="description"
                                          name="description"
                                          class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                                >
                                    {{ $school->description }}
                                </textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="website" class="leading-7 text-sm text-gray-400">Website</label>
                                <input type="text"
                                       id="website"
                                       name="website"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                       value="{{ $school->website }}"
                                >
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="phone" class="leading-7 text-sm text-gray-400">Phone</label>
                                <input type="tel"
                                       id="phone"
                                       name="phone"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                       value="{{ $school->phone }}"
                                >
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
