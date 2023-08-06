@include('admin.layout.head')
<div class="layuimini-container">
    <div class="layuimini-main">
        <table id="currentTable" class="layui-table layui-hide"
               data-auth-add="{:auth('mall.goods/add')}"
               data-auth-edit="{:auth('mall.goods/edit')}"
               data-auth-delete="{:auth('mall.goods/delete')}"
               data-auth-stock="{:auth('mall.goods/stock')}"
               lay-filter="currentTable">
        </table>
    </div>
</div>
@include('admin.layout.foot')
