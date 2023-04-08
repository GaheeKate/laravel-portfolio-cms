@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Education</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>School</th>
            <th>Type</th>
            <th>Course</th>
            <th>Started</th>
            <th>Finished</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($educations as $education)
        <tr>
            <td>{{$education->school}}</td>
            <td>{{$education->type}}</td>
            <td>{{$education->course}}</td>
            <td>{{ \Carbon\Carbon::parse($education->started)->format('d/m/Y g:i:s A')}}</td>
            <td>{{ \Carbon\Carbon::parse($education->finished)->format('d/m/Y g:i:s A')}}</td>
            <td><a href="/console/education/edit/{{$education->id}}">Edit</a></td>
            <td><a href="/console/education/delete/{{$education->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>

    <a href="/console/education/add" class="w3-button w3-green">New Education</a>

</section>

@endsection