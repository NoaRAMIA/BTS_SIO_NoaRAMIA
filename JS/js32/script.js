w("<table>")
    w("<tr><th>Angle</th>")
    w("<th>Sinus</th>")
    w("<th>Cosinus</th></tr>")
    for (var degre = 0; degre<=90; degre = degre + 10) {
        w("<tr>")
        w("<td>"+ degre +"</td>")

        rad = degre * Math.PI/180
        w("<td>"+ Math.sin(rad).toFixed(2) +"</td>")
        w("<td>"+ Math.cos(rad).toFixed(2) +"</td>")

        w("</tr>")
    }

w("</table>")


function w(txt) {
    document.write(txt)
}