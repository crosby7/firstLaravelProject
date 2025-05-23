<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>
    Here are some jobs hiring:

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a class="hover:text-blue-500 hover:underline"
                    href="/jobs/{{ $job['id'] }}"><strong>{{ $job['title'] }}</strong>: Pays
                    {{ $job['salary'] }} per
                    year.</a>
            </li>
        @endforeach
    </ul>
</x-layout>