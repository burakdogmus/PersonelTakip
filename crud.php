<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Row Editing in DataGrid - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="../../themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../../themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../demo.css">
    <script type="text/javascript" src="../../jquery.min.js"></script>
    <script type="text/javascript" src="../../jquery.easyui.min.js"></script>
</head>
<body>
    <h2>Row Editing in DataGrid</h2>
    <p>Click the row to start editing.</p>
    <div style="margin:20px 0;"></div>
    
 <table id="dg" title="My Users" style="width:550px;height:250px"
        toolbar="#toolbar" idField="id"
        rownumbers="true" fitColumns="true" singleSelect="true">
    <thead>
        <tr>
            <th field="firstname" width="50" editor="{type:'validatebox',options:{required:true}}">First Name</th>
            <th field="lastname" width="50" editor="{type:'validatebox',options:{required:true}}">Last Name</th>
            <th field="phone" width="50" editor="text">Phone</th>
            <th field="email" width="50" editor="{type:'validatebox',options:{validType:'email'}}">Email</th>
        </tr>
    </thead>
</table>
<div id="toolbar">
    <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">New</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Destroy</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancel</a>
</div>
</body>
</html>