<form id="app-form" class="layui-form layuimini-form">

    <div class="layui-form-item">
        <label class="layui-form-label required">存储方式</label>
        <div class="layui-input-block">
            @foreach($upload_types as $key=>$val)
                <input type="radio" v-model="upload_type" name="upload_type" lay-filter="upload_type" value="{{$key}}" title="{{$val}}" @if($key==sysconfig('upload','upload_type')) checked="" @endif>
            @endforeach
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label required">允许类型</label>
        <div class="layui-input-block">
            <input type="text" name="upload_allow_ext" class="layui-input" lay-verify="required" lay-reqtext="请输入允许类型" placeholder="请输入允许类型" value="{{sysconfig('upload','upload_allow_ext')}}">
            <tip>英文逗号做分隔符。</tip>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label required">允许大小</label>
        <div class="layui-input-block">
            <input type="text" name="upload_allow_size" class="layui-input" lay-verify="required" lay-reqtext="请输入允许上传大小" placeholder="请输入允许上传大小" value="{{sysconfig('upload','upload_allow_size')}}">
            <tip>设置允许上传大小。</tip>
        </div>
    </div>

    <div class="layui-form-item oss layui-hide upload_type">
        <label class="layui-form-label required">公钥信息</label>
        <div class="layui-input-block">
            <input type="text" name="oss_access_key_id" class="layui-input" lay-verify="required" lay-reqtext="请输入公钥信息" placeholder="请输入公钥信息" value="{{sysconfig('upload','oss_access_key_id')}}">
            <tip>例子：FSGGshu64642THSk</tip>
        </div>
    </div>

    <div class="layui-form-item oss layui-hide upload_type">
        <label class="layui-form-label required">私钥信息</label>
        <div class="layui-input-block">
            <input type="text" name="oss_access_key_secret" class="layui-input" lay-verify="required" lay-reqtext="请输入私钥信息" placeholder="请输入私钥信息" value="{{sysconfig('upload','oss_access_key_secret')}}">
            <tip>例子：5fsfPReYKkFSGGshu64642THSkmTInaIm</tip>
        </div>
    </div>

    <div class="layui-form-item oss layui-hide upload_type">
        <label class="layui-form-label required">数据中心</label>
        <div class="layui-input-block">
            <input type="text" name="oss_endpoint" class="layui-input" lay-verify="required" lay-reqtext="请输入数据中心" placeholder="请输入数据中心" value="{{sysconfig('upload','oss_endpoint')}}">
            <tip>例子：https://oss-cn-shenzhen.aliyuncs.com</tip>
        </div>
    </div>

    <div class="layui-form-item oss layui-hide upload_type">
        <label class="layui-form-label required">空间名称</label>
        <div class="layui-input-block">
            <input type="text" name="oss_bucket" class="layui-input" lay-verify="required" lay-reqtext="请输入空间名称" placeholder="请输入空间名称" value="{{sysconfig('upload','oss_bucket')}}">
            <tip>例子：easy-admin</tip>
        </div>
    </div>

    <div class="layui-form-item oss layui-hide upload_type">
        <label class="layui-form-label required">访问域名</label>
        <div class="layui-input-block">
            <input type="text" name="oss_domain" class="layui-input" lay-verify="required" lay-reqtext="请输入访问域名" placeholder="请输入访问域名" value="{{sysconfig('upload','oss_domain')}}">
            <tip>例子：easy-admin.oss-cn-shenzhen.aliyuncs.com</tip>
        </div>
    </div>

    <div class="layui-form-item cos layui-hide upload_type">
        <label class="layui-form-label required">公钥信息</label>
        <div class="layui-input-block">
            <input type="text" name="cos_secret_id" class="layui-input" lay-verify="required" lay-reqtext="请输入公钥信息" placeholder="请输入公钥信息" value="{{sysconfig('upload','cos_secret_id')}}">
            <tip>例子：AKIDta6OQCbALQGrCI6ngKwQffR3dfsfrwrfs</tip>
        </div>
    </div>

    <div class="layui-form-item cos layui-hide upload_type">
        <label class="layui-form-label required">私钥信息</label>
        <div class="layui-input-block">
            <input type="text" name="cos_secret_key" class="layui-input" lay-verify="required" lay-reqtext="请输入私钥信息" placeholder="请输入私钥信息" value="{{sysconfig('upload','cos_secret_key')}}">
            <tip>例子：VllEWYKtClAbpqfFdTqysXxGQM6dsfs</tip>
        </div>
    </div>

    <div class="layui-form-item cos layui-hide upload_type">
        <label class="layui-form-label required">存储桶地域</label>
        <div class="layui-input-block">
            <input type="text" name="cos_region" class="layui-input" lay-verify="required" lay-reqtext="请输入存储桶地域" placeholder="请输入存储桶地域" value="{{sysconfig('upload','cos_region')}}">
            <tip>例子：ap-guangzhou</tip>
        </div>
    </div>

    <div class="layui-form-item cos layui-hide upload_type">
        <label class="layui-form-label required">存储桶名称</label>
        <div class="layui-input-block">
            <input type="text" name="cos_bucket" class="layui-input" lay-verify="required" lay-reqtext="请输入存储桶名称" placeholder="请输入存储桶名称" value="{{sysconfig('upload','cos_bucket')}}">
            <tip>例子：easyadmin-1251997243</tip>
        </div>
    </div>

    <div class="layui-form-item qnoss layui-hide upload_type">
        <label class="layui-form-label required">公钥信息</label>
        <div class="layui-input-block">
            <input type="text" name="qnoss_access_key" class="layui-input" lay-verify="required" lay-reqtext="请输入公钥信息" placeholder="请输入公钥信息" value="{{sysconfig('upload','qnoss_access_key')}}">
            <tip>例子：v-lV3tXev7yyfsfa1jRc6_8rFOhFYGQvvjsAQxdrB</tip>
        </div>
    </div>

    <div class="layui-form-item qnoss layui-hide upload_type">
        <label class="layui-form-label required">私钥信息</label>
        <div class="layui-input-block">
            <input type="text" name="qnoss_secret_key" class="layui-input" lay-verify="required" lay-reqtext="请输入私钥信息" placeholder="请输入私钥信息" value="{{sysconfig('upload','qnoss_secret_key')}}">
            <tip>例子：XOhYRR9JNqxsWVEO-mHWB4193vfsfsQADuORaXzr</tip>
        </div>
    </div>

    <div class="layui-form-item qnoss layui-hide upload_type">
        <label class="layui-form-label required">存储空间</label>
        <div class="layui-input-block">
            <input type="text" name="qnoss_bucket" class="layui-input" lay-verify="required" lay-reqtext="请输入存储桶地域" placeholder="请输入存储桶地域" value="{{sysconfig('upload','qnoss_bucket')}}">
            <tip>例子：easyadmin</tip>
        </div>
    </div>

    <div class="layui-form-item qnoss layui-hide upload_type">
        <label class="layui-form-label required">访问域名</label>
        <div class="layui-input-block">
            <input type="text" name="qnoss_domain" class="layui-input" lay-verify="required" lay-reqtext="请输入访问域名" placeholder="请输入访问域名" value="{{sysconfig('upload','qnoss_domain')}}">
            <tip>例子：http://q0xqzappp.bkt.cloudcdn.com</tip>
        </div>
    </div>

    <div class="hr-line"></div>
    <div class="layui-form-item text-center">
        <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit="system.config/save" data-refresh="false">确认</button>
        <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
    </div>

</form>
<script>
    var upload_type = "{{sysconfig('upload','upload_type')}}";
</script>
