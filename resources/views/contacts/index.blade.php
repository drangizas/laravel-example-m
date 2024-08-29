<x-base-layout>
    @if (App::getLocale() === 'lt')
        @foreach ($title as $single_title)
           <x-main-header :title="$single_title" />
           <hr />
        @endforeach
    @else
        <x-main-header :title="$title[0]"/>
    @endif
</x-base-layout>