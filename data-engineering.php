<!DOCTYPE html>
<html lang="en">
  <body>
  <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="page-loading">
            <div class="page-loading-inner">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "layout/header.php"; ?>
 
    <main class="main">
    <section class="section banner-2" style="position: relative; padding-bottom: 0; background: linear-gradient(90deg, rgb(234, 242, 249), white, white);">
        <div class="container">
          <div class="banner">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <h1 class="color-brand-1 mb-20 text-anim">Data Engineering</h1>
                <div class="row">
                  <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <p class="font-md color-grey-500">Social media networks are open to all. Social media is typically used for social interaction and access to news and information, and decision making.</p>
                  </div>
                </div> <br>
                <div class="box-button mb-50 wow animate__animated animate__fadeInUp" data-wow-delay=".4s"><div class="box-button mb-50 wow animate__animated animate__fadeInUp" data-wow-delay=".4s"> 
                <div class="d-none d-sm-inline-block"><a href="home.php">
              <div class="col-12 text-center">
                   <button style="display:inline-block; padding:14px 25px; font-family:'Inter', sans-serif; font-weight:700; font-size:14px;  letter-spacing:1px; border:none; border-radius:50px; cursor:pointer; transition:all 0.3s ease; background:linear-gradient(135deg, #FF671F, #FFFFFF, #046A38); color:#024402; box-shadow:0 8px 24px rgba(4,106,56,0.25); position:relative; overflow:hidden;"
                    onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 12px 28px rgba(4,106,56,0.35)';"
                     onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 8px 24px rgba(4,106,56,0.25)';">
                      Follow Us
                      </button>
                    </div></a></div>
               
                </div>
               </div>
              </div>
              <div class="col-lg-5 d-none d-lg-block img-reveal h-100  "><img src="assets/imgs/ftg-pages/debg.png" alt=""></div> 
            </div>
          </div>
        </div>
        <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 2px; background: linear-gradient(90deg, rgb(234, 242, 249), rgb(251, 251, 251), rgb(250, 250, 250));"></div>
      </section>
      <section class="section mt-50">
  <div class="container">
    <div class="row">
    <h2 style="color:#00674F" class="mb-20 wow animate_animated animate_fadeInUp text-center" data-wow-delay=".0s">Our Work Process</h2>
  <div id="processContainer" style="display:flex; flex-wrap:wrap; justify-content:center; gap:20px;">
    <div class="process-box" onclick="toggleStep(this)" style="cursor:pointer; border-radius:10px; padding:15px; text-align:center; width:160px; transition:all 0.3s ease, transform 0.3s ease; position:relative;">
      <div style="background:#00674f; color:white; width:70px; height:70px; margin:0 auto 10px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:30px;">
        <i class="fas fa-search"></i>
      </div>
      <p style="font-weight:300; font-size:1.2rem; margin:0; color:#00674F">Scope Gathering</p>
      <div class="detail" style="max-height:0; opacity:0; overflow:hidden; transition:all 0.4s ease; font-size:14px; color:#444; margin-top:10px;">
      Identify needs, define boundaries, clarify goals, align expectations.
      </div>
    </div>

    <div class="process-box" onclick="toggleStep(this)" style="cursor:pointer; border-radius:10px; padding:15px; text-align:center; width:160px; transition:all 0.3s ease, transform 0.3s ease; position:relative;">
      <div style="background:#00674f; color:white; width:70px; height:70px; margin:0 auto 10px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:30px;">
        <i class="fas fa-bullseye"></i>
      </div>
      <p style="font-weight:300; font-size:1.2rem; margin:0;color:#00674F">Planning & Strategy</p>
      <div class="detail" style="max-height:0; opacity:0; overflow:hidden; transition:all 0.4s ease; font-size:14px; color:#444; margin-top:10px;">
        Set goals and execution plans for the project.
      </div>
    </div>

    <div class="process-box" onclick="toggleStep(this)" style="cursor:pointer; border-radius:10px; padding:15px; text-align:center; width:160px; transition:all 0.3s ease, transform 0.3s ease; position:relative;">
      <div style="background:#00674f; color:white; width:70px; height:70px; margin:0 auto 10px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:30px;">
        <i class="fas fa-rocket"></i>
      </div>
      <p style="font-weight:300; font-size:1.2rem; margin:0; color:#00674F">Design UI, UX & CX</p>
      <div class="detail" style="max-height:0; opacity:0; overflow:hidden; transition:all 0.4s ease; font-size:14px; color:#444; margin-top:10px;">
        Create user-friendly and appealing designs and solutions.
      </div>
    </div>

    <div class="process-box" onclick="toggleStep(this)" style="cursor:pointer; border-radius:10px; padding:15px; text-align:center; width:160px; transition:all 0.3s ease, transform 0.3s ease; position:relative;">
      <div style="background:#00674f; color:white; width:70px; height:70px; margin:0 auto 10px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:30px;">
        <i class="fas fa-laptop-code"></i>
      </div>
      <p style="font-weight:300; font-size:1.2rem; margin:0; color:#00674F">Development & Testing</p>
      <div class="detail" style="max-height:0; opacity:0; overflow:hidden; transition:all 0.4s ease; font-size:14px; color:#444; margin-top:10px;">
        Build and test the product functionality and quality.
      </div>
    </div>

    <div class="process-box" onclick="toggleStep(this)" style="cursor:pointer; border-radius:10px; padding:15px; text-align:center; width:160px; transition:all 0.3s ease, transform 0.3s ease; position:relative;">
      <div style="background:#00674f; color:white; width:70px; height:70px; margin:0 auto 10px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:30px;">
        <i class="fas fa-paper-plane"></i>
      </div>
      <p style="font-weight:300; font-size:1.2rem; margin:0;color:#00674F">Launch & Post-Launch</p>
      <div class="detail" style="max-height:0; opacity:0; overflow:hidden; transition:all 0.4s ease; font-size:14px; color:#444; margin-top:10px;">
        Deploy the solution and monitor post-launch performance.
      </div>
    </div>

    <div class="process-box" onclick="toggleStep(this)" style="cursor:pointer; border-radius:10px; padding:15px; text-align:center; width:160px; transition:all 0.3s ease, transform 0.3s ease; position:relative;">
      <div style="background:#00674f; color:white; width:70px; height:70px; margin:0 auto 10px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:30px;">
        <i class="fas fa-headset"></i>
      </div>
      <p style="font-weight:300; font-size:1.2rem; margin:0; color:#00674F">Support & Maintenance</p>
      <div class="detail" style="max-height:0; opacity:0; overflow:hidden; transition:all 0.4s ease; font-size:14px; color:#444; margin-top:10px;">
        Provide ongoing assistance and updates for the Customers.
      </div>
    </div>

    <div class="process-box" onclick="toggleStep(this)" style="cursor:pointer; border-radius:10px; padding:15px; text-align:center; width:160px; transition:all 0.3s ease, transform 0.3s ease; position:relative;">
      <div style="background:#00674f; color:white; width:70px; height:70px; margin:0 auto 10px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:30px;">
        <i class="fas fa-chart-line"></i>
      </div>
      <p style="font-weight:300; font-size:1.2rem; margin:0;color:#00674F">Review & Improvements</p>
      <div class="detail" style="max-height:0; opacity:0; overflow:hidden; transition:all 0.4s ease; font-size:14px; color:#444; margin-top:10px;">
        Analyze results and apply continuous improvements the Works.
      </div>
    </div>

  </div>

  <script>
    function toggleStep(clickedBox) {
      const boxes = document.querySelectorAll('.process-box');

      boxes.forEach(box => {
        const detail = box.querySelector('.detail');
        if (box === clickedBox) {
          const isOpen = detail.style.maxHeight && detail.style.maxHeight !== '0px';
          if (isOpen) {
            detail.style.maxHeight = '0px';
            detail.style.opacity = '0';
            box.style.transform = 'scale(1)';
          } else {
            detail.style.maxHeight = '100px';
            detail.style.opacity = '1';
            box.style.transform = 'scale(1.05)';
          }
        } else {
          box.querySelector('.detail').style.maxHeight = '0px';
          box.querySelector('.detail').style.opacity = '0';
          box.style.transform = 'scale(1)';
        }
      });
    }
  </script>
    </div>
  </div>
