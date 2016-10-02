@extends('layouts.plain')
@section('content')
    <div class="error">
        <div class="title">403</div>
        <div class="urls">
            <a href="{{ route('post.index') }}" aria-label="点击查看博客文章列表">博客</a><font aria-hidden="true">/</font>
            <a href="{{ route('projects') }}" aria-label="点击查看项目列表">项目</a><font aria-hidden="true">/</font>
            <a href="{{ route('page.about') }}" aria-label="查看聪聪的个人信息">关于</a>
        </div>
    </div>
@endsection
