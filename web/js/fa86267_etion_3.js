$(document).ready(function () {
  filterFunctie();
});

function filterFunctie() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("etion-tabel-filter");
  filter = input.value.toUpperCase();
  table = document.getElementById("etion-tabel");
  tr = table.getElementsByTagName("tr");
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    td1 = tr[i].getElementsByTagName("td")[1];

    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td1.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}