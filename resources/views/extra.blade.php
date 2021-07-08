<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="../../../../global_assets/js/main/jquery.min.js"></script>
    <script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="assets/js/app.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-lg navbar-light navbar-static">
    <div class="d-flex flex-1 d-lg-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-paragraph-justify3"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-transmission"></i>
        </button>
    </div>

    <div class="navbar-brand text-center text-lg-left">
        <a href="index.html" class="d-inline-block">
            <img src="../../../../global_assets/images/logo_light.png" class="d-none d-sm-block" alt="Logo">
            <img src="../../../../global_assets/images/logo_icon_light.png" class="d-sm-none" alt="Logo">
        </a>
    </div>

    <div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    Left collapsible link
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-stack2"></i>
                    <span class="d-lg-none ml-3">Collapsible link with icon and badge</span>
                    <span class="badge badge-warning badge-pill ml-auto ml-lg-0">9</span>
                </a>
            </li>
        </ul>

        <span class="badge badge-success my-3 my-lg-0 ml-lg-3">Badge</span>

        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    Right collapsible link
                </a>
            </li>
        </ul>
    </div>

    <ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">
        <li class="nav-item">
            <a href="#" class="navbar-nav-link navbar-nav-link-toggler">
                <i class="icon-bubbles4"></i>
                <span class="badge badge-warning badge-pill ml-auto ml-lg-0">2</span>
            </a>
        </li>

        <li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
            <a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100" data-toggle="dropdown">
                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-pill mr-lg-2" height="34" alt="">
                <span class="d-none d-lg-inline-block">User</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Menu item 1</a>
                <a href="#" class="dropdown-item">Menu item 2</a>
                <a href="#" class="dropdown-item">
                    Menu item 3
                    <span class="badge badge-primary badge-pill ml-auto">2</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Menu item 4</a>
            </div>
        </li>
    </ul>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-light sidebar-main sidebar-expand-lg">

        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- User menu -->
            <div class="sidebar-section sidebar-user my-1">
                <div class="sidebar-section-body">
                    <div class="media">
                        <a href="#" class="mr-3">
                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" alt="">
                        </a>

                        <div class="media-body">
                            <div class="font-weight-semibold">Victoria Baker</div>
                            <div class="font-size-sm line-height-sm opacity-50">
                                Senior developer
                            </div>
                        </div>

                        <div class="ml-3 align-self-center">
                            <button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="icon-transmission"></i>
                            </button>

                            <button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                                <i class="icon-cross2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="sidebar-section">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                    <li class="nav-item">
                        <a href="../full/index.html" class="nav-link">
                            <i class="icon-home4"></i>
                            <span>
									Dashboard
								</span>
                        </a>
                    </li>
                    <!-- /main -->

                    <!-- Layout -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>
                    <li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
                        <a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Page layouts">
                            <li class="nav-item"><a href="layout_static.html" class="nav-link">Static layout</a></li>
                            <li class="nav-item"><a href="layout_no_header.html" class="nav-link">No header</a></li>
                            <li class="nav-item"><a href="layout_no_footer.html" class="nav-link">No footer</a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="layout_fixed_header.html" class="nav-link">Fixed header</a></li>
                            <li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="layout_2_sidebars_1_side.html" class="nav-link">2 sidebars on 1 side</a></li>
                            <li class="nav-item"><a href="layout_2_sidebars_2_sides.html" class="nav-link">2 sidebars on 2 sides</a></li>
                            <li class="nav-item"><a href="layout_3_sidebars.html" class="nav-link">3 sidebars</a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="layout_boxed_page.html" class="nav-link">Boxed page</a></li>
                            <li class="nav-item"><a href="layout_boxed_content.html" class="nav-link active">Boxed content</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Menu levels">
                            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
                                        <ul class="nav nav-group-sub">
                                            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i> Fourth level</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
                        </ul>
                    </li>
                    <!-- /layout -->

                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Page header -->
            <div class="page-header">
                <div class="page-header-content container d-sm-flex">
                    <div class="page-title">
                        <h4><span class="font-weight-semibold">Seed</span> - Boxed content</h4>
                    </div>

                    <div class="my-sm-auto ml-sm-auto mb-3 mb-sm-0">
                        <button type="button" class="btn btn-primary w-100 w-sm-auto">Button</button>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content container pt-0">

                <!-- Basic card -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic card</h5>
                    </div>

                    <div class="card-body">
                        <h6 class="font-weight-semibold">Start your development with no hassle!</h6>
                        <p class="mb-3">Common problem of templates is that all code is deeply integrated into the core. This limits your freedom in decreasing amount of code, i.e. it becomes pretty difficult to remove unnecessary code from the project. Limitless allows you to remove unnecessary and extra code easily just by removing the path to specific LESS file with component styling. All plugins and their options are also in separate files. Use only components you actually need!</p>

                        <h6 class="font-weight-semibold">What is this?</h6>
                        <p class="mb-3">Starter kit is a set of pages, useful for developers to start development process from scratch. Each layout includes base components only: layout, page kits, color system which is still optional, bootstrap files and bootstrap overrides. No extra CSS/JS files and markup. CSS files are compiled without any plugins or components. Starter kit was moved to a separate folder for better accessibility.</p>

                        <h6 class="font-weight-semibold">How does it work?</h6>
                        <p>You open one of the starter pages, add necessary plugins, uncomment paths to files in components.less file, compile new CSS. That's it. I'd also recommend to open one of main pages with functionality you need and copy all paths/JS code from there to your new page, it's just faster and easier.</p>
                    </div>
                </div>
                <!-- /basic card -->


                <!-- Form layouts -->
                <div class="row">
                    <div class="col-lg-6">

                        <!-- Horizontal form -->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title">Horizontal form</h5>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse show">
                                <div class="card-body">
                                    <form action="#">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Text input</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Password</label>
                                            <div class="col-lg-9">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Select</label>
                                            <div class="col-lg-9">
                                                <select name="select" class="custom-select">
                                                    <option value="opt1">Basic select</option>
                                                    <option value="opt2">Option 2</option>
                                                    <option value="opt3">Option 3</option>
                                                    <option value="opt4">Option 4</option>
                                                    <option value="opt5">Option 5</option>
                                                    <option value="opt6">Option 6</option>
                                                    <option value="opt7">Option 7</option>
                                                    <option value="opt8">Option 8</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Textarea</label>
                                            <div class="col-lg-9">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /horizotal form -->

                    </div>

                    <div class="col-lg-6">

                        <!-- Vertical form -->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title">Vertical form</h5>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse show">
                                <div class="card-body">
                                    <form action="#">
                                        <div class="form-group">
                                            <label>Text input</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Select</label>
                                            <select name="select" class="custom-select">
                                                <option value="opt1">Basic select</option>
                                                <option value="opt2">Option 2</option>
                                                <option value="opt3">Option 3</option>
                                                <option value="opt4">Option 4</option>
                                                <option value="opt5">Option 5</option>
                                                <option value="opt6">Option 6</option>
                                                <option value="opt7">Option 7</option>
                                                <option value="opt8">Option 8</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <textarea rows="4" cols="4" class="form-control" placeholder="Default textarea"></textarea>
                                        </div>

                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /vertical form -->

                    </div>
                </div>
                <!-- /form layouts -->

            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
						<span class="navbar-text">
							© 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="https://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
						</span>

                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                        <li class="nav-item"><a href="https://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                        <li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
