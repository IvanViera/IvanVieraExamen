/* COMPLETE THIS WITH JS AND AJAX*/

function quote_Events (){
        

    var quote=  document.getElementById("minimalistic_input").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("info_panel").value = this.responseText;
        }
    };
    xmlhttp.open("GET", "main.php?sentece=" + quote, true);
    xmlhttp.send();
}