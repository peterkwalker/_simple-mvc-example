<style type="text/css">
    table.dataTable {
    /* border-collapse: separate  */
    border-collapse: collapse !important;
}
.container-fluid  {
    padding-left: 0px !important;
    padding-right: 0px !important;
}
</style>


<div class="container">

 <div class="row">
       <div class="col-md-12">

        <?php if(isset($_GET['action'])){?>
<div class="alert alert-success alert-message" role="alert">
 <h4><i class="fas fa-exclamation-triangle"></i> <?php echo $_GET['action']?></h4>
</div>
<?php } ?>


        <div class="jumbotron">
    <h3>You are in the View: application/view/song/index.php</h3>
</div>

  <!-- add song form -->

      <h2 style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Add a song</h2>

    <div class="jumbotron" style="margin-top: 20px;">
       
        <form action="<?php echo URL; ?>songs/addsong" method="POST">
            <div class="form-group">
            <label>Artist</label>
            <input type="text" name="artist" value="" required class="form-control" />
        </div>
         <div class="form-group">
            <label>Track</label>
            <input type="text" name="track" value="" required class="form-control" />
        </div>
         <div class="form-group">
            <label>Link</label>
            <input type="text" name="link" value="" class="form-control" />
        </div>
            <input type="submit" name="submit_add_song" value="Save" class="btn btn-primary btn-block" />
        </form>
    </div>
</div>
</div>
    <!-- main content output 
   
        <h3 style="font-weight: bold;">Total songs (data from second model)</h3>
      
            <?php echo $amount_of_songs; ?>
       -->
   
     <div class="row">
       <div class="col-md-12"> 
       
        <h2 style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">List of songs</h2>

    </div>
</div>

       <table id="example" class="table table-striped dt-responsive" style="width:100%;">
            <thead>
            <tr>
                <th>Id</th>
                <th>Artist</th>
                <th>Track</th>
                <th>Link</th>
                <th></th>
            
            </tr>
            </thead>
            <tbody>
            <?php foreach ($songs as $song) { ?>
                <tr>
                    <td><?php if (isset($song->id)) echo htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($song->artist)) echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($song->track)) echo htmlspecialchars($song->track, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <?php if (isset($song->link)) { ?>
                            <a href="<?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?>" target="_blank"><?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?></a>
                        <?php } ?>
                    </td>
                    <td nowrap="nowrap">
                         <div style="text-align: right;">
                            <a class="btn btn-primary btn-sm" href="<?php echo URL . 'songs/deletesong/' . htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>">Delete</a> <a class="btn btn-primary btn-sm" href="<?php echo URL . 'songs/editsong/' . htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>">Edit</a> <a class="btn btn-primary btn-sm" href="<?php echo URL . 'songs/view/' . htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>">View</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
  
   
</div>

