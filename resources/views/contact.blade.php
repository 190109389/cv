@extends('layouts.app')
@section('content')
<style>#contact{
    padding:100px 0px;
    background:url(https://images.pexels.com/photos/4831/hands-coffee-smartphone-technology.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500) fixed 100% no-repeat;
    background-size:cover;
  }
  .contact{
    max-width:660px;
    width:100%;
    margin:auto;
    text-align:center;
  }
  .contact h2{
    padding-bottom:50px;
    font-size:25px;
    font-weight:100;
    text-transform:uppercase;
    color:#FFF;
  }
  .input h3{
    margin-top:15px;
    margin-bottom:10px;
    color:#fff;
    font-size:17px;
    font-weight:100;
    text-align:left;
  }
  .input textarea{
    margin-bottom:15px;
  }
  input[type="email"], input[type="text"],  textarea{
    height:25px;
    width:100%;
    padding:2.5px 8px;
    background-color:rgba(0,0,0,0.4);
    border:none;
    border-bottom:1px solid #E3E3E3;
    box-shadow:none;
    box-sizing:border-box;
    border-radius:0;
    outline:none;
    color:#fff;
  }
  textarea{
    min-height:150px;
    max-height:150px;
    max-width:100%;
    max-width:100%;
  }
  input[type="submit"]{
    font-size:17px;
    width:100%;
    display:inline-block;
    height:25px;
    padding:0 30px;
    text-align:center;
    font-weight:100;
    line-height:20px;
    text-transform:uppercase;
    text-decoration:none;
    white-space:nowrap;
    border-radius:0px;
    border:0;
    cursor:pointer;
    box-sizing:border-box;
    color:white;
    background-color:rgba(0,0,0,0.5);
    transition:0.4s;
  }
  input[type="submit"]:hover{
    background-color:#FFF;
    color:#000;
    text-decoration:none;
    transition:0.4s;
  }</style>
<form action="/contact/submit" method="POST">
    @csrf
<div id="contact">
    <div class="contact">
      <h2>CONTACT</h2>
      <form name="formulaire" method="POST" action="">
        <div class="input">
          <h3>*Name</h3>
          <input type="text" name="nom" />
        </div>
        <div class="input">
          <h3>*Email</h3>
          <input type="email" name="email" />
        </div>
        <div class="input">
          <h3>*Message</h3>
          <textarea name="message"></textarea>
        </div>
        <div class="input">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
</form>
@endsection