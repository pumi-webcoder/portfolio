function createCircularText(elementId) {
  const container = document.getElementById(elementId);
  const text = container.textContent.trim() + " ";
  const chars = text.split("");
  const angleStep = 360 / chars.length;
  container.textContent = "";
  chars.forEach((char, index) => {
    const span = document.createElement("span");
    span.textContent = char;
    span.style.transform = `rotate(${index * angleStep}deg)`;
    container.appendChild(span);
  });
}
document.addEventListener("DOMContentLoaded", function () {
  createCircularText("circular-text");
});
