<?php
$str = "Hello      a";
echo $str;
?>


<div id="re">
<h2>refreshed page</h2>
<button onclick="sendto()">send</button>
<div>
<script>
function sendto()
{
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("re").innerHTML = this.responseText;
    }
  }
  xhttp.open("GET", "ajax_pp.php", true);
  xhttp.send();
}
</script>
