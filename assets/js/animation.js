// Archivo: assets/js/animations.js

document.addEventListener("DOMContentLoaded", () => {
  const reveals = document.querySelectorAll(".reveal");

  const revealOnScroll = () => {
    for (let i = 0; i < reveals.length; i++) {
      const windowHeight = window.innerHeight;
      const elementTop = reveals[i].getBoundingClientRect().top;
      const elementVisible = 100;

      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  };

  window.addEventListener("scroll", revealOnScroll);

  // Iniciar efecto antorcha si existe la clase
  flickerEffect();
});

// Efecto de iluminación tipo "antorcha"
const flickerEffect = () => {
  const torch = document.querySelector(".torch-effect");
  if (!torch) return;

  setInterval(() => {
    const intensity = 0.7 + Math.random() * 0.3;
    const red = Math.floor(180 + Math.random() * 75); // rojo más dominante
    const green = Math.floor(30 + Math.random() * 40); // menos verde
    const blue = Math.floor(10 + Math.random() * 20); // azul leve para calidez
    const blur = Math.floor(25 + Math.random() * 25);

    torch.style.boxShadow = `0 0 ${blur}px rgba(${red}, ${green}, ${blue}, ${intensity})`;
  }, 100);
};