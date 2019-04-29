@extends('layouts.app')

@section('afterCss')
    @include('Smartmd::head')
@endsection

@section('title', $topic->id ? '编辑文章' : '新建文章')

@section('content')
    <div class="container" style="max-width: 1000px;">
        <div class="blog-write">
            <div class="row">
                <div class="col-md-12">
                    @if($topic->id)
                        <form action="{{ route('topics.update', $topic->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                            <input type="hidden" name="_method" value="PUT">
                    @else
                        <form action="{{ route('topics.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data" accept-charset="UTF-8">
                    @endif
                        {{ csrf_field() }}

                        @include('shared._error')

                        <div class="form-group row">
                            <label for="title" class="col-sm-1 col-form-label">标题</label>
                            <div class="col-sm-6">
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $topic->title) }}" placeholder="请填写标题" required style="width: 100%; margin-bottom: 20px;">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="excerpt" class="col-sm-1 col-form-label">简介</label>
                            <div class="col-sm-6">
                                <textarea name="excerpt" id="excerpt" class="form-control" style="resize: none;"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="editor" class="col-sm-1 col-form-label">内容</label>
                            <div class="col-sm-11">
                                <textarea name="markdown_content" id="editor" class="form-control" placeholder="请填入至少三个字符的内容。" style="resize: none;"></textarea>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="blog-write">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label for="category_id" class="col-sm-1 col-form-label">分类</label>
                        <div class="col-sm-11">
                            <div class="categories">
                                @foreach($categories as $category)
                                    <div class="category-item">{{ $category->name }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tags" class="col-sm-1 col-form-label">标签</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" name="tags" id="tags" placeholder="回车键确定输入标签">
                        </div>
                    </div>

                    <center><button class="btn btn-primary" style="margin-top: 20px; color: #fff; margin-right: 20px;"><i class="fas fa-save"></i> 保存草稿</button><button class="btn bg-green" style="color: #fff; margin-top: 20px;"><i class="fa fa-paper-plane"></i> 发布文章</button></center>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('afterJs')
    <script>
        new Smartmd({
            el: "#editor",
            height: "80vh",
            autoSave: {
                uuid: 1,
                delay: 5000
            },
            highlight:true,
            isPreviewActive: true,
            uploads: {
                url: "{{ route('topics.upload_image') }}",
                type: ['jpeg', 'png', 'bmp', 'gif', 'jpg'],
                maxSize: 4096,
                typeError: 'Image support format {type}.',
                sizeError: 'Image size is more than {maxSize} kb.',
                serverError: 'Upload failed on {msg}'
            }
        });

        document.addEventListener('paste', function (event) {
            console.log(event)
        });
    </script>
@endsection