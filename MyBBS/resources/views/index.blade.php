<?php
// var_dump($posts);
// exit;
// var_dumpより見やすい
// dd($posts);
?>

<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>

    <h1>
        <span>My BBS</span>
        <a href="{{ route('posts.create') }}">[Add]</a>
    </h1>
    <ul>
        {{-- @foreach ($posts as $post)
            <li>{{ $post }}</li>
        @endforeach --}}

        {{-- bladeの記法 --}}
        {{-- 空に対応するforeach --}}
        @forelse ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </li>
        {{-- 空の時 --}}
        @empty
            <li>No posts yet!</li>
        @endforelse

    </ul>
</x-layout>
