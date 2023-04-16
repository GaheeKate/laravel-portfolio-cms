@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Projects</h2>

    <table class="w3-table w3-bordered w3-striped w3-border w3-hoverable">
        <tr class="w3-blue-grey">
            <th></th>
            <th>Title</th>
            <th>Slug</th>
            <th>Type</th>
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($projects as $project)
        <tr>
            <td>
                @if ($project->image)
                <img src="{{asset('storage/'.$project->image)}}" width="200">
                @endif
            </td>
            <td>{{$project->title}}</td>
            <td>
                <a href="/project/{{$project->slug}}">
                    {{$project->slug}}
                </a>
            </td>
            <td>{{$project->type->title}}</td>
            <td>{{$project->created_at->format('M j, Y')}}</td>
            <td><a href="/console/projects/image/{{$project->id}}">Image</a></td>
            <td><a href="/console/projects/edit/{{$project->id}}">Edit</a></td>
            <td><a href="/console/projects/delete/{{$project->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>



    <div class="w3-container" style="text-align: center; ">
        <a href="/console/projects/add" class="w3-btn w3-teal w3-round-xlarge" style="margin-top: 20px;">New Project</a>
    </div>


</section>

@endsection