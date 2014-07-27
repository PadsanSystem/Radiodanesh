<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">

    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>
    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>

    <title>Metro UI CSS : Metro Bootstrap CSS Library</title>
</head>
<body class="metro">
    <header class="bg-dark" data-load="header.html"></header>
    <div class="page">
        <div class="page-region">
            <div class="page-region-content">

                <div class="example1 border padding20">

                    <div class="streamer" data-role="streamer" data-scroll-bar="true" data-slide-to-group="3" data-slide-speed="500">
                        <div class="streams">
                            <div class="streams-title">
                                <div class="toolbar">
                                    <button class="button small js-show-all-streams" title="Show all streams" data-role=""><span class="icon-eye"></span></button>
                                    <button class="button small js-schedule-mode" title="On|Off schedule mode" data-role=""><span class="icon-history"></span></button>
                                    <button class="button small js-go-previous-time" title="Go to previous time interval" data-role=""><span class="icon-previous"></span></button>
                                    <button class="button small js-go-next-time" title="Go to next time interval" data-role=""><span class="icon-next"></span></button>
                                </div>
                            </div>
                            <div class="stream bg-teal">
                                <div class="stream-title text-center"><br><br>شنبه</div>
								 <div class="stream-number" dir="rtl">28 تیر</div>
                            </div>
                            <div class="stream bg-orange">
                                <div class="stream-title text-center"><br><br>یکشنبه</div>
								<div class="stream-number" dir="rtl">29 تیر</div>
                            </div>
                            <div class="stream bg-lightBlue">
                                <div class="stream-title text-center"><br><br>دوشنبه</div>
								<div class="stream-number" dir="rtl">30 تیر</div>
                            </div>
                            <div class="stream bg-darkGreen">
                                <div class="stream-title text-center"><br><br>سه شنبه</div>
								<div class="stream-number" dir="rtl">31 تیر</div>
                            </div>
                            <div class="stream bg-pink">
                                <div class="stream-title text-center"><br><br>چهارشنبه</div>
								<div class="stream-number" dir="rtl">1 مرداد</div>
                            </div>
							<div class="stream bg-violet">
                                <div class="stream-title text-center"><br><br>پنج شنبه</div>
								<div class="stream-number" dir="rtl">2 مرداد</div>
                            </div>
							<div class="stream bg-gray">
                                <div class="stream-title text-center"><br><br>جمعه</div>
								<div class="stream-number" dir="rtl">3 مرداد</div>
                            </div>
                        </div>

                        <div class="events">
                            <div class="events-area">
                                <div class="events-grid">
                                    <div class="event-group double">
                                        <div class="event-super padding20">
                                            <div>00:00 - 00:10</div>
                                            <h2 class="no-margin">Registration</h2>
                                        </div>
                                    </div>
                                    <div class="event-group double" id="qwerty">
                                        <div class="event-super padding20">
                                            <div>9:40 - 10:20</div>
                                            <h2 class="no-margin">تست</h2>

                                            <br />

                                        </div>
                                    </div>

                                    <div class="event-group">
                                        <div class="event-stream" >
                                            <div class="event" data-role="live">
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/live1.jpg">
                                                        <div class="time">10:20</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Katerina Kostereva</div>
                                                        <div class="subtitle">Terrasoft</div>
                                                        <div class="remark">Create and develop a business without external investment</div>
                                                    </div>
                                                </div>
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/live2.jpg">
                                                        <div class="time">10:30</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Vlad Voskresensky</div>
                                                        <div class="subtitle">InvisibleCRM</div>
                                                        <div class="remark">Team Building in your startup: what to do and what not</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event double">
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/x.jpg">
                                                        <div class="time">10:40</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Round table</div>
                                                        <div class="remark">Trends in mobile platforms</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event double"></div>
                                            <div class="event double"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event double"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div><div class="event"></div>
                                        </div>

                                        <div class="event-stream" >
                                            <div class="event triple">
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/x.jpg">
                                                        <div class="time">10:40</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Round table</div>
                                                        <div class="remark">Trends in mobile platforms</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event">
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/me.jpg">
                                                        <div class="time">10:20</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Sergey Pimenov</div>
                                                        <div class="subtitle">Metro UI CSS</div>
                                                        <div class="remark">Create a site with interface similar to Windows 8</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="event-stream" >
                                            <div class="event" data-role="live" data-effect="slideUp" data-period="3000">
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/me.jpg">
                                                        <div class="time">10:20</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Sergey Pimenov</div>
                                                        <div class="subtitle">Metro UI CSS</div>
                                                        <div class="remark">Create a site with interface similar to Windows 8</div>
                                                    </div>
                                                </div>
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/x.jpg">
                                                        <div class="time">10:30</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Round table</div>
                                                        <div class="subtitle">Metro UI CSS</div>
                                                        <div class="remark">Discussion</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event double">
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/x.jpg">
                                                        <div class="time">10:40</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Round table</div>
                                                        <div class="remark">Trends in mobile platforms</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="event-group double">
                                        <div class="event-super padding20">
                                            <div>18:20</div>
                                            <h2 class="no-margin">Final ceremony</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="page-footer">
            <div class="page-footer-content">
                <!--<div data-load="header.html"></div>-->
            </div>
        </div>
    </div>

</body>
</html>