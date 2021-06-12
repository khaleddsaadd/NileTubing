
<script>
    function createPDF() {
        var sTable = document.getElementById('resData').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<title>Reservations List</title>');   
        win.document.write(style);         
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);     
        win.document.write('</body></html>');

        win.document.close(); 	

        win.print();    
    }
</script> 

<?php 
require_once(__ROOT__ . "controller/Controller.php");
class AdminReservationsConroller extends Controller
{
    function printpdf()
    {
        echo '<script>
            createPDF();
        </script>';
    }
}
?>