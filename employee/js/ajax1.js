<script>
function open1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("nav1").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "header/nav.html", true);
  xhttp.send();
};
</script>