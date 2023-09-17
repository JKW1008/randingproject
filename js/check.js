function validatePhoneNumber(event) {
  const value = event.target.value;
  const onlyNumbers = value.replace(/\D/g, ""); // 숫자 이외의 문자 제거

  if (value !== onlyNumbers) {
    event.target.value = onlyNumbers; // 숫자로만 구성된 값으로 변경
  }
}

function btn_sendMessage() {
  let name = document.getElementById("name").value;
  let companyname = document.querySelector("#companyname").value;
  let email = document.querySelector("#email").value;
  let phonenumber = document.querySelector("#phonenumber").value;
  let templateId = document.getElementById("template-id").value;
  let pfid = document.getElementById("pfid").value;

  //   console.log(name);
  //   console.log(tel);
  //   console.log(btn_url);
  //   console.log(templateId);

  sendMessage(name, companyname, email, phonenumber, pfid, templateId);
}

function saveData(companyname, name, email, phonenumber, detail) {
  // FormData 객체 생성
  const f = new FormData();
  f.append("companyname", companyname);
  f.append("name", name);
  f.append("email", email);
  f.append("phonenumber", phonenumber);
  f.append("detail", detail);
  f.append("mode", "input");

  const xhr = new XMLHttpRequest();

  xhr.open("POST", "./pg/reservation_process.php", true);
  xhr.send(f);

  xhr.onload = () => {
    if (xhr.status === 200) {
      const data = JSON.parse(xhr.responseText);
      if (data.result == "success") {
        alert("예약접수 되었습니다.");
        self.location.href = "./auth.php";
      } else if (data.result == "empty_companyname") {
        alert("업체명을 입력해주세요.");
      } else if (data.result == "empty_name") {
        alert("대표명을 입력해주세요.");
      } else if (data.result == "empty_email") {
        alert("이메일을 입력해주세요.");
      } else if (data.result == "email_format_wrong") {
        alert("형식에 맞지않는 이메일입니다.");
      } else if (data.result == "empty_phonenumber") {
        alert("휴대폰 번호를 입력해주세요.");
      } else if (data.result == "empty_mode") {
        alert("모드값이 비어있습니다.");
      }
    } else if (xhr.status == 404) {
      alert("통신 실패 파일이 존재하지 않습니다.");
    }
  };
}

document.addEventListener("DOMContentLoaded", () => {
  const phonenumber = document.querySelector("#phonenumber");

  phonenumber.addEventListener("input", validatePhoneNumber);

  const btnSubmit = document.querySelector("#btnSubmit");

  btnSubmit.addEventListener("click", () => {
    const companyname = document.querySelector("#companyname");
    const name = document.querySelector("#name");
    const email = document.querySelector("#email");
    const detail = document.querySelector("#detail");
    const rememberCheck = document.querySelector("#remember-check");

    if (companyname.value == "") {
      alert("업체명을 입력해 주세요.");
      companyname.focus();
      return false;
    }

    if (name.value == "") {
      alert("대표명을 입력해 주세요.");
      name.focus();
      return false;
    }

    if (email.value == "") {
      alert("이메일을 입력해 주세요.");
      email.focus();
      return false;
    }

    if (phonenumber === "") {
      alert("휴대전화 번호를 입력해 주세요.");
      phonenumber.focus();
      return false;
    }

    if (rememberCheck.checked !== true) {
      alert("개인정보 취급방침에 동의해주셔야 예약이 가능합니다.");
    } else {
      // alert("예약되었습니다.");
      btn_sendMessage();
      saveData(
        companyname.value,
        name.value,
        email.value,
        phonenumber.value,
        detail.value
      );
    }
  });
});
