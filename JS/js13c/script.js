var l = prompt('Taille en largeur: ')
var h = prompt('Taille en hauteur: ')
document.write('-- triangle rectangle en ' + l + 'x' + h + ' -- <br><br>')
for ( x = 0; x < h; x++) {
    for( i = 0; i < l; i++) {
        document.write(("*").repeat(x))
        document.write("<br>")
    }
    document.write("<br>")
}