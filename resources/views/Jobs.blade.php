<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul class="mt-8 space-y-4 text-lg">
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-400 hover:underline">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
