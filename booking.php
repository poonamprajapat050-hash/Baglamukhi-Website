<?php
include("include/connection.php");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$puja=$_POST['puja'];
$date=$_POST['date'];
$address=$_POST['address'];
$sql=mysqli_query($con, "insert into student(name, phone, puja, date, address)values('$name', '$phone', '$puja', '$date', '$address')");
}
?>



<html lang="hi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Booking | माँ बगलामुखी</title>

<link rel="stylesheet" href="css/all.min.css">
<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

html{
scroll-behavior:smooth;
font-size:16px;
-webkit-text-size-adjust:100%;
}

body{
font-family:'Poppins',sans-serif;


background:linear-gradient(
135deg,
#fff8f5,
#f9d8d8,
#c62828,
#8b0000,
#4a0000
);

overflow-x:hidden;
color:#4e342e;
position:relative;
min-width:320px;
}

img{
max-width:100%;
display:block;
}

a{
text-decoration:none;
}

.container{
width:100%;
max-width:1300px;
margin:auto;
padding:0 20px;

display:flex;
justify-content:center;
align-items:flex-start;
gap:30px;
flex-wrap:wrap;
}



body::before{
content:"";
position:fixed;
top:-200px;
left:-200px;
width:500px;
height:500px;
background:
radial-gradient(circle,
rgba(255,193,7,.18),
transparent 70%);
z-index:-2;
animation:moveGlow 10s linear infinite;
pointer-events:none;
}

body::after{
content:"";
position:fixed;
bottom:-250px;
right:-200px;
width:550px;
height:550px;
background:
radial-gradient(circle,
rgba(255,152,0,.15),
transparent 70%);
z-index:-2;
animation:moveGlow2 12s linear infinite;
pointer-events:none;
}


