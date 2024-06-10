import './bootstrap';
// import "@fortawesome/fontawesome-free/scss/fontawesome.scss";
// import "@fortawesome/fontawesome-free/scss/brands.scss";
// import "@fortawesome/fontawesome-free/scss/regular.scss";
// import "@fortawesome/fontawesome-free/scss/solid.scss";

import DataTable from "datatables.net-dt";
window.DataTable = DataTable;

$(document).ready(function(){
    $("#dataTables").DataTable();
    $(".dataTables").DataTable();
});
