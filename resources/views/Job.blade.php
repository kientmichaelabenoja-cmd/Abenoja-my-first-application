{{-- ==========================================
resources/views/job.blade.php
========================================== --}}
<x-layout>
    <x-slot:heading>Job</x-slot:heading>

    <p class="text-sm text-gray-500">{{ $job->employer->name }}</p>
    <h2 class="font-bold text-2xl mt-2">{{ $job->title }}</h2>
    <p class="mt-2 text-gray-300">This job pays {{ $job->salary }} per year.</p>

    <div class="mt-4">
        @foreach ($job->tags as $tag)
            <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                {{ $tag->name }}
            </span>
        @endforeach
    </div>

    <div class="mt-6">
        <a href="/jobs" class="text-blue-400 hover:underline">&larr; Back to Jobs</a>
    </div>
</x-layout>
