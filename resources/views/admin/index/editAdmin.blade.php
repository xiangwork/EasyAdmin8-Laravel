@include('admin.layout.head')
<div class="layuimini-container">
    <div class="layuimini-main">

        <form id="app-form" class="layui-form layuimini-form">

            <div class="layui-form-item">
                <label class="layui-form-label required">用户头像</label>
                <div class="layui-input-block layuimini-upload">
                    <input name="head_img" class="layui-input layui-col-xs6" lay-reqtext="请上传用户头像" placeholder="请上传用户头像" value="{{$row['head_img']}}">
                    <div class="layuimini-upload-btn">
                        <span><a class="layui-btn" data-upload="head_img" data-upload-number="one" data-upload-exts="png|jpg|ico|jpeg"><i class="fa fa-upload"></i> 上传</a></span>
                        <span><a class="layui-btn layui-btn-normal" id="select_head_img" data-upload-select="head_img" data-upload-number="one"><i class="fa fa-list"></i> 选择</a></span>
                    </div>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label required">登录账户</label>
                <div class="layui-input-block">
                    <input type="text" name="username" class="layui-input" readonly value="{{$row['username']}}">
                    <tip>填写登录账户。</tip>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">用户手机</label>
                <div class="layui-input-block">
                    <input type="text" name="phone" class="layui-input" lay-reqtext="请输入用户手机" placeholder="请输入用户手机" value="{{$row['phone']}}">
                    <tip>填写用户手机。</tip>
                </div>
            </div>

            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">备注信息</label>
                <div class="layui-input-block">
                    <textarea name="remark" class="layui-textarea" placeholder="请输入备注信息">{{$row['remark']}}</textarea>
                </div>
            </div>

            <div class="hr-line"></div>
            <div class="layui-form-item text-center">
                <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit>确认</button>
                <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
            </div>

        </form>

    </div>
</div>
@include('admin.layout.foot')
