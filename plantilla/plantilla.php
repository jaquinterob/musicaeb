<?php
include('conexion/conexion.php');
$sql="SELECT * FROM colores WHERE activo='1';";
$res=$connect->query($sql);
$row=$res->fetch_assoc();
$color=$row['color'];
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>MEB</title>
<link  rel="icon"   href="img/clave.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <div class="cargando">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-green-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script type="text/javascript">
var speed=30; // A menor numero más rápido
var flakes=150; // Numero de Copos de Nieve
var flake_image="http://i60.servimg.com/u/f60/13/20/23/83/sin_ta11.png"; // URL de la imagen de nieve
var swide, shigh;
var dx=new Array();
var xp=new Array();
var yp=new Array();
var am=new Array();
var sty=new Array();
window.onload=function() { if (document.getElementById) {
var k, f, b;
b=document.createElement("div");
b.style.position="absolute";
b.setAttribute("id", "bod");
document.body.appendChild(b);
set_scroll();
set_width();
for (var i=0; i<flakes; i++) {
dx[i]=0;
am[i]=Math.random()*20;
xp[i]=am[i]+Math.random()*(swide-2*am[i]-25);
yp[i]=Math.random()*shigh;
sty[i]=0.75+1.25*Math.random();
f=document.createElement("div");
f.style.position="absolute";
f.setAttribute("id", "flk"+i);
f.style.zIndex=i;
f.style.top=yp[i]+"px";
f.style.left=xp[i]+"px";
k=document.createElement("img");
k.src=flake_image;
f.appendChild(k);
b.appendChild(f);
}
setInterval("winter_snow()", speed);
}}
window.onresize=set_width;
function set_width() {
if (document.documentElement && document.documentElement.clientWidth) {
swide=document.documentElement.clientWidth;
shigh=document.documentElement.clientHeight;
}
else if (typeof(self.innerHeight)=="number") {
swide=self.innerWidth;
shigh=self.innerHeight;
}
else if (document.body.clientWidth) {
swide=document.body.clientWidth;
shigh=document.body.clientHeight;
}
else {
swide=800;
shigh=600
}
}
window.onscroll=set_scroll;
function set_scroll() {
var sleft, sdown;
if (typeof(self.pageYOffset)=="number") {
sdown=self.pageYOffset;
sleft=self.pageXOffset;
}
else if (document.body.scrollTop || document.body.scrollLeft) {
sdown=document.body.scrollTop;
sleft=document.body.scrollLeft;
}
else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
sleft=document.documentElement.scrollLeft;
sdown=document.documentElement.scrollTop;
}
else {
sdown=0;
sleft=0;
}
document.getElementById("bod").style.top=sdown+"px";
document.getElementById("bod").style.left=sleft+"px";
}
function winter_snow() {
for (var i=0; i<flakes; i++) {
yp[i]+=sty[i];
if (yp[i]>shigh-30) {
xp[i]=am[i]+Math.random()*(swide-2*am[i]-25);
yp[i]=0;
sty[i]=0.75+1.25*Math.random();
}
dx[i]+=0.02+Math.random()/10;
document.getElementById("flk"+i).style.top=yp[i]+"px";
document.getElementById("flk"+i).style.left=(xp[i]+am[i]*Math.sin(dx[i]))+"px";
}
}
</script>

<div style="text-align: center;"><a style= "@media screen and (max-width: 980px) display: none; left: 77%; height: 200px; width: 70px;opacity:0.8; z-index: 99; position: fixed; top: 3%;"><img src="http://www.imagenesanimadas.net/Navidad/Adornos/adornos-01.gif" _fcksavedurl="" alt="" /></a></div> -->
