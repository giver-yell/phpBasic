<x-layout>
    <x-slot name="title">
        Edit Post - My BBS
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.show', $post) }}">Back</a>
    </div>

    <h1>Add New Post</h1>

    <form method="POST" action="{{ route('posts.update', $post) }}">
        {{-- patchを指定 --}}
        @method('PATCH')
        {{-- csrf --}}
        @csrf

        <div class="form-group">
            <label>
                Title
                <input type="text" name="title" value="{{ old('title', $post->title) }}">
                {{-- エラー --}}
                @error('title')
                    <div class="error">{{ $message }}</div>
                @enderror
            </label>
        </div>
        <div class="form-group">
            <label>
                Body
                <textarea name="body">{{ old('body', $post->body) }}</textarea>
                {{-- エラー --}}
                @error('body')
                    <div class="error">{{ $message }}</div>
                @enderror
            </label>
        </div>
        <div class="form-button">
            <button>Update</button>
        </div>
    </form>
</x-layout>
