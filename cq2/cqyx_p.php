<?php
header('Content-Type:text/plain');
$id = isset($_GET['id'])?$_GET['id']:'cctv1';
$n =[
    //����
    "cctv1" => "a48k", //CCTV1�ۺ�
    "cctv2" => "a48k", //CCTV2��*
    "cctv3" => "a48k", //CCTV3����
    "cctv4" => "a48k", //CCTV4���Ĺ���
    "cctv5" => "a48k", //CCTV5����
    "cctv5p" => "a48k", //CCTV5+��������
    "cctv6" => "a48k", //CCTV6��Ӱ
    "cctv7" => "a48k", //CCTV7��������
    "cctv8" => "a48k", //CCTV8���Ӿ�
    "cctv9" => "a48k", //CCTV9��¼
    "cctv10" => "a48k", //CCTV10�ƽ�
    "cctv11" => "a48k", //CCTV11Ϸ��
    "cctv12" => "a48k", //CCTV12����뷨
    "cctv13" => "a48k", //CCTV13����
    "cctv14" => "a48k", //CCTV14�ٶ�
    "cctv15" => "a48k", //CCTV15����
    "cctv16" => "a48k", //CCTV16����ƥ��
    "cctv17" => "a48k", //CCTV17ũҵũ��

    "bqkj" => "a48k_zho", //CCTV�����Ƽ�
    "dyjc" => "a48k", //CCTV��һ�糡
    "hjjc" => "a48k_zho", //CCTV���ɾ糡
    "fyjc" => "a48k_zho", //CCTV���ƾ糡
    "fyyy" => "a48k_zho", //CCTV��������
    "fyzq" => "a48k_zho", //CCTV��������
    "whjp" => "a48k_zho", //CCTV�����Ļ���Ʒ
    "nxss" => "a48k_zho", //CCTVŮ��ʱ��
    "gefwq" => "a48k_zho", //CCTV�߶�������
    "ystq" => "a48k_zho", //CCTV����̨��
    "yggw" => "a48k_zho", //CCTV��㹺��
    "zsgw" => "a48k_zho", //CCTV���ӹ���

    "zxs" => "a48k_zho", //������Ӱ-��ѧ��
    "fxzl" => "a48k_zho", //������Ӱ-����֮��
    "lgs" => "a48k_zho", //������Ӱ-�Ϲ���
    
    "sh" => "a48k_zho", //�黭
    "zgtq" => "a48k", //�й�����

    "cgtn" => "a48k", //CGTN
    //�й�����
    "cetv1" => "a48k", //CETV1�н�1̨
    "cetv4" => "a48k", //CETV4�н�4̨
    "zqjy" => "a48k_zho", //CETV���ڽ���
    //CHCϵ��
    "chcgq" => "a48k_zho", //CHC�����Ӱ
    "chcdz" => "a48k_zho", //CHC������Ӱ
    "chcjt" => "a48k_zho", //CHC��ͥӰԺ
    //����
    "bjws" => "a48k", //��������
    "dfws" => "a48k", //��������
    "tjws" => "a48k", //�������
    "cqws" => "a48k", //��������
    "hljws" => "a48k", //����������
    "jlws" => "a48k", //��������
    "lnws" => "a48k", //��������
    "nmws" => "a48k", //���ɹ�����
    "nxws" => "a48k", //��������
    "qhws" => "a48k", //�ຣ����
    "hbws" => "a48k", //�ӱ�����
    "sxiws" => "a48k", //ɽ������
    "ahws" => "a48k", //��������
    "hnws" => "a48k", //��������
    "hubws" => "a48k", //��������
    "hunws" => "a48k", //��������
    "jxws" => "a48k", //��������
    "jsws" => "a48k_zho", //��������
    "zjws" => "a48k", //�㽭����
    "dnws" => "a48k", //��������
    "gdws" => "a48k", //�㶫����
    "szws" => "a48k", //��������
    "gxws" => "a48k_zho", //��������
    "ynws" => "a48k", //��������
    "gzws" => "a48k_zho", //��������
    "scws" => "a48k", //�Ĵ�����
    "xjws" => "a48k", //�½�����
    "btws" => "a48k", //��������
    "xzws" => "a48k", //��������
    "hinws" => "a48k", //��������
    "ssws" => "a48k", //��ɳ����
    //����
    "bjjskj" => "a48k", //������ʵ�ƽ�
    "bjkk" => "a48k", //��������
    "zhtc" => "a48k_zho", //�л��ز�
    "sthj" => "a48k_zho", //��̬����
    "shdy" => "a48k_zho", //�ĺ�����
    "cmpd" => "a48k_zho", //����Ƶ��
    "bxjk" => "a48k", //���ս���
    "hqqg" => "a48k_zho", //�������
    "hqly" => "a48k", //��������
    "yybb" => "a48k_zho", //���ű���
    "jshwjx" => "a48k_zho", //���軷��ѡ
    //�Ϻ�
    "dfcj" => "a48k_zho", //������*
    "hxjc" => "a48k_zho", //��Ц�糡
    "dsjc" => "a48k_zho", //���о糡
    "mlxq" => "a48k_zho", //��������
    "dmxc" => "a48k_zho", //�����㳡
    "yxfy" => "a48k_zho", //��Ϸ����
    "shss" => "a48k_zho", //����ʱ��
    "fztd" => "a48k_zho", //�������
    "jsxt" => "a48k_zho", //��ɫѧ��
    //����
    "cqxw" => "a48k", //��������
    "cqkj" => "a48k_zho", //����ƽ�
    "cqys" => "a48k", //����Ӱ��
    "cqwtyl" => "a48k", //������������
    "cqse" => "a48k", //�����ٶ�
    "cqsssh" => "a48k", //����ʱ������
    "cqxnc" => "a48k", //������ũ��
    "cqshyf" => "a48k", //��������뷨
    "cqyd" => "a48k_zho", //�����ƶ�
    "cqqm" => "a48k", //������Ħ
    "cgrm" => "a48k", //�ع���ý
    "akds" => "a48k_zho", //��������
    "hczh" => "a48k_zho", //�ϴ��ۺ�
    "cszh" => "a48k", //�����ۺ�
    "yyzh" => "a48k", //�����ۺ�
    "yunyzh" => "a48k", //�����ۺ�
    "tlzh" => "a48k_zho", //ͭ���ۺ�
    //����
    "jygw" => "a48k_zho", //���й���
    "xdm" => "a48k_zho", //�¶���
    "zqfw" => "a48k_zho", //֤ȯ����
    "sdjy" => "a48k", //ɽ������
    "sctx" => "a48k_zho", //�ղ�����
    "gxpd" => "a48k_zho", //��ѧƵ��
    "klcd" => "a48k_zho", //���ִ���
    "jykt" => "a48k", //��ӥ��ͨ
    "xfpy" => "a48k_zho", //�ȷ�ƹ��
    "fsgw" => "a48k_zho", //���й���
    "cftx" => "a48k_zho", //�Ƹ�����
    "tywq" => "a48k_zho", //��ԪΧ��
    "sypd" => "a48k_zho", //��ӰƵ��
    "qsjl" => "a48k_zho", //������¼
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