</section> 
<section class="section mt-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 style="color:#00674F" class="mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">What We Offer</h2>
              <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">What makes us different from others? We give holistic solutions<br class="d-none d-lg-block">with strategy, design & technology.</p>
            </div>
          </div>
          <div class="row mt-50">
            <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-offer card-we-do hover-up">
                <div class="card-image"><img src="assets/imgs/ftg-pages/moneymanagement.jpg" alt=""></div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="Seamless importing and round-tripping of Microsoft Project plans, Excel files & CSV files.">Manage budgets and resources</a></h4>
                  <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                  <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
              <div class="card-offer card-we-do hover-up">
                <div class="card-image"><img src="assets/imgs/ftg-pages/employee.jpg" alt=""></div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="What makes us different from others? We give holistic solutions with strategy, design & technology.">Employee Assessments</a></h4>
                  <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                  <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-offer card-we-do hover-up">
                <div class="card-image"><img src="assets/imgs/ftg-pages/smarttoolscard.png" alt=""></div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="No lag time, no lost effort when priorities change, no email black hole. As team collaboration improves">Smart Installation Tools</a></h4>
                  <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                  <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
              <div class="card-offer card-we-do hover-up">
                <div class="card-image"><img src="assets/imgs/ftg-pages/collaborativecard.png" alt=""></div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="Share updates instantly within our project management software, and get the entire team collaborating">Collaborative to the core.</a></h4>
                  <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                  <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-offer card-we-do hover-up">
                <div class="card-image"><img src="assets/imgs/ftg-pages/benefits-business-strategy.png" alt=""></div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="Seamless importing and round-tripping of Microsoft Project plans, Excel files & CSV files.">Manage budgets and resources</a></h4>
                  <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                  <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
              <div class="card-offer card-we-do hover-up">
                <div class="card-image"><img src="assets/imgs/ftg-pages/ultimatewaystoworkcard.png" alt=""></div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="What makes us different from others? We give holistic solutions with strategy, design & technology.">Unlimited ways to work</a></h4>
                  <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                  <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
      </section>
      <section class="section mt-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Why Choose Us</h2>
              <p class="font-lg color-gray-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">What makes us different from others? We give holistic solutions<br class="d-none d-lg-block">with strategy, design & technology.</p>
            </div>
          </div>
          <div class="mt-50">
            <div class="row">
              <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-offer card-offer-2 hover-up">
                  <div class="card-image"><img src="assets/imgs/page/homepage1/cross4.png" alt="iori"></div>
                  <div class="card-info">
                    <h4 class="color-brand-1 mb-15">Cross Platform</h4>
                    <p class="font-sm color-grey-500 mb-15">Est minima repellendus in dolor dolorum aut assumenda ullam et voluptates numquam qui aliquam perspiciatis ad neque ullam. Qui sequi porro in tempore nemo et itaque eligendi qui iusto saepe et suscipit sint et pariatur dolor.</p>
                  </div>
                  <div class="card-image-bottom mt-50"><img class="w-100 bd-rd16" src="assets/imgs/page/homepage11/img.png" alt="iori"></div>
                </div>
              </div>
              <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                <div class="card-offer card-offer-2 hover-up">
                  <div class="card-image-bottom mb-35"><img class="w-100 bd-rd16" src="assets/imgs/page/homepage11/img2.png" alt="iori"></div>
                  <div class="card-info">
                    <h4 class="color-brand-1 mb-15">Smart Integration</h4>
                    <p class="font-sm color-grey-500 mb-15">Est minima repellendus in dolor dolorum aut assumenda ullam et voluptates numquam qui aliquam perspiciatis ad neque ullam.</p>
                    <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-grey-900">Contact Us
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                <div class="card-offer card-offer-2 hover-up">
                  <div class="card-image"><img src="assets/imgs/page/homepage11/social.png" alt="iori"></div>
                  <div class="card-info">
                    <h4 class="color-brand-1 mb-15">End to End Support</h4>
                    <p class="font-sm color-grey-500 mb-15">Est minima repellendus in dolor dolorum aut assumenda ullam et voluptates numquam qui aliquam perspiciatis ad neque ullam. Qui sequi porro in tempore nemo et itaque eligendi qui iusto saepe et suscipit sint et pariatur dolor.</p>
                  </div>
                  <div class="card-image-bottom mt-50"><img class="w-100 bd-rd16" src="assets/imgs/page/homepage11/img3.png" alt="iori"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section style="background-color: white; padding: 30px 0; position: relative; overflow: hidden;">

  <div style="position:absolute; top:10%; left:5%; width:200px; height:200px; background-image: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 100 100\'><path d=\'M20,20 L80,20 L80,80 L20,80 Z\' stroke=\'%2300674F\' stroke-width=\'2\' fill=\'none\'/></svg>'); opacity:0.03; pointer-events:none; z-index:0;"></div>

  <div style="position:absolute; bottom:10%; right:5%; width:150px; height:150px; background-image: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 100 100\'><circle cx=\'50\' cy=\'50\' r=\'40\' stroke=\'%2300674F\' stroke-width=\'2\' fill=\'none\'/></svg>'); opacity:0.03; pointer-events:none; z-index:0;"></div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center" style="position: relative; margin-bottom: 70px; z-index:1;">
        <h2 style="font-weight:800; font-size:2.8rem; margin-bottom:20px; line-height:1.2; background: #00674f; -webkit-background-clip: text; color:transparent;">Why Data Engineering is Important for Your Company</h2>
        <p style="font-size:1.1rem; color:black; max-width:700px; margin:0 auto;">Transform your business operations with the power of decentralized technology</p>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="display:flex; margin-bottom:40px; background:white; border-radius:12px; padding:30px; box-shadow:0 5px 15px rgba(0,0,0,0.05); border-left:5px solid #00674f; transition:all 0.3s ease;"
          onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 25px rgba(0,103,79,0.2)';"
          onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.05)';">
          <div style="font-size:1rem; font-weight:700; color:white; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; margin-right:20px; background-color:#00674f;">01</div>
          <div style="flex:1;">
            <h3 style="font-weight:700; font-size:1.5rem; margin-bottom:15px; color:#00674f; display:flex; align-items:center;">
              <i class="fas fa-shield-alt" style="width:30px; height:30px; margin-right:15px; display:flex; align-items:center; justify-content:center; border-radius:8px; padding:5px; background-color:rgba(0,103,79,0.1); color:#00674f;"></i>
              Decentralized Security
            </h3>
            <p style="color:black; font-size:1.05rem; line-height:1.8; margin-bottom:20px;">
              Blockchain provides tamper-proof security through decentralized networks, eliminating single points of failure and protecting company data from breaches. Our solutions ensure military-grade encryption for your critical business data.
            </p>
            <a href="#" style="display:inline-flex; align-items:center; font-weight:600; font-size:0.95rem; color:#00674f; text-decoration:none; transition:all 0.3s ease;"
              onmouseover="this.style.transform='translateX(5px)';" 
              onmouseout="this.style.transform='translateX(0px)';">
              Learn more <i class="fas fa-arrow-right" style="margin-left:8px; transition:all 0.3s ease;"></i>
            </a>
          </div>
        </div>
        <div style="display:flex; margin-bottom:40px; background:white; border-radius:12px; padding:30px; box-shadow:0 5px 15px rgba(0,0,0,0.05); border-left:5px solid #00674f; transition:all 0.3s ease;"
          onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 25px rgba(0,103,79,0.2)';"
          onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.05)';">
          <div style="font-size:1rem; font-weight:700; color:white; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; margin-right:20px; background-color:#00674f;">02</div>
          <div style="flex:1;">
            <h3 style="font-weight:700; font-size:1.5rem; margin-bottom:15px; color:#00674f; display:flex; align-items:center;">
              <i class="fas fa-eye" style="width:30px; height:30px; margin-right:15px; display:flex; align-items:center; justify-content:center; border-radius:8px; padding:5px; background-color:rgba(0,103,79,0.1); color:#00674f;"></i>
              Transparent Operations
            </h3>
            <p style="color:black; font-size:1.05rem; line-height:1.8; margin-bottom:20px;">
              Blockchain creates immutable audit trails for all transactions, building trust with stakeholders through complete transparency in business processes. Every action is permanently recorded and verifiable by authorized parties.
            </p>
            <a href="#" style="display:inline-flex; align-items:center; font-weight:600; font-size:0.95rem; color:#00674f; text-decoration:none; transition:all 0.3s ease;"
              onmouseover="this.style.transform='translateX(5px)';" 
              onmouseout="this.style.transform='translateX(0px)';">
              Learn more <i class="fas fa-arrow-right" style="margin-left:8px; transition:all 0.3s ease;"></i>
            </a>
          </div>
        </div>
        <div style="display:flex; margin-bottom:40px; background:white; border-radius:12px; padding:30px; box-shadow:0 5px 15px rgba(0,0,0,0.05); border-left:5px solid #00674f; transition:all 0.3s ease;"
          onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 25px rgba(0,103,79,0.2)';"
          onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.05)';">
          <div style="font-size:1rem; font-weight:700; color:white; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; margin-right:20px; background-color:#00674f;">03</div>
          <div style="flex:1;">
            <h3 style="font-weight:700; font-size:1.5rem; margin-bottom:15px; color:#00674f; display:flex; align-items:center;">
              <i class="fas fa-file-contract" style="width:30px; height:30px; margin-right:15px; display:flex; align-items:center; justify-content:center; border-radius:8px; padding:5px; background-color:rgba(0,103,79,0.1); color:#00674f;"></i>
              Smart Contracts
            </h3>
            <p style="color:black; font-size:1.05rem; line-height:1.8; margin-bottom:20px;">
              Automate business processes with self-executing contracts that reduce paperwork, eliminate intermediaries, and ensure compliance. Our smart contract solutions can automate up to 80% of routine business agreements.
            </p>
            <a href="#" style="display:inline-flex; align-items:center; font-weight:600; font-size:0.95rem; color:#00674f; text-decoration:none; transition:all 0.3s ease;"
              onmouseover="this.style.transform='translateX(5px)';" 
              onmouseout="this.style.transform='translateX(0px)';">
              Learn more <i class="fas fa-arrow-right" style="margin-left:8px; transition:all 0.3s ease;"></i>
            </a>
          </div>
        </div>
        <div style="display:flex; margin-bottom:40px; background:white; border-radius:12px; padding:30px; box-shadow:0 5px 15px rgba(0,0,0,0.05); border-left:5px solid #00674f; transition:all 0.3s ease;"
          onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 25px rgba(0,103,79,0.2)';"
          onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.05)';">
          <div style="font-size:1rem; font-weight:700; color:white; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; margin-right:20px; background-color:#00674f;">04</div>
          <div style="flex:1;">
            <h3 style="font-weight:700; font-size:1.5rem; margin-bottom:15px; color:#00674f; display:flex; align-items:center;">
              <i class="fas fa-boxes" style="width:30px; height:30px; margin-right:15px; display:flex; align-items:center; justify-content:center; border-radius:8px; padding:5px; background-color:rgba(0,103,79,0.1); color:#00674f;"></i>
              Supply Chain Integrity
            </h3>
            <p style="color:black; font-size:1.05rem; line-height:1.8; margin-bottom:20px;">
              Track goods from origin to delivery with blockchain's immutable ledger, preventing fraud and ensuring product authenticity throughout your supply chain. Gain real-time visibility into every stage of your product journey.
            </p>
            <a href="#" style="display:inline-flex; align-items:center; font-weight:600; font-size:0.95rem; color:#00674f; text-decoration:none; transition:all 0.3s ease;"
              onmouseover="this.style.transform='translateX(5px)';" 
              onmouseout="this.style.transform='translateX(0px)';">
              Learn more <i class="fas fa-arrow-right" style="margin-left:8px; transition:all 0.3s ease;"></i>
            </a>
          </div>
        </div>

      </div>
    </div>
    <div class="row">
    <div class="col-12 text-center" style="margin-top:60px;">
  <button style="display:inline-block; padding:16px 42px; font-family:'Inter', sans-serif; font-weight:700; font-size:1.1rem;  letter-spacing:1px; border:none; border-radius:50px; cursor:pointer; transition:all 0.3s ease; background:linear-gradient(135deg, #FF671F, #FFFFFF, #046A38); color:#024402; box-shadow:0 8px 24px rgba(4,106,56,0.25); position:relative; overflow:hidden;"
    onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 12px 28px rgba(4,106,56,0.35)';"
    onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 8px 24px rgba(4,106,56,0.25)';">
    Explore Our Data Engineering Solutions 
  </button>
