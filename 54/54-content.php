<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="mod_custom_2">
            <div class="container">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                    <div class="k-widget k-grid grid-no-header project" id="project-list" data-role="grid">
                        <table role="grid">
                            <colgroup>
                                <col style="width:200px"><col>
                            </colgroup>
                            <thead class="k-grid-header" role="rowgroup">
                                <tr role="row">
                                    <th class="k-header" data-index="0" scope="col"><span class="k-link">&nbsp;</span></th>
                                    <th class="k-header" data-index="1" scope="col"><span class="k-link">&nbsp;</span></th>
                                </tr>
                            </thead>
                            
                                <tbody role="rowgroup">
                                    <tr data-uid="899ed1c2-ca3a-47fc-97aa-e1ee8c62186c" class="projects-item">
                                        <td class="projects-item-photo-container">
                                            <a class="projects-item-photo" href="#" title="Three Oaks Apartment 3" style="background-image: url(images/1.jpg)"></a>
                                        </td>
                                        <td>
                                            <div class="projects-item-detail"> 
                                                <h3>
                                                    <a href="#">Lorem lorem</a>
                                                </h3>
                                                <p class="projects-item-info">
                                                    <span><i class="fa fa-eye"></i> Lorem lorem</span> 
                                                    <span><i class="fa fa-map-marker"></i> Lorem lorem</span>
                                                </p>
                                                <blockquote class="pull-left">
                                                    <small>Lorem lorem</small>
                                                </blockquote>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            
                        </table>

                    </div>

                </div>
                
                
                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                    <div class="header-page">
                        <h3>Top 10 projects</h3>
                    </div>
                    <ul class="list-top-projects">
                        <li>
                            <a class="top-project-image" href="#">
                                <span class="photo first" style="background-image: url(images/2.jpg)">
                                    <span class="rank">1</span>
                                </span>
                                <h3>Saigon Pearl</h3>
                            </a>
                        </li>
                        <li>
                            <a class="top-project-image" href="#">
                                <span class="photo second" style="background-image: url(images/3.jpg)">
                                    <span class="rank">2</span>
                                </span>
                                <h3>Tropic Garden</h3>
                            </a>
                        </li>
                        <li>
                            <a class="top-project-image" href="#">
                                <span class="photo third" style="background-image: url(images/4.jpg)">
                                    <span class="rank">3</span>
                                </span>
                                <h3>Sunrise City</h3>
                            </a>
                        </li>
                        <li>
                            <a class="top-project-image" href="#">
                                <span class="photo" style="background-image: url(images/5.jpg)">
                                    <span class="rank">4</span>
                                </span>
                                <h3>RiverPark Residence</h3>
                            </a>
                        </li>
                        <li>
                            <a class="top-project-image" href="#">
                                <span class="photo" style="background-image: url(images/6.jpg)">
                                    <span class="rank">5</span>
                                </span>
                                <h3>Starhill</h3>
                            </a>
                        </li>
                        <li>
                            <a class="top-project-image" href="#">
                                <span class="photo" style="background-image: url(images/7.jpg)">
                                    <span class="rank">6</span>
                                </span>
                                <h3>Riverside Residence</h3>
                            </a>
                        </li>
                        <li>
                            <a class="top-project-image" href="#">
                                <span class="photo" style="background-image: url(images/8.jpg)">
                                    <span class="rank">7</span>
                                </span>
                                <h3>Petroland</h3>
                            </a>
                        </li>
                        <li>
                            <a class="top-project-image" href="#">
                                <span class="photo" style="background-image: url(images/9.jpg)">
                                    <span class="rank">8</span>
                                </span>
                                <h3>Riviera Point</h3>
                            </a>
                        </li>
                        <li>
                            <a class="top-project-image" href="#">
                                <span class="photo" style="background-image: url(images/10.jpg)">
                                    <span class="rank">9</span>
                                </span>
                                <h3>My Khang</h3>
                            </a>
                        </li>
                        <li>
                            <a class="top-project-image" href="#">
                                <span class="photo" style="background-image: url(images/11.jpg)">
                                    <span class="rank">10</span>
                                </span>
                                <h3>Sky Garden</h3>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>
    </body>
</html>