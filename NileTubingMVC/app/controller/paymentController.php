<script>
    function createPDF() {
        var sTable = document.getElementById('prr').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "#title{padding-left:27%; font-size:30px; color:red; font-weight:bolder;}";
        style = style + "label{ font-size:20px; color:#1F3351; font-weight:bold;}";
        style = style + ".first{ font-size:20px; color:black; font-weight:bolder;}";
        style = style + ".tprice{ font-size:30px; padding-left:30%; color:red; font-weight:bolder;}";




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
class paymentController extends Controller
{
    function insert()
    {
        $FName = $_REQUEST["FName"];
        $LName = $_REQUEST["LName"];
        $mobile = $_REQUEST["Mobile"];
        $PaymentMethod = $_REQUEST["payment"];
        $mail = $_REQUEST["Mail"];
        $RideID = $_GET['id'];
        $Date=$_GET['date'];
        $Quantity = $_GET['q'];
        $this->model->SaveReservation($FName,$LName,$mobile,$PaymentMethod,$mail,$RideID,$Date,$Quantity);
    }
    function decreaseQuantity()
    {
        $RideID = $_GET['id'];
        $Quantity = $_GET['q'];
        $Date=$_GET['date'];
        $arrayName = explode("/",$Date,2);
        $DateOnly = $arrayName[0];
        $TimeOnly = $arrayName[1];

        $CDate = date("Y-m-d", strtotime($DateOnly));
        $CTime = date("H:i:s",strtotime($TimeOnly));
        $this->model->decrease($RideID,$Quantity,$CDate,$CTime);

    }
}
?>