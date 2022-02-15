<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Webslesson Demo - Ajax Live Data Search using Jquery PHP MySql</title>
        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
        <!--Style CSS-->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <br />
            <br />
            <br />
            <h2 align="center">Ajax Live Data Search using Jquery PHP MySql</h2><br />
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Search</span>
                    <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
                </div>
            </div>
            <br />
            <div id="result"></div>
        </div>
        <div style="clear:both"></div>
        <br />

        <br />
        <br />
        <br />









        <!--jQuery-3.2.1-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!--Bootstrap JS-->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

<script>
    $(document).ready(function(){
        load_data();
        function load_data(query)
        {
            $.ajax({
                url:"fetch.php",
                method:"post",
                data:{query:query},
                success:function(data)
                {
                    $('#result').html(data);
                }
            });
        }

        $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
                load_data(search);
            }
            else
            {
                load_data();			
            }
        });
    });
</script>





