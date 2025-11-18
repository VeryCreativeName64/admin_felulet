import Oldalak from "./Oldalak.js";
import { initLogout } from "./kilepes.js";
import { initPasswordStrength } from "./passwordStrength.js";

document.addEventListener("DOMContentLoaded", () => {
  new Oldalak("article");
  initLogout();
  initPasswordStrength(); 
});