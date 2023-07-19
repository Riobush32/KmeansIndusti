@extends('auth')

@section('auth')
<div class="flex w-[100vw] justify-center items-center">
    <div class="navbar bg-base-100 absolute z-20 rounded-lg w-[97vw] top-5">
        <div class="flex-1">
            <div class="dropdown md:hidden">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    @guest
                    <li><a href="{{ route('login') }}">Sign-In</a></li>
                    <li><a href="{{ route('register') }}">Sign-Up</a></li>

                    @else
                    @if (Auth::user()->role == 'superadmin')
                    <li><a href="{{ url('/user') }}">User Data</a></li>
                    <li><a href="{{ url('/arsip') }}">Arsip</a></li>

                    @elseif (Auth::user()->role == 'admin')
                    <li><a href="{{ url('/arsip') }}">Arsip</a></li>
                    @endif

                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();">
                            {{ Auth::user()->name }}
                        </a>
                    </li>

                    @endguest

                </ul>
            </div>

            <a class="btn btn-ghost normal-case text-xl">Diskopdagin</a>
        </div>


        <div class="flex-none">

            @guest
            <a href="{{ route('login') }}"
                class="btn btn-outline btn-primary border-none mx-1 hidden md:flex">Sign-In</a>
            <a href="{{ route('register') }}"
                class="btn btn-outline btn-primary border-none mx-1 hidden md:flex">Sign-Up</a>

            @else
            @if (Auth::user()->role == 'superadmin')
            <a href="{{ url('/user') }}" class="btn btn-outline btn-primary border-none mx-1 hidden md:flex">User
                Data</a>
            <a href="{{ url('/arsip') }}" class="btn btn-outline btn-primary border-none mx-1 hidden md:flex">Arsip</a>
            @elseif (Auth::user()->role == 'admin')
            <a href="{{ url('/arsip') }}" class="btn btn-outline btn-primary border-none mx-1 hidden md:flex">Arsip</a>
            @endif

            <a href="" class="btn btn-outline btn-primary border-none mx-1 hidden md:flex">{{ Auth::user()->name }}</a>
            <a href="{{ route('logout') }}" class="btn btn-outline btn-primary border-none mx-1" onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();">
                Log-Out
            </a>

            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
            </form>

            @endguest
        </div>





    </div>
</div>

<div class="hero min-h-screen bg-base-200 bg-[url('../../../public/img/industri.png')]">
    <div class="hero-content text-center">
        <div class="max-w-md">
            <h1 class="text-5xl font-bold text-primary">Selamat Datang di Website </h1>
            <p class="py-6">Website Ini Merupakan Website Pengolahan Data </p>
        </div>
    </div>
</div>

@endsection