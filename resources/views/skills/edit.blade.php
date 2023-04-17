@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Skill</h2>

    <form method="post" action="/console/skills/edit/{{$skill->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input class="w3-input w3-border w3-round-large" type="title" name="title" id="title" value="{{old('title', $skill->title)}}" required>

            @if ($errors->first('title'))
            <br>
            <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="type">Percent:</label>
            <input class="w3-input w3-border w3-round-large" type="text" name="type" id="type" value="{{old('type', $skill->type)}}">

            @if ($errors->first('type'))
            <br>
            <span class="w3-text-red">{{$errors->first('type')}}</span>
            @endif
        </div>


        <div class="w3-center" style="padding-top: 20px; ">
            <button type="submit" class="w3-button w3-green" style="width:200px">Edit Skill</button>
        </div>


    </form>

    <div class="w3-bar w3-round">
        <a href="/console/skills/list" class="w3-button">&#10094; Back to Skill List</a>
    </div>
</section>

@endsection