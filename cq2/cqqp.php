<?php
error_reporting(0);
$id=$_GET['id']??'cctv1';
$n =[
    //����
    "cctv1" => ["cctv1HD","v4M",1], //CCTV1�ۺ�
    "cctv2" => ["cctv2HD","v6M",1], //CCTV2��*
    "cctv3" => ["cctv3HD","v6M",1], //CCTV3����
    "cctv4" => ["cctv4HD","v6M",3], //CCTV4���Ĺ���
    "cctv5" => ["cctv5HD","v6M",1], //CCTV5����
    "cctv5p" => ["cctv5SportHD","v6M",1], //CCTV5+��������
    "cctv6" => ["cctv6HD","v6M",1], //CCTV6��Ӱ
    "cctv7" => ["cctv7HD","v6M",3], //CCTV7��������
    "cctv8" => ["cctv8HD","v6M",1], //CCTV8���Ӿ�
    "cctv9" => ["cctv9HD","v6M",1], //CCTV9��¼
    "cctv10" => ["cctv10HD","v6M",1], //CCTV10�ƽ�
    "cctv11" => ["cctv11HD","v6M",1], //CCTV11Ϸ��
    "cctv12" => ["cctv12HD","v6M",3], //CCTV12����뷨
    "cctv13" => ["CCTVNewsHD","v4M",1], //CCTV13����
    "cctv14" => ["cctvseHD","v6M",1], //CCTV14�ٶ�
    "cctv15" => ["cctv15HD","v6M",1], //CCTV15����
    "cctv16" => ["cctv16HD","v6M",1], //CCTV16����ƥ��
    "cctv17" => ["cctv17HD","v6M",2], //CCTV17ũҵũ��

    "bqkj" => ["bqkjHD","v6M",1], //CCTV�����Ƽ�
    "dyjc" => ["diyijuchangHD","v4M",2], //CCTV��һ�糡
    "hjjc" => ["hjjcHD","v6M",1], //CCTV���ɾ糡
    "fyjc" => ["fyjcHD","v6M",1], //CCTV���ƾ糡
    "fyyy" => ["fyyyHD","v6M",1], //CCTV��������
    "fyzq" => ["fyzqHD","v6M",1], //CCTV��������
    "whjp" => ["yswhHD","v6M",1], //CCTV�����Ļ���Ʒ
    "nxss" => ["nvxing","v2M",1], //CCTVŮ��ʱ��
    "gefwq" => ["golfHD","v6M",1], //CCTV�߶�������
    "ystq" => ["ystqHD","v6M",1], //CCTV����̨��
    "yggw" => ["yggw","v2M",1], //CCTV��㹺��
    "zsgw" => ["ysgw","v2M",1], //CCTV���ӹ���
 
    "zxs" => ["qicai","v2M",1], //������Ӱ-��ѧ��
    "fxzl" => ["faxian","v2M",1], //������Ӱ-����֮��
    "lgs" => ["gushi","v2M",1], //������Ӱ-�Ϲ���
    
    "sh" => ["shuhua","v2M",1], //�黭
    "zgtq" => ["tianqiSD","v2M",1], //�й�����

    "cgtn" => ["cgtnSD","v2M",1], //CGTN
    //�й�����
    "cetv1" => ["cetv-1SD","v2M",1], //CETV1�н�1̨
    "cetv4" => ["cetv-4SD","v2M",1], //CETV4�н�4̨
    "zqjy" => ["zaojiaoHD","v6M",1], //CETV���ڽ���
    //CHCϵ��
    "chcgq" => ["chcgqdyHD","v6M",1], //CHC�����Ӱ
    "chcdz" => ["chcdzdyHD","v6M",1], //CHC������Ӱ
    "chcjt" => ["chcjtyyHD","v6M",1], //CHC��ͥӰԺ
    //����
    "bjws" => ["beijingHD","v6M",10], //��������
    "dfws" => ["shanghaiHD","v6M",3], //��������
    "tjws" => ["tianjinHD","v6M",4], //�������
    "cqws" => ["chongqingHD","v4M",1], //��������
    "hljws" => ["heilongjiangHD","v4M",3], //����������
    "jlws" => ["jilinHD","v4M",4], //��������
    "lnws" => ["liaoningHD","v6M",6], //��������
    "nmws" => ["neimengkuSD","v2M",3], //���ɹ�����
    "nxws" => ["ningxia","v2M",1], //��������
    "qhws" => ["qinghaiSD","v2M",1], //�ຣ����
    "hbws" => ["hebeiSD","v4M",3], //�ӱ�����
    "sxiws" => ["shanxiSD","v2M",1], //ɽ������
    "ahws" => ["anhuiSD","v4M",3], //��������
    "hnws" => ["henanHD","v6M",1], //��������
    "hubws" => ["hubeiSD","v4M",3], //��������
    "hunws" => ["hunanHD","v6M",4], //��������
    "jxws" => ["jiangxiHD","v4M",5], //��������
    "jsws" => ["jiangsuHD","v6M",1], //��������
    "zjws" => ["zhejiangHD","v6M",5], //�㽭����
    "dnws" => ["dongnanHD","v4M",3], //��������
    "gdws" => ["guangdongHD","v6M",2], //�㶫����
    "szws" => ["shenzhenHD","v6M",4], //��������
    "gxws" => ["guangxiHD","v6M",1], //��������
    "ynws" => ["yunnanSD","v4M",3], //��������
    "gzws" => ["guizhouHD","v6M",1], //��������
    "scws" => ["sichuanHD","v6M",2], //�Ĵ�����
    "xjws" => ["xinjiangSD","v2M",1], //�½�����
    "btws" => ["bingtuanSD","v2M",1], //��������
    "xzws" => ["xizangSD","v2M",1], //��������
    "hinws" => ["hainanSD","v4M",3], //��������
    "ssws" => ["sanshaSD","v2M",1], //��ɳ����
    //����
    "bjjskj" => ["bjayjsSD","v6M",1], //������ʵ�ƽ�
    "bjkk" => ["bjkakuSD","v2M",1], //��������
    "zhtc" => ["techan","v2M",1], //�л��ز�
    "sthj" => ["shengtai","v2M",1], //��̬����
    "shdy" => ["diaoyu","v2M",1], //�ĺ�����
    "cmpd" => ["doxtv","v2M",1], //����Ƶ��
    "bxjk" => ["jiankangSD","v2M",1], //���ս���
    "hqqg" => ["car","v2M",1], //�������
    "hqly" => ["huanqiulvyou","v2M",1], //��������
    "yybb" => ["youxi","v2M",1], //���ű���
    "jshwjx" => ["jusha","v2M",1], //���軷��ѡ
    //�Ϻ�
    "dfcj" => ["dfcj","v2M",1], //������*
    "hxjc" => ["hxjc_4K","v1M",1], //��Ц�糡
    "dsjc" => ["dsjcHD","v6M",1], //���о糡
    "mlxq" => ["mlzqHD","v6M",1], //��������
    "dmxc" => ["dmxcHD","v6M",1], //�����㳡
    "yxfy" => ["yxfyHD","v6M",1], //��Ϸ����
    "shss" => ["shenghuo","v2M",1], //����ʱ��
    "fztd" => ["fazhi","v2M",1], //�������
    "jsxt" => ["jinse","v2M",1], //��ɫѧ��
    //����
    "cqxw" => ["CQTVNewsHD","v4M",1], //��������
    "cqkj" => ["CQTVkejiaoHD","v6M",1], //����ƽ�
    "cqys" => ["cqyingshiHD","v6M",1], //����Ӱ��
    "cqwtyl" => ["cqwtylHD","v6M",1], //������������
    "cqse" => ["cqseHD","v6M",1], //�����ٶ�
    "cqsssh" => ["cqssgwHD","v6M",1], //����ʱ������
    "cqxnc" => ["cqggncHD","v6M",1], //������ũ��
    "cqshyf" => ["CQTVTrendyHD","v6M",1], //��������뷨
    "cqyd" => ["mryyHD","v6M",1], //�����ƶ�
    "cqqm" => ["cqcarSD","v2M",1], //������Ħ
    "cgrm" => ["cqrongmei","v2M",1], //�ع���ý
    "akds" => ["aikanHD","v6M",2], //��������
    "hczh" => ["hechuan","v2M",4], //�ϴ��ۺ�
    "cszh" => ["changshou","v2M",1], //�����ۺ�
    "yyzh" => ["youyang","v2M",2], //�����ۺ�
    "yunyzh" => ["jiangjinHD","v2M",3], //�����ۺ�
    "tlzh" => ["tongliangzongheHD","v2M",5], //ͭ���ۺ�
    //����
    "jygw" => ["jygw","v2M",1], //���й���
    "xdm" => ["dongman","v2M",1], //�¶���
    "zqfw" => ["jiazheng","v2M",1], //֤ȯ����
    "sdjy" => ["sdjiaoyuSD","v2M",1], //ɽ������
    "sctx" => ["soucang","v2M",1], //�ղ�����
    "gxpd" => ["guoxue","v2M",1], //��ѧƵ��
    "klcd" => ["klcdHD","v6M",1], //���ִ���
    "jykt" => ["jinyingSD","v6M",2], //��ӥ��ͨ
    "xfpy" => ["xianfeng","v2M",1], //�ȷ�ƹ��
    "fsgw" => ["fsgw","v2M",1], //���й���
    "cftx" => ["caifu","v2M",1], //�Ƹ�����
    "tywq" => ["weiqi","v2M",1], //��ԪΧ��
    "sypd" => ["sheying","v2M",1], //��ӰƵ��
    "qsjl" => ["qsjlHD","v6M",1], //������¼
    ];
$s=$_GET["s"]??$n[$id][1];

$t = substr(time(),0,9)-50;
$con = "#EXTM3U\n#EXT-X-VERSION:3\n#EXT-X-MEDIA-SEQUENCE:{$t}\n#EXT-X-TARGETDURATION:11\n";
for($i=0;$i<6;$i++) {
    $con .= "#EXTINF:10.000,\nhttp://hls.live.cqccn.com/__cl/cg:live/__c/{$n[$id][0]}/__op/default/__f/{$n[$id][2]}/{$s}/".strval($t+$i).".ts\n";
    }
header("Content-Type: application/vnd.apple.mpegURL");
die($con);
?>