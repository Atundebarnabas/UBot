const notstaticUbot = "Ubot-v1"
const assets = [
      "/",
      "assets/css/signin.css",
      "assets/css/signup.css",
      "assets/css/auth.css",
      "assets/js/app.js",
      "assets/js/jquery-2.js",
      "pages/auth.php",
      "pages/signin.php",
      "pages/signup.php",
      "pages/splashscreen.php",
      "index.php",
      "assets/buildimg/d1.png",
      "assets/buildimg/trading.jpg",
      
]

self.addEventListener("install", installEvent => {
      installEvent.waitUntil(
            caches.open(notstaticUbot).then(cache => {
                  cache.addAll(assets)
            })
      )
})

self.addEventListener("fetch", fetchEvent => {
      fetchEvent.respondWith(
        caches.match(fetchEvent.request).then(res => {
          return res || fetch(fetchEvent.request)
        })
      )
    })