<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/core/config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $ini['app_title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $ini['app_url'] ?>/assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $ini['app_url'] ?>/assets/css/about.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="<?php echo $ini['app_url'] ?>/assets/img/favicon.jpg" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <?php include_once($ini['app_dir'] . "/templates/header.html") ?>
    <?php include_once($ini['app_dir'] . "/templates/nav.html") ?>
    <main>
        <div class="body-overlay">
            <div class="modal-box" id="edward">
                <div class="modal-header">
                    <div class="modal-author-name">Edward Davidson</div>
                    <i class="fas fa-times" onClick="showModal('edward')"></i>
                </div>
                <div class="modal-author-wrapper">
                    <img src="<?php echo $ini['app_url'] ?>/assets/img/about/edward.jpg" alt="Edward" class="img-author" />
                    <div class="modal-author-overlay">
                        <div class="modal-author-footer">
                            <div class="modal-author-name">Edward Davidson</div>
                            <div class="modal-author-info">Title</div>
                        </div>
                    </div>
                </div>
                <div class="modal-author-info">
                    In charge of researching relevant topics and finding appropriate information to be used in reports
                    and product development.
                </div>
            </div>
            <div class="modal-box" id="james">
                <div class="modal-header">
                    <div class="modal-author-name">James Waller</div>
                    <i class="fas fa-times" onClick="showModal('james')"></i>
                </div>
                <div class="modal-author-wrapper">
                    <img src="<?php echo $ini['app_url'] ?>/assets/img/about/james.jpg" alt="Edward" class="img-author" />
                    <div class="modal-author-overlay">
                        <div class="modal-author-footer">
                            <div class="modal-author-name">James Walker</div>
                            <div class="modal-author-info">Title</div>
                        </div>
                    </div>
                </div>
                <div class="modal-author-info">
                    Ensures that all members in the group are all working together and that everyone is on the same
                    track, will help the team to implement the final solution.
                </div>
            </div>
            <div class="modal-box" id="stewart">
                <div class="modal-header">
                    <div class="modal-author-name">Stewart McCafferty</div>
                    <i class="fas fa-times" onClick="showModal('stewart')"></i>
                </div>
                <div class="modal-author-wrapper">
                    <img src="<?php echo $ini['app_url'] ?>/assets/img/about/stewart.jpg" alt="Edward" class="img-author" />
                    <div class="modal-author-overlay">
                        <div class="modal-author-footer">
                            <div class="modal-author-name">Stewart McCafferty</div>
                            <div class="modal-author-info">Title</div>
                        </div>
                    </div>
                </div>
                <div class="modal-author-info">
                    Responsible for helping to design and developing the look of the website by using any new or
                    previous knowledge or skills.
                </div>
            </div>
            <div class="modal-box" id="josie">
                <div class="modal-header">
                    <div class="modal-author-name">Josie Whitehead</div>
                    <i class="fas fa-times" onClick="showModal('josie')"></i>
                </div>
                <div class="modal-author-wrapper">
                    <img src="<?php echo $ini['app_url'] ?>/assets/img/about/josie.jpg" alt="Edward" class="img-author" />
                    <div class="modal-author-overlay">
                        <div class="modal-author-footer">
                            <div class="modal-author-name">Josie Whitehead</div>
                            <div class="modal-author-info">Title</div>
                        </div>
                    </div>
                </div>
                <div class="modal-author-info">
                    Is responsible for keeping track of what is discussed throughout meetings and keeping track of the
                    required documentation.
                </div>
            </div>
            <div class="modal-box" id="pham">
                <div class="modal-header">
                    <div class="modal-author-name">Pham Hue</div>
                    <i class="fas fa-times" onClick="showModal('pham')"></i>
                </div>
                <div class="modal-author-wrapper">
                    <img src="<?php echo $ini['app_url'] ?>/assets/img/about/pham.jpg" alt="Edward" class="img-author" />
                    <div class="modal-author-overlay">
                        <div class="modal-author-footer">
                            <div class="modal-author-name">Pham Hue</div>
                            <div class="modal-author-info">Title</div>
                        </div>
                    </div>
                </div>
                <div class="modal-author-info">
                    Responsible for analysing what the requirements for the project and testing to ensure that the final
                    project meets all the requirements.
                </div>
            </div>
            <div class="modal-box" id="uygar">
                <div class="modal-header">
                    <div class="modal-author-name">Uygar Jarakus</div>
                    <i class="fas fa-times" onClick="showModal('uygar')"></i>
                </div>
                <div class="modal-author-wrapper">
                    <img src="<?php echo $ini['app_url'] ?>/assets/img/about/uygar.jpg" alt="Edward" class="img-author" />
                    <div class="modal-author-overlay">
                        <div class="modal-author-footer">
                            <div class="modal-author-name">Uygar Karakus</div>
                            <div class="modal-author-info">Title</div>
                        </div>
                    </div>
                </div>
                <div class="modal-author-info">
                    Responsible for developing and designing the website. Also helping out with any documentation
                    needed.
                </div>
            </div>
        </div>
        <div class="container main">
            <section>
                <div class="section_header">About Us</div>
                <div class="section_body">
                    <p>Lorem ipsum dolor sit amet, cu est evertitur posidonium, labitur quaeque philosophia no cum. Eu
                        natum alterum qui. Ignota intellegat deterruisset an mei, cu alii deseruisse pro, per id quem
                        verterem. Impetus oblique offendit eam ex, at enim cibo discere vel.
                    </p>
                </div>
            </section>
            <section class="authors">
                <div class="section_header">Authors</div>
                <div class="section_body">
                    <div class="grid">
                        <div class="author-wrapper" onClick="showModal('edward')">
                            <img src="<?php echo $ini['app_url'] ?>/assets/img/about/edward.jpg" alt="Edward" class="img-author" />
                            <div class="author-overlay">
                                <div class="author-footer">
                                    <div class="author-name">Edward Davidson</div>
                                    <div class="author-info">Title</div>
                                </div>
                            </div>
                        </div>
                        <div class="author-wrapper" onClick="showModal('james')">
                            <img src="<?php echo $ini['app_url'] ?>/assets/img/about/james.jpg" alt="James" class="img-author" />
                            <div class="author-overlay">
                                <div class="author-footer">
                                    <div class="author-name">James Waller</div>
                                    <div class="author-info">Title</div>
                                </div>
                            </div>
                        </div>
                        <div class="author-wrapper" onClick="showModal('stewart')">
                            <img src="<?php echo $ini['app_url'] ?>/assets/img/about/stewart.jpg" alt="Stewart" class="img-author" />
                            <div class="author-overlay">
                                <div class="author-footer">
                                    <div class="author-name">Stewart McCafferty</div>
                                    <div class="author-info">Title</div>
                                </div>
                            </div>
                        </div>
                        <div class="author-wrapper" onClick="showModal('josie')">
                            <img src="<?php echo $ini['app_url'] ?>/assets/img/about/josie.jpg" alt="Josie" class="img-author" />
                            <div class="author-overlay">
                                <div class="author-footer">
                                    <div class="author-name">Josie Whitehead</div>
                                    <div class="author-info">Title</div>
                                </div>
                            </div>
                        </div>
                        <div class="author-wrapper" onClick="showModal('pham')">
                            <img src="<?php echo $ini['app_url'] ?>/assets/img/about/pham.jpg" alt="Pham" class="img-author" />
                            <div class="author-overlay">
                                <div class="author-footer">
                                    <div class="author-name">Pham Hue</div>
                                    <div class="author-info">Title</div>
                                </div>
                            </div>
                        </div>
                        <div class="author-wrapper" onClick="showModal('uygar')">
                            <img src="<?php echo $ini['app_url'] ?>/assets/img/about/uygar.jpg" alt="Uygar" class="img-author" />
                            <div class="author-overlay">
                                <div class="author-footer">
                                    <div class="author-name">Uygar Karakus</div>
                                    <div class="author-info">Title</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="section_header">Section 3</div>
                <div class="section_body">
                    <p>Lorem ipsum dolor sit amet, cu est evertitur posidonium, labitur quaeque philosophia no cum. Eu
                        natum alterum qui. Ignota intellegat deterruisset an mei, cu alii deseruisse pro, per id quem
                        verterem. Impetus oblique offendit eam ex, at enim cibo discere vel.
                    </p>
                </div>
            </section>
            <section>
                <div class="section_header">Section 4</div>
                <div class="section_body">
                    <p>Lorem ipsum dolor sit amet, cu est evertitur posidonium, labitur quaeque philosophia no cum. Eu
                        natum alterum qui. Ignota intellegat deterruisset an mei, cu alii deseruisse pro, per id quem
                        verterem. Impetus oblique offendit eam ex, at enim cibo discere vel.</p>
                </div>
            </section>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="<?php echo $ini['app_url']; ?>/assets/js/main.js"></script>
    <script>
        function showModal(id) {
            if ($("#" + id).hasClass('show')) {
                $("#" + id).removeClass("show")

                setTimeout(function() {
                    console.log("OUTPUT")

                    $(".body-overlay").removeClass("show")
                }, 2000);

            } else {
                $(".body-overlay").addClass("show")

                setTimeout(function() {
                    console.log("OUTPUT")

                    $("#" + id).addClass("show")
                }, 200);
            }
        }
    </script>
</body>

</html> 