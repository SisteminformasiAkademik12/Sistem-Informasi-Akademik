<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script type="text/javascript">


  function submitData(action){
    $(document).ready(function(){
      var data = {
        action: action,
        Id_Nilai: $("#Id_Nilai").val(),
        NamaSiswa: $("#NamaSiswa").val(),
        Nilaia: $("#Nilaia").val(),
        Nilaib: $("#Nilaib").val(),
        Nilaic: $("#Nilaic").val(),
        Nilaid: $("#Nilaid").val(),
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Deleted Successfully"){
            $("#"+action).css("display", "none");
          }
        }
      });
    });
  }
</script>
