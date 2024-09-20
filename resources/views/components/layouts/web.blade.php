@extends('components.layouts.base')

@section('body')


    <livewire:web.navbar-component />

    <div class="flex flex-col flex-1 w-full">
            <main class="overflow-y-auto overflow-x-hidden h-screen dark:bg-darkBg dark:scrollbar-thin-dark scrollbar-thin-light">
                <div class="">
                    @yield('content')

                    @isset($slot)
                        {{ $slot }}
                    @endisset
                    @includeIf('components.layouts.footer')
                </div>
            </main>
        </div>



@endsection
