var input = document.getElementById("message");
var result = document.getElementById("result");

window.onload = function() {
    grabmsg();
}

function scrolldown() {
    result.scrollTop = result.scrollHeight;
}

input.addEventListener("keypress", function(e) {
    var key = e.which || e.keyCode;
    if ((key == 13) && input.value.trim().length > 0) {
        xhr = new XMLHttpRequest();
        xhr.open('POST', '../send.php', true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.onload = function() {
            if (this.status == 200) {
                document.getElementById("result").innerHTML = this.responseText;
                scrolldown();
            }
        }

        params = "message=" + input.value.trim();
        xhr.send(params);

        input.value = "";
    }
});

function grabmsg() {
    xhr = new XMLHttpRequest();

    xhr.open('GET', '../retrieve.php', true);

    xhr.onload = function() {
        if (this.status == 200) {
            if (this.responseText !== '') {
                document.getElementById("result").innerHTML = this.responseText;
                if ((result.scrollTop + 37) > (result.scrollHeight - result.clientHeight)) {
                    scrolldown();
                }
            }
        }
    }

    xhr.send();
}

setInterval(function() {
    grabmsg();
}, 750);