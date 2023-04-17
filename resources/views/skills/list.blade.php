@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Skills</h2>

    <table class="w3-table w3-bordered w3-striped w3-border w3-hoverable">
        <tr class="w3-blue-grey">
            <th></th>
            <th>Title</th>
            <th>Percent</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($skills as $skill)
        <tr>
            <td>
                @if ($skill->image)
                <img src="{{asset('storage/'.$skill->image)}}" width="50">
                @endif
            </td>
            <td>{{$skill->title}}</td>
            <td>{{$skill->type}}</td>
            <td><a href="/console/skills/image/{{$skill->id}}">Image</a></td>
            <td><a href="/console/skills/edit/{{$skill->id}}">Edit</a></td>
            <td><a href="/console/skills/delete/{{$skill->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>



    <div class="w3-container" style="text-align: center; ">
        <a href="/console/skills/add" class="w3-btn w3-teal w3-round-xlarge" style="margin-top: 20px;">New Skill</a>
    </div>



</section>

@endsection