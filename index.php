<html>
<head>
    <title>U,HA-I</title>
    <link rel="stylesheet" href="/css/main.css?ver=1">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="background"></div>
    <div> 
        <div class="container">
            <div class="header-bar">
                <div class="logo">U, HA-I</div>
                <div class="text">topper & balloon</div>
            </div>

            <div class="main-page">

                <div class="black-grid">
                    <div class="section-grid">
                        <div class="title">| 사용방법 |</div>
                        <div class="content">
                            1. 글씨체를 선택해주세요<br><br>
                            2. 원하는 문구를 입력해주세요, ( 최대 3줄, 줄별 15자 )<br><br>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="section-grid">
                        <div class="design-grid-option">
                            <select id="sel" class="font-select">
                                <option value="THEsuperpower">한글 1번</option>
                                <option value="TYPEFont26">한글 2번</option>
                                <option value="TYPEFont71">한글 3번</option>
                                <option value="Cafe24Oneprettynight">한글 4번</option>
                                <option value="TYPEFont75">한글 5번</option>
                                <option value="TYPEFont94">한글 6번</option>
                                <option value="TYPEFont107">한글 7번</option>
                                <option value="SDMiSaeng">한글 8번</option>
                                <option value="Nanum Pen Script">한글 9번</option>
                                <option value="THEFACESHOP-INKLIPQUID">한글 10번</option>
                                <option value="Cafe24Shiningstar">한글 11번</option>
                                <option value="UhBee-MiMi-Bold">한글 12번</option>
                                <option value="THEharu">한글 13번</option>
                                <option value="Cafe24Dongdong">한글 14번</option>
                                <option value="OdKongddukBingsu">한글 15번</option>
                                <option value="OdVanillaromance">한글 16번</option>
                                <option value="OdBestFreind">한글 17번</option>
                                <option value="TYPEFont42">한글 18번</option>
                                <option value="StartingDEMO">영문 1번</option>
                                <option value="Amarillo">영문 2번</option>
                                <option value="JennaSue">영문 3번</option>
                                <option value="Hello">영문 4번</option>
                            </select>
                            <p class="sub">* 본 도안은 실물과 다소 차이가 있을 수 있습니다</p>
                        </div>
                        <div class="design-grid-text">
                            <textarea class="t-area" id="T" placeholder="글자를 입력해주세요 (1줄당 공백포함 최대 15자)" rows="3" onkeydown="return limitLines(this, event)"></textarea>
                        </div>
                    </div>
                </div>
                <div class="black-grid">
                    <div class="section-grid">
                        <div class="content">
                            <div id="rs">이곳에 시안이 출력됩니다</div>
                            <div class="flex-around">
                                <div class="box" OnClick="ClickToKakao();" style="cursor:pointer;">1:1 상담하기</div>
                            </div><br><br>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="section-grid">
                        <div class="content">
                            <div class="copyright">
                                Copyright 2020. U,HA-I. All rights reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</body>
<script src="/scripts/main.js"></script>
</html>