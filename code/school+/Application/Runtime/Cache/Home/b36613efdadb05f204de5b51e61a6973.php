<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>校园+</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="/school+/Public/home/css/weui.min.css" type="text/css" rel="stylesheet">
    <link href="/school+/Public/home/css/jquery-weui.min.css" type="text/css" rel="stylesheet">
    <style>
        html,body{
            height:100%;
        }
        .weui-col-20 img{
            height: 38px;
            padding-top:2px;
            padding-left: 4px;
        }
        .pho img{
            width: 100%;
        }
        .ap{
            text-align: center;
        }
        .text p{
            font-size: 10px;
            margin-top: 10px;
            margin-left: 13px;
            margin-right: 13px;
            margin-bottom: 10px;
        }
        .t1{
            width: 100%;
            float: left;
        }
        .top1{
            float: left;
            margin-top: 2%;
            width: 25%;
        }
        .im{
            text-align: center;
        }
        .top1 img{
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }
        .f1{
            margin-top: -10px;
            text-align: center;
            font-family: 隶书;
            font-size: 16px;
        }
        .t2{
            width: 100%;
            float: left;
            background-color: #EEEEEE;
        }
        .t2 p{
            text-align: center;
            font-size: 12px;
        }
        .back{
        margin-top:10px;
        float:left;
        }
        .set{
        width:80%;
        padding-top:10px;
        margin:0 auto;
    	text-align:center;
		font-size:22px;
        }
    </style>
</head>
<body>
<div class="weui_tab">
    <div class="weui_tab_bd">

		
		    <div>
		    <!-- 返回图标开始 -->
		    <div   class="back" >
		    <a href="/school+/home/lifa/dianpu/si_id/<?php echo ($set["si_id"]); ?>"><img src="/school+/Public/home/images/back.jpg"  style="width:30px;height:30px;" ></a>
		    </div>
		    <div class="set" name="set">
		    <?php echo ($set["si_name"]); ?>
		    </div>
		    <!-- 返回图标结束 -->	
		    </div>
        

        <div class="pho">
            <img src="/school+/Public/home/images/5.png"alt="">
        </div>
        <div class="ap">
            本店简介
        </div>
        <hr/>
        <div class="text" name="set">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($set["si_sintroduce"]); ?><!-- 艺美理发店 经销批发的美发用品、美发用品畅销消费者市场，在消费者当中享有较高的地位，公司与多家零售商和代理商建
            立了长期稳定的合作关系。艺美理发店经销的美发用品、美发用品品种齐全、价格合理。艺美理发店实力雄厚，重信用、守
            合同、保证产品质量，以多品种经营特色和薄利多销的原则，赢得了广大客户的信任。 艺美理发店地址设在孔孟文化、运河
            文化、水浒文化的发源地济宁，山东 济宁市市中区 枣店阁路兴隆桥南50米，老板是王照云，主要经营美发用品、美发用品
            等，店铺注册资本未知，在职员工5名。 --></p>
        </div>
        <hr/>
        <div class="ap">
            业务分类
        </div>
        <hr/>
        <div class="t1">
            <a class="top1" href="dianpu">
                <div class="im"><img src="/school+/Public/home/images/h1.jpg" alt=""></div>
                <div class="f1">剪发</div>
            </a>
            <a class="top1" href="dianpu">
                <div class="im"><img src="/school+/Public/home/images/h3.jpg" alt=""></div>
                <div class="f1">烫发</div>
            </a>
            <a class="top1" href="dianpu">
                <div class="im"><img src="/school+/Public/home/images/h2.jpeg" alt=""></div>
                <div class="f1">染发</div>
            </a>
            <a class="top1" href="dianpu">
                 <div class="im"><img src="/school+/Public/home/images/h4.jpeg" alt=""></div>
                 <div class="f1">拉直</div>
            </a>
        </div>
        <hr/>
        <div class="t2">
            <p>地址：<?php echo ($set["si_address"]); ?></p>
            <p>营业时间：周一到周五&nbsp;<?php echo ($set["si_stime"]); ?>-<?php echo ($set["si_etime"]); ?></p>
            <p>联系方式：<?php echo ($set["si_phone"]); ?></p>
        </div>
    </div>

    <!--底部开始-->
    <div class="weui_tabbar">
		<a href="index.html" class="weui_tabbar_item weui_bar_item_on">
			<div class="weui_tabbar_icon">
				<img src="/school+/Public/home/images/b1.jpg" alt="">
			</div>
			<p class="weui_tabbar_label">首页</p>
		</a>
		<a href="sousuo.html" class="weui_tabbar_item">
			<div class="weui_tabbar_icon">
				<img src="/school+/Public/home/images/b2.jpg" alt="">
			</div>
			<p class="weui_tabbar_label">搜索</p>
		</a>
		<a href="gouwuche.html" class="weui_tabbar_item">
			<div class="weui_tabbar_icon">
				<img src="/school+/Public/home/images/b3.jpg" alt="">
			</div>
			<p class="weui_tabbar_label">购物车</p>
		</a>
		<a href="personal.html" class="weui_tabbar_item">
			<div class="weui_tabbar_icon">
				<img src="/school+/Public/home/images/b4.jpg" alt="">
			</div>
			<p class="weui_tabbar_label">个人中心</p>
		</a>
    </div>
    <!--底部结束-->
</div>
</body>
<script type="text/javascript" src="/school+/Public/home/js/jquery-2.1.4.js" ></script>
<script type="text/javascript" src="/school+/Public/home/js/jquery-weui.min.js"></script>

</html>