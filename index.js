var timezone = (Intl.DateTimeFormat().resolvedOptions().timeZone);

var form = document.getElementById("form");

form.addEventListener("submit", function() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'settimezone.php?timezone=' + timezone, true);

    xhr.send();
});