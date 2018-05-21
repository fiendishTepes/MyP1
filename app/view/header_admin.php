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
        <h1>ADMIN SYSTEM</h1>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <a href="/myp1/admincontroller/admin/index" class="navbar-brand">LOGO</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mydropdown">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="col-lg-11">

                <div class="collapse navbar-collapse" id="mydropdown">
                    <ul class="nav navbar-nav">
                        <li <?php echo ($action[3] . '/' . $action[4] == 'admin/index' ? 'class=active' : '') ?>>
                            <a href="/myp1/admincontroller/admin/index">HOME</a>
                        </li>
                        <li <?php echo ($action[3] . '/' . $action[4] == 'admin/index' ? 'class=active' : '') ?>>
                            <a href="/myp1/admincontroller/admin/index">PRODUCT</a>
                        </li>
                        <li <?php echo ($action[3] . '/' . $action[4] == 'admin/index' ? 'class=active' : '') ?>>
                            <a href="/myp1/admincontroller/admin/index">WEBOARD</a>
                        </li>
                        <li <?php echo ($action[3] . '/' . $action[4] == 'admin/contact' ? 'class=active' : '') ?>>
                            <a href="/myp1/admincontroller/admin/contact">CONTACT</a>
                        </li>
                        <li <?php echo ($action[3] . '/' . $action[4] == 'admin/about' ? 'class=active' : '') ?>>
                            <a href="/myp1/admincontroller/admin/about">ABOUT</a>
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
                        <li <?php echo ($action[2] . '/' . $action[3] == 'admin/register' ? 'class=active' : '') ?>>
                            <a href="/myp1/admincontroller/admin/register">REGISTER</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <?php //include CUSTOM . 'slider.php'; ?>