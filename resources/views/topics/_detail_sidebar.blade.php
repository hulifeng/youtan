<div class="col-md-4">
    <!-- 侧边栏 -->
    <div class="user-info">
        <div class="m-b-lg">
            <a href="#">
                <img src="{{ $topic->user->avatar }}" width="45" height="45" class="img-responsive rounded float-right">
            </a>
            <span class="user-name">{{ $topic->user->name }}</span>
            <p><i class="fa fa-map-marker-alt"></i> 北京 123/123</p>
            <p class="introduce">我的简介</p>
            <p>{{ $topic->user->introduction ?? '这个家伙很懒，什么都不想告诉你！' }}</p>
            <div class="row text-center user-data">
                <div class="col-md-4 col-xs-4 data-item">
                    <i class="fa fa-bars fa-1-5x"></i>
                    <p><strong>169 帖子</strong></p>
                </div>
                <div class="col-md-4 col-xs-4 data-item">
                    <i class="fa fa-users fa-1-5x"></i>
                    <p><strong>28 好友</strong></p>
                </div>
                <div class="col-md-4 col-xs-4 data-item">
                    <i class="fa fa-heart fa-1-5x"></i>
                    <p><strong>240 关注</strong></p>
                </div>
            </div>
            <div class="user-button">
                <div class="row">
                    <div class="col-md-6 item">
                        <button type="button" class="btn bg-green btn-sm btn-block send-message" style="color: #fff;"><i class="fa fa-envelope"></i> 发送信息</button>
                    </div>
                    <div class="col-md-6 item">
                        <button type="button" class="btn btn-light btn-sm btn-block"><i class="fa fa-coffee"></i> 关注动态</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>