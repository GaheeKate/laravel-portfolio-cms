@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Jobs</h2>

    <table class="w3-table w3-bordered w3-striped w3-border w3-hoverable">
        <tr class="w3-blue-grey">
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
            <td>{{ \Carbon\Carbon::parse($job->started)->format('d/m/Y')}}</td>
            <td>{{ \Carbon\Carbon::parse($job->finished)->format('d/m/Y')}}</td>
            <td><a href="/console/jobs/edit/{{$job->id}}">Edit</a></td>
            <td><a href="/console/jobs/delete/{{$job->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    <div class="w3-container" style="text-align: center; ">
        <a href="/console/jobs/add" class="w3-btn w3-teal w3-round-xlarge" style="margin-top: 20px;">New Job</a>
    </div>

</section>

@endsection