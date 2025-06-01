@extends('layouts_main.master')

@section('content')
    <div class="container py-5">

        <div class="row justify-content-center mb-52" id="about">
            <div class="col-md-12 text-center mb-5">
                <h2 class="site-section-heading text-center font-secondary text-995a3b"><span class="text-e69138">品牌</span>介紹
                </h2>
            </div>

            <div class="col-md mb-5 text-center">
                <img src="{{ asset('assets/images/Banner/形象照.jpg') }}" class="img-fluid abs-01-img" alt="">
            </div>
            <div class="col-md-auto text-center abs-01 mb-5 align-self-center">
                <h1>台南中西區越式洗髮</h1>
                <h2><i class="fas fa-quote-left mr-2"></i><span>「玥玥」</span>越式養生洗髮<i class="fas fa-quote-right ml-2"></i>
                </h2>
                <h5>玥玥不僅是創辦人的名字，也是對品質服務的承諾與象徵。</h5>
            </div>


            <div class="col-md-6">
                <p class="">
                    &emsp;&emsp;玥玥越式養生洗髮，不只是一次洗頭，而是一場讓你徹底放鬆的儀式。這是一份來自創辦人的堅持——中年創業，是挑戰，更是選擇。
                    中年創業轉型是個挑戰，這是一條只能往前走、無法回頭的選擇。既然決定了，就要做到：沒有最好，只有更好！
                </p>
                <p>
                    ✔ 正宗越式洗髮設備，水流Spa療癒身心<br>
                    ✔ 專業手技，每一下按壓都精準到位<br>
                    ✔ 嚴選產品，溫和養護你的頭皮、臉部及身體<br>
                    ✔ 細節至上，打造深層的舒壓體驗
                </p>
                <p>
                    玥玥全體的員工，歡迎你們的蒞臨！
                </p>
            </div>
            <div class="col-md-6">
                <div class="about-slick">
                    <img src="{{ asset('assets/images/可用素材圖/S__35340419修圖瘦腰3-4.jpg') }}" alt=""
                        class="img-fluid about-img">
                    <img src="{{ asset('assets/images/可用素材圖/IMG_0384.jpg') }}" alt="" class="img-fluid about-img">
                    <img src="{{ asset('assets/images/可用素材圖/S__34291745_0.jpg') }}" alt=""
                        class="img-fluid about-img">
                    <img src="{{ asset('assets/images/可用素材圖/S__34291750_0.jpg') }}" alt=""
                        class="img-fluid about-img">
                    <img src="{{ asset('assets/images/可用素材圖/S__34291755_0.jpg') }}" alt=""
                        class="img-fluid about-img">
                </div>

            </div>
        </div>

    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center" id="what">
                <div class="col-md-12 text-center mb-5">
                    <h2 class="site-section-heading text-center font-secondary text-995a3b"><span
                            class="text-e69138">什麼是</span>越式洗髮?
                    </h2>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="slick">
                        <div class="">
                            <a href="{{ asset('assets/images/可用素材圖/輪播圖組/2.jpg') }}" data-fancybox="_what">
                                <img src="{{ asset('assets/images/可用素材圖/輪播圖組/2.jpg') }}" class="img-fluid px-1"
                                    alt="">
                            </a>
                        </div>
                        <div>
                            <a href="{{ asset('assets/images/可用素材圖/輪播圖組/3.jpg') }}" data-fancybox="_what">
                                <img src="{{ asset('assets/images/可用素材圖/輪播圖組/3.jpg') }}" class="img-fluid px-1"
                                    alt="">
                            </a>
                        </div>
                        <div>
                            <a href="{{ asset('assets/images/可用素材圖/輪播圖組/4.jpg') }}" data-fancybox="_what">
                                <img src="{{ asset('assets/images/可用素材圖/輪播圖組/4.jpg') }}" class="img-fluid px-1"
                                    alt="">
                            </a>
                        </div>
                        <div>
                            <a href="{{ asset('assets/images/可用素材圖/輪播圖組/5.jpg') }}" data-fancybox="_what">
                                <img src="{{ asset('assets/images/可用素材圖/輪播圖組/5.jpg') }}" class="img-fluid px-1"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-3">
                    <div class="faq-item-box px-3">
                        <div class="faq-item-q d-flex justify-content-between">
                            <h5><span style="color: #e75303;">Q1.</span>越式洗髮跟髮廊洗髮有什麼不同?</h5>
                            <span class="faq-item-arrow-p"><i class="bi bi-plus-lg"></i></span>
                            <span class="faq-item-arrow-d d-none"><i class="bi bi-dash-lg"></i></span>
                        </div>
                        <div class="faq-item-line"></div>
                        <div class="faq-item-a">
                            <p>
                                越式洗髮與一般髮廊洗髮的最大不同在於它強調放鬆和舒壓的平躺洗頭體驗，使用特殊的淋浴設備和環狀水流。越式洗髮包含頭皮按摩、泡腳、修指甲、護膚、臉部按摩、全身按摩等服務，而髮廊洗髮則通常更重於清潔與造型，較少強調放鬆的過程。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-3 ">
                    <div class="faq-item-box px-3">
                        <div class="faq-item-q d-flex justify-content-between">
                            <h5><span style="color: #e75303;">Q2.</span>越式洗髮的流程有哪些？</h5>
                            <span class="faq-item-arrow-p"><i class="bi bi-plus-lg"></i></span>
                            <span class="faq-item-arrow-d d-none"><i class="bi bi-dash-lg"></i></span>
                        </div>
                        <div class="faq-item-line"></div>
                        <div class="faq-item-a">
                            <p>
                                越式洗髮通常包含以下服務：臉部護理(包含：卸妝、洗臉、面膜、按摩)、全身按摩(指油壓)、水療SPA洗髮(蒸眼、洗髮及頭皮按摩)、採耳(耳燭及掏耳)、指甲修剪(手腳）、泡腳、頭髮吹整、玉石撥筋、湯品招待。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-3 ">
                    <div class="faq-item-box px-3">
                        <div class="faq-item-q d-flex justify-content-between">
                            <h5><span style="color: #e75303;">Q3.</span>越式洗髮的費用為?</h5>
                            <span class="faq-item-arrow-p"><i class="bi bi-plus-lg"></i></span>
                            <span class="faq-item-arrow-d d-none"><i class="bi bi-dash-lg"></i></span>
                        </div>
                        <div class="faq-item-line"></div>
                        <div class="faq-item-a">
                            <p>
                                在台灣，90~120分鐘的越式洗髮價格大約落在NT$1500至NT$2,500元之間，這個價格通常包括了洗髮、頭皮按摩、泡腳和其他附加服務。店家可能會根據服務的專業性和地理位置進行定價。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-3 ">
                    <div class="faq-item-box px-3">
                        <div class="faq-item-q d-flex justify-content-between">
                            <h5><span style="color: #e75303;">Q4.</span>玥玥越式養生洗髮的獨特之處?</h5>
                            <span class="faq-item-arrow-p"><i class="bi bi-plus-lg"></i></span>
                            <span class="faq-item-arrow-d d-none"><i class="bi bi-dash-lg"></i></span>
                        </div>
                        <div class="faq-item-line"></div>
                        <div class="faq-item-a">
                            <p>
                                在玥玥越式養生洗髮，我們專注於提供完整的放鬆體驗。從迎賓的養生茶、越式水療SPA級洗髮、泡腳、採耳、臉部護理，到全身按摩、人蔘雞湯送行(會隨著季節替換，敬請期待！)，每個環節都精心設計。透過這樣的一站式服務，我們希望您在繁忙的生活中找到屬於自己的寧靜時光，徹底放鬆與充電。
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="row mb-52" id="team">
                <div class="col-md-12 text-center mb-5">
                    <h2 class="site-section-heading text-center font-secondary text-995a3b"><span
                            class="text-e69138">服務</span>人員
                    </h2>
                </div>
            </div>
            <div class="row mb-5">

                <div class="col-12">

                    <div class="owl-carousel-2 owl-carousel">

                        @foreach ($teamsInfo ?? [] as $team)
                            <div class="d-block block-testimony mx-auto text-center">
                                <div class="person w-50 mx-auto mb-4">
                                    <img src="{{ env('APP_URL', 'https://yueyuewash.com') . '/uploads/' . $team->image }}"
                                        alt="Image" class="img-fluid rounded-circle mx-auto">
                                </div>
                                <div>
                                    <h2 class="h5 mb-4">{{ $team->name }}</h2>
                                    <blockquote>&ldquo;{{ $team->intro }}&rdquo;</blockquote>
                                </div>
                            </div>
                        @endforeach

                        <div class="d-block block-testimony mx-auto text-center h-100">
                            <div class="person w-50 mx-auto mb-4">
                                <img src="{{ asset('assets/images/icon/image.png') }}" alt="Image"
                                    class="img-fluid rounded-circle mx-auto">
                            </div>
                            <div>
                                <h2 class="h5 mb-4">敬請期待</h2>
                                <blockquote>&ldquo;新進人員陸續徵才中&rdquo;</blockquote>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container-xxl py-5 price">
        <div class="container">
            <div class="row mb-52" id="price">
                <div class="col-md-12 text-center mb-5">
                    <h2 class="site-section-heading text-center font-secondary text-995a3b"><span
                            class="text-e69138">套餐</span>價格
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5">



                <div class="col-lg-10">
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <ul class="nav nav-pills mb-3 w-fit ftco-animate" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-A-tab" data-toggle="pill"
                                            data-target="#pills-A" type="button" role="tab" aria-controls="pills-A"
                                            aria-selected="false">經典方案</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" id="pills-B-tab" data-toggle="pill"
                                            data-target="#pills-B" type="button" role="tab" aria-controls="pills-B"
                                            aria-selected="false">小資方案</button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-A" role="tabpanel"
                                aria-labelledby="pills-A-tab">
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center d-flex justify-content-center mb-4">
                                        - <h4><span class="text-e69138">經典</span>方案</h4> -
                                    </div>

                                    <div class="col-lg-10 mb-3">
                                        <img src="{{ asset('assets/images/price.jpg') }}" class="img-fluid mb-3" alt="">

                                        <div class="row">
                                            <div class="col-lg-3 col-6 text-center">
                                                <img src="{{ asset('assets/images/icon/icon01.png') }}" class="img-fluid w-75"
                                                    alt="">
                                                <h6>越式洗髮</h6>
                                            </div>
                                            <div class="col-lg-3 col-6 text-center">
                                                <img src="{{ asset('assets/images/icon/icon02.png') }}" class="img-fluid w-75"
                                                    alt="">
                                                <h6>全身按摩</h6>
                                            </div>
                                            <div class="col-lg-3 col-6 text-center">
                                                <img src="{{ asset('assets/images/icon/icon03.png') }}" class="img-fluid w-75"
                                                    alt="">
                                                <h6>美容護膚</h6>
                                            </div>
                                            <div class="col-lg-3 col-6 text-center">
                                                <img src="{{ asset('assets/images/icon/icon04.png') }}" class="img-fluid w-75"
                                                    alt="">
                                                <h6>指甲修剪</h6>
                                            </div>
                                        </div>

                                        <hr>
                                    </div>
                                </div>

                                <!-- 大螢幕版：以 row/col 呈現表格式內容 -->
                                <div class="d-none d-md-block bg-light p-3">
                                    <!-- 表頭 -->
                                    <div class="row font-weight-bold border-bottom py-2">
                                        <div class="col">套餐</div>
                                        <div class="col text-right">時間(分)</div>
                                        <div class="col text-right">價格</div>
                                        <div class="col text-right">指定人員</div>
                                        <div class="col text-center">服務內容</div>
                                    </div>
                                    <!-- A套餐 -->
                                    <div class="row border-bottom py-2">
                                        <div class="col">A套餐</div>
                                        <div class="col text-right">90</div>
                                        <div class="col text-right">1600</div>
                                        <div class="col text-right">不指定</div>
                                        <div class="col text-center">
                                            臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、採耳、泡腳、指甲修剪
                                        </div>
                                    </div>
                                    <!-- B套餐 -->
                                    <div class="row border-bottom py-2">
                                        <div class="col">B套餐</div>
                                        <div class="col text-right">90</div>
                                        <div class="col text-right">1800</div>
                                        <div class="col text-right"><span class="font-weight-bold text-cc914b">指定</span>
                                        </div>
                                        <div class="col text-center">
                                            臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、採耳、泡腳、指甲修剪
                                        </div>
                                    </div>
                                    <!-- C套餐 -->
                                    <div class="row border-bottom py-2">
                                        <div class="col">C套餐</div>
                                        <div class="col text-right">120</div>
                                        <div class="col text-right">2000</div>
                                        <div class="col text-right">不指定</div>
                                        <div class="col text-center">
                                            臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、<span
                                                class="font-weight-bold text-995a3b">玉石撥筋</span>、採耳、泡腳、指甲修剪
                                        </div>
                                    </div>
                                    <!-- D套餐 -->
                                    <div class="row border-bottom py-2">
                                        <div class="col">D套餐</div>
                                        <div class="col text-right">120</div>
                                        <div class="col text-right">2200</div>
                                        <div class="col text-right"><span class="font-weight-bold text-cc914b">指定</span>
                                        </div>
                                        <div class="col text-center">
                                            臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、<span
                                                class="font-weight-bold text-995a3b">玉石撥筋</span>、採耳、泡腳、指甲修剪
                                        </div>
                                    </div>
                                    <!-- 額外服務 -->
                                    <div class="row border-bottom py-2">
                                        <div class="col">額外服務</div>
                                        <div class="col"></div>
                                        <div class="col"></div>
                                        <div class="col"></div>
                                        <div class="col text-center">
                                            A~D吹髮造型 +$200<br>
                                            特殊洗髮（接髮/假髮）+$300
                                        </div>
                                    </div>
                                </div>

                                <!-- 手機版：以卡片式呈現，資訊一目了然 -->
                                <div class="d-block d-md-none price-mob">
                                    <!-- A套餐 -->
                                    <div class="card mb-3 rounded">
                                        <div class="card-header bg-995a3b text-white">A套餐</div>
                                        <div class="card-body">
                                            <p class="mb-1"><strong>時間(分):</strong> 90</p>
                                            <p class="mb-1"><strong>價格:</strong> 1600</p>
                                            <p class="mb-1"><strong>指定人員:</strong> 不指定</p>
                                            <p class="mb-0"><strong>服務內容:</strong>
                                                臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、採耳、泡腳、指甲修剪
                                            </p>
                                        </div>
                                    </div>
                                    <!-- B套餐 -->
                                    <div class="card mb-3 rounded">
                                        <div class="card-header bg-995a3b text-white">B套餐</div>
                                        <div class="card-body">
                                            <p class="mb-1"><strong>時間(分):</strong> 90</p>
                                            <p class="mb-1"><strong>價格:</strong> 1800</p>
                                            <p class="mb-1"><strong>指定人員:</strong> <span
                                                    class="font-weight-bold text-cc914b">指定</span></p>
                                            <p class="mb-0"><strong>服務內容:</strong>
                                                臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、採耳、泡腳、指甲修剪
                                            </p>
                                        </div>
                                    </div>
                                    <!-- C套餐 -->
                                    <div class="card mb-3 rounded">
                                        <div class="card-header bg-995a3b text-white">C套餐</div>
                                        <div class="card-body">
                                            <p class="mb-1"><strong>時間(分):</strong> 100</p>
                                            <p class="mb-1"><strong>價格:</strong> 2000</p>
                                            <p class="mb-1"><strong>指定人員:</strong> 不指定</p>
                                            <p class="mb-0"><strong>服務內容:</strong>
                                                臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、<span
                                                    class="font-weight-bold text-995a3b">玉石撥筋</span>、採耳、泡腳、指甲修剪
                                            </p>
                                        </div>
                                    </div>
                                    <!-- D套餐 -->
                                    <div class="card mb-3 rounded">
                                        <div class="card-header bg-995a3b text-white">D套餐</div>
                                        <div class="card-body">
                                            <p class="mb-1"><strong>時間(分):</strong> 120</p>
                                            <p class="mb-1"><strong>價格:</strong> 2200</p>
                                            <p class="mb-1"><strong>指定人員:</strong> <span
                                                    class="font-weight-bold text-cc914b">指定</span></p>
                                            <p class="mb-0"><strong>服務內容:</strong>
                                                臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、<span
                                                    class="font-weight-bold text-995a3b">玉石撥筋</span>、採耳、泡腳、指甲修剪
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 額外服務 -->
                                    <div class="card mb-3 rounded">
                                        <div class="card-header bg-995a3b text-white">額外服務</div>
                                        <div class="card-body">
                                            <p class="mb-0"><strong>服務內容:</strong><br>
                                                A~D吹髮造型 +$200<br>
                                                特殊洗髮（接髮/假髮）+$300
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-B" role="tabpanel" aria-labelledby="pills-B-tab">
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center d-flex justify-content-center mb-4">
                                        - <h4><span class="text-e69138">小資</span>方案</h4> -
                                    </div>

                                    <div class="col-lg-10 mb-3">
                                        <img src="{{ asset('assets/images/price2.jpg') }}" class="img-fluid mb-3" alt="">

                                        <div class="row">
                                            <div class="col-lg-3 col-6 text-center">
                                                <img src="{{ asset('assets/images/icon/icon01.png') }}" class="img-fluid w-75"
                                                    alt="">
                                                <h6>越式洗髮</h6>
                                            </div>
                                            <div class="col-lg-3 col-6 text-center">
                                                <img src="{{ asset('assets/images/icon/icon02.png') }}" class="img-fluid w-75"
                                                    alt="">
                                                <h6>肩頸按摩</h6>
                                            </div>
                                            <div class="col-lg-3 col-6 text-center">
                                                <img src="{{ asset('assets/images/icon/icon03.png') }}" class="img-fluid w-75"
                                                    alt="">
                                                <h6>美容護膚</h6>
                                            </div>
                                            <div class="col-lg-3 col-6 text-center">
                                                <img src="{{ asset('assets/images/icon/icon04.png') }}" class="img-fluid w-75"
                                                    alt="">
                                                <h6>指甲修剪</h6>
                                            </div>
                                        </div>

                                        <hr>
                                    </div>
                                </div>


                                <!-- 大螢幕版：以 row/col 呈現表格式內容 -->
                                <div class="d-none d-md-block bg-light p-3">
                                    <!-- 表頭 -->
                                    <div class="row font-weight-bold border-bottom py-2">
                                        <div class="col">套餐</div>
                                        <div class="col text-right">時間(分)</div>
                                        <div class="col text-right">價格</div>
                                        <div class="col text-right">指定人員</div>
                                        <div class="col text-center">服務內容</div>
                                    </div>
                                    <!-- 經濟套餐 -->
                                    <div class="row border-bottom py-2">
                                        <div class="col">經濟套餐</div>
                                        <div class="col text-right">40</div>
                                        <div class="col text-right">600</div>
                                        <div class="col text-right">不指定</div>
                                        <div class="col text-center">
                                            水療SPA洗髮(頭部舒壓/水循環洗髮SPA/護髮)、肩頸按摩、吹髮。<br>
                                            **備註：不適用折價券。
                                        </div>
                                    </div>
                                    <!-- 小資套餐 -->
                                    <div class="row border-bottom py-2">
                                        <div class="col">小資套餐</div>
                                        <div class="col text-right">60</div>
                                        <div class="col text-right">1000</div>
                                        <div class="col text-right"><span>不指定</span>
                                        </div>
                                        <div class="col text-center">
                                            臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、水療SPA洗髮(頭部舒壓/水循環洗髮SPA/護髮)、耳燭、泡腳、指甲修剪、肩頸按摩、吹髮。<br>
                                            **備註：不適用折價券。
                                        </div>
                                    </div>
                                    <!-- 額外服務 -->
                                    <div class="row border-bottom py-2">
                                        <div class="col">額外服務</div>
                                        <div class="col"></div>
                                        <div class="col"></div>
                                        <div class="col"></div>
                                        <div class="col text-center">
                                            A~D吹髮造型 +$200<br>
                                            特殊洗髮（接髮/假髮）+$300
                                        </div>
                                    </div>
                                </div>

                                <!-- 手機版：以卡片式呈現，資訊一目了然 -->
                                <div class="d-block d-md-none price-mob">
                                    <!-- A套餐 -->
                                    <div class="card mb-3 rounded">
                                        <div class="card-header bg-995a3b text-white">經濟套餐</div>
                                        <div class="card-body">
                                            <p class="mb-1"><strong>時間(分):</strong> 40</p>
                                            <p class="mb-1"><strong>價格:</strong> 600</p>
                                            <p class="mb-1"><strong>指定人員:</strong> 不指定</p>
                                            <p class="mb-0"><strong>服務內容:</strong>
                                                水療SPA洗髮(頭部舒壓/水循環洗髮SPA/護髮)、肩頸按摩、吹髮。<br>
                                                **備註：不適用折價券。
                                            </p>
                                        </div>
                                    </div>
                                    <!-- B套餐 -->
                                    <div class="card mb-3 rounded">
                                        <div class="card-header bg-995a3b text-white">小資套餐</div>
                                        <div class="card-body">
                                            <p class="mb-1"><strong>時間(分):</strong> 60</p>
                                            <p class="mb-1"><strong>價格:</strong> 1000</p>
                                            <p class="mb-1"><strong>指定人員:</strong> <span>不指定</span></p>
                                            <p class="mb-0"><strong>服務內容:</strong>
                                                臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、水療SPA洗髮(頭部舒壓/水循環洗髮SPA/護髮)、耳燭、泡腳、指甲修剪、肩頸按摩、吹髮。<br>
                                                **備註：不適用折價券。
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 額外服務 -->
                                    <div class="card mb-3 rounded">
                                        <div class="card-header bg-995a3b text-white">額外服務</div>
                                        <div class="card-body">
                                            <p class="mb-0"><strong>服務內容:</strong><br>
                                                A~D吹髮造型 +$200<br>
                                                特殊洗髮（接髮/假髮）+$300
                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>

                    <div class="row mt-4" id="price2">
                        <div class="col-md-12 text-center d-flex justify-content-center mb-3">
                            - <h4><span class="text-e69138">付款</span>方式</h4> -
                        </div>
                        <div class="col-md col-6 text-center mb-4">
                            <img src="{{ asset('assets/images/icon/money.png') }}"
                                class="img-fluid w-75 rounded-circle bg-white mb-3" alt="">
                            <h5><strong>現金</strong></h5>
                        </div>
                        <div class="col-md col-6 text-center mb-4">
                            <img src="{{ asset('assets/images/icon/ctbc.png') }}"
                                class="img-fluid w-75 rounded-circle bg-white mb-3" alt="">
                            <h5><strong>轉帳(中信)</strong></h5>
                        </div>
                        <div class="col-md col-6 text-center mb-4">
                            <img src="{{ asset('assets/images/icon/st.png') }}"
                                class="img-fluid w-75 rounded-circle bg-white mb-3" alt="">
                            <h5><strong>街口</strong></h5>
                        </div>
                        <div class="col-md col-6 text-center mb-4">
                            <img src="{{ asset('assets/images/icon/linepay.png') }}"
                                class="img-fluid w-75 rounded-circle bg-white mb-3" alt="">
                            <h5><strong>LinePay</strong></h5>
                        </div>
                    </div>


                    <div class="row mb-52" id="price3">
                        <div class="col-md-12 text-center mt-3">
                            <p class="text-center">
                                如需指定技師，預約時請主動告知，以利為您媒合安排。
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light2`">
        <div class="container">
            <div class="row mb-52" id="event">
                <div class="col-md-12 text-center mb-5">
                    <h2 class="site-section-heading text-center font-secondary text-995a3b"><span
                            class="text-e69138">優惠</span>活動
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5 event">
                <div class="col-lg-10">
                    @foreach ($activityInfo ?? [] as $key => $activity)
                        @if ($key % 2 == 0)
                            <div class="mb-4"
                                style="background: #fff3e6; border-radius: 12px; padding: 1.5rem; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">
                                {!! $activity->content !!}
                            </div>
                        @else
                            <div class="mb-4"
                                style="background: #f8f0f5; border-radius: 12px; padding: 1.5rem; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">
                                {!! $activity->content !!}
                            </div>
                        @endif
                    @endforeach

                    @if ($activityInfo->isEmpty())
                        <div
                            style="background: #fff3e6; border-radius: 12px; padding: 1.5rem; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">
                            <h3 style="color: #a35b4b;">🎉 活動一、慶開幕來店消費即贈200元抵用券！</h3>
                            <p>玥玥開幕歡慶期間，<strong>來店消費送現金！</strong></p>
                            <ul style="padding-left: 1.5rem; line-height: 1.8;">
                                <li>即日起至 <strong>4/30</strong>，凡來店消費滿 <strong>1500元</strong>，再贈
                                    <strong>200元現金抵用券！</strong>
                                </li>
                                <li>下次來店即可使用！<strong>不認人，只認券！</strong></li>
                                <li>也歡迎分享給親朋好友，一起來鬆一下唷～ 🎁</li>
                            </ul>
                            <p><strong>兌換注意事項：</strong></p>
                            <ol style="padding-left: 1.5rem; line-height: 1.8;">
                                <li>現金抵用券不得與其他優惠併用，亦不可兌換現金。</li>
                                <li>玥玥越式養生洗髮保留活動最終解釋與變更權利。</li>
                            </ol>
                        </div>

                        <div
                            style="background: #f8f0f5; border-radius: 12px; padding: 1.5rem; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">
                            <h3 style="color: #a35b4b;">🎁 活動二、來店打卡送精美小禮！</h3>
                            <p>玥玥寵粉再加碼，<strong>來店打卡就送禮！</strong> ✨</p>
                            <ul style="padding-left: 1.5rem; line-height: 1.8;">
                                <li>活動期間：即日起至 <strong>4/30</strong></li>
                                <li><strong>不限消費金額</strong>，只要完成 <strong>打卡</strong> 或 <strong>評論分享心得</strong> 即可參加</li>
                                <li>即可獲得 <strong>精美小禮（濕紙巾乙包）</strong></li>
                                <li>數量有限，送完為止！</li>
                            </ul>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>

    <div class="conatiner-xxl py-5">
        <div class="container">
            <div class="row mb-52" id="contact">
                <div class="col-md-12 text-center mb-5">
                    <h2 class="site-section-heading text-center font-secondary text-995a3b"><span
                            class="text-e69138">馬上</span>預約
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center align mb-5">

                <div class="col-lg-5 mb-3">
                    <h3 class="text-center mb-3" style="margin-top:2rems;">🔗 追蹤我們</h3>

                    <div class="d-flex justify-content-center mb-3">

                        <a href="https://www.facebook.com/profile.php?id=61573227655212">
                            <span class="mx-2 social-icon" style="background-color: #0080FF !important;"><i class="fa-brands fa-facebook"></i></span>
                        </a>

                        <a href="https://www.instagram.com/yueyuewash/">
                            <span class="mx-2 social-icon" style="background-color: #E1306C !important;"><i class="fa-brands fa-instagram"></i></span>
                        </a>

                        <a href="https://www.tiktok.com/@user78275772884583">
                            <span class="mx-2 social-icon" style="background-color: #000000 !important;"><i class="fa-brands fa-tiktok"></i></span>
                        </a>

                    </div>

                    <div class="mb-3 mx-lg-5 mx-3 text-center">
                        <p>
                            <span><i class="fa-solid fa-clock"></i></span>
                            <strong>營業時間：</strong><br>
                            週二至週日 11:00 ~ 翌日 01:00<br>（最後收客時間 00:00）<br>每週一公休
                        </p>
                        <p>
                            <span><i class="fa-solid fa-phone"></i></span>
                            <strong>來電電話：</strong><br>
                            <a class="text-995a3b" href="tel:0980015158">0980015158</a> / <a class="text-995a3b" href="tel:0976521762">0976521762</a>
                        </p>
                        <p>
                            <a class="cta-button mx-auto" style="background-color: #00B900 !important;" href="https://lin.ee/FtYy2eM" target="_blank">💬 點我 LINE
                                線上預約</a>
                        </p>
                    </div>

                </div>

                <div class="col-lg-7 mb-4">
                    <div style="margin-bottom: 1rem;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.0538908958415!2d120.19865069999999!3d22.9850457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e77003c71af53%3A0x141600dea3340b5c!2z546l546lIOi2iuW8j-mkiueUn-a0l-mrrg!5e0!3m2!1szh-TW!2stw!4v1744394702691!5m2!1szh-TW!2stw"
                            style="width:100%; height:23rem; border:0; border-radius:12px;" loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
