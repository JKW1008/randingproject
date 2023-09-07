let reservation = 0;

function btn_sendMessage() {
  let name = document.getElementById("name").value;
  let companyname = document.querySelector("#companyname").value;
  let email = document.querySelector("#email").value;
  let phonnumber = document.querySelector("#phonnumber").value;
  let templateId = document.getElementById("template-id").value;
  let pfid = document.getElementById("pfid").value;

  //   console.log(name);
  //   console.log(tel);
  //   console.log(btn_url);
  //   console.log(templateId);

  // Increase the reservation value each time the function is called
  reservation++;

  // If this is the first reservation of the month, set a timeout to reset it in a month
  if (reservation >= 1) {
    setTimeout(() => {
      reservation = 0;
    }, 2592000000); // Reset after one month (30 days *24 hours *60 minutes *60 seconds *1000 milliseconds)
  }

  sendMessage(
    name,
    reservation,
    companyname,
    email,
    phonnumber,
    pfid,
    templateId
  );
  console.log(reservation);
}

document.addEventListener("DOMContentLoaded", () => {
  const btnSubmit = document.querySelector("#btnSubmit");

  btnSubmit.addEventListener("click", () => {
    // alert(1);
    const rememberCheck = document.querySelector("#remember-check");

    if (rememberCheck.checked !== true) {
      alert("개인정보 취급방침에 동의해주셔야 예약이 가능합니다.");
    } else {
      btn_sendMessage();
      // self.location.href = "./";
    }
  });
});
