$("#available_sched").hide();

var dateParam = new URLSearchParams(window.location.search).get("date");

//selec all checkboxes when all are checked
var checkboxes = document.querySelectorAll(".schedcheck");

var checked = 0;

checkboxes.forEach((checkbox) => {
  if (checkbox.checked) checked++;
});

if (checked == 8) {
  $("#defaultCheckAll").prop("checked", true);
}

if (dateParam != null) {
  $("#available_sched").show();
  $("#sched_placeholder").hide();
} else {
  $("#available_sched").hide();
  $("#sched_placeholder").show();
}

/**
 * S T A R T   V A R I A B L E S
 */
const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July ",
  "August",
  "September",
  "October",
  "November",
  "December",
];

const calendar = {
  _currentMonth: new Date().getMonth() + 1,
  _currentYear: new Date().getFullYear(),
  _currentDates: [],
  _selectedDate: null,
  _firstDay: new Date(new Date().getFullYear(), new Date().getMonth(), 1),
  get currentMonth() {
    return this._currentMonth;
  },
  set currentMonth(month) {
    this._currentMonth = month;
  },
  get currentDates() {
    return this._currentDates;
  },
  set currentDates(dates) {
    this._currentDates = dates;
  },
  get firstDay() {
    return this._firstDay;
  },
  set firstDay(date) {
    this._firstDay = date;
  },
  get currentYear() {
    return this._currentYear;
  },
  set currentYear(year) {
    this._currentYear = year;
  },
  get selectedDate() {
    return this._selectedDate;
  },
  set selectedDate(date) {
    this._selectedDate = date;
  },
};

/**
 * E N D   V A R I A B L E S
 */

/**
 * S T A R T   F U N C T I O N S
 */
const nextMonth = () => {
  if (calendar.currentMonth == 12) {
    calendar.currentMonth = 1;
    calendar.currentYear++;
  } else {
    calendar.currentMonth++;
  }
};

const prevMonth = () => {
  if (calendar.currentMonth == 1) {
    calendar.currentMonth = 12;
    calendar.currentYear--;
  } else {
    calendar.currentMonth--;
  }
};
const selectDate = (date) => {
  var data = $(date).data("date");

  //check if parameter is disabled
  if ($(date).hasClass("disabled_date")) return;

  $("#sched_placeholder").hide();
  $("#available_sched").show();
  $("#selected_date").html(
    new Date(data).toLocaleDateString("en-US", {
      month: "long",
      day: "numeric",
      year: "numeric",
    })
  );

  var url = new URL(window.location.href);

  //format date yyyy-mm-dd
  var currentDate = new Date(data);
  currentDate.setDate(currentDate.getDate() + 1);

  var format_date = currentDate.toISOString().slice(0, 10);
  url.searchParams.set("date", format_date);

  window.history.pushState({}, "", url);

  //refresh page
  location.reload();
};
const updateDates = (dates) => {
  $("#date_content").html(
    dates.map((date) => {
      var today = new Date();
      if (date == "")
        return `<div class="date_label disabled_date"><span></span></div>`;

      return `<div
          role="button"
          onclick="selectDate(this)"
          data-date="${date}"
          class="date_label
          ${
            date.getDate() < today.getDate() &&
            date.getMonth() == today.getMonth()
              ? "disabled_date"
              : //check if date is weekend
              date.getDay() == 0 || date.getDay() == 6
              ? "disabled_date"
              : ""
          }
          "><span>${date.getDate()}</span></div>`;
    })
  );
};
const getMonthName = (month) => {
  return months[month - 1] + " " + calendar.currentYear;
};

const populateCalendar = () => {
  while (calendar.firstDay.getMonth() + 1 == calendar.currentMonth) {
    calendar.currentDates.push(new Date(calendar.firstDay));
    calendar.firstDay.setDate(calendar.firstDay.getDate() + 1);
  }

  calendar.currentDates = [
    ...Array(calendar.currentDates[0].getDay()).fill(""),
    ...calendar.currentDates,
  ];

  updateDates(calendar.currentDates);
};

/**
 * E N D   F U N C T I O N S
 */

$("#date_header").html(getMonthName(calendar.currentMonth));

populateCalendar();

$("#right_btn").click(function () {
  const currentMonth = new Date().getMonth() + 1;
  const diff = calendar.currentMonth - currentMonth;
  //   $(this).addClass("disabled_btn");

  if (diff != 1) {
    nextMonth();
    calendar.currentDates = [];
    calendar.firstDay = new Date(
      calendar.currentYear,
      calendar.currentMonth - 1,
      1
    );

    populateCalendar();

    $("#date_header").html(getMonthName(calendar.currentMonth));
    $("#left_btn").removeClass("disabled_btn");
  }
});

$("#left_btn").click(function () {
  const currentMonth = new Date().getMonth() + 1;
  //   $(this).addClass("disabled_btn");

  if (calendar.currentMonth != currentMonth) {
    prevMonth();
    calendar.currentDates = [];

    calendar.firstDay = new Date(
      calendar.currentYear,
      calendar.currentMonth - 1,
      1
    );
    populateCalendar();

    $("#date_header").html(getMonthName(calendar.currentMonth));
    $("#right_btn").removeClass("disabled_btn");
  }
});

//check all checkboxes in the table #defaultCheckAll
$("#defaultCheckAll").click(function () {
  if ($(this).is(":checked")) {
    $(".schedcheck").prop("checked", true);
  } else {
    $(".schedcheck").prop("checked", false);
  }
});
