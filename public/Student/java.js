function simpleclick() {
  document.getElementById("mydropdown").classList.toggle("hidden");
}

function examdrop() {
  document.getElementById("examdropdown").classList.toggle("hidden");
  document.getElementById("exam").classList.toggle("grid");
}

function mobileexamdrop() {
  document.getElementById("mobileexamdropdown").classList.toggle("hidden");
  document.getElementById("mobileexam").classList.toggle("grid");
}

function profile_drop() {
  document.getElementById("profile_dropdown").classList.toggle("hidden");
}

document.addEventListener("click", function (e) {
  var p_image = document.getElementById("profile_image");
  var container = document.getElementById("profile_dropdown");

  if (e.target != p_image) {
    container.classList.add("hidden");
  }
});

// Dark Mode Theme Toggler

var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

// Change the icons inside the button based on previous settings
if (
  localStorage.getItem("color-theme") === "dark" ||
  (!("color-theme" in localStorage) &&
    window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
  themeToggleLightIcon.classList.remove("hidden");
} else {
  themeToggleDarkIcon.classList.remove("hidden");
}

var themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
  // toggle icons inside button
  themeToggleDarkIcon.classList.toggle("hidden");
  themeToggleLightIcon.classList.toggle("hidden");

  // if set via local storage previously
  if (localStorage.getItem("color-theme")) {
    if (localStorage.getItem("color-theme") === "light") {
      document.documentElement.classList.add("dark");
      localStorage.setItem("color-theme", "dark");
    } else {
      document.documentElement.classList.remove("dark");
      localStorage.setItem("color-theme", "light");
    }

    // if NOT set via local storage previously
  } else {
    if (document.documentElement.classList.contains("dark")) {
      document.documentElement.classList.remove("dark");
      localStorage.setItem("color-theme", "light");
    } else {
      document.documentElement.classList.add("dark");
      localStorage.setItem("color-theme", "dark");
    }
  }
});
