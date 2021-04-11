@extends('layouts.app')
@section('content')
<style>/*HOME*/
    #home{
      width:100%;
      background:url(https://wonderfulengineering.com/wp-content/uploads/2014/10/wood-wallpaper-25.jpg) fixed 100% no-repeat;
      background-size:cover;
      padding:159.5px 0px 100px 0px;
      text-align:center;
    }
    .home{
      width:100%;
    }
    .home h1{
      font-weight:100;
      font-size:50px;
      color:white;
      background-color: black;
      padding:0px 0px 5px 0px;
    }
    .home h2{
      font-weight:100;
      font-size:30px;
      color:black;
      background-color: white;
      text-transform:uppercase;
    }
    /*ABOUT*/
    #about{
      padding:100px 0px;
    }
    .about{
      max-width:960px;
      width:100%;
      margin:auto;
    }
    .profil-photo{
      width:50%;
      float:left;
    }
    .profil-photo img{
      width:90%;
    }
    .profil-text{
      width:50%;
      float:left;
      position:relative;
    }
    .profil-text h2{
      padding-bottom:15px;
      font-size:25px;
      font-weight:100;
      text-transform:uppercase;
    }
    .profil-text p{
    padding-bottom:75px;
    text-align:justify;
    }
    .profil-text a{
      position:absolute;
      bottom:0px;
      left:0px;
      text-decoration:none;
      color:black;
      background-color:#DDD;
      transition:0.4s;
      padding:5px 25px;
      border:1px solid white;
    }
    .profil-text a:hover{
      text-decoration:none;
      color:#999;
      border:1px solid #999;
      background-color:#FFF;
      transition:0.4s;
    }</style>
<div id="home">
    <div class="home">
      <h1>{{ __("Aruzhan Kabulova") }}</h1>
      <h2>{{ __("Web developer") }}</h2>
    </div>
  </div>
  <div id="about">
    <div class="about">
      <div class="profil-photo">
        <img src="https://sun9-40.userapi.com/impg/OiLVOIwc8ZWgUkB5ZZpamB5yM_33z2bHuSXGpg/cs227ULaujM.jpg?size=2048x2048&quality=96&sign=4a60b99da0016d1b58aabd474ba3e10c&type=album" />
      </div>
      <div class="profil-text">
        <h2>{{ __("About") }}</h2>
        <p>
         {{ __("Cell: 8(705)2859817") }} <br><br>
190103389@stu.sdu.edu.kz <br><br>
{{ __("Convey information persuasively both orally and in writing. Facility for building positive relationships with others with humor, helpfulness, and cultural sensitivity.") }}
<br>
<br>
{{ __("Interests: Mobilography, Graphic Design, Photoshop.") }}
<br>
<br>
{{ __("Languages: Native in Kazakh, Proficient in Russian, Above-average in English, Beginner in Turkish") }}
        </p>
        <a href="https://drive.google.com/file/d/1pEmipR2Jzybs1Y3ARRcaFNiR8pzRam0-/view?usp=sharing">{{ __("Download CV") }}</a>
      </div>
      <div class="clear">
      </div>
    </div>
  </div>
    
@endsection
