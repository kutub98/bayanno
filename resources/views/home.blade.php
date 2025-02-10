@extends('layouts.frontend.default')
@section('content')
    <div class="">
        @include('components.banner')
        @include('components.latestnews')
    </div>


    {{-- সাম্প্রতিক খবর start --}}

    <div class="w-full max-w-screen-2xl px-6 py-10 mx-auto bg-white" id="recenet">
        <div class="flex flex-row gap-3 items-center  ">
            <span class="relative flex size-3">
                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
                <span class="relative inline-flex size-3 rounded-full bg-red-500"></span>
            </span>
            <h1 class="text-xl font-bold text-gray-700"> সাম্প্রতিক খবর </h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 my-6">
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>


        </div>
        <div class="flex justify-end items-center">
            <a href="#"
                class="bg-red-500 hover:scale-100 transition duration-500 px-6 py-2 rounded text-white hover:bg-red-600">
                <h1 class=" ">আরো দেখুন</h1>
            </a>
        </div>
    </div>
    {{-- সাম্প্রতিক খবর end --}}


    {{-- রাজনীতি start --}}
    <div class="w-full max-w-screen-2xl px-6 py-10 mx-auto bg-white my-10" id="rajnithi">
        <div class="flex flex-row gap-3 items-center  ">
            <span class="relative flex size-3">
                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
                <span class="relative inline-flex size-3 rounded-full bg-red-500"></span>
            </span>
            <h1 class="text-xl font-bold text-gray-700"> রাজনীতি </h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 my-6">
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>


        </div>
        <div class="flex justify-end items-center">
            <a href="#"
                class="bg-red-500 hover:scale-100 transition duration-500 px-6 py-2 rounded text-white hover:bg-red-600">
                <h1 class=" ">আরো দেখুন</h1>
            </a>
        </div>
    </div>
    {{-- রাজনীতি end --}}


    {{-- advertisement banner start --}}
    <div class="w-full max-w-screen-2xl relative mx-auto my-10">

        <img class=" md:w-full max-w-full object-cover" src="{{ asset('image/banner.jpg') }}"
            alt="image description">
    </div>
    {{-- advertisement banner end --}}



    {{-- বাংলাদেশ start --}}
    <div class="w-full max-w-screen-2xl px-6 py-10 mx-auto bg-white my-10" id="rajnithi">
        <div class="flex flex-row gap-3 items-center  ">
            <span class="relative flex size-3">
                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
                <span class="relative inline-flex size-3 rounded-full bg-red-500"></span>
            </span>
            <h1 class="text-xl font-bold text-gray-700"> বাংলাদেশ </h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 my-6">
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>


        </div>
        <div class="flex justify-end items-center">
            <a href="#"
                class="bg-red-500 hover:scale-100 transition duration-500 px-6 py-2 rounded text-white hover:bg-red-600">
                <h1 class=" ">আরো দেখুন</h1>
            </a>
        </div>
    </div>
    {{-- বাংলাদেশ end --}}


    {{-- অপরাধ start --}}
    <div class="w-full max-w-screen-2xl px-6 py-10 mx-auto bg-white my-10" id="rajnithi">
        <div class="flex flex-row gap-3 items-center  ">
            <span class="relative flex size-3">
                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
                <span class="relative inline-flex size-3 rounded-full bg-red-500"></span>
            </span>
            <h1 class="text-xl font-bold text-gray-700"> অপরাধ </h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 my-6">
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>


        </div>
        <div class="flex justify-end items-center">
            <a href="#"
                class="bg-red-500 hover:scale-100 transition duration-500 px-6 py-2 rounded text-white hover:bg-red-600">
                <h1 class=" ">আরো দেখুন</h1>
            </a>
        </div>
    </div>
    {{-- অপরাধ end --}}


    {{-- বিনোদন  start --}}

    <div class="w-full bg-white my-10 max-w-screen-2xl mx-auto px-6 py-6 h-auto">
        <div class="flex flex-row gap-3 items-center  ">
            <span class="relative flex size-3">
                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
                <span class="relative inline-flex size-3 rounded-full bg-red-500"></span>
            </span>
            <h1 class="text-xl font-bold text-gray-700"> বিনোদন </h1>
        </div>

        <div class="w-full grid grid-cols-12 grid-rows-12  gap-6 ">
            <div class="flex flex-col gap-4 md:row-span-12 md:col-span-6 col-span-12 row-span-12 md:h-[470px] h-96">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden ">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover"
                            class="w-full  object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4 md:row-span-6 md:h-[225px] h-96  md:col-span-3 col-span-12 row-span-12">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4 md:row-span-6 md:h-[225px] h-96  md:col-span-3 col-span-12 row-span-12 ">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4 md:row-span-6  md:h-[225px] h-96 md:col-span-3 col-span-12 row-span-12">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4 md:row-span-6 md:h-[225px] h-96  md:col-span-3 col-span-12 row-span-12">
                <h1 class=" text-gray-600 font-bold my-2 truncate py-2 ">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু</h1>
                <div class="relative w-full h-full  bg-black bg-opacity-60 rounded overflow-hidden h-64">
                    <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg">
                        <img src="https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg" class="h-full w-full object-cover" />
                        <div id="playButton"
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                            <img src="{{ asset('image/play.png') }}"
                                class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                                alt="Play Icon">
                        </div>
                    </div>

                    <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                        <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end items-center my-4">
            <a href="#"
                class="bg-red-500 hover:scale-100 transition duration-500 px-6 py-2 rounded text-white hover:bg-red-600">
                <h1 class=" ">আরো দেখুন</h1>
            </a>
        </div>
    </div>
    {{-- বিনোদন end --}}
@endsection
