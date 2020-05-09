<?php

$kyoyo = ( isset( $_POST["kyoyo"] ) === true ) ?$_POST["kyoyo"]: ""; 
$kiban_sizen = ( isset( $_POST["kiban_sizen"] ) == true ) ?$_POST["kiban_sizen"]: ""; 
$kiban_others = ( isset( $_POST["kiban_others"] ) == true ) ?$_POST["kiban_others"]: ""; 
$career  = ( isset( $_POST["career"] )  === true ) ?$_POST["career"]: ""; 
$kisozemi = ( isset( $_POST["kisozemi"] )  === true ) ?$_POST["kisozemi"]: "";
$inforite1 = ( isset( $_POST["inforite1"] )  === true ) ?$_POST["inforite1"]: "";
$english = ( isset( $_POST["english"] )  === true ) ?$_POST["english"]: "";
$other_lang = ( isset( $_POST["other_lang"] )  === true ) ?$_POST["other_lang"]: "";
$inforite2 = ( isset( $_POST["inforite2"] )  === true ) ?$_POST["inforite2"]: "";
$taiku = ( isset( $_POST["taiku"] )  === true ) ?$_POST["taiku"]: "";
$rikeikiso = ( isset( $_POST["rikeikiso"] )  === true ) ?$_POST["rikeikiso"]: "";
$gakkakiso = ( isset( $_POST["gakkakiso"] )  === true ) ?$_POST["gakkakiso"]: "";
$ryouiki = ( isset( $_POST["ryouiki"] )  === true ) ?$_POST["ryouiki"]: "";
$kisoriron = ( isset( $_POST["kisoriron"] )  === true ) ?$_POST["kisoriron"]: "";
$akitekutya = ( isset( $_POST["akitekutya"] )  === true ) ?$_POST["akitekutya"]: "";
$contents = ( isset( $_POST["contents"] )  === true ) ?$_POST["contents"]: "";
$jikken = ( isset( $_POST["jikken"] )  === true ) ?$_POST["jikken"]: "";
$zemi = ( isset( $_POST["zemi"]) === true ) ?$_POST["zemi"]: "";
$kennkyuu = ( isset( $_POST["kennkyuu"] )  === true ) ?$_POST["kennkyuu"]: "";
$sennmonnkyoiku = ( isset( $_POST["sennmonnkyoiku"] )  === true ) ?$_POST["sennmonnkyoiku"]: "";
$the_others = ( isset( $_POST["the_others"] )  === true ) ?$_POST["the_others"]: "";

