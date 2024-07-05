@extends('layouts.app')

@section('content')
    <!-- component -->
    <div class="flex gap-0 h-92vh lg:grid-cols-2 md:grid-cols-2">

        <div class="relative w-40 h-full bg-center bg-cover md:flex-wrap-reverse"
             style="background-image: url('/images/login_banner.jpg'); background-repeat: no-repeat; background-position: center center;">
            <div class="absolute inset-0 bg-green-300 opacity-30">

            </div>
            <div class="flex justify-center items-center h-full text-center text-white">

                <div>
                    <div>
                        <!-- Contenu centré -->
                        <h1 class="text-4xl font-bold">
                           Fareeda
                        </h1>
                      </div>
                      <div>
                       <x-social-media />
                      </div>
                </div>
            </div>
        </div>

        <div class="flex items-center w-60">
            <div class="grid-cols-3 w-full">

                    <div class="flex flex-col justify-center items-center h-full">

                        {{ $left_side }}

                        <div class="absolute bottom-8 items-cent">

                            <ul class="flex gap-4">

                                <li class="">
                                    <i class="fa fa-users"></i>
                                    <a href="{{ route('staff-login') }}"> Connexion du personnel</a></li>

                                <li class="">
                                    <i class="fa fa-users"></i>
                                    <a href="{{ route('staff-login.customer') }}"> Connexion client</a>
                                </li>

                                <li class="">  <i class="fa fa-truck"></i>
                                    <a href="{{ route('staff-login.delivery') }}">Delivery Guy Login</a>
                                </li>
                            </ul>
                        </div>
                        </div>
            </div>
        </div>
    </div>




    {{-- <div>

        <div class="flex relative items-center h-95vh">


            <div class="relative h-full lg:block" style="background-image: url('images/login_banner.jpg'">

                <img src="{{ asset('images/login_banner.jpg') }}" alt="Placeholder" class="object-cover w-full h-full">

                <div class="absolute inset-0 bg-black opacity-40"></div>

            </div>


            <div class="flex relative items-center w-10/12 h-full md:px-52">

                <div class="grid-cols-3 w-full">
                    <div>
                        <div class="flex flex-col justify-center items-center h-full">

                            {{ $left_side }}

                            <div class="absolute bottom-8 items-cent">

                                <ul class="flex gap-4">

                                    <li class=""><a href="{{ route('staff-login') }}"> Connexion du personnel</a></li>

                                    <li class=""><a href="{{ route('staff-login.customer') }}"> Connexion client</a>
                                    </li>

                                    <li class=""><a href="{{ route('staff-login.delivery') }}">Delivery Guy Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div> --}}
@endsection
{{--
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: rgba(41, 199, 172, .3);
} --}}
