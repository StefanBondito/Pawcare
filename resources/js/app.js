import './bootstrap';
import $ from 'jquery';
import 'datatables.net-dt';

// require("datatables.net-dt");
$(document).ready(function(){
    $("#dataTables").DataTable();

});

var myModal = new bootstrap.Modal(document.getElementById("alert"));
myModal.show();
