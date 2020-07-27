@extends('common.layouts')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>表单</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>  <!-- 头部 -->
<div class="jumbotron">
    <div class="container"><h2>轻松学会Larvel</h2>
        <p>表单</p></div>
</div><!-- 中间内容区域 -->
<div class="container">
    <div class="row">    <!-- 左侧菜单区域 -->
 <div class="col-md-3">
            <div class="list-group"><a href="#" class="list-group-item active">学生列表</a> <a href="#"
 class="list-group-item">新增学生</a>
            </div>
        </div>    <!-- 右侧内容区域 -->
 <div class="col-md-9">      <!-- 所有错误提示 -->
 <div class="alert alert-danger">
                <ul>
                    <li>姓名不能为空</li>
                    <li>年龄只能为整数</li>
                    <li>请选择性别</li>
                </ul>
            </div>      <!-- 自定义内容区域 -->
 <div class="panel panel-default">
                <div class="panel-heading">新增学生</div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group"><label for="name" class="col-sm-2 control-label">姓名</label>
                            <div class="col-sm-5"><input type="text" class="form-control" id="name"
 placeholder="请输入学生姓名"></div>
                            <div class="col-sm-5"><p class="form-control-static text-danger">姓名不能为空</p></div>
                        </div>
                        <div class="form-group"><label for="age" class="col-sm-2 control-label">年龄</label>
                            <div class="col-sm-5"><input type="text" class="form-control" id="age"
 placeholder="请输入学生年龄"></div>
                            <div class="col-sm-5"><p class="form-control-static text-danger">年龄只能为整数</p></div>
                        </div>
                        <div class="form-group"><label for="sex" class="col-sm-2 control-label">性别</label>
                            <div class="col-sm-5"><label class="radio-inline"> <input type="radio" name="sex"
 value="option1"> 未知 </label>
                                <label class="radio-inline"> <input type="radio" name="sex" value="option2"> 男 </label>
                                <label class="radio-inline"> <input type="radio" name="sex" value="option3"> 女 </label>
                            </div>
                            <div class="col-sm-5"><p class="form-control-static text-danger">请选择性别</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- 尾部 -->
<div class="jumbotron" style="margin: 0;">
    <div class="container"><span> @2016 imooc </span></div>
</div>
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
 integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
 crossorigin="anonymous"></script>
</body>
</html>

@stop