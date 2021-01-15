@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="p-6">
                <h3 class="text-2xl font-medium mb-1">{{ $user->name }}</h3>
                <p>
                    Posted {{ $posts->count() }}
                    {{ \Illuminate\Support\Str::plural('post', $posts->count()) }}
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg">
                @if($posts->count())
                    @foreach($posts as $post)
                        <x-post :post="$post"></x-post>
                    @endforeach

                    {{ $posts->links() }}
                @else
                    <p>{{ $user->name }} does not have any posts</p>
                @endif
            </div>
        </div>
    </div>
@endsection
