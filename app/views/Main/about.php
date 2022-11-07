<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $this->view('Layout/Head');
    ?>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/" />
    <link rel="stylesheet" href="/resources/styles/carousel.css">
    <link rel="stylesheet" href="/resources/styles/bootstrap.min.css">
    <title>U Glean</title>
</head>
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .text-color h1,
    .text-color p {
        color: white;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>

<body>
    <?php $this->view('Layout/Navigation'); ?>
    <!-- START THE FEATURETTES -->
    <main class="container">
        <h1 style="padding: 2rem;">About us</h1>
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">
                    LAUNCH OF THE PROGRAM TOMORROW’S FOREST
                    <span class="text-muted">GREEN INFRASTRUCTURE</span>
                </h2>
                <p class="lead">
                    With a grant from the Government of Quebec, Earth Day Canada will be implementing several
                    pilot projects on agricultural corridors to document the climate benefits of developments
                    and practices in agricultural settings 🌾 Click to learn more!
                </p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img featurette-image  mx-auto" src="/resources/images/art1.jpeg" height="400" width="500" style="border-radius: 10px;box-shadow:inset 30px;">
                <title>Green</title>
                <rect width="100%" height="100%" fill="#eee" />
                </img>

            </div>
        </div>

        <hr class="featurette-divider">

        <div id="event" class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">FOR APRIL 22, JOIN THE MOVEMENT!<span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Check out our suggestions for activities and initiatives to join near you in our online calendar!</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img featurette-image  mx-auto" width="400" height="400" src="/resources/images/art2.jpg" style="border-radius: 10px;box-shadow:inset 30px;">
                <title>Event</title>
                <rect width="100%" height="100%" fill="#eee" />
                </i>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"> CALL IN SICK FOR EARTH DAY <span class="text-muted">Checkmate.</span></h2>
                <p class="lead"> Discover the 2022 edition of the Earth Day campaign that highlights eco-anxiety, produced by the creative agency Sid Lee.
                    #CallinSickforEarthDay #RemedyTogether #EarthDay2022</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image  mx-auto" width="500" height="400" src="/resources/images/art3.jpg" role="img" style="border-radius: 10px;box-shadow:inset 30px;">
                <title>What's new</title>
                <rect width="100%" height="100%" fill="#eee" />
                </img>

            </div>
        </div>
        <hr class="featurette-divider">
    </main>


    <!-- /END THE FEATURETTES -->
    <?php $this->view('Layout/Footer'); ?>
    <?php $this->view('Layout/Scripts'); ?>
    </main>
</body>

</html>