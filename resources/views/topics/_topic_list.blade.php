@if(count($topics))
    @foreach($topics as $topic)
        <div class="blog-article-child">
            <a href="#" >
                <div class="cover">
                    <img src="{{ $topic->cover }}">
                </div>
            </a>
            <div class="item">
                <div class="info d-flex">
                    <a href="javascript:;" class="item-title mr-auto">{{$topic->title}}</a>
                    <a href="{{ route('categories.show', $topic->category_id) }}" class="item-category">{{$topic->category->name}}</a>
                </div>
                <div class="data" style="overflow : hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{!! strip_tags($topic->content) !!}</div>
            </div>
        </div>
    @endforeach
@else
    <div class="text-center">~ 暂无数据 ~</div>
@endif