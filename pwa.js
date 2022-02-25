if ("serviceWorker" in navigator) {
    window.addEventListener("load", () => {
      navigator.serviceWorker
        .register("/serviceWorker.js")
        .then(res => console.log("service worker registered"))
        .catch(err => console.log("service worker not registered", err));
    });
  }
  const showJoke = async () => {
    const res = await fetch("/index.php");
    const joke = await res.json();
    document.body.innerHTML = joke.value.joke;
  };
  document.addEventListener("DOMContentLoaded", showJoke);