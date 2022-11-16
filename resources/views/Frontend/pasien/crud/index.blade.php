@extends('layouts.frontend')

@section('content')
    <div class="overflow-x-auto py-48 px-10">
        <div class="mx-auto flex justify-between px-48">
            <h1 class="text-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Data Pasien
            </h1>
            <a href={{ route('Pendaftaran.Index') }}
                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Tambah Pasien
            </a>
        </div>
        <div class="min-w-screen flex items-center justify-center bg-gray-100 font-sans overflow-hidden ">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">No.RM</th>
                                <th class="py-3 px-6 text-left">Nama</th>
                                <th class="py-3 px-6 text-left">NIk</th>
                                <th class="py-3 px-6 text-left">Tempat, Tanggal Lahir</th>
                                <th class="py-3 px-6 text-left">Umur</th>
                                <th class="py-3 px-6 text-left">Alamat</th>
                                <th class="py-3 px-6 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($pasien as $item)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="font-bold">{{ $item->no_rm }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span>{{ $item->nama }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <span>{{ $item->nik }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <span>{{ $item->tempat_lahir }},
                                            {{ date('d M Y', strtotime($item->tanggal_lahir)) }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <span>{{ $item->umur }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <span>{{ $item->alamat }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex item-center justify-center">
                                            <a href='#'
                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                            <a href="#"
                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                @empty($users)
                    <div class="bg-white shadow-md rounded my-6 p-10">
                        <div class="relative w-1/2 mx-auto p-8 text-center border border-gray-200 rounded-lg">

                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                            <h2 class="text-2xl font-medium dark:text-white mb-2">
                                Belum ada data
                            </h2>

                            <a href={{ route('Pendaftaran.Index') }}
                                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                Tambah Pasien
                            </a>
                        </div>
                    </div>
                @endempty
            </div>
        </div>
    </div>
@endsection
