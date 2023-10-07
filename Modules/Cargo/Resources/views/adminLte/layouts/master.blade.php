<x-base-layout>

    <x-slot name="pageTitle">
        @yield('pageTitle')
    </x-slot>

    <style>
        .form-check.form-check-custom.form-check-sm .form-check-input {
            background-color: #009ef7;
        }
    </style>

    @yield('content')

</x-base-layout>