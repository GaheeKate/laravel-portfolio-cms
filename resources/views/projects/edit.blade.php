@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Project</h2>

    <form method="post" action="/console/projects/edit/{{$project->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input class="w3-input w3-border w3-round-large" type="text" name="title" id="title" value="{{old('title', $project->title)}}" required>

            @if ($errors->first('title'))
            <br>
            <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>


        <div class="w3-margin-bottom">
            <label for="url">URL:</label>
            <input class="w3-input w3-border w3-round-large" type="url" name="url" id="url" value="{{old('url', $project->url)}}">

            @if ($errors->first('url'))
            <br>
            <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="slug">Slug:</label>
            <input class="w3-input w3-border w3-round-large" type="text" name="slug" id="slug" value="{{old('slug', $project->slug)}}" required>

            @if ($errors->first('slug'))
            <br>
            <span class="w3-text-red">{{$errors->first('slug')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="content">Content:</label>
            <textarea class="w3-input w3-border w3-round-large" name="content" id="content" required>{{old('content', $project->content)}}</textarea>

            @if ($errors->first('content'))
            <br>
            <span class="w3-text-red">{{$errors->first('content')}}</span>
            @endif
        </div>


        <div class="w3-margin-bottom">
            <label for="type_id">Type:</label>
            <select class="w3-input w3-border w3-round-large" name="type_id" id="type_id">
                <option></option>
                @foreach($types as $type)
                <option value="{{$type->id}}" {{$type->id == old('type_id', $project->type_id) ? 'selected' : ''}}>
                    {{$type->title}}
                </option>
                @endforeach
            </select>
            @if ($errors->first('type_id'))
            <br>
            <span class="w3-text-red">{{$errors->first('type_id')}}</span>
            @endif
        </div>
        <div class="w3-center" style="padding-top: 20px; ">
            <button type="submit" class="w3-button w3-green" style="width:200px">Edit Project</button>
        </div>


    </form>

    <div class="w3-bar w3-round">
        <a href="/console/projects/list" class="w3-button">&#10094; Back to Project List</a>
    </div>
</section>

@endsection