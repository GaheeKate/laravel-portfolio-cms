@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Users</h2>

    <table class="w3-table w3-bordered w3-striped w3-border w3-hoverable">
        <tr class="w3-blue-grey">
            <th>Name</th>
            <th>Email</th>
            <th>Created</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td>{{$user->first}} {{$user->last}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->format('M j, Y')}}</td>
                <td><a href="/console/users/edit/{{$user->id}}">Edit</a></td>
                <td><a href="/console/users/delete/{{$user->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>



    <div class="w3-container" style="text-align: center; ">
        <a href="/console/users/add" class="w3-btn w3-teal w3-round-xlarge" style="margin-top: 20px;">New User</a>
    </div>
</section>

@endsection