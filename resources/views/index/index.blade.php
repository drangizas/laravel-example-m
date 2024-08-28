<x-base-layout>
    @if (App::getLocale() === 'lt')
        <x-main-header :title="$title"/>
        <x-row-with-image image-address="https://images.unsplash.com/photo-1723126004556-4ecfcbab3908?q=80&w=993&auto=format&fit=crop"/>
    @else 
        <x-row-with-image image-address="https://images.unsplash.com/photo-1723984790027-ffe34efb18f6?q=80&w=1026&auto=format&fit=crop"/>
        <x-main-header :title="$title"/>
    @endif
</x-base-layout>