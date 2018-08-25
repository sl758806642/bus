<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="keywords" content="巴士   运来出行， 大巴，客车，租车，企业用车，旅游用车，用巴士，旅游大巴，旅游包车，接机，送机">
    <meta name="description" content="巴士   运来出行， 大巴，客车，租车，企业用车，旅游用车，用巴士，旅游大巴，旅游包车，接机，送机">
    <meta name="viewport" content="width=device-width" />
    <title>运来出行</title>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="/Application/Home/css/css.css" rel="stylesheet" />
    <link href="/Application/Home/css/order.css" rel="stylesheet" />
    <link href="/Application/Home/css/jquery-ui.css" rel="stylesheet" />
    <script src="/Application/Home/js/modernizr-2.6.2.js"></script>
    <script src="/Application/Home/js/jquery-1.8.2.js"></script>
    <script src="/Application/Home/js/jquery-ui-1.8.24.js"></script>
    <script src="/Application/Home/js/layer/layer.js"></script>
    <!-- <script src="/Application/Home/js/dayrentproduct.js"></script> -->
    <script src="/Application/Home/js/config.js"></script>
    <!-- <script src="/Application/Home/js/commonapi.js"></script> -->
    <style>
        .index {
            position: relative;
        }

        .banner .comm dl {
            line-height: 20px;
        }

        .banner .comm dl dt {
            width: 100px;
            text-align: right;
            padding: 10px 10px 10px 0;
            line-height: 30px;
            font-size: 16px;
        }

        .banner .comm dl dd {
            margin: 0;
            padding: 10px 0;
        }

        .banner .comm dl dd label {
            font-size: 16px;
        }

        .banner .comm dl dd .txt {
            background: #EEEEED;
            border-radius: 5px;
            border: 1px #CCCCCC solid;
            padding: 6px 10px;
            height: 20px;
        }

        .banner .comm dl dd.select-city {
            margin-top: 10px;
            padding: 0;
            border: 1px solid #ccc;
            height: 30px;
            border-radius: 5px;
            background: #EEEEED url(images/zoom-tblr.png) no-repeat right -86px;
            width: 153px;
        }

        .banner .comm section .result {
            left: 36px;
        }

        .banner .comm section .result .page {
            padding: 0 49px;
        }

        .banner .comm section .result .next {
            background: none;
            lineheight: none;
            color: black;
            font-size: 13px;
        }

        .banner .comm section .result a:hover {
            background: #D5D5D5;
        }

        .banner .comm section .result a {
            height: 34px;
        }

        .banner .comm section .drop-down-icon input {
            background: #EEEEED;
            width: 104px;
            border: none;
            padding: 6px 10px;
            height: 18px;
        }

        /* scrollleft */

        .scrollleft {
            width: 1000px;
            margin: 20px auto;
            background-color: #009100;
            padding: 10px 0;
            color: #fff;
            line-height: 2em;
        }

        .scrollleft li {
            float: left;
            margin-right: 7px;
            display: inline;
            width: 220px;
            border-right: 1px solid #fff;
            height: 170px;
            padding: 0 18px;
        }

        .scrollleft li h6 {
            font-weight: normal;
            border-bottom: 1px solid #fff;
            margin: 0;
            line-height: 40px;
            margin-bottom: 6px;
        }

        .scrollleft li p {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        footer {
            background: #f4f4f3 url(/Application/Home/img/logo.png) no-repeat center 40px;
            height: 229px;
            padding-top: 40px;
            margin-top: 30px;
            min-width: 1003px;
        }
        /*#demo {color:#fff; width: 1000px; background-color:#009100;height: 170px; padding:10px 0;margin: 0 auto;margin-top:25px;overflow: hidden;} #demo a+i{display: block;height: 1px;background:white;width: 190px;} #demo p{width:240px;} .demo ul{ height:200px;} .demo ul .line{padding-left:18px; height:170px;border-right:1px solid #fff; float:left; width:220px; overflow:hidden;}*/
    </style>
</head>

<body>
    <header>
        <div class="comm top">
            <div class="logo">
                <a href="<?php echo U('Index/index');?>" title="运来出行">
                    <img src="/Application/Home/img/logo.png" alt="运来出行">
                </a>
                <span style="left:280px;top:53px;font-size:18px; color:#006000;">全国旅游用车一站式服务平台</span>
            </div>
            <span>
                <?php if($_SESSION['user_id']): ?>你好，<?php echo ($_SESSION['user_name']); ?>&nbsp;&nbsp;<?php endif; ?>   
                <a href="<?php echo U('Order/order_list?type=0');?>">我的订单</a>&nbsp;
                <a href="<?php echo U('User/personal');?>">我的账户</a>
            </span>
            <?php if($_SESSION['user_id']): ?><div class="login_reg">
                    <a href="<?php echo U('Index/layout');?>">退出/注销</a>
                </div>
            <?php else: ?>
                <div class="login_reg">
                    <a href="<?php echo U('Index/login');?>">登录</a>/
                    <a href="<?php echo U('Index/reg');?>">注册</a>
                </div><?php endif; ?>

        </div>
    </header>
    
    <script>$(function () {
            $(".index").addClass("cur");
        });</script>
    <!-- <script src="/Application/Home/js/order.js"></script> -->
    
    
    
<link href="/Application/Home/css/order.css" rel="stylesheet"/>

<script src="/Application/Home/js/layer/layer.js"></script>
<script src="/Application/Home/js/order.js"></script>


<script src="/Application/Home/js/jquery-ui.min.js"></script>
<link href="/Application/Home/css/jquery-ui.css" rel="stylesheet" />
<script src="/Application/Home/js/dateinput-ch-zn.js"></script>

<nav>
    <div class="comm">
        <a href="<?php echo U('Index/index');?>">首页</a>
        <a class="index"  href="<?php echo U('Order/travel');?>">在线订车</a>
        <a href="<?php echo U('Order/rent_order');?>">日租包车</a>
        <a href="<?php echo U('Order/shuttle_order');?>">接机/送机</a>
    </div>
</nav>
<script>
    $(".order").addClass("cur");


    var order = 1;
    window.amount = 1;
    window.nextday = 2; //下一天
    var daily = 3;   //


    $(function () {

        $("#jj").addClass("cur");


        $('.hours').append(hourstxt);
        $('.minutes').append(minutestxt);

        //no
        $(".addseat").live('click', function () {
            var total = parseInt($("#total").val()) + 1;
            var length = $(this).parent().parent().find('li').length;
            if (length > 4) {
                layer.msg('最多只能添加五部车');
                return false;
            }
            var html = '<li>座位数&nbsp;<select class="select seat" name="seat{0}">';
            // var html = '<li>座位数&nbsp;<select class="select seat" name="car_id">';
            html += $.carseat();
            html += '</select>&nbsp;<label>车龄</label>&nbsp;<select class="select" name="age{0}"><option value="1">0-1年</option><option value="2">0-2年</option><option value="3">0-3年</option><option value="4">0-4年</option><option value="5">0-5年</option><option value="6">0-6年</option><option value="7">0-7年</option><option value="8">0-8年</option></select>&nbsp;<input type="button" class="btn del" value="删除" /></li>';
            html = html.replace(/\{0\}/g, total);
            $(this).append(html);
            $(".del").click(function () { //绑定删除事件
                $(this).parent().remove();
            });
            $("#total").val(total);
        });


        $('.drop-down-icon').live('click', function (e) {
            $(".result").hide();
            e.stopPropagation();
            $(this).children('.citylist').html(citylist).toggle();
            $('.citylist .menu li').bind('click', function () {
                $(this).addClass('hover').siblings().removeClass('hover');
                $('.citylist .main ul').eq($('.menu li').index(this)).show().siblings().hide();
                return false;
            });
            $('.citylist .main a').bind('click', function () {
                var city = $(this).html();
                var cityID = $(this).attr("cid");
                $(this).parents('.citylist').prev().val(city);
                $(this).parents('.citylist').prev().prev().val(cityID);
                //var city = $(this).html();
                //$(this).parents('.citylist').prev().val(city);
                $('.citylist').hide();
                $(this).parents('.select-city').next().find('.input').val('');
                return false;
            });
        });


        //no
        function orderlist() {

            if ($("#datepicker0").text() == '') {
                $("#message-flight-date").css('color', '#009100');
                $("#message-flight-date").val('内容不能为空');
            }
        }

        /*$(".adddaily").click(function(){
            $.checkvalidate();
        });*/


        $.findaction = function (day, id, visible) {

            $("[id=" + id + "]").each(function (a, b) {
                var show = parseInt($(b).attr("show"));
                if (show == day) {
                    $(b).css('display', visible);
                    return false;
                }
            });

        };


        $.findvisible = function (id, day) {
            var next;
            //$("[id=" + id + "]").each(function (a, b) {

            //    if ($(b).attr('show') == day) {
            //        if ($(b).css('display') == 'block')
            //            $(b).slideToggle("fast").siblings("#" + id + ":hidden").slideUp("fast");
            //        //alert(day);
            //        //$(b).next("#"+id).slideToggle("fast").siblings("#"+id+":visible").slideUp("fast");
            //        return false;
            //    } else {
            //        if ($(b).css('display') == 'block')
            //            $(b).slideToggle("fast").siblings("#" + id + ":hidden").slideUp("fast");
            //    }
            //});
        };


        $.deldiv = function (name, day, type) {
            var obj;
            switch (type) {
                case 'name':
                    obj = $('[name=' + name + ']');
                    break;
                case 'id':
                    obj = $('[id=' + name + ']');
                    break;
            }
            //var len = obj.length;
            //alert(len);
            var delswitch = false;
            var pos = 0;
            var len = obj.length;
            obj.each(function (a, b) {
                var currentday;
                if (type == 'name')
                    currentday = parseInt($(b).attr('day'));
                else
                    currentday = parseInt($(b).attr('show'));

                if (currentday == day - 1) {
                    $(b).next("#divtravel").css('display', 'block');
                }
                if (currentday == day) {

                    $(b).remove();
                    $(b).css('display', 'none');
                    if (day != 1) {
                        delswitch = true;
                    }
                } else {
                    //alert(day);
                    if (delswitch == true && currentday > day) {
                        pos++;
                        $(b).remove();
                        $(b).css('display', 'none');
                        //$('.addday').val('添加第'+window.nextday+'天行车线路');
                        if (type == 'name') {
                            window.amount--;
                            window.nextday--;
                            daily--;
                        }
                        $('.addday').val('添加第' + window.nextday + '天行车线路');
                    }
                }

            });
        };


        $.addorder = function (order, nextday, daily) {
            var html = "<div class='daily' name='daily' day = '" + nextday + "' >第" + nextday + "天行车线路";
            html = html + "<input type='button' class='adddaily delday' value='删除' daily='" + nextday + "'  /></div>";
            html = html + "<div id='divtravel' name='divtravel' show = '" + nextday + "' style='display:block' >";
            html = html + '<input type="hidden" name="travel[' + nextday + '][total]" id="total" value="0">';
            html = html + "<dl><dt>用车时间</dt><dd>";
            html = html + '<input type="text" id="dayDate" name="travel[' + nextday + '][date][]" class="txt date" value="' + (new Date($("#datepicker4").val())).addDays(nextday - 1).Format("yyyy-MM-dd") + '" />';
            html = html + '<select class="select hours" name="travel[' + nextday + '][hours][]"></select>&nbsp;:';
            html = html + '<select class="select minutes" name="travel[' + nextday + '][minutes][]"></select>&nbsp;';
            html = html + "<input type='hidden' name='daily' id='daily' value='1' />";
            html = html + "<input type='hidden' name='order' id='order' value='1' />";
            html = html + "</dl><div class='clear'></div>";
            return html;
        };

        $("[name=daily]").live('click', function () {
            //$(this).next("#divtravel").slideToggle("fast").siblings("#divtravel:visible").slideUp("fast");
        });

        $(".delday").live('click', function () {
            var obj = $(this);
            layer.confirm('删除会将当前及下面的数据都删除，确认删除吗?', {
                icon: 3, title: '', btn: ['确认', '取消']
            }, function (index) {
                //do something
                if (window.amount <= 1) {
                    window.nextday = 2;
                    daily = 3;
                    window.amount = 1;
                    //layer.msg('至少保留一天');
                }
                var day = parseInt(obj.attr('daily'));


                $.deldiv('daily', day, 'name');	//删除标题
                $.deldiv('divtravel', day, 'id');	//删除订单内容

                $("#total").val(day - 1);

                window.amount--;
                window.nextday--;
                daily--;

                $('.addday').val('添加第' + window.nextday + '天行车线路');

                layer.close(index);
            });
            //var mes = "删除会将当前及下面的数据都删除，确认删除吗?";
            //if (confirm(mes)) {
            //    if (window.amount <= 1) {
            //        window.nextday = 2;
            //        daily = 3;
            //        window.amount = 1;
            //        //layer.msg('至少保留一天');
            //    }
            //    var day = parseInt($(this).attr('daily'));
            //    $.deldiv('daily', day, 'name');	//删除标题
            //    $.deldiv('divtravel', day, 'id');	//删除订单内容
            //    window.amount--;
            //    window.nextday--;
            //    daily--;
            //    $('.addday').val('添加第' + window.nextday + '天行车线路');
            //}

        });

        







    });


</script>
<style>
    .dailyhide {
        display: none;
    }

    .dailyextend {
        display: block;
    }
</style>
<div class="comm step">
    <dl>
        <dt><span>1.</span>选择用车方式<em></em><i></i></dt>
        <dd><span>2.</span>选择车型<em></em><i></i></dd>
        <dd><span>3.</span>填写乘车人信息<em></em><i></i></dd>
    </dl>
</div>
<div class="comm book">
    <div class="left" id="side">
    <ul>
        <li id="lefttravel">
            <a href="<?php echo U('Order/travel');?>" id="jj" class="cur">旅游包车</a>
        </li>
        <li id="lefttravel">
            <a href="<?php echo U('Order/rent_order');?>" id="dayrent">日租包车</a>
        </li>
    </ul>
</div>
    <div class="right" id="divmaincontent">
        <!--旅游包车-->
<form action="<?php echo U('Order/travel_order');?>" id="travel" method="post" name="travel"><input name="__RequestVerificationToken" type="hidden" value="MaLfrYAJLDra3Z01sGvWV2P_S3jSK3qQIKz_OLhJbbC42gE1-S8GhtbV10KmscrxF6LeogOrGSIW3mV_ycOGYbkzVsc1" />            <input type="hidden" id="travelPlan" name="travelPlan" value="旅游包车">
            <input type="hidden" name="fromType" value="" />
            <input type="hidden" name="fromType" value="" />
            <input type="hidden" name="thirdOrderNO" value="" />
            <input type="hidden" name="cartype" id="cartype" value="">
            <input type="hidden" name="order_type" id="order_type" value="0">
            <dl>
                <dt>租车类型</dt>
                <dd>
                    <label style="color: #333; margin-right: 80px;">
                        <input name="rental_type" type="radio" value="0" readonly="readonly" style="margin-top: 5px;">单程
                    </label>
                    <label style="color: #333">
                        <input name="rental_type" type="radio" value="1" readonly="readonly">往返
                    </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </dd>

                <dt>用车日期</dt>
                <dd>
                    <input type="text" id="datepicker4" name="transport_data" value="" class="txt date">
                </dd>
                <div class="cartlist">
                    <ul id="condition" class="condition">
                        <input type="hidden" name="total" id="total" value="1">
                        <li>
                            座位数
                            <select class="select seat" name="car_id" id="seat">
                                <!--<div class="seatlist"></div>-->
                                <option value="0">请选择座位数</option>
                                <?php if(is_array($car_list)): foreach($car_list as $key=>$list): ?><option value="<?php echo ($list["id"]); ?>"><?php echo ($list["people_num"]); ?>座 / <?php echo ($list["car_name"]); ?></option><?php endforeach; endif; ?>
                            </select>
                            <label>数量</label>
                            <select class="select" name="car_number" id="seating">
                                <option onfocus=" this.blur(); " value="1">1</option>
                                <option onfocus=" this.blur(); " value="2">2</option>
                                <option onfocus=" this.blur(); " value="3">3</option>
                                <option onfocus=" this.blur(); " value="4">4</option>
                                <option onfocus=" this.blur(); " value="5">5</option>
                                <option onfocus=" this.blur(); " value="6">6</option>
                                <option onfocus=" this.blur(); " value="7">7</option>
                                <option onfocus=" this.blur(); " value="8">8</option>
                                <option onfocus=" this.blur(); " value="9">9</option>
                                <option onfocus=" this.blur(); " value="10">10</option>
                            </select>
                            <input type="button" class="addday" value="添加第2天行车线路" style="float: right">
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </dl>
            <div class="daily" name="daily" day="1">
                第1天行车线路
            </div>
            <div id="divtravel" name="divtravel" show="1" style="display: block;">
                <input type="hidden" name="travel[1][total]" id="total" value="0">
                <dl>
                    <dt>用车时间</dt>

                    <dd>
                        <input type="text" name="travel[1][date][]" id="travel1" class="txt date" />
                        <!-- <select class="select hours" name="transport_hour"></select> -->
                        <select class="select hours" name="travel[1][hours][]"></select>
                        :
                        <!-- <select class="select minutes" name="transport_minute"></select> -->
                        <select class="select minutes" name="travel[1][minutes][]"></select>

                        <input type="hidden" name="daily" id="daily" value="1">
                        <input type="hidden" name="order" id="order" value="1">
                    </dd>
                    
                    <!--<div style="clear:both"></div>-->
                </dl>
                <div class="path" id="path">
                    <dl>
                        <dt>出发地点</dt>
                        <!-- <dd class="select-city">
                            <div class="drop-down-icon">
                                <input type="hidden" name="travel[1][travel-startid]" class="id" />
                                <input onfocus=" this.blur(); " readonly="readonly" type="text" class="txt city" value="" id="travel-start" name="travel[1][travel-start]">
                                <div class="citylist"></div>
                            </div>
                        </dd> -->
                        <dd class="select-city">
                            <div class="drop-down-icon">
                                <input type="hidden" name="travel-cityid" id="travel-cityid" />
                                <input type="text" class="txt city" value="" id="travel-start" name="travel[1][travel_start]" readonly="readonly">
                                <div class="citylist" style="display: none;"></div>
                            </dd>
                        <dd>
                            <div class="part">
                                <!-- <input type="text" class="txt place input" id="travel-address" name="travel[1][travel-address]" placeholder="请输入附近的小区/街道/建筑物/商圈" style="width: 360px;" autocomplete="off" value=""> -->
                                <input type="text" class="txt place input" id="travel-address" name="travel[1][travel_address]" placeholder="请输入附近的小区/街道/建筑物/商圈" style="width: 360px;" autocomplete="off" value="">
                                <input type="button" class="add" value="添加途经点">
                                <input type="hidden" class="hasquery" value="0">
                                <input type="hidden" class="jw" id="fromjw" name="travel[1][fromjw]" value="">
                                <input name="travel[1][fromaddr]" class="addr" type="hidden" id="fromaddr" size="57" value="">
                                <div style="display: none" id="result3" class="result"> Loading... </div>
                            </div>
                            
                        </dd>
                    </dl>
                </div>
                <div class="path">
                    <dl>
                        <dt>目的地点</dt>
                        <!-- <dd class="select-city">
                            <div class="drop-down-icon">
                                <input type="hidden" name="travel[1][travel-endid]" class="id" />
                                <input onfocus=" this.blur(); " readonly="readonly" type="text" class="txt city" id="travel-end" name="travel[1][travel-end]" value="">
                                <div class="citylist"></div>
                            </div>
                        </dd> -->
                        <!-- <dd class="select-city">
                            <div class="drop-down-icon">
                                <input type="hidden" name="travel-cityid" id="travel-cityid" />
                                <input type="text" class="txt city" value="哈尔滨" id="travel-start" name="travel_start" readonly="readonly">
                                <div class="citylist" style="display: none;"></div>
                            </dd>
                        <dd>
                        <dd>
                            <div class="part">
                                <input type="text" class="txt place input" id="end-address" name="travel[1][end-address]" placeholder="请输入附近的小区/街道/建筑物/商圈" autocomplete="off">
                                <input type="hidden" class="hasquery" value="0">
                                <input type="hidden" class="jw" id="tojw" name="travel[1][tojw]" value="">
                                <input name="travel[1][toaddr]" class="addr" type="hidden" id="toaddr" size="57">
                                <div style="display: none" id="result2" class="result"> Loading... </div>
                            </div> -->
                            <dd class="select-city">
                                    <div class="drop-down-icon">
                                        <input type="hidden" name="travel-cityid" id="travel-cityid" />
                                        <input type="text" class="txt city" value="" id="travel-start" name="travel[1][travel_end]" readonly="readonly">
                                        <div class="citylist" style="display: none;"></div>
                                    </dd>
                                <dd>
                                    <div class="part">
                                        <input type="text" class="txt place input" id="end-address" name="travel[1][end_address]" placeholder="请输入附近的小区/街道/建筑物/商圈" autocomplete="off">
                                        <input type="hidden" class="hasquery" value="0">
                                        <input type="hidden" class="jw" id="tojw" name="travel[1][tojw]" value="">
                                        <input name="travel[1][toaddr]" class="addr" type="hidden" id="toaddr" size="57">
                                        <div style="display: none" id="result2" class="result"> Loading... </div>
                                    </div>
                                </dd>
                        </dd>
                    </dl>
                </div>
            </div>
            <!-- <div style="text-align:center; width:700px; position:relative; padding-bottom:30px;">
                    <dt>&nbsp;</dt>
                    <dd>
                        <input class="tijiao submit" type="button" value="下一步,填写用户信息">
                    </dd>
            </div> -->
        </form>
    </div>
    <div class="clear"></div>
    <div style="text-align:center; width:700px; position:relative; padding-bottom:30px;">
        <dt>&nbsp;</dt>
        <dd>
            <input class="tijiao submit" style="float:right" type="button" value="下一步,填写用户信息">
        </dd>
    </div>
    <!-- <div style="width:700px; position:relative; padding-bottom:30px;">
        <dt>&nbsp;</dt>
        <dd>
            <input class="tijiao submit" style="float:right" type="button" value="下一步,填写用户信息">
        </dd>
    </div> -->
    <i id="yongche" style="display:none">
        <div class="path" id="path">
            <dl>
                <dt>出发地点</dt>
                <dd class="select-city">
                    <div class="drop-down-icon">
                        <input type="hidden" name="travel_startid" class="id" />
                        <input type="text" class="txt city" value="" id="travel-start" name="travel_start" />
                        <div class="citylist"></div>
                    </div>
                </dd>
                <dd>
                    <div class="part">

                        <input type="text" class="txt place input" id="travel-address" name="travel_address" placeholder="请输入附近的小区/街道/建筑物/商圈" style="width:360px;" autocomplete="off" />
                        <input type="button" class="add" value="添加途经点" />
                        <input type="hidden" class="hasquery" value="0" />
                        <input type="hidden" class="jw" id="fromjw" name="fromjw" value="" />
                        <input name="fromaddr" class="addr" type="hidden" id="fromaddr" size="57" />
                        <div style="display:none" id="result3" class="result"> Loading... </div>
                        
                    </div>
                </dd>
            </dl>
        </div>
        <div class="path">
            <dl>
                <dt>目的地点</dt>
                <dd class="select-city">
                    <div class="drop-down-icon">
                        <input type="hidden" name="travel_endid" class="id" />
                        <input type="text" class="txt city" id="travel-end" name="travel_end" value="" />
                        <div class="citylist"></div>
                    </div>
                </dd>
                <dd>
                    <div class="part">
                        <input type="text" class="txt place input" id="end-address" name="end_address" placeholder="请输入附近的小区/街道/建筑物/商圈" autocomplete="off" />
                        <input type="hidden" class="hasquery" value="0" />
                        <input type="hidden" class="jw" id="tojw" name="tojw" value="" />
                        <input name="toaddr" class="addr" type="hidden" id="toaddr" size="57" />
                        <div style="display:none" id="result2" class="result"> Loading... </div>
                    </div>
                </dd>
            </dl>
        </div>

    </i>

</div>
<script>

    $(".date").each(function () {
        $(this).datepicker({
            minDate: new Date()
        });
    });

    //$("#datepicker4").datepicker({ minDate: new Date() });
    $("#datepicker4").change(function () {
        $("#travel1").val($("#datepicker4").val());
    });

    $("#travel1").change(function () {
        $("#datepicker4").val($("#travel1").val());
    });

    $(".tijiao").bind('click', function () {
        
        var tijiao = checkvalidate();
        // console.log(tijiao);
        var riqi = true;

        var date = $("#datepicker4").val(); //用户选择的日期
        var now = new Date();
        var thisyear = now.getFullYear(); //年
        var thismonth = now.getMonth() + 1; //月
        var thisday = now.getDate(); //日
        var hh = now.getHours(); //时
        var mm = now.getMinutes(); //分
        if (thismonth < 10) {
            thismonth = "0" + thismonth;
        }

        if (thisday < 10) {
            thisday = "0" + thisday;
        }
        var clock = thisyear + "-" + thismonth + "-" + thisday;
        if (clock == date) {
            var hour1 = $('div[day=1]').next().find('.hours').val(); //第一天的小时
            var minute1 = $('div[day=1]').next().find('.minutes').val(); //第一天的分钟
            if (parseInt(hour1) - parseInt(hh) == 0) {
                if (parseInt(minute1) - parseInt(mm) < 0) {
                    layer.msg("选择的时间不得小于当前时间");
                    riqi = false;
                    return riqi;
                }
            } else if (parseInt(hour1) - parseInt(hh) < 0) {
                layer.msg("选择的时间不得小于当前时间");
                riqi = false;
                return riqi;
            }
        }
        if (tijiao && riqi&&checkLogin()) {
            $("#travel").submit();
        }
    });

    // function checkLogin() {
    //     var utype = "0";
    //     if (utype == "0") {
    //         layer.msg('请先登录');
    //         return false;
    //     }
    //     else if (utype == "3") {
    //         layer.msg('车队不能下单');
    //         return false;
    //     }

    //     return true;
    // }
    function checkForm() {
        var hasseat = true;
        $("#condition li").each(function (i) {
            var seat = $(this).find('.seat').val();
            if (seat == 0) {
                hasseat = false;
            }
        });
        if (!hasseat) {
            layer.msg('请选择座位数');
            return false;
        }
    }

</script>
<script>

var hours = ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23'];
var minutes = ['00', '10', '20', '30', '40', '50'];
$.hours = function () {
    var htxt = '';
    $.each(hours, function (i, val) {
        if (val == '08') {
            htxt += '<option selected="true" value="' + val + '">' + val + '</option>';
        } else {
            htxt += '<option value="' + val + '">' + val + '</option>';
        }
    });
    return htxt;
};
$.minutes = function () {
    var mtxt = '';
    $.each(minutes, function (i, val) {
        mtxt += '<option value="' + val + '">' + val + '</option>';
    });
    return mtxt;
};
var hourstxt = $.hours();
var minutestxt = $.minutes();

$('.hours').html(hourstxt);
$('.minutes').html(minutestxt);


// ---------------------

function checkLogin() {

    var user_id = "<?php echo ($_SESSION['user_id']); ?>";
    // alert(user_id);return false;
    if(!user_id) {
        // console.log('user_id=0');
        layer.msg('请先登录');
        return false;
    }

    return true;
        // var utype = "0";
        // if (utype == "0") {
        //     layer.msg('请先登录');
        //     return false;
        // }
        // else if (utype == "3") {
        //     layer.msg('车队不能下单');
        //     return false;
        // }

        // return true;
}


// $.checkvalidate = function() {
// console.log(123);
// if (!checkLogin()) {
//     console.log(123);
//     return false;
// }

function checkvalidate() {
    var user_id = "<?php echo ($_SESSION['user_id']); ?>";
    // console.log(user_id);
    if(!user_id) {
        layer.msg('请先登录');
        return false;
    }

    // var a = checkLogin();
    // console.log('checkLogin');
    // alert(a);
    // return false;
    // if (!checkLogin()) {
    //     console.log('checkLogin_flase');
    //     return false;
    // }

var len = $('div[day]').length;
for (var i = 1; i < (parseInt(len) + 1); i++) {
    var via = $('div[day="' + i + '"]').next().find('.path .via');
    var vialen = $(via).length;

    if (vialen > 0) {
        for (var l = 1; l < (parseInt(vialen) + 1) ; l++) {
            var idname = $(via).eq(l - 1).find('dd.select-city div input.id').attr('name');
            var name = $(via).eq(l - 1).find('dd.select-city div input.city').attr('name');

            var paname = $(via).eq(l - 1).find('dd div.part input').eq(0).attr('name'); //获取pathname
            var jwname = $(via).eq(l - 1).find('dd div.part input').eq(3).attr('name'); //获取pathjw
            var adname = $(via).eq(l - 1).find('dd div.part input').eq(4).attr('name'); //获取pathaddr
            //对名称进行处理
            if (name.length == 5 && paname.length == 9 && jwname.length == 7 && adname.length == 9) {
                $(via).eq(l - 1).find('dd.select-city div input.id').attr('name', "travel[" + i + "][" + idname + "]");
                $(via).eq(l - 1).find('dd.select-city div input.city').attr('name', "travel[" + i + "][" + name + "]");
                $(via).eq(l - 1).find('dd div.part input').eq(0).attr('name', "travel[" + i + "][" + paname + "]");
                $(via).eq(l - 1).find('dd div.part input').eq(3).attr('name', "travel[" + i + "][" + jwname + "]");
                $(via).eq(l - 1).find('dd div.part input').eq(4).attr('name', "travel[" + i + "][" + adname + "]");
            }

            //alert($(via).eq(l - 1).find('dd.select-city div input.id').attr("name"));
        }
    }
}

//验证租车类型
var checkradio = $("#travel").find("input:radio[name='rental_type']:checked").val();
var checkradio = typeof($("input[name='rental_type']:checked").val());
// alert(checkradio); return false;
// console.log(checkradio);return false;
if (checkradio == "undefined") {
    layer.msg("请选择租车类型");
    return false;
}

//验证用车日期
var startdate = $("#travel").find("#datepicker4").val();
var r = startdate.match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/);
// console.log(startdate);
if (r == null) {
    layer.msg("请选择用车日期", { time: 1500 }, function() {
        $("#travel").find("#datepicker4").focus();
    });
    return false;
}
//验证座位数
var seat = $("#travel").find(".seat").val();
if (seat == '0') {
    layer.msg("请选择座位数");
    return false;
}

//循环天数 验证
for (i = 1; i < (parseInt(len) + 1); i++) {
    var div = $("div[day=" + i + "]").next();
    //验证 日期
    var dayDate = $(div).find("dl dd .date").val();
    if (dayDate == '') {
        layer.msg("请选择用车日期！");
        $(div).find("dl dd .date").focus();
        return false;
        break;
    }

    var fromjw = $(div).find("#fromjw").val();
    var fromaddr = $(div).find("#fromaddr").val();
    if (fromjw == '' || fromaddr == '') {
        layer.msg('请重新输入并选择起点地址');
        return false;
    }
    var tojw = $(div).find("#tojw").val();
    var toaddr = $(div).find("#toaddr").val();
    if (tojw == '' || toaddr == '') {
        layer.msg("请重新输入并选择终点地址");
        return false;
    }
    
    var midway = $('div[day="' + i + '"]').next().find('.path .via');
    var midlen = $(via).length;
    var starthour = $(div).find('dl select.hours').val();
    var startminute = $(div).find('dl select.minutes').val();
    var h = starthour.match(/^(\d{2})$/);
    var m = startminute.match(/^(\d{2})$/);
    if (h == null) {
        layer.msg('请选择正确的用车小时,如:02', { time: 1500 }, function() {
            $("div[day=" + i + "]").next().find('#travel-hour').focus();
        });
        return false;
        break;
    } else if (m == null) {
        layer.msg('请选择正确的用车分钟,如:03', { time: 1500 }, function() {
            $("div[day=" + i + "]").next().find('#travel-minute').focus();
        });
        return false;
        break;
    }

    //出发城市验证
    var startcity = $(div).find('.drop-down-icon #travel-start').val();
    if (startcity == '') {
        layer.msg("请选择您的出发地点城市", { time: 1500 }, function() {
            $(div).find('.drop-down-icon #travel-start').focus();

        });
        return false;
        break;
    }
    

    //出发地址验证
    var startaddress = $(div).find(".part #travel-address").val();
    if (startaddress == '') {
        layer.msg("请输入并选择您的出发地址", { time: 1500 }, function() {
            $(div).find(".part #travel-address").focus();
        });
        return false;
        break;
    }

    //目的城市验证
    var endcity = $(div).find('.drop-down-icon #travel-end').val();
    if (endcity == '') {
        layer.msg('请选择您的目地点的城市', { time: 1500 }, function() {
            $(div).find('.drop-down-icon #travel-end').focus();
        });
        return false;
        break;
    }

    //目的地址验证
    var endaddress = $(div).find(".part #end_address").val();
    if (endaddress == '') {
        layer.msg("请输入并选择您的目的地址", { time: 1500 }, function() {
            $(div).find(".part #end-address").focus();
        });
        return false;
        break;
    }

    var city = {};
    var place = {};
    var vi = true;
    if (!vi) {
        pass = false;
        return false;
    }
    
    var start = $(div).find("#result3 ul .no").html(); //当百度没有匹配输入的起点地址时的内容
    var travelstart = $(div).find("#travel-address").val(); //出发地点输入地址
    var travelend = $(div).find("#end_address").val(); //目的地点输入地址
    var startlength = $(div).find("#result3 ul li").length; //起点匹配地址时li的长度
    var endlength = $(div).find("#result2 ul li").length;
    var endi = endlength;
    var starti = startlength;
    //循环输出百度接口匹配用户输入数据，并与用户输入数据作比对
    for (var b = 0; b < (parseInt(startlength) + 1); b++) {
        var startid = $(div).find('#result3 ul li');
        var startobj = $(startid).eq(b).find("a span.name").html();
//                console.log("startobj" + startobj);
        //console.log("travelstart"+travelstart);
        // if (startobj != travelstart) {                    
        //    if (starti == 0 && startobj != travelstart) {
        //        layer.msg('请重新输入并选择您的出发点地址');
        //        $(div).find("#travel-address").focus();
        //        return false;
        //    }
        // } else if (startobj == travelstart) {
        //    break;
        // }
    }

    for (var a = 0; a < (parseInt(endlength) + 1); a++) {
        var endid = $(div).find('#result2 ul li');
        var endobj = $(endid).eq(a).find("a span.name").html();
        // if (endobj != travelend) {
        //    endi--;
        //    if (endi == 0 && endobj != travelend) {
        //        layer.msg('请重新输入并选择您的目的地点地址');
        //        $(div).find("#end-address").focus();
        //        return false;
        //    }
        // } else if (endobj == travelend) {
        //    break;
        // }
    }

    var mid = $("#result1 ul .no").html(); //当百度没有匹配输入的途径点地址时的内容
    var end = $("#result2 ul .no").html(); //当百度没有匹配输入的终点地址时的内容
    if (start) {
        layer.msg('请重新输入并选择您的出发点地址');
        return false;
    } else if (end) {
        layer.msg('请重新输入并选择您的目的地点地址');
        return false;
    } else if (mid) {
        layer.msg('请重新输入并选择您的途径点地址');
        return false;
    }

    for (var c = 0; c < midlen; c++) {
        var midcity = $(midway).eq(c).find('.city');
        var midplace = $(midway).eq(c).find('.place');
        var midfromjw = $(midway).eq(c).find("#fromjw").val();
        var midpathaddr = $(midway).eq(c).find("pathaddr").val();
        if (midfromjw == ' ' || midpathaddr == ' ') {
            layer.msg("请重新输入并选择途径城市地址");
            $(midway).eq(c).find("#fromjw").parent().find(".input").focus();
            return false;
        }
        if (midcity.val() == '') {
            layer.msg("请选择您的途径地点城市", { time: 1500 }, function() {
                midcity.focus();
            });
            return false;
        }

        if (midplace.val() == '') {
            layer.msg("请输入并选择您的途径地点地址", { time: 1500 }, function() {
                midplace.focus();
            });
            return false;
        }


        var travelmid = $(midway).eq(c).find('.place').val();
        var midlength = $(midway).eq(c).find('#result1 ul li').length;
        var midi = midlength;
        for (var m = 0; m < midlength; m++) {
            var midid = $(midway).eq(c).find('#result1 ul li');
            var midobj = $(midid).eq(m).find("a span.name").html();
            if (midobj != travelmid) {
                midi--;
                if (midi == 0 && midobj != travelmid) {
                    layer.msg('请重新输入并选择您的途径地点地址');
                    midplace.focus();
                    return false;
                }
            } else {
                break;
            }
        }
    }

}

return true;
};



