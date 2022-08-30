<?php
/**
 * @var \App\View\AppView $this
 * @var string[]|\Cake\Collection\CollectionInterface $suppliers
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 * @var \App\Model\Entity\Product $product
 * @var \Cake\Collection\CollectionInterface|string[] $suppliers
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);

?>

<!-- Nav Item - User Information -->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <h6 class="navbar-guest">Sunday Everyday</h6>
        <div class="topnav">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item-guest"><?= $this->Html->link(__('Login'), ['controller' => 'Staffs', 'action' => 'login'],['class'=>'nav-link']) ?>
                </li>
            </ul>

        </div>

    </div>
</nav>
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Blog</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&family=Zen+Kaku+Gothic+Antique:wght@300&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->


</head>


<body>
    <!-- Welcome-->
    <header class="masthead">
        <div class="container position-relative">
           <img class="sundayEverydayLogo-main" src="webroot\img\sundayEveryday_logo_black.png" />
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-black-50">
                        <!-- Page heading-->
                        <h1 class="mb-5"></h1> <!-- EMPTY -->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About-->
    <section class="testimonials text-center bg-light" id="aboutus">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-guest-header">Customer Portal</h2>
                    <hr class="divider divider-light" />
                </div>
            </div>
        </div>
    </section>

    <!-- Empty-->
    <section class="testimonials text-center bg-light" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-Black mt-0"></h2>
            </div>
        </div>
    </div>
    </section>

    <section class="testimonials text-center bg-light">
        <div class="container" id="product"">
            <h2 class="text-guest-subheading">Current Products:</h2>
            <div class="row" style="margin-top: 60px">
                <?php $i = 1; ?>
                <?php foreach ($products as $product): ?>
                    <div class="card card shadow mb-4 ">
                        <!-- <img class="img-fluid rounded-circle mb-3" src="assets/img/product-1.jpg" alt="Image1" /> -->
                        <?= $this->Html->image($product->image, ['class' => 'img-fluid rounded-circle mb-3','style'=>'max-height: 200px; max-width: 200px']) ?>
                        <h5 class="card-title"><?= h($product->name) ?></h5>
                        <p class="card-text">$<?= h($product->retail_price) ?></p>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                                data-bs-target="#myModal-<?php echo $i; // Displaying the increment ?>">
                            View More
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal-<?php echo $i; // Displaying the increment ?>" tabindex="-1"
                             role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-xl modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLongTitle"><?= h($product->name) ?></h4>
                                        <h5 class="modal-text" >Retail Price: $<?= h($product->retail_price) ?></h5>
                                        <button type="button" class="fa fa-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row align-items-center">
                                            <div
                                                class="col"><?= $this->Html->image($product->image, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                                <div style="max-width: 900px; margin-top: 15px">
                                                    <?php if (!empty($product->product_images)) : ?>
                                                        <?php foreach ($product->product_images as $image) : ?>
                                                            <tr>
                                                                <td><?= $this->Html->image($image->filename,['style'=>'max-height: 150px; max-width: 150px']) ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php $i++; ?>
                    </div>
                        <?php endforeach; ?>



            </div>
        </div>
    </section>

    <script>
        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>




