import Oldalak from "./Oldalak.js";
import { initLogout } from "./kilepes.js";

document.addEventListener("DOMContentLoaded", () => {
  new Oldalak("article");
  initLogout();
});