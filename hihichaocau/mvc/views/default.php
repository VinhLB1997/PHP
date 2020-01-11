<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VinhLB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./public/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="./public/css/style.css" />
    <meta property="fb:app_id" content="1196311627241788" />
    <meta property="fb:admins" content="100005689621982"/>
</head>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=1196311627241788"></script>
<body>
    <script type="text/javascript">
        if (screen.width < 1200 || !(navigator.userAgent.indexOf('Chrome') >= 0)) {
            window.onload = function () {
                document.body.innerHTML = "Chỉ hỗ trợ nền tảng thiết bị là máy tính và trình duyệt Google Chrome";
                document.body.style.background = "none";
            }
        }
    </script>
    <!-- <img style="position:fixed;z-index:9999;top:0;left:0;wight:300px; height: 400px;"
        src="https://1.bp.blogspot.com/-hIJ6xYT7eYg/WGtqaZpELPI/AAAAAAAAAg8/Ef1sIA0AbqoNU0ey0WvRo2cH69AkdpSpgCLcB/s1600/caudoi4.png"
        _cke_saved_src="https://1.bp.blogspot.com/-hIJ6xYT7eYg/WGtqaZpELPI/AAAAAAAAAg8/Ef1sIA0AbqoNU0ey0WvRo2cH69AkdpSpgCLcB/s1600/caudoi4.png" />
    <img style="position:fixed;z-index:9999;top:0;right:0;wight:300px; height: 400px;"
        src="https://1.bp.blogspot.com/-0I4Z9Gxt8gk/WGtqarV3nfI/AAAAAAAAAhA/J8kCaSv7SygkODYHDKhD_CDo2ZhGwvAFQCLcB/s1600/caudoi3.png" /></a> -->
    <img style="position:fixed;z-index:9999;top:0;left:0;"
        src="http://4.bp.blogspot.com/-Vlt_TV7Q9V8/UsA7lwMZryI/AAAAAAAAA3Q/ref7HQc1968/s1600/banner_left.png" />
    <img style="position:fixed;z-index:9999;top:0;right:0;"
        src="http://4.bp.blogspot.com/-A85wPjYE2BM/UsA7mDDQWmI/AAAAAAAAA3U/R9bxy6zSrLs/s1600/banner_right.png" />
    <!-- <div
        style="position:fixed;bottom:-50px;left:0;width:100%;height:100%;background:url(https://3.bp.blogspot.com/-uQrQaR3IkxE/WF9dDUUVLLI/AAAAAAAAAdw/VKNA5q7FJSQX5OWofOiPafEEENaoBcY9wCLcB/s1600/nentet.png) repeat-x bottom left;">
    </div> -->
    <div class="ui toggle checkbox" style="position:fixed;z-index:99999;bottom:10px;right:5px">
        <input type="checkbox" name="firework" id="firework">
        <label style="color:red; font-weight: bold;">Pháo hoa</label>
    </div>
    <img style="position:fixed;z-index:9999;bottom:5px;left:0px"
        src="http://3.bp.blogspot.com/-4Zt-ZB4tols/UsA_qIR0w9I/AAAAAAAAA3w/Ffyy-5OqGec/s320/banner_header.png" />
    <div class="wrapper-page">
        <div class="container-header">
            <div class="gird-item navigation-left">
                <div id="clockdiv">
                    <div>
                        <span class="days"></span>
                        <div class="smalltext">Days</div>
                    </div>
                    <div>
                        <span class="hours"></span>
                        <div class="smalltext">Hours</div>
                    </div>
                    <div>
                        <span class="minutes"></span>
                        <div class="smalltext">Minutes</div>
                    </div>
                    <div>
                        <span class="seconds"></span>
                        <div class="smalltext">Seconds</div>
                    </div>
                </div>

            </div>
            <img class="gird-item logo" src="./public/img/hihichaocaulogo.png" alt="Logo website" />
            <div class="gird-item navigation-right">
                <img class="gird-item logo" src="./public/img/bg_year.png" alt="Logo website" />
            </div>
        </div>
        <div class="container-content">
            <div class="slogan-page">
                <h1 class="text-center">
                    <marquee width="100%" behavior="alternate" direction="right">Đời sẽ dịu dàng hơn biết mấy khi con người
                        biết đặt mình vào vị trí của nhau</marquee>
                </h1>
            </div>
            <div class="wrapper-content">
                <div class="wrapper-header">
                    <div class="ui breadcrumb">
                        <a class="section">Listen</a>
                        <div class="ui fitted slider checkbox">
                            <input type="checkbox" name="mode" id="mode">
                            <label>&nbsp;</label>
                        </div>
                        <a class="section">Share</a>
                        <i class="question circle outline icon divider fs-1 link" title="Add users to your feed"></i>
                    </div>
                </div>
                <div id="wrapper-content-mode1">
                    <div class="wrapper-content-mode1">
                        <div class="content">
                            <table class="ui red table selectable table-list-song">
                                <thead>
                                    <tr>
                                        <th>Danh sach bai hat</th>
                                        <th colspan="2">
                                            <div class="ui search">
                                                <div class="ui icon input">
                                                    <input class="prompt" id="search-song" type="text" placeholder="Tên bài hát...">
                                                    <i class="search icon"></i>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                    <?php require_once './mvc/views/pages/listSong.php';?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="wrapper-content-mode2 d-none">
                    <!-- <div class="wrapper-header-mode2">
                        <div class="ui pointing secondary menu">
                            <a class="item active" data-tab="first">Danh sach bai hat duoc tang</a>
                            <a class="item" data-tab="second">Phong chat</a>
                        </div>
                    </div> -->
                    <div class="content">
                        <div class="content-left">
                            <table class="ui orange table selectable table-list-song-gift">
                                <thead>
                                    <tr>
                                        <th colspan="3">
                                            Danh sach bai hat</th>
                                    </tr>
                                </thead>
                                <?php require_once './mvc/views/pages/listSongGift.php';?>
                            </table>
                        </div>
                        <div class="content-right">
                            <div class="ui comments">
                            <!-- <h3 class="ui dividing header">Comments</h3> -->
                            <div class="fb-comments" data-href="http://hihichaocau.tk/" data-numposts="5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui tiny modal" id="modal-gift">
                <div class="header"><i class="gift icon text-red"></i>Gửi tặng bài hát</div>
                <div class="content">
                    <div class="ui green message d-none" id="show-name-song"></div>
                    <form id="form-gift">
                    <input type="hidden" name="song_key">
                    <div class="ui form">
                        <div class="two fields">
                            <div class="field">
                                <label>Tên mày</label>
                                <input type="text" name="your_name" placeholder="Tên gì...">
                            </div>
                            <div class="field">
                                <label>Tên bạn mày</label>
                                <input type="text" name="friend_name" placeholder="Tên gì...">
                            </div>
                        </div>
                        <div class="field">
                            <label>Tâm sự của mày</label>
                            <textarea rows="2" name="message" placeholder="Lời nhắn < 269 ký tự"></textarea>
                        </div>
                    </div>
                </div>
                <div class="actions">
                    <div class="ui buttons">
                        <button type="button" class="ui button active cancel"><i class="power off icon"></i>Thôi bỏ</button>
                        <div class="or"></div>
                        <button type="submit" class="ui button submit"><i class="paper plane outline icon"></i>Gửi</button>
                    </div>
                </div>
            </form>
        </div>
        <iframe width="1" height="1" frameborder="0" allowfullscreen allow="autoplay" id="control-music"></iframe>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script src="./public/js/app.js"></script>
    <script src="./public/js/hoamai.js"></script>
    <script src="./public/js/jquery.fireworks.js"></script>
    <script src="./public/js/countdown.js"></script>
</body>

</html>
