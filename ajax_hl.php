<div id="req">
<h2>update page</h2>
<button type="button" onclick="sendtoa()">send</button>
<div>
<script>
function sendtoa()
{
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("req").innerHTML = this.responseText;
    }
  }
  xhttp.open("GET", "ajax_pp.php", true);
  xhttp.send();
}
</script>
