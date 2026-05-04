function denis() {
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
  setChecked.forEach((checkBox) => {
    if (checkBox) {
      checkBox.checked = true;
    }
  });
}
function igor() {
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
  setChecked.forEach((checkBox) => {
    if (checkBox) {
      checkBox.checked = true;
    }
  });
}
