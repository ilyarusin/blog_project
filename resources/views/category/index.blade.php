@extends('layouts.main')

@section('content')


    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>
            <section class="featured-posts-section">
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="{{ route('category.post.index', $category->id) }}" class="blog-post-permalink">
                                        {{ $category->title }}
                                    </a></li>
                            @endforeach
                        </ul>
                    </div>
            </section>
        </div>
    </main>

@endsection