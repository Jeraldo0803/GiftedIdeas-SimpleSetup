<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gifted Ideas</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&amp;display=swap">
    <link rel="stylesheet" href="../assets/css/Carousel-Multi-Image--ISA-.css">
    <link rel="stylesheet" href="../assets/css/Hero-Clean-Reverse-images.css">
    <link rel="stylesheet" href="../assets/css/Lightbox-Gallery-baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div data-include="templates/header"></div>
    
    <section class="photo-gallery py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;">Products</h2>
                </div>
                <div class="col-xl-1">
                    <div class="dropdown"><button class="btn btn-light dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">Sort by</button>
                        <div class="dropdown-menu"><a class="dropdown-item" onclick="sortasc()"><button class="btn btn-light" type="button" onclick="sortasc()">Sort A-Z</button></a><a class="dropdown-item"><button class="btn" type="button" onclick="sortdesc()">Sort Z-A</button></a></div>
                    </div>
                </div>
            </div>
            <div class="row gx-5 gy-5 row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-4 photos" id="main">
                <div class="col item" id="dv_7"><a href="product_editor.php">
                        <div class="card">
                            <div class="card-body" style="background: #dedede;text-align: center;"><img class="img-fluid" src="../assets/img/product1shirt.jpg">
                                <h4 class="card-title" style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;">Shirt</h4>
                            </div>
                        </div>
                    </a></div>
                <div class="col item" id="dv_3"><a href="product_editor.php">
                        <div class="card">
                            <div class="card-body" style="background: #dedede;text-align: center;"><img class="img-fluid" src="../assets/img/product2mug.jpg">
                                <h4 class="card-title" style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;">Mug</h4>
                            </div>
                        </div>
                    </a></div>
                <div class="col item" id="dv_1"><a href="product_editor.php">
                        <div class="card">
                            <div class="card-body" style="background: #dedede;text-align: center;"><img class="img-fluid" src="../assets/img/product3cup.jpg">
                                <h4 class="card-title" style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;">Cup</h4>
                            </div>
                        </div>
                    </a></div>
                <div class="col item" id="dv_4"><a href="product_editor.php">
                        <div class="card">
                            <div class="card-body" style="background: #dedede;text-align: center;"><img class="img-fluid" src="../assets/img/product4pen.jpg" style="background: #ffffff;">
                                <h4 class="card-title" style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;">Pen</h4>
                            </div>
                        </div>
                    </a></div>
                <div class="col item" id="dv_2"><a href="product_editor.php">
                        <div class="card">
                            <div class="card-body" style="background: #dedede;text-align: center;"><img class="img-fluid" src="../assets/img/product5jacket.jpg" style="background: #ffffff;">
                                <h4 class="card-title" style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;">Jacket</h4>
                            </div>
                        </div>
                    </a></div>
                <div class="col item" id="dv_6"><a href="product_editor.php">
                        <div class="card">
                            <div class="card-body" style="background: #dedede;text-align: center;"><img class="img-fluid" src="../assets/img/product6pillow.jpg" style="background: #ffffff;" width="254" height="135">
                                <h4 class="card-title" style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;">Pillow case</h4>
                            </div>
                        </div>
                    </a></div>
                <div class="col item" id="dv_5"><a href="product_editor.php">
                        <div class="card">
                            <div class="card-body" style="background: #dedede;text-align: center;"><img class="img-fluid" src="../assets/img/product7phonecase.jpg" style="background: #ffffff;">
                                <h4 class="card-title" style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;">Phone case</h4>
                            </div>
                        </div>
                    </a></div>
                <div class="col item" id="dv_8"><a href="product_editor.php">
                        <div class="card">
                            <div class="card-body" style="background: #dedede;text-align: center;"><img class="img-fluid" src="../assets/img/product8totebag.jpg" style="background: #ffffff;">
                                <h4 class="card-title" style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;">Tote bag</h4>
                            </div>
                        </div>
                    </a></div>
            </div>
        </div>
    </section>
	<script>
	function sortasc(){    
	var main = document.getElementById( 'main' );

	[].map.call( main.children, Object ).sort( function ( a, b ) {
		return +a.id.match( /\d+/ ) - +b.id.match( /\d+/ );
	}).forEach( function ( elem ) {
		main.appendChild( elem );
	});
	}
		
	function sortdesc(){    
	var main = document.getElementById( 'main' );

	[].map.call( main.children, Object ).sort( function ( b, a ) {
		return +a.id.match( /\d+/ ) - +b.id.match( /\d+/ );
	}).forEach( function ( elem ) {
		main.appendChild( elem );
	});
	}
	</script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/dom-to-image.min.js"></script>
    <script src="../assets/js/fabric.min.js"></script>
    <script src="../assets/js/FileSaver.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery.js"></script>
</body>

</html>