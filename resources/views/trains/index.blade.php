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
                    Trains
                </header>
                <div class="w-full p-6">
                    @if (count($trains) !== 0)
                        <div class="grid gap-2 xl:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
                            @foreach ($trains as $train)
                                <div class="border border-blue-900 rounded p-1 hover:bg-gray-200">
                                    <a href="{{ url($train->path) }}">
                                        @include('_train')
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-2">
                            {{ $trains->links() }}
                        </div>
                    @else
                        <p>
                            We don't have any trains!
                        </p>
                    @endif
                </div>
            </section>
        </div>
    </main>
@endsection
