import anime from "animejs/lib/anime.es.js";

document.addEventListener("DOMContentLoaded", function () {
	const elements = document.querySelectorAll(".scroll-fade");
	const observer = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.intersectionRatio > 0) {
					const target = entry.target;
					const delay = target.getAttribute("data-delay") || 200;
					const scroll = target.getAttribute("data-scroll") || "10%";
					const animeOptions = {
						targets: target,
						translateY: [100, 0],
						opacity: [0, 1],
						duration: 1000,
						delay: delay,
						easing: "easeInOutQuad",
						scroll: scroll,
					};
					anime.timeline().add(animeOptions);
					observer.unobserve(target);
				}
			});
		},
		{ threshold: [0, 1] }
	);
	elements.forEach((element) => {
		observer.observe(element);
	});
});
