const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
        localStorage.setItem("dark-mode", "enabled");
        modeText.innerText = "Modo claro";
    } else {
        localStorage.setItem("dark-mode", "disabled");
        modeText.innerText = "Modo oscuro";
    }
});

// Check for saved preference and apply it
if (localStorage.getItem("dark-mode") === "enabled") {
    body.classList.add("dark");
    modeText.innerText = "Modo claro";
} else {
    modeText.innerText = "Modo oscuro";
}
