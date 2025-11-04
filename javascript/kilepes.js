export function initLogout() {
  const logoutLink = document.querySelector('a[data-oldal="kilep"]');

  if (logoutLink) {
    logoutLink.addEventListener("click", (event) => {
      event.preventDefault();
      if (confirm("Biztosan ki akarsz lépni?")) {
        window.location.href = "logout.php";
      }
    });
  }
}

