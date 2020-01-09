$(document).ready( function () {
    var table = $('#migrate').DataTable({
    lengthMenu: [[5, 10, 20, -1], [5, 10, 20, "All"]],
    pageLength: 5
  });
} );
