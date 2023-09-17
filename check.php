<?php
    include './inc/dbconfig.php';

    $db = $pdo;

    include './inc/reservation.php';

    $companyname = (isset($_GET['companyname']) && $_GET['companyname'] != '') ? $_GET['companyname'] : '';

    if($companyname == ''){
        die("
            <script>
                alert('회사명이 빠져있습니다.');
                history.go(-1);
            </script>
        ");
    }

    $reser = new Reservation($db);

    $reserRow = $reser->getInfo($companyname);
?>
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
    <script src="./js/recheck.js?v=230917"></script>
</head>

<body>
    <section class="section">
        <main>
            <div class="becomeMainImg">
                <div class="formwrap">
                    <form class="" action="" method="post">
                        <h4>문의내역</h4>
                        <input type="hidden" value=<?= $reserRow['companyname']; ?> id="old">
                        <div>
                            <input type="text" name="companyname" class="input_check_error" placeholder="업체명을 입력해주세요"
                                id="companyname" value=<?= $reserRow['companyname']; ?> />
                            <i class="fa-solid fa-address-card"></i>
                        </div>
                        <div>
                            <input type="text" name="name" class="input_check_error" placeholder="대표명을 입력해주세요" id="name"
                                value=<?= $reserRow['name']; ?> />
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <div>
                            <input type="email" name="email" class="input_check_error" placeholder="이메일을 입력해주세요"
                                id="email" value=<?= $reserRow['email']; ?> />
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <input type="text" class="input_check_error" name="phone" placeholder="전화번호를 입력해주세요"
                                id="phonenumber" value=<?= $reserRow['phone_number'];  ?> readonly />
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <textarea name="textBox" class="input_check_error" cols="10" rows="300"
                                placeholder="문의 내용을 입력해주세요" id="detail"><?= $reserRow['content']; ?></textarea>
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
                                문의내역 수정하기
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
                            <input type="text" id="template-id" value="KA01TP230907071300335hkrJNsfxxaO" />
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
</body>

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

</html>