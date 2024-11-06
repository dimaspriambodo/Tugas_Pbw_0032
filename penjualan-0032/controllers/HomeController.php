<?php
class HomeController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function index() {
        include 'views/home/index.php';
    }
}
