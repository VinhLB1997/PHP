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
</head>

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
    <div
        style="position:fixed;z-index:9999;bottom:-50px;left:0;width:100%;height:104px;background:url(https://3.bp.blogspot.com/-uQrQaR3IkxE/WF9dDUUVLLI/AAAAAAAAAdw/VKNA5q7FJSQX5OWofOiPafEEENaoBcY9wCLcB/s1600/nentet.png) repeat-x bottom left;">
    </div>
    <div class="ui toggle checkbox" style="position:fixed;z-index:99999;bottom:10px;right:35px">
        <input type="checkbox" name="firework" id="firework">
        <label>Fireworks</label>
    </div>
    <img style="position:fixed;z-index:9999;bottom:20px;left:20px"
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
                        <input type="checkbox" name="mode">
                        <label>&nbsp;</label>
                    </div>
                    <a class="section">Share</a>
                    <i class="question circle outline icon divider fs-1 link" title="Add users to your feed"></i>
                </div>
            </div>
            <div class="wrapper-content-mode1">
                <div class="content">
                    <table class="ui red table selectable table-list-song">
                        <thead>
                            <tr>
                                <th colspan="3">
                                    Danh sach bai hat</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data["dataSongs"] as $song) {?>
                            <tr>
                                <td><img class="ui middle aligned avatar image"
                                        src="<?=$song['image']?>"
                                        data-src="<?=$song['image']?>">
                                    <span><?=$song['name_song']?></span>
                                </td>
                                <td><?=$song['name_singer']?></td>
                                <td class="action-song" data-song-id="<?=$song['link']?>">
                                    <i class="circular play icon play-music text-blue link" title="Play Music"></i>
                                    <i class="circular gift icon text-red"
                                        title="You can sent song with message for your friend"></i>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
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
                        <table class="ui red table selectable table-list-song">
                            <thead>
                                <tr>
                                    <th colspan="3">
                                        Danh sach bai hat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img class="ui middle aligned avatar image"
                                            src="https://avatar-nct.nixcdn.com/song/2019/12/27/a/b/e/6/1577418314295.jpg"
                                            data-src="https://avatar-nct.nixcdn.com/song/2019/12/27/a/b/e/6/1577418314295.jpg">
                                        <span>Từ đó</span>
                                    </td>
                                    <td>Phan Mạnh Quỳnh</td>
                                    <td class="action-song" data-song-id="bh7nAEC6OE2A">
                                        <i class="circular play icon play-music text-blue link" title="Play Music"></i>
                                        <i class="circular gift icon text-red"
                                            title="You can sent song with message for your friend"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img class="ui middle aligned avatar image"
                                            src="https://avatar-nct.nixcdn.com/song/2019/09/16/b/0/f/f/1568593417642.jpg"
                                            data-src="https://avatar-nct.nixcdn.com/song/2019/09/16/b/0/f/f/1568593417642.jpg">
                                        <span>Cô Thắm Không Về</span>
                                    </td>
                                    <td>Phát Hồ, Jokes Bii, Thiện</td>
                                    <td class="action-song" data-song-id="mlnzEWoupew1">
                                        <i class="play icon play-music"></i>
                                        <i class="gift icon"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img class="ui middle aligned avatar image"
                                            src="https://avatar-nct.nixcdn.com/song/2019/09/16/b/0/f/f/1568593417642.jpg"
                                            data-src="https://avatar-nct.nixcdn.com/song/2019/09/16/b/0/f/f/1568593417642.jpg">
                                        <span>Từng yêu</span>
                                    </td>
                                    <td>Phan Duy Anh</td>
                                    <td class="action-song" data-song-id="tnvcYCYt7lmv"><i class="play icon play-music"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img class="ui middle aligned avatar image"
                                            src="https://avatar-nct.nixcdn.com/song/2019/09/16/b/0/f/f/1568593417642.jpg"
                                            data-src="https://avatar-nct.nixcdn.com/song/2019/09/16/b/0/f/f/1568593417642.jpg">
                                        <span>Khó Vẽ Nụ Cười</span>
                                    </td>
                                    <td>Đạt G, Du Uyên</td>
                                    <td class="action-song" data-song-id="jyzUEf5T3rMu"><i class="play icon play-music"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img class="ui middle aligned avatar image"
                                            src="https://avatar-nct.nixcdn.com/song/2019/09/16/b/0/f/f/1568593417642.jpg"
                                            data-src="https://avatar-nct.nixcdn.com/song/2019/09/16/b/0/f/f/1568593417642.jpg">
                                        <span>Bỗng Dưng Anh Thành Người Lạ</span>
                                    </td>
                                    <td>Chu Bin</td>
                                    <td class="action-song" data-song-id="Oi9CvbJXDheF"><i class="play icon play-music"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-right">
                        <div class="ui comments">
                        <h3 class="ui dividing header">Comments</h3>
                            <div class="comment">
                                <div class="content">
                                <a class="author">Matt</a>
                                <div class="metadata">
                                    <span class="date">Today at 5:42PM</span>
                                </div>
                                <div class="text">
                                    Định dạng cho tất cả liên kết khi chưa được click.	Định dạng cho tất cả liên kết khi chưa được click.	Định dạng cho tất cả liên kết khi chưa được click.	Định dạng cho tất cả liên kết khi chưa được click.	Định dạng cho tất cả liên kết khi chưa được click.
                                    Định dạng cho tất cả liên kết khi chưa được click.
                                    Định dạng cho tất cả liên kết khi chưa được click.
                                    Định dạng cho tất cả liên kết khi chưa được click.
                                    Định dạng cho tất cả liên kết khi chưa được click.
                                    Định dạng cho tất cả liên kết khi chưa được click.
                                    Định dạng cho tất cả liên kết khi chưa được click.
                                </div>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="content">
                                <a class="author">Matt</a>
                                <div class="metadata">
                                    <span class="date">Today at 5:42PM</span>
                                </div>
                                <div class="text">
                                    How artistic!
                                </div>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="content">
                                <a class="author">Matt</a>
                                <div class="metadata">
                                    <span class="date">Today at 5:42PM</span>
                                </div>
                                <div class="text">
                                    How artistic!
                                </div>
                                </div>
                            </div>
                        </div>
                            <div class="ui blue labeled submit icon button">
                            <i class="icon edit"></i> Chat
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui tiny modal">
                <div class="header"><i class="gift icon text-red"></i>Give the song</div>
                <div class="content">
                    <form id="form-gift" method="POST" action="mode1.html">
                    <div class="ui form">
                        <div class="two fields">
                            <div class="field">
                                <label>Your Name</label>
                                <input type="text" name="your_name" placeholder="Your Name">
                            </div>
                            <div class="field">
                                <label>Friend Name</label>
                                <input type="text" name="friend_name" placeholder="Friend Name">
                            </div>
                        </div>
                        <div class="field">
                            <label>Message</label>
                            <textarea rows="2" name="message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="actions">
                    <div class="ui buttons">
                        <button class="ui button active cancel"><i class="power off icon"></i>Cancel</button>
                        <div class="or"></div>
                        <button type="submit" class="ui button submit"><i class="paper plane outline icon"></i>Save</button>
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
    <!-- <script src="./public/js/phaohoa.js"></script> -->
    <script src="./public/js/jquery.fireworks.js"></script>
    <script src="./public/js/countdown.js"></script>
    <script>
        $(document).ready(function () {
            $('input[name=mode]').click(function () {
                    $('div.wrapper-content-mode1').toggleClass('d-none');
                    $('div.wrapper-content-mode2').toggleClass('d-none');
            });

            $(document).on('click', 'i.play-music', function () {
                $this = $(this);
                if ($this.hasClass('play')) {
                    $('i.play-music').removeClass('pause').addClass('play');
                    let song_id = $this.closest('td').data('song-id');
                    var src = "https://www.nhaccuatui.com/mh/background/" + song_id;
                    $('#control-music').attr('src', src);
                } else if ($this.hasClass('pause')) {
                    $('#control-music').removeAttr('src');
                }
                $this.toggleClass("play pause");
            });

            $('input[name=firework]').click(function () {
                if ($(this).is(':checked')) {
                    $('body').fireworks({ sound: true, opacity: 1, width: '100%', height: '100%' });
                    $('div.wrapper-header').remove();
                    $('html, body').css({
                        overflow: 'hidden'
                    });
                } else {
                    location.reload();
                }
            });

            $(document).on('click', 'i.gift', function () {
                $('.tiny.modal').modal('show');
            });

            $("#form-gift").submit(function (event) {
                var ajax_load = "<img src='http://automobiles.honda.com/images/current-offers/small-loading.gif' alt='loading...' />";
                $('div.basic.red').remove();
                event.preventDefault();
                $('#form-gift input, textarea').each(function () {
                    if (!$(this).val()) {
                        $(this).addClass('error');
                        $('<div class="ui basic red pointing prompt label transition visible">Please enter your name</div>').insertAfter($(this));
                    } else {
                        $(this).removeClass('error');
                        $(this).next('div.basic.red').remove();
                    }
                });
                $('#form-gift input, textarea').blur(function () {
                    if ($(this).val()) {
                        $(this).removeClass('error');
                        $(this).next('div.basic.red').remove();
                    }
                })
                let error = $("#form-gift").find('.error').length;
                if (error > 0) {
                    return false;
                } else {
                    // $(this).off('submit').submit();
                    // $('body').load("mode1.html html");
                }
            })
        })
    </script>
</body>

</html>
