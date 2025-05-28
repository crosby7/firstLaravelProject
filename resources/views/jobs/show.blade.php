<x-layout>
    <x-slot:heading>Job Details</x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>

    <p>
        This pays {{ $job->salary }} per year.
    </p>

    <p class="mt-2">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
</x-layout>