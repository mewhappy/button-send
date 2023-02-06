<button type="button" class="btn btn-block btn-warning  btn-xs" 
onclick="return history_data('<?php echo $id; ?>', 'A', '<?php echo $status; ?>')">
<i class="fas fa-history"></i> History</button>



          <script>
          function history_data(id, grad, status) {
           window.location = "process.php?id=" + id + "&grad=" + grad + "&status=" + status;
         }
        </script>
