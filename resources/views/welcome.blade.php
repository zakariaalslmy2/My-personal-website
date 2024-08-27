<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >زكريا السلمي  - مطور مواقع الإلكترونية </title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css.map') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

</head>

<body>

    <span class="loader"></span>
    <!--/ Nav Star /-->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav" dir="ltr">
        <div class="container">
            <!-- <img class="logo" src="{{ asset('dashboard/images/logo1.png') }}" alt=""> -->
            <a class="navbar-brand js-scroll" href="/">zakaria-Alslmy</a>
            <button class="navbar-toggler collapsed" type="button">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#blog">مدونتي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#contact">توصل معي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#work">مشاريعي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#service">خدماتي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#about">من انا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="/">الرئيسية</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>





    {{-- home page --}}
    <section class="home_intro container text-center">
        <div class="content">
            <div class="text">
                <h1 class="intro-title mb-4">I'm zakaria alslmy</h1>
                <p class="intro-subtitle">
                <p > مطور مواقع الاكترونية<br> بستخدام </p>
                <strong>php | Laravel | bootstrap | mysql </strong>
                </p>
                <a href="#service" class="btn btn-primary mb-2">خدماتي</a>
            </div>
            <div class="image">
                <img src="{{ asset('images/zak.jpg') }}" alt="image" style="border-radius: 10px" />
            </div>
        </div>
    </section>
    {{-- about --}}
    <section id="about" class="about-mf sect-pt4 route mt-5" dir="ltr">
        <div class="">
            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="title-box text-center">
                                <h3 class="title-a">من أنا</h3>
                                <p class="subtitle-a">
                                    إليك نظرة على مسيرتي المهنية وخبراتي
                                </p>
                                <div class="line-mf"></div>
                            </div>


                            <div class="col-sm-12 col-lg-12">
                                <div class="about-me  pt-md-0">
                                    <p class="lead" dir="rtl">
                                        مرحبًا بكم في موقعي الشخصي. أنا زكريا السلمي مطور ويب مستقل وخريج في مجال تكنولوجيا
                                        المعلومات بجامعة الجزيرة   في اليمن<br><br>أجمع بين شغفي
                                        بتطوير
                                        الويب
                                        واهتمامي
                                        العميق بأمن المعلومات لتقديم حلول ويب متقدمة وبديهية.
                                        <br>
                                        <br>

                                        أتمتع بخلفية قوية في تطوير المواقع  ولدي خبرة خاصة باستخدام Laravel، مما يمكنني
                                        من إضافة قيمة كبيرة إلى كل مشروع أعمل عليه. أسعى دومًا لاستخدام أحدث التقنيات وأفضل
                                        الممارسات لخلق تجارب ويب فعالة، آمنة، وجذابة بصريًا.
                                        <br>
                                        <br>

                                        أدعوكم للتعاون معي لتحويل أفكاركم إلى واقع ملموس، من خلال التفكير الابتكاري والدقة
                                        في التنفيذ. سواء كنتم تبحثون عن تطوير موقع ويب من الصفر، تحسين موقعكم الحالي، أو حتى
                                        إذا كان لديكم تحديات تتعلق بالأمن السيبراني، فأنا هنا لتقديم الدعم والخبرة التي
                                        تحتاجونها.
                                        <br>
                                        <br>

                                        لنعمل معًا لخلق حلول تقنية ترتقي بأعمالكم وتلبي تطلعاتكم الأكثر طموحًا. شكرًا
                                        لزيارتكم، وأتطلع إلى فرصة التعاون المثمر.
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-12">
                                <div class="skill-mf">

                                    <p class="text-center"><strong>Technical skills</strong></p>
                     




                                    <div>
                                        <p><strong>Additional skills</strong></p>
                                        <p>المرونة والتكيف</p>
                                        <p>مهارات التعلم الذاتي</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




























    {{-- bootstrap  --}}
    <!-- <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js.map') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js.map') }}"></script> -->
<!-- 
    {{-- script for sweet alert 2   --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- my script --}}
    <script src="{{ asset('website/js/script.js') }}"></script> -->
</body>

</html>
