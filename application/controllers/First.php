<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Our Navbar to First. Show the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The first pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        $authors = array();
        $authors[] = array('who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where'],'what' => $source['what']);
        $this->data = array_merge($authors[0], $this->data);

        $this->render();
    }

    function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get('1');
        $authors = array();
        $authors[] = array('who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where'],'what' => $source['what']);
        $this->data = array_merge($authors[0], $this->data);

        $this->render();
    }

}

/* End of file First.php */
/* Location: application/controllers/First.php */