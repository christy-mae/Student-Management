<x-guest-layout>
    <div class="flex flex-col items-center justify-center gap-y-8 p-6">
        <h1 class="text-4xl font-semibold text-gray-800 dark:text-white text-center">Student Management System</h1>
        
        @if (Route::has('login'))
            <nav class="flex justify-center gap-6">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-6 py-3 text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-6 py-3 text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300"
                    >
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-6 py-3 text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-300"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</x-guest-layout>
