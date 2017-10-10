window.onload = function() {
    let input = document.getElementsByClassName("inputField");
    for(let i = 0; i < input.length; i++) {
        input[i].addEventListener('focusout', function() {
            if(input[i].value != "") {
                input[i].parentNode.childNodes[3].style.top = "-50px";
            } else {
                input[i].parentNode.childNodes[3].style.top = "-23px";
            }
        }, false);
        input[i].addEventListener('focusin', function() {
            input[i].parentNode.childNodes[3].style.top = "-50px";
        }, false);
    }
}
