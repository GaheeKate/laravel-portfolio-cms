@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <form class="w3-container" method="post" action="/console/login" novalidate>

        @csrf

        <div class="w3-margin-bottom">
            <label for="email">Email Address:</label>
            <input class="w3-input" type="email" name="email" id="email" value="{{old('email')}}" required>

            @if ($errors->first('email'))
            <br>
            <span class="w3-text-red">{{$errors->first('email')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="password">Password:</label>
            <input class="w3-input" type="password" name="password" id="password" required>

            @if ($errors->first('password'))
            <br>
            <span class="w3-text-red">{{$errors->first('password')}}</span>
            @endif
        </div>
        <div class="w3-container" style="text-align: center; ">
            <button class="w3-btn w3-teal w3-round-xlarge" type="submit" style=" width: 20%;">Log In</button>
        </div>
    </form>

</section>

@endsection