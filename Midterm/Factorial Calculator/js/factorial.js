function fact() {
  const input = document.getElementById("numberInput").value;
  const number = parseInt(input);
  let n = number;
  let result = 1;

  for (let i = n; i >= 1; i--) {
    result = result * n;
    n = n - 1;
  }

  document.getElementById("resultScreen").innerText = `${result}`;
}
