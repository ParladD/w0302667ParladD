@extends('layouts.master')

@section('masterContent')

            <div class="col-sm-8 blog-main">

                <div class="blog-post">

                    @foreach($posts as $post)

                        @include('posts.post')

                    @endforeach


                </div><!-- /.blog-post -->



                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>

            </div>

    @endsection