<!DOCTYPE html>
<html>
    <head>
        <?php include CUSTOM . 'theme.php';
        $action = Application::getAction();
        ?>
    </head>
    <style>
        .fien{
            background-color: red;
        }
        .sector{
            height: 20px;
            widows: 100%;
        }
    </style>
    <body>

        <nav class="nav navbar-default">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">LOGO</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mydropdown">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="container">

                <div class="collapse navbar-collapse" id="mydropdown">
                    <ul class="nav navbar-nav">
                        <li <?php echo ($action[2] . '/' . $action[3] == 'home/index' ? 'class=active' : '') ?>>
                            <a href="/omsin2/home/index">HOME</a>
                        </li>
                        <li <?php echo ($action[2] . '/' . $action[3] == 'product/index' ? 'class=active' : '') ?>>
                            <a href="/omsin2/product/index">PRODUCT</a>
                        </li>
                        <li <?php echo ($action[2] . '/' . $action[3] == 'weboard/index' ? 'class=active' : '') ?>>
                            <a href="/omsin2/weboard/index">WEBOARD</a>
                        </li>
                        <li <?php echo ($action[2] . '/' . $action[3] == 'about/contact' ? 'class=active' : '') ?>>
                            <a href="/omsin2/about/contact">CONTACT</a>
                        </li>
                        <li <?php echo ($action[2] . '/' . $action[3] == 'about/about' ? 'class=active' : '') ?>>
                            <a href="/omsin2/about/about">ABOUT</a>
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
                    </ul>
                </div>
            </div>

        </nav>
        <div class="sector"></div>
        <div class="sector"></div
        <?php include CUSTOM.'slider.php'; ?>