<?php
include 'inc/header.php';
Session::CheckLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

  $register = $users->userRegistration($_POST);
}

if (isset($register)) {
  echo $register;
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css"/>
  <link href="assets/register.css" rel="stylesheet" />
          <style>
            body, html {
              height: 100%;
            }
            .bckgroundimg{
              position: fixed; 
              top: 0; 
              left: 0; 
              width: 100%;
              min-height: 100%;
              z-index: -1;
            }
            .st11 {
              fill: #fff
            }
            .st19 {
              fill: #ccc
            }
            .st20 {
              fill: #7db4e2
            }
            .st21 {
              fill: #666
            }
            .st22 {
              fill: #e6e6e6
            }
            .st24 {
              fill: #999
            }
            .bg-dark{
               background-color:#343a4000!important;
               border-bottom: none!important;
             }
             button{
               background-color: rgb(162 215 246 / 61%);
             }
             
             button:hover {
              background: linear-gradient(41.33deg, rgb(162 215 246 / 61%) 20.82%, rgb(217 104 117 / 65%) 99.37%);
              box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.45);
            }
            
        </style>

</head>
<body>
<div class="bckground">
<img class="bckgroundimg" src="image/register_img.png" alt="">

<section class="wrapper">
  <aside>
    <div class="astronaut-container">
      <h2 class="secondary">Welcome!</h2>
      <p class="meta meta-astronaut">To keep connected with us please sign up with your personal info.</p>
      <div class="astronaut-image">
        <svg xmlns="http://www.w3.org/2000/svg" id="astronaut-container" x="0" y="0" version="1.1" viewBox="297.6 0 297.6 222" xml:space="preserve">
          <defs />

          <g id="bg-elements">
            <linearGradient id="SVGID_1_" x1="438.225" x2="433.8343" y1="778.7804" y2="836.298" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#f1e239" />
              <stop offset=".9943" stop-color="#f5a21d" />
            </linearGradient>
            <circle cx="436" cy="33.7" r="30.7" fill="url(#SVGID_1_)" />
            <linearGradient id="SVGID_2_" x1="565.0969" x2="482.9813" y1="631.1283" y2="734.2226" gradientTransform="matrix(.9856 .1693 .1693 -.9856 -140.9495 647.1921)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#fb82ff" />
              <stop offset=".9954" stop-color="#2a07d9" />
            </linearGradient>
            <circle cx="489.4" cy="59.9" r="39.1" fill="url(#SVGID_2_)" />
            <linearGradient id="SVGID_3_" x1="557.7067" x2="507.0522" y1="640.117" y2="703.7124" gradientTransform="matrix(.9856 .1693 .1693 -.9856 -140.9495 647.1921)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#fb82ff" />
              <stop offset=".9954" stop-color="#2a07d9" />
            </linearGradient>
            <path fill="url(#SVGID_3_)" d="M525.7 45.4c1.5 5.4 1.8 11.1.8 16.9-3.7 21.3-23.9 35.6-45.2 31.9-13.9-2.4-24.8-11.8-29.7-24 3.9 14.2 15.7 25.6 31.1 28.2 21.3 3.7 41.5-10.6 45.2-31.9 1.3-7.3.4-14.6-2.2-21.1z" />
            <linearGradient id="SVGID_4_" x1="541.7071" x2="491.1061" y1="665.7134" y2="729.2417" gradientTransform="matrix(.9856 .1693 .1693 -.9856 -140.9495 647.1921)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#fff" />
              <stop offset="1" stop-color="#fff" stop-opacity="0" />
            </linearGradient>
            <path fill="url(#SVGID_4_)" d="M497.2 25.6c13.9 2.6 25 11.8 29.9 24.1-3.9-14.4-15.9-25.8-31.7-28.3-20.9-3.3-40.8 10.8-44.6 31.6-.2 1.1-.4 2.2-.5 3.3 0 1.2 8.4-38 46.9-30.7z" />
            <linearGradient id="SVGID_5_" x1="-109.508" x2="-76.1625" y1="519.1927" y2="519.1927" gradientTransform="matrix(-.7821 -.5719 -.7124 .9743 773.4556 -511.598)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#fff" stop-opacity="0" />
              <stop offset=".1323" stop-color="#faf7ff" stop-opacity=".1323" />
              <stop offset=".3346" stop-color="#ece2ff" stop-opacity=".3346" />
              <stop offset=".5816" stop-color="#d5bfff" stop-opacity=".5816" />
              <stop offset=".8613" stop-color="#b68fff" stop-opacity=".8613" />
              <stop offset="1" stop-color="#a575ff" />
            </linearGradient>
            <path fill="url(#SVGID_5_)" d="M460.3 41.7c-7.2 10.1-7.4 25.1 4.2 27 5.2.9 11.4-1.8 15.4-6.7 3.9-4.7 6.1-11.4 11.3-14.2 2.3-1.3 5-1.6 7-3.5 3-2.9 2.6-7.7.8-10.6-4.6-7.6-15.7-8.1-24.8-3.7-5.2 2.6-10.3 6.6-13.9 11.7z" />
            <linearGradient id="SVGID_6_" x1="346.6716" x2="380.0172" y1="820.2009" y2="820.2009" gradientTransform="matrix(.8344 .4925 .6135 -1.0394 -302.6272 746.4561)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#fff" stop-opacity="0" />
              <stop offset=".1323" stop-color="#faf7ff" stop-opacity=".1323" />
              <stop offset=".3346" stop-color="#ece2ff" stop-opacity=".3346" />
              <stop offset=".5816" stop-color="#d5bfff" stop-opacity=".5816" />
              <stop offset=".8613" stop-color="#b68fff" stop-opacity=".8613" />
              <stop offset="1" stop-color="#a575ff" />
            </linearGradient>
            <path fill="url(#SVGID_6_)" d="M520.2 76.9c6.2-10.7 4.9-25.7-6.9-26.5-5.2-.3-11.2 2.9-14.7 8.1-3.4 5.1-5 12-9.8 15.3-2.2 1.5-4.9 2.1-6.7 4.2-2.7 3.2-1.9 7.9.2 10.7 5.3 7.1 16.4 6.5 25.1 1.2 5-3.1 9.6-7.6 12.8-13z" />
            <linearGradient id="SVGID_7_" x1="462.9268" x2="380.8112" y1="542.9199" y2="646.0142" gradientTransform="matrix(.9856 .1693 .1693 -.9856 -140.9495 647.1921)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#fb82ff" />
              <stop offset=".9954" stop-color="#2a07d9" />
            </linearGradient>
            <circle cx="373.8" cy="129.6" r="39.1" fill="url(#SVGID_7_)" />
            <linearGradient id="SVGID_8_" x1="455.5367" x2="404.8822" y1="551.9085" y2="615.504" gradientTransform="matrix(.9856 .1693 .1693 -.9856 -140.9495 647.1921)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#fb82ff" />
              <stop offset=".9954" stop-color="#2a07d9" />
            </linearGradient>
            <path fill="url(#SVGID_8_)" d="M410.1 115.1c1.5 5.4 1.8 11.1.8 16.9-3.7 21.3-23.9 35.6-45.2 31.9-13.9-2.4-24.8-11.8-29.7-24 3.9 14.2 15.7 25.6 31.1 28.2 21.3 3.7 41.5-10.6 45.2-31.9 1.3-7.4.4-14.7-2.2-21.1z" />
            <linearGradient id="SVGID_9_" x1="439.6419" x2="389.041" y1="577.5887" y2="641.117" gradientTransform="matrix(.9856 .1693 .1693 -.9856 -140.9495 647.1921)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#fff" />
              <stop offset="1" stop-color="#fff" stop-opacity="0" />
            </linearGradient>
            <path fill="url(#SVGID_9_)" d="M381.7 95.2c13.9 2.6 25 11.8 29.9 24.1-3.9-14.4-15.9-25.8-31.7-28.3-20.9-3.3-40.8 10.8-44.6 31.6-.2 1.1-.4 2.2-.5 3.3-.1 1.2 8.3-38 46.9-30.7z" />
            <linearGradient id="SVGID_10_" x1="-55.623" x2="-22.2774" y1="622.2743" y2="622.2743" gradientTransform="matrix(-.7821 -.5719 -.7124 .9743 773.4556 -511.598)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#fff" stop-opacity="0" />
              <stop offset=".1323" stop-color="#faf7ff" stop-opacity=".1323" />
              <stop offset=".3346" stop-color="#ece2ff" stop-opacity=".3346" />
              <stop offset=".5816" stop-color="#d5bfff" stop-opacity=".5816" />
              <stop offset=".8613" stop-color="#b68fff" stop-opacity=".8613" />
              <stop offset="1" stop-color="#a575ff" />
            </linearGradient>
            <path fill="url(#SVGID_10_)" d="M344.7 111.3c-7.2 10.1-7.4 25.1 4.2 27 5.2.9 11.4-1.8 15.4-6.7 3.9-4.7 6.1-11.4 11.3-14.2 2.3-1.3 5-1.6 7-3.5 3-2.9 2.6-7.7.8-10.6-4.6-7.6-15.7-8.1-24.8-3.7-5.2 2.6-10.2 6.6-13.9 11.7z" />
            <linearGradient id="SVGID_11_" x1="280.492" x2="313.8377" y1="721.8557" y2="721.8557" gradientTransform="matrix(.8344 .4925 .6135 -1.0394 -302.6272 746.4561)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#fff" stop-opacity="0" />
              <stop offset=".1323" stop-color="#faf7ff" stop-opacity=".1323" />
              <stop offset=".3346" stop-color="#ece2ff" stop-opacity=".3346" />
              <stop offset=".5816" stop-color="#d5bfff" stop-opacity=".5816" />
              <stop offset=".8613" stop-color="#b68fff" stop-opacity=".8613" />
              <stop offset="1" stop-color="#a575ff" />
            </linearGradient>
            <path fill="url(#SVGID_11_)" d="M404.6 146.5c6.2-10.7 4.9-25.7-6.9-26.5-5.2-.3-11.2 2.9-14.7 8.1-3.4 5.1-5 12-9.8 15.3-2.2 1.5-4.9 2.1-6.7 4.2-2.7 3.2-1.9 7.9.2 10.7 5.3 7.1 16.4 6.5 25.1 1.2 5.1-3.1 9.7-7.5 12.8-13z" />
            <circle cx="409.5" cy="11.9" r="11.9" class="st11" />
            <linearGradient id="SVGID_12_" x1="540.7055" x2="536.5526" y1="646.6459" y2="701.0477" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#f1e239" />
              <stop offset=".9943" stop-color="#f5a21d" />
            </linearGradient>
            <circle cx="538.6" cy="167.4" r="29" fill="url(#SVGID_12_)" />
            <linearGradient id="SVGID_13_" x1="430.4718" x2="425.0011" y1="665.5181" y2="737.183" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#f1e239" />
              <stop offset=".9943" stop-color="#f5a21d" />
            </linearGradient>
            <circle cx="427.7" cy="139.8" r="38.2" fill="url(#SVGID_13_)" />
            <circle cx="345.9" cy="161.2" r="11.9" class="st11" />
            <circle cx="566.4" cy="167.1" r="11.9" class="st11" />
          </g>
          <linearGradient id="rocket-right-fire_1_" x1="512.4502" x2="566.964" y1="706.5652" y2="812.0181" gradientTransform="matrix(.9993 -.03741 -.03741 -.9993 8.0954 864.7305)" gradientUnits="userSpaceOnUse">
            <stop offset=".00085069" stop-color="#ff72c7" stop-opacity=".2" />
            <stop offset=".9946" stop-color="#f36758" />
          </linearGradient>
          <path id="rocket-right-fire" fill="url(#rocket-right-fire_1_)" d="M526.2 60.4c-4.9-1.5-11-2.8-14.4 1-1.3 1.5-1.8 3.4-2.8 5.1-3.2 5.3-10.1 6.9-16.3 7s-12.7-.9-18.4 1.4c-5.8 2.2-10.3 9.4-7.1 14.7.5.8 1.2 1.6 1.5 2.6.8 2.3-1 4.7-3.2 5.9-2.1 1.2-4.6 1.5-6.8 2.6-4.5 2.2-7.1 7.6-6.1 12.5s5.6 8.8 10.5 9.1c3.4.2 7.3-.9 9.7 1.4 1.5 1.5 1.7 3.9 1.6 6s-.4 4.4.6 6.3c.9 1.9 3.6 3.2 5.2 1.9-7.7 3.8-10 14.8-6 22.4 4.1 7.6 12.9 11.8 21.5 12.1 8.6.3 17-2.7 24.7-6.5 3.7-1.8 7.3-3.8 10.1-6.8s4.7-7.1 4.1-11.1c-.4-3.1-2.2-6.3-1.1-9.3 1.4-3.8 6.4-4.5 10.5-4.5 4.1-.1 9.1-.8 10.4-4.7 1.1-3.2-1.2-6.6-3.7-8.9s-5.5-4.7-6.1-8c-1.2-6.5 7.1-12.8 4.3-18.7-1.2-2.6-4.1-3.9-5.9-6.2-2.5-3.2-2.4-7.9-.6-11.5 1.8-3.7 4.8-6.5 8-9.1 2.9-2.4 6.1-5.5 5.2-9.1-.8-3.1-4.8-4.6-7.9-3.8-3.9.9-5.8 4.2-9.1 6-3.9 2.1-8.1 1.5-12.4.2z" />
          <g id="rocket-right">
            <linearGradient id="SVGID_14_" x1="629.7151" x2="646.6724" y1="784.7791" y2="784.7791" gradientTransform="matrix(.9893 -.1459 -.1459 -.9893 39.0763 938.8394)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#ff9b82" />
              <stop offset=".9954" stop-color="#f30876" />
            </linearGradient>
            <path fill="url(#SVGID_14_)" d="M548.7 56.9c-7.3 1.4 1.8 5 3.1 12.3 1.4 7.3-5.5 15.4 1.8 14s12.1-8.4 10.7-15.6-8.4-12.1-15.6-10.7z" />
            <linearGradient id="SVGID_15_" x1="611.6523" x2="630.0731" y1="789.4769" y2="789.4769" gradientTransform="matrix(.9893 -.1459 -.1459 -.9893 39.2176 938.9194)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#f1e239" />
              <stop offset=".9943" stop-color="#f5a21d" />
            </linearGradient>
            <path fill="url(#SVGID_15_)" d="M542.7 60.6c-1.1-.5-2.7-.2-4.1.3-2.7 1.1-4.9 3.4-6.2 5.8-1.3 2.4-1.9 4.8-2.4 7.2 2.5-.3 4.7.3 7.2.1 2.3-.2 4.7-1.1 6.8-2.5 1.9-1.3 3.6-3.2 3.5-5" />
            <linearGradient id="SVGID_16_" x1="616.1012" x2="628.6761" y1="790.1096" y2="790.1096" gradientTransform="matrix(.9893 -.1459 -.1459 -.9893 39.2176 938.9194)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#f1e239" />
              <stop offset=".9943" stop-color="#f5a21d" />
            </linearGradient>
            <path fill="url(#SVGID_16_)" d="M542.7 61.9c-.8-.3-1.8-.2-2.8.2-1.8.8-3.3 2.3-4.2 3.9-.9 1.6-1.3 3.3-1.6 4.9 1.7-.2 3.2.2 4.9.1 1.6-.1 3.2-.7 4.7-1.7 1.3-.9 2.5-2.2 2.4-3.4" />
            <linearGradient id="SVGID_17_" x1="614.7501" x2="639.3094" y1="801.9698" y2="801.9698" gradientTransform="matrix(.9893 -.1459 -.1459 -.9893 39.0763 938.8394)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#ff9b82" />
              <stop offset=".9954" stop-color="#f30876" />
            </linearGradient>
            <path fill="url(#SVGID_17_)" d="M552.6 63c-4.2 6.1-3.9-3.6-10-7.8s-16.3-1.2-12.1-7.3 12.5-7.7 18.6-3.5c6.1 4.1 7.7 12.5 3.5 18.6z" />
            <path d="M553.3 61.8c-1.2-2.2-2.7-5.7-5.8-7.8-6.1-4.2-16.3-1.2-12.1-7.3 1.4-2.1 3.4-3.7 5.5-4.7-4.1.2-8 2.2-10.5 5.8-4.2 6.1 6 3.1 12.1 7.3s5.8 13.9 10 7.8c.4-.3.6-.7.8-1.1z" class="st19" />
            <path d="M550 56.7c1.5 2 4.2 4.8 4.9 8.4 1.4 7.3-5.5 15.4 1.8 14 2.5-.5 4.7-1.6 6.5-3.2-1.8 3.7-5.2 6.5-9.6 7.3-7.3 1.4-.4-6.8-1.8-14-1.4-7.3-10.4-10.9-3.1-12.3.4-.1.8-.1 1.3-.2z" class="st19" />
            <path d="M547.8 48.9c2.3 2 4.3 4.2 6.1 6.6 1.8 2.4 3.5 4.9 4.8 7.7.6 1.2 1.1 2.4 1.5 3.7 3.1-1.4 6.3-3.2 9.5-5.3 14.3-9.3 22.9-21.4 19.2-26.9-3.6-5.5-18.1-2.5-32.4 6.8-3.4 2.2-6.5 4.6-9.2 7.1.3.1.4.2.5.3z" class="st20" />
            <path d="M558.2 62.1c-1.3-2.6-3.1-5.1-4.9-7.3-1.8-2.2-3.7-4.3-5.9-6.1-4.4 4-7.7 8.1-9.4 11.6.2.2.4.3.7.5 1.5 1.2 2.8 2.7 3.8 4.3 1.1 1.7 1.9 3.5 2.4 5.4.1.2.1.5.2.7 4.2-.2 9.5-1.6 15.2-4.3-.6-1.7-1.3-3.3-2.1-4.8z" class="st21" />
            <path d="M558.2 62.1c-.9-1.7-1.9-3.3-3-4.9-1.6 1.4-3.3 2.7-5 3.9-1.1.8-2.2 1.6-3.3 2.3l-2.7 1.8c-.4.3-.8.5-1.1.8.8 1.4 1.4 2.9 1.9 4.5.1.2.1.5.2.7 4.2-.2 9.5-1.6 15.2-4.3-.7-1.7-1.4-3.3-2.2-4.8z" class="st19" />
            <path d="M571.5 30.3c-4.8 1.3-10 3.6-15.1 7-7.6 5-13.3 11.1-16.3 16.9 6.2 3.1 10.9 10.7 11.5 17.8 6.5-.4 14.5-3.2 22.1-8.1 5.2-3.4 9.6-7.4 12.7-11.4-1.4-9.1-7-17.6-14.9-22.2z" class="st11" />
            <path d="M586.5 52.3c-.7-4.4-2.4-8.6-4.9-12.4l-33.4 21.9c1.9 3.1 3.2 6.6 3.5 10.1 6.5-.4 14.5-3.2 22.1-8.1 5.2-3.5 9.5-7.4 12.7-11.5z" class="st22" />
            <path d="M586.5 47.3c-.7-1.7-1.5-3.5-2.3-5.1-2-3.7-4.6-7.3-7.8-10.1-.8-.7-1.5-1.3-2.4-1.9 0 0-.1 0-.1-.1-.6.1-1.3.3-1.9.5.2.1.5.3.7.4.8.6 1.6 1.2 2.4 1.9 3.2 2.9 5.8 6.4 7.8 10.1.9 1.7 1.6 3.4 2.3 5.1.5 1.2.9 2.3 1.3 3.5v.1c.4-.5.8-1 1.1-1.5-.4-.9-.7-1.9-1.1-2.9z" class="st21" />
            <linearGradient id="SVGID_18_" x1="658.7115" x2="682.6678" y1="809.2062" y2="809.2062" gradientTransform="matrix(.9893 -.1459 -.1459 -.9893 39.0763 938.8394)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#ff9b82" />
              <stop offset=".9954" stop-color="#f30876" />
            </linearGradient>
            <path fill="url(#SVGID_18_)" d="M595.3 30.7c0-.3-5.3-1-5.7-1-6.3-.9-12.4-1.2-18.6.6.2.2.5.3.7.5.9.6 1.7 1.3 2.5 2 3.3 3 6.1 6.7 8.2 10.6.9 1.7 1.7 3.6 2.5 5.4.5 1.2 1 2.5 1.4 3.7v.1c2.5-3.1 4.8-6.7 6-10.6 1.1-3.4 2.1-6.9 2.8-10.4 0-.3.1-.6.2-.9z" />
            <path d="M540.1 54.1c-.6 1.1-1 2.2-1.4 3.3.3.2.5.5.8.7 1.9 1.7 3.5 3.7 4.8 5.8 1.4 2.2 2.6 4.6 3.5 7l.3.9c1.1.1 2.3.1 3.5 0-.6-7-5.3-14.6-11.5-17.7z" class="st24" />
            <path d="M550.7 72h.9c-.6-7.1-5.3-14.7-11.5-17.8-.1.3-.3.6-.4.8 5.8 3.1 10.2 10.2 11 17z" class="st19" />
            <linearGradient id="SVGID_19_" x1="621.8593" x2="641.71" y1="793.8992" y2="793.8992" gradientTransform="matrix(.9893 -.1459 -.1459 -.9893 39.0763 938.8394)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#ff9b82" />
              <stop offset=".9954" stop-color="#f30876" />
            </linearGradient>
            <path fill="url(#SVGID_19_)" d="M549.4 62.9c-5 3.3-9.6 5.2-10.2 4.3-.6-.9 3-4.3 8-7.6s9.6-5.2 10.2-4.3-3 4.3-8 7.6z" />
            <path d="M541.8 66.7c-.6-.9 3-4.3 8-7.6 2.8-1.8 5.4-3.2 7.3-4-1.1-.4-5.4 1.5-10 4.5-5 3.3-8.6 6.7-8 7.6.3.4 1.3.2 2.9-.3 0-.1-.1-.1-.2-.2z" class="st19" />
            <circle cx="568.5" cy="48.2" r="9.8" class="st21" />
            <circle cx="568.5" cy="48.2" r="8.3" class="st11" />
            <linearGradient id="SVGID_20_" x1="622.8394" x2="639.4767" y1="-329.5388" y2="-329.5388" gradientTransform="matrix(-.1141 .9935 .9935 .1141 967.8955 -541.2868)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#2e118c" />
              <stop offset=".9937" stop-color="#8c2267" />
            </linearGradient>
            <circle cx="568.5" cy="48.2" r="8.3" fill="url(#SVGID_20_)" />
          </g>
          <g id="pen-left">
            <path d="M383.4 38.3l.5 2.5s1.3 5.6 6.5 6.3c2.1.3 7.8-.5 9-.9l-8.7-3.7c-.2.1-.4.2-.6.2-.8.1-1.5-.5-1.6-1.3s.5-1.5 1.3-1.6 1.5.5 1.6 1.3l8.5 5s-3.4-5.9-4.7-7.5c-3.8-4.4-8.8-2.1-8.8-2.1l-3 1.8z" class="st11" />
            <linearGradient id="SVGID_21_" x1="1371.2521" x2="1367.783" y1="-501.5495" y2="-456.1047" gradientTransform="scale(1 -1) rotate(64.64 510.84692259 -1048.62935934)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#f1e239" />
              <stop offset=".9943" stop-color="#f5a21d" />
            </linearGradient>
            <path fill="url(#SVGID_21_)" d="M386 36.9l-2.1 4.3-31-12.3-11.1-7.8c-.8-.7-1.1-1.8-.6-2.7.4-.9 1.5-1.5 2.5-1.2l12.9 3.9L386 36.9z" />
            <linearGradient id="SVGID_22_" x1="1099.8173" x2="1099.5206" y1="89.2989" y2="93.1843" gradientTransform="scale(-1 1) rotate(-83.177 328.10487865 901.0352387)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#c44fee" />
              <stop offset=".9943" stop-color="#f5a21d" />
            </linearGradient>
            <path fill="url(#SVGID_22_)" d="M383.9 41.2l-1.4-.6 2.3-4.4 1.2.7-2.1 4.3z" />
          </g>
          <g id="notebook-left">
            <linearGradient id="SVGID_23_" x1="244.5536" x2="241.213" y1="656.9166" y2="700.6778" gradientTransform="matrix(-.8647 .4037 -.4233 -.9066 856.4305 578.3378)" gradientUnits="userSpaceOnUse">
              <stop offset=".00029514" stop-color="#0023e8" />
              <stop offset=".9943" stop-color="#1ddff5" />
            </linearGradient>
            <path fill="url(#SVGID_23_)" d="M355.2 86.8l27.7-12.9-22.7-38.8-24.6 13.8 19.6 37.9z" />
            <linearGradient id="SVGID_24_" x1="539.1935" x2="588.1192" y1="778.517" y2="778.517" gradientTransform="matrix(-.9999 -.0116 .0116 -.9999 916.476 844.7733)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_24_)" d="M386.3 67.6l-5.1 5-24.9 11.8L337.6 48l3.4-3 27.3-9.8 18 32.4z" />
            <linearGradient id="SVGID_25_" x1="282.7044" x2="279.6051" y1="646.6593" y2="687.2601" gradientTransform="matrix(-.9398 .4388 -.4365 -.935 919.0634 556.9703)" gradientUnits="userSpaceOnUse">
              <stop offset=".00029514" stop-color="#0023e8" />
              <stop offset=".9943" stop-color="#1ddff5" />
            </linearGradient>
            <path fill="url(#SVGID_25_)" d="M357.9 82.3l30.1-14-20.4-37.4-28.7 12.8 19 38.6z" />
            <linearGradient id="SVGID_26_" x1="697.5824" x2="696.3288" y1="1064.0632" y2="1080.4858" gradientTransform="rotate(-176.562 515.06028001 569.28704693)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_26_)" d="M369.1 48l5 9.1-15.7 7.1-4.9-9.6 15.6-6.6z" />
            <linearGradient id="SVGID_27_" x1="561.2565" x2="572.6789" y1="806.4565" y2="806.4565" gradientTransform="matrix(-.9999 -.0116 .0116 -.9999 916.476 844.7733)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="none" stroke="url(#SVGID_27_)" stroke-miterlimit="10" stroke-width="1.3405" d="M363.9 37.9c.3-3.2-.6-6.4-2.4-9-.9-1.3-2.2-2.5-3.8-2.5-1.9 0-3.4 1.9-3.7 3.8-.2 1.9.4 3.8 1.1 5.6" />
            <linearGradient id="SVGID_28_" x1="567.293" x2="578.7155" y1="803.7858" y2="803.7858" gradientTransform="matrix(-.9999 -.0116 .0116 -.9999 916.476 844.7733)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="none" stroke="url(#SVGID_28_)" stroke-miterlimit="10" stroke-width="1.3405" d="M357.8 40.5c.3-3.2-.6-6.4-2.4-9-.9-1.3-2.2-2.5-3.8-2.5-1.9 0-3.4 1.9-3.7 3.8-.2 1.9.4 3.8 1.1 5.6" />
            <linearGradient id="SVGID_29_" x1="573.6545" x2="585.077" y1="800.4117" y2="800.4117" gradientTransform="matrix(-.9999 -.0116 .0116 -.9999 916.476 844.7733)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="none" stroke="url(#SVGID_29_)" stroke-miterlimit="10" stroke-width="1.3405" d="M351.4 43.8c.3-3.2-.6-6.4-2.4-9-.9-1.3-2.2-2.5-3.8-2.5-1.9 0-3.4 1.9-3.7 3.8-.2 1.9.4 3.8 1.1 5.6" />
            <linearGradient id="SVGID_30_" x1="562.41" x2="562.1704" y1="798.5291" y2="801.6672" gradientTransform="matrix(-.9999 -.0116 .0116 -.9999 916.476 844.7733)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="url(#SVGID_30_)" d="M362.2 38.2c0 .9.6 1.7 1.3 1.7.7 0 1.3-.7 1.4-1.7 0-.9-.6-1.7-1.3-1.7-.8 0-1.4.8-1.4 1.7z" />
            <linearGradient id="SVGID_31_" x1="568.0909" x2="567.8514" y1="796.5201" y2="799.6583" gradientTransform="matrix(-.9999 -.0116 .0116 -.9999 916.476 844.7733)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="url(#SVGID_31_)" d="M356.5 40.1c0 .9.6 1.7 1.3 1.7.7 0 1.3-.7 1.4-1.7 0-.9-.6-1.7-1.3-1.7-.8.1-1.4.8-1.4 1.7z" />
            <linearGradient id="SVGID_32_" x1="574.1527" x2="573.9132" y1="793.5026" y2="796.6407" gradientTransform="matrix(-.9999 -.0116 .0116 -.9999 916.476 844.7733)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="url(#SVGID_32_)" d="M350.4 43.1c0 .9.6 1.7 1.3 1.7.7 0 1.3-.7 1.4-1.7 0-.9-.6-1.7-1.3-1.7-.8 0-1.4.7-1.4 1.7z" />
          </g>
          <path id="pipe" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4.9934" d="M447.5 80.4c1.9-10.3 8.3-22.8 18.3-24.5 8.7-1.4 18.3 4.8 20.9 14.6 1.5 5.8 1 12.9 5 17 4.2 4.4 10.8 2.7 16.5 2.3 9.1-.7 18.5 2.7 25.6 9.2s12 16.2 13.3 26.4c1.3 10.2-1.5 21.8-9.3 27-11 7.2-25.2-1.4-37.4 2.7-6.3 2.1-11.3 7.5-16 12.8-4.6 5.3-9.3 11-15.3 14-6.1 3-14 2.6-18.3-3.1" />
          <g id="long-rocket-right">
            <path d="M522.6 104.1l-1.3-2.2s-3-4.9-8.1-4c-2.1.4-7.2 2.9-8.3 3.6l9.4.9c.1-.2.3-.3.5-.4.7-.3 1.6 0 1.9.7.3.7 0 1.6-.7 1.9s-1.6 0-1.9-.7l-9.6-2.1s5 4.6 6.8 5.6c5 3 9-.7 9-.7l2.3-2.6z" class="st11" />
            <linearGradient id="SVGID_33_" x1="522.476" x2="519.0068" y1="-938.9088" y2="-893.4631" gradientTransform="matrix(-.1282 .9917 .9917 .1282 1519.5396 -291.5963)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#f1e239" />
              <stop offset=".9943" stop-color="#f5a21d" />
            </linearGradient>
            <path fill="url(#SVGID_33_)" d="M520.5 106.3l.6-4.7 33.3 2.1 13 4c1 .4 1.6 1.4 1.4 2.4-.1 1-1 1.9-2 2l-13.5.3-32.8-6.1z" />
            <linearGradient id="SVGID_34_" x1="148.3911" x2="148.0946" y1="172.3569" y2="176.2421" gradientTransform="matrix(.4197 .9077 .9077 -.4197 301.1071 42.619)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#c44fee" />
              <stop offset=".9943" stop-color="#f5a21d" />
            </linearGradient>
            <path fill="url(#SVGID_34_)" d="M521.1 101.5l1.6.2-.8 4.9-1.4-.3.6-4.8z" />
          </g>
          <g id="notebook-right">
            <linearGradient id="SVGID_35_" x1="92.3481" x2="89.0076" y1="373.6853" y2="417.4469" gradientTransform="matrix(.6244 .7217 .7567 -.6546 181.2578 331.3231)" gradientUnits="userSpaceOnUse">
              <stop offset=".00029514" stop-color="#0023e8" />
              <stop offset=".9943" stop-color="#1ddff5" />
            </linearGradient>
            <path fill="url(#SVGID_35_)" d="M530.2 163l-20-23.1 36.6-26.1 16.8 22.6-33.4 26.6z" />
            <linearGradient id="SVGID_36_" x1="285.9948" x2="334.9155" y1="586.8161" y2="586.8161" gradientTransform="matrix(.9174 .3979 .3979 -.9174 16.8051 550.4231)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_36_)" d="M509.7 132.8l2.6 6.6 17.9 20.9 32-25.6-1.9-4.1-20.9-20-29.7 22.2z" />
            <linearGradient id="SVGID_37_" x1="143.2861" x2="140.1864" y1="371.0512" y2="411.6563" gradientTransform="matrix(.6786 .7843 .7803 -.6751 133.1442 285.0745)" gradientUnits="userSpaceOnUse">
              <stop offset=".00029514" stop-color="#0023e8" />
              <stop offset=".9943" stop-color="#1ddff5" />
            </linearGradient>
            <path fill="url(#SVGID_37_)" d="M529.6 157.8l-21.7-25.1 33.8-25.8 21 23.3-33.1 27.6z" />
            <linearGradient id="SVGID_38_" x1="434.7141" x2="433.4605" y1="884.7141" y2="901.1362" gradientTransform="matrix(.9357 .3529 .3529 -.9357 -186.4424 813.9274)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_38_)" d="M533.4 121.9l-8.3 6.2 11.5 12.9 8.3-6.8-11.5-12.3z" />
            <linearGradient id="SVGID_39_" x1="308.0382" x2="319.4602" y1="614.7462" y2="614.7462" gradientTransform="matrix(.9174 .3979 .3979 -.9174 16.8051 550.4231)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="none" stroke="url(#SVGID_39_)" stroke-miterlimit="10" stroke-width="1.3405" d="M542.3 114.8c1-3 3.2-5.6 5.9-7.2 1.4-.8 3.1-1.4 4.5-.7 1.8.8 2.3 3.1 1.8 5-.6 1.8-2 3.3-3.3 4.7" />
            <linearGradient id="SVGID_40_" x1="314.0625" x2="325.4844" y1="612.1331" y2="612.1331" gradientTransform="matrix(.9174 .3979 .3979 -.9174 16.8051 550.4231)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="none" stroke="url(#SVGID_40_)" stroke-miterlimit="10" stroke-width="1.3405" d="M546.8 119.6c1-3 3.2-5.6 5.9-7.2 1.4-.8 3.1-1.4 4.5-.7 1.8.8 2.3 3.1 1.8 5-.6 1.8-2 3.3-3.3 4.7" />
            <linearGradient id="SVGID_41_" x1="320.4386" x2="331.8605" y1="608.7862" y2="608.7862" gradientTransform="matrix(.9174 .3979 .3979 -.9174 16.8051 550.4231)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="none" stroke="url(#SVGID_41_)" stroke-miterlimit="10" stroke-width="1.3405" d="M551.3 125.2c1-3 3.2-5.6 5.9-7.2 1.4-.8 3.1-1.4 4.5-.7 1.8.8 2.3 3.1 1.8 5-.6 1.8-2 3.3-3.3 4.7" />
            <linearGradient id="SVGID_42_" x1="309.1502" x2="308.9107" y1="606.839" y2="609.9771" gradientTransform="matrix(.9174 .3979 .3979 -.9174 16.8051 550.4231)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="url(#SVGID_42_)" d="M543.7 115.7c-.4.8-1.2 1.3-1.9 1s-.9-1.2-.6-2.1c.4-.8 1.2-1.3 1.9-1 .7.4 1 1.3.6 2.1z" />
            <linearGradient id="SVGID_43_" x1="314.8194" x2="314.5799" y1="604.8297" y2="607.9677" gradientTransform="matrix(.9174 .3979 .3979 -.9174 16.8051 550.4231)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="url(#SVGID_43_)" d="M548.1 119.8c-.4.8-1.2 1.3-1.9 1s-.9-1.2-.6-2.1c.4-.8 1.2-1.3 1.9-1 .8.4 1 1.3.6 2.1z" />
            <linearGradient id="SVGID_44_" x1="320.9166" x2="320.677" y1="601.8152" y2="604.9534" gradientTransform="matrix(.9174 .3979 .3979 -.9174 16.8051 550.4231)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="url(#SVGID_44_)" d="M552.5 125c-.4.8-1.2 1.3-1.9 1s-.9-1.2-.6-2.1c.4-.8 1.2-1.3 1.9-1s.9 1.3.6 2.1z" />
          </g>
          <g id="book">
            <linearGradient id="SVGID_45_" x1="838.8921" x2="760.068" y1="657.8455" y2="615.5496" gradientTransform="rotate(180 642.898 420.945)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#a13067" />
              <stop offset=".9954" stop-color="#824465" />
            </linearGradient>
            <path fill="url(#SVGID_45_)" d="M539.4 200l2.4 8.8-104.4 3.8 1.2-12.6 18.6-16.5 82.2 16.5z" />
            <linearGradient id="SVGID_46_" x1="446.9019" x2="385.6367" y1="617.0847" y2="645.9668" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#a13067" />
              <stop offset=".9954" stop-color="#824465" />
            </linearGradient>
            <path fill="url(#SVGID_46_)" d="M349.9 201.4l-2.3 8.3 80.8 3.5 16.4 7.3 9.8-6.1-3.9-13-18.6-15.3-82.2 15.3z" />
            <path d="M458.4 206.9v-.1h-5.5c.4 1.1.5 2.3.3 3.5-.5 3.6-3.8 6.5-7.7 6.8-5.2.4-9.5-3.2-9.5-7.9 0-.8.2-1.7.4-2.4h-5.5v.1H345v1.2c0 3.3 2.9 6 6.5 6h80.2c2.1 4.6 7.1 7.9 13 7.9 5.8 0 10.9-3.3 13-7.9h83.1c3.6 0 6.5-2.7 6.5-6v-1.2h-88.9z" class="st11" />
            <linearGradient id="SVGID_47_" x1="399.7632" x2="383.9503" y1="646.3242" y2="698.5436" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#ff9b82" />
              <stop offset=".9954" stop-color="#f30876" />
            </linearGradient>
            <path fill="url(#SVGID_47_)" d="M372.9 176.2l-23.2 25.2s32.8.3 51.3-6.3 43.8 1.7 43.8 9.2V173s-7.8-7-21.4-7-22.1 10.2-50.5 10.2z" />
            <linearGradient id="SVGID_48_" x1="488.2091" x2="473.0975" y1="651.704" y2="698.1448" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#ff9b82" />
              <stop offset=".9954" stop-color="#f30876" />
            </linearGradient>
            <path fill="url(#SVGID_48_)" d="M516.7 176.2l23.2 25.2s-32.8.3-51.3-6.3-43.8 1.7-43.8 9.2V173s7.8-7 21.4-7 22.1 10.2 50.5 10.2z" />
          </g>
          <g id="astronaut_1_">
            <path d="M413.1 112.8c-.3 2.9 1.3 5.5 3 7.9 4.8 6.7 10.4 12.7 15.9 18.7 3.2 3.4 6.7 7 11.3 7.7 5 .7 9.7-2.2 13.7-5.2 4.6-3.4 8.9-7.2 13-11.1 2-2 4.2-4.5 3.8-7.3-.3-2-1.7-3.6-3.1-5.1-6.4-6.6-12.7-13.3-19.1-19.9-1.8-1.9-3.9-4-6.6-4.2-1.6-.1-3.2.4-4.6 1-6.2 2.4-12.3 5-18.2 8.1-3.7 1.7-8.6 4.8-9.1 9.4z" class="st24" />
            <path d="M470.1 126.7c-4.1 4-8.4 7.7-13 11.1-4 3-8.8 6-13.7 5.2-4.6-.7-8.1-4.3-11.3-7.7-5.6-6-11.2-12-15.9-18.7-1.1-1.6-2.2-3.3-2.7-5.2l-.3 1.2c-.3 2.9 1.3 5.5 3 7.9 4.8 6.7 10.4 12.7 15.9 18.7 3.2 3.4 6.7 7 11.3 7.7 5 .7 9.7-2.2 13.7-5.2 4.6-3.4 8.9-7.2 13-11.1 2-2 4.2-4.5 3.8-7.3-.1-.4-.2-.9-.3-1.3-.7 1.8-2.1 3.4-3.5 4.7z" class="st19" />
            <linearGradient id="SVGID_49_" x1="466.3318" x2="432.8386" y1="716.1243" y2="740.3854" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_49_)" d="M436 102.4c.1.5-.4 1.1-.9 1.2s-1.1-.1-1.6-.2c-2.5-.8-5.2-1-7.8-.8-1 .1-2.3.6-2.3 1.6 0 .8.9 1.3 1.6 1.7 4.5 2.8 2.3 7 2.9 11.1.6 4.2 2.6 8.3 5.2 11.6 5.2 6.7 13.5 11 22 11.5 7.9.5 18.3-2.5 20.7-10.9.9-3.2.9-6.6.9-9.9 0-2.6-.1-5.3-1.3-7.6-2.4-4.3-8.3-5.5-12-8.6-4.2-3.4-7.3-8.2-8-13.6.4 3.2-17.5 10.5-20 11.9-4.8 2.8-7.7 5.8-7.8 11.5v2.1" />
            <linearGradient id="SVGID_50_" x1="443.7175" x2="472.5637" y1="717.9072" y2="717.9072" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#2e118c" />
              <stop offset=".9937" stop-color="#8c2267" />
            </linearGradient>
            <path fill="url(#SVGID_50_)" d="M468.2 105.9c-3 2.3-5.9 4.8-8.7 7.5-2.6 2.5-4.8 5.8-7.6 8.1-5.1 4.2-8.5 9.2-8.2 16.2 0 1.1.3 2.4 1.2 3 .5.3 1.1.4 1.7.5 2 .3 4.1.5 6.1.8.4.1.8.1 1.2-.1.7-.3.9-1.3.8-2.2-.1-1.4.4-2.3.5-3.6.6-5.1 3.1-9.8 6.3-13.7 3.2-4 7.1-7.4 10.9-10.7-1.3-1.9-2.7-3.8-4.2-5.8z" />
            <linearGradient id="SVGID_51_" x1="457.7569" x2="473.2152" y1="745.7449" y2="763.1356" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_51_)" d="M474.1 71.1c2.1-.2 4.3-.1 6.2.7 1.9.9 3.6 2.6 3.8 4.7.5 4-3.8 6.7-7.4 8.5 1.8 1.2 2.1 4.2.5 5.7s-4.6 1-5.6-.9c-2.6 1.2-3.8 4.1-5.1 6.7-1.2 2.6-3.2 5.4-6.1 5.4-8.5.2-7.9-14.1-5-18.9 3.9-6.5 11.1-11.1 18.7-11.9z" />
            <linearGradient id="SVGID_52_" x1="453.3657" x2="461.5243" y1="742.0347" y2="749.9786" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_52_)" d="M455.2 87.5c1.5.1 3 .6 4.4 1.3 2 1 3.9 2.2 5.3 4s2.1 4.1 1.7 6.3c-.4 2.2-2.2 4.1-4.4 4.4-2.5.3-4.8-1.3-6.6-3.1-1.7-1.7-3.3-3.7-4.6-5.8-.6-.9-1.1-1.8-1.2-2.9-.5-3 2.9-4.4 5.4-4.2z" />
            <linearGradient id="SVGID_53_" x1="488.3667" x2="487.0785" y1="714.2164" y2="726.2396" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_53_)" d="M481.9 121.7c.7 2.4 1.4 4.8 2.7 6.9s3.4 3.9 5.8 4.3c2.2.4 4.5-.4 6.5-1.3 2.8-1.1 5.6-2.4 7.9-4.4 2.3-2 3.9-4.9 3.8-8-.1-3.1-2.2-6-5.1-7s-6.4-.3-8.5 2c1.1-6.8-4-13.9-10.7-15.4s-14.1 2.4-17 8.7c-2.3 5.1-1.7 11.6 1.4 16.2 3.2 4.7 9.9 1.2 13.2-2z" />
            <path d="M484.8 114.6c-1.2 1.5-2.3 3.1-2.9 4.9-.6 1.8-.6 3.9.3 5.6.5 1 1.5 2 2.6 1.7.5-.1.8-.4 1.2-.7 3.3-2.6 6.6-5.3 9.8-7.9 1-.8 2-1.6 2.5-2.8.6-1.4.4-3.1-.4-4.5-1.9-3.5-3.5-3.7-6.6-1.8-2.4 1.4-4.7 3.3-6.5 5.5z" class="st24" />
            <path d="M498 110.8c-.3-.5-.5-.9-.8-1.2.5 1.2.6 2.6.1 3.8-.5 1.2-1.5 2-2.5 2.8-3.3 2.6-6.6 5.3-9.8 7.9-.4.3-.7.6-1.2.7-.7.2-1.4-.2-1.9-.7l.3.9c.5 1 1.5 2 2.6 1.7.5-.1.8-.4 1.2-.7 3.3-2.6 6.6-5.3 9.8-7.9 1-.8 2-1.6 2.5-2.8.7-1.4.4-3.1-.3-4.5z" class="st19" />
            <path d="M443.2 103.1c-1.7 1.6-3.4 3.3-3.8 5.5-.7 3.4 1.9 6.5 4.3 9 2.1 2.2 4.6 4.7 7.7 4.6 2.3-.1 4.3-1.5 6.1-2.9 2.4-1.8 4.8-3.7 6.6-6.1 1.8-2.4 3-5.4 2.6-8.3-.4-3.4-2.8-6.1-5.1-8.7-7.2-8.3-12.2 1.1-18.4 6.9z" class="st24" />
            <path d="M465.9 110c-1.8 2.4-4.2 4.2-6.6 6.1-1.8 1.4-3.8 2.9-6.1 2.9-3.1.1-5.6-2.3-7.7-4.6-2.4-2.5-4.9-5.6-4.3-9v-.2c-.8 1-1.5 2.1-1.8 3.4-.7 3.4 1.9 6.5 4.3 9 2.1 2.2 4.6 4.7 7.7 4.6 2.3-.1 4.3-1.5 6.1-2.9 2.4-1.8 4.8-3.7 6.6-6.1.9-1.1 1.6-2.4 2.1-3.7-.1.2-.2.4-.3.5z" class="st19" />
            <linearGradient id="SVGID_54_" x1="465.9613" x2="491.7252" y1="717.9196" y2="706.1113" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_54_)" d="M472.8 134.8c.7 2.4 1.4 4.8 2.7 6.9 1.3 2.1 3.4 3.9 5.8 4.3 2.2.4 4.5-.4 6.5-1.3 2.8-1.1 5.6-2.4 7.9-4.4 2.3-2 3.9-4.9 3.8-8-.1-3.1-2.2-6-5.1-7-2.9-1.1-6.4-.3-8.5 2 1.1-6.8-4-13.9-10.7-15.4s-14.1 2.4-17 8.7c-2.3 5.1-1.7 11.6 1.4 16.2 3.3 4.7 10 1.2 13.2-2z" />
            <path d="M474.5 126.1c-1.2 1.5-2.3 3.1-2.9 4.9s-.6 3.9.3 5.6c.5 1 1.5 2 2.6 1.7.5-.1.8-.4 1.2-.7 3.3-2.6 6.6-5.3 9.8-7.9 1-.8 2-1.6 2.5-2.8.6-1.4.4-3.1-.4-4.5-1.9-3.5-3.5-3.7-6.6-1.8-2.5 1.5-4.7 3.4-6.5 5.5z" class="st24" />
            <path d="M485.9 127.1c-3.3 2.6-6.6 5.3-9.8 7.9-.4.3-.7.6-1.2.7-1.1.3-2.1-.7-2.6-1.7s-.7-2-.7-3.1v.1c-.6 1.8-.6 3.9.3 5.6.5 1 1.5 2 2.6 1.7.5-.1.8-.4 1.2-.7 3.3-2.6 6.6-5.3 9.8-7.9 1-.8 2-1.6 2.5-2.8.3-.7.4-1.6.3-2.4-.5 1.1-1.4 1.9-2.4 2.6z" class="st19" />
            <linearGradient id="SVGID_55_" x1="453.9555" x2="451.0536" y1="733.2106" y2="735.3126" gradientTransform="matrix(1 -.0088 -.0088 -1 1.7037 847.299)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_55_)" d="M450.4 109.1c0 1.4-1.1 2.6-2.5 2.6s-2.5-1.1-2.5-2.5 1.1-2.6 2.5-2.6 2.5 1.1 2.5 2.5z" />
            <linearGradient id="SVGID_56_" x1="459.127" x2="456.225" y1="737.2856" y2="739.3876" gradientTransform="matrix(1 -.0088 -.0088 -1 1.7037 847.299)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_56_)" d="M455.6 105c0 1.4-1.1 2.6-2.5 2.6s-2.5-1.1-2.5-2.5 1.1-2.6 2.5-2.6c1.3 0 2.4 1.1 2.5 2.5z" />
            <linearGradient id="SVGID_57_" x1="464.9142" x2="462.0123" y1="741.6096" y2="743.7116" gradientTransform="matrix(1 -.0088 -.0088 -1 1.7037 847.299)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_57_)" d="M461.3 100.6c0 1.4-1.1 2.6-2.5 2.6s-2.5-1.1-2.5-2.5 1.1-2.6 2.5-2.6c1.3 0 2.5 1.1 2.5 2.5z" />
            <linearGradient id="SVGID_58_" x1="446.368" x2="463.6717" y1="777.2203" y2="777.2203" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_58_)" d="M446.7 65.5c.7 2.2 2.2 4.2 3.9 5.7 1.4 1.2 3.1 2.2 4.9 2.7 1.8.4 3.9.2 5.4-.9 2-1.4 2.8-4 2.7-6.4-.1-4.7-3.8-10.2-8.7-11.2-5.6-1.2-9.7 5-8.2 10.1z" />
            <linearGradient id="SVGID_59_" x1="462.6752" x2="401.2857" y1="768.084" y2="761.9008" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_59_)" d="M462.2 77.1c.2 1.8.2 3.5 0 5.3-.9 7.7-6 13.1-11.2 18.3-5.8 5.7-15.6 7.5-23.4 7.5-18 0-32.6-13.8-32.6-30.9s14.6-30.9 32.6-30.9c9.1 0 18.2 3.8 24.4 10.4 3 3.2 4.8 7.2 7 10.9 1.8 2.9 2.9 6.1 3.2 9.4z" />
            <linearGradient id="SVGID_60_" x1="411.6698" x2="461.5802" y1="763.2531" y2="763.2531" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#2e118c" />
              <stop offset=".9937" stop-color="#8c2267" />
            </linearGradient>
            <path fill="url(#SVGID_60_)" d="M425.3 66c-3.5 1.6-7.2 3.3-10 5.9-3.1 2.9-3.7 5.6-3.6 9.6.2 7.9 4.8 15.1 12.1 18.4 7.9 3.6 17.6 2.1 25-2.4 6-3.7 10.8-9.5 12.3-16.3 1.6-7.1-.8-12.6-4.9-18.1-3.3-4.4-6.4-9.4-12.8-7.2-6.1 1.9-12.1 7.3-18.1 10.1z" />
            <linearGradient id="SVGID_61_" x1="407.0482" x2="395.025" y1="758.0835" y2="749.2808" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_61_)" d="M390.5 90.4c.7 2.2 2.2 4.2 3.9 5.7 1.4 1.2 3.1 2.2 4.9 2.7 1.8.4 3.9.2 5.4-.9 2-1.4 2.8-4 2.7-6.4-.1-4.7-3.8-10.2-8.7-11.2-5.7-1.2-9.8 5-8.2 10.1z" />
            <path d="M389.7 105.5c.8 5.5 4.2 10.4 8.5 13.7 4.4 3.4 9.7 5.3 15.2 6.2 1.3.2 2.7.4 3.8-.2 1.2-.6 2-2.1 1.3-3.2-.5-.8-1.5-1-2.4-1.2-5.6-1.2-11.5-2.7-15.8-6.5s-6.6-10.5-3.8-15.5c.7-1.2 1.7-2.3 2.3-3.5 2.2-4.7-2.9-6-5.6-2.7-2.9 3.6-4.2 8.3-3.5 12.9z" class="st24" />
            <path d="M414.9 123.9c-5.4-1-10.8-2.9-15.2-6.2-4.4-3.4-7.7-8.3-8.5-13.7-.7-4.4.5-8.9 3.2-12.4-.4.3-.8.6-1.2 1.1-2.9 3.6-4.2 8.3-3.5 12.8.8 5.5 4.2 10.4 8.5 13.7 4.4 3.4 9.7 5.3 15.2 6.2 1.3.2 2.7.4 3.8-.2.6-.3 1.1-.8 1.3-1.4-1.1.5-2.4.3-3.6.1z" class="st19" />
            <linearGradient id="SVGID_62_" x1="422.7056" x2="416.0499" y1="724.6512" y2="698.2432" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_62_)" d="M409.5 137.7c.5 2 1.4 4.1 2.8 5.6 1.5 1.5 3.7 2.4 5.7 1.9 3.9-1 5-5.8 5.4-9.8 1.7 1.3 4.6.5 5.5-1.5.8-2-.6-4.6-2.8-4.9-1.1-.2 3.7-6.2 4.1-6.6 2-2.2 3.9-4.5 4.1-7.6.2-3-1.8-6.3-4.8-6.7-1.7-.2-3.4.4-4.9 1.1-5.4 2.6-10.6 5.9-13.3 11.4-2.5 5.3-3.3 11.5-1.8 17.1z" />
            <linearGradient id="SVGID_63_" x1="556.1419" x2="549.0594" y1="724.6467" y2="742.2455" gradientTransform="matrix(.9787 -.2053 -.2053 -.9787 40.9098 952.2387)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_63_)" d="M425.1 107.1c3.1-.5 6.6.1 8.5 2.5 1.3 1.6 1.7 3.7 1.8 5.7.1 1.8-.1 3.7-.8 5.4-.7 1.7-2 3.2-3.7 3.9-5.5 2.2-10.1-3.8-12.5-7.8-3-5 1.8-8.9 6.7-9.7z" />
            <linearGradient id="SVGID_64_" x1="416.6289" x2="441.7377" y1="764.9032" y2="764.9032" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#8c47c4" />
              <stop offset="1" stop-color="#8c47c4" stop-opacity="0" />
            </linearGradient>
            <path fill="url(#SVGID_64_)" d="M430.2 68.9c-3.2 1.5-6.5 2.9-9.2 5.2s-4.7 5.7-4.3 9.2c.3 3.5 3.6 6.8 7.1 6.3 1.5-.2 3-1.3 2.9-2.8-.1-1.6-2.1-2.6-2.5-4.1-.3-1.2.4-2.5 1.4-3.2s2.2-1.1 3.4-1.5c2.9-1 5.7-2.3 8.3-4.1 1.9-1.2 3.7-2.8 4.3-5 .7-2.6-1-5.3-3.7-4.4-2.5.9-5.1 3.3-7.7 4.4z" opacity=".39" />
            <linearGradient id="SVGID_65_" x1="948.5279" x2="951.4536" y1="1044.9196" y2="1044.9196" gradientTransform="matrix(.5499 -.4262 -.3906 -.5041 337.9244 1046.2585)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_65_)" d="M453.8 116.6c-.5.4-1.1.3-1.4-.1l-1.9-2.5c-.3-.4-.2-1 .2-1.4l.1-.1c.4-.3 1-.2 1.3.2l1.9 2.5c.2.5.2 1.1-.2 1.4z" />
            <linearGradient id="SVGID_66_" x1="952.4012" x2="955.3268" y1="1045.0093" y2="1045.0093" gradientTransform="matrix(.5499 -.4262 -.3906 -.5041 337.9244 1046.2585)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_66_)" d="M455.9 114.9c-.5.4-1.1.3-1.4-.1l-1.9-2.5c-.3-.4-.2-1 .2-1.4l.1-.1c.4-.3 1-.2 1.3.2l1.9 2.5c.3.5.2 1.1-.2 1.4z" />
            <linearGradient id="SVGID_67_" x1="956.2744" x2="959.2001" y1="1045.099" y2="1045.099" gradientTransform="matrix(.5499 -.4262 -.3906 -.5041 337.9244 1046.2585)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_67_)" d="M458 113.2c-.5.4-1.1.3-1.4-.1l-1.9-2.5c-.3-.4-.2-1 .2-1.4l.1-.1c.4-.3 1-.2 1.3.2l1.9 2.5c.3.5.2 1.1-.2 1.4z" />
            <linearGradient id="SVGID_68_" x1="960.1476" x2="963.0734" y1="1045.0648" y2="1045.0648" gradientTransform="matrix(.5499 -.4262 -.3906 -.5041 337.9244 1046.2585)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_68_)" d="M460.1 111.6c-.5.4-1.1.3-1.4-.1l-1.9-2.5c-.3-.4-.2-1 .2-1.4l.1-.1c.4-.3 1-.2 1.3.2l1.9 2.5c.3.4.2 1.1-.2 1.4z" />
            <linearGradient id="SVGID_69_" x1="964.0209" x2="966.9466" y1="1045.1545" y2="1045.1545" gradientTransform="matrix(.5499 -.4262 -.3906 -.5041 337.9244 1046.2585)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_69_)" d="M462.2 109.9c-.5.4-1.1.3-1.4-.1l-1.9-2.5c-.3-.4-.2-1 .2-1.4l.1-.1c.4-.3 1-.2 1.3.2l1.9 2.5c.3.5.2 1.1-.2 1.4z" />
            <linearGradient id="SVGID_70_" x1="967.8966" x2="970.8223" y1="1045.2391" y2="1045.2391" gradientTransform="matrix(.5499 -.4262 -.3906 -.5041 337.9244 1046.2585)" gradientUnits="userSpaceOnUse">
              <stop offset=".2648" stop-color="#e6e6e6" />
              <stop offset=".9943" stop-color="#ccc" />
            </linearGradient>
            <path fill="url(#SVGID_70_)" d="M464.3 108.2c-.5.4-1.1.3-1.4-.1l-1.9-2.5c-.3-.4-.2-1 .2-1.4l.1-.1c.4-.3 1-.2 1.3.2l1.9 2.5c.3.5.3 1.1-.2 1.4z" />
            <linearGradient id="SVGID_71_" x1="407.3105" x2="427.9893" y1="715.1847" y2="715.1847" gradientTransform="matrix(1 0 0 -1 0 841.89)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="url(#SVGID_71_)" d="M416.2 123.9c-1.6-.1-3.2-.2-4.7.2s-3 1.3-3.8 2.6c-.5.8-.6 1.9 0 2.5s1.7.4 2.5.2c4.8-1.2 9.8-1.3 14.7-.4.6.1 1.2.3 1.8.1 3.2-.8-1-3.1-2-3.5-2.6-.9-5.6-1.5-8.5-1.7z" />
            <linearGradient id="SVGID_72_" x1="11.3469" x2="32.0267" y1="143.7244" y2="143.7244" gradientTransform="matrix(.3139 .9494 -.9494 .3139 596.8477 16.7731)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#46006b" />
              <stop offset=".9937" stop-color="#1e2f61" />
            </linearGradient>
            <path fill="url(#SVGID_72_)" d="M464.1 82c-.6-1.4-1.2-3-1.3-4.5-.1-1.6.3-3.2 1.3-4.4.6-.7 1.6-1.2 2.4-.8s.9 1.5 1 2.3c.4 4.9 1.8 9.8 4.2 14.1.3.5.6 1.1.7 1.7.2 3.3-3.3 0-3.9-.8-1.8-2.3-3.2-5-4.4-7.6z" />
            <path d="M408.7 55.2c-4.5 3.4-7.9 8.4-9.4 13.8-.5 1.9-.5 4.3 1.2 5.2 1.3.7 3 0 3.9-1.2s1.3-2.6 1.9-4c2.2-5.4 7.2-9.6 12.9-10.9 1.8-.4 3.7-.5 5.4-1.3 1.7-.8 3.2-2.4 3.1-4.2-.2-7-16.5.8-19 2.6zm12.1 62.8c.5.6 1.2 1 1.9 1 .8 0 1.6-.5 1.6-1.3.1-.8-.6-1.5-.5-2.2.2-1.5 2.1-1.3 2.8-2.3 1.1-1.5-.1-3.3-1.9-3.5-4.2-.6-6.4 5.4-3.9 8.3zm68.8 9.9c-.8.3-1.6.9-1.6 1.8s.9 1.6 1.8 1.8c.9.2 1.8.3 2.6.7.8.4 1.4 1.5.9 2.2 1.5.2 3.1-.7 3.7-2.1 1.8-4.7-4.5-5.7-7.4-4.4zm9.6-11.4c-.8.3-1.6.9-1.6 1.8s.9 1.6 1.8 1.8c.9.2 1.8.3 2.6.7.8.4 1.4 1.5.9 2.2 1.5.2 3.1-.7 3.7-2.1 1.8-4.7-4.4-5.6-7.4-4.4z" class="st22" />
          </g>
          <linearGradient id="left-rocket-fire_1_" x1="405.7934" x2="327.0173" y1="680.9538" y2="728.7505" gradientTransform="matrix(.9932 .1164 .1164 -.9932 -59.3623 790.6149)" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#fff200" stop-opacity=".2" />
            <stop offset=".9946" stop-color="#f36758" />
          </linearGradient>
          <path id="left-rocket-fire" fill="url(#left-rocket-fire_1_)" d="M440.3 180.3c5.7-8.8 6.6-20.5-2.8-26.1-2.3-1.3-4.9-2-6.9-3.6-6.6-5.1 1.4-7.6 3.1-12.2 1.7-4.5.3-10.2-2.9-13.7-4.6-5.1-12-6.7-18.8-6.2s-13.4 2.7-20 4.3c-7.2 1.7-14.7 2.5-22 1.2-4-.7-7.8-2.1-11.3-4.1-1.7-1-7.5-7.7-9.2-7.3-1.5.3-4.8 11.3-4.3 13 .6 2.5 3.3 3.6 3.9 6.1.2.7.2 1.4.1 2.1-.2 2.5-1.4 5.1-.9 7.6 2 9 13 9.1 20.2 9.2 3.8.1 8 .7 10.8 3.3 3.2 3 4 7.7 4.6 12s1.4 9 4.6 12c3.2 2.9 9.7 2.3 10.6-2 2.9-1.9 6.9.1 8.9 3 4.6 6.5 4 11.6 13.2 12.8 7.4.7 14.7-4.5 19.1-11.4z" />
          <g id="left-rocket">
            <linearGradient id="SVGID_73_" x1="972.2311" x2="989.1871" y1="-113.8258" y2="-113.8258" gradientTransform="scale(-1 1) rotate(-68.821 476.1216116 968.3887788)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#ff9b82" />
              <stop offset=".9954" stop-color="#f30876" />
            </linearGradient>
            <path fill="url(#SVGID_73_)" d="M340.2 116.8c2.9 6.8 4.5-2.8 11.3-5.8 6.8-2.9 16.2 1.9 13.3-4.9-2.9-6.8-10.8-9.9-17.6-7-6.8 3.1-10 10.9-7 17.7z" />
            <linearGradient id="SVGID_74_" x1="955.0146" x2="973.4354" y1="-109.3865" y2="-109.3865" gradientTransform="scale(-1 1) rotate(-68.821 476.49972972 968.74730084)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#f1e239" />
              <stop offset=".9943" stop-color="#f5a21d" />
            </linearGradient>
            <path fill="url(#SVGID_74_)" d="M345.2 121.8c-.2 1.2.3 2.7 1.2 3.9 1.7 2.4 4.4 4 7 4.8s5.1.8 7.6.7c-.8-2.4-.7-4.7-1.5-7-.7-2.2-2.1-4.4-3.9-6.1-1.7-1.6-3.9-2.8-5.7-2.3" />
            <linearGradient id="SVGID_75_" x1="959.4635" x2="972.0385" y1="-108.6204" y2="-108.6204" gradientTransform="scale(-1 1) rotate(-68.821 476.49972972 968.74730084)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#f1e239" />
              <stop offset=".9943" stop-color="#f5a21d" />
            </linearGradient>
            <path fill="url(#SVGID_75_)" d="M346.3 121.5c-.2.8.2 1.8.8 2.7 1.2 1.6 3 2.7 4.8 3.3 1.8.5 3.5.5 5.2.5-.5-1.6-.5-3.2-1-4.8-.5-1.5-1.4-3-2.7-4.2-1.1-1.1-2.7-1.9-3.9-1.6" />
            <linearGradient id="SVGID_76_" x1="957.2675" x2="981.8298" y1="-96.5456" y2="-96.5456" gradientTransform="scale(-1 1) rotate(-68.821 476.1216116 968.3887788)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#ff9b82" />
              <stop offset=".9954" stop-color="#f30876" />
            </linearGradient>
            <path fill="url(#SVGID_76_)" d="M345.2 111.6c6.9 2.7-2.7 4.6-5.4 11.5s2.5 16.1-4.4 13.4-10.3-10.5-7.6-17.4c2.8-6.8 10.6-10.2 17.4-7.5z" />
            <path d="M343.9 111.2c-1.9 1.7-5 3.9-6.4 7.4-2.7 6.9 2.5 16.1-4.4 13.4-2.4-.9-4.3-2.5-5.8-4.4 1.1 3.9 3.9 7.3 8 8.9 6.9 2.7 1.7-6.5 4.4-13.4s12.3-8.8 5.4-11.5c-.3-.1-.7-.3-1.2-.4z" class="st19" />
            <path d="M339.7 115.6c1.6-1.9 3.7-5.1 7.1-6.6 6.8-2.9 16.2 1.9 13.3-4.9-1-2.3-2.6-4.2-4.6-5.6 4 .9 7.5 3.7 9.2 7.7 2.9 6.8-6.5 1.9-13.3 4.9-6.8 2.9-8.4 12.6-11.3 5.8-.1-.5-.2-.9-.4-1.3z" class="st19" />
            <path d="M332.6 119.4c1.4-2.7 3.1-5.1 5.1-7.4 1.9-2.3 4-4.5 6.4-6.4 1-.8 2.1-1.6 3.3-2.3-2.1-2.7-4.5-5.4-7.2-8.1-12.2-11.8-25.9-17.6-30.5-12.8s1.6 18.2 13.8 30.1c2.9 2.8 6 5.3 8.9 7.4 0-.2.1-.3.2-.5z" class="st20" />
            <path d="M343.1 106.4c-2.3 1.9-4.3 4.1-6.1 6.4-1.8 2.2-3.4 4.6-4.7 7.1 4.9 3.4 9.6 5.7 13.4 6.6.1-.3.2-.5.3-.8.8-1.8 2-3.3 3.3-4.7 1.4-1.4 3-2.6 4.8-3.6.2-.1.4-.2.7-.3-1.1-4-3.7-8.9-7.5-13.9-1.4 1-2.9 2-4.2 3.2z" class="st21" />
            <path d="M343.1 106.4c-1.5 1.2-2.8 2.6-4.1 4.1 1.7 1.3 3.3 2.7 4.9 4.1l3 2.7c.8.7 1.6 1.5 2.3 2.2.3.3.7.6 1 .9 1.2-1.1 2.5-2 4-2.8.2-.1.4-.2.7-.3-1.1-4-3.7-8.9-7.5-13.9-1.5.8-3 1.8-4.3 3z" class="st19" />
            <path d="M309.2 100.5c2.3 4.4 5.8 9 10.1 13.2 6.5 6.3 13.8 10.5 20.1 12.1 1.6-6.8 8-13 14.8-15.2-1.8-6.3-6.3-13.4-12.8-19.8-4.5-4.3-9.3-7.7-14-9.9-8.5 3.5-15.5 10.8-18.2 19.6z" class="st11" />
            <path d="M327.4 81c-4.1 1.7-7.9 4.2-11 7.5l28.7 27.8c2.6-2.6 5.8-4.6 9.1-5.6-1.8-6.3-6.3-13.4-12.8-19.8-4.6-4.4-9.4-7.8-14-9.9z" class="st22" />
            <path d="M322.5 82.1c-1.5 1.1-3.1 2.2-4.5 3.4-3.2 2.8-6.1 6.1-8.1 9.8-.5.9-.9 1.8-1.3 2.7v.1l.9 1.8c.1-.3.2-.5.3-.8.4-.9.8-1.9 1.3-2.7 2.1-3.7 4.9-7 8.1-9.8 1.4-1.2 2.9-2.3 4.5-3.4 1-.7 2.1-1.4 3.1-2.1h.1c-.6-.3-1.1-.5-1.7-.8-1 .6-1.9 1.2-2.7 1.8z" class="st21" />
            <linearGradient id="SVGID_77_" x1="1001.2266" x2="1025.1815" y1="-89.3339" y2="-89.3339" gradientTransform="scale(-1 1) rotate(-68.821 476.1216116 968.3887788)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#ff9b82" />
              <stop offset=".9954" stop-color="#f30876" />
            </linearGradient>
            <path fill="url(#SVGID_77_)" d="M304.3 77.2c-.3 0 .2 5.4.3 5.8.5 6.3 1.6 12.4 4.7 18 .1-.3.2-.5.3-.8.4-1 .9-1.9 1.4-2.9 2.2-3.9 5.2-7.4 8.6-10.3 1.5-1.3 3.1-2.5 4.7-3.6 1.1-.8 2.2-1.5 3.3-2.2h.1c-3.6-1.8-7.6-3.2-11.7-3.5-3.6-.3-7.2-.5-10.8-.5h-.9z" />
            <path d="M339.4 125.8c1.2.3 2.4.5 3.5.6.2-.3.3-.6.5-.9 1.3-2.2 2.8-4.2 4.6-6 1.8-1.9 3.9-3.5 6.1-4.9.3-.2.5-.3.8-.5-.1-1.1-.4-2.3-.7-3.4-6.8 2-13.2 8.3-14.8 15.1z" class="st24" />
            <path d="M354.4 111.5c-.1-.3-.2-.6-.2-.9-6.8 2.1-13.1 8.4-14.8 15.2.3.1.6.1.9.2 1.8-6.4 7.7-12.3 14.1-14.5z" class="st19" />
            <linearGradient id="SVGID_78_" x1="964.3755" x2="984.2253" y1="-104.701" y2="-104.701" gradientTransform="scale(-1 1) rotate(-68.821 476.1216116 968.3887788)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#ff9b82" />
              <stop offset=".9954" stop-color="#f30876" />
            </linearGradient>
            <path fill="url(#SVGID_78_)" d="M345.9 114.8c4.3 4.2 7.2 8.2 6.5 9-.8.8-4.9-2-9.2-6.2-4.3-4.2-7.2-8.2-6.5-9s4.8 2 9.2 6.2z" />
            <path d="M351.2 121.3c-.8.8-4.9-2-9.2-6.2-2.4-2.3-4.4-4.6-5.5-6.3-.1 1.2 2.6 4.9 6.6 8.7 4.3 4.2 8.4 6.9 9.2 6.2.3-.3 0-1.3-1-2.7 0 .2 0 .3-.1.3z" class="st19" />
            <circle cx="327.3" cy="99.4" r="9.8" class="st21" />
            <circle cx="327.3" cy="99.4" r="8.3" class="st11" />
            <linearGradient id="SVGID_79_" x1="1403.0002" x2="1419.6377" y1="234.0698" y2="234.0698" gradientTransform="scale(1 -1) rotate(6.24 3928.07536965 -9876.47955227)" gradientUnits="userSpaceOnUse">
              <stop offset=".5082" stop-color="#2e118c" />
              <stop offset=".9937" stop-color="#8c2267" />
            </linearGradient>
            <circle cx="327.3" cy="99.4" r="8.3" fill="url(#SVGID_79_)" />
          </g>
        </svg>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" id="comet" x="0" y="0" version="1.1" viewBox="0 0 64 49.3" xml:space="preserve">
      <linearGradient id="SVGID_1_" x1="8.0402" x2="55.9598" y1="21.6064" y2="21.6064" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#fff200" stop-opacity=".2" />
        <stop offset=".9946" stop-color="#f39c1b" />
      </linearGradient>
      <path fill="url(#SVGID_1_)" d="M10.1 29.4L49 1 20 39.4c-2.4 3.1-6.8 3.7-9.9 1.4C7 38.4 6.4 34 8.7 30.9c.4-.6.9-1.1 1.4-1.5z" />
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" id="comet" x="0" y="0" version="1.1" viewBox="0 0 64 49.3" xml:space="preserve">
      <linearGradient id="SVGID_1_" x1="8.0402" x2="55.9598" y1="21.6064" y2="21.6064" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#fff200" stop-opacity=".2" />
        <stop offset=".9946" stop-color="#f39c1b" />
      </linearGradient>
      <path fill="url(#SVGID_1_)" d="M10.1 29.4L49 1 20 39.4c-2.4 3.1-6.8 3.7-9.9 1.4C7 38.4 6.4 34 8.7 30.9c.4-.6.9-1.1 1.4-1.5z" />
    </svg>
  </aside>
  <main>
    <div class="form-container">
      <h2 class="primary">SignUp</h2>
      
      <form action="" method="post">
        <section>
          <input type="text" name="name" id="name" autocomplete="off" required />
          <label for="name">Name</label>
          <div class="form-icon">
            <svg viewBox="0 0 20 20">
              <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
            </svg>
          </div>
        </section>
        <section>
          <input type="text" name="username" id="username" autocomplete="off" required />
          <label for="username">Username</label>
          <div class="form-icon">
            <svg viewBox="0 0 20 20">
              <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
            </svg>
          </div>
        </section>
        <section>
          <input type="text" name="email" id="email" autocomplete="off" required />
          <label for="email">Email</label>
          <div class="form-icon">
            <svg viewBox="0 0 20 20">
              <path d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z"></path>
            </svg>
          </div>
        </section>
         <section>
          <input type="text" name="inputID" id="inputID" autocomplete="off" minlength="10" required />
          <label for="inputID">User Id</label>
          <div class="form-icon">
          <svg viewBox="0 0 432.117 432.117" style="enable-background:new 0 0 432.117 432.117;" xml:space="preserve">

                <path d="M178.874,209.972c23.96,0,47.357-14.538,65.881-40.936c16.348-23.296,26.107-52.099,26.107-77.048     C270.863,41.266,229.597,0,178.874,0c-50.722,0-91.987,41.266-91.987,91.988c0,24.949,9.76,53.752,26.106,77.048     C131.517,195.434,154.915,209.972,178.874,209.972z M178.874,15c42.451,0,76.988,34.537,76.988,76.988     c0,21.654-8.961,47.876-23.386,68.432c-15.408,21.958-34.946,34.552-53.603,34.552s-38.194-12.594-53.603-34.552     c-14.424-20.556-23.385-46.778-23.385-68.432C101.887,49.537,136.423,15,178.874,15z"/>
                <path d="M255.591,383.458c-0.085-0.201-0.057-0.131-0.017-0.033c-1.253-2.921-4.269-4.819-7.463-4.574     c-3.135,0.241-5.827,2.448-6.672,5.476c-0.803,2.879,0.239,6.039,2.582,7.889c2.605,2.058,6.361,2.119,9.047,0.179     c2.789-2.013,3.781-5.733,2.533-8.903C255.642,383.589,255.671,383.659,255.591,383.458z"/>
                <path d="M405.988,290.316h-6.728V256.2c0-16.493-6.422-31.998-18.081-43.657c-11.659-11.665-27.166-18.089-43.664-18.089     c-20.544,0-38.765,10.094-49.996,25.574c-11.88-10.975-25.256-20.044-39.839-26.982c-2.863-1.362-6.272-0.776-8.519,1.462     c-18.069,18.023-38.919,27.55-60.293,27.55c-21.377,0-42.222-9.526-60.282-27.549c-2.246-2.241-5.656-2.827-8.522-1.462     c-26.962,12.837-49.78,32.917-65.987,58.067c-16.648,25.835-25.448,55.81-25.448,86.684v0.13c0,2.116,0.894,4.133,2.461,5.555     c43.269,39.249,99.303,60.865,157.779,60.865c17.113,0,34.188-1.85,50.752-5.498c4.045-0.891,6.603-4.892,5.711-8.938     c-0.891-4.045-4.894-6.603-8.938-5.711c-15.505,3.415-31.495,5.146-47.525,5.146c-53.627,0-105.055-19.414-145.206-54.745     c0.583-26.856,8.514-52.848,23.022-75.363c13.765-21.359,32.784-38.684,55.223-50.356c20.046,18.456,43.095,28.175,66.961,28.175     c23.862,0,46.916-9.722,66.971-28.177c12.54,6.52,24.022,14.836,34.22,24.75c-2.758,6.996-4.29,14.604-4.29,22.568v34.116h-6.728     c-4.143,0-7.5,3.358-7.5,7.5v126.802c0,4.142,3.357,7.5,7.5,7.5h136.946c4.143,0,7.5-3.358,7.5-7.5V297.816     C413.488,293.674,410.13,290.316,405.988,290.316z M290.769,256.2c0-25.776,20.97-46.746,46.746-46.746     c12.49,0,24.229,4.863,33.057,13.694c8.827,8.827,13.688,20.565,13.688,33.052v34.116h-93.491V256.2z M276.541,417.118V305.316     h121.946v111.802H276.541z"/>
          </svg>
         </div>
        </section>
        <section>
          <input type="password" name="password" id="password" autocomplete="off" required />
          <label for="password">Password</label>
          <div class="form-icon">
            <svg viewBox="0 0 20 20">
              <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
            </svg>
          </div>
        </section>
        <section>
        <div class="formicon">
        <span class=""></span>
        <select name="securityquestions" id="sources" class="custom-select sources" placeholder=" Pick a Question" >
          <option value="" hidden ></option>
          <option value="What is your favorite food?">What is your favorite food?</option>
          <option value="What is the name of your first pet?">What is the name of your first pet?</option>
          <option value="What elementary school did you attend?">What elementary school did you attend?</option>
          <option value="What is the name of the town where you were born?">What is the name of the town where you were born?</option>
        </select>
        </div>

        </section>
        <section>
          <input type="text" name="securityanswer" id="password" autocomplete="off" required />
          <label for="password">Security Answer</label>
          <div class="form-icon">
            <svg viewBox="0 0 20 20">
              <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
            </svg>
          </div>
        </section>
         <section>
          <input type="hidden" name="roleid" value="3">
        </section>
        <button name="register" class="register">Sign Up</button>
      </form>
    </div>
  </main>
</section>
</div>

</body>
</html>


<?php
  include 'inc/footer.php';
?>
