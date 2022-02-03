<x-layout>
    <x-slot name="title">
        Add New Post - My BBS
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>

    <h1>Add New Post</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        {{-- csrf --}}
        @csrf

        <div class="form-group">
            <label>
                Title
                <input type="text" name="title">
                {{-- エラー --}}
                @error('title')
                    <div class="error">{{ $message }}</div>
                @enderror
            </label>
        </div>
        <div class="form-group">
            <label>
                Body
                <textarea name="body"></textarea>
                {{-- エラー --}}
                @error('body')
                    <div class="error">{{ $message }}</div>
                @enderror
            </label>
        </div>
        <div class="form-button">
            <button>Add</button>
        </div>
    </form>
</x-layout>
