<!DOCTYPE html>
<html>
<body>
<div id="dem">
<h2>The XMLHttpRequest Object</h2>
<button type="button" onclick="load()">Request data</button>
</div>
<script>
function load() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("dem").innerHTML = this.responseText;
    }
  }
  xhttp.open("GET", "ajax_hl.php", true);
  xhttp.send();
}
</script>
</body>
</html>
