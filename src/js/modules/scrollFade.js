document.addEventListener("DOMContentLoaded", () => {
	const elements = document.querySelectorAll(".scroll-fade");
	const options = {
		rootMargin: "100px 0px",
		threshold: 0.5,
	};
	const observer = new IntersectionObserver((entries) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				const target = entry.target;
				const delay = target.getAttribute("data-delay") || 200;
				const scroll = target.getAttribute("data-scroll") || "10%";
				target.style.transition = `opacity 1s ease ${delay}ms, transform 1s ease ${delay}ms`;
				target.style.opacity = 1;
				target.style.transform = `translateY(-${scroll})`;
				observer.unobserve(target);
			}
		});
	}, options);
	elements.forEach((element) => {
		observer.observe(element);
	});
});
