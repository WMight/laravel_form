<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学习laravel - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css')}}">
 @section('style')

 @show
</head>
<body>  <!-- 头部 -->
@section('header')
    <div class="jumbotron">
        <div class="container"><h2>学习Laravel</h2>
            <p>表单</p></div>
    </div>
@show
<!-- 中间内容区域 -->
<div class="container">
    <div class="row">    <!-- 左侧菜单区域 -->

        <div class="col-md-3">

            @section('leftmenu')
                <div class="list-group">
                    <a href="{{url('student/index')}}" class="list-group-item {{Request::getPathInfo()=='/student/index' ? 'active' : ''}}">学生列表</a>
                    <a href="{{url('student/create')}}" class="list-group-item {{Request::getPathInfo()=='/student/create' ? 'active' : ''}}">新增学生</a>
                </div>
            @show
        </div>   
     <!-- 右侧内容区域 -->
        <div class="col-md-9"> 
      
            @yield('content')
        </div>
    </div>
</div><!-- 尾部 -->
@section('footer')
    <div class="jumbotron" style="margin: 0;">
        <div class="container"><span> WMight </span></div>
    </div>
@show
<script src="{{asset('static/jquery/jquery-1.9.0.min.js')}}"></script>
<script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>
@section('javascript')

@show

</body>
</html>