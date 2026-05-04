const param = new URLSearchParams(window.location.search);

if (param.get("coach") === "denis") {
  denis();
} else if (param.get("coach") === "igor") {
  igor();
}

function denis() {
  console.log("Denis");
  const childCheckBox = document.querySelector("input[name='group-child']");
  const teenageCheckBox = document.querySelector("input[name='group-teenage']");
  const kiokushinkaiCheckBox = document.querySelector(
    "input[name='direction-kiokushinkai']",
  );
  const judoSamboCheckBox = document.querySelector(
    "input[name='direction-judo_sambo']",
  );
  const setChecked = [
    childCheckBox,
    teenageCheckBox,
    kiokushinkaiCheckBox,
    judoSamboCheckBox,
  ];
  console.log(setChecked);
  setChecked.forEach((checkBox) => {
    if (checkBox) {
      checkBox.setAttribute("checked", "checked");
    }
  });
}

function igor() {
  console.log("Igor");
  const adultCheckBox = document.querySelector("input[name='group-adult']");
  const teenageCheckBox = document.querySelector("input[name='group-teenage']");
  const judoSamboCheckBox = document.querySelector(
    "input[name='direction-judo_sambo']",
  );
  const budokaiCheckBox = document.querySelector(
    "input[name='direction-budokai']",
  );
  const setChecked = [
    adultCheckBox,
    teenageCheckBox,
    budokaiCheckBox,
    judoSamboCheckBox,
  ];
  console.log(setChecked);
  setChecked.forEach((checkBox) => {
    if (checkBox) {
      checkBox.setAttribute("checked", "checked");
    }
  });
}
