const cookieConsent = document.querySelector(".cookie-consent");
const COOKIE_CONSENT_KEY = "cookie_consent_accepted";

// Check if user already accepted cookie consent
const isCookieConsentAccepted = () => {
	return !!getCookie(COOKIE_CONSENT_KEY);
};

// Set cookie for accepted consent
const setCookieConsent = () => {
	setCookie(COOKIE_CONSENT_KEY, true, 365);
};

// Get the value of a cookie
const getCookie = (name) => {
	const cookieMatch = document.cookie.match(
		new RegExp("(^| )" + name + "=([^;]+)")
	);
	if (cookieMatch) {
		return cookieMatch[2];
	}
	return null;
};

// Set the value of a cookie
const setCookie = (name, value, days) => {
	const expires = new Date();
	expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
	document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
};

// Close the cookie consent popup
const closeCookieConsent = () => {
	cookieConsent.classList.add("animate-fade-out");
	setTimeout(() => {
		cookieConsent.classList.remove("animate-fade-out");
		cookieConsent.classList.add("hidden");
	}, 500);
};

// Show cookie consent popup if not already accepted
if (!isCookieConsentAccepted()) {
	cookieConsent.classList.remove("hidden");
}

// Hide cookie consent popup if user scrolls down 40% of the page
const scrollThreshold = Math.floor(window.innerHeight * 0.4);
let scrollTimeout;

window.addEventListener("scroll", () => {
	if (scrollTimeout) {
		clearTimeout(scrollTimeout);
	}
	scrollTimeout = setTimeout(() => {
		if (
			!isCookieConsentAccepted() &&
			window.pageYOffset > scrollThreshold
		) {
			setCookieConsent();
			closeCookieConsent();
		}
	}, 200);
});
