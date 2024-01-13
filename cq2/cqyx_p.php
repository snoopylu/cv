<?php
header('Content-Type:text/plain');
$id = isset($_GET['id'])?$_GET['id']:'cctv1';
$n =[
    //央视
    "cctv1" => "a48k", //CCTV1综合
    "cctv2" => "a48k", //CCTV2财*
    "cctv3" => "a48k", //CCTV3综艺
    "cctv4" => "a48k", //CCTV4中文国际
    "cctv5" => "a48k", //CCTV5体育
    "cctv5p" => "a48k", //CCTV5+体育赛事
    "cctv6" => "a48k", //CCTV6电影
    "cctv7" => "a48k", //CCTV7国防军事
    "cctv8" => "a48k", //CCTV8电视剧
    "cctv9" => "a48k", //CCTV9纪录
    "cctv10" => "a48k", //CCTV10科教
    "cctv11" => "a48k", //CCTV11戏曲
    "cctv12" => "a48k", //CCTV12社会与法
    "cctv13" => "a48k", //CCTV13新闻
    "cctv14" => "a48k", //CCTV14少儿
    "cctv15" => "a48k", //CCTV15音乐
    "cctv16" => "a48k", //CCTV16奥林匹克
    "cctv17" => "a48k", //CCTV17农业农村

    "bqkj" => "a48k_zho", //CCTV兵器科技
    "dyjc" => "a48k", //CCTV第一剧场
    "hjjc" => "a48k_zho", //CCTV怀旧剧场
    "fyjc" => "a48k_zho", //CCTV风云剧场
    "fyyy" => "a48k_zho", //CCTV风云音乐
    "fyzq" => "a48k_zho", //CCTV风云足球
    "whjp" => "a48k_zho", //CCTV央视文化精品
    "nxss" => "a48k_zho", //CCTV女性时尚
    "gefwq" => "a48k_zho", //CCTV高尔夫网球
    "ystq" => "a48k_zho", //CCTV央视台球
    "yggw" => "a48k_zho", //CCTV央广购物
    "zsgw" => "a48k_zho", //CCTV中视购物

    "zxs" => "a48k_zho", //种养新影-中学生
    "fxzl" => "a48k_zho", //种养新影-发现之旅
    "lgs" => "a48k_zho", //种养新影-老故事
    
    "sh" => "a48k_zho", //书画
    "zgtq" => "a48k", //中国天气

    "cgtn" => "a48k", //CGTN
    //中国教育
    "cetv1" => "a48k", //CETV1中教1台
    "cetv4" => "a48k", //CETV4中教4台
    "zqjy" => "a48k_zho", //CETV早期教育
    //CHC系列
    "chcgq" => "a48k_zho", //CHC高清电影
    "chcdz" => "a48k_zho", //CHC动作电影
    "chcjt" => "a48k_zho", //CHC家庭影院
    //卫视
    "bjws" => "a48k", //北京卫视
    "dfws" => "a48k", //东方卫视
    "tjws" => "a48k", //天津卫视
    "cqws" => "a48k", //重庆卫视
    "hljws" => "a48k", //黑龙江卫视
    "jlws" => "a48k", //吉林卫视
    "lnws" => "a48k", //辽宁卫视
    "nmws" => "a48k", //内蒙古卫视
    "nxws" => "a48k", //宁夏卫视
    "qhws" => "a48k", //青海卫视
    "hbws" => "a48k", //河北卫视
    "sxiws" => "a48k", //山西卫视
    "ahws" => "a48k", //安徽卫视
    "hnws" => "a48k", //河南卫视
    "hubws" => "a48k", //湖北卫视
    "hunws" => "a48k", //湖南卫视
    "jxws" => "a48k", //江西卫视
    "jsws" => "a48k_zho", //江苏卫视
    "zjws" => "a48k", //浙江卫视
    "dnws" => "a48k", //东南卫视
    "gdws" => "a48k", //广东卫视
    "szws" => "a48k", //深圳卫视
    "gxws" => "a48k_zho", //广西卫视
    "ynws" => "a48k", //云南卫视
    "gzws" => "a48k_zho", //贵州卫视
    "scws" => "a48k", //四川卫视
    "xjws" => "a48k", //新疆卫视
    "btws" => "a48k", //兵团卫视
    "xzws" => "a48k", //西藏卫视
    "hinws" => "a48k", //海南卫视
    "ssws" => "a48k", //三沙卫视
    //北京
    "bjjskj" => "a48k", //北京纪实科教
    "bjkk" => "a48k", //北京卡酷
    "zhtc" => "a48k_zho", //中华特产
    "sthj" => "a48k_zho", //生态环境
    "shdy" => "a48k_zho", //四海钓鱼
    "cmpd" => "a48k_zho", //车迷频道
    "bxjk" => "a48k", //百姓健康
    "hqqg" => "a48k_zho", //环球奇观
    "hqly" => "a48k", //环球旅游
    "yybb" => "a48k_zho", //优优宝贝
    "jshwjx" => "a48k_zho", //聚鲨环球精选
    //上海
    "dfcj" => "a48k_zho", //东方财*
    "hxjc" => "a48k_zho", //欢笑剧场
    "dsjc" => "a48k_zho", //都市剧场
    "mlxq" => "a48k_zho", //魅力足球
    "dmxc" => "a48k_zho", //动漫秀场
    "yxfy" => "a48k_zho", //游戏风云
    "shss" => "a48k_zho", //生活时尚
    "fztd" => "a48k_zho", //法治天地
    "jsxt" => "a48k_zho", //金色学堂
    //重庆
    "cqxw" => "a48k", //重庆新闻
    "cqkj" => "a48k_zho", //重庆科教
    "cqys" => "a48k", //重庆影视
    "cqwtyl" => "a48k", //重庆文体娱乐
    "cqse" => "a48k", //重庆少儿
    "cqsssh" => "a48k", //重庆时尚生活
    "cqxnc" => "a48k", //重庆新农村
    "cqshyf" => "a48k", //重庆社会与法
    "cqyd" => "a48k_zho", //重庆移动
    "cqqm" => "a48k", //重庆汽摩
    "cgrm" => "a48k", //重广融媒
    "akds" => "a48k_zho", //爱看导视
    "hczh" => "a48k_zho", //合川综合
    "cszh" => "a48k", //长寿综合
    "yyzh" => "a48k", //酉阳综合
    "yunyzh" => "a48k", //云阳综合
    "tlzh" => "a48k_zho", //铜梁综合
    //其他
    "jygw" => "a48k_zho", //家有购物
    "xdm" => "a48k_zho", //新动漫
    "zqfw" => "a48k_zho", //证券服务
    "sdjy" => "a48k", //山东教育
    "sctx" => "a48k_zho", //收藏天下
    "gxpd" => "a48k_zho", //国学频道
    "klcd" => "a48k_zho", //快乐垂钓
    "jykt" => "a48k", //金鹰卡通
    "xfpy" => "a48k_zho", //先锋乒羽
    "fsgw" => "a48k_zho", //风尚购物
    "cftx" => "a48k_zho", //财富天下
    "tywq" => "a48k_zho", //天元围棋
    "sypd" => "a48k_zho", //摄影频道
    "qsjl" => "a48k_zho", //求索纪录
    ];

$id = $_GET['id']??'cctv1';
$s = $_GET["s"]??$n[$id];
$con=<<<Eo
#EXTM3U
#EXT-X-VERSION:3
#EXT-X-INDEPENDENT-SEGMENTS
#EXT-X-MEDIA:TYPE=AUDIO,GROUP-ID="audio_mp4a.40.2_48000",LANGUAGE="und",NAME="a48000",AUTOSELECT=YES,DEFAULT=YES,CHANNELS="2",URI="cqqp.php?id=$id&s=$s"
#EXT-X-STREAM-INF:BANDWIDTH=5000000,AVERAGE-BANDWIDTH=5000000,RESOLUTION=1920x1080,CODECS="avc1.640028,mp4a.40.2",AUDIO="audio_mp4a.40.2_48000",CLOSED-CAPTIONS=NONE,FRAME-RATE=25
cqqp.php?id=$id
Eo;
die($con);
?>