@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Skills</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Type</th>
            <th>Image</th>
            <th></th>
        </tr>
        @foreach ($skills as $skill)
        <tr>
            <td>{{$skill->title}}</td>
            <td>{{$skill->type}}</td>
            <td>{{$skill->image}}</td>
            <td><a href="/console/skills/edit/{{$skill->id}}">Edit</a></td>
            <td><a href="/console/skills/delete/{{$skill->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>

    <a href="/console/skills/add" class="w3-button w3-green">New Skill</a>

</section>

@endsection