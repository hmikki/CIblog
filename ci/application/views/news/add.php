<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php $this->load->view("header"); ?>
        <?php //echo site_url(); ?>
        <div class="container">
        <h1 class="text-right">اضافة خبر</h1>

            <div class="row">
                <div class="col-md-2">2</div>
                <div class="col-md-3">6</div>
            </div>
            <form class="text-right">
                <div class="form-group">
                    <label for="exampleInput">عنوان الخبر</label>
                    <input type="text" class="form-control text-right" id="exampleInputEmail1" placeholder="أدخل عنوان الخبر">
                </div>
                <div class="form-group">
                    <label for="exampleInput">تفاصيل الخبر</label>
                    <input type="text" class="form-control text-right" id="exampleInputPassword1" placeholder="أدخل تفاصيل الخبر">
                </div>
                <div class="form-group">
                    <label for="exampleInput">تاريخ نشر الخبر</label>
                    <input type="date" class="form-control text-right" id="exampleInputPassword1" placeholder="تاريخ الخبر">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">نشر الخبر</label>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">حفظ</button>
            </form>
        </div>
        <?php $this->load->view("footer"); ?>
    </body>
</html>
