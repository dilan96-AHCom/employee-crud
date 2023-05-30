
<!-- jquery CDN -->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> -->

<!-- Bootstrap js CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 


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

