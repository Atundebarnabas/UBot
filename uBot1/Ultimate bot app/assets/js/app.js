if("serviceWorker" in navigator)
{
      window.addEventListener("load", function() {
            navigator.serviceWorker
            .register("../sw.js")
            .then(res => console.log("service worker registered!"))
            .catch(err => console.log("servce worker not registered", err))
      })
}