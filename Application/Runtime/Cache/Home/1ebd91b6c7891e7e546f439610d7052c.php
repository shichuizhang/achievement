<?php if (!defined('THINK_PATH')) exit();?><extend name="base.html"/>
<html>
<head>
    
    <title>新增</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script type="text/javascript" src="//cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="//cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href="//cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.css" rel="stylesheet"
          type="text/css">
    <style>
        body {
            font-family: 微软雅黑;
        }

        .footer-div {
            background: #F8F8F8;
            position: fixed;
            bottom: 0;
            overflow: hidden;
            width: 100%;
            left: 5%;
            text-align: center;
        }
        .bottom-blank{
            height:60px;
        }
    </style>

    
    <style>
        .headimg img {
            display: block;
            width: 75px;
            border-radius: 50%;
            border: 2px solid #B8B4B4;
            margin-left: 40%;
            height: auto;
        }

        .achievement {
            text-align: center;
        }
        .selects{
            margin-bottom:10px;
        }
        .btn-upload {
            width: 106px;
            height: 32px;
            position: relative;
            margin-bottom: 10px;
        }
        .btn-upload a {
            display: block;
            width: 104px;
            line-height: 18px;
            padding: 6px 0;
            text-align: center;
            color: #4c4c4c;
            background: #fff;
            border: 1px solid #cecece;
        }
        .btn-upload input {
            width: 106px;
            height: 32px;
            position: absolute;
            left: 0px;
            top: 0px;
            z-index: 1;
            filter: alpha(opacity=0);
            -moz-opacity: 0;
            opacity: 0;
            cursor: pointer;
        }
        .icon-upload {
            display: inline-block;
            width: 17px;
            height: 17px;

            vertical-align: middle;
            margin-right: 5px;
            background-position: -144px -24px;
        }
    </style>

</head>
<body>

<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse"><span
                    class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span
                    class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><span></span></a></div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">首页</a></li>
                <li><a href="#">任务</a></li>
                <li><a href="#">新增</a></li>
                <li><a href="#">个人</a></li>
            </ul>
        </div>
    </div>
