<!-- ======= Hero Section ======= -->
<section id="hero" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">
    @foreach($promos as $key => $promoItem)
      <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <h1>{{ $promoItem->title }}</h1>
              <h2>{{ $promoItem->information }}</h2>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{ url('promophoto/' . $promoItem->preview) }}" class="img-fluid animated" alt="">
              
            </div>
          </div>
        </div>
      </div>
    @endforeach

    <!-- Add more carousel items as needed -->
    <!-- <div class="carousel-item">
      ... content for additional slides ...
    </div> -->
  </div>

 <!-- ======= Hero Section ======= -->
 <section>

  

</section><!-- End Hero -->


  <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('asset')}}/image/partner1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('asset')}}/image/partner2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('asset')}}/image/partner3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('asset')}}/image/partner4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('asset')}}/image/partner5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('asset')}}/image/partner6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              OSFOOD REVALUATED is an aquaculture diet that acts as a natural stimulant dry
              feed for ornamental fish made from Bio Nutrients that increases the absorption of
              all the nutrients needed by freshwater ornamental fish. Improve growth and
              immune system.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Osfood Revaluated Formula Enhances Health and Survival</li>
              <li><i class="ri-check-double-line"></i> Optimized Digestive System Functionality </li>
              <li><i class="ri-check-double-line"></i> Lipids' Role in Energy Storage and Cellular Health </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              The Osfood Revaluated formula directs diet and lipid deposition or lower fat molecules in ornamental fish from the juvenile to adult phases, the results of the
              Osfood Revaluated formula are proven to show increased lipid mobilization which
              has been claimed as the only dry ornamental fish feed in the world by European
              and United States ornamental fish feed product trial institutions as ornamental
              fish feed which increases superior diet utilization.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong>Why should you use Osfood Revaluated</strong> products for fish feed? </h3>
              <p>
                The composition of the ingredients used by Osfood Revaluated by using whole fish and shrimp, not those that come from waste residue and generic fish meal
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Osfood Revaluated Utilizes Sea Cucumber Exclusively<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Osfood Revaluated is the only ornamental fish pellet in the world that uses Sea Cucumber. The Osfood Revaluated Formula has been patented and recognized by fisheries institutions in the worlds. 
                      This formulation is scientifically proven to reflect cell reversal in ornamental fish to change DNA mutations to more advanced ones. Revaluated or Evaluated
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Osfood Revalued Without Artificial Coloring <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Spirulina is blue and green algae, technically Cyanobacteria which provide nutrients in the form of proteins and vitamins which fish can easily digest and access all the beneficial nutrients and also an excellent natural color producer

                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Osfood Revaluated contains completely aquatic protein sources <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Most fish pellets use seeds and soybeans as a protein source filler, where fish are difficult and take a very long time to grow big and produce a lot of waste. Ornamental fish are not really able to adapt to digest soy protein. Osfood Revaluated uses only fully aquatic protein sources

                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{asset('asset')}}/image/cover2.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('asset')}}/image/guarantee3.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <br><br>
            <h3>Guaranteed Analysis</h3>
            <br><br>
            <div class="skills-content">
              <img src="{{asset('asset')}}/image/bahan.png" class="img-fluid" alt="">
              <img src="{{asset('asset')}}/image/guarantee4.png" class="img-fluid" alt="">
              
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Impact On Ornamental Fish</h2>
          <p>Good nutrition in ornamental fish feeds is
            essential for the economic production of
            high quality, healthy fish. In ornamental fish
            farming, nutrition is very important because
            it represents about 50 percent of production
            variable costs. The need for nutrients for
            ornamental fish has increased dramatically
            in recent years. The balance of the feed diet
            that can help the growth of ornamental fish
            to be optimal</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <img src="{{asset('asset')}}/image/oscar.png" style="width: 100px;"><br><br>
              <h4><a href="">Astronotus Ocellatus </a></h4>
              <p>Bio nutritional formula and build superior TART-TING
                and GRADE-ING vibrant natural color</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="{{asset('asset')}}/image/arowana.png" style="width: 100px;"><br><br>
              <h4><a href="">Arowana</a></h4>
              <p>Complete ingredients formula for perfect
                Growth Rate and Vitality</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="{{asset('asset')}}/image/channa.png" style="width: 100px;"><br><br>
              <h4><a href="">Snakehead</a></h4>
              <p>Bio nutritional formula build superior Color and Flowers and Nourishes gill sacs, build a wider space storing oxygen
              </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <img src="{{asset('asset')}}/image/predator.png" style="width: 100px;"><br><br>
              <h4><a href="">Predator</a></h4>
              <p>Phospholipid benefits, are an important
                source of energy and building blocks
                during embryonic and early larval
                development
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Discount Up To 25%</h3>
            <p>They provide benefits as better growth, Increased resistance to stress and survival rate, Improved bone mineralization, Reduced chances of malformations, Better digestive system, Improved health. Come on, buy the product and take the first pre-order for a more attractive price discount!</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://tokopedia.link/69wkHMyk9Gb">Buy Now</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Product Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Product</h2>
          <p>Most fish pellets use seeds and soybeans as a
            protein source filler, where fish are difficult and
            take a very long time to grow big and produce a
            lot of waste. Ornamental fish are not really able to
            adapt to digest soy protein. Osfood Revaluated
            uses only fully aquatic protein sources</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach($products as $productItem)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ url('productphoto/' . $productItem->preview) }}"" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>{{ $productItem->title }}</h4>
              <p>{{ $productItem->information }}</p>
              <a href="asset/image/osfood.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Product Section -->

    <!-- ======= Article Section ======= -->
    <section id="article" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Article</h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach($articles as $articleItem)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
            <a href="{{ route('article.view', ['id' => $articleItem->id]) }}" style="text-decoration: none; color: inherit;">
              <div class="portfolio-img" style="margin-left: -12px; margin-right: -12px">
                <center><img src="{{ url('articlephoto/' . $articleItem->preview) }}" class="img-fluid" alt=""></center>
              </div>
              <div class="articles" style="margin: 15px">
                <h4>{{ $articleItem->title }}</h4>
                <p>{{ $articleItem->text }}</p>
              </div>
            </a>
          </div>
        @endforeach        

        </div>

      </div>
    </section><!-- End Article Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonial</h2>
          <p>Clients expressed great satisfaction with Osfood Revaluation products, highlighting their exceptional quality and innovative features. The consensus among users was overwhelmingly positive, and many praised the company's commitment to rating dry fish feed
            ornamental natural stimulant Bio Nutrition which increases the absorption of all the nutrients required and required by freshwater ornamental fish.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('Arsha')}}/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Osfood Revaluated's dry fish feed is a game-changer! My aquarium has never looked better, and my colorful freshwater fish seem to thrive on the natural Bio Nutrients. Their vibrant colors have intensified, and I can tell they're getting all the essential nutrients they need.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('Arsha')}}/assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>I highly recommend Osfood Revaluated's dry fish feed to fellow hobbyists. The inclusion of Bio Nutrisi sets it apart, providing a holistic solution for my freshwater aquarium. My fish are not only more active, but their colors have become more vivid, making my aquarium a stunning focal point in my home.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('Arsha')}}/assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>I've tried various fish feeds, but Osfood Revaluated stands out. The dry fish feed not only enhances the colors of my exotic freshwater fish, but the Bio Nutrisi also seems to boost their overall health. It's a must-have for any aquarium enthusiast!</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('Arsha')}}/assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>As a dedicated fish keeper, I can confidently say that Osfood Revaluated's dry fish feed is top-notch. The natural Bio Nutrisi has visibly improved the vitality of my ornamental fish, ensuring they receive the necessary nutrients for a thriving and beautiful underwater environment.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section 
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section>End Pricing Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Some of the frequently asked questions about Osfood Revaluated products involve in-depth details regarding the natural stimulant ornamental fish dry food Bio Nutrition. Clients often ask about the composition of Bio Nutrition and how it improves the nutritional absorption of freshwater ornamental fish.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">How does Osfood Revaluated help in increasing the production results of farmers and fish breeders? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Osfood Revaluated provides assistance to farmers and fish breeders by providing food that is nutritious and has proven quality. Apart from that, this food also helps ornamental fish to build their immune system and cell regeneration, which in the end can increase their production yields.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What differentiates Osfood Revaluated from other ornamental fish feeds? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Osfood Revaluated has a balanced formula to optimally meet the energy and protein needs of ornamental fish, with specific feeding guidelines for various fish sizes and growth stages. This product has also gone through laboratory tests and research to ensure its quality.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Is there scientific research that supports the quality and safety of Osfood Revaluated products? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Yes, Osfood Revaluated has gone through various laboratory tests and scientific research to ensure product quality and safety. This feed formula has been patented and recognized by fisheries institutions throughout the world, and has been proven to be beneficial for ornamental fish.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">What are the main ingredients of Osfood Revaluated ornamental fish feed?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  The main ingredients of Osfood Revaluated ornamental fish food include Australian Spirulina and Sea Cucumber, which are high-quality ingredients that help improve color, growth and overall health in fish such as Arowana, Snakeheads, Oscars and Cichlids.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">How does Osfood Revaluated help in improving the quality of ornamental fish economically? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Osfood Revaluated helps improve the quality of ornamental fish economically by providing high quality feed that meets the specific nutritional needs of ornamental fish. With optimal growth and good health, farmers and fish breeders can obtain better production results and reduce waste.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>To obtain further information or resolve your questions, please do not hesitate to contact us via one of our contact persons listed. Our friendly and experienced team is ready to help you with all your needs and questions.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Menara 165 Floor 21 Unit B1<br>TB Simatupang Jakarta Selatan, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>alexandrew@shalexyan-aquasmart.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+6281211747708</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.796335710556!2d106.80712977475117!3d-6.290478093698521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1fa5b9f59a3%3A0x772f6f7bc1fbc6c0!2sMenara%20165!5e0!3m2!1sen!2sid!4v1707835995935!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


