

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <title>运来出行</title>
    <script src="js/jquery-1.8.2.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .btn {
            cursor: pointer;
            background-color: #06c29c;
            width: 99%;
            padding-top: 10px;
            padding-bottom: 10px;
            margin: 20px 10px 20px 10px;
            color: white;
            font-size: 16px;
            font-weight: normal;
            font-style: normal;
            z-index: 0;
        }
    </style>
    <script> var ua = navigator.userAgent;
var ipad = ua.match(/(iPad).*OS\s([\d_]+)/),
    isIphone = !ipad && ua.match(/(iPhone\sOS)\s([\d_]+)/),
    isAndroid = ua.match(/(Android)\s+([\d.]+)/),
    isMobile = isIphone || isAndroid;
    if (isMobile) {
        
    } else {
        location.href = '/Home/Default';
    }
    //或者单独判断iphone或android 
    if (isIphone) {
        //code 
    } else if (isAndroid) {
        //code
    } else {
        //code
    }
</script>
</head>
<body>
    <div class="comm login">
        <div class="border">
            <div class="block clearfix" style="text-align:center">
                <span class="block input-icon input-icon-right">
                    <img src="img/defaultcarlogo.png" />
                </span>
            </div>
            
            <input type="button" class="btn" onclick="window.location.href = 'http://m.5bus.cn/'" value="已注册车队手机访问" />
            <input type="button" onclick="window.location.href='/Home/Default'" class=" btn" value="直接访问电脑版" />
            <input type="button" onclick="window.location.href = 'http://app.qq.com/#id=detail&appid=1106061337'" class=" btn" value="司机端下载" />
        </div>
    </div>
</body>
</html>
