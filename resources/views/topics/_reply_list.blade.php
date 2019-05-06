<div class="blog-message-new">
    @foreach($topic->replies as $reply)
        <div class="item" id="reply{{ $reply->id }}">
            <a href="#"><img src="{{ $reply->user->avatar }}" class="avatar"></a>
            <div class="info">
                <a href="#">{{ $reply->user->name }}</a>: {{ $reply->content }}
                <div class="count">
                    <span class="time float-left">{{ $reply->created_at }}</span>
                    @can('destroy', $reply)
                    {{-- 回复删除按钮 --}}
                    <span class="meta float-right">
                        <form action="{{ route('replies.destroy', $reply->id) }}"
                              onsubmit="return confirm('确定要删除此评论？');"
                              method="post">
                          {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-default btn-xs pull-left text-secondary">
                            <i class="far fa-trash-alt" style="color: #9199a1;"></i>
                          </button>
                        </form>
                    </span>
                    @endcan
                </div>
            </div>
        </div>
    @endforeach
</div>