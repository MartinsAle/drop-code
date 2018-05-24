<?php 
     header('Content-type: text/html; charset=ISO-8859-1');
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
<head>

    <meta http-equiv="content-type" content="text/html; charset=ISO 8859-1" />
	<meta name="author" content="Proideas Agência Digital" />

    <!-- Stylesheets
    ============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

    <!-- Document Title
    ============================================= -->
	<title>Em breve | Espaço Culinária Fit e Bem Estar</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="no-sticky transparent-header dark">

            <div id="header-wrap">

                <div class="container clearfix">

                    <!-- Logo
                    ============================================= -->
                    <!-- <div id="logo">
                        <a href="javascript:void(0)" class="standard-logo" data-dark-logo="images/borges-logo2.png"><img src="images/borges-logo2.png" alt="Canvas Logo" style="padding-top: 20px"></a>
                        <a href="javascript:void(0)" class="retina-logo" data-dark-logo="images/borges-logo2.png"><img src="images/borges-logo2.png" alt="Canvas Logo"></a>
                    </div> --><!-- #logo end -->

                    <!-- <div class="fright dark hidden-sm hidden-xs clearfix" style="margin-top: 30px;">

                        <a href="#" data-toggle="modal" data-target="#contactFormModal" class="social-icon si-light si-email3">
                            <i class="icon-email3"></i>
                            <i class="icon-email3"></i>
                        </a>

                    </div> -->

                </div>

            </div>

        </header><!-- #header end -->

        <section id="slider" class="full-screen dark" style="background: url(images/others/bg-cs.jpg) center;">

            <div class="container clearfix vertical-middle" style="margin-top: -100px">

                <div class="center bottommargin">
                    <img src="images/logo-espaco-fit.png" alt="Espaço Culinária Fit e Bem Estar" style="width: 240px; height: 120px">
                </div>

                <div class="heading-block title-center nobottomborder">
                    <h1>Nós estamos atualmente em construção</h1>
                    <span><!-- Em breve um novo site para você <br>encontrar o melhor da c --></span>
                </div>

                <div id="countdown-ex1" class="countdown countdown-large coming-soon divcenter" style="max-width:700px; margin-bottom: 30px"></div>

                <div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
                <div class="center bottommargin-sm">
                    Powered by <a href="https://proideas.com.br" target="_blank" style="color: #fff; text-decoration:underline; text-decoration-color: #00c3c0;">Proideas Agência Digital</a>
                </div>

                <script>
                    jQuery(document).ready( function($){
                        var newDate = new Date(2018, 3, 26);
                        $('#countdown-ex1').countdown({until: newDate});
                    });
                    $("#widget-subscribe-form").validate({
                        submitHandler: function(form) {
                            $(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                            $(form).ajaxSubmit({
                                target: '#widget-subscribe-form-result',
                                success: function() {
                                    $(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                    $('#widget-subscribe-form').find('.form-control').val('');
                                    $('#widget-subscribe-form-result').attr('data-notify-msg', $('#widget-subscribe-form-result').html()).html('');
                                    SEMICOLON.widget.notifications($('#widget-subscribe-form-result'));
                                }
                            });
                        }
                    });
                </script>

            </div>

        </section>

        <!-- Modal Contact Form
        ============================================= -->
        <div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="contactFormModalLabel">Send Us an Email</h4>
                    </div>
                    <div class="modal-body">
                        <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

                            <div class="col_half">
                                <label for="template-contactform-name">Name <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                            </div>

                            <div class="col_half col_last">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_half">
                                <label for="template-contactform-phone">Phone</label>
                                <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                            </div>

                            <div class="col_half col_last">
                                <label for="template-contactform-service">Services</label>
                                <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                    <option value="">-- Select One --</option>
                                    <option value="Wordpress">Wordpress</option>
                                    <option value="PHP / MySQL">PHP / MySQL</option>
                                    <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                </select>
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-subject">Subject <small>*</small></label>
                                <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
                            </div>

                            <div class="col_full">
                                <label for="template-contactform-message">Message <small>*</small></label>
                                <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                            </div>

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                            </div>

                        </form>

                        <script type="text/javascript">
                            $("#template-contactform").validate({
                                submitHandler: function(form) {
                                    $('.form-process').fadeIn();
                                    $(form).ajaxSubmit({
                                        target: '#contact-form-result',
                                        success: function() {
                                            $('.form-process').fadeOut();
                                            $('#template-contactform').find('.sm-form-control').val('');
                                            $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
                                            SEMICOLON.widget.notifications($('#contact-form-result'));
                                        }
                                    });
                                }
                            });
                        </script>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Modal Contact Form End -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>

</body>
</html>