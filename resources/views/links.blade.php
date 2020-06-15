@extends('master')

@section('title', __('main.contacts'))

@section('content')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <div id="social-platforms">
    <h1>@lang('about.contacts')</h1>
    <a class="btn btn-icon btn-facebook" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
    <a class="btn btn-icon btn-twitter" href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
    <a class="btn btn-icon btn-googleplus" href="#"><i class="fa fa-google-plus"></i><span>Google</span></a>
  </div>
  
  <style>
  
    @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300);

    html {font-family: 'Roboto', sans-serif;font-size:16px;line-height:1em;height:100%;}
    body {
      background: #ffffff;
      background: -moz-linear-gradient(-45deg, #ffffff 0%, #ffffff 50%, #F2F2F2 50%, #F2F2F2 50%, #F2F2F2 100%);
      background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#ffffff), color-stop(50%,#ffffff), color-stop(50%,#F2F2F2), color-stop(50%,#F2F2F2), color-stop(100%,#F2F2F2));
      background: -webkit-linear-gradient(-45deg, #ffffff 0%,#ffffff 50%,#F2F2F2 50%,#F2F2F2 50%,#F2F2F2 100%);
      background: -o-linear-gradient(-45deg, #ffffff 0%,#ffffff 50%,#F2F2F2 50%,#F2F2F2 50%,#F2F2F2 100%);
      background: -ms-linear-gradient(-45deg, #ffffff 0%,#ffffff 50%,#F2F2F2 50%,#F2F2F2 50%,#F2F2F2 100%);
      background: linear-gradient(135deg, #ffffff 0%,#ffffff 50%,#F2F2F2 50%,#F2F2F2 50%,#F2F2F2 100%);
    }

    h1 {font-size:1.5em;margin-bottom:55px;}

    #social-platforms {
      position:relative;
      top:100px;
      top:25vh;
      font-size:1rem;
      text-align:center;
      height:250px;
      overflow:hidden;
    }

    /*Pen code from this point on*/
    .btn {
      clear:both;
      white-space:nowrap;
      font-size:.8em;
      display:inline-block;
      border-radius:5px;
      box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.35);
      margin:2px;
      -webkit-transition:all .5s;
      -moz-transition:all .5s;
      transition:all .5s;
      overflow:hidden
    }

    .btn:hover {
      box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.45);
    }

    .btn:focus {
      box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.4);
    }

    .btn > span,.btn-icon > i {
      float:left;
      padding:13px;
      -webkit-transition:all .5s;
      -moz-transition:all .5s;
      transition:all .5s;
      line-height:1em
    }

    .btn > span {
      padding:14px 18px 16px;
      white-space:nowrap;
      color:#FFF;
      background:#b8b8b8
    }

    .btn:focus > span {
      background:#9a9a9a
    }

    .btn-icon > i {
      border-radius:5px 0 0 5px;
      position:relative;
      width:13px;
      text-align:center;
      font-size:1.25em;
      color:#fff;
      background:#212121
    }

    .btn-icon > i:after {
      content:"";
      border:8px solid;
      border-color:transparent transparent transparent #222;
      position:absolute;
      top:13px;
      right:-15px
    }

    .btn-icon:hover > i,.btn-icon:focus > i {
      color:#FFF
    }

    .btn-icon > span {
      border-radius:0 5px 5px 0
    }

    /*Facebook*/
    .btn-facebook:hover > i,.btn-facebook:focus > i {
      color:#3b5998
    }

    .btn-facebook > span {
      background:#3b5998
    }

    /*Twitter*/
    .btn-twitter:hover > i,.btn-twitter:focus > i {
      color:#55acee
    }

    .btn-twitter > span {
      background:#55acee
    }

    /*Google*/
    .btn-googleplus:hover > i,.btn-googleplus:focus > i {
      color:#dd4b39
    }

    .btn-googleplus > span {
      background:#dd4b39
    }

    /*Pinterest*/
    .btn-pinterest:hover > i,.btn-pinterest:focus > i {
      color:#cb2028
    }

    .btn-pinterest > span {
      background:#cb2028
    }

    /*LinkedIn*/
    .btn-linkedin:hover > i,.btn-linkedin:focus > i {
      color:#007bb6
    }

    .btn-linkedin > span {
      background:#007bb6
    }
  </style>
@endsection