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
    <h3>You are in the View: application/view/artists/index.php</h3>
</div>


<h2 style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Add an artist</h2>

    <div class="jumbotron" style="margin-top: 20px;">
       
        <form action="<?php echo URL; ?>artists/addartists" method="POST">
            <div class="form-group">
            <label>Artist</label>
            <input type="text" name="artist" value="" required class="form-control" />
        </div>
        
      
            <input type="submit" name="submit_add_artists" value="Save" class="btn btn-primary btn-block" />
        </form>
    </div>






</div>
</div>


 <div class="row">
       <div class="col-md-12"> 
       
        <h2 style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">List of artists</h2>
    <table id="example" class="table table-striped dt-responsive" style="width:100%;">
            <thead>
            <tr>
                <th>Id</th>
                <th>Artist</th>
                <th></th>
               
              </tr>
            </thead>
            <tbody>
            <?php foreach ($artists as $artist) { ?>
                <tr>
                    <td><?php if (isset($artist->id)) echo htmlspecialchars($artist->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($artist->artistname)) echo htmlspecialchars($artist->artistname, ENT_QUOTES, 'UTF-8'); ?></td>
                     <td nowrap="nowrap">
                        <div style="text-align: right;">
                        <a class="btn btn-primary btn-sm" href="<?php echo URL . 'artists/deleteartists/' . htmlspecialchars($artist->id, ENT_QUOTES, 'UTF-8'); ?>">Delete</a> <a class="btn btn-primary btn-sm" href="<?php echo URL . 'artists/editartists/' . htmlspecialchars($artist->id, ENT_QUOTES, 'UTF-8'); ?>">Edit</a>
                    </div></td>
                 
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
   </div>
   
</div>
