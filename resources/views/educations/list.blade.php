@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Education</h2>

    <table class="w3-table w3-bordered w3-striped w3-border w3-hoverable">
        <tr class="w3-blue-grey">
            <th>School</th>
            <th>Type</th>
            <th>Course</th>
            <th>Started</th>
            <th>Finished</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($educations as $education) : ?>
            <tr>
                <td>{{$education->school}}</td>
                <td>{{$education->type}}</td>
                <td>{{$education->course}}</td>
                <td>{{ \Carbon\Carbon::parse($education->started)->format('d/m/Y')}}</td>
                <td>{{ \Carbon\Carbon::parse($education->finished)->format('d/m/Y')}}</td>
                <td><a href="/console/educations/edit/{{$education->id}}">Edit</a></td>
                <td><a href="/console/educations/delete/{{$education->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>


    <div class="w3-container" style="text-align: center; ">
        <a href="/console/educations/add" class="w3-btn w3-teal w3-round-xlarge" style="margin-top: 20px;">New Education</a>
    </div>

</section>

@endsection