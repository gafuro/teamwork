@extends ('default')


@section('title', 'Creating assignments')

@section('content')
    <h1>New assignments</h1>
    <form action="/assignment/store" method="post">
        @csrf
        <div class="form-group">
            <label for="body">Assigment description</label>
            <input type="text" name="body" id="body" class="form-control"  />
            @error('body')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="due_dt">Due date</label>
            <input type="text" name="due_dt" id="due_dt" class="form-control"  />
            @error('due_dt')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group ">
            <label for="tags">Assignment tags</label>
            <select name="tags[]" multiple id="tags" class="form-control">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            @error('tags')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
