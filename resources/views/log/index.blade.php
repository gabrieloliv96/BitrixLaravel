@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content')
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __("Logs") }}
            </h2>
            <br>
            @foreach($logs as $log)
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul>
                        <li>{{ $log->description_payload }}</li>
                        <br>
                        <li>{{ $log->created_at }}</li>
                    </ul>
                </div>
            </div>
            <br>
            @endforeach
        </div>
    </div>
</x-app-layout>
@stop