$(document).ready(function() {
     var table = $('#rev').DataTable( {
       lengthMenu: [[5, 10, 20, -1], [5, 10, 20, "All"]],
       pageLength: 5,
         processing: true,
         serverSide: true,
         ajax: {
           url: "dist/server_processing.php",
           type: "POST"
         }
     });
 });
