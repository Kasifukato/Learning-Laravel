<x-layout>
    <x-slot:heading>Jobs Listing</x-slot:heading>
    <h1>You have visited the jobs page</h1>
    <br>
    <br>

   <ul>
     @foreach ($jobs as $job)
    <li>
        <a href="/jobs/{{ $job['id'] }}"  class="text-blue-500 hover:underline">
        <strong>{{ $job['title'] }}</strong> : Pays {{ $job['salary'] }} per month.
        </a>
    </li>
     @endforeach
   </ul>


   
</x-layout>