if (  isset($_POST["send"] ) ===  true ) {
    if ( $kyoyo   === "" ) $kyoyo = 0; 

    if ( $kiban_sizen === "" ) $kiban_sizen = 0;

    if ( $kiban_others === "" ) $kiban_others = 0;
 
    if ( $career  === "" )  $career = 0;

    if ( $kisozemi === "" ) $kisozemi = 0;

    if ( $inforite1 === "" ) $inforite1 = 0;

    if ( $english === "") $english = 0;

    if ( $other_lang === "" ) $other_lang = 0;

    if ( $inforite2 === "" ) $inforite2 = 0;

    if ( $taiku === "" ) $taiku = 0;

    if ( $rikeikiso === "" )  $riikeikiso = 0;

    if ( $gakkakiso === "" ) $gakkakiso = 0;

    if ( $ryouiki === "" ) $ryouiki = 0;

    if ( $kisoriron === "" ) $kisoriron = 0;

    if ( $akitekutya === "" ) $akitekutya = 0;

    if ( $contents === "" ) $contents = 0;

    if ( $jikken === "" ) $jikken = 0;

    if ( $kennkyuu === "" ) $kennkyuu = 0;

    if ( $zemi === "" ) $zemi = 0;

    if ( $sennmonnkyoiku === "" ) $sennmonnkyoiku = 0;

    if ( $the_others === "" ) $the_others = 0;

    $data = array(
        $kyoyo,
        $kiban_sizen,
        $kiban_others,
        $career,
        $kisozemi,
        $inforite1,
        $english,
        $other_lang,
        $inforite2,
        $taiku,
        $rikeikiso,
        $gakkakiso,
        $ryouiki,
        $kisoriron,
        $akitekutya,
        $contents,
        $jikken,
        $kennkyuu,
        $zemi,
        $sennmonnkyoiku,
        $the_others,
    );

    $sum = array_sum($data);

    $div1 = 14 - $kyoyo - $kiban_sizen - $kiban_others - $career; //教養基盤キャリア
    $div2 = 8 - $english; //英語
    $div3 = 14 - $rikeikiso; //理系共通基礎
    $div4 = 16 - $gakkakiso; //学科基礎
    $div5 = 6 - $ryouiki; //領域導入
    $div6 = 10 - $kisoriron; //基礎理論
    $div7 = 10 - $akitekutya; //アーキテクチャ
    $div8 = 10 - $contents; //コンテンツ
    $div9 = 34 - $kisoriron - $akitekutya - $contents; //学科専門
    $div10 = 4 - $jikken; //実験科目
    $div11 = 62 - $gakkakiso - $ryouiki - $kisoriron - $akitekutya - $contents - $jikken - $zemi; //専門教育（三年次修了）
    $div12 = 82 - $gakkakiso - $ryouiki - $kisoriron - $akitekutya - $contents - $jikken - $zemi; //専門教育（四年次修了）
    $div13 = 110 - $sum; //すべて（三年）
    $div14 = 128 - $sum; //すべて（四年）
 
};

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>単位計算　情報科学科</title>
        <meta http-equiv="content-type" charset="utf-8">
        <link rel="stylesheet" href="cs.css">
    </head>
    <body>
        <header>
            <h1>単位不足計算</h1>
        </header>
        <h2>取得した単位数を入力すると足りない単位数を出します</h2>
        <form method="post" action="">
            教養：<input type="text" name="kyoyo" ><br>
            基盤科目（自然科学領域）：<input type="text" name="kiban_sizen" ><br>
            基盤科目（自然科学領域以外）：<input type="text" name="kiban_others" ><br>
            キャリア教育：<input type="text" name="career" ><br>
            基礎ゼミナール：<input type="text" name="kisozemi" ><br>
            情リテⅠ：<input type="text" name="inforite1" ><br>
            実践英語：<input type="text" name="english" ><br>
            未修言語：<input type="text" name="other_lang" ><br>
            情リテⅡ：<input type="text" name="inforite2" ><br>
            保健体育科目：<input type="text" name="taiku" ><br>
            理系共通基礎：<input type="text" name="rikeikiso" ><br>
            学科基礎：<input type="text" name="gakkakiso" ><br>
            領域導入：<input type="text" name="ryouiki" ><br>
            学科専門（基礎理論）：<input type="text" name="kisoriron" ><br>
            学科専門（アーキテクチャ）：<input type="text" name="akitekutya" ><br>
            学科専門（コンテンツ）：<input type="text" name="contents" ><br>
            実験科目：<input type="text" name="jikken" ><br>
            ゼミナール：<input type="text" name="zemi" ><br>
            特別研究：<input type="text" name="kennkyuu" ><br>
            専門教育：<input type="text" name="sennmonnkyoiku" ><br>
            本学開講すべてから（上記以外）：<input type="text" name="the_others" ><br><br>
            <input type="submit" name="send" value="クリック" >
        </form>
        <dl>

            <?php if ( isset($_POST["send"]) === true ) {
                if ( $kiban_sizen < 2 ) { ?>
                    <span>基盤科目の自然科学領域を取っていません</span><br>
                <?php };
                if ( $div1 > 0) { ?>
                    <span>教養・基盤・キャリア教育が</span><?php echo $div1; ?><span>単位足りません</span><br>
                <?php };
                if ( $kisozemi < 2 ) { ?>
                    <span>基礎ゼミナールを取っていません</span><br>
                <?php };
                if ( $inforite1 < 2 ) { ?>
                    <span>情リテⅠを取っていません</span><br>
                <?php };
                if ( $div2 > 0 ) { ?>
                    <span>英語が</span><?php echo $div2; ?><span>単位足りません</span><br>
                <?php };
                if ( $div3 > 0 ) { ?>
                    <span>理系共通基礎が</span><?php echo $div3; ?><span>単位足りません</span><br>
                <?php };
                if ( $div4 > 0 ) { ?>
                    <span>学科基礎</span><?php echo $div4; ?><span>単位足りません</span><br>
                <?php };
                if ( $div5 > 0 ) { ?>
                    <span>領域導入が</span><?php echo $div5; ?><span>単位足りません</span><br>
                <?php };
                if ( $div6 > 0 ) { ?>
                    <span>基礎理論系が</span><?php echo $div6; ?><span>単位足りません</span><br>
                <?php };
                if ( $div7 > 0 ) { ?>
                    <span>アーキテクチャ系が</span><?php echo $div7; ?><span>単位足りません</span><br>
                <?php };
                if ( $div8 > 0 ) { ?>
                    <span>コンテンツ系が</span><?php echo $div8; ?><span>単位足りません</span><br>
                <?php };
                if ( $div9 > 0 ) { ?>
                    <span>学科専門科目が</span><?php echo $div9; ?><span>単位足りません</span><br>
                <?php };
                if ( $div10 > 0 ) { ?>
                    <span>実験科目が</span><?php echo $div10; ?><span>単位足りません</span><br>
                <?php };
                if ( $zemi < 2 ) { ?>
                    <span>ゼミナール選択を取っていません</span><br>
                <?php };
                if ( $div11 > 0 ) { ?>
                    <span>専門教育科目（三年次修了判定）が</span><?php echo $div11; ?><span>単位足りません</span><br>
                <?php };
                if ( $div12 > 0 ) { ?>
                    <span>専門教育科目（四年次修了判定）が</span><?php echo $div12; ?><span>単位足りません</span><br>
                <?php };
                if ( $div13 > 0 ) { ?>
                    <span>すべての授業の単位数（三年次修了判定）が</span><?php echo $div13; ?><span>単位足りません</span><br>
                    <span>まだ４年生になれません！</span><br>
                <?php } else { ?>
                    <span>４年生になれます！</span><br>
                <?php };
                if ( $div14 > 0 ) { ?>
                    <span>すべての授業の単位数（四年次修了判定）が</span><?php echo $div14; ?><span>単位足りません</span><br>
                    <span>まだ卒業できません！</span><br>
                <?php } else { ?>
                    <span>卒業できます！おめでとうございます！</span>
                <?php };
            };?>
        </dl>
    </body>
</html>