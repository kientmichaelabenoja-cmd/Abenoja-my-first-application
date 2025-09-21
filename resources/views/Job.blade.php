<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-2xl">{{ $job['title'] }}</h2>
    <p class="mt-2 text-gray-300">
        This job pays {{ $job['salary'] }} per year.
    </p>

    <div class="mt-6">
        <a href="/jobs" class="text-blue-400 hover:underline">&larr; Back to Jobs</a>
    </div>
</x-layout>
