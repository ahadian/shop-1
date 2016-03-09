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
        <?= link_tag('assets/bootstrap/css/dashboard.css') ?>
        <?= link_tag('assets/css/sistema.css') ?>


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
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url(); ?>">Project name</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li ><a href="<?= base_url('index.php/modulo/'); ?>">Dashboard - Clientes </a></li>
                        <li class="active" ><a href="<?= base_url('/home/modulo/cadastroClientes'); ?>">Cadastro de Clientes <span class="sr-only">(current)</span></a></li>
                    </ul>

                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h2 class="page-header">Cadastro Clientes</h2>

                    <div class="row">

                        <form id="frm_clientes" action="<?= base_url() ?>home/modulo/storeClientes" name="frm_clientes" method="POST" class="form-horizontal">
                            <fieldset>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="nome">NOME :</label>  
                                    <div class="col-md-5">
                                        <input id="nome" name="nome" type="text" placeholder="Digite Nome" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">EMAIL:</label>  
                                    <div class="col-md-5">
                                        <input id="email" name="email" type="email" placeholder="Digite Email" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="dtnascimento">DATA NASCIMENTO:</label>  
                                    <div class="col-md-4">
                                        <input id="dtnascimento" name="dtnascimento" type="text" placeholder="Digite data de Nascimento" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="telefone">TELEFONE:</label>  
                                    <div class="col-md-4">
                                        <input id="telefone" name="telefone" type="text" placeholder="Digite o Telefone" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cpf">CPF:</label>  
                                    <div class="col-md-4">
                                        <input id="cpf" name="cpf" type="text" placeholder="Digite CPF" class="form-control input-md">

                                    </div>
                                </div>



                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="obs">OBSERVAÇÕES</label>
                                    <div class="col-md-4">                     
                                        <textarea class="form-control" id="obs" name="obs"></textarea>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="bt_salvar"></label>
                                    <div class="col-md-4">
                                        <button id="bt_salvar" name="bt_salvar" type="button"  onclick="salvar();" class="btn btn-primary btn-success"><span class="glyphicon glyphicon-pushpin"></span> Salvar</button>
                                    </div>


                                </div>



                                </div>

                                <h2 class="sub-header">Section title</h2>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Header</th>
                                                <th>Header</th>
                                                <th>Header</th>
                                                <th>Header</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1,001</td>
                                                <td>Lorem</td>
                                                <td>ipsum</td>
                                                <td>dolor</td>
                                                <td>sit</td>
                                            </tr>
                                            <tr>
                                                <td>1,002</td>
                                                <td>amet</td>
                                                <td>consectetur</td>
                                                <td>adipiscing</td>
                                                <td>elit</td>
                                            </tr>
                                            <tr>
                                                <td>1,003</td>
                                                <td>Integer</td>
                                                <td>nec</td>
                                                <td>odio</td>
                                                <td>Praesent</td>
                                            </tr>
                                            <tr>
                                                <td>1,003</td>
                                                <td>libero</td>
                                                <td>Sed</td>
                                                <td>cursus</td>
                                                <td>ante</td>
                                            </tr>
                                            <tr>
                                                <td>1,004</td>
                                                <td>dapibus</td>
                                                <td>diam</td>
                                                <td>Sed</td>
                                                <td>nisi</td>
                                            </tr>
                                            <tr>
                                                <td>1,005</td>
                                                <td>Nulla</td>
                                                <td>quis</td>
                                                <td>sem</td>
                                                <td>at</td>
                                            </tr>
                                            <tr>
                                                <td>1,006</td>
                                                <td>nibh</td>
                                                <td>elementum</td>
                                                <td>imperdiet</td>
                                                <td>Duis</td>
                                            </tr>
                                            <tr>
                                                <td>1,007</td>
                                                <td>sagittis</td>
                                                <td>ipsum</td>
                                                <td>Praesent</td>
                                                <td>mauris</td>
                                            </tr>
                                            <tr>
                                                <td>1,008</td>
                                                <td>Fusce</td>
                                                <td>nec</td>
                                                <td>tellus</td>
                                                <td>sed</td>
                                            </tr>
                                            <tr>
                                                <td>1,009</td>
                                                <td>augue</td>
                                                <td>semper</td>
                                                <td>porta</td>
                                                <td>Mauris</td>
                                            </tr>
                                            <tr>
                                                <td>1,010</td>
                                                <td>massa</td>
                                                <td>Vestibulum</td>
                                                <td>lacinia</td>
                                                <td>arcu</td>
                                            </tr>
                                            <tr>
                                                <td>1,011</td>
                                                <td>eget</td>
                                                <td>nulla</td>
                                                <td>Class</td>
                                                <td>aptent</td>
                                            </tr>
                                            <tr>
                                                <td>1,012</td>
                                                <td>taciti</td>
                                                <td>sociosqu</td>
                                                <td>ad</td>
                                                <td>litora</td>
                                            </tr>
                                            <tr>
                                                <td>1,013</td>
                                                <td>torquent</td>
                                                <td>per</td>
                                                <td>conubia</td>
                                                <td>nostra</td>
                                            </tr>
                                            <tr>
                                                <td>1,014</td>
                                                <td>per</td>
                                                <td>inceptos</td>
                                                <td>himenaeos</td>
                                                <td>Curabitur</td>
                                            </tr>
                                            <tr>
                                                <td>1,015</td>
                                                <td>sodales</td>
                                                <td>ligula</td>
                                                <td>in</td>
                                                <td>libero</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                </div>
                                </div>


                                <!-- Bootstrap core JavaScript
                                ================================================== -->
                                <!-- Placed at the end of the document so the pages load faster -->
                                <script src="<?= base_url('assets/js/jquery.js') ?>"></script>	
                                <script src="<?= base_url('assets/js/jquery.mask.js') ?>"></script>	
                                <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
                                <script src="<?= base_url('assets/js/sistema.js') ?>"></script>

                                <script>

                                            var url = '<?= base_url() ?>' + 'home/modulo/storeClientes';

                                            $(document).ready(function () {
                                                $("#nome").focus();
                                                $('#dtnascimento').mask('00/00/0000');
                                                $('#telefone').mask('(00) 0000-0000');
                                                $('#cpf').mask('000.000.000-00');

                                              
                                            });


                                            $("#menu-toggle").click(function (e) {
                                                e.preventDefault();
                                                $("#wrapper").toggleClass("toggled");
                                            });


                                            function salvar() {

                                                var dados = $('#frm_clientes').serialize();
                                                executar(url, dados, 2,function(retorno){
                                                    
                                                    alert('teste');

                                                   
                                                });
                                            }
                                </script>
                                </body>
                                </html>