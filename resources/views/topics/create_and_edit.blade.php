@extends('layouts.app')

@section('afterCss')
    @include('Smartmd::head')
    <link rel="stylesheet" href="/assets/taginput/jquery.tagsinput.css">
@endsection

@section('title', $topic->id ? '编辑文章' : '新建文章')

@section('content')
    <div class="container" style="max-width: 1000px;">
        <h4 style="margin-bottom: 20px; color: #9199a1;"><i class="fas fa-pencil-alt"></i> 文章发布</h4>
        @if($topic->id)
            <form action="{{ route('topics.update', $topic->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('topics.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data" accept-charset="UTF-8">
                        @endif
                        {{ csrf_field() }}
        <div class="blog-write">
            <div class="row">
                <div class="col-md-12">

                        @include('shared._error')

                        <div class="form-group row">
                            <label for="title" class="col-sm-1 col-form-label">标题</label>
                            <div class="col-sm-6">
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $topic->title) }}" placeholder="请填写标题" style="width: 100%; margin-bottom: 20px;">
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
                                <input type="hidden" name="category_id" id="category_id">
                                @foreach($categories as $category)
                                    <div class="category-item" data-id="{{ $category->id }}">{{ $category->name }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tags" class="col-sm-1 col-form-label">标签</label>
                        <div class="col-sm-11">
                            <div id="tags"></div>
                            <input type="text" id="tag-input" class="form-control" name="tags">
                        </div>
                    </div>

                    <center><button class="btn btn-primary" style="margin-top: 20px; color: #fff; margin-right: 20px;"><i class="fas fa-save"></i> 保存草稿</button><button type="submit" class="btn bg-green" style="color: #fff; margin-top: 20px;"><i class="fa fa-paper-plane"></i> 发布文章</button></center>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection

@section('afterJs')
    <script src="/assets/taginput/jquery.tagsinput.js"></script>
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

        $(function () {
            $('.category-item').click(function () {
                var category_id = $(this).attr('data-id');
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
                $('#category_id').val(category_id);
            });
            $('#tag-input').tagsInput({
                placeholder: '按Tab键增加标签，最多添加五个标签',
                limit: 5,
                'onAddTag': function(input, value) {
                    console.log('tag added', input, value);
                },
                'onRemoveTag': function(input, value) {
                    console.log('tag removed', input, value);
                },
                'onChange': function(input, value) {
                    console.log('change triggered', input, value);
                }
            });
        })
    </script>
@endsection