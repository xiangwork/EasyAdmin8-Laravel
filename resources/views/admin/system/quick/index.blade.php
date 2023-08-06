@include('admin.layout.head')
<div class="layuimini-container">
    <div class="layuimini-main">
        <table id="currentTable" class="layui-table layui-hide"
               data-auth-add="{:auth('system.quick/add')}"
               data-auth-edit="{:auth('system.quick/edit')}"
               data-auth-delete="{:auth('system.quick/delete')}"
               lay-filter="currentTable">
        </table>
    </div>
</div>
@include('admin.layout.foot')
