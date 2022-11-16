{{-- ANAk, BEDAH MULUT, BEDAH UMUM, GIGI, JANTUNG DAN PEMBULUH DARAH, KEBIDANAN DAN KANDUNGAN, KEDOKTERAN JIWA, KULIT DAN KELAMIN --}}


@extends('layouts.frontend')

@section('content')
    <section class="bg-gray-100 dark:bg-gray-900 py-48">
        <div class="flex flex-col items-center justify-center px-6 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src={{ asset('assets/medicine.png') }} alt="logo">
                {{ config('app.name', 'Laravel') }}
            </a>
            @if (session()->has('success'))
                <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                        {{ session('success') }}
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                        data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @endif

            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-screen-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Appointment
                    </h1>
                    <form class="space-y-4 md:space-y-6" action={{ route('Pendaftaran.Store') }} method="POST">
                        @csrf
                        <div>
                            <label for="id_user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                Pasien</label>
                            <select id="id_user"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a country</option>
                                <option value="id_user">Syifa</option>
                                <option value="CA">Melhanda</option>
                            </select>
                            @if ($errors->has('id_user'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Oops!</span> {{ $errors->first('id_user') }}</p>
                            @endif
                        </div>
                        <div>
                            <label for="poli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                Poli</label>
                            <select id="poli"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih Poli</option>
                                <option value="US">ANAK</option>
                                <option value="CA">BEDAH MULUT</option>
                                <option value="FR">GIGI</option>
                                <option value="DE">JANTUNG DAN PEMBULUH DARAH</option>
                            </select>
                            @if ($errors->has('poli'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Oops!</span> {{ $errors->first('poli') }}</p>
                            @endif
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
