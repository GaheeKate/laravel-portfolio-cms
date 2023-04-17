@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Education</h2>

    <form method="post" action="/console/educations/edit/{{$education->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="school">School:</label>
            <input class="w3-input w3-border w3-round-large" type="title" name="school" id="school" value="{{old('school', $education->school)}}" required>

            @if ($errors->first('school'))
            <br>
            <span class="w3-text-red">{{$errors->first('school')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="type">Type:</label>
            <input class="w3-input w3-border w3-round-large" type="text" name="type" id="type" value="{{old('type', $education->type)}}">

            @if ($errors->first('type'))
            <br>
            <span class="w3-text-red">{{$errors->first('type')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="course">Course:</label>
            <input class="w3-input w3-border w3-round-large" type="text" name="course" id="course" value="{{old('started', $education->course)}}" required>

            @if ($errors->first('slug'))
            <br>
            <span class="w3-text-red">{{$errors->first('course')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="started">Started:</label>
            <input class="w3-input w3-border w3-round-large" type="date" name="started" id="started" value="{{old('started', date('Y-m-d', strtotime($education->started))) }}" required>

            @if ($errors->first('started'))
            <br>
            <span class="w3-text-red">{{$errors->first('started')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="finished">Finished:</label>
            <input class="w3-input w3-border w3-round-large" type="date" name="finished" id="finished" value="{{old('finished', date('Y-m-d', strtotime($education->finished))) }}">

            @if ($errors->first('finished'))
            <br>
            <span class="w3-text-red">{{$errors->first('finished')}}</span>
            @endif
        </div>



        <div class="w3-half w3-center" style="padding-top: 20px; ">
            <button type="submit" class="w3-button w3-green" style="width:200px">Edit Education</button>
        </div>

    </form>

    <a href="/console/educations/list">Back to Education List</a>

</section>

@endsection