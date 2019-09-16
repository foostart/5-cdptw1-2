<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/style.css');
        ?>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="mod-custom-10" <div class="container">
                <div class="row vc_row wpb_row vc_row-fluid vc_custom_1455287231149 vc_row-has-fill" style="padding-top: 30px; padding-bottom: 60px;">
                    <div class="wpb_column vc_column_container col-sm-12" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1455193632714 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container col-sm-3">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container col-sm-6">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div  class="uvc-heading ult-adjust-bottom-margin ultimate-heading-398579877825bbaa uvc-1373 " data-hspacer="no_spacer" data-halign="center" style="text-align:center">
                                        <div class="uvc-heading-spacer no_spacer" style="top"></div>
                                        <div class="uvc-main-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-398579877825bbaa h2" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:36px;&quot;,&quot;line-height&quot;:&quot;&quot;}">
                                            <h2 style="font-family:'Raleway';font-weight:800;color:#333333;margin-bottom:30px;">What You Get from Sensei?</h2></div>
                                        <div class="uvc-sub-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-398579877825bbaa .uvc-sub-heading " data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:25px;&quot;}" style="font-family:'Raleway';font-weight:300;color:#666666;">
                                            <p style="text-align: center;">With the Sensei plugin you can create courses, write lessons, and add quizzes. Set lesson and course pre-requisites, allow user registration and charge.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container col-sm-3">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1451053221961">
                                <div class="sc-service-box wpb_column vc_column_container col-sm-3 vc_col-has-fill">
                                    <div class="vc_column-inner vc_custom_1452516332056">
                                        <div class="wpb_wrapper">
                                            <div class="ult-just-icon-wrapper  ">
                                                <div class="align-icon" style="text-align:center;">
                                                    <div class="aio-icon none " style="color:#666666;font-size:32px;display:inline-block;">
                                                        <i class="" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uvc-heading ult-adjust-bottom-margin ultimate-heading-4103579877825ca51 uvc-9905 " data-hspacer="line_only" data-halign="center" style="text-align:center">
                                            <div class="uvc-main-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-4103579877825ca51 h2" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;&quot;}">
                                                <h2 style="font-family:'Raleway';font-weight:700;color:#2d2d2d;margin-top:15px;">LOrem</h2></div>
                                            <div class="uvc-heading-spacer line_only" style="margin-top:15px;margin-bottom:15px;height:5px;"><span class="uvc-headings-line" style="border-style: solid; border-bottom-width: 5px; border-color: rgb(255, 197, 13); width: 30px; margin: 0px auto;"></span></div>
                                            <div class="uvc-sub-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-4103579877825ca51 .uvc-sub-heading " data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:14px;&quot;,&quot;line-height&quot;:&quot;desktop:22px;&quot;}" style="font-family:'Raleway';font-weight:normal;color:#2d2d2d;">
                                                <p> LOrem</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>
    </body>
</html>