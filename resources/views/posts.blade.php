@extends('welcome')

@section('content')
    <div class="container pt-3">
        <div class="row">
            <div class="col-12 col-sm-10 mx-auto">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>
                            #me
                        </h1>
                        <p class="lead">Thanks to the new spacing utility classes there's a lot you can do.</p>
                        @include('post-modal')
                    </div>
                    @foreach( $posts as $post)
                        @include('post')
                        @include('message-modal')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection