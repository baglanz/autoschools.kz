@extends('layouts.main')

@section('title', 'Auto schools')

@section('content')

    <section class="text-gray-400 bg-gray-900 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Contact Us</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn
                    asymmetrical gentrify.</p>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <form action="{{ route('schools.store') }}" method="POST">
                    @csrf
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-400">Name</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    value="{{ old('name') }}"
                                >
                            </div>
                        </div>
                        @if($errors->has('name'))
                            <div>
                                <p class="text-red-500">{{ $errors->first('name') }}</p>
                            </div>
                        @endif
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="description" class="leading-7 text-sm text-gray-400">Description</label>
                                <textarea id="description" name="description"
                                          class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        @if($errors->has('description'))
                            <div>
                                <p class="text-red-500">{{ $errors->first('description') }}</p>
                            </div>
                        @endif
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-400">Address</label>
                                <input type="text" id="address" name="address"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        @if($errors->has('address'))
                            <div>
                                <p class="text-red-500">{{ $errors->first('address') }}</p>
                            </div>
                        @endif
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="image" class="leading-7 text-sm text-gray-400">Image</label>
                                <input type="text" id="image" name="image"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        @if($errors->has('image'))
                            <div>
                                <p class="text-red-500">{{ $errors->first('image') }}</p>
                            </div>
                        @endif
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="opening" class="leading-7 text-sm text-gray-400">Opening</label>
                                <input type="text" id="opening" name="opening"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        @if($errors->has('opening'))
                            <div>
                                <p class="text-red-500">{{ $errors->first('opening') }}</p>
                            </div>
                        @endif
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="rating" class="leading-7 text-sm text-gray-400">Rating</label>
                                <input type="number" step="0.1" id="rating" name="rating"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        @if($errors->has('rating'))
                            <div>
                                <p class="text-red-500">{{ $errors->first('rating') }}</p>
                            </div>
                        @endif
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="reviews" class="leading-7 text-sm text-gray-400">Reviews</label>
                                <input type="number" id="reviews" name="reviews"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        @if($errors->has('reviews'))
                            <div>
                                <p class="text-red-500">{{ $errors->first('reviews') }}</p>
                            </div>
                        @endif
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="phone" class="leading-7 text-sm text-gray-400">Phone</label>
                                <input type="tel" id="phone" name="phone"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        @if($errors->has('phone'))
                            <div>
                                <p class="text-red-500">{{ $errors->first('phone') }}</p>
                            </div>
                        @endif
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="whatsapp" class="leading-7 text-sm text-gray-400">Whatsapp</label>
                                <input type="text" id="whatsapp" name="whatsapp"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        @if($errors->has('whatsapp'))
                            <div>
                                <p class="text-red-500">{{ $errors->first('whatsapp') }}</p>
                            </div>
                        @endif
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="website" class="leading-7 text-sm text-gray-400">Website</label>
                                <input type="text" id="website" name="website"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        @if($errors->has('website'))
                            <div>
                                <p class="text-red-500">{{ $errors->first('website') }}</p>
                            </div>
                        @endif
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="instagram" class="leading-7 text-sm text-gray-400">Instagram</label>
                                <input type="text" id="instagram" name="instagram"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        @if($errors->has('instagram'))
                            <div>
                                <p class="text-red-500">{{ $errors->first('instagram') }}</p>
                            </div>
                        @endif
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="price" class="leading-7 text-sm text-gray-400">Price</label>
                                <input type="text" id="price" name="price"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        @if($errors->has('price'))
                            <div>
                                <p class="text-red-500">{{ $errors->first('price') }}</p>
                            </div>
                        @endif
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="2gis" class="leading-7 text-sm text-gray-400">2gis</label>
                                <input type="text" id="2gis" name="2gis"
                                       class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        @if($errors->has('2gis'))
                            <div>
                                <p class="text-red-500">{{ $errors->first('2gis') }}</p>
                            </div>
                        @endif
                        <div class="p-2 w-full">
                            <button type="submit"
                                    class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
