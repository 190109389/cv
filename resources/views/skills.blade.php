@extends('layouts.app')
@section('content')
<style>  #skills{
    padding:100px 0px;
    background-color:#EEE;
  }
  .skills{
    max-width:960px;
    width:100%;
    margin:auto;
  }
  .title h2{
    padding-bottom:25px;
    font-size:25px;
    font-weight:100;
    text-align:center;
    text-transform:uppercase;
  }
  .title p{
  padding-bottom:75px;
  text-align:justify;
  width:100%;
  margin:auto;
  }
  .bardiv{
    width:100%;
    margin:auto;
  }
  .bardiv h3{
    font-size:20px;
    padding-bottom:5px;
  }
  .progressbar{
    width:100%;
    margin:auto;
    height:5px;
    background-color:#AAA;
    position:relative;
    margin-bottom:15px;
  }
  .progressbar span{
    height:5px;
    background-color:#000;
    z-index:888;
    position:absolute;
    top:0px;
    left:0px;
  }
  .java{
    width:40%;
  }
  .html{
    width:90%;
  }
  .css{
    width:90%;
  }
  .javascript{
    width:60%;
  }
  .php{
    width:20%;
  }
  .sql{
    width:80%;
  }</style>
<div id="skills">
    <div class="skills">
      <div class="title">
        <h2>Skills</h2>
      </div>
      <div class="bardiv">
        <h3>JAVA</h3>
        <div class="progressbar">
          <span class="java"></span>
        </div>
        <h3>HTML</h3>
        <div class="progressbar">
          <span class="html"></span>
        </div>
        <h3>CSS</h3>
        <div class="progressbar">
          <span class="css"></span>
        </div>
        <h3>JavaScript</h3>
        <div class="progressbar">
          <span class="javascript"></span>
        </div>
        <h3>PHP</h3>
        <div class="progressbar">
          <span class="php"></span>
        </div>
        <h3>SQL</h3>
        <div class="progressbar">
          <span class="sql"></span>
        </div>
      </div>
    </div>
  </div>
@endsection