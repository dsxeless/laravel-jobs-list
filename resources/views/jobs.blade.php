<x-layout>
    <x-slot:title>
        Jobs page
    </x-slot:title>    
    <h1 class="font-bold text-lg">Jobs page</h1>
    
    <ul>
        @foreach ($jobs as $job) 

            <a href="/jobs/{{ $job['id'] }}" class="hover:underline">
                <strong>{{ $job['title'] }}</strong> - {{ $job['salary'] }}
            </a>
            <br>
            
        @endforeach
    </ul>
</x-layout>