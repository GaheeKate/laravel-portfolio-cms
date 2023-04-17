@extends ('layout.console')

@section ('content')

<section class="w3-container">

    <h2>Add Education</h2>

    <form method="post" action="/console/educations/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="school">School:</label>
            <input class="w3-input w3-border w3-round-large" type="school" name="school" id="school" value="{{old('school')}}" required>

            @if ($errors->first('school'))
            <br>
            <span class="w3-text-red">{{$errors->first('school')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="type">Type:</label>
            <input class="w3-input w3-border w3-round-large" type="type" name="type" id="type" value="{{old('type')}}">

            @if ($errors->first('type'))
            <br>
            <span class="w3-text-red">{{$errors->first('type')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="course">Course:</label>
            <input class="w3-input w3-border w3-round-large" type="text" name="course" id="course" value="{{old('course')}}" required>

            @if ($errors->first('slug'))
            <br>
            <span class="w3-text-red">{{$errors->first('course')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="started">Started:</label>
            <input class="w3-input w3-border w3-round-large" type="date" name="started" id="started" value="{{old('started')}}" required>

            @if ($errors->first('started'))
            <br>
            <span class="w3-text-red">{{$errors->first('started')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="finished">Finished:</label>
            <input class="w3-input w3-border w3-round-large" type="date" name="finished" id="finished" value="{{old('finished')}}">

            @if ($errors->first('finished'))
            <br>
            <span class="w3-text-red">{{$errors->first('finished')}}</span>
            @endif
        </div>









        <div class="w3-half w3-center" style="padding-top: 20px; ">
            <button type="submit" class="w3-button w3-green" style="width:200px">Add Project</button>
        </div>

    </form>

    <a href="/console/educations/list">Back to Education List</a>

</section>

@endsection