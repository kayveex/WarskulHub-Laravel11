<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WarskulHub - Login</title>
    {{-- Tailwind CSS & Preline --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Inline CSS --}}
    <style>
        .background-auth {
            width: 100%;
            height: 110vh;
            background-size: cover;
            background: linear-gradient(180deg, #1D232A 25.49%, #16A34A 128.96%);
        }
        #auth-section {
            min-width: 350px;
            height: 380px;
            border-top: 5px solid var(--Extended-green-500, #22C55E);
            box-shadow: 0px 3.049px 16.619px 0px rgba(0, 0, 0, 0.25);
        }

        /* form-input CSS -Start */

        .form-input {
            width: 100%;
            border-width: 2px;
        }

        .form-input:active {
            border-color: #22C55E;
        }

        .form-input:hover {
            border-color: #22C55E;
        }

        .form-input::selection {
            border-color: #22C55E;
        }

    </style>

</head>
<body class="background-auth">
    {{-- Alert Error  --}}
    @if ($errors->any())
        <div id="dismiss-alert"
            class="bg-red-100 bg-opacity-5 mx-4 mt-4 hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 border border-red-600 text-sm text-red-600 rounded-lg p-4"
            role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="flex-shrink-0 h-4 w-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path d="m15 9-6 6" />
                        <path d="m9 9 6 6" />
                    </svg>
                </div>
                <div class="ms-2">
                    <div class="text-sm font-medium">
                        Peringatan!
                    </div>
                    <ul class="list-disc space-y-1 ps-5">
                        @foreach ($errors->all() as $item)
                            <li>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="ps-3 ms-auto">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button"
                            class="inline-flex  rounded-lg p-1.5 text-red-600 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-50 focus:ring-red-600 dark:bg-transparent "
                            data-hs-remove-element="#dismiss-alert">
                            <span class="sr-only">Dismiss</span>
                            <svg class="flex-shrink-0 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <section class="flex flex-col justify-center items-center">
        {{-- Logo Section --}}
        <img class="mt-[80px] mb-[20px]" src="{{ asset('assets/img/logo_login.png') }}" alt="logo-login">
        
        {{-- Form Section --}}
        <div id="auth-section" class="bg-secondaryDark rounded-md flex flex-col">
            <h1 class="flex-initial my-2 w-32 font-bold text-xl mx-auto text-slate-50 py-2">Login Menu</h1>
            <hr class="border-t-[2px] border-primaryGreen">
            <form action="/login" method="POST" class="flex flex-col p-4">
                @csrf
                <div class="form-control px-4">
                    <h5 class="py-2 text-sm text-slate-50 font-semibold">Email</h5>
                    <input type="email"
                        class="form-input @error('email') is-invalid @enderror border-slate-50  rounded-md w-full h-[40px] bg-primaryDark text-slate-50 text-sm"
                        name="email" id="email" value="{{ old('email') }}">
                </div>
                <div class="form-control px-4 pt-4">
                    <h5 class="py-2 text-sm text-slate-50 font-semibold">Password</h5>
                    <input type="password"
                        class="form-input @error('password') is-invalid @enderror border-slate-50  rounded-md w-full h-[40px] bg-primaryDark text-slate-50 text-sm"
                        name="password" id="password" value="{{ old('password') }}">
                </div>
                <div class="px-4 mt-[2rem]">
                    <button id="submit_btn" type="submit"
                        class="py-3 w-full px-4 gap-x-2 text-sm bg-primaryGreen hover:scale-110 transition-transform duration-300 ease-in-out font-semibold rounded-md border-transparent text-slate-50">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>