<?php header('Content-Type: text/html; charset=ISO-8859-1'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- <link rel="stylesheet" href="uikit/css/uikit.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="animate.css">
	<link rel="stylesheet" href="custom.css">
	<script src="jquery-3.3.1.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header class="nav-down">
    	<a href="#offcanvas-3" data-uk-offcanvas="{mode:'slide'}" class="trigger-menu"><i class="fa fa-bars"></i></a>
		<h2 style="margin-left: 150px" class="animateHover"><a href="">Link</a></h2>
    	<div id="offcanvas-3" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <div class="btn-close">
					<a href="#offcanvas-3" data-uk-offcanvas="{mode:'slide'}" class="trigger-menu-close"><i class="fa fa-times"></i></a>
            	</div>
                <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
                    <li></li>
                    <li><a href="">Item</a></li>
                    <li class="uk-active"><a href="">Active</a></li>

                    <li class="uk-parent">
                        <a href="#">Parent</a>
                        <ul class="uk-nav-sub">
                            <li><a href="">Sub item</a></li>
                            <li><a href="">Sub item</a>
                                <ul>
                                    <li><a href="">Sub item</a></li>
                                    <li><a href="">Sub item</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="uk-parent">
                        <a href="#">Parent</a>
                        <ul class="uk-nav-sub">
                            <li><a href="">Sub item</a></li>
                            <li><a href="">Sub item</a></li>
                        </ul>
                    </li>

                    <li><a href="">Item</a></li>

                    <li class="uk-nav-header">Header</li>
                    <li class="uk-parent"><a href=""><i class="uk-icon-star"></i> Parent</a></li>
                    <li><a href=""><i class="uk-icon-twitter"></i> Item</a></li>
                    <li><a href=""><i class="uk-icon-rss"></i> Item</a></li>
                    <li><a href=""><i class="uk-icon-rss"></i> Novo</a></li>
                    <li><a href=""><i class="uk-icon-rss"></i> Novo 2</a></li>
                    <li><a href=""><i class="uk-icon-rss"></i> Novo 3</a></li>
                </ul>

            </div>

        </div>
	</header>
	<main>
	    <section>
	    	<div><h1>Section 1</h1></div>
	    	<p>
	    		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor nunc justo, sed volutpat enim aliquam sit amet. Vivamus sapien odio, porttitor id luctus eget, laoreet vel felis. Proin molestie lacinia orci, non ornare nibh blandit vel. Mauris imperdiet, enim vitae scelerisque sollicitudin, purus urna euismod erat, et dictum nisl mauris ultrices libero. Fusce iaculis erat ac suscipit lobortis. Maecenas fermentum urna ut nulla sollicitudin gravida. Proin varius urna purus. Duis at elementum metus, id placerat eros. Nunc in bibendum sapien, vel imperdiet diam. Pellentesque orci risus, pulvinar eu lobortis sit amet, placerat sed est. Cras quis sagittis nisl.
	    	</p>
	    	<p>
	    		Nullam vitae diam sapien. Ut ut nulla efficitur, consequat lacus nec, maximus libero. Phasellus in nulla nibh. Donec velit lacus, ultrices pharetra diam eleifend, vehicula imperdiet elit. Maecenas sit amet eros et eros congue fringilla ut vel eros. Etiam leo metus, ultricies ut imperdiet vel, scelerisque at purus. Morbi vestibulum risus vitae lacus hendrerit, eu sodales ex pretium.
	    	</p>
	    	<p>
	    		Pellentesque eu nunc quis magna faucibus fermentum sed sit amet orci. Suspendisse condimentum mauris sit amet elit porta commodo. Ut hendrerit, elit non eleifend suscipit, sem dolor fringilla eros, sit amet luctus libero arcu nec neque. Etiam ipsum velit, condimentum nec aliquet vitae, luctus at magna. Aliquam a placerat justo. Sed gravida, metus id accumsan pellentesque, sem augue convallis odio, eu consectetur quam nisl iaculis lacus. Fusce euismod, augue quis rhoncus dapibus, odio dolor tempor nulla, eu auctor lacus sapien non tortor. Aenean bibendum rhoncus velit. Sed sed mi dignissim, cursus purus at, semper urna. Morbi egestas eleifend turpis, vel euismod nibh cursus vel. Morbi varius et magna et maximus. Vivamus semper tempor velit, sed porttitor magna molestie at.
	    	</p>
	    </section>
	    <section>
	    	<div><h1>Section 2</h1></div>
	    	<p>
	    		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor nunc justo, sed volutpat enim aliquam sit amet. Vivamus sapien odio, porttitor id luctus eget, laoreet vel felis. Proin molestie lacinia orci, non ornare nibh blandit vel. Mauris imperdiet, enim vitae scelerisque sollicitudin, purus urna euismod erat, et dictum nisl mauris ultrices libero. Fusce iaculis erat ac suscipit lobortis. Maecenas fermentum urna ut nulla sollicitudin gravida. Proin varius urna purus. Duis at elementum metus, id placerat eros. Nunc in bibendum sapien, vel imperdiet diam. Pellentesque orci risus, pulvinar eu lobortis sit amet, placerat sed est. Cras quis sagittis nisl.
	    	</p>
	    	<p>
	    		Nullam vitae diam sapien. Ut ut nulla efficitur, consequat lacus nec, maximus libero. Phasellus in nulla nibh. Donec velit lacus, ultrices pharetra diam eleifend, vehicula imperdiet elit. Maecenas sit amet eros et eros congue fringilla ut vel eros. Etiam leo metus, ultricies ut imperdiet vel, scelerisque at purus. Morbi vestibulum risus vitae lacus hendrerit, eu sodales ex pretium.
	    	</p>
	    	<p>
	    		Pellentesque eu nunc quis magna faucibus fermentum sed sit amet orci. Suspendisse condimentum mauris sit amet elit porta commodo. Ut hendrerit, elit non eleifend suscipit, sem dolor fringilla eros, sit amet luctus libero arcu nec neque. Etiam ipsum velit, condimentum nec aliquet vitae, luctus at magna. Aliquam a placerat justo. Sed gravida, metus id accumsan pellentesque, sem augue convallis odio, eu consectetur quam nisl iaculis lacus. Fusce euismod, augue quis rhoncus dapibus, odio dolor tempor nulla, eu auctor lacus sapien non tortor. Aenean bibendum rhoncus velit. Sed sed mi dignissim, cursus purus at, semper urna. Morbi egestas eleifend turpis, vel euismod nibh cursus vel. Morbi varius et magna et maximus. Vivamus semper tempor velit, sed porttitor magna molestie at.
	    	</p>
	    </section>
	    <section>
	    	<div><h1>Section 3</h1></div>
	    	<p>
	    		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor nunc justo, sed volutpat enim aliquam sit amet. Vivamus sapien odio, porttitor id luctus eget, laoreet vel felis. Proin molestie lacinia orci, non ornare nibh blandit vel. Mauris imperdiet, enim vitae scelerisque sollicitudin, purus urna euismod erat, et dictum nisl mauris ultrices libero. Fusce iaculis erat ac suscipit lobortis. Maecenas fermentum urna ut nulla sollicitudin gravida. Proin varius urna purus. Duis at elementum metus, id placerat eros. Nunc in bibendum sapien, vel imperdiet diam. Pellentesque orci risus, pulvinar eu lobortis sit amet, placerat sed est. Cras quis sagittis nisl.
	    	</p>
	    	<p>
	    		Nullam vitae diam sapien. Ut ut nulla efficitur, consequat lacus nec, maximus libero. Phasellus in nulla nibh. Donec velit lacus, ultrices pharetra diam eleifend, vehicula imperdiet elit. Maecenas sit amet eros et eros congue fringilla ut vel eros. Etiam leo metus, ultricies ut imperdiet vel, scelerisque at purus. Morbi vestibulum risus vitae lacus hendrerit, eu sodales ex pretium.
	    	</p>
	    	<p>
	    		Pellentesque eu nunc quis magna faucibus fermentum sed sit amet orci. Suspendisse condimentum mauris sit amet elit porta commodo. Ut hendrerit, elit non eleifend suscipit, sem dolor fringilla eros, sit amet luctus libero arcu nec neque. Etiam ipsum velit, condimentum nec aliquet vitae, luctus at magna. Aliquam a placerat justo. Sed gravida, metus id accumsan pellentesque, sem augue convallis odio, eu consectetur quam nisl iaculis lacus. Fusce euismod, augue quis rhoncus dapibus, odio dolor tempor nulla, eu auctor lacus sapien non tortor. Aenean bibendum rhoncus velit. Sed sed mi dignissim, cursus purus at, semper urna. Morbi egestas eleifend turpis, vel euismod nibh cursus vel. Morbi varius et magna et maximus. Vivamus semper tempor velit, sed porttitor magna molestie at.
	    	</p>
	    </section>
	    <section>
	    	<div><h1>Section 4</h1></div>
	    	<p>
	    		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor nunc justo, sed volutpat enim aliquam sit amet. Vivamus sapien odio, porttitor id luctus eget, laoreet vel felis. Proin molestie lacinia orci, non ornare nibh blandit vel. Mauris imperdiet, enim vitae scelerisque sollicitudin, purus urna euismod erat, et dictum nisl mauris ultrices libero. Fusce iaculis erat ac suscipit lobortis. Maecenas fermentum urna ut nulla sollicitudin gravida. Proin varius urna purus. Duis at elementum metus, id placerat eros. Nunc in bibendum sapien, vel imperdiet diam. Pellentesque orci risus, pulvinar eu lobortis sit amet, placerat sed est. Cras quis sagittis nisl.
	    	</p>
	    	<p>
	    		Nullam vitae diam sapien. Ut ut nulla efficitur, consequat lacus nec, maximus libero. Phasellus in nulla nibh. Donec velit lacus, ultrices pharetra diam eleifend, vehicula imperdiet elit. Maecenas sit amet eros et eros congue fringilla ut vel eros. Etiam leo metus, ultricies ut imperdiet vel, scelerisque at purus. Morbi vestibulum risus vitae lacus hendrerit, eu sodales ex pretium.
	    	</p>
	    	<p>
	    		Pellentesque eu nunc quis magna faucibus fermentum sed sit amet orci. Suspendisse condimentum mauris sit amet elit porta commodo. Ut hendrerit, elit non eleifend suscipit, sem dolor fringilla eros, sit amet luctus libero arcu nec neque. Etiam ipsum velit, condimentum nec aliquet vitae, luctus at magna. Aliquam a placerat justo. Sed gravida, metus id accumsan pellentesque, sem augue convallis odio, eu consectetur quam nisl iaculis lacus. Fusce euismod, augue quis rhoncus dapibus, odio dolor tempor nulla, eu auctor lacus sapien non tortor. Aenean bibendum rhoncus velit. Sed sed mi dignissim, cursus purus at, semper urna. Morbi egestas eleifend turpis, vel euismod nibh cursus vel. Morbi varius et magna et maximus. Vivamus semper tempor velit, sed porttitor magna molestie at.
	    	</p>
	    </section>
	    <section>
	    	<div><h1>Section 5</h1></div>
	    	<p>
	    		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor nunc justo, sed volutpat enim aliquam sit amet. Vivamus sapien odio, porttitor id luctus eget, laoreet vel felis. Proin molestie lacinia orci, non ornare nibh blandit vel. Mauris imperdiet, enim vitae scelerisque sollicitudin, purus urna euismod erat, et dictum nisl mauris ultrices libero. Fusce iaculis erat ac suscipit lobortis. Maecenas fermentum urna ut nulla sollicitudin gravida. Proin varius urna purus. Duis at elementum metus, id placerat eros. Nunc in bibendum sapien, vel imperdiet diam. Pellentesque orci risus, pulvinar eu lobortis sit amet, placerat sed est. Cras quis sagittis nisl.
	    	</p>
	    	<p>
	    		Nullam vitae diam sapien. Ut ut nulla efficitur, consequat lacus nec, maximus libero. Phasellus in nulla nibh. Donec velit lacus, ultrices pharetra diam eleifend, vehicula imperdiet elit. Maecenas sit amet eros et eros congue fringilla ut vel eros. Etiam leo metus, ultricies ut imperdiet vel, scelerisque at purus. Morbi vestibulum risus vitae lacus hendrerit, eu sodales ex pretium.
	    	</p>
	    	<p>
	    		Pellentesque eu nunc quis magna faucibus fermentum sed sit amet orci. Suspendisse condimentum mauris sit amet elit porta commodo. Ut hendrerit, elit non eleifend suscipit, sem dolor fringilla eros, sit amet luctus libero arcu nec neque. Etiam ipsum velit, condimentum nec aliquet vitae, luctus at magna. Aliquam a placerat justo. Sed gravida, metus id accumsan pellentesque, sem augue convallis odio, eu consectetur quam nisl iaculis lacus. Fusce euismod, augue quis rhoncus dapibus, odio dolor tempor nulla, eu auctor lacus sapien non tortor. Aenean bibendum rhoncus velit. Sed sed mi dignissim, cursus purus at, semper urna. Morbi egestas eleifend turpis, vel euismod nibh cursus vel. Morbi varius et magna et maximus. Vivamus semper tempor velit, sed porttitor magna molestie at.
	    	</p>
	    </section>
	</main>
	<footer>
	    <section>
	    	<div>
	    		Copyrights &copy <?php echo date('Y'); ?> Todos os direitos reservados<br>
	    		Powered By <a href="https://proideas.com.br" target="_blank">Agência Digital Proideas</a>
	    	</div>
	    </section>
	</footer>
	<script src="custom.js"></script>
</body>
</html>