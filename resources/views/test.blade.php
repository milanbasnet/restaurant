<form action="" method="get">
    @csrf

    <div class="container">
        <div class="row">
            @foreach ($some as $post)
            <?php 
            $imageName=json_decode($post->imageFile);
            ?>
                <div class="col-sm-4">
                    <div class="title">
                        <h3>{{$post->name}}</h3>
                    </div>
                    <div class="description">
                        <p>{{($post->description)}}</p>
                    </div>
                    <div class="image">
                        <img src="{{asset('images')}}/{{$imageName}}" alt="">
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</form>