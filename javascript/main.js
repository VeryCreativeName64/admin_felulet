import Oldalak from "./Oldalak.js";
import { initLogout } from "./kilepes.js";
import { initPasswordStrength } from "./jelszoErosseg.js";

document.addEventListener("DOMContentLoaded", () => {
  new Oldalak("article");
  initLogout();
  initPasswordStrength(); 

  const pn = document.getElementById("profilnev");
    if (pn && window.loggedInName) {
        pn.textContent = window.loggedInName;
    }
});