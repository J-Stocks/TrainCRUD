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
                    Train Details
                </header>
                <div class="w-full p-6 text-gray-700">
                    <div class="mb-2">
                        @include('_train')
                    </div>
                    <p class="mb-2">
                        In Production from {{ $train->production_start }} to {{ $train->production_end }}.
                    </p>
                    <p class="mb-2">
                        {{ $train->description }}
                    </p>
                    <div class="flex">
                        <a href="{{ $train->path('edit') }}" class="w-1/2 mr-1 select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base text-center leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            Edit
                        </a>
                        <form method="post" action="{{ $train->path }}" class="w-1/2 ml-1">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base text-center leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
