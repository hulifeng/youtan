<div class="blog-recommend-article">
    <div class="row">
        @foreach($recommend_article as $recommend)
            <div class="item col-md-4">
            <div class="article-info">
                <div class="article-img">
                    <img src="{{ $recommend->cover }}" alt="">
                </div>
                <div class="article-data">
                    <div class="title" title="{{ $recommend->title }}">{{ $recommend->title }}</div>
                    <div class="info">
                        <div class="item float-left"><i class="fa fa-eye"></i> {{ $recommend->view_count }}</div>
                        <div class="item float-left"><i class="fas fa-comment-dots"></i> {{ $recommend->reply_count }}</div>
                        <div class="author float-right"><img class="rounded-circle" src="{{ $recommend->user->avatar }}" width="23" height="23" title="{{ $recommend->user->name }}" alt="{{ $recommend->user->name }}"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="clearfix"></div>
</div>