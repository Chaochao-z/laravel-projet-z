<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            welcome on the wall ! 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {!! Form::open(['route' => 'postWall']) !!}
                        {!! Form::text('content') !!}
                        {!! Form::submit('Post on the Wall Click Me!') !!}
                    {!! Form::close() !!}

                    contenu de wall : <br> 
                    <ul>
                    @foreach ($posts as $post)
                        <li>{{ $post->content }}
                            <a href="/delete/{{ $post->id }}">(delete)</a>
                            <a href="/update/{{ $post->id }}">(update)</a>
                        </li>
                    @endforeach
                    </ul>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>