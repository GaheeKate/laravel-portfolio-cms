@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Jobs</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Workplace</th>
            <th>Title</th>
            <th>Address</th>
            <th>Description</th>
            <th>Started</th>
            <th>Finished</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($jobs as $job)
        <tr>
            <td>{{$job->workplace}}</td>
            <td>{{$job->title}}</td>
            <td>{{$job->address}}</td>
            <td>{{$job->description}}</td>
            <td>{{ \Carbon\Carbon::parse($job->started)->format('d/m/Y g:i:s A')}}</td>
            <td>{{ \Carbon\Carbon::parse($job->finished)->format('d/m/Y g:i:s A')}}</td>
            <td><a href="/console/jobs/edit/{{$job->id}}">Edit</a></td>
            <td><a href="/console/jobs/delete/{{$job->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>

    <a href="/console/jobs/add" class="w3-button w3-green">New Job</a>

</section>

@endsection