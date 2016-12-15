
<!doctype html>
<html>
@foreach($historiales as $historial)
<head>
    <meta charset="utf-8">
    <title>{{$historial->Tag}}</title>
    <meta name="generator" content="WYSIWYG Web Builder 10 - http://www.wysiwygwebbuilder.com">
    <style>
        body
        {
            background-color: #FFFFFF;
            color: #000000;
            font-family: Arial;
            font-size: 8px;
            line-height: 1.1875;
            margin: 0;
            padding: 0;
        }
    </style>
    <link href="plantilla_reportes_pdf.css" rel="stylesheet">
    <link href=".css" rel="stylesheet">
    <style>
        #Image1
        {
            border: 0px #000000 solid;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }
        #wb_Text1
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text1 div
        {
            text-align: left;
        }
        #wb_Form1
        {
            background-color: #DCDCDC;
            border: 0px #000000 solid;
        }
        #wb_DESCRIOCIONEQUIPO
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_DESCRIOCIONEQUIPO div
        {
            text-align: left;
        }
        #Layer1
        {
            background-color: #FAFAFA;
        }
        #wb_Text3
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text3 div
        {
            text-align: left;
        }
        #wb_Form2
        {
            background-color: #F5F5F5;
            border: 1px #C0C0C0 groove;
            -moz-box-shadow: 0px 0px 1px #C0C0C0;
            -webkit-box-shadow: 0px 0px 1px #C0C0C0;
            box-shadow: 0px 0px 1px #C0C0C0;
        }
        #Layer2
        {
            background-color: #DCDCDC;
        }
        #wb_Text4
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text4 div
        {
            text-align: left;
        }
        #wb_Text5
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text5 div
        {
            text-align: left;
        }
        #wb_Text6
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text6 div
        {
            text-align: left;
        }
        #wb_TAGEQUIPO
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_TAGEQUIPO div
        {
            text-align: left;
        }
        #wb_AREA
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_AREA div
        {
            text-align: left;
        }
        #wb_Form3
        {
            background-color: #F5F5F5;
            border: 1px #C0C0C0 groove;
            -moz-box-shadow: 0px 0px 1px #C0C0C0;
            -webkit-box-shadow: 0px 0px 1px #C0C0C0;
            box-shadow: 0px 0px 1px #C0C0C0;
        }
        #Layer3
        {
            background-color: #DCDCDC;
        }
        #wb_Text7
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text7 div
        {
            text-align: left;
        }
        #wb_Text8
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text8 div
        {
            text-align: left;
        }
        #wb_Text9
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text9 div
        {
            text-align: left;
        }
        #wb_Text10
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text10 div
        {
            text-align: left;
        }
        #wb_NOMBREOPERADOR
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_NOMBREOPERADOR div
        {
            text-align: left;
        }
        #wb_CARGO
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_CARGO div
        {
            text-align: left;
        }
        #wb_GERENCIA
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_GERENCIA div
        {
            text-align: left;
        }
        #wb_Form4
        {
            background-color: #F5F5F5;
            border: 1px #C0C0C0 groove;
            -moz-box-shadow: 0px 0px 1px #C0C0C0;
            -webkit-box-shadow: 0px 0px 1px #C0C0C0;
            box-shadow: 0px 0px 1px #C0C0C0;
        }
        #Layer4
        {
            background-color: #DCDCDC;
        }
        #wb_Text14
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text14 div
        {
            text-align: left;
        }
        #wb_Text15
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text15 div
        {
            text-align: left;
        }
        #wb_Text16
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text16 div
        {
            text-align: left;
        }
        #wb_Text17
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text17 div
        {
            text-align: left;
        }
        #wb_DESCRIPCIONREPUESTO
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_DESCRIPCIONREPUESTO div
        {
            text-align: left;
        }
        #wb_NUMEROPARTE
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_NUMEROPARTE div
        {
            text-align: left;
        }
        #wb_DIMENSAIONREP
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_DIMENSAIONREP div
        {
            text-align: left;
        }
        #IMAGENREPUESTO
        {
            border: 0px #000000 solid;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }
        #wb_Form5
        {
            background-color: #DCDCDC;
            border: 0px #000000 solid;
        }
        #Image3
        {
            border: 0px #000000 solid;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }
        #wb_Text21
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text21 div
        {
            text-align: left;
        }
        #Layer5
        {
            background-color: #FAFAFA;
        }
        #wb_Text22
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text22 div
        {
            text-align: left;
        }
        #wb_Form6
        {
            background-color: #DCDCDC;
            border: 0px #000000 solid;
        }
        #wb_Text23
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text23 div
        {
            text-align: left;
        }
        #wb_Text24
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text24 div
        {
            text-align: left;
        }
        #wb_Form7
        {
            background-color: #F5F5F5;
            border: 1px #C0C0C0 groove;
            -moz-box-shadow: 0px 0px 1px #C0C0C0;
            -webkit-box-shadow: 0px 0px 1px #C0C0C0;
            box-shadow: 0px 0px 1px #C0C0C0;
        }
        #Layer6
        {
            background-color: #DCDCDC;
        }
        #wb_Text26
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text26 div
        {
            text-align: left;
        }
        #wb_Text27
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text27 div
        {
            text-align: left;
        }
        #wb_Text28
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text28 div
        {
            text-align: left;
        }
        #wb_DESCRIPCIONOPERACION
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_DESCRIPCIONOPERACION div
        {
            text-align: left;
        }
        #wb_FECHAINICIO
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_FECHAINICIO div
        {
            text-align: left;
        }
        #wb_FECHATOTAL
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_FECHATOTAL div
        {
            text-align: left;
        }
        #wb_Text32
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text32 div
        {
            text-align: left;
        }
        #wb_Text2
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text2 div
        {
            text-align: left;
        }
        #wb_Text25
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_Text25 div
        {
            text-align: left;
        }
        #wb_FECHAFIN
        {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        #wb_FECHAFIN div
        {
            text-align: left;
        }
    </style>
</head>
<body>
<div id="wb_Form1" style="position:absolute;left:4px;top:3px;width:714px;height:89px;z-index:51;">
    <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
        <div id="wb_Image1" style="position:absolute;left:0px;top:8px;width:138px;height:51px;z-index:1;">
            <img src="imagenes/logo.png" id="Image1" alt=""></div>
        <div id="wb_Text1" style="position:absolute;left:228px;top:30px;width:170px;height:29px;z-index:2;text-align:left;">
            <span style="color:#2F5398;font-family:Impact;font-size:24px;">Reporte de </span></div>
        <div id="Layer1" style="position:absolute;text-align:left;left:575px;top:8px;width:123px;height:31px;z-index:3;">
            <div id="wb_Text3" style="position:absolute;left:17px;top:7px;width:89px;height:18px;z-index:0;text-align:left;">
                <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>AAA-BB-000</strong></span></div>
        </div>
    </form>
</div>
<div id="wb_Form2" style="position:absolute;left:2px;top:273px;width:714px;height:115px;z-index:52;">
    <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form2">
        <div id="Layer2" style="position:absolute;text-align:left;left:2px;top:3px;width:708px;height:36px;z-index:6;">
            <div id="wb_Text25" style="position:absolute;left:18px;top:9px;width:90px;height:22px;z-index:5;text-align:left;">
                <span style="color:#2F5398;font-family:Arial;font-size:19px;"><strong>EQUIPO</strong></span></div>
        </div>
        <div id="wb_Text4" style="position:absolute;left:50px;top:51px;width:117px;height:18px;z-index:7;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>DESCRIPCION:</strong></span></div>
        <div id="wb_Text5" style="position:absolute;left:50px;top:77px;width:89px;height:18px;z-index:8;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>TAG:</strong></span></div>
        <div id="wb_Text6" style="position:absolute;left:399px;top:77px;width:89px;height:18px;z-index:9;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>AREA:</strong></span></div>
        <div id="wb_TAGEQUIPO" style="position:absolute;left:167px;top:77px;width:129px;height:17px;z-index:10;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:15px;">{{$historial->Tag}}</span></div>
        <div id="wb_AREA" style="position:absolute;left:464px;top:77px;width:129px;height:17px;z-index:11;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:15px;">{{$historial->Area}}</span></div>
        <div id="wb_DESCRIOCIONEQUIPO" style="position:absolute;left:167px;top:51px;width:532px;height:17px;z-index:12;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:15px;">{{$historial->Equipo}}</span></div>
    </form>
</div>
<div id="wb_Form3" style="position:absolute;left:2px;top:402px;width:714px;height:115px;z-index:53;">
    <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form3">
        <div id="Layer3" style="position:absolute;text-align:left;left:2px;top:3px;width:708px;height:35px;z-index:15;">
            <div id="wb_Text7" style="position:absolute;left:16px;top:6px;width:121px;height:22px;z-index:14;text-align:left;">
                <span style="color:#2F5398;font-family:Arial;font-size:19px;"><strong>OPERADOR</strong></span></div>
        </div>
        <div id="wb_Text8" style="position:absolute;left:50px;top:52px;width:117px;height:18px;z-index:16;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>NOMBRE:</strong></span></div>
        <div id="wb_Text9" style="position:absolute;left:50px;top:80px;width:89px;height:18px;z-index:17;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>CARGO:</strong></span></div>
        <div id="wb_Text10" style="position:absolute;left:398px;top:80px;width:89px;height:18px;z-index:18;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>GERENCIA:</strong></span></div>
        <div id="wb_NOMBREOPERADOR" style="position:absolute;left:167px;top:53px;width:129px;height:17px;z-index:19;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:15px;">{{$historial->Operador}}</span></div>
        <div id="wb_CARGO" style="position:absolute;left:167px;top:81px;width:129px;height:17px;z-index:20;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:15px;">{{$historial->Cargo}}</span></div>
        <div id="wb_GERENCIA" style="position:absolute;left:489px;top:81px;width:129px;height:17px;z-index:21;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:15px;">{{$historial->Gerencia}}</span></div>
    </form>
</div>
<div id="wb_Form4" style="position:absolute;left:2px;top:530px;width:714px;height:223px;z-index:54;">
    <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form4">
        <div id="Layer4" style="position:absolute;text-align:left;left:2px;top:3px;width:708px;height:35px;z-index:24;">
            <div id="wb_Text14" style="position:absolute;left:16px;top:6px;width:121px;height:22px;z-index:23;text-align:left;">
                <span style="color:#2F5398;font-family:Arial;font-size:19px;"><strong>REPUESTO</strong></span></div>
        </div>
        <div id="wb_Text15" style="position:absolute;left:50px;top:59px;width:117px;height:18px;z-index:25;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>DESCRIPCION:</strong></span></div>
        <div id="wb_Text16" style="position:absolute;left:50px;top:130px;width:131px;height:18px;z-index:26;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>NRO DE PARTE:</strong></span></div>
        {{--<div id="wb_Text17" style="position:absolute;left:50px;top:155px;width:100px;height:18px;z-index:27;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>DIMENSION:</strong></span></div>--}}
        <div id="wb_DESCRIPCIONREPUESTO" style="position:absolute;left:173px;top:60px;width:129px;height:17px;z-index:28;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:15px;">{{$historial->Repuesto}}</span></div>
        <div id="wb_NUMEROPARTE" style="position:absolute;left:173px;top:130px;width:129px;height:17px;z-index:29;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:15px;">{{$historial->NoParte}}</span></div>
       {{-- <div id="wb_DIMENSAIONREP" style="position:absolute;left:173px;top:155px;width:129px;height:17px;z-index:30;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:15px;">{{$historial->Dimension}}</span></div>--}}
        <div id="wb_IMAGENREPUESTO" style="position:absolute;left:363px;top:54px;width:304px;height:156px;z-index:31;">
            <img src="imagenes/{{$historial->imgrepuesto}}" id="IMAGENREPUESTO" alt=""></div>
    </form>
</div>
<div id="wb_Form5" style="position:absolute;left:4px;top:3px;width:714px;height:89px;z-index:55;">
    <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form5">
        <div id="wb_Image3" style="position:absolute;left:0px;top:8px;width:138px;height:51px;z-index:34;">
            <img src="images/logo.png" id="Image3" alt=""></div>
        <div id="wb_Text21" style="position:absolute;left:301px;top:30px;width:113px;height:29px;z-index:35;text-align:left;">
            <span style="color:#2F5398;font-family:Impact;font-size:24px;">HISTORIAL</span></div>
        <div id="Layer5" style="position:absolute;text-align:left;left:575px;top:8px;width:123px;height:31px;z-index:36;">
            <div id="wb_Text22" style="position:absolute;left:17px;top:7px;width:89px;height:18px;z-index:33;text-align:left;">
                <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>AAA-BB-000</strong></span></div>
        </div>
    </form>
</div>
<div id="wb_Form6" style="position:absolute;left:2px;top:950px;width:714px;height:49px;z-index:56;">
    <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form6">
        <div id="wb_Text23" style="position:absolute;left:262px;top:6px;width:226px;height:18px;z-index:38;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>YPFBR - MANTENIMIENTO</strong></span></div>
        <div id="wb_Text24" style="position:absolute;left:244px;top:24px;width:242px;height:18px;z-index:39;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>SCZ - GUILLERMO ELDER BELL</strong></span></div>
    </form>
</div>
<div id="wb_Form7" style="position:absolute;left:2px;top:105px;width:714px;height:154px;z-index:57;">
    <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form7">
        <div id="Layer6" style="position:absolute;text-align:left;left:2px;top:3px;width:708px;height:35px;z-index:41;">
            <div id="wb_Text2" style="position:absolute;left:16px;top:7px;width:149px;height:22px;z-index:40;text-align:left;">
                <span style="color:#2F5398;font-family:Arial;font-size:19px;"><strong>OPERACION</strong></span></div>
        </div>
        <div id="wb_Text26" style="position:absolute;left:50px;top:59px;width:117px;height:18px;z-index:42;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>DESCRIPCION:</strong></span></div>
        <div id="wb_Text27" style="position:absolute;left:50px;top:89px;width:144px;height:18px;z-index:43;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>FECHA DE INICIO:</strong></span></div>
        <div id="wb_DESCRIPCIONOPERACION" style="position:absolute;left:167px;top:60px;width:129px;height:17px;z-index:44;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:15px;">{{$historial->Descripcion}}</span></div>
        <div id="wb_FECHAINICIO" style="position:absolute;left:194px;top:84px;width:129px;height:17px;z-index:45;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:15px;">{{$historial->FechaInicio}}</span></div>
        <div id="wb_FECHATOTAL" style="position:absolute;left:263px;top:116px;width:129px;height:17px;z-index:46;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:15px;">{{$historial->Totalfecha}}</span></div>
        <div id="wb_Text32" style="position:absolute;left:363px;top:83px;width:194px;height:18px;z-index:47;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>FECHA DE FINALIZACION:</strong></span></div>
        <div id="wb_Text28" style="position:absolute;left:50px;top:116px;width:213px;height:18px;z-index:48;text-align:left;">
            <span style="color:#2F5398;font-family:Arial;font-size:15px;"><strong>TIEMPO DE LA OPERACION:</strong></span></div>
        <div id="wb_FECHAFIN" style="position:absolute;left:553px;top:83px;width:129px;height:17px;z-index:49;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:15px;">{{$historial->FechaFin}}</span></div>
    </form>
</div>
</body>
    @endforeach
</html>