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
    <h3>You are in the View: application/view/genres/index.php</h3>
</div>

<h2 style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Add a genre</h2>

    <div class="jumbotron" style="margin-top: 20px;">
       
        <form action="<?php echo URL; ?>genres/addgenre" method="POST">
            <div class="form-group">
            <label>Genre</label>
            <input type="text" name="genre" value="" required class="form-control" />
        </div>
        
      
            <input type="submit" name="submit_add_genre" value="Save" class="btn btn-primary btn-block" />
        </form>
    </div>
</div>
</div>


 <div class="row">
       <div class="col-md-12"> 
       
        <h2 style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">List of genres</h2>
    <table id="example" class="table table-striped dt-responsive" style="width:100%;">
            <thead>
            <tr>
                <th>Id</th>
                <th>Genre</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($genres as $genre) { ?>
                <tr>
                    <td><?php if (isset($genre->id)) echo htmlspecialchars($genre->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($genre->genre)) echo htmlspecialchars($genre->genre, ENT_QUOTES, 'UTF-8'); ?></td>
                     <td nowrap="nowrap">
                        <div style="text-align: right;">
                        <a class="btn btn-primary btn-sm" href="<?php echo URL . 'genres/deletegenre/' . htmlspecialchars($genre->id, ENT_QUOTES, 'UTF-8'); ?>">Delete</a> <a class="btn btn-primary btn-sm" href="<?php echo URL . 'genres/editgenre/' . htmlspecialchars($genre->id, ENT_QUOTES, 'UTF-8'); ?>">Edit</a>
                    </div></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
   </div>
   
</div>
