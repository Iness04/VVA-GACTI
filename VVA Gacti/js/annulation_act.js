function remove() {
    var elem = document.getElementById('contenu');
    elem.parentNode.removeChild(elem);
    elem.style.display="none";
    elem.style.visibility="hidden";
}