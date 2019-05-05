<?php

namespace App\Http\Requests;

class TopicRequest extends Request
{
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
                // UPDATE
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'title'       => 'required|min:2',
                        'markdown_content'        => 'required|min:3',
                        'category_id' => 'required|numeric',
                        'tags' => 'required'
                    ];
                }
            case 'GET':
            case 'DELETE':
            default:
                {
                    return [];
                };
        }
    }

    public function messages()
    {
        return [
            'title.required' => '标题不能为空',
            'title.min' => '标题必须至少两个字符',
            'markdown_content.required' => '文章内容不能为空',
            'markdown_content.min' => '文章内容必须至少三个字符',
            'category_id.required' => '请选择分类',
            'tags.required' => '标签不能为空'
        ];
    }
}
