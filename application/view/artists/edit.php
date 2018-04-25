<div class="container">

 <div class="row">
       <div class="col-md-12"> 
        <div class="jumbotron">
    

    <h2>You are in the View: application/view/artists/edit.php</h2>
    <!-- add song form -->
</div>
  
        <h2 style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Edit <?php echo htmlspecialchars($artist->artistname, ENT_QUOTES, 'UTF-8'); ?></h2>

        <div class="jumbotron" style="margin-top: 20px;">
        <form action="<?php echo URL; ?>artists/updateartist" method="POST">
            <div class="form-group">
            <label>Artist</label>
            <input autofocus type="text" name="artistname" value="<?php echo htmlspecialchars($artist->artistname, ENT_QUOTES, 'UTF-8'); ?>" required class="form-control" />
        </div>
        
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($artist->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_artist" value="Update" class="btn btn-primary btn-block" />
        </form>
    </div>
    </div>
</div>
   


