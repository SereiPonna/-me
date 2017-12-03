@extends('welcome')

@section('content')
    <div class="container pt-3">
        <div style="align-items: center;" class="row">
            <div class="col-12 col-sm-10 mx-auto">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel_head_post_page">
                            <h2>
                                Smart#me
                            </h2>
                            <p class="lead">Right time and Right person</p>
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