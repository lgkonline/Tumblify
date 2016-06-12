function formatUrl(url) {
    url = url.replace(/\/\//g, "/");
    var splitted = url.split("/");
    var retVal = splitted[0] + "//" + splitted[1] + "/image/" + splitted[3];

    return retVal;
}

var form = document.getElementById("form");
var urlInput = document.getElementById("url");

form.addEventListener("submit", function(e) {
   e.preventDefault();
   window.open(formatUrl(urlInput.value));
   urlInput.select();
});

form.addEventListener("reset", function() {
    urlInput.select();
})