//添加第I天行车路线
$(".addday").off().on('click', function () {
    var add = checkvalidate();
    // console.log(add);
    // return false;
    if (!add) {
        return false;
    }
    var day = $(this).val();
    day = day.charAt(3);
    var date = $("#datepicker4").val();//用户选择的日期
    var now = new Date();
    var thisyear = now.getFullYear();       //年
    var thismonth = now.getMonth() + 1;     //月
    var thisday = now.getDate();            //日
    var hh = now.getHours();            //时
    var mm = now.getMinutes();   		//分
    if (thismonth < 10) {
        thismonth = "0" + thismonth;
    }

    if (thisday < 10) {
        thisday = "0" + thisday;
    }
    var clock = thisyear + "-" + thismonth + "-" + thisday;
    if (clock == date) {
        var hour1 = $('div[day="1"]').next().find('.hours').val();//第一天的小时
        var minute1 = $('div[day="1"]').next().find('.minutes').val();//第一天的分钟
        if (parseInt(hour1) - parseInt(hh) == 0) {
            if (parseInt(minute1) - parseInt(mm) < 0) {
                layer.msg("选择的时间不得小于当前时间");
                return false;
            }
        } else if (parseInt(hour1) - parseInt(hh) < 0) {
            layer.msg("选择的时间不得小于当前时间");
            return false;
        }
    }

    if (window.amount >= 5) {
        window.amount = 5;
        window.nextday = 6;
        daily = 7;
        layer.msg('只能添加5天');
        return false;
    }

    $("#total").val((parseInt($("#total").val()) + 1));


    var html = $.addorder(order, window.nextday, daily);

    //$(html).appendTo("#travel");
    //$("#travel").append(html);

    var co = html + $("#yongche").html() + "</div>";
    var copy = $(co).clone(true);
    $("#travel").append(copy);

    //$('.hours').append(hourstxt);
    //$('.minutes').append(minutestxt);
    var hour1 = $('div[day="' + (day) + '"]').next().find('.hours').append(hourstxt);//第一天的小时
    var minute1 = $('div[day="' + (day) + '"]').next().find('.minutes').append(minutestxt);//第一天的分钟

    //将第一天的终点赋予第二天的起点
    var e = $('div[day="' + (day - 1) + '"]').next().find('#path').next();
    //197
    var eci = $(e).find('dl dd.select-city div input.id').val();
    //广州
    var ec = $(e).find('dl dd.select-city div input.city').val();//上一天终点城市值
    var ea = $(e).find('dl dd div.part input').eq(0).val();//上一天终点城市地址

    var ejw = $(e).find('#tojw').val();
    var eadr = $(e).find('#toaddr').val();
    //结束
    var start = $('div[day="' + day + '"]').next().find('#path');
    //$('div[day="' + day + '"]').next().find("dl dd input.date").attr('name', "travel[" + day + "][datepicker]");
    var end = $(start).next();
    $(start).find('dl dd.select-city div input.id').attr('name', "travel[" + day + "][travel_startid]");
    $(start).find('dl dd.select-city div input.city').attr('name', "travel[" + day + "][travel_start]");
    $(start).find('dl dd div.part input').eq(0).attr('name', "travel[" + day + "][travel_address]");
    $(start).find('dl dd div.part input').eq(3).attr('name', "travel[" + day + "][fromjw]");
    $(start).find('dl dd div.part input').eq(4).attr('name', "travel[" + day + "][fromaddr]");
    $(end).find('dl dd.select-city div input.id').attr('name', "travel[" + day + "][travel_endid]");
    $(end).find('dl dd.select-city div input.city').attr('name', "travel[" + day + "][travel_end]");
    $(end).find('dl dd div.part input').eq(0).attr('name', "travel[" + day + "][end_address]");
    $(end).find('dl dd div.part input').eq(2).attr('name', "travel[" + day + "][tojw]");
    $(end).find('dl dd div.part input').eq(3).attr('name', "travel[" + day + "][toaddr]");

    $(start).find('dl dd.select-city div input.id').val(eci);
    $(start).find('dl dd.select-city div input.city').val(ec);
    $(start).find('dl dd div.part input').eq(0).val(ea);
    $(start).find('dl dd div.part input').eq(3).val(ejw);
    $(start).find('dl dd div.part input').eq(4).val(eadr);
    window.nextday++;
    daily++;
    window.amount++;
    $(this).val('添加第' + window.nextday + '天行车线路');
    //删除
    var tail = $(".adddaily").length;
    $("[name=daily]").each(function (a, b) {
        day = parseInt($(b).attr('day'));
        if (day == tail) {
            //$(this).next('#divtravel').css('display','block');
            //alert($(this).next("#divtravel").attr('show'));
            //$(this).next('#divtravel').css('display','block');
            //$(this).next("#divtravel").slideToggle("fast").siblings("#divtravel:hidden").slideUp("fast");

            $.findvisible('divtravel', day);
            return false;
        }
    });

    $(".date").each(function () {
        $(this).datepicker({
            minDate: new Date()
        });
    });
});





	$(".add").live('click',function() {
        var total = parseInt($(this).parent().parent().parent().parent().parent().find("#total").val()) + 1;
	    var length = $(this).parent().parent().parent().parent().find('dl').length;
	    if (length > 5) {
	        layer.msg('最多只能添加五个途经点');
	        return false;
	    }
	    var html = '<dl class="via" style="height:50px;">' +
	        '<dt>途经地点</dt>' +
	        '<dd class="select-city">' +
	        '<div class="drop-down-icon">' +
	        '<input type="hidden" name="via{0}id" class="id" />' +
	        ' <input type="text"  onfocus="this.blur();" readonly="readonly"  name="path{0}" class="txt city" id="travel-start" />' +
	        '<div class="citylist"></div>' +
	        '</div>' +
	        '</dd>' +
	        '<dd>' +
	        '<div class="part">' +
	        '<input type="text" name="pathname{0}" class="txt place input" placeholder="请输入附近的小区/街道/建筑物/商圈" style="width:360px;" autocomplete="off"/><input type="button" class="del" value="移除" />' +
	        '<input type="hidden" class="hasquery" value="0" />' +
	        '<input type="hidden" name="pathjw{0}" class="jw" id="fromjw" name="pathjw" value=""/>' +
	        '<input name="pathaddr{0}" class="addr" type="hidden" id="pathaddr" size="57" />' +
	        '<div style="display:none" id="result1" class="result"> Loading... </div>' +
	        '</div>' +
	        '</dd>' +
	        '</dl>';
	    html = html.replace(/\{0\}/g, total);
	    
	    $(this).parent().parent().parent().parent().append(html);

	    $(this).parent().parent().parent().parent().parent().find("#total").val(total);

	    $(".del").live('click', function () {
	        var totalObj = $(this).parent().parent().parent().parent().parent().find("#total");

		    totalObj.val(parseInt(totalObj.val()) - 1);

		    $(this).parents("dl").remove();

		    e.stopPropagation();
	    });


		$('.via .drop-down-icon').unbind('click').bind('click',function(e) {
            e.stopPropagation();
            

		    $(this).children('.citylist').html(citylist).toggle();
		    $('.citylist .menu li').bind('click', function() {
		        $(this).addClass('hover').siblings().removeClass('hover');
		        $('.citylist .main ul').eq($('.menu li').index(this)).show().siblings().hide();
		        return false;
		    });
		    $('.citylist .main a').bind('click', function() {
		        var city = $(this).html();
		        var cityID = $(this).attr("cid");
		        $(this).parents('.citylist').prev().val(city);
		        $(this).parents('.citylist').prev().prev().val(cityID);
		        $('.citylist').hide();
		        $(this).parents('.select-city').next().find('.input').val('');
		        return false;
            });
            
            
		});
		
		//自动弹出地名
		$(".input").live('click',function(e){
			var v=$.trim($(this).val());
			var hasquery=$(this).parent().find(".hasquery").val();
			if(hasquery==1&&v!=''){
				$(".result").hide(); 
				$(this).parent().find(".result").show(); 
			}
			e.stopPropagation();
		});

	    $(".input").live('keyup', function(e) {
	        $(this).parent().find(".jw").val(' ');
	        $(this).parent().find(".addr").val(' ');
	        var s = $.trim($(this).val());
	        var f = $(this).parent().parent(); //当前input所在的div
	        var c = $.trim(f.prev().find(".city").val()); //所在城市
	        if (s == '') {
	            f.find('.result').html("").hide();
	            return false;
	        }
	        $.ajax({
	            url: 'http://api.map.baidu.com/place/v2/search',
	            cache: false,
	            dataType: 'jsonp',//这个很重要，跨域问题
	            type: 'get',
	            async: false,
	            data: {
	                page_size: 6,
	                page_num: 0,
	                scope: 2,
	                query: s,
	                region: c,
	                output: "json",
	                ak: window.ak
	            },
	            success: function(data) {
	                if (data) {
	                    //$("#odata").html(JSON.stringify(data));
	                    f.find(".hasquery").val(1); //设置为已查询
	                    var json = data.results; //结果
	                    total = data.total; //返回的数量
	                    var txt = '<ul>';
	                    var xtotal = 0;
	                    if (total > 0) {
	                        for (var i = 0; i < json.length; i++) {
	                            //alert(typeof(json[i].address));
	                            if (typeof(json[i].location) == 'undefined' || json[i].location == undefined || typeof(json[i].address) == 'undefined' || json[i].address == undefined) {
	                            } else {
	                                txt += '<li><a href="javascript:;" lat="' + json[i].location.lat + '" lng="' + json[i].location.lng + '"><span class="name">' + json[i].name + "</span><p>" + json[i].address + '</p></a></li>';
	                                xtotal++;
	                            }
	                        }
	                        if (data.total > 6) {
	                            txt += '<div class="page"><a href="javascript:;" class="next" page=1>下一页</a></div>';
	                        }
	                        //绑定事件，这里不起作用

	                        $(".result ul li a").live('click', function() {
	                            var lat = $(this).attr("lat");
	                            var lng = $(this).attr("lng");
	                            var name = $(this).find("span").html(); //地名
	                            var addr = $(this).find("p").html(); //地址
	                            $(this).parents(".part").find(".input").val(name);
	                            $(this).parents(".part").find(".addr").val(addr);
	                            $(this).parents(".part").find(".jw").val(lat + "," + lng);
	                        });

	                        if (xtotal == 0) {
	                            txt += '<li class="no">没有匹配的地址，请重新输入</li>';
	                        }
	                    } else {
	                        txt += '<li class="no">没有匹配的地址，请重新输入</li>';
	                    }


	                    $('.page a').live('click', function() {
	                        var page = $(this).attr('page');
	                        s = $(this).parent().parent().parent().parent().find('.input').val();
	                        var g = $(this).parent().parent().parent();
	                        c = g.parent().parent().prev().find('.city').val();
	                        $.ajax({
	                            url: 'http://api.map.baidu.com/place/v2/search',
	                            cache: false,
	                            dataType: 'jsonp',//这个很重要，跨域问题
	                            type: 'get',
	                            async: false,
	                            data: {
	                                page_size: 6,
	                                page_num: page,
	                                scope: 2,
	                                query: s,
	                                region: c,
	                                output: "json",
	                                ak: window.ak
	                            },
	                            success: function(data) {
	                                if (data) {
	                                    f.find(".hasquery").val(1); //设置为已查询
	                                    var json = data.results; //结果
	                                    total = data.total; //返回的数量
	                                    var text = '';
	                                    text = '<ul>';
	                                    var xtotal = 0;
	                                    if (total > 0) {
	                                        for (var i = 0; i < json.length; i++) {
	                                            //alert(typeof(json[i].address));
	                                            if (typeof(json[i].location) == 'undefined' || json[i].location == undefined || typeof(json[i].address) == 'undefined' || json[i].address == undefined) {
	                                            } else {
	                                                text += '<li><a href="javascript:;" lat="' + json[i].location.lat + '" lng="' + json[i].location.lng + '"><span class="name">' + json[i].name + "</span><p>" + json[i].address + '</p></a></li>';
	                                                xtotal++;
	                                            }
	                                        }
	                                        if (data.total > 6) {
	                                            text += '<div class="page"><a href="javascript:;" class="next" page=1>下一页</a></div>';
	                                        }
	                                        if (xtotal == 0) {
	                                            text += '<li class="no">没有匹配的地址，请重新输入</li>';
	                                        }
	                                    } else {
	                                        text += '<li class="no">没有匹配的地址，请重新输入</li>';
	                                    }
	                                    var prev = parseInt(page) - 1 > 0 ? parseInt(page) - 1 : 0;
	                                    if (page > 0) {
	                                        text += '<div class="page"><a href="javascript:;" class="prev" page="' + prev + '">上一页</a></div>';
	                                    }
	                                    text += '</ul>';
	                                    g.html(text).show();
	                                    f.find(".hasquery").val(1);

	                                }
	                                page = parseInt(page) + 1;
	                                $('.next').attr('page', page);
	                            }					
	                        });

	                    });


	                    txt += '</ul>';
	                    f.find('.result').html(txt).show();
	                    f.find(".hasquery").val(1); //设置是不是查询，如果查过，则直接显示
	                }
	            }
	        });
	    });
	});



