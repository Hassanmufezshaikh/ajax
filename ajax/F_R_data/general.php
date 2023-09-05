
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ajax/style.css">
    <script rel="stylesheet" src="jquery-3.3.1.js"> </script>
</head>
<body>
<div class="container" >
<div class="  formpost text-center mt-5" style="color: blue;">

<input type="text" class="searchbox" name="id" id="id" >
<input type="submit" class="searchbtn" name="searchdata" id="searchdata" value="SEARCH">

<form method="post" id="vedformid">


</form>
</div>
</div>

<script>
    $(document).ready(function(){
    $('#searchdata').click(function(e){
        e.preventDefault();

        let id =$('input[name=id]').val();
        $.ajax({
            method: "post",
            url: "fetchintextbox.php",// give proper file
            data: {
                "search_post_btn":1,
                "id":id,
            },
            dataType: "html",
            success: function(response){
                $('#vedformid').html(response); // give the <form> id 
            }
        });


    });
});


</script>
    
</body>
</html>





