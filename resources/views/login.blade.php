@extends('layouts.frontend.default')

@section('content')
    <div class="w-full max-w-screen-2xl mx-auto bg-white my-20">

        <div class="w-full flex justify-center items-center h-screen">

            <form
                class="mx-auto max-w-xl bg-white p-8 rounded-lg shadow-lg border  grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                <div class="text-start col-span-2 text-gray-700   ">
                    <h1 class="text-3xl font-bold">Login</h1>
                    <h1 class="text-base ">Login in in your account</h1>
                </div>

                <!-- Email Input  -->
                <div class="col-span-2 flex flex-col gap-3">
                    <label for="email" class="font-semibold text-gray-700">Email</label>
                    <input id="email" type="text" placeholder="Your Email"
                        class="px-4 py-2 text-gray-300 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                </div>
                <!-- Password Input  -->
                <div class="col-span-2 flex flex-col gap-3">
                    <div class="flex justify-between">
                        <label for="name" class="font-semibold text-gray-700">Password</label>
                        <a href="#" class="text-[14px]">Forget password?</a>
                    </div>
                    <input id="Password" type="password" placeholder="Your Password"
                        class="px-4 py-2 text-gray-300 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                </div>


                <!-- Submit Button  -->
                <div class="col-span-2 flex justify-center flex-col gap-4 items-center">
                    <button type="submit"
                        class="px-6 py-2 w-full  bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Login
                    </button>
                    <a href="/register" class="text-gray-800 text-base">Don't have account? <span class="text-blue-800">Register here</span> </a>
                </div>
            </form>
        </div>

    </div>
@endsection
