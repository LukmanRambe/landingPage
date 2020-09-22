<?php include "./header.php" ?>

<section id="contact">

    <div class="container justify-content-center text-center mb-5 mt-5">
        <h2>Contact Us</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="container">

                    <div class="text text-lg-left contact-info">
                        <h2>Website Factory</h2>
                        <p>If there are things you do not understand or you want to consult regarding digital marketing,
                            please
                            contact us. We will be happy to respond immediately</p>

                        <div class="container contact-list">
                            <div class="row">
                                <div class="col-12">
                                    <div>
                                        <i class="fas fa-map-marker-alt col-1"></i>
                                        <p>Jalan Bantan No. 37</p>
                                        <p>Kecamatan Medan Tembung, Medan.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div>
                                        <i class="fas fa-phone col-1"></i>
                                        <p>Phone :</p>
                                        <p>+62 852 6540 2519</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div>
                                        <i class="fas fa-envelope col-1"></i>
                                        <p>E-mail :</p>
                                        <p>lukmanrambe1945@gmail.com</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="container contact-card mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title text-center">Contact Us</h6>
                            <form action="contact.php" method="POST">
                                <input type="email" name="email" placeholder="E-mail"><br><br>
                                <input type="password" name="password" placeholder="Password"><br><br>
                                <textarea name="message" cols="30" rows="10" placeholder="Your Message"></textarea><br>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

</html>

<?php include "./footer.php" ?>