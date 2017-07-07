<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.0/jquery/bs4/empty.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2017 21:18:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{url('css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('css/jquery.scrollbar.css')}}">

    <!-- App styles -->
    <link rel="stylesheet" href="css/app.min.css">
</head>

<body data-ma-theme="green">
<main class="main">
    <div class="page-loader">
        <div class="page-loader__spinner">
            <svg viewBox="25 25 50 50">
                <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <header class="header">
        <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
            <div class="navigation-trigger__inner">
                <i class="navigation-trigger__line"></i>
                <i class="navigation-trigger__line"></i>
                <i class="navigation-trigger__line"></i>
            </div>
        </div>

        <div class="header__logo hidden-sm-down">
            <h1><a href="index.html">Material Admin 2.0</a></h1>
        </div>

        <form class="search">
            <div class="search__inner">
                <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
            </div>
        </form>

        <ul class="top-nav">
            <li class="hidden-xl-up"><a href="#" data-ma-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

            <li class="dropdown">
                <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-email"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                    <div class="listview listview--hover">
                        <div class="listview__header">
                            Messages

                            <div class="actions">
                                <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                            </div>
                        </div>

                        <a href="#" class="listview__item">
                            <img src="{{url('img/4.jpg')}}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    David Belle <small>12:01 PM</small>
                                </div>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <img src="{{url('img/4.jpg')}}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    Jonathan Morris
                                    <small>02:45 PM</small>
                                </div>
                                <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <img src="{{url('img/4.jpg')}}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    Fredric Mitchell Jr.
                                    <small>08:21 PM</small>
                                </div>
                                <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <img src="{{url('img/4.jpg')}}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    Glenn Jecobs
                                    <small>08:43 PM</small>
                                </div>
                                <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <img src="{{url('img/4.jpg')}}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    Bill Phillips
                                    <small>11:32 PM</small>
                                </div>
                                <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                            </div>
                        </a>

                        <a href="#" class="view-more">View all messages</a>
                    </div>
                </div>
            </li>

            <li class="dropdown top-nav__notifications">
                <a href="#" data-toggle="dropdown" class="top-nav__notify">
                    <i class="zmdi zmdi-notifications"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                    <div class="listview listview--hover">
                        <div class="listview__header">
                            Notifications

                            <div class="actions">
                                <a href="#" class="actions__item zmdi zmdi-check-all" data-ma-action="notifications-clear"></a>
                            </div>
                        </div>

                        <div class="listview__scroll scrollbar-inner">
                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">David Belle</div>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Jonathan Morris</div>
                                    <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Fredric Mitchell Jr.</div>
                                    <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Glenn Jecobs</div>
                                    <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Bill Phillips</div>
                                    <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">David Belle</div>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Jonathan Morris</div>
                                    <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Fredric Mitchell Jr.</div>
                                    <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                </div>
                            </a>
                        </div>

                        <div class="p-1"></div>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                    <div class="listview listview--hover">
                        <div class="listview__header">Tasks</div>

                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">HTML5 Validation Report</div>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">Google Chrome Extension</div>

                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">Social Intranet Projects</div>

                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">Bootstrap Admin Template</div>

                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">Youtube Client App</div>

                                <div class="progress">
                                    <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="view-more">View all tasks</a>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                    <div class="row app-shortcuts">
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-calendar bg-red"></i>
                            <small class="">Calendar</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-file-text bg-blue"></i>
                            <small class="">Files</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-email bg-teal"></i>
                            <small class="">Email</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-trending-up bg-blue-grey"></i>
                            <small class="">Reports</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-view-headline bg-orange"></i>
                            <small class="">News</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-image bg-light-green"></i>
                            <small class="">Gallery</small>
                        </a>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-item theme-switch">
                        Theme Switch

                        <div class="btn-group btn-group--colors mt-2" data-toggle="buttons">
                            <label class="btn bg-green active"><input type="radio" value="green" autocomplete="off" checked></label>
                            <label class="btn bg-blue"><input type="radio" value="blue" autocomplete="off"></label>
                            <label class="btn bg-red"><input type="radio" value="red" autocomplete="off"></label>
                            <label class="btn bg-orange"><input type="radio" value="orange" autocomplete="off"></label>
                            <label class="btn bg-teal"><input type="radio" value="teal" autocomplete="off"></label>

                            <br>

                            <label class="btn bg-cyan"><input type="radio" value="cyan" autocomplete="off"></label>
                            <label class="btn bg-blue-grey"><input type="radio" value="blue-grey" autocomplete="off"></label>
                            <label class="btn bg-purple"><input type="radio" value="purple" autocomplete="off"></label>
                            <label class="btn bg-indigo"><input type="radio" value="indigo" autocomplete="off"></label>
                            <label class="btn bg-lime"><input type="radio" value="lime" autocomplete="off"></label>
                        </div>
                    </div>
                    <a href="#" class="dropdown-item">Fullscreen</a>
                    <a href="#" class="dropdown-item">Clear Local Storage</a>
                </div>
            </li>

            <li class="hidden-xs-down">
                <a href="#" data-ma-action="aside-open" data-ma-target=".chat" class="top-nav__notify">
                    <i class="zmdi zmdi-comment-alt-text"></i>
                </a>
            </li>
        </ul>
    </header>

    <aside class="sidebar">
        <div class="scrollbar-inner">
            <div class="user">
                <div class="user__info" data-toggle="dropdown">
                    <img class="user__img" src="{{url('img/4.jpg')}}" alt="">
                    <div>
                        <div class="user__name">Malinda Hollaway</div>
                        <div class="user__email">malinda-h@gmail.com</div>
                    </div>
                </div>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">View Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </div>

            <ul class="navigation">
                <li class="@@indexactive"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>

                <li class="navigation__sub @@variantsactive">
                    <a href="#"><i class="zmdi zmdi-view-week"></i> Variants</a>

                    <ul>
                        <li class="@@sidebaractive"><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
                        <li class="@@boxedactive"><a href="boxed-layout.html">Boxed Layout</a></li>
                        <li class="@@hiddensidebarboxedactive"><a href="hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                        <li class="@@topnavigationactive"><a href="top-navigation.html">Top Navigation</a></li>
                    </ul>
                </li>

                <li class="@@typeactive"><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>

                <li class="@@widgetactive"><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>

                <li class="navigation__sub @@tableactive">
                    <a href="#"><i class="zmdi zmdi-view-list"></i> Tables</a>

                    <ul>
                        <li class="@@normaltableactive"><a href="html-table.html">HTML Table</a></li>
                        <li class="@@datatableactive"><a href="data-table.html">Data Table</a></li>
                    </ul>
                </li>

                <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
                    <a href="#"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                    <ul>
                        <li class="@@formelementactive"><a href="form-elements.html">Basic Form Elements</a></li>
                        <li class="@@formcomponentactive"><a href="form-components.html">Form Components</a></li>
                        <li class="navigation__active"><a href="form-validation.html">Form Validation</a></li>
                    </ul>
                </li>

                <li class="navigation__sub @@uiactive">
                    <a href="#"><i class="zmdi zmdi-swap-alt"></i> User Interface</a>

                    <ul>
                        <li class="@@colorsactive"><a href="colors.html">Colors</a></li>
                        <li class="@@cssanimationsactive"><a href="css-animations.html">CSS Animations</a></li>
                        <li class="@@buttonsactive"><a href="buttons.html">Buttons</a></li>
                        <li class="@@iconsactive"><a href="icons.html">Icons</a></li>
                        <li class="@@listviewactive"><a href="listview.html">Listview</a></li>
                        <li class="@@toolbarsactive"><a href="toolbars.html">Toolbars</a></li>
                        <li class="@@cardsactive"><a href="cards.html">Cards</a></li>
                        <li class="@@alertactive"><a href="alerts.html">Alerts</a></li>
                        <li class="@@badgesactive"><a href="badges.html">Badges</a></li>
                        <li class="@@breadcrumbsactive"><a href="breadcrumbs.html">Bredcrumbs</a></li>
                        <li class="@@jumbotronactive"><a href="jumbotron.html">Jumbotron</a></li>
                        <li class="@@navsactive"><a href="navs.html">Navs</a></li>
                        <li class="@@paginationactive"><a href="pagination.html">Pagination</a></li>
                        <li class="@@progress"><a href="progress.html">Progress</a></li>
                    </ul>
                </li>

                <li class="navigation__sub @@componentsactive">
                    <a href="#"><i class="zmdi zmdi-group-work"></i> Javascript Components</a>

                    <ul class="navigation__sub">
                        <li class="@@carouselactive"><a href="carousel.html">Carousel</a></li>
                        <li class="@@collapseactive"><a href="collapse.html">Collapse</a></li>
                        <li class="@@dropdownsactive"><a href="dropdowns.html">Dropdowns</a></li>
                        <li class="@@modalsactive"><a href="modals.html">Modals</a></li>
                        <li class="@@popoveractive"><a href="popover.html">Popover</a></li>
                        <li class="@@tabsactive"><a href="tabs.html">Tabs</a></li>
                        <li class="@@tooltipsactive"><a href="tooltips.html">Tooltips</a></li>
                        <li class="@@notificationsactive"><a href="notifications-alerts.html">Notifications & Alerts</a></li>
                    </ul>
                </li>

                <li class="navigation__sub @@chartsactive">
                    <a href="#"><i class="zmdi zmdi-trending-up"></i> Charts</a>

                    <ul>
                        <li class="@@flotchartsactive"><a href="flot-charts.html">Flot</a></li>
                        <li class="@@otherchartsactive"><a href="other-charts.html">Other Charts</a></li>
                    </ul>
                </li>

                <li class="@@calendaractive"><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>

                <li class="@@photogalleryactive"><a href="photo-gallery.html"><i class="zmdi zmdi-image"></i> Photo Gallery</a></li>

                <li class="navigation__sub @@samplepagesactive">
                    <a href="#"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>

                    <ul>
                        <li class="@@profileactive"><a href="profile-about.html">Profile</a></li>
                        <li class="@@messagesactive"><a href="messages.html">Messages</a></li>
                        <li class="@@contactsactive"><a href="contacts.html">Contacts</a></li>
                        <li class="@@groupsactive"><a href="groups.html">Groups</a></li>
                        <li class="@@pricingtablesactive"><a href="pricing-tables.html">Pricing Tables</a></li>
                        <li class="@@invoiceactive"><a href="invoice.html">Invoice</a></li>
                        <li class="@@todoactive"><a href="todo-lists.html">Todo Lists</a></li>
                        <li class="@@notesactive"><a href="notes.html">Notes</a></li>
                        <li class="@@loginactive"><a href="login.html">Login & SignUp</a></li>
                        <li class="@@lockscreenactive"><a href="lockscreen.html">Lockscreen</a></li>
                        <li class="@@lockscreenactive"><a href="404.html">404</a></li>
                        <li class="@@emptyactive"><a href="empty.html">Empty Page</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <aside class="chat">
        <div class="chat__header">
            <h2 class="chat__title">Chat <small>Currently 20 contacts online</small></h2>

            <div class="chat__search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <i class="form-group__bar"></i>
                </div>
            </div>
        </div>

        <div class="listview listview--hover chat__buddies scrollbar-inner">
            <a class="listview__item chat__available">
                <img src="{{url('img/4.jpg')}}" class="listview__img" alt="">

                <div class="listview__content">
                    <div class="listview__heading">Jeannette Lawson</div>
                    <p>hey, how are you doing.</p>
                </div>
            </a>

            <a class="listview__item chat__available">
                <img src="{{url('img/4.jpg')}}" class="listview__img" alt="">

                <div class="listview__content">
                    <div class="listview__heading">Jeannette Lawson</div>
                    <p>hmm...</p>
                </div>
            </a>

            <a class="listview__item chat__away">
                <img src="{{url('img/4.jpg')}}" class="listview__img" alt="">

                <div class="listview__content">
                    <div class="listview__heading">Jeannette Lawson</div>
                    <p>all good</p>
                </div>
            </a>

            <a class="listview__item">
                <img src="{{url('img/4.jpg')}}" class="listview__img" alt="">

                <div class="listview__content">
                    <div class="listview__heading">Jeannette Lawson</div>
                    <p>morbi leo risus portaac consectetur vestibulum at eros.</p>
                </div>
            </a>

            <a class="listview__item">
                <img src="{{url('img/4.jpg')}}" class="listview__img" alt="">

                <div class="listview__content">
                    <div class="listview__heading">Jeannette Lawson</div>
                    <p>fusce dapibus</p>
                </div>
            </a>

            <a class="listview__item chat__busy">
                <img src="{{url('img/4.jpg')}}" class="listview__img" alt="">

                <div class="listview__content">
                    <div class="listview__heading">Jeannette Lawson</div>
                    <p>cras mattis consectetur purus sit amet fermentum.</p>
                </div>
            </a>
        </div>

        <a href="messages.html" class="btn btn--action btn--fixed btn-danger"><i class="zmdi zmdi-plus"></i></a>
    </aside>

    <section class="content">
        <header class="content__title">
            <h1>xxx</h1>

            <div class="actions">
                <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
                <a href="#" class="actions__item zmdi zmdi-check-all"></a>

                <div class="dropdown actions__item">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Refresh</a>
                        <a href="#" class="dropdown-item">Manage Widgets</a>
                        <a href="#" class="dropdown-item">Settings</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="card">
            <div class="card-header">
                <h2 class="card-title">xxx</h2>
                <small class="card-subtitle">xxx</small>
            </div>

            <div class="card-block">

            </div>
        </div>

        <footer class="footer hidden-xs-down">
            <p>© Material Admin Responsive. All rights reserved.</p>

            <ul class="nav footer__nav">
                <a class="nav-link" href="#">Homepage</a>

                <a class="nav-link" href="#">Company</a>

                <a class="nav-link" href="#">Support</a>

                <a class="nav-link" href="#">News</a>

                <a class="nav-link" href="#">Contacts</a>
            </ul>
        </footer>
    </section>
</main>

<!-- Older IE warning message -->
<!--[if IE]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

    <div class="ie-warning__downloads">
        <a href="http://www.google.com/chrome">
            <img src="img/browsers/chrome.png" alt="">
        </a>

        <a href="https://www.mozilla.org/en-US/firefox/new">
            <img src="img/browsers/firefox.png" alt="">
        </a>

        <a href="http://www.opera.com">
            <img src="img/browsers/opera.png" alt="">
        </a>

        <a href="https://support.apple.com/downloads/safari">
            <img src="img/browsers/safari.png" alt="">
        </a>

        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
            <img src="img/browsers/edge.png" alt="">
        </a>

        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
            <img src="img/browsers/ie.png" alt="">
        </a>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

<!-- Javascript -->
<!-- Vendors -->
<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/tether.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/waves.min.js')}}"></script>
<script src="{{url('js/jquery.scrollbar.min.js')}}"></script>
<script src="{{url('js/jquery-scrollLock.min.js')}}"></script>

<!-- App functions and actions -->
<script src="{{url('js/app.js')}}"></script>
</body>
</html>