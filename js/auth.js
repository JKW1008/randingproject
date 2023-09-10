document.addEventListener("DOMContentLoaded", () => {
  const btnSubmit = document.querySelector("#btnSubmit");

  btnSubmit.addEventListener("click", () => {
    const companyname = document.querySelector("#companyname");
    const name = document.querySelector("#name");
    if (companyname.value == "") {
      alert("등록하신 업체명을 입력해 주세요.");
      companyname.focus();
      return false;
    }

    if (name.value == "") {
      alert("등록하신 대표자 성함을 입력해 주세요.");
      name.focus();
      return false;
    }

    const xhr = new XMLHttpRequest();

    xhr.open("POST", "./pg/auth_process.php", true);

    const f = new FormData();
    f.append("companyname", companyname.value);
    f.append("name", name.value);

    xhr.send(f);

    xhr.onload = () => {
      if (xhr.status == 200) {
        const data = JSON.parse(xhr.responseText);

        if (data.result == "fail") {
          alert("회사명 또는 대표자명을 잘못입력하셨습니다.");
          companyname.value = "";
          name.value = "";
          companyname.focus();
          return false;
        } else if (data.result == "success") {
          const memArr = data.data;
          alert("확인되었습니다.");
          self.location.href =
            "./check.php?companyname=" + memArr["companyname"];
        }
      } else if (xhr.status == 404) {
        alert("통신실패");
      }
    };
  });
});
