<!DOCTYPE html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="shortcut icon" href="{{asset('/assets/icon/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('/assets/icon/favicon.ico')}}" type="image/x-icon">

        <title>Lottery</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="{{asset('/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/header.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        
        @yield('style')
        

    <style>
      .row {
    margin-left: 0px;
    margin-right: 0px;
}

#wrapper {
    padding-left: 70px;
    transition: all .4s ease 0s;
    height: 100%
}

#sidebar-wrapper {
    margin-left: -150px;
    left: 0px;
    width: 210px;
    background: #222;
    position: fixed;
    height: 100%;
    z-index: 10000;
    transition: all .4s ease 0s;
}

.sidebar-nav {
    display: block;
    float: left;
    width: 150px;
    list-style: none;
    margin: 0;
    padding: 0;
}

#page-content-wrapper {
    padding-left: 0;
    margin-left: 0;
    width: 100%;
    height: auto;
}

#wrapper.active {
    padding-left: 150px;
}

#wrapper.active #sidebar-wrapper {
    left: 150px;
}

#page-content-wrapper {
    width: 100%;
}

#sidebar_menu li a,
.sidebar-nav li a {
    color: #ffff;
    display: block;
    float: left;
    text-decoration: none;
    width: 210px;
    background: #252525;
    border-top: 1px solid #373737;
    border-bottom: 1px solid #1A1A1A;
    -webkit-transition: background .5s;
    -moz-transition: background .5s;
    -o-transition: background .5s;
    -ms-transition: background .5s;
    transition: background .5s;
}

.sidebar_name {
    padding-top: 25px;
    color: #fff;
    opacity: .7;
}

.sidebar-nav li {
    line-height: 40px;
    text-indent: 20px;
}

.sidebar-nav li a {
    color: #999999;
    display: block;
    text-decoration: none;
}

.sidebar-nav li a:hover {
    color: #ffff;
    background: rgba(255, 255, 255, 0.2);
    text-decoration: none;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav>.sidebar-brand {
    height: 65px;
    line-height: 60px;
    font-size: 18px;
}

.sidebar-nav>.sidebar-brand a {
    color: #999999;
}

.sidebar-nav>.sidebar-brand a:hover {
    color: #fff;
    background: none;
}

#main_icon {
    float: right;
    padding-right: 65px;
    padding-top: 20px;
}

.sub_icon {
    float: right;
    padding-right: 65px;
    padding-top: 10px;
}

.content-header {
    height: 65px;
    line-height: 65px;
}

.content-header h1 {
    margin: 0;
    margin-left: 20px;
    line-height: 65px;
    display: inline-block;
}

@media (max-width:767px) {
    #wrapper {
        padding-left: 0px;
        transition: all .4s ease 0s;
    }

    #sidebar-wrapper {
        left: 0px;
    }

    #wrapper.active {
        padding-left: 150px;
    }

    #wrapper.active #sidebar-wrapper {
        left: 150px;
        width: 150px;
        transition: all .4s ease 0s;
    }
}

.red-color {
    background-color: #F44336;
    color: #fff;
    padding-bottom: 60px;
    text-align: center;
    padding-top: 10px;
}

.light-blue {
    background-color: #00BCD4;
    padding-bottom: 60px;
    text-align: center;
    padding-top: 10px;
}

.yelo-color {
    background-color: #ffc107;
    color: #fff;
    padding-bottom: 60px;
    text-align: center;
    padding-top: 10px;
}

.megenta-color {
    background-color: #009688;
    padding-bottom: 60px;
    text-align: center;
    padding-top: 10px;
}

.margin {
    margin-top: 100px;
}

/*///////////////Right Tooltip w/ Left Arrow////////////////*/
.tooltip-col {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
    cursor: pointer;
    text-align: center;
}

.tooltiptext {
    visibility: hidden;
    width: 170px;
    height: 50px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 2px 3px;
    box-sizing: border-box;
    position: absolute;
    z-index: 1;
    top: -13px;
    left: 110%;
}

.tooltiptext::after {
    content: "";
    position: absolute;
    top: 50%;
    right: 100%;
    margin-top: -10px;
    border-width: 10px;
    border-style: solid;
    border-color: transparent black transparent transparent;
}

.tooltip-col:hover .tooltiptext {
    visibility: visible;
}


     
    </style>
    </head>
        @include('layouts.header-main')
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <i class="fas fa-calendar-alt"> 16 มีนา 2020</i> <i class="fas fa-user-alt"> test </i>
    </nav>
    <div id="wrapper" class="active">

        <!-- Sidebar -->
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul id="sidebar_menu" class="sidebar-nav">
                <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fas fa-align-justify"></i></a></li>
            </ul>
            <ul class="sidebar-nav text-white" id="sidebar">
            <li><a href="{{ url('main_page') }}" class="tooltip-col text-left">หน้าหลัก &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <i class="fas fa-home"></i> <span class="tooltiptext text-left"> หน้าหลัก </span></a></li>
                <li><a href="{{ url('pay_page') }}" class="tooltip-col text-left">อัตราจ่าย &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <i class="fas fa-comment-dollar"></i>
                        <span class="tooltiptext text-left"> อัตราจ่าย </span></a></li>
                <li><a href="{{ url('listall_page') }}" class="tooltip-col text-left">รายการแทงทั้งหมด &nbsp;<i class="fas fa-gavel"></i>
                        <span class="tooltiptext text-left"> รายการแทงทั้งหมด </span></a></li>
                <li><a href="{{ url('ratepay_page') }}" class="tooltip-col text-left">กำหนดเรทการจ่าย &nbsp;<i class="fab fa-creative-commons-nc"></i>
                        <span class="tooltiptext text-left"> กำหนดเรทการจ่าย </span></a></li>
                <li><a href="{{ url('risk_page') }}" class="tooltip-col text-left">รายงานความเสี่ยง &nbsp; &nbsp; <i class="fas fa-exclamation"></i>
                        <span class="tooltiptext text-left"> รายงานความเสี่ยง </span></a></li>
                <li><a href="{{ url('turnover_page') }}" class="tooltip-col text-left">ผลประกอบการ &nbsp; &nbsp; &nbsp;&nbsp; <i class="fas fa-bell-slash"></i>
                        <span class="tooltiptext text-left"> ผลประกอบการ </span></a></li>
                <li><a class="tooltip-col text-left">เพิ่มผู้ใช้งาน &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <i class="fas fa-user-plus"></i>
                        <span class="tooltiptext text-left"> เพิ่มผู้ใช้งาน </span></a></li>
                <li><a class="tooltip-col text-left">ตั้งค่าระบบ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i class="fas fa-cogs"></i>
                        <span class="tooltiptext text-left"> ตั้งค่าระบบ </span></a></li>
                <li><a class="tooltip-col text-left">ออกจากระบบ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fas fa-sign-in-alt"></i>
                        <span class="tooltiptext text-left"> ออกจากระบบ </span></a></li>
            </ul>
        </div>
    </div>
    <body>
        @yield('content')

       
        @include('layouts.footer-main')
        <script src="{{asset('/assets/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>

        @yield('script')
    </body>

</html>
