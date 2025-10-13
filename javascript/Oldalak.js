import { oldallista } from "./oldallista.js";

export default class Oldalak {
  #szElem;
  #lista;
  constructor(szElem) {
    this.#szElem = szElem;
    this.megjelenit();
    this.#lista = oldallista;
  }

  megjelenit() {
    let html = "";
    switch (this.esemenykezelo()) {
      case value:
        html = this.#lista[1];
        this.#szElem.insertAdjacentHTML("beforeend", html);
        break;

        case value:
        html = this.#lista[2];
        this.#szElem.insertAdjacentHTML("beforeend", html);
        break;

        case value:
        html = this.#lista[3];
        this.#szElem.insertAdjacentHTML("beforeend", html);
        break;

        case value:
        html = this.#lista[4];
        this.#szElem.insertAdjacentHTML("beforeend", html);
        break;

        case value:
        html = this.#lista[5];
        this.#szElem.insertAdjacentHTML("beforeend", html);
        break;

        case value:
        html = this.#lista[6];
        this.#szElem.insertAdjacentHTML("beforeend", html);
        break;

      default:
        html = this.#lista[0];
        this.#szElem.insertAdjacentHTML("beforeend", html);
        break;
    }
  }

  esemenykezelo() {
    this.aktElem.addEventListener("click", () => {
      window.dispatchEvent();
    });
  }
}
