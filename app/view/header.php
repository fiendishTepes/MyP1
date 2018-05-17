<!DOCTYPE html>
<html>
    <head>
        <?php
        include CUSTOM . 'theme.php';
        $action = Application::getAction();
        ?>
    </head>
    <style>
        .area{
            height: 20px;
            widows: 100%;
        }
    </style>
    <body>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <a href="/<?php echo DOMAIN ?>" class="navbar-brand">LOGO</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mydropdown">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="col-lg-11">

                <div class="collapse navbar-collapse" id="mydropdown">
                    <ul class="nav navbar-nav">
                        <li <?php echo ($action[2] . '/' . $action[3] == 'home/index' ? 'class=active' : '') ?>>
                            <a href="/<?php echo DOMAIN; ?>/home/index">HOME</a>
                        </li>
                        <li <?php echo ($action[2] . '/' . $action[3] == 'product/index' ? 'class=active' : '') ?>>
                            <a href="/<?php echo DOMAIN; ?>/product/index">PRODUCT</a>
                        </li>
                        <li <?php echo ($action[2] . '/' . $action[3] == 'weboard/index' ? 'class=active' : '') ?>>
                            <a href="/<?php echo DOMAIN; ?>/weboard/index">WEBOARD</a>
                        </li>
                        <li <?php echo ($action[2] . '/' . $action[3] == 'about/contact' ? 'class=active' : '') ?>>
                            <a href="/<?php echo DOMAIN; ?>/about/contact">CONTACT</a>
                        </li>
                        <li <?php echo ($action[2] . '/' . $action[3] == 'about/about' ? 'class=active' : '') ?>>
                            <a href="/<?php echo DOMAIN; ?>/about/about">ABOUT</a>
                        </li>
                        <li>
                            <a class="dropdown-toggle" id="dropdowns1" data-toggle="dropdown" href="#">DROPDOWN <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="#">1</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#">2</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#">3</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#">4</a>
                                </li>
                            </ul>
                        </li>
                        <li <?php echo ($action[2] . '/' . $action[3] == 'member/register' ? 'class=active' : '') ?>>
                            <a href="/<?php echo DOMAIN ?>/member/register">REGISTER</a>
                        </li>
                    </ul>
                    <!--LOGIN-->
                    <form method="post" class="navbar-form navbar-right" action="/<?php echo DOMAIN; ?>/member/login">
                        <div class="form-group">
                            <input class="form-control" placeholder="username" type="text" name="nav[username]" id="nav[username]" value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="password" type="password" name="nav[password]" id="nav[password]" value="">
                        </div>
                        <button type="submit" class="btn btn-info   ">LOGIN</button>
                        
                        
                    </form>
                </div>

            </div>
        </nav>
        <?php //include CUSTOM . 'slider.php'; ?>