<div>
    <form method="post" class="p-4" action="{{url('blogPost')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <select name="post_category" class="form-control mb-2" id="">
                <option value="entertainment">Entertainment</option>
                <option value="localnews">Local News</option>
                <option value="globalnews">Global news</option>
                <option value="gossips">Gossip</option>
            </select>
            @error('post_category')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <input type="file" name="image" class="mb-2">
            @error('image')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
       <div class="form-group">
            <input type="text" class="form-control mb-2" name="post_title" placeholder="Post Title">
            @error('post_title')
            <small class="text-danger">{{$message}}</small>
            @enderror
       </div>
       <div class="form-group">
            <textarea class="form-control mb-2" id="" cols="30" rows="10" name="content"></textarea>
            @error('content')
            <small class="text-danger">{{$message}}</small>
            @enderror
       </div>
        <div class="text-center mx-auto">
            <button class="btn btn-dark bg-transparent text-dark font-weight-bold" name="post_submit">Add Post</button>
        </div>
        
    </form>
</div>