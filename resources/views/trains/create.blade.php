@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">
            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    Create a Train
                </header>
                <div class="w-full p-6 text-gray-700">
                    <form method="post" action="{{ url('/trains') }}" class="inline-grid grid-cols-3 gap-2">
                        @csrf
                        <div class="flex flex-col justify-center">
                            <label for="make">Make</label>
                        </div>
                        <input
                            class="border border-gray-700 rounded px-2 py-1 @error ('make') border border-red-500 @enderror"
                            type="text"
                            name="make"
                            id="make"
                        />
                        <div>
                            @error ('make')
                                <p>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-col justify-center">
                            <label for="model">Model</label>
                        </div>
                        <input
                            class="border border-gray-700 rounded px-2 py-1 @error ('model') border border-red-500 @enderror"
                            type="text"
                            name="model"
                            id="model"
                        />
                        <div>
                            @error ('model')
                                <p>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-col justify-center">
                            <label for="production_start">Production Started</label>
                        </div>
                        <input
                            class="border border-gray-700 rounded px-2 py-1 @error ('production_start') border border-red-500 @enderror"
                            type="date"
                            name="production_start"
                            id="production_start"
                        />
                        <div>
                            @error ('production_start')
                                <p>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-col justify-center">
                            <label for="production_end">Production Ended</label>
                        </div>
                        <input
                            class="border border-gray-700 rounded px-2 py-1 @error ('production_end') border border-red-500 @enderror"
                            type="date"
                            name="production_end"
                            id="production_end"
                        />
                        <div>
                            @error ('production_end')
                                <p>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-col justify-center">
                            <label for="description">Description</label>
                        </div>
                        <input
                            class="border border-gray-700 rounded px-2 py-1 @error ('description') border border-red-500 @enderror"
                            type="text"
                            name="description"
                            id="description"
                        />
                        <div>
                            @error ('description')
                                <p>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <button type="submit" class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base text-center leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection
