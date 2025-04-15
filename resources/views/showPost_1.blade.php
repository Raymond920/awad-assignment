<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('css/background.css') }}"> --}}
    <title>{{ $post->title }}</title>
</head>
<body>
    <div class="post-container">
        <div class="post-bg"></div>
        <div class="post-image-container">
            <img src="{{ asset('images/posts_image/' . $post->img_file . '.png') }}"
                onerror="this.src='{{ asset('images/posts_image/default.png') }}';" alt="Post Image" class="post-image" />
        </div>
        <div class="content-comments-container">
            <div class="content-container">
                <h2>{{ $post->author_name }}</h2>
                <h2>{{ $post->title }}</h2>
                <br>
                <p>{{ $post->content }}</p>
                <br>
                <hr>
                <br>
            </div>
            <div class="comments-container">
                comment section
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim, libero et pretium consectetur, erat eros accumsan arcu, ac laoreet tortor leo in nibh. Sed vel lorem placerat elit euismod rutrum at non neque. Praesent laoreet accumsan erat, et interdum ante tempor eu. Aliquam tincidunt bibendum scelerisque. Donec porttitor odio sed ante pulvinar, nec finibus ex lobortis. Sed eget nulla lacinia, scelerisque leo vel, dignissim purus. Nunc dapibus luctus nulla, eu pharetra nunc eleifend ac. Pellentesque lacinia rhoncus accumsan. Donec finibus eget tellus et placerat. Ut ex eros, pretium sit amet dui a, porttitor hendrerit ligula. Morbi feugiat gravida enim, id viverra mauris vehicula ut. Etiam vitae enim euismod, fringilla risus nec, bibendum libero. Donec mattis ligula pharetra erat cursus finibus.

Aliquam tempor nunc diam. Sed orci sapien, molestie quis pharetra rhoncus, feugiat id nisi. Ut a neque sed arcu mollis pharetra at a tellus. Mauris rhoncus consequat enim in auctor. Sed egestas scelerisque pulvinar. Nulla ut dictum nisl, tincidunt sodales enim. Sed lacus quam, mattis nec odio vitae, dignissim tristique augue. Nam facilisis, metus ut efficitur venenatis, tellus sem tempor lorem, et pharetra leo ipsum et neque. Fusce fermentum ante lacus, et porttitor quam lobortis eu. Duis pretium sed orci pharetra venenatis. Donec tristique ornare augue, ac cursus urna dictum et.

Fusce molestie et enim et vestibulum. Sed quis lacus accumsan metus porta vulputate nec vitae ligula. Nunc fermentum eros nec enim dapibus, non elementum augue molestie. Phasellus dapibus est nec justo viverra mollis. Curabitur tempus quam purus, non dignissim velit rutrum non. Donec tempor sit amet purus sit amet lobortis. Vestibulum et porttitor nulla. Aliquam leo orci, eleifend et nunc eget, maximus vulputate odio. Aenean a augue id arcu feugiat egestas. Quisque gravida quis dolor vitae semper. Quisque quis tristique velit. Quisque pretium quis elit in consequat. Aenean eget cursus neque, ac lobortis nibh. Nam et laoreet metus. Donec aliquet elit at dignissim malesuada. Donec aliquet dui id ipsum auctor, a finibus lorem fermentum.

Nunc metus turpis, accumsan vitae interdum nec, molestie ac metus. Morbi maximus purus nunc, quis sagittis metus tincidunt vel. Sed at lectus dapibus, lobortis dui in, vulputate erat. Suspendisse vel convallis diam. Praesent eu finibus turpis. Mauris lacinia eget purus vitae pellentesque. Praesent dictum efficitur tristique. Fusce vel sollicitudin sapien. Nunc magna dui, imperdiet ut turpis et, fringilla interdum felis. Nunc pellentesque neque nec arcu pharetra iaculis.

Mauris facilisis vel eros sed eleifend. Nulla pulvinar blandit libero non luctus. Fusce sit amet egestas eros, vel fringilla tortor. Sed non risus et elit ultrices pellentesque. Sed egestas ex nibh, vitae interdum magna ullamcorper ultrices. Vestibulum vitae volutpat felis, sed dictum odio. Aliquam non efficitur eros, non mollis sapien. Integer tincidunt vitae felis at viverra. Vivamus urna augue, ullamcorper sed suscipit at, molestie vel odio. Etiam sit amet euismod neque. Sed ut luctus ligula. Quisque vitae nisl id lacus bibendum cursus at convallis risus. Quisque luctus mauris mauris, non mollis metus tincidunt et. Nulla consectetur interdum lacus suscipit cursus.
            </div>
        </div>
    </div>
</body>

</html>