<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/jquery.fullpage.css" />
    <!-- 폰트어썸 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="./images/common/favicon.ico" />
    <link rel="stylesheet" href="./css/common.css" />
    <link rel="stylesheet" href="./css/main.css" />

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- aos js -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./js/jquery.fullpage.js"></script>
    <script src="./js/check.js"></script>
    <script src="./js/main.js"></script>
    <title>Fit Partner</title>
</head>

<body>
    <!-- 헤더 -->
    <header>
        <div class="container">
            <div data-anchor="sec1">
                <a href="#sec1" id="backToTop"><img src="./images/common/Fit Partner.png" alt="HeaderLogo" /></a>
            </div>
            <nav class="navMenu">
                <ul>
                    <li data-anchor="sec2"><a href="#sec2">서비스소개</a></li>
                    <li data-anchor="sec4"><a href="#sec5">샘플페이지</a></li>
                    <li data-anchor="sec6"><a href="#sec6">커뮤니티</a></li>
                    <li data-anchor="sec8"><a href="#sec8">입점문의</a></li>
                    <li><a href="./company.php">회사소개</a></li>

                </ul>
            </nav>
            <div class="menutoggle">
                <input type="checkbox" name="" id="menuicon" />
                <label for="menuicon">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <div class="sidebar">
                    <div class="logo">
                        <p>Fit Partner</p>
                    </div>
                    <ul>
                        <li data-anchor="sec2"><a href="#sec2">서비스소개</a></li>
                        <li data-anchor="sec7"><a href="#sec7">입점문의</a></li>
                        <li data-anchor="sec5"><a href="#sec5">커뮤니티</a></li>
                        <li><a href="./company.php">회사소개</a></li>
                        <li><a href="./sample.php">샘플페이지</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main id="fullpage">
        <!-- 섹션1 -->
        <section class="section" id="first_section">
            <main class="section_container">
                <section class="section1 section_inner">
                    <article>
                        <div class="section1_text" data-aos="fade-down" data-aos-duration="500">
                            <strong>PT</strong>
                            <span>도</span>
                            <br />
                            <h2>내 마음대로 하는 세상</h2>
                        </div>
                        <div class="section1_btn">
                            <button>
                                <h1 data-anchor="sec7"><a href="#sec7">입점문의</a></h1>
                            </button>
                        </div>
                    </article>

                    <!-- <img src="./images/main/section1_img1.png" alt="메인 이미지" /> -->
                </section>
            </main>
        </section>
        <!-- 섹션2 -->
        <section class="section">
            <main id="section2_bg">
                <section class="section_container">
                    <img src="./images/main/section2_memo.png" alt="memo" />
                    <article class="section2_item1">
                        <strong>PT</strong>
                        <span>예약을</span>
                        <br />
                        <h2>
                            내가 원하는 시간, 원하는 횟수<br />
                            원하는 트레이너
                        </h2>
                    </article>
                    <article class="section2_item2">
                        <div data-aos="fade-down" data-aos-delay="100" data-aos-duration="400">
                            <img src="./images/main/section2_img1.png" alt="sectionimg" />
                            <div>
                                <h1>
                                    PT 1, 2회도 편하게<br />
                                    결제, 예약하자
                                </h1>
                            </div>
                        </div>
                        <div data-aos="fade-down" data-aos-delay="200" data-aos-duration="400">
                            <img src="./images/main/section2_img2.png" alt="sectionimg" />
                            <div>
                                <h1>
                                    트레이너의 평가를 보고<br />
                                    원하는 트레이너를 선택하자
                                </h1>
                            </div>
                        </div>
                    </article>
                </section>
            </main>
        </section>

        <!------- 섹션5(추가) ------->
        <section class="section">
            <main class="section_container">
                <section class="section5 section_inner">
                    <img src="./images/main/section5_img1.png" alt="section5 img" />
                    <article class="section5_text">
                        <div class="section5_text_item1">
                            <p data-aos="fade-down" data-aos-delay="100" data-aos-duration="400">Q. 회원가입하기 부담스러운데 1일권만 할
                                수 있나요?</p>
                            <p data-aos="fade-down" data-aos-delay="200" data-aos-duration="400">
                                <strong>
                                    A. 피트파트너에서는 비회원도 간편하게 1일권 결제가
                                    가능합니다.
                                </strong>
                            </p>
                        </div>
                        <div>
                            <p data-aos="fade-down" data-aos-delay="400" data-aos-duration="400">Q. 금액을 확인할려면 꼭 회원가입을
                                해야하나요?</p>
                            <p data-aos="fade-down" data-aos-delay="500" data-aos-duration="400">
                                <strong>A. 피트파트너에서는 금액을 확인하기 위해 회원가입을 하지
                                    않아도 됩니다.</strong>
                            </p>
                        </div>
                    </article>
                </section>
            </main>
        </section>
        <!------- 섹션6(추가) ------->
        <section class="section section6">
            <main class="section_container" id="table_container">
                <article class="section6_table">
                    <div class="section6_table_row">
                        <span class="table_title">&nbsp;</span>
                        <span>&nbsp;</span>
                        <span class="title">A사</span>
                        <span class="title">B사</span>
                    </div>
                    <div class="section6_table_row">
                        <span class="table_title">비회원 1일권</span>
                        <span>&nbsp;</span>
                        <span><i class="fa-solid fa-circle-xmark"></i></span>
                        <span><i class="fa-solid fa-circle-xmark"></i></span>
                    </div>
                    <div class="section6_table_row">
                        <span class="table_title">전국지원</span>
                        <span>&nbsp;</span>
                        <span><i class="fa-solid fa-circle-xmark"></i></span>
                        <span><i class="fa-solid fa-circle-check check_icon"></i></span>
                    </div>
                    <div class="section6_table_row">
                        <span class="table_title">피티 예약 쉬움</span>
                        <span>&nbsp;</span>
                        <span><i class="fa-solid fa-circle-check check_icon"></i></span>
                        <span><i class="fa-solid fa-circle-xmark"></i></span>
                    </div>
                    <div class="section6_table_row">
                        <span class="table_title">커뮤니티</span>
                        <span>&nbsp;</span>
                        <span><i class="fa-solid fa-circle-xmark"></i></span>
                        <span><i class="fa-solid fa-circle-xmark"></i></span>
                    </div>
                    <div class="section6_table_row">
                        <span class="table_title">회원권 중고거래</span>
                        <span>&nbsp;</span>
                        <span><i class="fa-solid fa-circle-xmark"></i></span>
                        <span><i class="fa-solid fa-circle-xmark"></i></span>
                    </div>
                </article>
                <div id="table_box" data-aos="zoom-in-up" data-aos-duration="300">
                    <div class="box_title">Fit partner</div>
                    <div><i class="fa-solid fa-circle-check table_box_icon"></i></div>
                    <div><i class="fa-solid fa-circle-check table_box_icon"></i></div>
                    <div><i class="fa-solid fa-circle-check table_box_icon"></i></div>
                    <div><i class="fa-solid fa-circle-check table_box_icon"></i></div>
                    <div><i class="fa-solid fa-circle-check table_box_icon"></i></div>
                </div>
            </main>
        </section>
        <!-- 섹션8 예약 샘플 -->
        <section class="section">
            <main class="section_container">
                <section class="section3 section_inner">
                    <img src="./images/main/section4_mokup.png" alt="section4_img" />
                    <article class="section3_text">
                        <strong>피트파트너만의 간편한 </strong>
                        <h3>예약 서비스</h3>
                        <p>
                            회원, 비회원들이 사용할<br />
                            쉽고, 빠르고, 간결.<br />
                            피트파트너로 편리하게 예약해보세요.
                        </p>

                        <div class="section1_btn section3_btn">
                            <button>
                                <a href="./sample.php">
                                    <h1>바로가기</h1>
                                </a>
                            </button>
                        </div>
                    </article>

                </section>
            </main>
        </section>
        <!-- 섹션3 -->
        <section class="section" style="background-color: rgba(200, 200, 200, 0.2);">
            <main class="section_container">
                <section class="section3 section_inner">
                    <article class="section3_text">
                        <strong>피트파트너 회원들만의</strong>
                        <h3>커뮤니티</h3>
                        <p>
                            사장, 트레이너, 회원 모두를 위한<br />
                            커뮤니티. 지식 공유, 동기부여.<br />
                            함께 더 나은 헬스 라이프를 즐겨보세요.
                        </p>

                        <div class="section1_btn section3_btn">
                            <button>
                                <a href="https://port-9000-fitpartner-jvvy2blm5sa5gq.sel5.cloudtype.app/">
                                    <h1>바로가기</h1>
                                </a>
                            </button>
                        </div>
                    </article>
                    <img src="./images/main/section3_img1_mokup.png" alt="section3_img" />
                </section>
            </main>
        </section>
        <!-- 섹션4 -->
        <section class="section">
            <main class="section_container">
                <section class="section4 section_inner">
                    <img class="pc_img" src="./images/main/section4_img1.png" alt="section4_img" />
                    <article class="section4_text">
                        <h4>
                            피트 파트너는 전국 <br />
                            현재 <span data-aos="zoom-in" data-aos-duration="300">약 8,900곳</span>의<br />
                            지점과 함께<br />
                            하고 있습니다.
                        </h4>

                        <img class="mobile_img" src="./images/main/section4_img1.png" alt="section4_img" />
                        <p>
                            피트 파트너가<br />
                            당신의 파트너가 되는 날을<br />
                            기다립니다.
                        </p>
                    </article>
                </section>
            </main>
        </section>

        <!-------- 섹션7(servie추가) -------->
        <section class="section">
            <main>
                <div class="becomeMainImg">
                    <div class="formwrap">
                        <form class="" action="" method="post">
                            <h4>입점문의</h4>
                            <div>
                                <input type="text" name="companyname" class="input_check_error"
                                    placeholder="업체명을 입력해주세요" id="companyname" />
                                <i class="fa-solid fa-address-card"></i>
                            </div>
                            <div>
                                <input type="text" name="name" class="input_check_error" placeholder="대표명을 입력해주세요"
                                    id="name" />
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div>
                                <input type="email" name="email" class="input_check_error" placeholder="이메일을 입력해주세요"
                                    id="email" />
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <input type="text" class="input_check_error" name="phone" placeholder="전화번호를 입력해주세요"
                                    id="phonenumber" />
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <textarea name="textBox" class="input_check_error" cols="10" rows="300"
                                    placeholder="문의 내용을 입력해주세요" id="detail"></textarea>
                            </div>
                            <div>
                                <label for="remember-check">
                                    <input type="checkbox" id="remember-check" />
                                    개인정보 수집 및 정보이용에 동의합니다.
                                    <span class=" agree_text">(필수)</span>
                                </label>
                            </div>
                            <div>
                                <button id="btnSubmit" style="cursor: pointer;" type="button">
                                    입점문의
                                </button>
                            </div>
                            <div>
                                <p>
                                    신청해주신 순서에 따라 담당자가 개별적으로상담전화를
                                    회신드릴 예정입니다.
                                </p>
                            </div>
                            <div style="display: none;">
                                <a>get pf info</a>
                                <input type="text" id="pfid" value="KA01PF22041206411o33TFWW9Sl71Ppp" />
                                <button onclick="getPfInfo()">get</button>
                            </div>
                            <div style="display: none;">
                                <a>get pf infos</a>
                                <button onclick="getPfInfos()">get</button>
                            </div>
                            <div style="display: none;">
                                <a>get template info</a>
                                <input type="text" id="template-id" value="KA01TP23090707121787977slbodjSrf" />
                                <button onclick="getTemplateInfo()">get</button>
                            </div>
                            <div style="display: none;">
                                <a>get template infos</a>
                                <button onclick="getTemplateInfos()">get</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </section>
        <section class="section fp-auto-height">
            <!-- 푸터 -->
            <footer>
                <div class="footer_container">
                    <div class="footer_itemBox1">
                        <img src="./images/common/footer_logo.png" alt="logo" />
                        <p>주식회사 핏파트너 | 대표:ㅇㅇㅇ</p>

                        <p>
                            사업자등록번호 : 512-78-45362 | 통신판매신고번호 : 제2023-1431호
                        </p>
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
        </section>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/hmac-sha256.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/enc-base64-min.js"></script>
    <script src="./js/solapi.js"></script>
    <script>
    function getPfInfo() {
        let pfid = document.getElementById('pfid').value;
        getPlusfriend(pfid);
    }

    function getPfInfos() {
        getPlusfriends();
    }

    function getTemplateInfo() {
        let templateId = document.getElementById('template-id').value;
        getTemplate(templateId);
    }

    function getTemplateInfos() {
        getTemplates();
    }
    </script>
</body>

</html>