/***********************************************************************
This file handles the navigation menu's toggle by adding/removing classes 
on button clicks.Uses querySelector to grab the menu open, close and 
navigation element by id.
***********************************************************************/

// Declare variables for the menu open button, menu close button, and navigation menu
const menuOpen = document.querySelector("#menuOpen");
const menuClose = document.querySelector("#menuClose");
const navMenu = document.querySelector("#navMenu");

// Add event listener to the menu open button and remove the "hidden" class and add the flex class, animate the menu open
menuOpen.addEventListener("click", () => {
	navMenu.classList.remove("hidden");
	navMenu.classList.add("flex");
	navMenu.classList.add("fade-in");

	// Remove the "fade-in" class after the animation is complete
	setTimeout(() => {
		navMenu.classList.remove("fade-in");
	}, 500);
});

// Add event listener to the menu close button with Tailwind CSS class "flex" and add the "hidden" class, animate the menu close
menuClose.addEventListener("click", () => {
	navMenu.classList.remove("flex");
	navMenu.classList.add("hidden");
	navMenu.classList.add("fade-out");

	// Remove the "fade-out" class after the animation is complete
	setTimeout(() => {
		navMenu.classList.remove("fade-out");
	}, 500);
});
