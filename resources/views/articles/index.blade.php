@extends('layouts.default')

@section('content')
    <div class="rounded-corners clearfix" id="page">
        <!-- column -->

        <!-- Styling for the card and meta-info -->
        <style>
            .meta-info {
                font-size: 0.9rem;
                color: #777;
                margin-bottom: 10px;
            }

            .meta-info span {
                margin-right: 15px;
            }

            .meta-info i {
                color: #007bff;
                margin-right: 5px;
            }

            .card-title {
                font-size: 1.25rem;
                color: #333;
            }

            .card-text {
                font-size: 1rem;
                color: #555;
            }
        </style>

        <!-- Articles Section -->
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <!-- Image placeholder or dynamic image -->
                            <img src="{{ $post->banner_url }}" class="card-img-top" alt="Article Image" width="40%">

                            <div class="card-body">
                                <!-- Title of the article -->
                                <h5 class="card-title">{{ $post->title }}</h5>

                                <!-- Excerpt or summary of the article -->
                                <p class="card-text">{{ $post->excerpt }}</p>

                                <!-- Meta information (published date, author, and category) -->
                                <div class="meta-info mb-3 mt-3">
                                    <span><i class="fa fa-clock-o"></i> {{ $post->published_at->format('F d, Y') }}</span>
                                    <span><i class="fa fa-user"></i> By {{ $post->author->name }}</span>
                                    <span><i class="fa fa-folder"></i> {{ $post->category->name }}</span>
                                </div>

                                <!-- Read more button -->
                                <a href="{{ route('articles.show', $post->id) }}" class="btn btn-primary text-white text-decoration-none ">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Preload images if needed -->
    <div class="preload_images">
        <img class="preload" src="images/400%20x%20400-u21548-r-fr.png" alt="" />
    </div>
@endsection
