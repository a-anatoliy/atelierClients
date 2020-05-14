const text = document.querySelector('.fancy')
const strText = text.textContent;
const splitText = strText.split("")
text.textContent = '';
for (let i=0; i<splitText.length; i++) {
    text.innerHTML += "<span class='tmpClass'>" + splitText[i] +'</span>'
}

let char=0;
let timer=setInterval(onTick,50);

function onTick() {
    const span = text.querySelectorAll('span')[char];
    // span.classList.remove('.fancy');
    span.classList.add('fade-logo');
    console.log(span)
    char++;
    if (char === splitText.length) {
        complete();
        return;
    }
}

function complete () {
    clearInterval(timer);
    timer = null;
}