</script>
    <br />
<br />
<footer style="margin: 0px;">
    <ul class="foot">
        <li>
            <b>运来出行</b>
        </li>
        <li class="second">
            <b>支付说明</b>
        </li>
        <li class="center">
            <p>
                <span>客户
                    <br>专线</span>599970999</p>
            <p>
                <span>企业
                    <br>客户</span>‭130-3229-8400‬</p>
        </li>
        <li class="third">
            <b>特色服务</b>
            <a href="#">其他服务</a>
            <a href="#">企业用户</a>
        </li>
        <li>
            <b>用车帮助</b>
            <a href="#">车辆服务</a>
            <a href="#">预定用车</a>
        </li>
    </ul>
    <p>版权所有&nbsp;&nbsp;© 2018 运来出行有限公司 &nbsp;&nbsp;
        <span style="display:none">技术支持：
            <a href="http://www.gzqihui.com/" target="_blank" title="广州企辉网络科技有限公司">企辉网络</a>&nbsp;&nbsp;</span>
        <!-- <a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备14039641号</a>&nbsp;&nbsp; -->
        <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            document.write(unescape("%3Cspan id='cnzz_stat_icon_1255292701'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1255292701%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
    </p>
</footer>
<script type="text/javascript">$(function () {
        if ("False" == "True") {
            var index = layer.load();
            layer.msg("");
            layer.close(index);
        }
    });

    $.ajaxSetup({
        beforeSend: function (xhr) {
            xhr.setRequestHeader("token", 0.246089429243509);
        }
    });</script>
</body>
</html>