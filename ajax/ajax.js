<script type="text/javascript">
    $(document).ready(function() {
        $('#insertbtn').click(function(e){
            e.preventDefault();
            $.ajax({
                method:"post",
                url:"insertdata.php",
                data:$('#vedformid').serialize(),
                datatype:"text", 
                success: function(response){
                    $('#messagedisplay').text(response);
                }
            })
        })
    });
    
</script>
