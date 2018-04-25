<div class="container">

 <div class="row">
       <div class="col-md-12"> 
        <div class="jumbotron">
    

    <h2>You are in the View: application/view/song/edit.php</h2>
    <!-- add song form -->
</div>
  
        <h2 style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Edit <?php echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?></h2>

        <div class="jumbotron" style="margin-top: 20px;">
        <form action="<?php echo URL; ?>songs/updatesong" method="POST">
            <div class="form-group">
            <label>Artist</label>
            <input autofocus type="text" name="artist" value="<?php echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?>" required class="form-control" />
        </div>
         <div class="form-group">
            <label>Track</label>
            <input type="text" name="track" value="<?php echo htmlspecialchars($song->track, ENT_QUOTES, 'UTF-8'); ?>" required class="form-control" />
        </div>
         <div class="form-group">
            <label>Link</label>
            <input type="text" name="link" value="<?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?>" class="form-control"/>
        </div>
            <input type="hidden" name="song_id" value="<?php echo htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_song" value="Update" class="btn btn-primary btn-block" />
        </form>
    </div>
    </div>
</div>
   


