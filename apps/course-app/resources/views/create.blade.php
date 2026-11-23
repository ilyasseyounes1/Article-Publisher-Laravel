@extends('layouts.article')

@section('title', 'Write an article | Article Desk')

@section('content')
    <div class="article-container">
        <div class="form-card">
            <p class="eyebrow">Create something meaningful</p>
            <h1 class="page-title">Write an article.</h1>
            <p class="page-subtitle">Share an idea, a lesson, or a story with the Article Desk community.</p>

            <form method="POST" action="{{ route('articles.store') }}"  >
                @csrf
                <div class="form-group"  >
                     <label class="form-label" for="title">Title  </label>
                    <input    class="form-input" id="title" name="title" type="text" value="{{ old('title') }}" placeholder="Give your article a clear title" required autofocus>
                     @error('title')<span class="form-error">{{ $message }}</span>@enderror
                </div>
                  <div class="form-group">
                    <label class="form-label" for="body">Your story</label>
                    <textarea class="form-input form-input--textarea" id="body" name="body" placeholder="Start writing here..." required>{{ old('body') }}</textarea>
                    @error('body')<span class="form-error">{{ $message }}  </span>@enderror
                </div>
                <div class="form-actions">
                    <button class="button" type="submit">Publish article   </button>
                    <a class="button button--secondary" href="{{ route('articles.index') }}">Cancel</a>
                </div>
            </form>
            </div>
              </div>
@endsection
