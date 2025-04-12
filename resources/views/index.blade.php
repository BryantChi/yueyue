@extends('layouts_main.master')

@section('content')
    <div class="container py-5">

        <div class="row mb-52" id="about">
            <div class="col-md-12 text-center mb-5">
                <h2 class="site-section-heading text-center font-secondary text-995a3b"><span class="text-e69138">品牌</span>介紹
                </h2>
            </div>

            <div class="col-md-6">
                <p class="">
                    &emsp;&emsp;玥玥不僅是創辦人的名字，也是對品質服務的承諾與象徵。自2020年至2024年，創辦人多次前往越南胡志明市及薄寮，親身體驗正宗的越南一條龍越式洗髮服務，深深被這種全身心放鬆的感覺吸引。他們發現，越式洗髮不僅能讓顧客在一次到位的體驗中享受洗髮、修指甲、按摩等服務，從而能夠讓顧客在短短的時間內達到深度放鬆。
                </p>
                <p>
                    創辦人本身也非常享受按摩，促使了契機有了開店的想法。
                </p>
            </div>
            <div class="col-md-6">
                <div class="about-slick">
                    <img src="{{asset('assets/images/可用素材圖/IMG_0312.jpg')}}" alt="" class="img-fluid about-img mx-1">
                    <img src="{{asset('assets/images/可用素材圖/IMG_0384.jpg')}}" alt="" class="img-fluid about-img mx-1">
                    <img src="{{asset('assets/images/可用素材圖/S__34291745_0.jpg')}}" alt="" class="img-fluid about-img mx-1">
                    <img src="{{asset('assets/images/可用素材圖/S__34291750_0.jpg')}}" alt="" class="img-fluid about-img mx-1">
                    <img src="{{asset('assets/images/可用素材圖/S__34291755_0.jpg')}}" alt="" class="img-fluid about-img mx-1">
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
                <div class="col-lg-10 mb-4">
                    <div class="slick">
                        {{-- <img src="{{asset('assets/images/可用素材圖/輪播圖組/1.jpg')}}" class="img-fluid img-thumbnail" alt=""> --}}
                        <img src="{{asset('assets/images/可用素材圖/輪播圖組/2.jpg')}}" class="img-fluid img-thumbnail" alt="">
                        <img src="{{asset('assets/images/可用素材圖/輪播圖組/3.jpg')}}" class="img-fluid img-thumbnail" alt="">
                        <img src="{{asset('assets/images/可用素材圖/輪播圖組/4.jpg')}}" class="img-fluid img-thumbnail" alt="">
                        <img src="{{asset('assets/images/可用素材圖/輪播圖組/5.jpg')}}" class="img-fluid img-thumbnail" alt="">
                    </div>
                </div>

                <div class="col-lg-12 mb-3">
                    <div class="faq-item-box px-3">
                        <div class="faq-item-q d-flex justify-content-between">
                            <h5><span style="color: #e75303;">Q1.</span>越式洗髮跟髮廊洗髮有什麼不同?</h5>
                            <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                            <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
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
                            <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                            <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
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
                            <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                            <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
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
                            <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                            <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
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

                        <div class="d-block block-testimony mx-auto text-center">
                            <div class="person w-50 mx-auto mb-4">
                                <img src="{{asset('assets/images/服務人員/維尼.jpg')}}" alt="Image" class="img-fluid rounded-circle mx-auto">
                            </div>
                            <div>
                                <h2 class="h5 mb-4">維尼</h2>
                                <blockquote>&ldquo;曾任資深按摩師，擁有精湛的按摩及舒壓手技。&rdquo;</blockquote>
                            </div>
                        </div>

                        <div class="d-block block-testimony mx-auto text-center">
                            <div class="person w-50 mx-auto mb-4">
                                <img src="{{asset('assets/images/服務人員/美容師小琳.jpg')}}" alt="Image" class="img-fluid rounded-circle mx-auto">
                            </div>
                            <div>
                                <h2 class="h5 mb-4">小琳</h2>
                                <blockquote>&ldquo;擅長按摩洗頭、頭皮舒壓，深受顧客喜愛與高度好評。&rdquo;</blockquote>
                            </div>
                        </div>

                        <div class="d-block block-testimony mx-auto text-center">
                            <div class="person w-50 mx-auto mb-4">
                                <img src="{{asset('assets/images/服務人員/小英.jpg')}}" alt="Image" class="img-fluid rounded-circle mx-auto">
                            </div>
                            <div>
                                <h2 class="h5 mb-4">小英</h2>
                                <blockquote>&ldquo;帶著熱情，回到美業重新追求夢想。&rdquo;</blockquote>
                            </div>
                        </div>

                        <div class="d-block block-testimony mx-auto text-center">
                            <div class="person w-50 mx-auto mb-4">
                                <img src="{{asset('assets/images/服務人員/小乖.jpg')}}" alt="Image" class="img-fluid rounded-circle mx-auto">
                            </div>
                            <div>
                                <h2 class="h5 mb-4">小乖</h2>
                                <blockquote>&ldquo;講究細節，專注滿足每位客人的客製化需求。&rdquo;</blockquote>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
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
                                <div class="col text-right">指定</div>
                                <div class="col text-center">
                                    臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、採耳、泡腳、指甲修剪
                                </div>
                            </div>
                            <!-- C套餐 -->
                            <div class="row border-bottom py-2">
                                <div class="col">C套餐</div>
                                <div class="col text-right">100</div>
                                <div class="col text-right">2000</div>
                                <div class="col text-right">不指定</div>
                                <div class="col text-center">
                                    臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、玉石撥筋、採耳、泡腳、指甲修剪
                                </div>
                            </div>
                            <!-- D套餐 -->
                            <div class="row border-bottom py-2">
                                <div class="col">D套餐</div>
                                <div class="col text-right">120</div>
                                <div class="col text-right">2200</div>
                                <div class="col text-right">指定</div>
                                <div class="col text-center">
                                    臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、玉石撥筋、採耳、泡腳、指甲修剪
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
                        <div class="d-block d-md-none">
                            <!-- A套餐 -->
                            <div class="card mb-3">
                                <div class="card-header">A套餐</div>
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
                            <div class="card mb-3">
                                <div class="card-header">B套餐</div>
                                <div class="card-body">
                                    <p class="mb-1"><strong>時間(分):</strong> 90</p>
                                    <p class="mb-1"><strong>價格:</strong> 1800</p>
                                    <p class="mb-1"><strong>指定人員:</strong> 指定</p>
                                    <p class="mb-0"><strong>服務內容:</strong>
                                        臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、採耳、泡腳、指甲修剪
                                    </p>
                                </div>
                            </div>
                            <!-- C套餐 -->
                            <div class="card mb-3">
                                <div class="card-header">C套餐</div>
                                <div class="card-body">
                                    <p class="mb-1"><strong>時間(分):</strong> 100</p>
                                    <p class="mb-1"><strong>價格:</strong> 2000</p>
                                    <p class="mb-1"><strong>指定人員:</strong> 不指定</p>
                                    <p class="mb-0"><strong>服務內容:</strong>
                                        臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、玉石撥筋、採耳、泡腳、指甲修剪
                                    </p>
                                </div>
                            </div>
                            <!-- D套餐 -->
                            <div class="card mb-3">
                                <div class="card-header">D套餐</div>
                                <div class="card-body">
                                    <p class="mb-1"><strong>時間(分):</strong> 120</p>
                                    <p class="mb-1"><strong>價格:</strong> 2200</p>
                                    <p class="mb-1"><strong>指定人員:</strong> 指定</p>
                                    <p class="mb-0"><strong>服務內容:</strong>
                                        臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、玉石撥筋、採耳、泡腳、指甲修剪
                                    </p>
                                </div>
                            </div>
                            <!-- 額外服務 -->
                            <div class="card mb-3">
                                <div class="card-header">額外服務</div>
                                <div class="card-body">
                                    <p class="mb-0"><strong>服務內容:</strong><br>
                                        A~D吹髮造型 +$200<br>
                                        特殊洗髮（接髮/假髮）+$300
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-light shadow-sm rounded d-none">

                        <!-- <div class="table-responsive">
            <table class="table table-borderless card-text text-nowrap">
              <thead>
                <tr>
                  <th scope="col">套餐</th>
                  <th scope="col" class="text-right">時間(分)</th>
                  <th scope="col" class="text-right">價格</th>
                  <th scope="col" class="text-right">指定人員</th>
                  <th scope="col" class="text-right2 text-center">服務內容</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>A套餐</td>
                  <td class="text-right">90</td>
                  <td class="text-right">1600</td>
                  <td class="text-right">不指定</td>
                  <td class="text-right2">
                    <p>
                      臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、採耳、泡腳、指甲修剪
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>B套餐</td>
                  <td class="text-right">90</td>
                  <td class="text-right">1800</td>
                  <td class="text-right">指定</td>
                  <td class="text-right2">
                    <p>
                      臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、採耳、泡腳、指甲修剪
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>C套餐</td>
                  <td class="text-right">100</td>
                  <td class="text-right">2000</td>
                  <td class="text-right">不指定</td>
                  <td class="text-right2">
                    <p>
                      臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、玉石撥筋、採耳、泡腳、指甲修剪
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>D套餐</td>
                  <td class="text-right">120</td>
                  <td class="text-right">2200</td>
                  <td class="text-right">指定</td>
                  <td class="text-right2">
                    <p>
                      臉部護理（清潔/洗臉/按摩/敷臉/敷眼）、全身按摩、水療SPA洗髮、玉石撥筋、採耳、泡腳、指甲修剪
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>額外服務</td>
                  <td class="text-right"></td>
                  <td class="text-right"></td>
                  <td class="text-right"></td>
                  <td class="text-right2">
                    <p>
                      A~D吹髮造型 +$200<br>
                      特殊洗髮（接髮/假髮）+$300
                    </p>
                  </td>
                </tr>

              </tbody>
            </table>
          </div> -->
                        <div>
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
            <div class="row justify-content-center mb-5">

                <div class="col-lg-10">
                    <div
                        style="background: #fff3e6; border-radius: 12px; padding: 1.5rem; margin-bottom: 2rem; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">
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

                <div class="col-lg-10 mb-4">
                    <div style="margin-bottom: 1rem;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.0538908958415!2d120.19865069999999!3d22.9850457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e77003c71af53%3A0x141600dea3340b5c!2z546l546lIOi2iuW8j-mkiueUn-a0l-mrrg!5e0!3m2!1szh-TW!2stw!4v1744394702691!5m2!1szh-TW!2stw"
                            style="width:100%; height:300px; border:0; border-radius:12px;" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="col-lg-5 mb-3">
                    <h3 style="margin-top:2rems;">🔗 追蹤我們</h3>
                    <ul style="list-style: none; padding-left: 0; line-height: 2;">
                        <li><span><i class="fa-brands fa-facebook"></i></span> Facebook：<a
                                href="https://www.facebook.com/profile.php?id=61573227655212" target="_blank"
                                class="text-995a3b">前往粉絲專頁</a></li>
                        <li><span><i class="fa-brands fa-instagram"></i></span> Instagram：<a
                                href="https://www.instagram.com/yueyuewash/" target="_blank" class="text-995a3b">追蹤我們</a>
                        </li>
                        <li><span><i class="fa-brands fa-tiktok"></i></span> TikTok：<a
                                href="https://www.tiktok.com/@user78275772884583" target="_blank"
                                class="text-995a3b">看看短影音</a></li>
                    </ul>
                </div>
                <div class="col-lg-5 mb-3">
                    <p><strong>聯絡地址：</strong>700 台南市中西區南寧街 73 號</p>
                    <p><strong>營業時間：</strong>週二至週日 11:00 ~ 翌日 01:00（最後收客時間 00:00）<br>每週一公休</p>
                    <p><strong>來電電話：</strong>
                        <a href="tel:0980015158">0980015158</a> / <a href="tel:0976521762">0976521762</a>
                    </p>
                    <p>
                        <a class="cta-button" href="https://lin.ee/r01jIIf" target="_blank">💬 點我 LINE 線上預約</a>
                    </p>
                </div>


            </div>
        </div>

    </div>
@endsection
