<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>安装EasyAdmin8后台程序</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="static/plugs/layui-v2.x/css/layui.css" media="all">
    <link rel="stylesheet" href="static/common/css/install.css" media="all">
</head>
<body>
<h1><img src="/static/common/images/logo-1.png" alt="" style="width: 100px;height: 100px;"></h1>
<h2>安装 EasyAdmin8 后台系统</h2>
<div class="content">
    <form class="layui-form layui-form-pane" action="">
        <div class="layui-card">
            <blockquote class="layui-elem-quote layui-font-green" style="text-align: left;padding: 5px 10px;">
                <div class="layui-row">
                    <div class="layui-col-lg6 layui-col-xl6 layui-col-xs6 layui-col-sm6 layui-col-xs6">
                        官网教程：<a href="https://EasyAdmin8.top?spm=002.3e3c9d.29f459" target="_blank" class="layui-font-blue">EasyAdmin8.top</a>
                    </div>
                    <div class="layui-col-lg6 layui-col-xl6 layui-col-xs6 layui-col-sm6 layui-col-xs6">
                        常见问题：<a href="https://EasyAdmin8.top/guide/question.html?spm=002.3e3c9d.29f460" target="_blank" class="layui-font-blue">Question</a>
                    </div>
                </div>
            </blockquote>
        </div>
        @if ($errorInfo)
            <div class="error">
                {{$errorInfo}}
            </div>
        @endif
        <div class="bg">
            <div class="layui-form-item">
                <label class="layui-form-label">数据库地址</label>
                <div class="layui-input-block">
                    <input class="layui-input" name="hostname" autocomplete="off" lay-verify="required" lay-reqtext="请输入数据库地址" placeholder="请输入数据库地址" value="{{$envInfo['DB_HOST']}}">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">数据库端口</label>
                <div class="layui-input-block">
                    <input class="layui-input" name="hostport" autocomplete="off" lay-verify="required" lay-reqtext="请输入数据库端口" placeholder="请输入数据库端口" value="{{$envInfo['DB_PORT']}}">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">数据库名称</label>
                <div class="layui-input-block">
                    <input class="layui-input" name="database" autocomplete="off" lay-verify="required" lay-reqtext="请输入数据库名称" placeholder="请输入数据库名称" value="{{$envInfo['DB_NAME']}}">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">数据表前缀</label>
                <div class="layui-input-block">
                    <input class="layui-input" name="prefix" autocomplete="off" lay-verify="required" lay-reqtext="请输入数据表前缀" placeholder="请输入数据表前缀" value="{{$envInfo['DB_PREFIX']}}">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">数据库账号</label>
                <div class="layui-input-block">
                    <input class="layui-input" name="db_username" autocomplete="off" lay-verify="required" lay-reqtext="请输入数据库账号" placeholder="请输入数据库账号" value="{{$envInfo['DB_USER']}}">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">数据库密码</label>
                <div class="layui-input-block">
                    <input type="password" class="layui-input" name="db_password" autocomplete="off" lay-verify="required" lay-reqtext="请输入数据库密码" placeholder="root" value="{{$envInfo['DB_PASS']}}">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">覆盖数据库</label>
                <div class="layui-input-block" style="text-align: left">
                    <input type="radio" name="cover" value="1" title="覆盖">
                    <input type="radio" name="cover" value="0" title="不覆盖" checked>
                </div>
            </div>
        </div>
        <div class="bg">
            <div class="layui-form-item">
                <label class="layui-form-label">后台的地址</label>
                <div class="layui-input-block">
                    <input class="layui-input layui-disabled" id="admin_url" name="admin_url" autocomplete="off" lay-verify="required" lay-reqtext="请输入后台的地址" placeholder="为了后台安全，不建议将后台路径设置为admin" value="admin" readonly disabled>
                    <span class="tips">登录地址,可在 .env 中修改 EASYADMIN.ADMIN</span>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">管理员账号</label>
                <div class="layui-input-block">
                    <input class="layui-input" name="username" autocomplete="off" lay-verify="required" lay-reqtext="请输入管理员账号" placeholder="请输入管理员账号" value="admin">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">管理员密码</label>
                <div class="layui-input-block">
                    <input type="password" class="layui-input" name="password" maxlength="20" autocomplete="off" lay-verify="required" lay-reqtext="请输入管理员密码" placeholder="请输入管理员密码">
                </div>
            </div>
        </div>
        @csrf
        <div class="layui-form-item">
            <button class="layui-btn layui-btn-normal {{$errorInfo ? 'layui-btn-disabled' : ''}}" lay-submit="" lay-filter="install">确定安装
            </button>
        </div>
    </form>
</div>
<script src="static/plugs/layui-v2.x/layui.js?v={{time()}}" charset="utf-8"></script>
<script>
    let isInstall = {{$isInstall?:0}}
    layui.use(['form', 'layer'], function () {
        var $ = layui.jquery,
            form = layui.form,
            layer = layui.layer;
        if (!!isInstall) {
            layer.msg("已安装系统，如需重新安装请删除文件：/config/install/lock/install.lock，或者删除 /install 路由<br>页面将跳转", {
                icon: 5, shade: 0.6, time: 300000,
                success: function () {
                    setTimeout(function () {
                        location.href = '/'
                    }, 3000)
                }
            })
        }
        $("#admin_url").bind("input propertychange", function () {
            var val = $(this).val();
            $("#admin_name").text(val);
        });

        form.on('submit(install)', function (data) {
            if ($(this).hasClass('layui-btn-disabled')) {
                return false;
            }
            var _data = data.field;
            var loading = layer.msg('正在安装...', {
                icon: 16,
                shade: 0.2,
                time: false
            });
            $.ajax({
                url: window.location.href,
                type: 'post',
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                dataType: "json",
                data: _data,
                timeout: 60000,
                success: function (data) {
                    layer.close(loading);
                    if (data.code === 1) {
                        layer.msg(data.msg, {icon: 1}, function () {
                            window.location.href = '/admin';
                        });
                    } else {
                        layer.msg(data.msg, {icon: 2});
                    }
                },
                error: function (xhr, textstatus, thrown) {
                    layer.close(loading);
                    layer.msg('Status:' + xhr.status + '，' + xhr.statusText + '，请稍后再试！', {icon: 2});
                    return false;
                }
            });
            return false;
        });
    });
</script>
</body>
</html>
