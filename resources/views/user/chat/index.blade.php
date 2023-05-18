<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>chat app - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #f4f7f6;
            margin-top: 20px;
        }

        .card {
            background: #fff;
            transition: .5s;
            border: 0;
            margin-bottom: 30px;
            border-radius: .55rem;
            position: relative;
            width: 100%;
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
        }

        .chat-app .people-list {
            width: 280px;
            position: absolute;
            left: 0;
            top: 0;
            padding: 20px;
            z-index: 7
        }

        .chat-app .chat {
            margin-left: 280px;
            border-left: 1px solid #eaeaea
        }

        .people-list {
            -moz-transition: .5s;
            -o-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s
        }

        .people-list .chat-list li {
            padding: 10px 15px;
            list-style: none;
            border-radius: 3px
        }

        .people-list .chat-list li:hover {
            background: #efefef;
            cursor: pointer
        }

        .people-list .chat-list li.active {
            background: #efefef
        }

        .people-list .chat-list li .name {
            font-size: 15px
        }

        .people-list .chat-list img {
            width: 45px;
            border-radius: 50%
        }

        .people-list img {
            float: left;
            border-radius: 50%
        }

        .people-list .about {
            float: left;
            padding-left: 8px
        }

        .people-list .status {
            color: #999;
            font-size: 13px
        }

        .chat .chat-header {
            padding: 15px 20px;
            border-bottom: 2px solid #f4f7f6
        }

        .chat .chat-header img {
            float: left;
            border-radius: 40px;
            width: 40px
        }

        .chat .chat-header .chat-about {
            float: left;
            padding-left: 10px
        }

        .chat .chat-history {
            padding: 20px;
            border-bottom: 2px solid #fff
        }

        .chat .chat-history ul {
            padding: 0
        }

        .chat .chat-history ul li {
            list-style: none;
            margin-bottom: 30px
        }

        .chat .chat-history ul li:last-child {
            margin-bottom: 0px
        }

        .chat .chat-history .message-data {
            margin-bottom: 15px
        }

        .chat .chat-history .message-data img {
            border-radius: 40px;
            width: 40px
        }

        .chat .chat-history .message-data-time {
            color: #434651;
            padding-left: 6px
        }

        .chat .chat-history .message {
            color: #444;
            padding: 18px 20px;
            line-height: 26px;
            font-size: 16px;
            border-radius: 7px;
            display: inline-block;
            position: relative
        }

        .chat .chat-history .message:after {
            bottom: 100%;
            left: 7%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-bottom-color: #fff;
            border-width: 10px;
            margin-left: -10px
        }

        .chat .chat-history .my-message {
            background: #efefef
        }

        .chat .chat-history .my-message:after {
            bottom: 100%;
            left: 30px;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-bottom-color: #efefef;
            border-width: 10px;
            margin-left: -10px
        }

        .chat .chat-history .other-message {
            background: #e8f1f3;
            text-align: right
        }

        .chat .chat-history .other-message:after {
            border-bottom-color: #e8f1f3;
            left: 93%
        }

        .chat .chat-message {
            padding: 20px
        }

        .online,
        .offline,
        .me {
            margin-right: 2px;
            font-size: 8px;
            vertical-align: middle
        }

        .online {
            color: #86c541
        }

        .offline {
            color: #e47297
        }

        .me {
            color: #1d8ecd
        }

        .float-right {
            float: right
        }

        .clearfix:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0
        }

        @media only screen and (max-width: 767px) {
            .chat-app .people-list {
                height: 465px;
                width: 100%;
                overflow-x: auto;
                background: #fff;
                left: -400px;
                display: none
            }

            .chat-app .people-list.open {
                left: 0
            }

            .chat-app .chat {
                margin: 0
            }

            .chat-app .chat .chat-header {
                border-radius: 0.55rem 0.55rem 0 0
            }

            .chat-app .chat-history {
                height: 300px;
                overflow-x: auto
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 992px) {
            .chat-app .chat-list {
                height: 650px;
                overflow-x: auto
            }

            .chat-app .chat-history {
                height: 600px;
                overflow-x: auto
            }
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
            .chat-app .chat-list {
                height: 480px;
                overflow-x: auto
            }

            .chat-app .chat-history {
                height: calc(100vh - 350px);
                overflow-x: auto
            }
        }
    </style>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <div class="container">
        <div class="row clearfix justify-content-center">
            <div class="col-lg-8">
                {{-- @can('role', 'admin')
                    <div class="card chat-app">
                        <div id="plist" class="people-list">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                            <ul class="list-unstyled chat-list mt-2 mb-0">
                                <li class="clearfix">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                    <div class="about">
                                        <div class="name">Vincent Porter</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>
                                    </div>
                                </li>
                                <li class="clearfix active">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                    <div class="about">
                                        <div class="name">Aiden Chavez</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                    <div class="about">
                                        <div class="name">Mike Thomas</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                    <div class="about">
                                        <div class="name">Christian Kelly</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
                                    <div class="about">
                                        <div class="name">Monica Ward</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                    <div class="about">
                                        <div class="name">Dean Henry</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endcan --}}
                @can('role', 'user')
                    <div class="card">
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                        </a>
                                        <div class="chat-about">
                                            <h6 class="m-b-0 align-items-center"><input type="hidden" class="form-control"
                                                    id="nama" value="{{ $user->nama }}">Admin BuyOnline</h6>
                                            {{-- <small>Last seen: 2 hours ago</small> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6 hidden-sm text-right">
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i
                                            class="fa fa-camera"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-primary"><i
                                            class="fa fa-image"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-info"><i
                                            class="fa fa-cogs"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-warning"><i
                                            class="fa fa-question"></i></a>
                                </div> --}}
                                </div>
                            </div>
                            <div class="chat-history" id="data-message">
                                {{-- <ul class="m-b-0"> --}}
                                {{-- <li class="clearfix">
                                    <div class="message-data">
                                        <span class="message-data-time">10:12 AM, Today</span>
                                    </div>
                                    <div class="message my-message">Are we meeting today?</div>
                                </li>
                                <li class="clearfix">
                                    <div class="message-data">
                                        <span class="message-data-time">10:15 AM, Today</span>
                                    </div>
                                    <div class="message my-message">Project has been already finished and I have
                                        results to show you.</div>
                                </li> --}}
                                {{-- <li class="clearfix">
                                    <div class="message-data text-right justify-content-between">
                                        <span class="message-data-time">10:10 AM, Today</span>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                    </div>
                                    <div class="message other-message float-right"> Apakah barang yang toko ini sediakan bisa berfungsi dengan baik </div>
                                </li>
                                <li class="clearfix">
                                    <div class="message-data">
                                        <span class="message-data-time">10:11 AM, Today</span>
                                    </div>
                                    <div class="message my-message">Tentu, kami menjamin barang yang kami jual sangat berkualitas dan bisa bekerja dengan sangat baik</div>
                                </li>
                            </ul> --}}
                            </div>
                            <div class="chat-message clearfix">
                                <div class="input-group mb-0">
                                    <input type="text" class="form-control justify-content-between"
                                        placeholder="Enter text here..." id="message">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-dark">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan
            </div>
        </div>
    </div>

    @can('role', 'admin')
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->


        <html>

        <head>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
                rel="stylesheet">

        </head>

        <style>
            .container {
                max-width: 1170px;
                margin: auto;
            }

            img {
                max-width: 100%;
            }

            .inbox_people {
                background: #f8f8f8 none repeat scroll 0 0;
                float: left;
                overflow: hidden;
                width: 40%;
                border-right: 1px solid #c4c4c4;
            }

            .inbox_msg {
                border: 1px solid #c4c4c4;
                clear: both;
                overflow: hidden;
            }

            .top_spac {
                margin: 20px 0 0;
            }


            .recent_heading {
                float: left;
                width: 40%;
            }

            .srch_bar {
                display: inline-block;
                text-align: right;
                width: 60%;
            }

            .headind_srch {
                padding: 10px 29px 10px 20px;
                overflow: hidden;
                border-bottom: 1px solid #c4c4c4;
            }

            .recent_heading h4 {
                color: #05728f;
                font-size: 21px;
                margin: auto;
            }

            .srch_bar input {
                border: 1px solid #cdcdcd;
                border-width: 0 0 1px 0;
                width: 80%;
                padding: 2px 0 4px 6px;
                background: none;
            }

            .srch_bar .input-group-addon button {
                background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
                border: medium none;
                padding: 0;
                color: #707070;
                font-size: 18px;
            }

            .srch_bar .input-group-addon {
                margin: 0 0 0 -27px;
            }

            .chat_ib h5 {
                font-size: 15px;
                color: #464646;
                margin: 0 0 8px 0;
            }

            .chat_ib h5 span {
                font-size: 13px;
                float: right;
            }

            .chat_ib p {
                font-size: 14px;
                color: #989898;
                margin: auto
            }

            .chat_img {
                float: left;
                width: 11%;
            }

            .chat_ib {
                float: left;
                padding: 0 0 0 15px;
                width: 88%;
            }

            .chat_people {
                overflow: hidden;
                clear: both;
            }

            .chat_list {
                border-bottom: 1px solid #c4c4c4;
                margin: 0;
                padding: 18px 16px 10px;
            }

            .inbox_chat {
                height: 550px;
                overflow-y: scroll;
            }

            .active_chat {
                background: #ebebeb;
            }

            .incoming_msg_img {
                display: inline-block;
                width: 6%;
            }

            .received_msg {
                display: inline-block;
                padding: 0 0 0 10px;
                vertical-align: top;
                width: 92%;
            }

            .received_withd_msg p {
                background: #ebebeb none repeat scroll 0 0;
                border-radius: 3px;
                color: #646464;
                font-size: 14px;
                margin: 0;
                padding: 5px 10px 5px 12px;
                width: 100%;
            }

            .time_date {
                color: #747474;
                display: block;
                font-size: 12px;
                margin: 8px 0 0;
            }

            .received_withd_msg {
                width: 57%;
            }

            .mesgs {
                float: left;
                padding: 30px 15px 0 25px;
                width: 60%;
            }

            .sent_msg p {
                background: #05728f none repeat scroll 0 0;
                border-radius: 3px;
                font-size: 14px;
                margin: 0;
                color: #fff;
                padding: 5px 10px 5px 12px;
                width: 100%;
            }

            .outgoing_msg {
                overflow: hidden;
                margin: 26px 0 26px;
            }

            .sent_msg {
                float: right;
                width: 46%;
            }

            .input_msg_write input {
                background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
                border: medium none;
                color: #4c4c4c;
                font-size: 15px;
                min-height: 48px;
                width: 100%;
            }

            .type_msg {
                border-top: 1px solid #c4c4c4;
                position: relative;
            }

            .msg_send_btn {
                background: #05728f none repeat scroll 0 0;
                border: medium none;
                border-radius: 50%;
                color: #fff;
                cursor: pointer;
                font-size: 17px;
                height: 33px;
                position: absolute;
                right: 0;
                top: 11px;
                width: 33px;
            }

            .messaging {
                padding: 0 0 50px 0;
            }

            .msg_history {
                height: 516px;
                overflow-y: auto;
            }
        </style>

        <body>
            <div class="container">
                <h3 class=" text-center">Messaging</h3>
                <div class="messaging">
                    <div class="inbox_msg">
                        <div class="inbox_people">
                            <div class="headind_srch">
                                <div class="recent_heading">
                                    <h4>Recent</h4>
                                </div>
                                <div class="srch_bar">
                                    <div class="stylish-input-group">
                                        <input type="text" class="search-bar" placeholder="Search">
                                        <span class="input-group-addon">
                                            <button type="button"> <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="inbox_chat">
                                <div class="chat_list active_chat">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                            <p>Test, which is a new approach to have all solutions
                                                astrology under one roof.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                            <p>Test, which is a new approach to have all solutions
                                                astrology under one roof.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                            <p>Test, which is a new approach to have all solutions
                                                astrology under one roof.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                            <p>Test, which is a new approach to have all solutions
                                                astrology under one roof.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                            <p>Test, which is a new approach to have all solutions
                                                astrology under one roof.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                            <p>Test, which is a new approach to have all solutions
                                                astrology under one roof.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                                alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                            <p>Test, which is a new approach to have all solutions
                                                astrology under one roof.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mesgs">
                            <div class="msg_history">
                                <div class="incoming_msg">
                                    <div class="incoming_msg_img"> <img
                                            src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>Test which is a new approach to have all
                                                solutions</p>
                                            <span class="time_date"> 11:01 AM | June 9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="outgoing_msg">
                                    <div class="sent_msg">
                                        <p>Test which is a new approach to have all
                                            solutions</p>
                                        <span class="time_date"> 11:01 AM | June 9</span>
                                    </div>
                                </div>
                                <div class="incoming_msg">
                                    <div class="incoming_msg_img"> <img
                                            src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>Test, which is a new approach to have</p>
                                            <span class="time_date"> 11:01 AM | Yesterday</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="outgoing_msg">
                                    <div class="sent_msg">
                                        <p>Apollo University, Delhi, India Test</p>
                                        <span class="time_date"> 11:01 AM | Today</span>
                                    </div>
                                </div>
                                <div class="incoming_msg">
                                    <div class="incoming_msg_img"> <img
                                            src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>We work directly with our designers and suppliers,
                                                and sell direct to you, which means quality, exclusive
                                                products, at a price anyone can afford.</p>
                                            <span class="time_date"> 11:01 AM | Today</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="type_msg">
                                <div class="input_msg_write">
                                    <input type="text" class="write_msg" placeholder="Type a message" />
                                    <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o"
                                            aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <p class="text-center top_spac"> Design by <a target="_blank"
                            href="https://www.linkedin.com/in/sunil-rajput-nattho-singh/">Sunil Rajput</a></p>

                </div>
            </div>
        </body>

        </html>
    @endcan
    {{-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
    <script src="{{ url('/js/app.js') }}"></script>
    <script>
        $(function() {
            const Http = window.axios;
            const Echo = window.Echo;
            const name = $('#nama');
            const message = $('#message');

            $('input, textarea').keyup(function() {
                $(this).removeClass('is-invalid');
            });

            $('button').click(function() {
                if (name.val() == '') {
                    name.addClass('is-invalid');
                } else if (message.val() == '') {
                    message.addClass('is-invalid');
                } else {
                    Http.post("{{ url('message') }}", {
                        'nama': name.val(),
                        'message': message.val()
                    }).then(() => {
                        message.val('')
                    });
                }

            });

            let Channel = Echo.channel("message").listen("ChatEvent", (event) => {
                $('#data-message').append(`
                    <div class="alert alert-primary" role="alert">
                        <strong>${event.message.name}</strong> : ${event.message.message}
                    </div>
                `);
            });
        });
    </script>
</body>

</html>
