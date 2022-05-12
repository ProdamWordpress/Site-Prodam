let vetor = [0, 260, 70, 140, 320, 200];
let c = document.getElementById("containerIndicators").children;

for (let i = 0; i <= c.length; i++) {
  let number = "rotate(" + (vetor[i]) + "deg)";
  c[i].getElementsByClassName("indicatorImage")[0].style.transform = number;
}
