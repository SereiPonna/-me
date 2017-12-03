<div class="col-sm-6">
<div class="card">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 d-flex bg-success p-5">
                <img style="width: 100px; float:right;  margin-left: 0; padding: 0; height: 100px; background-size: contain; position: relative;" src="/img/child.jpg">
                </h1>
                <h1 class="mx-auto align-self-center">

            </div>
            <div class="col-md-9 py-3">
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



