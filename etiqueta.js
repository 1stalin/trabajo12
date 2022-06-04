

function documentoCargado(){


let bodypadre = document.getElementById('padre');
    let list = bodypadre.getElementsByTagName('li');
    document.getElementById('resultado').innerText=list.length;


let bodyppp = document.getElementById('padre');
    let label = bodypadre.getElementsByTagName('div');
    document.getElementById('resultad').innerText=label.length;

let bodypp = document.getElementById('padre');
    let button = bodypadre.getElementsByTagName('button');
    document.getElementById('resu').innerText=button.length;


let bodyp = document.getElementById('padre');
    let eti = bodypadre.getElementsByTagName('h1');
    document.getElementById('res').innerText=eti.length;


}

document.addEventListener('DOMContentLoaded', documentoCargado, false);
