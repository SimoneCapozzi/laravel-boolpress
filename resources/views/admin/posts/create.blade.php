@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            Nuovo post
        </h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors-> all() as $error)

                      <li>{{ $error }}</li>

                    @endforeach
                </ul>
            </div>
        @endif

    <div>
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label class="label-control" for="title">Titolo</label>
                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                @error('title')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="label-control" for="category_id">Categoria</label>
                <select class="form-control @error('category_id') is-invalid @enderror"
                name="category_id" id="category_id">
                    <option value=""> - selezionare una categoria - </option>
                    @foreach($categories as $category)
                        <option
                        @if(old('category_id') == $category->id)  selected @endif
                        value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <h3>Tags</h3>
                @foreach ($tags as $tag)
                     <span class="d-inline-block mr-3">
                         <input type="checkbox"
                          id="tag{{ $loop->iteration }}"
                          name="tags[]"
                          value="{{ $tag->id }}"
                          @if (in_array($tag->id,old('tags',[])))
                          checked

                          @endif
                          >
                         <label for="tag{{ $loop->iteration }}"> {{ $tag->name }}</label>
                        {{-- {{ $tag->name }} --}}
                    </span>
                @endforeach
            </div>

            <div class="mb-3">
                <label class="label-control" for="content">Contenutoo</label>
                <textarea type="text" id="content" name="content" class="form-control @error('content') is-invalid

                @enderror" rows="6"> {{ old('content') }}</textarea>
                @error('content')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                @enderror
            </div>
            <div>
                <button class="btn btn-primary" type="submit">
                        invio
                </button>
                <button class="btn btn-secondary" type="resett">
                        reset
                </button>
        </form>
    </div>
@endsection
