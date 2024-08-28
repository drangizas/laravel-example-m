<x-base-layout>
    @if (App::getLocale() === 'lt')
        <x-main-header :title="$title"/>
        <x-main-header :title="$title"/>
    @else
        <x-main-header :title="$title"/>
    @endif
</x-base-layout>