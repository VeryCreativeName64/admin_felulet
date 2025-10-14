import { oldallista } from "./oldallista.js";

export default class Oldalak {
  
  #navLinks;
  #szElem;

  constructor(szElem) {
    this.#szElem = document.querySelector(szElem);
    this.#navLinks = document.querySelectorAll(".also a, .alsobb a");

    this.#navLinks.forEach((link) => {
      link.addEventListener("click", (evt) => {

      });
    });

    const currentKulcs = this.getCurrentKulcs();
    this.switchBetolt(currentKulcs);
  }


  getCurrentKulcs() {
    const path = window.location.pathname.toLowerCase();
    if (path.endsWith("admin.php")) return "adat";
    if (path.endsWith("alapbeallitas.php")) return "tartalom";
    if (path.endsWith("menupont.php")) return "menupont";
    if (path.endsWith("rovat.php")) return "rovat";
    if (path.endsWith("cikk.php")) return "cikk";
    if (path.endsWith("cikkszerkesztes.php")) return "cikkszerkeszt";
    if (path.endsWith("menuszerkeszt.php")) return "menuszerkeszt";

    return oldallista[0].kulcs;
  }

  switchBetolt(kulcs) {

    console.log('Betöltött kulcs:', kulcs);
    const oldal = oldallista.find(item => item.kulcs === kulcs);
    if (oldal) {
      this.#szElem.innerHTML = oldal.oldal_htmlje;
    } else {

      this.#szElem.innerHTML = oldallista[0].oldal_htmlje;
    }
  }
}
