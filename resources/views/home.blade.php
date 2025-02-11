@extends('layouts.main')

@section ('title', 'Circuito de Conhecimentos' )

@section('header')
@endsection

@section('content')
@include('components.herosection')

@endsection

@section('footer')
dasjbdisaldghsajlhkdsa.jdoçsa
@endsection



{{-- ESTRUTURA PARA LISTAGEM DE POSTS (AGUARDANDO CRIAÇÃO DE CONTROLLERS) --}}
   {{-- <div class="p-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="font-semibold text-xl mb-4">Posts Recentes</h2>
                    @foreach ($posts as $post)
                        <div class="p-4 mb-4 rounded-lg shadow-sm">
                            <h3 class="font-semibold text-lg">{{ $post->title }}</h3>
                            <p>{{ $post->content }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="font-semibold text-xl mb-4">Posts Recentes</h2>
                    @foreach ($posts as $post)
                        <div class="p-4 mb-4 rounded-lg shadow-sm">
                            <h3 class="font-semibold text-lg">{{ $post->title }}</h3>
                            <p>{{ $post->content }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>--}}