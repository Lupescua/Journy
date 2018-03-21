<div class="card">
    <div class="card-block">
        <form method="post" action="/posts/{{$post->id}}/comments/">
            {{method_field('PATCH')}}
            <div class="form-group">
                <textarea name="body" class="form-control" placeholder="Your comment here"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
    </div>
</div>