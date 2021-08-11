
    <div class="container">
        <table class="table table-dark table-striped table-responsive">
            <thead>
                <th>S/N</th>
                <th>Post Title</th>
                <th>Post Category</th>
                <th>Post ID</th>
                <th>Date Created</th>
                <th>Date Updated</th>
                <th>Authur ID</th>
                <th>Action</th>
                <th>Action</th>
            </thead>
            <tbody>
                @if (count($posts)>0)
                    @foreach ($posts as $key =>  $post)
                    
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$post['post_title']}}</td>
                        <td>{{$post['post_category']}}</td>
                        <td>{{$post['id']}}</td>
                        <td>{{$post['created_at']}}</td>
                        <td>{{$post['updated_at']}}</td>
                        <td>{{$post['user_id']}}</td>
                        <td><a  href={{"edit/".$post['id']}}  class="btn btn-primary text-primary bg-transparent">Edit</a></td>
                        <td><a href={{"delete/".$post['id']}} class="btn btn-danger text-danger bg-transparent">Delete</a></td>
                    </tr>
                    @endforeach                                   
                @else
                    <tr>
                        <td class="text-danger">No item</td>
                    </tr>
                @endif
                
            </tbody>
        </table>
    </div>