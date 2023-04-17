@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Type</h2>

    <form method="post" action="/console/types/edit/{{$type->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input class="w3-input w3-border w3-round-large" type="text" name="title" id="title" value="{{old('title', $type->title)}}" required>

            @if ($errors->first('title'))
            <br>
            <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-center" style="padding-top: 20px; ">
            <button type="submit" class="w3-button w3-green" style="width:200px">Edit Type</button>
        </div>

    </form>
    <div class="w3-bar w3-round">
        <a href="/console/types/list" class="w3-button">&#10094; Back to Type List</a>
    </div>

</section>

@endsection