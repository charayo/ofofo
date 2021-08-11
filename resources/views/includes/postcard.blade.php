@foreach ($posts as $post)
    <div class="card shadow w-75 p-4 mx-auto mt-2">
        <div class="row">
            <div class="col-md-4">
                <img class="img-responsive border-0" src="" alt="">
            </div>
            <div class="col-md-8">
                <div class="title-block">
                    <h2>{{ $post['post_title'] }}</h2>
                </div>
                <div class="post-block">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta accusantium, ducimus veritatis
                        nesciunt odit quia saepe aspernatur sint tempore deleniti debitis mollitia, eligendi, blanditiis
                        nesciunt odit quia saepe aspernatur sint tempore deleniti debitis mollitia, eligendi, blanditiis
                        nesciunt odit quia saepe aspernatur sint tempore deleniti debitis mollitia, eligendi, blanditiis
                        ipsa minima voluptatem voluptate modi ratione.
                    </p>
                </div>
                <div>
                    <button class="btn btn-dark bg-transparent text-dark">Read more...</button>
                </div>
            </div>
        </div>
    </div>
    <hr>
@endforeach
