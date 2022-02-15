<?php  

include('includes/conn.php');
include('includes/header.php');










?>



Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, fugiat, quibusdam, optio placeat neque ex ipsum earum repellendus consequuntur totam eligendi voluptas saepe perferendis vel veniam, adipisci delectus. Aut ullam ducimus amet, tempora quae eaque fugit dolore ab, cupiditate sapiente commodi unde! Totam distinctio consectetur soluta ex eum, id minima porro qui esse veritatis facilis consequatur ut, explicabo cum enim fugiat aliquid natus pariatur dolore cupiditate. Tenetur dolorem quasi voluptas ipsum, blanditiis doloremque iure alias porro itaque quisquam a. Quaerat ex non iusto aliquid ipsam eligendi tenetur reiciendis aspernatur neque officiis blanditiis ullam veniam accusamus quibusdam voluptas id delectus alias praesentium, mollitia velit fugit ad nulla. Tenetur, dolorem cum! Nostrum voluptates alias laborum ab eaque, similique consectetur in incidunt, unde id dolor sunt, impedit veritatis suscipit quidem aut at sed! Ipsum consectetur asperiores officia eum laboriosam perspiciatis nemo esse vel, earum eius voluptatem explicabo odit repellat quia, suscipit ipsa reprehenderit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, fugiat, quibusdam, optio placeat neque ex ipsum earum repellendus consequuntur totam eligendi voluptas saepe perferendis vel veniam, adipisci delectus. Aut ullam ducimus amet, tempora quae eaque fugit dolore ab, cupiditate sapiente commodi unde! Totam distinctio consectetur soluta ex eum, id minima porro qui esse veritatis facilis consequatur ut, explicabo cum enim fugiat aliquid natus pariatur dolore cupiditate. Tenetur dolorem quasi voluptas ipsum, blanditiis doloremque iure alias porro itaque quisquam a. Quaerat ex non iusto aliquid ipsam eligendi tenetur reiciendis aspernatur neque officiis blanditiis ullam veniam accusamus quibusdam voluptas id delectus alias praesentium, mollitia velit fugit ad nulla. Tenetur, dolorem cum! Nostrum voluptates alias laborum ab eaque, similique consectetur in incidunt, unde id dolor sunt, impedit veritatis suscipit quidem aut at sed! Ipsum consectetur asperiores officia eum laboriosam perspiciatis nemo esse vel, earum eius voluptatem explicabo odit repellat quia, suscipit ipsa reprehenderit!
        
        
       <br>
       <br>
       <br>
       

<form method='post' action='' enctype="multipart/form-data">
    <input type="file" id='files' name="files[]" multiple><br>
    <input type="button" id="submit" value='Upload'>
</form>

<!-- Preview -->
<div id='preview'></div>   
        
        
        
        
        
        
        

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <style type="text/css">
            #preview img{
                margin: 5px;
            }
        </style>
        
    <script>
        $(document).ready(function(){

            $('#submit').click(function(){

                var form_data = new FormData();

                // Read selected files
                var totalfiles = document.getElementById('files').files.length;
                for (var index = 0; index < totalfiles; index++) {
                    form_data.append("files[]", document.getElementById('files').files[index]);
                    $('#preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
                }

                // AJAX request
                $.ajax({
                    url: 'upload.php', 
                    type: 'post',
                    data: form_data,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        alert("Uploaded SuccessFully");
                        console.log(response);

                    }
                });

            });

        });
    </script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } ); 
        </script>

<?php include('includes/footer.php')  ?>