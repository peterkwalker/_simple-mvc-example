<?php

/**
 * Class genres
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Genres extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
   public function index()
    {
        // getting all songs and amount of songs
        $genres = $this->model->getAllGenres();
        //$amount_of_songs = $this->model->getAmountOfSongs();

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/genres/index.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * ACTION: addArtist
     * This method handles what happens when you move to http://yourproject/songs/addartists
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a song" form on songs/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function addGenre()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_add_genre"])) {
            // do addSong() in model/model.php
            $this->model->addGenre($_POST["genre"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'genres/index?action=The genre has been added to the database.');
    }

     /**
     * ACTION: deleteGenre
     * This method handles what happens when you move to http://yourproject/songs/deletesong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a song" button on songs/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $song_id Id of the to-delete song
     */
    public function deleteGenre($id)
    {
        // if we have an id of a song that should be deleted
        if (isset($id)) {
            // do deleteSong() in model/model.php
            $this->model->deleteGenre($id);
        }

        // where to go after song has been deleted
        header('location: ' . URL . 'genres/index?action=The genre has been deleted from the database.');
    }

    /**
     * ACTION: editGenre
     * This method handles what happens when you move to http://yourproject/songs/editsong
     * @param int $song_id Id of the to-edit song
     */
    public function editGenre($id)
    {
        // if we have an id of a song that should be edited
        if (isset($id)) {
            // do getSong() in model/model.php
            $genre = $this->model->getGenre($id);

            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $song easily
            require APP . 'view/_templates/header.php';
            require APP . 'view/genres/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            // redirect user to songs index page (as we don't have a song_id)
            header('location: ' . URL . 'genres/index');
        }
    }

    /**
     * ACTION: updateGenre
     * This method handles what happens when you move to http://yourproject/songs/updatesong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "update a song" form on songs/edit
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function updateGenre()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_update_genre"])) {
            // do updateSong() from model/model.php
            $this->model->updateGenre($_POST["genre"], $_POST['id']);
        }

        // where to go after song has been added
        header('location: ' . URL . 'genres/index?action=The genre has been updated.');
    }

}
