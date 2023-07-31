var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = currentDateTime.getDate();

if (date < 10) {
  date = '0' + date;
}
if (month < 10) {
  month = '0' + month;
}

var today = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var dateWarningElem = document.querySelector("#date-warning");

checkinElem.setAttribute("min", today);

checkinElem.onchange = function() {
  var selectedDate = new Date(this.value);
  var currentDate = new Date();

  if (selectedDate < currentDate) {
    this.value = today; // Set the value back to today's date
    dateWarningElem.textContent = "Selected date cannot be in the past";
  } else {
    dateWarningElem.textContent = "";
  }
};

var phoneInput = document.querySelector("#phone");
intlTelInput(phoneInput, {
  initialCountry: "id",
  separateDialCode: true,
});
