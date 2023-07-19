<x-app-layout>

    <x-slot name="header">
        @include('components.header-content')
    </x-slot>

    <x-slot name="slot">
        <div class="page_wrap">

            <x-video-list />

        </div>
        <div class="copyright footer">
            <h4>© 2023 Haveflix, LLC. All rights reserved.</h4>
        </div>

    </x-slot>

</x-app-layout>
