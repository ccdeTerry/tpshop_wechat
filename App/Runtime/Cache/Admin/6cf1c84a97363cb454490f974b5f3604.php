<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加商品类型</title>
  <script type="text/javascript" src="/Public/resources/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="/Public/resources/layer/layer.js"></script>
<style type="text/css">
<!--
body {
  margin-left: 3px;
  margin-top: 0px;
  margin-right: 3px;
  margin-bottom: 0px;
}
.STYLE1 {
  color: #e1e2e3;
  font-size: 12px;
}
.STYLE6 {color: #000000; font-size: 12; }
.STYLE10 {color: #000000; font-size: 12px; }
.STYLE19 {
  color: #344b50;
  font-size: 12px;
}
.STYLE21 {
  font-size: 12px;
  color: #3b6375;
}
.STYLE22 {
  font-size: 12px;
  color: #295568;
}
a:link{
  color:#e1e2e3; text-decoration:none;
}
a:visited{
  color:#e1e2e3; text-decoration:none;
}
-->
</style>
  
  <!--引入富文本编辑器的3个js文件-->
<script type="text/javascript" charset="utf-8" src="<?php echo C('PLUGIN_URL');?>/Ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo C('PLUGIN_URL');?>/Ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="<?php echo C('PLUGIN_URL');?>/Ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript"  src="/Public/resources/jquery-1.8.2.min.js"></script>
</head>

<body>
  <style type="text/css">
    #tabbar-div {
      background: #80bdcb none repeat scroll 0 0;
      height: 22px;
      padding-left: 10px;
      padding-top: 1px;
      margin-bottom: 3px;
    }
    #tabbar-div p { margin: 2px 0 0;font-size:12px;
    }
    .tab-front {
      background: #bbdde5 none repeat scroll 0 0;
      border-right: 2px solid #278296;
      cursor: pointer;
      font-weight: bold;
      line-height: 20px;
      padding: 4px 15px 4px 18px;
    }
    .tab-back {
      border-right: 1px solid #fff;
      color: #fff; cursor: pointer;line-height: 20px;
      padding: 4px 15px 4px 18px;
    }
  </style>
  <script type="text/javascript">
  </script>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="<?php echo C('AD_IMG_URL');?>tb.gif" width="14" height="14" /></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1"> 商品管理 -> 修改属性</span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1">
            <a href="<?php echo U('showlist');?>">返回</a>   &nbsp; </span>
              <span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
  </tr>
  <tr>
    <td>
      <form action="" method="post" enctype="multipart/form-data">
      <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" id="general-tab-show" >
        <tr>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6">
            <div align="right">
            <span class="STYLE19">属性名称：</span></div></td>
          <input type="hidden" name="attr_id" value="<?php echo ($attrInfo["attr_id"]); ?>">
          <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
          <input type="text" name="attr_name" id="attr_name" value="<?php echo ($attrInfo["attr_name"]); ?>" />
            <span style="color: red"><?php echo ((isset($errorInfo["attr_name"]) && ($errorInfo["attr_name"] !== ""))?($errorInfo["attr_name"]):'*'); ?></span>
            
          </div>
          </td>
        </tr>
        <tr>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6">
            <div align="right">
            <span class="STYLE19">所属商品类型：</span></div></td>
          <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
         <select style="width:160px" name="type_id">
           <option value="0">--请选择--</option>
           <?php if(is_array($typeInfo)): foreach($typeInfo as $key=>$info): ?><option value="<?php echo ($info["type_id"]); ?>" <?php echo ($info['type_id'] ==$attrInfo['type_id'] ? 'selected=selected' :''); ?>><?php echo ($info["type_name"]); ?></option><?php endforeach; endif; ?>
         </select>
                <span style="color: red"><?php echo ((isset($errorInfo["type_id"]) && ($errorInfo["type_id"] !== ""))?($errorInfo["type_id"]):'*'); ?></span>
          </div>
          </td>
        </tr>   <tr>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6">
            <div align="right">
            <span class="STYLE19">属性是否可选：</span></div></td>
          <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
          <input type="radio" name="attr_sel" id="" value="only"  <?php echo ($attrInfo['attr_sel'] == 'only' ? 'checked="checked"' :''); ?>>唯一属性
          <input type="radio" name="attr_sel" id="" value="many" <?php echo ($attrInfo['attr_sel'] == 'many' ? 'checked="checked"' :''); ?>>单选属性
          </div>
          </td>
        </tr>   <tr>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6">
            <div align="right">
            <span class="STYLE19">属性录入方式：</span></div></td>
          <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
          <input type="radio" name="attr_write" id="attr_write" value="manual" <?php echo ($attrInfo['attr_write'] =='manual' ? 'checked="checked"' :''); ?>>手工录入
          <input type="radio" name="attr_write" id="attr_write" value="list" <?php echo ($attrInfo['attr_write'] =='list' ? 'checked="checked"' :''); ?>>从下拉列表中选取
          </div>
          </td>
        </tr>   <tr>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6">
            <div align="right">
            <span class="STYLE19">可选值列表：</span></div></td>
          <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
          <textarea style="width:160px;height: 80px" name="attr_vals"><?php echo ($attrInfo["attr_vals"]); ?></textarea>
            <span style="color: red;">*多个值以|隔开</span>
          </div>
          </td>
        </tr>
    </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce"
      <tr>
        <td colspan='100'  bgcolor="#FFFFFF"  class="STYLE6" style="text-align:center;">
        <input type="submit" value="修改属性" id="attr" />
        </td>
      </tr>
    </table>
    </form>
    </td>
  </tr>
</table>
</body>
</html>