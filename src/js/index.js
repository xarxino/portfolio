/***********************************************************************
The index.js file is the entry point of the application. It imports and 
initializes all necessary modules and dependencies. 
***********************************************************************/

// Import the main CSS file for the application
// This file is processed by webpack and the resulting CSS is injected into the page
import "../css/main.css";

// Import Feather Icons
const feather = require("feather-icons");
feather.replace({ "stroke-width": 1.25 });

// Import the menu module
import "./modules/menu";

// Import the modifyContent module
import "./modules/modifyContent";