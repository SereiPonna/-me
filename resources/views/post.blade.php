<div class="col-sm-6">
<div class="card">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 d-flex bg-success p-5">
            </div>
            <div style=" float: left" class="col-md-9 py-3">
                <i style="font-size: 75px" class="material-icons">people</i>
                <h3 class="card-title">{{ $post->title }}</h3>
                 <p class="card-text">
                    {{ $post->body }}
                </p>
                <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#messageModal">
                    Message
                </button>
                @include('message-modal')
            </div>


        </div>
    </div>
</div>
</div>



