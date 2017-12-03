@extends('welcome')

@section('content')
    <div class="container pt-3">
        <div class="row">
            <div class="col-12 col-sm-10 mx-auto">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel_head_post_page">
                            <h1>
                            Smart#me
                        </h1>
                        <p class="lead">Find right conversation partner rather than obsessed with amount of Likes and Shares</p>    
                        </div>
                        
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