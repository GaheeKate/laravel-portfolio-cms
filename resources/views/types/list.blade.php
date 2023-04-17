@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Types</h2>

    <table class="w3-table w3-bordered w3-striped w3-border w3-hoverable">
        <tr class="w3-blue-grey">
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($types as $type) : ?>
            <tr>
                <td>{{$type->title}}</td>
                <td><a href="/console/types/edit/{{$type->id}}">Edit</a></td>
                <td><a href="/console/types/delete/{{$type->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>



    <div class="w3-container" style="text-align: center; ">
        <a href="/console/types/add" class="w3-btn w3-teal w3-round-xlarge" style="margin-top: 20px;">New Type</a>
    </div>



</section>

@endsection