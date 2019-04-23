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
                        <form action="{{ route('topics.update', $topic->id) }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                            <input type="hidden" name="_method" value="PUT">
                    @else
                        <form action="{{ route('topics.store') }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                    @endif
                        {{ csrf_field() }}

                        @include('shared._error')

                        <div class="blog-write-title text-center">
                            <h5><i class="fa fa-paint-brush m-r"></i> <strong>@if($topic->id)编辑文章@else新建文章@endif</strong></h5>
                        </div>

                        <input type="text" name="title" class="form-control" value="{{ old('title', $topic->title) }}" placeholder="请填写标题" required style="margin-bottom: 20px;">

                        <select name="category_id" id="category_id" class="form-control" required style="margin-bottom: 20px;">

                            <option value="">请选择分类</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>

                        <textarea name="markdown_content" id="editor" class="form-control" placeholder="请填入至少三个字符的内容。" style="resize: none;"></textarea>

                        <button class="btn bg-green" style="color: #fff;"><i class="fa fa-paper-plane"></i> 发布文章</button>
                    </form>
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
            isPreviewActive: true,
            uploads: {
                type: ['jpeg', 'png', 'bmp', 'gif', 'jpg'],
                maxSize: 4096,
                typeError: 'Image support format {type}.',
                sizeError: 'Image size is more than {maxSize} kb.',
                serverError: 'Upload failed on {msg}'
            }
        });
    </script>
@endsection