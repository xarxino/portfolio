// Import feather icons
const feather = require("feather-icons");
feather.replace({ "stroke-width": 1.25 });

// Function to set dark mode
function setDarkMode() {
  document.querySelector("html").classList.add("dark");
  document.querySelector(".dark-mode-toggle").innerHTML =
    feather.icons["sun"].toSvg();
  document.cookie = "mode=dark; path=/";
}

// Function to set light mode
function setLightMode() {
  document.querySelector("html").classList.remove("dark");
  document.querySelector(".dark-mode-toggle").innerHTML =
    feather.icons["moon"].toSvg();
  document.cookie = "mode=light; path=/";
}

// Read the mode cookie
const cookies = document.cookie.split("; ");
const cookie = cookies.find((c) => c.startsWith("mode="));
if (cookie) {
  const mode = cookie.split("=")[1];
  if (mode === "dark") {
    setDarkMode();
  } else {
    setLightMode();
  }
} else {
  // Check system preferences and set mode accordingly
  if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
    setDarkMode();
  } else {
    setLightMode();
  }
}

// Add event listener to the click event of the dark mode toggle button
document.querySelector(".dark-mode-toggle").addEventListener("click", () => {
  if (document.querySelector("html").classList.contains("dark")) {
    setLightMode();
  } else {
    setDarkMode();
  }
});
