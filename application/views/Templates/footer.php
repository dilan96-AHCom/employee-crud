
<!-- jquery CDN -->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<!-- Bootstrap js CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 



<!-- js link (//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js) for jquery datatable. get from "datatables.net" website -->
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<!-- The following CSS library files are loaded for use to provide the styling of the table. already included both in header section.
        https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css
        https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css  -->
 
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

<!--follow https://datatables.net/examples/styling/bootstrap4  for more on datatable with bootstrap-->


<!--For Data table -->
<script>
    $(document).ready( function () {
        $('#infotable1').DataTable(); // like in CSS, here we use # to define a id & use . to define a class
    } );
</script>



<!-- For confirm the deletion   -->
<script>

    $(document).ready(function(){

        $('.confirm-delete').click(function (e){
            e.preventDefault();

            //alert("are you sure");  just used here to confirm this function called is successful or not
            confirmDialog = confirm("Are you sure? do you wanna delete ?");
            if(confirmDialog)
            {
                var id = $(this).val();
                //alert(id);  just used here to confirm this function called is successful or not
                $.ajax({
                    type: "DELETE",  //if you use POST method, then replace the 'DELETE' method in route as 'POST'
                    url:"confirmdelete/"+id,
                    //data:"",
                    //dataType:"",
                    success: function (response){
                        alert("Deleted Successfully");
                        window.location.reload();
                    }
                });
            }
        });

    });

</script>



</body>
</html>