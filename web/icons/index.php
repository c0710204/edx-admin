<?php
// icons font awesom
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../../vendor/autoload.php";

use Admin\AdminLte;
use Admin\EdxApp;
use Admin\EdxCourse;

$admin = new AdminLte("../config.json");
$admin->path("../");
$admin->title("Icons FA");

$edxapp = new EdxApp("../config.json");

echo $admin->printPrivate();
?>

<section class="content-header">
    <h1><i class='fa fa-book'></i> Icons <small><a href='http://fortawesome.github.io/Font-Awesome/icons/'>http://fortawesome.github.io/Font-Awesome/icons/</a></small></h1>
</section>

<div class="container">
  
  <div class="row">
  
  </div>

  <div class="row">

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-adjust

      <span class="muted">[&amp;#xf042;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-adn

      <span class="muted">[&amp;#xf170;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-align-center

      <span class="muted">[&amp;#xf037;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-align-justify

      <span class="muted">[&amp;#xf039;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-align-left

      <span class="muted">[&amp;#xf036;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-align-right

      <span class="muted">[&amp;#xf038;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ambulance

      <span class="muted">[&amp;#xf0f9;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-anchor

      <span class="muted">[&amp;#xf13d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-android

      <span class="muted">[&amp;#xf17b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-double-down

      <span class="muted">[&amp;#xf103;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-double-left

      <span class="muted">[&amp;#xf100;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-double-right

      <span class="muted">[&amp;#xf101;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-double-up

      <span class="muted">[&amp;#xf102;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-down

      <span class="muted">[&amp;#xf107;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-left

      <span class="muted">[&amp;#xf104;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-right

      <span class="muted">[&amp;#xf105;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-up

      <span class="muted">[&amp;#xf106;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-apple

      <span class="muted">[&amp;#xf179;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-archive

      <span class="muted">[&amp;#xf187;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-down

      <span class="muted">[&amp;#xf0ab;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-left

      <span class="muted">[&amp;#xf0a8;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-o-down

      <span class="muted">[&amp;#xf01a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-o-left

      <span class="muted">[&amp;#xf190;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-o-right

      <span class="muted">[&amp;#xf18e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-o-up

      <span class="muted">[&amp;#xf01b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-right

      <span class="muted">[&amp;#xf0a9;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-up

      <span class="muted">[&amp;#xf0aa;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-down

      <span class="muted">[&amp;#xf063;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-left

      <span class="muted">[&amp;#xf060;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-right

      <span class="muted">[&amp;#xf061;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-up

      <span class="muted">[&amp;#xf062;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrows

      <span class="muted">[&amp;#xf047;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrows-alt

      <span class="muted">[&amp;#xf0b2;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrows-h

      <span class="muted">[&amp;#xf07e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrows-v

      <span class="muted">[&amp;#xf07d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-asterisk

      <span class="muted">[&amp;#xf069;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-automobile
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1b9;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-backward

      <span class="muted">[&amp;#xf04a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ban

      <span class="muted">[&amp;#xf05e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bank
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf19c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bar-chart-o

      <span class="muted">[&amp;#xf080;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-barcode

      <span class="muted">[&amp;#xf02a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bars

      <span class="muted">[&amp;#xf0c9;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-beer

      <span class="muted">[&amp;#xf0fc;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-behance

      <span class="muted">[&amp;#xf1b4;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-behance-square

      <span class="muted">[&amp;#xf1b5;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bell

      <span class="muted">[&amp;#xf0f3;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bell-o

      <span class="muted">[&amp;#xf0a2;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bitbucket

      <span class="muted">[&amp;#xf171;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bitbucket-square

      <span class="muted">[&amp;#xf172;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bitcoin
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf15a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bold

      <span class="muted">[&amp;#xf032;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bolt

      <span class="muted">[&amp;#xf0e7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bomb

      <span class="muted">[&amp;#xf1e2;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-book

      <span class="muted">[&amp;#xf02d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bookmark

      <span class="muted">[&amp;#xf02e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bookmark-o

      <span class="muted">[&amp;#xf097;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-briefcase

      <span class="muted">[&amp;#xf0b1;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-btc

      <span class="muted">[&amp;#xf15a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bug

      <span class="muted">[&amp;#xf188;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-building

      <span class="muted">[&amp;#xf1ad;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-building-o

      <span class="muted">[&amp;#xf0f7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bullhorn

      <span class="muted">[&amp;#xf0a1;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bullseye

      <span class="muted">[&amp;#xf140;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cab
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1ba;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-calendar

      <span class="muted">[&amp;#xf073;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-calendar-o

      <span class="muted">[&amp;#xf133;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-camera

      <span class="muted">[&amp;#xf030;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-camera-retro

      <span class="muted">[&amp;#xf083;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-car

      <span class="muted">[&amp;#xf1b9;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-down

      <span class="muted">[&amp;#xf0d7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-left

      <span class="muted">[&amp;#xf0d9;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-right

      <span class="muted">[&amp;#xf0da;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-square-o-down

      <span class="muted">[&amp;#xf150;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-square-o-left

      <span class="muted">[&amp;#xf191;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-square-o-right

      <span class="muted">[&amp;#xf152;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-square-o-up

      <span class="muted">[&amp;#xf151;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-up

      <span class="muted">[&amp;#xf0d8;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-certificate

      <span class="muted">[&amp;#xf0a3;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chain
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0c1;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chain-broken

      <span class="muted">[&amp;#xf127;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-check

      <span class="muted">[&amp;#xf00c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-check-circle

      <span class="muted">[&amp;#xf058;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-check-circle-o

      <span class="muted">[&amp;#xf05d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-check-square

      <span class="muted">[&amp;#xf14a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-check-square-o

      <span class="muted">[&amp;#xf046;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-circle-down

      <span class="muted">[&amp;#xf13a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-circle-left

      <span class="muted">[&amp;#xf137;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-circle-right

      <span class="muted">[&amp;#xf138;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-circle-up

      <span class="muted">[&amp;#xf139;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-down

      <span class="muted">[&amp;#xf078;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-left

      <span class="muted">[&amp;#xf053;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-right

      <span class="muted">[&amp;#xf054;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-up

      <span class="muted">[&amp;#xf077;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-child

      <span class="muted">[&amp;#xf1ae;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-circle

      <span class="muted">[&amp;#xf111;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-circle-o

      <span class="muted">[&amp;#xf10c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-circle-o-notch

      <span class="muted">[&amp;#xf1ce;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-circle-thin

      <span class="muted">[&amp;#xf1db;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-clipboard

      <span class="muted">[&amp;#xf0ea;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-clock-o

      <span class="muted">[&amp;#xf017;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cloud

      <span class="muted">[&amp;#xf0c2;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cloud-download

      <span class="muted">[&amp;#xf0ed;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cloud-upload

      <span class="muted">[&amp;#xf0ee;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cny
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf157;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-code

      <span class="muted">[&amp;#xf121;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-code-fork

      <span class="muted">[&amp;#xf126;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-codepen

      <span class="muted">[&amp;#xf1cb;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-coffee

      <span class="muted">[&amp;#xf0f4;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cog

      <span class="muted">[&amp;#xf013;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cogs

      <span class="muted">[&amp;#xf085;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-columns

      <span class="muted">[&amp;#xf0db;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-comment

      <span class="muted">[&amp;#xf075;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-comment-o

      <span class="muted">[&amp;#xf0e5;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-comments

      <span class="muted">[&amp;#xf086;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-comments-o

      <span class="muted">[&amp;#xf0e6;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-compass

      <span class="muted">[&amp;#xf14e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-compress

      <span class="muted">[&amp;#xf066;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-copy
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0c5;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-credit-card

      <span class="muted">[&amp;#xf09d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-crop

      <span class="muted">[&amp;#xf125;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-crosshairs

      <span class="muted">[&amp;#xf05b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-css3

      <span class="muted">[&amp;#xf13c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cube

      <span class="muted">[&amp;#xf1b2;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cubes

      <span class="muted">[&amp;#xf1b3;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cut
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0c4;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cutlery

      <span class="muted">[&amp;#xf0f5;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-dashboard
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0e4;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-database

      <span class="muted">[&amp;#xf1c0;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-dedent
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf03b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-delicious

      <span class="muted">[&amp;#xf1a5;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-desktop

      <span class="muted">[&amp;#xf108;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-deviantart

      <span class="muted">[&amp;#xf1bd;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-digg

      <span class="muted">[&amp;#xf1a6;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-dollar
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf155;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-dot-circle-o

      <span class="muted">[&amp;#xf192;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-download

      <span class="muted">[&amp;#xf019;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-dribbble

      <span class="muted">[&amp;#xf17d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-dropbox

      <span class="muted">[&amp;#xf16b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-drupal

      <span class="muted">[&amp;#xf1a9;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-edit
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf044;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-eject

      <span class="muted">[&amp;#xf052;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ellipsis-h

      <span class="muted">[&amp;#xf141;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ellipsis-v

      <span class="muted">[&amp;#xf142;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-empire

      <span class="muted">[&amp;#xf1d1;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-envelope

      <span class="muted">[&amp;#xf0e0;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-envelope-o

      <span class="muted">[&amp;#xf003;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-envelope-square

      <span class="muted">[&amp;#xf199;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-eraser

      <span class="muted">[&amp;#xf12d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-eur

      <span class="muted">[&amp;#xf153;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-euro
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf153;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-exchange

      <span class="muted">[&amp;#xf0ec;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-exclamation

      <span class="muted">[&amp;#xf12a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-exclamation-circle

      <span class="muted">[&amp;#xf06a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-exclamation-triangle

      <span class="muted">[&amp;#xf071;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-expand

      <span class="muted">[&amp;#xf065;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-external-link

      <span class="muted">[&amp;#xf08e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-external-link-square

      <span class="muted">[&amp;#xf14c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-eye

      <span class="muted">[&amp;#xf06e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-eye-slash

      <span class="muted">[&amp;#xf070;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-facebook

      <span class="muted">[&amp;#xf09a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-facebook-square

      <span class="muted">[&amp;#xf082;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-fast-backward

      <span class="muted">[&amp;#xf049;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-fast-forward

      <span class="muted">[&amp;#xf050;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-fax

      <span class="muted">[&amp;#xf1ac;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-female

      <span class="muted">[&amp;#xf182;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-fighter-jet

      <span class="muted">[&amp;#xf0fb;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file

      <span class="muted">[&amp;#xf15b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-archive-o

      <span class="muted">[&amp;#xf1c6;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-audio-o

      <span class="muted">[&amp;#xf1c7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-code-o

      <span class="muted">[&amp;#xf1c9;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-excel-o

      <span class="muted">[&amp;#xf1c3;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-image-o

      <span class="muted">[&amp;#xf1c5;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-movie-o
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1c8;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-o

      <span class="muted">[&amp;#xf016;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-pdf-o

      <span class="muted">[&amp;#xf1c1;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-photo-o
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1c5;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-picture-o
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1c5;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-powerpoint-o

      <span class="muted">[&amp;#xf1c4;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-sound-o
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1c7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-text

      <span class="muted">[&amp;#xf15c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-text-o

      <span class="muted">[&amp;#xf0f6;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-video-o

      <span class="muted">[&amp;#xf1c8;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-word-o

      <span class="muted">[&amp;#xf1c2;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-zip-o
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1c6;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-files-o

      <span class="muted">[&amp;#xf0c5;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-film

      <span class="muted">[&amp;#xf008;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-filter

      <span class="muted">[&amp;#xf0b0;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-fire

      <span class="muted">[&amp;#xf06d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-fire-extinguisher

      <span class="muted">[&amp;#xf134;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-flag

      <span class="muted">[&amp;#xf024;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-flag-checkered

      <span class="muted">[&amp;#xf11e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-flag-o

      <span class="muted">[&amp;#xf11d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-flash
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0e7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-flask

      <span class="muted">[&amp;#xf0c3;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-flickr

      <span class="muted">[&amp;#xf16e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-floppy-o

      <span class="muted">[&amp;#xf0c7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-folder

      <span class="muted">[&amp;#xf07b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-folder-o

      <span class="muted">[&amp;#xf114;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-folder-open

      <span class="muted">[&amp;#xf07c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-folder-open-o

      <span class="muted">[&amp;#xf115;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-font

      <span class="muted">[&amp;#xf031;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-forward

      <span class="muted">[&amp;#xf04e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-foursquare

      <span class="muted">[&amp;#xf180;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-frown-o

      <span class="muted">[&amp;#xf119;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gamepad

      <span class="muted">[&amp;#xf11b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gavel

      <span class="muted">[&amp;#xf0e3;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gbp

      <span class="muted">[&amp;#xf154;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ge
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1d1;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gear
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf013;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gears
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf085;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gift

      <span class="muted">[&amp;#xf06b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-git

      <span class="muted">[&amp;#xf1d3;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-git-square

      <span class="muted">[&amp;#xf1d2;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-github

      <span class="muted">[&amp;#xf09b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-github-alt

      <span class="muted">[&amp;#xf113;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-github-square

      <span class="muted">[&amp;#xf092;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gittip

      <span class="muted">[&amp;#xf184;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-glass

      <span class="muted">[&amp;#xf000;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-globe

      <span class="muted">[&amp;#xf0ac;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-google

      <span class="muted">[&amp;#xf1a0;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-google-plus

      <span class="muted">[&amp;#xf0d5;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-google-plus-square

      <span class="muted">[&amp;#xf0d4;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-graduation-cap

      <span class="muted">[&amp;#xf19d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-group
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0c0;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-h-square

      <span class="muted">[&amp;#xf0fd;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hacker-news

      <span class="muted">[&amp;#xf1d4;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hand-o-down

      <span class="muted">[&amp;#xf0a7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hand-o-left

      <span class="muted">[&amp;#xf0a5;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hand-o-right

      <span class="muted">[&amp;#xf0a4;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hand-o-up

      <span class="muted">[&amp;#xf0a6;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hdd-o

      <span class="muted">[&amp;#xf0a0;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-header

      <span class="muted">[&amp;#xf1dc;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-headphones

      <span class="muted">[&amp;#xf025;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-heart

      <span class="muted">[&amp;#xf004;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-heart-o

      <span class="muted">[&amp;#xf08a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-history

      <span class="muted">[&amp;#xf1da;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-home

      <span class="muted">[&amp;#xf015;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hospital-o

      <span class="muted">[&amp;#xf0f8;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-html5

      <span class="muted">[&amp;#xf13b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-image
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf03e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-inbox

      <span class="muted">[&amp;#xf01c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-indent

      <span class="muted">[&amp;#xf03c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-info

      <span class="muted">[&amp;#xf129;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-info-circle

      <span class="muted">[&amp;#xf05a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-inr

      <span class="muted">[&amp;#xf156;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-instagram

      <span class="muted">[&amp;#xf16d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-institution
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf19c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-italic

      <span class="muted">[&amp;#xf033;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-joomla

      <span class="muted">[&amp;#xf1aa;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-jpy

      <span class="muted">[&amp;#xf157;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-jsfiddle

      <span class="muted">[&amp;#xf1cc;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-key

      <span class="muted">[&amp;#xf084;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-keyboard-o

      <span class="muted">[&amp;#xf11c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-krw

      <span class="muted">[&amp;#xf159;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-language

      <span class="muted">[&amp;#xf1ab;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-laptop

      <span class="muted">[&amp;#xf109;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-leaf

      <span class="muted">[&amp;#xf06c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-legal
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0e3;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-lemon-o

      <span class="muted">[&amp;#xf094;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-level-down

      <span class="muted">[&amp;#xf149;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-level-up

      <span class="muted">[&amp;#xf148;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-life-bouy
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1cd;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-life-ring

      <span class="muted">[&amp;#xf1cd;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-life-saver
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1cd;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-lightbulb-o

      <span class="muted">[&amp;#xf0eb;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-link

      <span class="muted">[&amp;#xf0c1;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-linkedin

      <span class="muted">[&amp;#xf0e1;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-linkedin-square

      <span class="muted">[&amp;#xf08c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-linux

      <span class="muted">[&amp;#xf17c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-list

      <span class="muted">[&amp;#xf03a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-list-alt

      <span class="muted">[&amp;#xf022;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-list-ol

      <span class="muted">[&amp;#xf0cb;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-list-ul

      <span class="muted">[&amp;#xf0ca;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-location-arrow

      <span class="muted">[&amp;#xf124;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-lock

      <span class="muted">[&amp;#xf023;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-long-arrow-down

      <span class="muted">[&amp;#xf175;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-long-arrow-left

      <span class="muted">[&amp;#xf177;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-long-arrow-right

      <span class="muted">[&amp;#xf178;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-long-arrow-up

      <span class="muted">[&amp;#xf176;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-magic

      <span class="muted">[&amp;#xf0d0;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-magnet

      <span class="muted">[&amp;#xf076;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mail-forward
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf064;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mail-reply
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf112;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mail-reply-all
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf122;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-male

      <span class="muted">[&amp;#xf183;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-map-marker

      <span class="muted">[&amp;#xf041;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-maxcdn

      <span class="muted">[&amp;#xf136;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-medkit

      <span class="muted">[&amp;#xf0fa;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-meh-o

      <span class="muted">[&amp;#xf11a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-microphone

      <span class="muted">[&amp;#xf130;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-microphone-slash

      <span class="muted">[&amp;#xf131;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-minus

      <span class="muted">[&amp;#xf068;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-minus-circle

      <span class="muted">[&amp;#xf056;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-minus-square

      <span class="muted">[&amp;#xf146;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-minus-square-o

      <span class="muted">[&amp;#xf147;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mobile

      <span class="muted">[&amp;#xf10b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mobile-phone
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf10b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-money

      <span class="muted">[&amp;#xf0d6;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-moon-o

      <span class="muted">[&amp;#xf186;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mortar-board
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf19d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-music

      <span class="muted">[&amp;#xf001;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-navicon
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0c9;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-openid

      <span class="muted">[&amp;#xf19b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-outdent

      <span class="muted">[&amp;#xf03b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pagelines

      <span class="muted">[&amp;#xf18c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paper-plane

      <span class="muted">[&amp;#xf1d8;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paper-plane-o

      <span class="muted">[&amp;#xf1d9;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paperclip

      <span class="muted">[&amp;#xf0c6;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paragraph

      <span class="muted">[&amp;#xf1dd;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paste
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0ea;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pause

      <span class="muted">[&amp;#xf04c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paw

      <span class="muted">[&amp;#xf1b0;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pencil

      <span class="muted">[&amp;#xf040;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pencil-square

      <span class="muted">[&amp;#xf14b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pencil-square-o

      <span class="muted">[&amp;#xf044;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-phone

      <span class="muted">[&amp;#xf095;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-phone-square

      <span class="muted">[&amp;#xf098;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-photo
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf03e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-picture-o

      <span class="muted">[&amp;#xf03e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pied-piper

      <span class="muted">[&amp;#xf1a7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pied-piper-alt

      <span class="muted">[&amp;#xf1a8;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pied-piper-square
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1a7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pinterest

      <span class="muted">[&amp;#xf0d2;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pinterest-square

      <span class="muted">[&amp;#xf0d3;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-plane

      <span class="muted">[&amp;#xf072;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-play

      <span class="muted">[&amp;#xf04b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-play-circle

      <span class="muted">[&amp;#xf144;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-play-circle-o

      <span class="muted">[&amp;#xf01d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-plus

      <span class="muted">[&amp;#xf067;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-plus-circle

      <span class="muted">[&amp;#xf055;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-plus-square

      <span class="muted">[&amp;#xf0fe;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-plus-square-o

      <span class="muted">[&amp;#xf196;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-power-off

      <span class="muted">[&amp;#xf011;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-print

      <span class="muted">[&amp;#xf02f;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-puzzle-piece

      <span class="muted">[&amp;#xf12e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-qq

      <span class="muted">[&amp;#xf1d6;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-qrcode

      <span class="muted">[&amp;#xf029;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-question

      <span class="muted">[&amp;#xf128;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-question-circle

      <span class="muted">[&amp;#xf059;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-quote-left

      <span class="muted">[&amp;#xf10d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-quote-right

      <span class="muted">[&amp;#xf10e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ra
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1d0;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-random

      <span class="muted">[&amp;#xf074;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rebel

      <span class="muted">[&amp;#xf1d0;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-recycle

      <span class="muted">[&amp;#xf1b8;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-reddit

      <span class="muted">[&amp;#xf1a1;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-reddit-square

      <span class="muted">[&amp;#xf1a2;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-refresh

      <span class="muted">[&amp;#xf021;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-renren

      <span class="muted">[&amp;#xf18b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-reorder
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0c9;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-repeat

      <span class="muted">[&amp;#xf01e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-reply

      <span class="muted">[&amp;#xf112;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-reply-all

      <span class="muted">[&amp;#xf122;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-retweet

      <span class="muted">[&amp;#xf079;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rmb
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf157;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-road

      <span class="muted">[&amp;#xf018;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rocket

      <span class="muted">[&amp;#xf135;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rotate-left
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0e2;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rotate-right
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf01e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rouble
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf158;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rss

      <span class="muted">[&amp;#xf09e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rss-square

      <span class="muted">[&amp;#xf143;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rub

      <span class="muted">[&amp;#xf158;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ruble
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf158;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rupee
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf156;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-save
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0c7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-scissors

      <span class="muted">[&amp;#xf0c4;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-search

      <span class="muted">[&amp;#xf002;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-search-minus

      <span class="muted">[&amp;#xf010;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-search-plus

      <span class="muted">[&amp;#xf00e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-send
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1d8;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-send-o
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1d9;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-share

      <span class="muted">[&amp;#xf064;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-share-alt

      <span class="muted">[&amp;#xf1e0;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-share-alt-square

      <span class="muted">[&amp;#xf1e1;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-share-square

      <span class="muted">[&amp;#xf14d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-share-square-o

      <span class="muted">[&amp;#xf045;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-shield

      <span class="muted">[&amp;#xf132;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-shopping-cart

      <span class="muted">[&amp;#xf07a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sign-in

      <span class="muted">[&amp;#xf090;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sign-out

      <span class="muted">[&amp;#xf08b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-signal

      <span class="muted">[&amp;#xf012;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sitemap

      <span class="muted">[&amp;#xf0e8;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-skype

      <span class="muted">[&amp;#xf17e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-slack

      <span class="muted">[&amp;#xf198;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sliders

      <span class="muted">[&amp;#xf1de;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-smile-o

      <span class="muted">[&amp;#xf118;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort

      <span class="muted">[&amp;#xf0dc;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-alpha-asc

      <span class="muted">[&amp;#xf15d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-alpha-desc

      <span class="muted">[&amp;#xf15e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-amount-asc

      <span class="muted">[&amp;#xf160;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-amount-desc

      <span class="muted">[&amp;#xf161;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-asc

      <span class="muted">[&amp;#xf0de;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-desc

      <span class="muted">[&amp;#xf0dd;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-down
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0dd;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-numeric-asc

      <span class="muted">[&amp;#xf162;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-numeric-desc

      <span class="muted">[&amp;#xf163;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-up
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0de;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-soundcloud

      <span class="muted">[&amp;#xf1be;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-space-shuttle

      <span class="muted">[&amp;#xf197;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-spinner

      <span class="muted">[&amp;#xf110;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-spoon

      <span class="muted">[&amp;#xf1b1;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-spotify

      <span class="muted">[&amp;#xf1bc;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-square

      <span class="muted">[&amp;#xf0c8;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-square-o

      <span class="muted">[&amp;#xf096;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-stack-exchange

      <span class="muted">[&amp;#xf18d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-stack-overflow

      <span class="muted">[&amp;#xf16c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-star

      <span class="muted">[&amp;#xf005;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-star-half

      <span class="muted">[&amp;#xf089;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-star-half-empty
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf123;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-star-half-full
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf123;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-star-half-o

      <span class="muted">[&amp;#xf123;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-star-o

      <span class="muted">[&amp;#xf006;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-steam

      <span class="muted">[&amp;#xf1b6;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-steam-square

      <span class="muted">[&amp;#xf1b7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-step-backward

      <span class="muted">[&amp;#xf048;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-step-forward

      <span class="muted">[&amp;#xf051;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-stethoscope

      <span class="muted">[&amp;#xf0f1;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-stop

      <span class="muted">[&amp;#xf04d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-strikethrough

      <span class="muted">[&amp;#xf0cc;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-stumbleupon

      <span class="muted">[&amp;#xf1a4;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-stumbleupon-circle

      <span class="muted">[&amp;#xf1a3;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-subscript

      <span class="muted">[&amp;#xf12c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-suitcase

      <span class="muted">[&amp;#xf0f2;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sun-o

      <span class="muted">[&amp;#xf185;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-superscript

      <span class="muted">[&amp;#xf12b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-support
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1cd;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-table

      <span class="muted">[&amp;#xf0ce;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tablet

      <span class="muted">[&amp;#xf10a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tachometer

      <span class="muted">[&amp;#xf0e4;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tag

      <span class="muted">[&amp;#xf02b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tags

      <span class="muted">[&amp;#xf02c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tasks

      <span class="muted">[&amp;#xf0ae;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-taxi

      <span class="muted">[&amp;#xf1ba;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tencent-weibo

      <span class="muted">[&amp;#xf1d5;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-terminal

      <span class="muted">[&amp;#xf120;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-text-height

      <span class="muted">[&amp;#xf034;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-text-width

      <span class="muted">[&amp;#xf035;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-th

      <span class="muted">[&amp;#xf00a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-th-large

      <span class="muted">[&amp;#xf009;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-th-list

      <span class="muted">[&amp;#xf00b;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-thumb-tack

      <span class="muted">[&amp;#xf08d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-thumbs-down

      <span class="muted">[&amp;#xf165;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-thumbs-o-down

      <span class="muted">[&amp;#xf088;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-thumbs-o-up

      <span class="muted">[&amp;#xf087;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-thumbs-up

      <span class="muted">[&amp;#xf164;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ticket

      <span class="muted">[&amp;#xf145;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-times

      <span class="muted">[&amp;#xf00d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-times-circle

      <span class="muted">[&amp;#xf057;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-times-circle-o

      <span class="muted">[&amp;#xf05c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tint

      <span class="muted">[&amp;#xf043;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-toggle-down
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf150;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-toggle-left
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf191;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-toggle-right
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf152;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-toggle-up
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf151;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-trash-o

      <span class="muted">[&amp;#xf014;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tree

      <span class="muted">[&amp;#xf1bb;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-trello

      <span class="muted">[&amp;#xf181;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-trophy

      <span class="muted">[&amp;#xf091;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-truck

      <span class="muted">[&amp;#xf0d1;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-try

      <span class="muted">[&amp;#xf195;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tumblr

      <span class="muted">[&amp;#xf173;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tumblr-square

      <span class="muted">[&amp;#xf174;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-turkish-lira
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf195;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-twitter

      <span class="muted">[&amp;#xf099;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-twitter-square

      <span class="muted">[&amp;#xf081;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-umbrella

      <span class="muted">[&amp;#xf0e9;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-underline

      <span class="muted">[&amp;#xf0cd;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-undo

      <span class="muted">[&amp;#xf0e2;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-university

      <span class="muted">[&amp;#xf19c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-unlink
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf127;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-unlock

      <span class="muted">[&amp;#xf09c;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-unlock-alt

      <span class="muted">[&amp;#xf13e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-unsorted
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf0dc;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-upload

      <span class="muted">[&amp;#xf093;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-usd

      <span class="muted">[&amp;#xf155;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-user

      <span class="muted">[&amp;#xf007;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-user-md

      <span class="muted">[&amp;#xf0f0;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-users

      <span class="muted">[&amp;#xf0c0;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-video-camera

      <span class="muted">[&amp;#xf03d;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-vimeo-square

      <span class="muted">[&amp;#xf194;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-vine

      <span class="muted">[&amp;#xf1ca;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-vk

      <span class="muted">[&amp;#xf189;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-volume-down

      <span class="muted">[&amp;#xf027;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-volume-off

      <span class="muted">[&amp;#xf026;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-volume-up

      <span class="muted">[&amp;#xf028;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-warning
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf071;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-wechat
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf1d7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-weibo

      <span class="muted">[&amp;#xf18a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-weixin

      <span class="muted">[&amp;#xf1d7;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-wheelchair

      <span class="muted">[&amp;#xf193;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-windows

      <span class="muted">[&amp;#xf17a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-won
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf159;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-wordpress

      <span class="muted">[&amp;#xf19a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-wrench

      <span class="muted">[&amp;#xf0ad;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-xing

      <span class="muted">[&amp;#xf168;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-xing-square

      <span class="muted">[&amp;#xf169;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-yahoo

      <span class="muted">[&amp;#xf19e;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-yen
       <span class="text-muted">(alias)</span>
      <span class="muted">[&amp;#xf157;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-youtube

      <span class="muted">[&amp;#xf167;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-youtube-play

      <span class="muted">[&amp;#xf16a;]</span>
    </div>

    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-youtube-square

      <span class="muted">[&amp;#xf166;]</span>
    </div>

  </div>

</div>