<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fit Partner</title>
    <!-- 폰트어썸 CDN -->
    <!-- 캘린더 CSS -->
    <link rel="stylesheet" href="css/pignose.calendar.min.css" />
    <link rel="stylesheet" href="css/style_calender_box.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="./images/common/favicon.ico" />
    <link rel="stylesheet" href="./css/common.css" />
    <link rel="stylesheet" href="./css/sample.css" />

    <!-- 캘린더 -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="js/pignose.calendar.full.min.js"></script>
</head>

<body>
    <!-- 헤더 -->
    <header class="myheader">
        <h1>업체명</h1>
    </header>
    <!-- 본문 -->
    <main>
        <!-- 메인 이미지 -->
        <!-- section1 -->
        <div class="sample_bg">

        </div>
        <!-- section2 -->
        <div class="section2 wrapper">
            <div class="form_info">
                <div class="trainer">
                    <div><img src="./images/sample/trainer.png" alt=""></div>
                    <div>
                        <h1><strong>김승재</strong> 트레이너</h1>
                        <p>고투짐: 대구광역시 동구 화랑로 525 </p>
                        <p>9월 5일 (화) P.T 1회</p>
                        <p>메뉴가격: <strong>50,000</strong></p>
                    </div>
                </div>
                <div class="black_line"></div>
                <div ">
                    <div class=" info">
                    <div class="info_name">
                        <input type="text" placeholder="이름">
                        <input type="text" placeholder="010-1234-5678">
                    </div>
                    <div class="info_sex">
                        <input TYPE='radio' id='sex1' name='group1' value='남' />
                        <label for='sex1'>남</label>
                        <input TYPE='radio' id='sex2' name='group1' value='여' />
                        <label for='sex2'>여</label>
                    </div>
                </div>
                <div class="info_text">
                    <textarea name="textBox" class="input_check_error" cols="" rows="10" placeholder="문의 사항"
                        id="detail"></textarea>
                </div>
            </div>
        </div>
        <div class="calendar_wrap">
            <div class="multi-select-calendar">
                <div class="calendar"></div>
            </div>
            <div class="box">선택하신 날짜 : 2022-06-13 ~ 2022-06-16</div>
            <div class="reserve-select active">
                <div class="time-select">
                    <div class="select-time select">10:00 ~ 11:00</div>
                    <div class="select-time">10:30 ~ 11:30</div>
                    <div class="select-time">14:00 ~ 15:00</div>
                    <div class="select-time">15:300 ~ 16:30</div>
                    <div class="select-time">16:00 ~ 17:00</div>
                    <div class="select-time">17:30 ~ 18:30</div>
                    <div class="select-time">18:00 ~ 19:00</div>
                    <div class="select-time">19:30 ~ 20:30</div>
                </div>
            </div>
        </div>
        </div>
        <div class="reserve_btn wrapper">
            <button>예약하기</button>
            <p>* 예약 시간 1시간 전 알림톡이 발송됩니다, 예약시간에 맞춰 매장을 방문해주세요.</p>
            <p>* 예약 시간 변경은 가능하나, 조정은 불가능함</p>
        </div>

    </main>
    <!-- 푸터 -->
    <footer>
        <div class="footer_container">
            <div class="footer_itemBox1">
                <img src="./images/common/footer_logo.png" alt="logo" />
                <p>주식회사 핏파트너 | 대표:ㅇㅇㅇ</p>
                <p>사업자등록번호 : 512-78-45362 | 통신판매신고번호 : 제2023-1431호</p>
                <p>대구광역시 동구 화랑로525 (영진직업전문학교)</p>
                <p>대표전화 : 1922-7868</p>
                <p>대표이메일 : contact@fitpartner.com</p>
                <br />
                <p>(c) 2023 fitpartner Inc. All rights Reserved</p>
            </div>
            <div class="footer_itemBox2">
                <div class="footer_item1">
                    <span>개인정보 처리방침 | </span>
                    <span>서비스 이용약관</span>
                </div>
                <div class="footer_item2">
                    <img src="./images/common/footer_sns01.png" alt="sns01" />
                    <img src="./images/common/footer_sns02.png" alt="sns02" />
                    <img src="./images/common/footer_sns03.png" alt="sns03" />
                    <img src="./images/common/footer_sns04.png" alt="sns04" />
                    <img src="./images/common/footer_sns05.png" alt="sns05" />
                </div>
            </div>
        </div>
    </footer>
    <script src="./js/calender.js"></script>
</body>

</html>