<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Our Pic to Guess. Show the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Guess.php
 *
 * ------------------------------------------------------------------------
 */
class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The first pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get('4');
        $authors = array();
        $authors[] = array('who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where'],'what' => $source['what']);
        $this->data = array_merge($authors[0], $this->data);

        $this->render();
    }

}

/* End of file Guess.php */
/* Location: application/controllers/Guess.php */