function handleMenu() {
	const mobButton = document.querySelector("#mobmenu");
	mobButton.addEventListener("click", () => {
		const bodyEl = document.querySelector("body");
		const navEl = document.querySelector(".nav-container");

		if (!bodyEl.classList.contains("menu-open")) {
			bodyEl.classList.add("menu-open");
			navEl.classList.add("visible");
		} else {
			bodyEl.classList.remove("menu-open");
			setTimeout(() => {
				navEl.classList.remove("visible");
			}, 1000);
		}
	});
}
document.addEventListener("DOMContentLoaded", handleMenu);
