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
                    <form method="post" action="{{ url('/trains') }}">
                        @csrf
                        <div>
                            <label for="make">Make</label>
                            <input
                                class="@error ('make') border border-red-500 @enderror"
                                type="text"
                                name="make"
                                id="make"
                            />
                            @error('make')
                                <div>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="model">Model</label>
                            <input
                                class="@error ('model') border border-red-500 @enderror"
                                type="text"
                                name="model"
                                id="model"
                            />
                            @error('model')
                            <div>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label for="production_start">Production Started</label>
                            <input
                                class="@error ('production_start') border border-red-500 @enderror"
                                type="date"
                                name="production_start"
                                id="production_start"
                            />
                            @error('production_start')
                            <div>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label for="production_end">Production Ended</label>
                            <input
                                class="@error ('production_end') border border-red-500 @enderror"
                                type="date"
                                name="production_end"
                                id="production_end"
                            />
                            @error('production_end')
                            <div>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label for="description">Description</label>
                            <input
                                class="@error ('description') border border-red-500 @enderror"
                                type="text"
                                name="description"
                                id="description"
                            />
                            @error('description')
                            <div>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <input type="submit" value="Create">
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection
