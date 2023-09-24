<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
                <div class="card">
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                    </a>
                                    <div class="chat-about">
                                        {{-- @can('role', 'user') --}}
                                        <h6 class="m-b-0 align-items-center">
                                            {{-- <input type="hidden" class="form-control" id="nama"
                                                value="{{ $user->nama }}"> --}}
                                            BuyOnline
                                        </h6>
                                        {{-- @endcan --}}
                                        {{-- @can('role', 'admin')
                                            <h6 class="m-b-0 align-items-center"><input type="hidden" class="form-control"
                                                    id="nama" value="{{ $user->nama }}">Customer</h6>
                                        @endcan --}}
                                        {{-- <small>Last seen: 2 hours ago</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-history">
                            <ul class="m-b-0" id="data-message">

                            </ul>
                        </div>
                        <div class="chat-message clearfix">
                            <div class="input-group mb-0">
                                <input type="text" class="form-control justify-content-between"
                                    placeholder="Enter text here..." id="message">
                                <div class="input-group-prepend">
                                    <button id="btn-send" class="btn btn-dark">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="data" data-user-id="{{ auth()->user()->id }}"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            const userId = $('#data').data('userId');
            let chatId = 0;

            function getChat() {
                $.get("/ajax/chats",
                    function(data, textStatus, jqXHR) {
                        chatId = data.id;
                        setChat(data)
                    },
                    "json"
                );
            }

            function setChat(chats) {
                // console.log(chats);
                $('.chat-history > #data-message').html('');
                $.each(chats, function(i, chat) {
                    var rowMessage;
                    if (chat.admin_id == userId) {
                        rowMessage = `
                        <li class="clearfix">
                            <div class="message-data text-right justify-content-between">
                                <span class="message-data-time">${getDate(chat.created_at)} | ${chat.user?.nama}</span>
                            </div>
                            <div class="message other-message float-right">${chat.message}</div>
                        </li>
                        `;
                    } else {
                        rowMessage = `
                        <li class="clearfix">
                            <div class="message-data justify-content-between">
                                <span class="message-data-time">${getDate(chat.created_at)} | ${chat.user?.nama}</span>
                            </div>
                            <div class="message other-message">${chat.message}</div>
                        </li>
                        `;
                    }
                    $('.chat-history > #data-message').append(rowMessage);
                });
            }

            function sendMessage() {
                let message = $('#message');

                if (message.val() === '') {
                    message.addClass('is-invalid');
                    return false;
                }

                message.removeClass('is-invalid');

                let data = {
                    user_id: userId,
                    message: message.val()
                };

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.post(`/ajax/chats`, data,
                    function(data, textStatus, jqXHR) {
                        getChat();
                        $('#message').val('');
                    },
                    "json"
                );
            }

            $('#btn-send').click(function(e) {
                e.preventDefault();

                var rowMessage = `
                    <li class="clearfix">
                        <div class="message-data text-right justify-content-between">
                            <span class="message-data-time">${getDate(new Date())}</span>
                        </div>
                        <div class="message other-message float-right">${$('#message').val()}</div>
                    </li>
                `;
                $('.chat-history > #data-message').append(rowMessage);
                sendMessage();
            });

            function getDate(date) {
                return new Date(date).toLocaleDateString('id-ID', {
                    weekday:"long",
                    year:"numeric",
                    month:"short",
                    day:"numeric",
                    hour12: false,
                    hour: 'numeric',
                    minute: 'numeric',
                    second: 'numeric',
                })
            }

            $('#message').keypress(function(e) {
                if (e.which == 13) {
                    sendMessage();
                }
            });

            setInterval(() => {
                getChat();
            }, 10000);

            getChat();
        });
    </script>
</body>

</html>
