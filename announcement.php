<?php
$page_title = "Announcement";
include("./includes/header.php");
?>
<!-- Carousel -->
<section>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/web/carousel-1.jpg" class="d-block w-100 img-fluid" style="height: 550px; object-fit:cover;" data-bs-interval="1000">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Policy & Procedure Making Seminar / Workshop
                    </h5>
                    <p>
                        The Management Audit office conducted a “Policy & Procedure Making Seminar / workshop” last January 18-19 at Function Hall 7th Floor Academic Building.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/web/carousel-2.jpg" class="d-block w-100 img-fluid" style="height: 550px; object-fit:cover;" data-bs-interval="1000">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Nurturing minds, empowering education: TNEEP organizes outreach program for Malinta Elementary School
                    </h5>
                    <p>
                        “Give back from where you started,” was one of Mr. Bayalan’s statements during the appreciation ceremony at Malinta Elementary School on June 5, 2023.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/web/carousel-3.jpg" class="d-block w-100 img-fluid" style="height: 550px; object-fit:cover;" data-bs-interval="1000">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        PCU hosted CREATE Summit 2023: Uniting for Educational Excellence
                    </h5>
                    <p>
                        Presidents, Directors, Principals, and Deans that represent 19 UCCP institutions from different regions attended the first assembly of the Church Related Educational Action Towards Empowerment (CREATE) Summit 2023 hosted by Philippine Christian University-Manila last September 5-6, 2023, at the 7th Floor Function Hall, Science and Technology Building, PCU Manila.
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Two Columns Text -->
<section class="bg-light">
    <div class="row py-5 px-3">
        <div class="col-md-6 col-sm-12">
            <h1>
                Lorem ipsum dolor sit amet.
            </h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni aspernatur consectetur natus sequi. Illo explicabo, necessitatibus possimus similique, quasi quae error aliquam voluptas at harum dolorum illum earum nam alias nostrum, veritatis ipsa quibusdam totam qui enim aut magnam sit facere? Nobis quasi eveniet reiciendis, totam sapiente ipsam quidem itaque id voluptatem deleniti eius molestiae iste corrupti? Unde nam aliquid eius! Quod ex labore voluptatibus sunt harum! Perferendis optio, earum repudiandae, nihil sed quod magni ex qui quo id numquam unde totam quidem aut atque deserunt minima veritatis doloremque alias omnis? Fugit provident ipsam eius labore beatae impedit deserunt nihil?
            </p>
        </div>
        <div class="col-md-6 col-sm-12">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo pariatur porro veritatis repellat voluptatibus harum maiores facere molestiae, nostrum amet enim ex sed reprehenderit mollitia a molestias unde quis nam consectetur esse natus ratione! Eaque debitis voluptatibus officia, porro totam iure cum placeat voluptates! Qui id commodi nihil? Quibusdam, modi hic. Qui, incidunt, a provident architecto eius nostrum adipisci corrupti aperiam enim ipsa veniam. Nesciunt earum aut necessitatibus autem quasi ut quos voluptate magni nostrum exercitationem fugit ex dolor vero odio, velit doloremque minima voluptates. Aut voluptatem facere nesciunt debitis officia autem optio! Mollitia, facilis? Minima, nam mollitia. Excepturi enim aliquid sequi asperiores sed! Necessitatibus, sint facilis harum ratione, quisquam quidem animi, laboriosam repellat voluptatum ad rem. Iusto, dolorum iure?
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-img-cover-sub-section py-5">
    <div class="container-lg">
        <div class="row align-items-end">
            <div class="col-md-12 text-light text-center text-black">
                <h3 class="fw-bold">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, pariatur.
                </h3>
                <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, ex?</small><br>
                <button type="button" class="btn btn-primary">
                   <a href="https://dasma.pcu.edu.ph/news/" target="_blank" class="text-white text-decoration-none">
                       See More
                   </a> 
                </button>
            </div>
        </div>
    </div>
</section>
<?php
include("./includes/footer.php");
?>