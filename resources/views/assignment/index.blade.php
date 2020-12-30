@extends ('default')


@section('title', 'Creating assignments')

@section('content')
    <h1>Assignments</h1>
    <ul class="list-group">
        @foreach($assignments as $assignment)
            <li class="list-group-item text-left">
                {{ $assignment->body }}
                @if (empty(true))

                @else
                    @foreach($assignment->tags as $tag)
                        <code>{{ $tag->name }}</code>
                    @endforeach
                @endif
            </li>
        @endforeach
    </ul>
@endsection
