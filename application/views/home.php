<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Starter Template for Bootstrap</title>

        <?= link_tag('assets/bootstrap/css/bootstrap.min.css') ?>
        <?= link_tag('assets/bootstrap/css/bootstrap-theme.min.css') ?>

        <style>
            body {
                padding-top: 50px;
            }
            .starter-template {
                padding: 40px 15px;
                text-align: center;
            }
        </style>
    </head>



    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container" style="border:1px solid #aa0000 ">

            <div class="starter-template">
                <h1>Bootstrap starter template</h1>
                <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
            </div>

            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <a href="<?= base_url(); ?>" class="thumbnail">
                        <img src="<?= base_url('assets/imagens/download.svg') ?>" alt="Teste">

                        <div class="caption">
                            <h4 class="text-center"> Thumbnail label</h4>
                        </div> 
                    </a>


                </div>

                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="<?= base_url('assets/imagens/download.svg') ?>" alt="...">

                        <div class="caption">
                            <h4 class="text-center" >Thumbnail label</h4>
                        </div> 
                    </a>
                </div>


                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="<?= base_url('assets/imagens/download.svg') ?>" alt="...">

                        <div class="caption">
                            <h4 class="text-center">Thumbnail label</h4>
                        </div> 
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="<?= base_url('assets/imagens/download.svg') ?>" alt="...">

                        <div class="caption">
                            <h4 class="text-center">AKI Thumbnail label</h4>
                        </div> 
                    </a>
                </div>



            </div>

        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?= base_url('assets/js/jquery.js') ?>"></script>	
        <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    </body>
</html>

