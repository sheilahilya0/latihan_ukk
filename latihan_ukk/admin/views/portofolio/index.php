<?php
<link rel="stylesheet" href="<?= baseurl;?>/asset/css/style.css" />
<img src="<?= baseurl;?>/asset/img/gg.jpg" alt="" class="img-thumbnail image rounded-circle" />

class Portofolio extends Controller
{
    public function index()
    {
$this->view('portofolio/index');
    }
}
