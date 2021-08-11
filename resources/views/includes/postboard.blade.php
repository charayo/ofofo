<div>
    @if ($data != "")
        <form method="post" class="p-4" action="{{url("$myPath")}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <select name="post_category" class="form-control mb-2" id="" value = "{{$data['post_category']}}">
                    <option value="entertainment">Entertainment</option>
                    <option value="localnews">Local News</option>
                    <option value="globalnews">Global news</option>
                    <option value="gossips">Gossip</option>
                </select>
                @error('post_category')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <input hidden name = "post_id" value="{{$data['id']}}" />
            <div class="form-group">
                <input type="file" name="image" class="mb-2">
                @error('image')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        <div class="form-group">
                <input type="text" class="form-control mb-2" name="post_title" placeholder="Post Title" value="{{$data['post_title']}}">
                @error('post_title')
                <small class="text-danger">{{$message}}</small>
                @enderror
        </div>
        <div class="form-group">
                <textarea class="form-control mb-2" id="" cols="30" rows="10" name="post_details">{{$data['post_details']}}</textarea>
                @error('post_details')
                <small class="text-danger">{{$message}}</small>
                @enderror
        </div>
            <div class="text-center mx-auto">
                <button class="btn btn-dark bg-transparent text-dark font-weight-bold" name="post_submit">Update Post</button>
            </div>
            
        </form>
        

    @else
        <form method="post" class="p-4" action="{{url("$myPath")}}" enctype="multipart/form-data">
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
                <textarea class="form-control mb-2" id="" cols="30" rows="10" name="post_details"></textarea>
                @error('post_details')
                <small class="text-danger">{{$message}}</small>
                @enderror
        </div>
            <div class="text-center mx-auto">
                <button class="btn btn-dark bg-transparent text-dark font-weight-bold" name="post_submit">Add Post</button>
            </div>
            
        </form>
    @endif
    
</div>