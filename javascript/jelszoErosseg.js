export function checkPasswordStrengthFrontend(password) {
  const minLength = 8;
  const hasLower = /[a-z]/.test(password);
  const hasUpper = /[A-Z]/.test(password);
  const hasDigit = /[0-9]/.test(password);
  const hasSpecial = /[^A-Za-z0-9]/.test(password);

  const problems = [];

  if (password.length < minLength) problems.push("legalább 8 karakter");
  if (!hasLower) problems.push("kisbetű");
  if (!hasUpper) problems.push("nagybetű");
  if (!hasDigit) problems.push("szám");
  if (!hasSpecial) problems.push("speciális karakter");

  return {
    valid: problems.length === 0,
    message:
      problems.length === 0
        ? "Erős jelszó ✔"
        : "Hiányzik: " + problems.join(", ") + "."
  };
}

export function initPasswordStrength() {
  document.addEventListener("input", (e) => {
    if (e.target.id === "newpass" || e.target.id === "newpass2") {
      const pass1 = document.getElementById("newpass")?.value || "";
      const pass2 = document.getElementById("newpass2")?.value || "";
      const help = document.getElementById("passHelp");
      if (!help) return;

      const result = checkPasswordStrengthFrontend(pass1);

      let text = result.message;
      if (pass1 && pass2 && pass1 !== pass2) {
        text += " A két új jelszó nem egyezik!";
      }

      help.textContent = text;
      help.style.color = result.valid && pass1 === pass2 ? "green" : "red";
    }
  });
}
