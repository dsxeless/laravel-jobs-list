<x-layout>
    <x-slot:title>
        Job page
    </x-slot:title>    
    <h1 class="font-bold text-lg">Job page</h1>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>The salary of {{ $job['title'] }} is {{ $job['salary'] }}</p>
</x-layout>