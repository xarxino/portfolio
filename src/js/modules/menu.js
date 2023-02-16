/***********************************************************************
This file handles the navigation menu's toggle by adding/removing classes 
on button clicks.Uses querySelector to grab the menu open, close and 
navigation element by id.
***********************************************************************/

// Declare variables for the menu open button, menu close button, and navigation menu
const menuOpen = document.querySelector("#menuOpen");
const menuClose = document.querySelector("#menuClose");
const navMenu = document.querySelector("#navMenu");

// Add an event listener to the menu open button that removes the "hidden" class and adds the "flex" class to the navigation menu when clicked and fades in the menu by adding fadeIn animation keyframes
menuOpen.addEventListener("click", () => {
	navMenu.classList.remove("hidden");
	navMenu.classList.add("flex");
    navMenu.classList.add("fadeIn");
    navMenu.classList.remove("fadeOut");
});

// Add an event listener to the menu close button that removes the "flex" class and adds the "hidden" class to the navigation menu when clicked and fades out the menu by adding fadeOut animation keyframes
menuClose.addEventListener("click", () => {
	navMenu.classList.remove("flex");
	navMenu.classList.add("hidden");
    navMenu.classList.add("fadeOut");
    navMenu.classList.remove("fadeIn");
});
