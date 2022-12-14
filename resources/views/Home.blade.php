@extends('layouts.app')

@section('body')
    <!---Home--->
    <section id="home">
        <div class="header">
            <img src="Images/Renekopi7.jpg" alt="" class="bgimage img-fluid position-relative w-100"
                style="height: 95vh">
            <div class="d-flex justify-content-md-center justify-content-center">
                <div class="textover">
                    <h1 class="container offset-3 display-1 font-secondary text-white mt-3 mb-4 d-block text-outline">
                        RENEKOPI
                    </h1>
                    <h1 class="container offset-3 text-uppercase font-secondary text-white d-block">
                        To Fullfil Your
                        Coffee Passion
                    </h1>
                    <ul class="section-btn ">
                        <a href="#product" type="button"
                            class="btn btn-outline-secondary btn-lg offset-3 text-white text-outline">
                            Discover More
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg>
                        </a>

                    </ul>
                </div>
            </div>

        </div>

        <!---Introduce ReneKopi--->
        <div id="product" class="container text-center mx-auto my-auto mt-4">
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
                                <div class="d-grid gap-2 mb-96">
                                    <a href="coffees" class="btn btn-outline-dark">Check it</a>
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
                                    <a href="noncoffees" class="btn btn-outline-dark">Check it</a>
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
                                <h5 class="card-title">Food & Snacks Menu</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Food & Snacks Only</h6>
                                <p class="card-text">A balanced diet is a cookie in each hand.</p>
                                <div class="d-grid gap-2">
                                    <a href="foodnsnacks" class="btn btn-outline-dark">Check it</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="about" style="background: #3f4e4f">
            <div class="container text-center">
                <div class="row">
                    <!---Renekopi Slogan--->
                    <div class="col align-self-center">
                        <img class="renekopilogo mt-5" src="Images/Renekopi3.png" alt="">
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

            <div class="text-center mt-5 mb-5">
                <h1 class="text-white font-semibold mt-5">Renekopi Location
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="map bi bi-map text-white" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                    </svg>
                </h1>

                <div class="d-none d-md-block">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.4008941077386!2d112.71890231477524!3d-7.308778994725104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb78acf8ffff%3A0xdd441e5ab849a5fc!2sRenekopi!5e0!3m2!1sen!2sid!4v1667314137481!5m2!1sen!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="d-block d-md-none">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.4008941077386!2d112.71890231477524!3d-7.308778994725104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb78acf8ffff%3A0xdd441e5ab849a5fc!2sRenekopi!5e0!3m2!1sen!2sid!4v1667314137481!5m2!1sen!2sid"
                        width="300" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>



            <div class="text-center">
                <h1 class="display-1 text-white font-secondary mt-5">Contacts</h1>
                <p class="fs-5 text-white">Get in touch with us for more information <svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg></p>
            </div>

            <div class="d-flex justify-content-center align-items-center mx-auto">

                <div class="container mx-auto mb-10">
                    <div class="row p-4">
                        <div class=" col-12 col-md-4 mx-auto mt-4">
                            <h3 class="text-center text-white">
                                <a href="https://wa.me/6289677889969?text=Halo,%20saya%20memiliki%20pertanyaan%20mengenai%20renekopi"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="wa bi bi-whatsapp text-white d-flex justify-content-sm-center mx-auto"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                    </svg>
                                </a>
                                Whatsapp
                            </h3>
                        </div>
                        <div class=" col-12 col-md-4 mx-auto mt-4">

                            <h3 class="text-center text-white">
                                <a href="https://www.instagram.com/renekopi/?hl=en" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="ig bi bi-instagram text-white d-flex justify-content-sm-center mx-auto"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                </a>
                                Instagram
                            </h3>

                        </div>
                        <div class=" col-12 col-md-4 mx-auto mt-4">
                            <h3 class="text-center text-white">
                                <a href="tel:+6289677889969">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="phone bi bi-telephone text-white d-flex justify-content-sm-center mx-auto"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                </a>
                                Phone
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Video -->
        <video muted autoplay="" loop="" height="100px">
            <source src="Images/kopi.mp4" type="video/mp4">
        </video>
    </section>
@endsection