</div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" role="form" method="post" action="/Home/Mission/addMission" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-sm-2"><label class="control-label">名称</label></div>
                            <div class="col-sm-10"><input type="text" class="form-control"  name="name"
                                                          placeholder="请输入任务名" required></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"><label class="control-label">描述</label></div>
                            <div class="col-sm-10"><textarea  class="form-control"  name="desc"
                                                              placeholder="请输入任务描述" required></textarea></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"><label class="control-label">图片</label></div>
                            <div class="col-sm-10">
                                <div class="control-group js_uploadBox">
                                    <div class="btn-upload">
                                        <a href="javascript:void(0);"><i class="icon-upload-alt"></i><span class="js_uploadText">上传</span>图片</a>
                                        <input class="js_upFile" type="file" name="pic_url">
                                    </div>

                                    <div class="js_showBox ">
                                        <img class="js_logoBox" src="/Public/Home/img/head.jpg" width="100px" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"><label class="control-label">分数</label></div>
                            <div class="col-sm-10"><input type="number" class="form-control" name="score"
                                                          placeholder="请输入分数" required></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"><label class="control-label">类型</label></div>
                            <div class="col-sm-10">
                                <select class="form-control" name="type" required>
                                    <option value="">请选择类型</option>
                                    <option value="1">探索</option>
                                    <option value="2">挑战</option>
                                    <option value="3">收集</option>
                                    <option value="4">知识</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group explore">
                            <div class="col-sm-2"><label class="control-label">经纬度</label></div>
                            <div class="col-sm-10">
                                <label>经度</label><input type="text" class="form-control" name="longitude"/>
                                <label>纬度</label><input type="text" class="form-control" name="latitude"/>
                                <br>
                                <button type="button" class="btn-success" onclick="getLocation();">定位获取</button>
                            </div>
                        </div>
                        <!--<div class="form-group">-->
                            <!--<div class="col-sm-2"><label class="control-label">是否设置题目</label></div>-->
                            <!--<div class="col-sm-10">-->
                                <!--<input type="radio"  name="is_question" value="1" id="question_1"/><label for="question_1">是</label>-->
                                <!--<input type="radio"  name="is_question" value="2" id="question_2" checked/><label for="question_2">否</label>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="form-group question">-->
                            <!--<div class="col-sm-2"><label class="control-label">题型</label></div>-->
                            <!--<div class="col-sm-10">-->
                                <!--<select class="form-control" name="question_type" onchange="showQuestionType()">-->
                                    <!--<option value="">请选择题型</option>-->
                                    <!--<option value="1">选择题</option>-->
                                    <!--<option value="2">问答题</option>-->
                                    <!--<option value="3">玩游戏</option>-->
                                <!--</select>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="form-group question_1 question_2">-->
                            <!--<div class="col-sm-2"><label class="control-label">题目</label></div>-->
                            <!--<div class="col-sm-10">-->
                                <!--<input type="text" class="form-control" name="question_title" value="" placeholder="请输入题目">-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="form-group question_1">-->
                            <!--<div class="col-sm-10">-->
                                <!--<input type="text" class="form-control selects" name="selectA" value="" placeholder="请输入选项A内容">-->
                                <!--<input type="text" class="form-control selects" name="selectB" value="" placeholder="请输入选项C内容">-->
                                <!--<input type="text" class="form-control selects" name="selectC" value="" placeholder="请输入选项C内容">-->
                                <!--<input type="text" class="form-control selects" name="selectD" value="" placeholder="请输入选项D内容">-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="form-group question_1">-->
                            <!--<div class="col-sm-2"><label class="control-label">答案</label></div>-->
                            <!--<div class="col-sm-10">-->
                                <!--<input type="radio"  name="answer" id="select_a" value="A"><label for="select_a">A</label>-->
                                <!--<input type="radio"  name="answer" id="select_b" value="B"><label for="select_b">B</label>-->
                                <!--<input type="radio"  name="answer" id="select_c" value="C"><label for="select_c">C</label>-->
                                <!--<input type="radio"  name="answer" id="select_d" value="D"><label for="select_d">D</label>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="form-group question_2">-->
                            <!--<div class="col-sm-2"><label class="control-label">答案</label></div>-->
                            <!--<div class="col-sm-10">-->
                                <!--<input type="text" class="form-control" name="answer"  value="" placeholder="请输入答案，最好精准">-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="form-group">-->
                            <!--<div class="col-sm-2"><label class="control-label">是否审核</label></div>-->
                            <!--<div class="col-sm-10">-->
                                <!--<input type="radio"  name="approve" id="approve_1"   value="1"><label for="approve_1">是</label>-->
                                <!--<input type="radio"  name="approve" id="approve_2"  value="2"><label for="approve_2" checked>否</label>-->
                            <!--</div>-->
                        <!--</div>-->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default form-control">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 bottom-blank">
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section">
                    <div class="container">
                        <div class="row footer-div">
                            <div class="col-xs-3"><a href="/Home/index/index"><i class="fa fa-3x fa-fw fa-home"></i>首页</a></div>
                            <div class="col-xs-3"><a href="/Home/mission/index"><i class="fa fa-3x fa-check-square fa-fw"></i>任务</a></div>
                            <div class="col-xs-3"><a href="/Home/mission/add"><i class="fa fa-3x fa-plus fa-fw"></i>新增</a></div>
                            <div class="col-xs-3"><a href="/Home/personal/index"><i class="fa fa-3x fa-user fa-fw"></i>个人</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="http://api.map.baidu.com/api?v2.0&ak=LW1YLfTfRXVchZvmex5xOuoXWbwyNSDl"></script>
    <script  type="text/javascript"  src="/Public/Home/js/jquery.uploadView.js"></script>

    <script>
        $(".js_upFile").uploadView({
            uploadBox: '.js_uploadBox',//设置上传框容器
            showBox : '.js_showBox',//设置显示预览图片的容器
            width : 100, //预览图片的宽度，单位px
            height : 100, //预览图片的高度，单位px
            allowType: ["gif", "jpeg", "jpg", "bmp", "png"], //允许上传图片的类型
            maxSize :2, //允许上传图片的最大尺寸，单位M
            success:function(e){
                $(".js_uploadText").text('更改');
                alert('图片上传成功');
            }
        });
    </script>
    <script>
        $(document).ready(function(){
            showQuestionType();
        });

        //根据不同的题目，显示不同的答案项
        function showQuestionType(){
            //拿题目类型
            var question_type = $("select[name=question_type]").val();
            //先隐藏题目选项的东西
            $(".question_1").hide();
            $(".question_2").hide();
            //根据题目类型显示
            $(".question_"+question_type).show();

        }
        //获取当前的经纬度
//        function getLocation(){
//            //这里写获取经纬度
//            //这个单词是经度
//            var longitude = "115.12125";
//            //这个单词是纬度
//            var latitude = "-23.123";
//
//            $("input[name=longitude]").val(longitude);
//            $("input[name=latitude]").val(latitude);
//
//        }

//        var x=document.getElementById("demo");
        function getLocation(){
            $("#location-tips").html("正在获取");
            var geolocation = new BMap.Geolocation();
            geolocation.getCurrentPosition(function(r){

                var city_lat = r.latitude;
                var city_lng = r.longitude;
                $("input[name=longitude]").val(city_lat);
                $("input[name=latitude]").val(city_lng);


            });
            $("#location-tips").html("");
        }

    </script>

</body>
</html>