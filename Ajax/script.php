<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script type="text/javascript">


  function submitData(action){
    $(document).ready(function(){
      var data = {
        action: action,
        Id_Kelas: $("#Id_Kelas").val(),
        NamaKelas: $("#NamaKelas").val(),
        JamMulai: $("#JamMulai").val(),
        JamSelesai: $("#JamSelesai").val(),
        NamaGuru: $("#NamaGuru").val(),
        Pelajaran: $("#Pelajaran").val(),
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
