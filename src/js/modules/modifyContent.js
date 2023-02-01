/***********************************************************************
This file is responsible for modifying the content of the body by adding 
an id to heading tags using a sanitized version of the heading text.
***********************************************************************/

if (document.querySelector(".single-post")) {
	// Define a function that sanitizes a given text by converting it to lowercase, removing non-word or non-space characters, replacing consecutive whitespaces or dashes with a single dash, and removing dashes from the start and end of the text.
	const sanitizeTitleWithDashes = (text) => {
		return text
			.toLowerCase()
			.replace(/[^\w\s-]/gi, "")
			.replace(/[\s-]+/g, "-")
			.replace(/^-+|-+$/g, "");
	};

	// Define a function that modifies the content by replacing <h1-6> tags with <h1-6> tags that have an id attribute equal to the sanitized text between the tags
	const modifyTheContent = (content) => {
		content = content.replace(
			/<h([1-6])>(.*?)<\/h[1-6]>/gi,
			(matches, level, text) => {
				const id = sanitizeTitleWithDashes(text);
				return `<h${level} id="${id}">${text}</h${level}>`;
			}
		);
		return content;
	};

	// Add an event listener to the DOMContentLoaded event that calls the modifyTheContent function on the body element's innerHTML
	document.addEventListener("DOMContentLoaded", () => {
		document.querySelector("body").innerHTML = modifyTheContent(
			document.querySelector("body").innerHTML
		);
	});
}
