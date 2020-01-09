$(document).ready(function() {
     var table = $('#mig').DataTable( {
       lengthMenu: [[5, 10, 20, -1], [5, 10, 20, "All"]],
       pageLength: 5,
         processing: true,
         serverSide: true,
         ajax: {
           url: "dist/server_processing2.php",
           type: "POST"
         }

     });
 });
