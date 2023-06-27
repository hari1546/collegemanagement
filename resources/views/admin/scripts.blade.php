 <!-- General JS Scripts -->
 <script src="admin/assets/js/app.min.js"></script>
 <!-- JS Libraies -->
 <script src="admin/assets/bundles/apexcharts/apexcharts.min.js"></script>
 <!-- Page Specific JS File -->
 <script src="admin/assets/js/page/index.js"></script>
 <!-- Template JS File -->
 <script src="admin/assets/js/scripts.js"></script>
 <!-- Custom JS File -->
 <script src="admin/assets/js/custom.js"></script>
 <script src="assets/js/jquery.tableToExcel.js"></script>

 <script>
     
$('#category').change(function(){
let catvalue=$(this).val();
if(catvalue != ""){
$('.none').hide();
if(catvalue == 'Events'){
$('.ev').show();
$('.ev1').show();
}
else if(catvalue == 'Other Event'){
$('.none').show();
}
else{
$('.sw').show();
$('.ev1').show();

}
}
else{
$('.none').hide();
}

});

$('#excel').click(function () {
        $('#example').table2excel({
            exclude: ".excludeThisClass",
    name: "Report",
    filename: "report.xls", // do include extension
        });
});

 function categoryFuction1(){
    var cat= document.getElementById("category").value;

    if(cat=="Events"){

    
        document.getElementById("none-1").style.display="block";             
        document.getElementById("none-2").style.display="none";
        document.getElementById("none-1").style.color="red";         
           
    }
    if(cat=="seminar"){
        document.getElementById("none-2").style.display="block";
        document.getElementById("none-3").style.display="none";
        document.getElementById("none-1").style.display="block";             

    }
    if(cat=="webinar"){
        document.getElementById("none-2").style.display="block";
        document.getElementById("none-3").style.display="none";
        document.getElementById("none-1").style.display="block";
    }
    if(cat=="GuestLecture"){
        document.getElementById("none-2").style.display="block";
        document.getElementById("none-3").style.display="none";
        document.getElementById("none-1").style.display="block";
    }
    if(cat=="Other Event"){
        document.getElementById("none-2").style.display="block";
        document.getElementById("none-3").style.display="block";
        document.getElementById("none-1").style.display="block";
        
    }
    if(cat=="Select The Category"){
        document.getElementById("none-2").style.display="none";
        document.getElementById("none-3").style.display="none";
        document.getElementById("none-1").style.display="none";
        
    }
 }

</script>