</div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
  new WOW().init();
</script>
</section>
<section class="section mt-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Benefits</h2>
              <p class="font-lg color-gray-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">What makes us different from others? We give holistic solutions<br class="d-none d-lg-block">with strategy, design & technology.</p>
            </div>
          </div>
          <div class="mt-50 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="box-swiper">
              <div class="swiper-container swiper-group-4">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="card-offer-style-3">
                      <div class="card-head">
                        <div class="card-image"><img src="assets/imgs/ftg-pages/benefits-cross-platform.png" alt="fintechgie"></div>
                        <div class="carrd-title">
                          <h4 class="color-brand-1">Cross-Platform</h4>
                        </div>
                      </div>
                      <div class="card-info">
                        <p class="font-sm color-grey-500 mb-15">Discover powerful features to boost your productivit. You are always welcome to visit our little den. Professional in teir craft! All products were super amazing with strong attension to details, comps and overall vibe.</p>
                        <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1 hover-up">Learn More
                            <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide head-bg-brand-2">
                    <div class="card-offer-style-3">
                      <div class="card-head">
                        <div class="card-image"><img src="assets/imgs/ftg-pages/benefits-business-strategy.png" alt=""></div>
                        <div class="carrd-title">
                          <h4 class="color-brand-1">Business strategy</h4>
                        </div>
                      </div>
                      <div class="card-info">
                        <p class="font-sm color-grey-500 mb-15">Discover powerful features to boost your productivit. You are always welcome to visit our little den. Professional in teir craft! All products were super amazing with strong attension to details, comps and overall vibe.</p>
                        <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1 hover-up">Learn More
                            <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide head-bg-2">
                    <div class="card-offer-style-3">
                      <div class="card-head">
                        <div class="card-image"><img src="assets/imgs/ftg-pages/benefits-local-marketing.png" alt=""></div>
                        <div class="carrd-title">
                          <h4 class="color-brand-1">Local Marketing</h4>
                        </div>
                      </div>
                      <div class="card-info">
                        <p class="font-sm color-grey-500 mb-15">Discover powerful features to boost your productivit. You are always welcome to visit our little den. Professional in teir craft! All products were super amazing with strong attension to details, comps and overall vibe.</p>
                        <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1 hover-up">Learn More
                            <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide head-bg-5">
                    <div class="card-offer-style-3">
                      <div class="card-head">
                        <div class="card-image"><img src="assets/imgs/ftg-pages/benefits-social-media.png" alt=""></div>
                        <div class="carrd-title">
                          <h4 class="color-brand-1">Social Media</h4>
                        </div>
                      </div>
                      <div class="card-info">
                        <p class="font-sm color-grey-500 mb-15">Discover powerful features to boost your productivit. You are always welcome to visit our little den. Professional in teir craft! All products were super amazing with strong attension to details, comps and overall vibe.</p>
                        <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1 hover-up">Learn More
                            <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="box-button-slider-bottom">
                  <div class="swiper-button-prev swiper-button-prev-group-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                  </div>
                  <div class="swiper-button-next swiper-button-next-group-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-70">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <h2 class="color-brand-1 mb-15">Get in touch</h2>
              <p class="font-sm color-grey-500">Do you want to know more or contact our sales department?</p>
              <div class="mt-50">
                <div class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                  <div class="card-offer card-we-do card-contact hover-up">
                    <div class="card-image"><img src="assets/imgs/ftg-pages/getintouch1.png" alt=""></div>
                    <div class="card-info">
                      <h6 class="color-brand-1 mb-10">Visit the Knowledge Base</h6>
                      <p class="font-md color-grey-500 mb-5">Browse customer support articles and step-by-step instructions for specific features.</p>
                    </div>
                  </div>
                </div>
                <div class="wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                  <div class="card-offer card-we-do card-contact hover-up">
                    <div class="card-image"><img src="assets/imgs/ftg-pages/getintouch2.png" alt=""></div>
                    <div class="card-info">
                      <h6 class="color-brand-1 mb-10">Watch Product Videos</h6>
                      <p class="font-md color-grey-500 m
                      b-5">Watch our video tutorials for visual walkthroughs on how to use our features.</p>
                    </div>
                  </div>
                </div>
                <div class="wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                  <div class="card-offer card-we-do card-contact hover-up">
                    <div class="card-image"><img src="assets/imgs/ftg-pages/getintouch3.png" alt=""></div>
                    <div class="card-info">
                      <h6 class="color-brand-1 mb-10">Get in touch with Sales</h6>
                      <p class="font-md color-grey-500 mb-5">Let us talk about how we can help your enterprise.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="box-form-contact wow animate__animated animate__fadeIn" data-wow-delay=".6s">
                <div class="row">
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-user" type="text" placeholder="Your name">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-email" type="text" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-phone" type="text" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-company" type="text" placeholder="Company">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mb-25">
                      <input class="form-control" type="text" placeholder="Subject">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mb-25">
                      <textarea class="form-control textarea-control" placeholder="Write something"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6 col-9">
                    <div class="form-group">
                    <div class="d-none d-sm-inline-block"><a href="home.php">
              <div class="col-12 text-center">
                   <button style="display:inline-block; padding:14px 25px; font-family:'Inter', sans-serif; font-weight:700; font-size:14px;  letter-spacing:1px; border:none; border-radius:50px; cursor:pointer; transition:all 0.3s ease; background:linear-gradient(135deg, #FF671F, #FFFFFF, #046A38); color:#024402; box-shadow:0 8px 24px rgba(4,106,56,0.25); position:relative; overflow:hidden;"
                    onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 12px 28px rgba(4,106,56,0.35)';"
                     onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 8px 24px rgba(4,106,56,0.25)';">
                      send Message
                      </button>
                    </div></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include "layout/footer.php"; ?> 
    <script src="assets/js/vendors/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendors/jquery-3.7.1.min.js"></script>
    <script src="assets/js/vendors/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/waypoints.js"></script>
    <script src="assets/js/vendors/wow.js"></script>
    <script src="assets/js/vendors/magnific-popup.js"></script>
    <script src="assets/js/vendors/perfect-scrollbar.min.js"></script>
    <script src="assets/js/vendors/select2.min.js"></script>
    <script src="assets/js/vendors/isotope.js"></script>
    <script src="assets/js/vendors/scrollup.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/noUISlider.js"></script>
    <script src="assets/js/vendors/slider.js"></script>
    <script src="assets/js/vendors/counterup.js"></script>
    <script src="assets/js/vendors/jquery.countdown.min.js"></script>
    <script src="assets/js/vendors/jquery.elevatezoom.js"></script>
    <script src="assets/js/vendors/slick.js"></script>
    <script src="assets/js/vendors/gsap.min.js"></script>
    <script src="assets/js/main.js?v=6.0.0"></script>
    <script src="assets/js/ali-animation.js?v=1.0.0"></script>
  </body>
</html>