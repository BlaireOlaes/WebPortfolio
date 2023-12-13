<!DOCTYPE HTML>
<html>

<head>
    <title>Portfolio</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload landing">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <h1 id="logo"><a href="index.html">Portfolio</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="{{ route('login') }}" class="button primary" title="Edit Page">Login & Edit</a></li>
                </ul>
            </nav>
            <style>
                .HrThree {
                    margin-top: 20px;
                    margin-bottom: 20px;
                }

                .HrFour {
                    margin-top: 10px;
                    margin-bottom: 10px;
                }

                .ContFour {
                    margin-bottom: 10px;
                }
            </style>
        </header>

        <!-- Banner -->
        <section id="banner">
            <div class="content">

                <header>
                    <h2>{{ $users->fullName }}</h2>
                    <p>{{ $users->section }}</p>
                </header>
                <span class="image"><img
                        src="{{ asset('images/profile.jpg') }}"
                        alt="" /></span>
            </div>
            <a href="#one" class="goto-next scrolly">Next</a>
        </section>

        <!-- One -->
        {{-- Background Pic --}}
        <section id="one" class="spotlight style1 bottom">
            <span class="image fit main"><img src="{{ asset('images/Lovers at dusk - Animated pixel art.gif') }}" alt="" /></span>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-4 col-12-medium">
                            <h3 style="margin-bottom: 10px">Introduction</h3>
                            <p>{{ $infos->introduction }}
                            </p>
                        </div>
                        <div class="col-4 col-12-medium">
                            <h3 style="margin-bottom: 10px">Biographical Information</h3>
                            <p>{{ $infos->bio }}</p>
                        </div>
                        <div class="col-4 col-12-medium">
                            <h3 style="margin-bottom: 10px">Educational Background</h3>
                            <p>{{ $infos->edu }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#two" class="goto-next scrolly">Next</a>
        </section>

        <!-- Two -->
        <section id="two" class="spotlight style2 right">
            {{-- Background Pic --}}
            <span class="image fit main"><img src="{{ asset('images/backskill.jpg') }}" alt="" /></span>
            <div class="content">
                <header>
                    <h2>Skills</h2>
                </header>
                <hr>
                <h3 style="margin-bottom: 10px">{{ $infos->skill1 }}</h3>
                <p style="margin-bottom: 10px">{{ $infos->skill1Dis }}</p>
                <hr>
                <h3 style="margin-bottom: 10px">{{ $infos->skill2 }}</h3>
                <p style="margin-bottom: 10px">{{ $infos->skill2Dis }}</p>
                <hr>
                <h3 style="margin-bottom: 10px">{{ $infos->skill3 }}</h3>
                <p style="margin-bottom: 10px">{{ $infos->skill3Dis }}</p>
            </div>
            <a href="#three" class="goto-next scrolly">Next</a>
        </section>

        <!-- Three -->
        <section id="three" class="spotlight style3 left">
            {{-- Background Pic --}}
            <span class="image fit main bottom"><img src="{{ asset('images/hob.png') }}" alt="" /></span>
            <div class="content">
                <header>
                    <h2>Hobbies</h2>
                    <p>{{ $infos->Hob }}</p>
                </header>
                <hr class="HrThree">
                <h3 style="margin-bottom: 10px">{{ $infos->Hob1 }}</h3>
                <p style="margin-bottom: 10px">{{ $infos->Hob1Dis }}</p>
                <hr class="HrThree">
                <h3 style="margin-bottom: 10px">{{ $infos->Hob2 }}</h3>
                <p style="margin-bottom: 10px">{{ $infos->Hob2Dis }}</p>
                <hr class="HrThree">
                <h3 style="margin-bottom: 10px">{{ $infos->Hob3 }}</h3>
                <p style="margin-bottom: 10px">{{ $infos->Hob3Dis }}</p>
            </div>


            <a href="#four" class="goto-next scrolly">Next</a>
        </section>

        <!-- Four -->
        <section id="four" class="spotlight style2 right">
            {{-- Background Pic --}}
            <span class="image fit main"><img src="{{ asset('images/𝐌𝐘 𝐘𝐄𝐋𝐋𝐎𝐖 𝐌𝐎𝐌𝐄𝐍𝐓 ✓ ; Karl Jacobs.gif') }}" alt="" /></span>

            <div class="content">
                <header>
                    <h2>Likes</h2>
                </header>
                <hr class="HrFour">
                <h3>{{ $infos->Like1 }}</h3>
                <p>{{ $infos->Like1Dis }}</p>
                <hr>
                <h3>{{ $infos->Like2 }}</h3>
                <p>{{ $infos->Like2Dis }}
                </p>
                <hr>
                <h3>{{ $infos->Like3 }}</h3>
                <p>{{ $infos->Like3Dis }}</p>
            </div>
            <a href="#five" class="goto-next scrolly">Next</a>
        </section>

        {{-- Five --}}
        <section id="five" class="spotlight style2 left">
            {{-- Background Pic --}}
            <span class="image fit main"><img src="{{ asset('images/Still on.gif') }}" alt="" /></span>

            <div class="content">
                <header>
                    <h2>Dislikes</h2>
                </header>
                <hr class="HrFour">
                <h3>{{ $infos->Dis1 }}</h3>
                <p>{{ $infos->Dis1Dis }}</p>
                <hr>
                <h3>{{ $infos->Dis2 }}</h3>
                <p>{{ $infos->Dis2Dis }}
                </p>
                <hr>
                <h3>{{ $infos->Dis3 }}</h3>
                <p>{{ $infos->Dis3Dis }}</p>
            </div>
            <a href="#six" class="goto-next scrolly">Next</a>
        </section>

        <!-- Six -->
        <section id="six" class="wrapper style1 special fade-up">
            <div class="container">
                <header class="major">
                    <h2>Contact Information</h2>
                    <p>You can contact me here!</p>
                </header>
                <div class="box alt">
                    <div class="row gtr-uniform">
                        <section class="col-6 col-6-medium col-12-xsmall">
                            <span class="icon solid alt major fa-comment"></span>
                            <h3>Contact Number</h3>
                            <p>{{ $users->contact }}</p>
                        </section>
                        <section class="col-6 col-6-medium col-12-xsmall">
                            <span class="icon solid alt major fa-paper-plane"></span>
                            <h3>email</h3>
                            <p>{{ $users->email }}</p>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <!-- Five -->


        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a href="https://twitter.com/Nerokukun" class="icon brands alt fa-twitter"><span
                            class="label">Twitter</span></a></li>
                <li><a href="https://www.facebook.com/blairjames.olaes" class="icon brands alt fa-facebook-f"><span
                            class="label">Facebook</span></a>
                </li>
                </li>
                <li><a href="https://www.instagram.com/neroookun/" class="icon brands alt fa-instagram"><span
                            class="label">Instagram</span></a>
                </li>
                <li><a href="https://github.com/BlaireOlaes" class="icon brands alt fa-github"><span
                            class="label">GitHub</span></a></li>
                <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWsltqlHQQCwFGqmnqmMdvmVCshJJGsxGbtkqhbzDZKBhrxvPwPKLxkdVLlZqKglQShCDblPb"
                        class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>Social Media</li>
            </ul>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dropotron.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('js/browser.min.js') }}"></script>
    <script src="{{ asset('js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>