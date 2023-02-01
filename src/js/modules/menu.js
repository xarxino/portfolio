/***********************************************************************
This file handles the navigation menu's toggle by adding/removing classes 
on button clicks.Uses querySelector to grab the menu open, close and 
navigation element by id.
***********************************************************************/

// Declare variables for the menu open button, menu close button, and navigation menu
const menuOpen = document.querySelector("#menuOpen")
const menuClose = document.querySelector("#menuClose")
const navMenu = document.querySelector("#navMenu")

// Add an event listener to the menu open button that removes the "hidden" class and adds the "flex" class to the navigation menu when clicked
menuOpen.addEventListener("click", () => {
    navMenu.classList.remove("hidden")
    navMenu.classList.add("flex")
})

// Add an event listener to the menu close button that removes the "flex" class and adds the "hidden" class to the navigation menu when clicked
menuClose.addEventListener("click", () => {
    navMenu.classList.remove("flex")
    navMenu.classList.add("hidden")
})
