<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>理发后台管理</title>
    <link rel="stylesheet" type="text/css" href="/school+/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/school+/Public/css/main.css"/>
    <script type="text/javascript" src="/school+/Public/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="/school+/Public/js/jquery-2.2.3.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#">店铺管理</a>
                    <ul class="sub-menu">
                        <li><a href="/school+/Lifaadmin/seller">查看店铺信息</a></li>
                        <li><a href="/school+/Lifaadmin/seller/changeseller">编辑店铺信息</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">理发预约管理</a>
                            <ul class="sub-menu">
                                <li><a href="/school+/Lifaadmin/lifa/addlifa">添加预约时间</a></li>
                                <li><a href="/school+/Lifaadmin/lifa/managelifa">管理预约时间</a></li>
                                <li><a href="/school+/Lifaadmin/lifa/dingdan">管理预约订单</a></li>
                            </ul>
                </li>

            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <!--/sidebar-->
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><span class="crumb-step">&gt;</span><a class="crumb-name" href=" ">理发预约管理</a><span class="crumb-step">&gt;</span><span>添加理发预约</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-content">
            <form action="/school+/lifaadmin/lifa/toChangeLifa" method="post" id="myform" name="myform" enctype="multipart/form-data">
                <table class="insert-tab" width="100%">
                    <tbody>
                    <!--暂时设置storeid 为2-->
                    <td><input type="text" name="ot_pnid" value="<?php echo ($news["ot_pnid"]); ?>"></td>

                    <td><input type="text" name="si_idddd" value="<?php echo ($news["si_idddd"]); ?>"></td>

                    <tr>
                        <th><i class="require-red">*</i>可预约时间段：</th>
                        <td><input class="common-text" name="ot_pntime" size="50"  value="<?php echo ($news["ot_pntime"]); ?>" type="text"></td>
                    </tr>

                    <tr>
                        <th>此时间段次种类可预约人数：</th>
                        <td><input class="common-text" name="ot_pnpnum" size="50"  value="<?php echo ($news["ot_pnpnum"]); ?>" type="text"></td>
                    </tr>
                    <tr>
                        <th>此时间段可预约种类：</th>
                        <td><input class="common-text" name="ot_type" size="50"value="<?php echo ($news["ot_type"]); ?>" type="text"></td>
                    </tr>

                    <tr>

                        <td style="padding:0px 200px" colspan="2" >
                            <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                            <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

</div>
<!--/main-->

    <!--/main-->
</div>
</body>
</html>