.row1{
background:linear-gradient(90deg,#8B0000,#C62828,#B71C1C);
color:white;
padding:12px 5%;
display:flex;
justify-content:space-between;
align-items:center;
flex-wrap:wrap;
gap:10px;
font-size:14px;
}

.row1 a{
color:white;
margin-right:18px;
transition:.3s;
display:inline-flex;
align-items:center;
gap:6px;
word-break:break-word;
}

.row1 a:hover{
color:#FFD700;
}


.navbar{
position:sticky;
top:0;
z-index:999;

display:flex;
justify-content:space-between;
align-items:center;		
padding:18px 4%;
background:rgba(139,0,0,.92);
backdrop-filter:blur(15px);
box-shadow:0 5px 20px rgba(0,0,0,.35);
}

.logo{
font-size:34px;
font-weight:700;
font-weight:bold;	
color:#FFD700;
display:flex;
align-items:center;
gap:8px;
}
.nav-links{
display:flex;
list-style:none;
gap:18px;
align-items:center;
flex-wrap:wrap;
}

.nav-links li a{
font-size:16px;
font-weight:600;
letter-spacing:.4px;
color:white;
transition:.3s;
white-space:nowrap;
}

.nav-links li a:hover,
.nav-links li .active{
color:#FFD700;
}

.menu-icon{
display:none;
font-size:26px;
cursor:pointer;
color:white;
}

@media(max-width:1024px){

.navbar{
padding:12px 2%;
}

.logo{
font-size:24px;
}

.nav-links{
gap:12px;
}

.nav-links li a{
font-size:14px;
}

}


@media(max-width:768px){

.menu-icon{
display:block;
}

.nav-links{
display:none;
position:absolute;
top:100%;
left:0;
width:100%;
background:#8B0000;
flex-direction:column;
padding:15px 0;
box-shadow:0 10px 20px rgba(0,0,0,.1);
}

.nav-links li{
width:100%;
text-align:center;
}

.nav-links li a{
display:block;
color:#990033;
padding:12px;
font-size:15px;
}

.nav-links li a:hover,
.nav-links li a.active{
    color:#990033;
}

}



.page-banner{
min-height:420px;

background:
linear-gradient(
rgba(0,0,0,.55),
rgba(0,0,0,.65)
),
url('images/b10.jpg');

background-size:cover;
background-position:center;

display:flex;
justify-content:center;
align-items:center;
text-align:center;

padding:80px 20px;

position:relative;
overflow:hidden;
}

.page-banner::before{
content:"";
position:absolute;

width:550px;
height:550px;

border-radius:50%;

background:
rgba(255,255,255,.08);

top:-180px;
left:-100px;

animation:floatCircle 8s linear infinite;
}

.banner-content{
position:relative;
z-index:2;

max-width:850px;

animation:fadeUp 1.2s ease;
}

.banner-content h1{
font-size:clamp(40px,7vw,72px);
color:white;
margin-bottom:18px;
text-shadow:0 5px 20px rgba(0,0,0,.4);
}

.banner-content p{
font-size:clamp(15px,2vw,20px);
line-height:1.9;
color:#f5f5f5;
}


.section{
padding:80px 5%;
}



.card{
flex:1 1 480px;
max-width:650px;

background:
rgba(255,255,255,.78);

backdrop-filter:blur(12px);

padding:25px;
border-radius:30px;

box-shadow:
0 15px 40px rgba(0,0,0,.12);

border:1px solid rgba(255,215,100,.5);

position:relative;
overflow:hidden;
}


.card-left{
opacity:0;
transform:translateX(-120px);
transition:1.2s ease;
}


.card-right{
opacity:0;
transform:translateX(120px);
transition:1.2s ease;
}


.card-left.show,
.card-right.show{
opacity:1;
transform:translateX(0);
}


.card::before{
content:"";
position:absolute;

top:-100%;
left:-100%;

width:250%;
height:200%;

background:
radial-gradient(circle,
rgba(255,193,7,.20),
transparent 60%);

animation:rotateGlow 10s linear infinite;

z-index:-1;
}


.image-card{
text-align:center;
}

.image-card img{
width:100%;
height:350px;
object-fit:cover;

border-radius:25px;

box-shadow:
0 10px 25px rgba(0,0,0,.2);

margin-bottom:25px;

transition:.5s;
}

.image-card img:hover{
transform:scale(1.03);
}

.image-card p{
font-size:17px;
line-height:1.9;
}



h2{
text-align:center;
color:#b71c1c;
margin-bottom:15px;
font-size:30px;
}

.group{
margin-bottom:15px;
}

label{
display:block;
margin-bottom:8px;
font-weight:600;
font-size:15px;
}

input,
select,
textarea{
width:100%;
padding:8px 16px;

border:none;
outline:none;

border-radius:14px;

background:#fffdf7;

border:1px solid #e7d8a5;

font-size:15px;

transition:.3s;
}

input:focus,
select:focus,
textarea:focus{
border-color:#ffb300;
box-shadow:0 0 15px rgba(255,179,0,.25);
transform:translateY(-2px);
}

textarea{
height:60px;
resize:none;
}


button{
width:100%;
padding:13px;

border:none;
border-radius:50px;

background:
linear-gradient(90deg,#ffd54f,#ff9800);

font-size:17px;
font-weight:bold;

cursor:pointer;

transition:.4s;
margin-top:10px;
}

button:hover{
background:
linear-gradient(90deg,#ff9800,#b71c1c);

color:white;

transform:translateY(-4px);

box-shadow:
0 12px 25px rgba(0,0,0,.2);
}


.whatsapp,
.call{
position:fixed;
bottom:20px;

width:60px;
height:60px;

border-radius:50%;

display:flex;
justify-content:center;
align-items:center;

font-size:24px;

z-index:999;

box-shadow:
0 8px 20px rgba(0,0,0,.25);

animation:bounce 1.5s infinite;
}

.whatsapp{
right:20px;
background:#25d366;
color:white;
}

.call{
left:20px;
background:#ffca28;
color:#333;
}


@keyframes bounce{
0%,100%{
transform:translateY(0);
}
50%{
transform:translateY(-10px);
}
}

@keyframes fadeUp{
from{
opacity:0;
transform:translateY(60px);
}
to{
opacity:1;
transform:translateY(0);
}
}

@keyframes floatCircle{
0%{
transform:rotate(0deg) translateY(0);
}
50%{
transform:rotate(180deg) translateY(20px);
}
100%{
transform:rotate(360deg) translateY(0);
}
}

@keyframes rotateGlow{
100%{
transform:rotate(360deg);
}
}

@keyframes moveGlow{
0%{
transform:translate(0,0);
}
50%{
transform:translate(80px,40px);
}
100%{
transform:translate(0,0);
}
}

@keyframes moveGlow2{
0%{
transform:translate(0,0);
}
50%{
transform:translate(-70px,-50px);
}
100%{
transform:translate(0,0);
}
}



@media(max-width:1024px){

.container{
flex-direction:row;
gap:20px;
}

.card{
flex:1;
max-width:none;
}

}

@media(max-width:768px){

.container{
flex-direction:column;
}

}


@media(max-width:768px){

.row1{
flex-direction:column;
text-align:center;
}

.navbar{
padding:15px 20px;
}

.nav-links{
position:absolute;
top:75px;
left:0;
width:100%;

background:#fff8dc;

display:none;
flex-direction:column;

padding:25px 0;

text-align:center;
}

.nav-links.active{
display:flex;
}

.menu-icon{
display:block;
}

.page-banner{
min-height:320px;
padding:100px 20px;
}

.banner-content h1{
font-size:48px;
}

.banner-content p{
font-size:16px;
max-width:650px;
margin:auto;
}

.card{
padding:25px 20px;
}

.image-card img{
height:350px;
}

h2{
font-size:28px;
}

}


@media(max-width:480px){

.logo{
font-size:22px;
}

.banner-content h1{
font-size:34px;
}

.image-card img{
height:280px;
}

}


.premium-footer{
background:linear-gradient(135deg,#4a0000,#8B0000,#B71C1C);
padding:35px 4%;
border-top:2px solid rgba(255,170,0,.25);
box-shadow:0 -10px 40px rgba(0,0,0,.08);
}

.footer-container{
max-width:1200px;
margin:auto;

display:grid;
grid-template-columns:repeat(4,1fr);

gap:25px;
}

.footer-box h3{
font-size:24px;
margin-bottom:25px;
color:#FFD700;
position:relative;
}

.footer-box h3::after{
content:"";
position:absolute;
left:0;
bottom:-10px;
width:60px;
height:4px;
border-radius:20px;
background:linear-gradient(90deg,#ff9800,#ffb300);
}

.footer-links{
list-style:none;
}

.footer-links li{
margin-bottom:14px;
}

.footer-links li a{
display:flex;
align-items:center;
gap:10px;
color:white;
font-size:16px;
font-weight:500;
transition:.3s;
}

.footer-links li a:hover{
transform:translateX(6px);
color:#FFD700;
}

.footer-links i,
.footer-contact i{
color:white;
}

.footer-contact p{
display:flex;
align-items:center;
gap:10px;
margin-bottom:14px;
font-size:15px;
color:white;
}

.footer-social{
display:flex;
gap:12px;
margin-top:20px;
}

.footer-social a{
width:45px;
height:45px;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
background:#fff;
color:#FFD700;
font-size:20px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
transition:.3s;
}

.footer-social a:hover{
background:linear-gradient(135deg,#ffca28,#ff9800);
color:#fff;
transform:translateY(-5px);
}

.qr-box{
background:rgba(255,255,255,.6);
padding:15px;
border-radius:20px;
text-align:center;
}

.qr-box img{
width:150px;
height:150px;
object-fit:cover;
margin:auto;
border-radius:10px;
}

.qr-box p{
margin-top:10px;
font-size:14px;
font-weight:600;
color:white;
}

.footer-bottom{
margin-top:35px;
padding-top:20px;
border-top:1px solid rgba(93,64,55,.15);
text-align:center;
}

.footer-bottom p{
font-size:16px;
font-weight:500;
color:white;
}


@media(max-width:1024px){

.footer-container{
grid-template-columns:repeat(4,1fr);
gap:15px;
}

.footer-box h3{
font-size:20px;
}

.footer-links li a,
.footer-contact p{
font-size:14px;
}

.qr-box img{
width:120px;
height:120px;
}

}

@media(max-width:768px){

.footer-container{
grid-template-columns:1fr;
}

.footer-box{
text-align:center;
}

.footer-box h3::after{
left:50%;
transform:translateX(-50%);
}

.footer-links li a,
.footer-contact p{
justify-content:center;
}

.footer-social{
justify-content:center;
}

}


.call-btn{

position:fixed;

left:25px;
bottom:20px;

width:60px;
height:60px;

border-radius:50%;

display:flex;
align-items:center;
justify-content:center;

font-size:26px;

color:#4e342e;

text-decoration:none;

z-index:9999;

background:
linear-gradient(135deg, #ffd54f, #ffca28);

box-shadow:0 10px 25px rgba(0,0,0,.25);

animation:floatBtn 2s infinite;

transition:.4s;
}


.whatsapp-btn{

position:fixed;

right:20px;
bottom:20px;

width:60px;
height:60px;

border-radius:50%;

display:flex;
align-items:center;
justify-content:center;

font-size:26px;

color:white;

text-decoration:none;

z-index:9999;

background:
linear-gradient(135deg,#25d366,#128c7e);

box-shadow:0 10px 25px rgba(0,0,0,.25);

animation:floatBtn 2s infinite;

transition:.4s;
}

.call-btn:hover,
.whatsapp-btn:hover{

transform:
scale(1.12)
translateY(-5px);
}

@keyframes floatBtn{

0%,100%{
transform:translateY(0);
}

50%{
transform:translateY(-10px);
}
}


@media(max-width:768px){

.call-btn{

left:15px;
bottom:85px;

width:55px;
height:55px;

font-size:22px;
}

.whatsapp-btn{

right:15px;
bottom:85px;

width:55px;
height:55px;

font-size:22px;
}

}

.banner-buttons{
margin-top:40px;
display:flex;
justify-content:center;
gap:25px;
flex-wrap:wrap;
}

.banner-btn{
position:relative;
overflow:hidden;
padding:16px 38px;
border-radius:50px;
font-size:18px;
font-weight:700;
letter-spacing:.5px;
text-decoration:none;
transition:.45s;
box-shadow:0 12px 30px rgba(0,0,0,.25);
backdrop-filter:blur(10px);
}

.banner-btn::before{
content:"";
position:absolute;
top:0;
left:-120%;
width:60%;
height:100%;
background:rgba(255,255,255,.4);
transform:skewX(-25deg);
transition:.8s;
}

.banner-btn:hover::before{
left:140%;
}

.book-btn{
background:linear-gradient(135deg,#ff9800,#ff5722);
color:#fff;
border:2px solid transparent;
}

.book-btn:hover{
transform:translateY(-8px) scale(1.06);
box-shadow:0 18px 40px rgba(255,87,34,.45);
}

.read-btn{
background:rgba(255,255,255,.15);
border:2px solid rgba(255,255,255,.8);
color:#fff;
}

.read-btn:hover{
background:#fff;
color:#ff9800;
transform:translateY(-8px) scale(1.06);
box-shadow:0 18px 40px rgba(255,255,255,.35);
}

.banner-btn i{
margin-right:8px;
font-size:18px;
}

@media(max-width:768px){

.banner-buttons{
flex-direction:column;
align-items:center;
gap:15px;
}

.banner-btn{
width:240px;
text-align:center;
}

}
</style>
</head>

<body>

<!-- TOP BAR -->

<div class="row1">

<div>
<a href="tel:+919000000000">
<i class="fa-solid fa-phone"></i>
+91 9000000000
</a>
</div>

<div style="display:flex;gap:18px;flex-wrap:wrap;">

<a href="#">
<i class="fa-solid fa-envelope"></i>
poonam13prajapat@gmail.com
</a>

<a href="#">
<i class="fa-brands fa-instagram"></i>
@prajapat_ji
</a>

</div>

</div>


<nav class="navbar">

<div class="logo">
<i class="fa-solid fa-om"></i>
Baglamukhi
</div>

<ul class="nav-links" id="menu">

<li><a href="home.html"><i class="fa-solid fa-house"></i> Home</a></li>

<li><a href="about.html"><i class="fa-solid fa-circle-info"></i> About</a></li>

<li><a href="anushthan.html"><i class="fa-solid fa-hands-praying"></i> Services</a></li>

<li><a href="gallery.html"><i class="fa-solid fa-image"></i> Gallery</a></li>

<li><a href="booking.php" class="active"><i class="fa-solid fa-envelope"></i> Booking</a></li>

<li><a href="contact.html"><i class="fa-solid fa-phone"></i> Contact</a></li>

</ul>

<div class="menu-icon" onclick="toggleMenu()">
<i class="fa fa-bars"></i>
</div>

</nav>


<section class="page-banner">

<div class="banner-content">

<h1>Booking Us</h1>

<p>
माँ बगलामुखी की दिव्य कृपा और आध्यात्मिक शक्ति के माध्यम से
हम भक्तों को शांति, सुरक्षा और सफलता का मार्ग प्रदान करते हैं।
</p>
<div class="banner-buttons">

<a href="booking.php" class="banner-btn book-btn">
<i class="fa-solid fa-calendar-check"></i>
Book Now
</a>

<a href="about.html" class="banner-btn read-btn">
<i class="fa-solid fa-circle-info"></i>
Read More
</a>

</div>
</div>

</section>


<section class="section">

<div class="container">


<div class="card reveal card-left">

<h2>पूजा बुकिंग</h2>

<form action="booking.php" method="POST">

<div class="group">
<label>पूरा नाम</label>
<input type="text" name="name" placeholder="नाम लिखें">
</div>

<div class="group">
<label>मोबाइल</label>
<input type="tel" name="phone" placeholder="मोबाइल नंबर">
</div>

<div class="group">
<label>पूजा चुनें</label>

<select name="puja">
<option>select puja</option>
<option>Baglamukhi Hawan</option>
<option>Vishesh Hawan</option>
<option>Maha Vishesh Hawan</option>
<option>36000 Jaap</option>
<option>1.25 Lakh Jaap</option>
<option>36 Lakh Jaap</option>
<option>Mirchi Hawan</option>
<option>Shatru Badha Nivaran</option>
<option>Tantra Badha Nivaran</option>
<option>Laxmi Prapti</option>
<option>Karj Mukti</option>
<option>Court Case Vijay</option>
<option>Najar Dosh</option>

</select>

</div>

<div class="group">
<label>तारीख</label>
<input type="date" name="date">
</div>

<div class="group">
<label>पता</label>
<textarea name="address" placeholder="पूरा पता"></textarea>
</div>

<button type="submit" name="submit" value="submit" >🙏 Book Now</button>

</form>

</div>


<div class="card image-card reveal card-right">

<img src="images/b5.jpg" alt="Maa Baglamukhi">

<h2>माँ बगलामुखी</h2>

<p>
माँ बगलामुखी शक्ति, विजय और सुरक्षा की देवी हैं।
उनकी कृपा से सभी बाधाएँ दूर होती हैं।
भक्तों की रक्षा और सफलता के लिए विशेष पूजा एवं अनुष्ठान किए जाते हैं।
</p>

</div>

</div>

</section>

<a href="#" class="call-btn" onclick="showCallNumber()">
    <i class="fa-solid fa-phone"></i>
</a>

<a href="https://wa.me/919000000000"
target="_blank"
class="whatsapp-btn">

<i class="fa-brands fa-whatsapp"></i>

</a>

<footer class="premium-footer">

<div class="footer-container">

  
    <div class="footer-box">
        <h3>Quick Links</h3>

        <ul class="footer-links">
            <li><a href="home.html"><i class="fa-solid fa-angle-right"></i> Home</a></li>
            <li><a href="about.html"><i class="fa-solid fa-angle-right"></i> About Us</a></li>
            <li><a href="anushthan.html"><i class="fa-solid fa-angle-right"></i> Services</a></li>
            <li><a href="gallery.html"><i class="fa-solid fa-angle-right"></i> Gallery</a></li>
            <li><a href="booking.php"><i class="fa-solid fa-angle-right"></i> Booking</a></li>
            <li><a href="contact.html"><i class="fa-solid fa-angle-right"></i> Contact</a></li>
        </ul>
    </div>

  <div class="footer-box">
        <h3>Our Services</h3>

        <ul class="footer-links">
            <li><a href="#"><i class="fa-solid fa-angle-right"></i> Baglamukhi Hawan</a></li>
            <li><a href="#"><i class="fa-solid fa-angle-right"></i> Mirchi Hawan</a></li>
            <li><a href="#"><i class="fa-solid fa-angle-right"></i> Shatru Badha Nivaran</a></li>
            <li><a href="#"><i class="fa-solid fa-angle-right"></i> Court Case Vijay</a></li>
            <li><a href="#"><i class="fa-solid fa-angle-right"></i> Laxmi Prapti</a></li>
            <li><a href="#"><i class="fa-solid fa-angle-right"></i> Tantra Badha Nivaran</a></li>
        </ul>
    </div>

    <div class="footer-box">
        <h3>Contact Info</h3>

        <div class="footer-contact">
            <p><i class="fa-solid fa-phone"></i> +91 9000000000</p>
            <p><i class="fa-solid fa-envelope"></i> info@baglamukhi.com</p>
            <p><i class="fa-solid fa-location-dot"></i> Ujjain, Madhya Pradesh</p>
            <p><i class="fa-solid fa-clock"></i> 6:00 AM - 9:00 PM</p>
        </div>

        <div class="footer-social">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
    </div>

    <div class="footer-box">
        <h3>Scan & Connect</h3>

        <div class="qr-box">
            <img src="images/qr.png" alt="QR Code">
            <p>Scan QR Code</p>
        </div>
    </div>

</div>

<div class="footer-bottom">
    <p>
        © 2026 Design By Allsoft Infotech and Multimedia Pvt. Ltd.
    </p>
</div>

</footer>
<script>


function toggleMenu(){

const menu = document.getElementById("menu");

menu.classList.toggle("active");

}


const observer = new IntersectionObserver((entries)=>{

entries.forEach((entry)=>{

if(entry.isIntersecting){

entry.target.classList.add("show");

}

});

},{
threshold:0.2
});

document.querySelectorAll(
'.reveal'
).forEach((el)=>{

observer.observe(el);

});


function showCallNumber() {

    if(confirm("Call +91 9000000000 ?")){

        window.location.href = "tel:+919000000000";

    }

}
</script>

</body>
</html>