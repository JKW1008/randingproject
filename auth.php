<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fit Partner</title>
    <!-- 폰트어썸 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="./images/common/favicon.ico" />
    <!-- aos -->
    <link rel="stylesheet" href="./css/common.css" />
    <link rel="stylesheet" href="./css/becomeAvailable.css" />

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- aos js -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/auth.js"></script>
</head>
<style>
.becomeMainImg .formwrap {
    padding-top: unset;
    display: flex;
    justify-content: center;
    /* 수평 가운데 정렬 */
    align-items: center;
    /* 수직 가운데 정렬 */
    height: 100vh;
    /* 화면 전체 높이로 설정 */
}

form {
    text-align: center;
    /* 폼 요소들을 가운데로 정렬 */
}
</style>

<body>
    <section class="section">
        <main>
            <div class="becomeMainImg">
                <div class="formwrap">
                    <form class="" action="">
                        <h4>상담예약내역 조회하기</h4>
                        <div>
                            <input type="text" name="companyname" class="input_check_error"
                                placeholder="등록하신 업체명을 입력해주세요" id="companyname" />
                            <i class="fa-solid fa-address-card"></i>
                        </div>
                        <div>
                            <input type="text" name="name" class="input_check_error" placeholder="대표명을 입력해주세요"
                                id="name" />
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <div style="margin-bottom: 4%;">
                            <button id="btnSubmit" style="cursor: pointer;" type="button">
                                예약내역 조회하기
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </section>
</body>

</html>