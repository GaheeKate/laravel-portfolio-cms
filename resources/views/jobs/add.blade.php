@extends ('layout.console')

@section ('content')

<section class="w3-container">

    <h2>Add Job</h2>

    <form method="post" action="/console/jobs/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="workplace">Workplace:</label>
            <input class="w3-input w3-border w3-round-large" type="text" name="workplace" id="workplace" value="{{old('workplace')}}" required>

            @if ($errors->first('workplace'))
            <br>
            <span class="w3-text-red">{{$errors->first('workplace')}}</span>
            @endif
        </div>


        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input class="w3-input w3-border w3-round-large" type="text" name="title" id="title" value="{{old('title')}}">

            @if ($errors->first('type'))
            <br>
            <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="address">address:</label>
            <input class="w3-input w3-border w3-round-large" type="text" name="address" id="address" value="{{old('address')}}">

            @if ($errors->first('address'))
            <br>
            <span class="w3-text-red">{{$errors->first('address')}}</span>
            @endif
        </div>



        <div class="w3-margin-bottom">
            <label for="description">description:</label>
            <textarea class="w3-input w3-border w3-round-large" name="description" id="description">{{old('description')}}</textarea>

            @if ($errors->first('description'))
            <br>
            <span class="w3-text-red">{{$errors->first('description')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="started">Started:</label>
            <input class="w3-input w3-border w3-round-large" type="date" name="started" id="started" value="{{old('started')}}">

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





        <div class="w3-center" style="padding-top: 20px; ">
            <button type="submit" class="w3-button w3-green" style="width:200px">Add Project</button>
        </div>

    </form>

    <div class="w3-bar w3-round">
        <a href="/console/jobs/list" class="w3-button">&#10094; Back to Job List</a>
    </div>

</section>

@endsection