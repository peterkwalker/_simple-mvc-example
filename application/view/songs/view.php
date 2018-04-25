<div class="container">

 <div class="row">
       <div class="col-md-12"> 
        <div class="jumbotron">
    <h3>You are in the View: application/view/song/view.php</h3>
</div>
    <!-- add song form -->

      <h2 style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;"><?php echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?></h2>


      <h3>Track : <?php echo htmlspecialchars($song->track, ENT_QUOTES, 'UTF-8'); ?></h3>
      <h3>Link : <a href="<?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?>" target="_blank"><?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?></a></h3>


  </div>
</div>
</div>
    

       
     