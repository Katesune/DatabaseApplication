@extends('layouts.welcome')

@section('title', 'Tabels')

@section('greeting')
    {{trans('tablename.greeting')}}
@endsection

@section('links_to_tabels')
    <a href="/clients" class="links"> {{trans('tablename.clients')}} </a>
    <a href="/employees" class="links"> {{trans('tablename.employees')}} </a>
    <a href="/films" class="links"> {{trans('tablename.films')}} </a>
    <a href="/orders" class="links"> {{trans('tablename.orders')}} </a>
    <a href="/workshifts" class="links"> {{trans('tablename.workshifts')}} </a>
    <a href="/ordersdetails" class="links"> {{trans('tablename.ordersdetails')}} </a>
    <a href="/schedule" class="links"> {{trans('tablename.employeetimework')}} </a>
@endsection

@section('hat')
 <div class="relative flex items-top justify-center sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
@endsection