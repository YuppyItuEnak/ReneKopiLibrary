@include('navbar')
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
</head>

<body class=""> --}}
<!---Home--->
<section id="home">
    <div class="header">
        <img src="Images/Renekopi7.jpg" alt="" class="bgimage img-fluid position-relative w-100"
            style="height: 95vh">
        <div class="d-flex justify-content-md-center justify-content-center">
            <div class="textover">
                <h1
                    class="container col-md-3 offset-md-3 display-1 font-secondary text-white mt-n3 mb-md-4 d-none d-md-block">
                    RENEKOPI
                </h1>
                <h1 class="container col-md-12 offset-md-3 text-uppercase font-secondary text-white d-none d-md-block">
                    To Fullfil Your
                    Coffee Passion
                </h1>
                <ul class="section-btn ">
                    <button type="button" class="btn btn-outline-secondary btn-lg   ">
                        Discover More
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                        </svg>
                    </button>

                </ul>
            </div>
        </div>

    </div>

    <!---Introduce ReneKopi--->
    <div class="container text-center mx-auto my-auto mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-1 col-md-10 col-sm-12">
                <h3 class="text-white text-opacity-100 quote text-outline">Introducing ReneKopi</h3>
                <h1 class="text-white fs-4 text-opacity-100 quote2 text-outline">"Kopi itu minuman Sederhana, tidak
                    mengintimidasi
                    karena memang
                    untuk semua orang dan semua kalangan, tanpa terkecuali"</h1>
            </div>
        </div>
    </div>

    <!----Button to go to product Page--->
    <div class="d-flex justify-content-center align-items-center mx-auto">
        <div class="container mx-auto mb-10">
            <div class="row p-4">
                <div class="col-12 col-md-4 mx-auto mt-4">
                    <div class="card justify-content-sm-center mx-auto" style="width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center m-2">
                                <img class="rounded-circle bg-black justify-content-center circle2"
                                    src="/Images/Renekopi4.png" alt="">
                            </div>
                            <h5 class="card-title">Coffee Menu</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Coffee Only</h6>
                            <p class="card-text">Three cups of coffee a day keeps the doctor away!</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-outline-dark">Check it</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mx-auto">
                    <div class="card mx-auto mt-4" style="width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center m-2">
                                <img class="rounded-circle bg-black justify-content-center circle2"
                                    src="/Images/Renekopi5.png" alt="">
                            </div>
                            <h5 class="card-title">Non-Coffee Menu</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Non-Coffee Only</h6>
                            <p class="card-text">I drink to make other people more interesting.</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-outline-dark">Check it</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mx-auto">
                    <div class="card mx-auto mt-4" style="width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center m-2">
                                <img class="rounded-circle bg-black justify-content-center circle2"
                                    src="/Images/Renekopi6.png" alt="">
                            </div>
                            <h5 class="card-title">Food&Dessert Menu</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Food&Dessert Only</h6>
                            <p class="card-text">A balanced diet is a cookie in each hand.</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-outline-dark">Check it</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="about" class="bg-black" style="height: 95vh">
        <div class="container text-center">
            <div class="row">
                <!---Renekopi Slogan--->
                <div class="col align-self-center">
                    <img class="renekopilogo" src="Images/Renekopi3.png" alt="">
                    <h1 class="fs-1 text-white">BOLD . ON POINT . PROVOKATIF</h1>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <!---About Renekopi filosofi--->
                <div class="col-md-6 offset-md-3 text-white">ReneKopi, tidak hanya berbicara rasa. kami juga
                    mengkreasikan
                    sebuah komunikasi visual yangkami rancang sedemikian rupa. Komunikasi yang menjadi pilar konten
                    media sosial
                    RENEKOPI. Komunikasi visual tentang merek RENEKOPI itu sendiri. Konsep ngopi tanpa harus pakek
                    filosofi,
                    hingga sindiran tentang budaya ngopi saat ini
                </div>
            </div>
        </div>
    </section>
    <!-- Video -->
    <video muted autoplay="" loop="">
        <source src="Images/kopi.mp4" type="video/mp4">
    </video>
</section>








</body>

</html>
