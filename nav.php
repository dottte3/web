        <div class="container">
            <div class="row">
                <div class="col-md-10">
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-ex``ded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="/kakao/"><img id="menuimage" src="images/logo.png" alt=""></a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <div class="btn-group">
                                    <button type="button" id="menubar" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        클립영상 <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="index.php?board=hotclip">인기클립</a></li>
                                        <li><a href="index.php?board=general">일반클립</a></li>
                                        <li class="divider"></li>
                                        <li><a href="index.php?board=clipadvice">클립 도움말</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group">
                                    <button type="button" id="menubar" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        게시판 <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="index.php?board=pd">PD게시판</a></li>
                                        <li><a href="index.php?board=free">자유게시판</a></li>
                                        <li><a href="index.php?board=humor">유머게시판</a></li>
                                        <li><a href="index.php?board=qna">Q & A</a></li>
                                        <!--<li class="divider"></li>
                                        <li><a href="#">zzz</a></li>-->
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group">
                                    <button type="button" id="menubar" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        정보 <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="index.php?board=broadtip">방송 TIP</a></li>
                                        <li><a href="index.php?board=gameinfo">게임정보</a></li>
                                        <li><a href="index.php?board=gamerec">게임추천</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group">
                                    <button type="button" id="menubar" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        방송 <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="index.php?board=broadpm">방송홍보</a></li>
                                        <li><a href="index.php?board=broadrec">방송추천</a></li>
                                        <li><a href="index.php?board=broadevent">방송대회 & 이벤트</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group">
                                    <button type="button" id="menubar" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        공지사항 <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="index.php?board=notice">공지사항</a></li>
                                        <li><a href="index.php?board=suggest">건의사항</a></li>
                                        <li><a href="index.php?board=report">신고</a></li>
                                        <li class="divider"></li>
                                        <li><a href="index.php?board=patchnote">패치노트</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a id="custom-login-btn" href="javascript:loginWithKakao()">
                        <img src="images/kakao_login_btn_small.png">
                    </a>
                    <script type='text/javascript'>
                    //<![CDATA[
                        // 사용할 앱의 JavaScript 키를 설정해 주세요.
                        Kakao.init('7715afbf560fe7b5559d1609b9d35087');
                        function loginWithKakao() {
                        // 로그인 창을 띄웁니다.
                        Kakao.Auth.login({
                            success: function(authObj) {
                            alert(JSON.stringify(authObj));
                            },
                            fail: function(err) {
                            alert(JSON.stringify(err));
                            }
                        });
                        };
                    //]]>
                    </script>
                </div>
            </div>
        </div>