<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <h1 class="fw-bold">Comments</h1>
        </div>
        <div class="col-12 mt-5">
            <form action="" wire:submit.prevent="addComment">
                <div class="input-group mb-3">
                    <input type="text" placeholder="What's in your mind" class="form-control" aria-describedby="button-addon2" wire:model.lazy="newComment">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Add</button>
                </div>
            </form>
        </div>
        <div class="col-12">
            @foreach($comments as $comment)
            <div class="card my-3">
                <div class="card-body">
                    <div class="d-flex gap-3">
                        <h5 class="card-title">{{ $comment['creator'] }}</h5>
                        <span class="text-muted" style="font-size: 10pt">{{ $comment['created_at'] }}</span>
                    </div>
                    <p class="card-text">{{ $comment['body'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
