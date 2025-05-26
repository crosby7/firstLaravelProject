<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>
    Here are some jobs hiring:

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a class="block px-4 py-6 border border-gray-200 hover:text-blue-500 hover:scale-105 rounded-lg"
                href="/jobs/{{ $job['id'] }}">
                <div class="font-bold text-navy-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach
    </div>

    <div class="mt-3">
        {{ $jobs->links()}}
    </div>
</x-layout>