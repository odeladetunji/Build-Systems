<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BuildSystems</title>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
  <body>
     <div class="header">
         <ul>
           <li>BuildSystems</li>
           <li><a href="/">Home</a></li>
           <li><a href="/aboutus">About Us
              <div class="forAbout">
                <ul class="about">
                  <li>About Us</li>
                  <li>Who we are</li><br>
                  <li>Our Resources</li>
                </ul>

                <ul class="about">
                  <li>Clients Testimonials</li>
                  <li>Jobs</li><br>
                  <li>Partner with Us</li>
                </ul>

                <ul class="about">
                  <li>Technology Partners</li>
                  <li>Certifications</li>
                  <li>Confidentiality</li>
                </ul>
              </div>
           </a></li>
           <li><a href="/services">Services
               <div class="forServices">
                 <ul class="services">
                   <li>business Development Solutions</li>
                   <li>Strategic Business growth Solutions</li>
                   <li>Start Up Advisory Services</li>
                   <li>Market Dynamics Analysis</li>
                   <li>Product Perfomance and Innovative Solutions</li>
                 </ul>

                 <ul class="services">
                   <li>Software Development Solutions</li>
                   <li>Custom Web and Mobile Development</li>
                   <li>Search Engine Optimization (SEO) & Digital Marketing</li>
                   <li>Data warehousing & Analytics</li>
                   <li>Cloud Hosting and Supports</li>
                 </ul>

                 <ul class="services">
                   <li>Hardware Technology</li>
                   <li>Internet of Things</li><br>
                   <li>Robotics</li><br>
                   <li>Artificial Intelligence</li>
                   <li>IT Support System</li>
                 </ul>
               </div>
           </a></li>
           <li>Technologies
             <div class="forTechnology">
               <ul class="theTechnlogies">
                 <li>Front End</li>
                 <li>React JS</li>
                 <li>Angular JS</li>
                 <li>Vue JS</li>
                 <li>React Native</li>
               </ul>
               <ul class="theTechnlogies">
                 <li>Backend</li>
                 <li>PHP</li>
                 <li>ASP.Net MVC</li>
                 <li>Angular</li>
                 <li>JavaScript</li><br>
                 <li>Java</li>
                 <li>Spring MVC</li>
                 <li>Nodejs</li>
               </ul>
               <ul class="theTechnlogies">
                 <li>Framework</li>
                 <li>WordPress</li>
                 <li>CakePhp</li>
                 <li>Laravel</li><br>
                 <li>Django</li><br>
                 <li>Electron</li>
               </ul>
               <ul class="theTechnlogies">
                 <li>Platforms</li>
                 <li>Magento</li>
                 <li>Woocommerce</li>
                 <li>BigCommerce</li>
                 <li>Shopify</li>
                 <li>Salesforce</li>
               </ul>
               <ul class="theTechnlogies">
                 <li>Database</li>
                 <li>MySQL</li><br>
                 <li>NoSQL</li>
                 <li>Oracle DB</li>
                 <li>PostgreSQL</li>
                 <li>MSSQL</li>
                 <li>MongoDB</li>
                 <li>FireBase</li>
                 <li>FireStone</li>
               </ul>
               <ul class="theTechnlogies">
                 <li>Mobile Apps</li>
                 <li>iOS</li><br>
                 <li>Android</li>
                 <li>Cardova</li><br>
                 <li>Ionic</li>
               </ul>
             </div>
           </li>
           <li><a href="/portfolio">Portfolio</a></li>
           <li>Case Studies
             <div class="forCaseStudies">
                <ul class="casestudies">
                  <li>Software & Technology</li>
                  <li>Travel Hospitality</li><br>
                  <li>Real Estate</li>
                </ul>

                <ul class="casestudies">
                  <li>Education</li>
                  <li>Manufacturing</li><br>
                  <li>Sports</li>
                </ul>

                <ul class="casestudies">
                  <li>Retail & eCommerce</li>
                  <li>Health & Life Science</li>
                  <li>Energy & Utilities</li>
                </ul>

                <ul class="casestudies">
                  <li>Logistic & Shipping</li>
                  <li>Media Entertainment</li>
                  <li>Automotive</li>
                </ul>
             </div>
           </li>
           <li><a href="/contactus"> Contact Us</a></li>
           <li><a href="/banner">banner</a></li>
         </ul>
    </div>
    <div class="secondHeader">
        <div class="heading">
          <img src="{{ asset('/images/BuildSystem/Home/logo.png')}}" alt="">
          <i class="fas fa-bars" onClick='toggleHeader()'></i>
        </div>
        <ul class="items">
          <li><a href="/">Home</a></li>
          <li id='aboutus2' onclick="showStack(this)">About Us
            <div class="mobileForAbout aboutus2">
              <ul class="mobileAbout">
                <li><a href="/aboutus">About Us</a></li>
                <li><a href="/aboutus">Who we are</a></li>
                <li><a href="/aboutus">Our Resources</a></li><br>
                <li><a href="/aboutus">Clients Testimonials</a></li>
                <li><a href="/aboutus">Jobs</a></li>
                <li><a href="/aboutus">Partner with Us</a></li><br>
                <li><a href="/aboutus">Technology Partners</a></li>
                <li><a href="/aboutus">Certifications</a></li>
                <li><a href="/aboutus">Confidentiality</a></li>
              </ul>
            </div>
          </li>
          <li id="services2" onclick="showStack(this)">Services
            <div class="mobileForServices services2">
              <ul class="mobileServices">
                <li><a href="/services">business Development Solutions</a></li>
                <li><a href="/services">Strategic Business growth Solutions</a></li>
                <li><a href="/services">Start Up Advisory Services</a></li>
                <li><a href="/services">Market Dynamics Analysis</a></li>
                <li><a href="/services">Product Perfomance and Innovative Solutions</a></li><br>
                <li><a href="/services">Software Development Solutions</a></li>
                <li><a href="/services">Custom Web and Mobile Development</a></li>
                <li><a href="/services">Search Engine Optimization (SEO) & Digital Marketing</a></li>
                <li><a href="/services">Data warehousing & Analytics</a></li>
                <li><a href="/services">Cloud Hosting and Supports</a></li><br>
                <li><a href="/services">Hardware Technology</a></li>
                <li><a href="/services">Internet of Things</a></li>
                <li><a href="/services">Robotics</a></li>
                <li><a href="/services">Artificial Intelligence</a></li>
                <li><a href="/services">IT Support System</a></li>
              </ul>
            </div>
          </li>
          <li id="technology2" onclick="showStack(this)">Technology
            <div class="mobileForTechnology technology2">
              <ul class="MobileTechnlogies">
                <li>Front End</li>
                <li>React JS</li>
                <li>Angular JS</li>
                <li>Vue JS</li>
                <li>React Native</li><br>
              </ul>
              <ul class="MobileTechnlogies">
                <li>Backend</li>
                <li>PHP</li>
                <li>ASP.Net MVC</li>
                <li>Angular</li>
                <li>JavaScript</li>
                <li>Java</li>
                <li>Spring MVC</li>
                <li>Nodejs</li><br>
              </ul>
              <ul class="MobileTechnlogies">
                <li>Framework</li>
                <li>WordPress</li>
                <li>CakePhp</li>
                <li>Laravel</li>
                <li>Django</li>
                <li>Electron</li><br>
              </ul>
              <ul class="MobileTechnlogies">
                <li>Platforms</li>
                <li>Magento</li>
                <li>Woocommerce</li>
                <li>BigCommerce</li>
                <li>Shopify</li>
                <li>Salesforce</li><br>
              </ul>
              <ul class="MobileTechnlogies">
                <li>Database</li>
                <li>MySQL</li>
                <li>NoSQL</li>
                <li>Oracle DB</li>
                <li>PostgreSQL</li>
                <li>MSSQL</li>
                <li>MongoDB</li>
                <li>FireBase</li>
                <li>FireStone</li><br>
              </ul>
              <ul class="MobileTechnlogies">
                <li>Mobile Apps</li>
                <li>iOS</li>
                <li>Android</li>
                <li>Cardova</li>
                <li>Ionic</li>
              </ul>
            </div>
          </li>
          <li><a href="/Portfolio">Portfolio</a></li>
          <li id='casestudies2' onclick="showStack(this)">Case Studies
            <div class="MobileForCaseStudies casestudies2">
               <ul class="mobileCasestudies">
                 <li>Software & Technology</li>
                 <li>Travel Hospitality</li>
                 <li>Real Estate</li><br>
               </ul>

               <ul class="mobileCasestudies">
                 <li>Education</li>
                 <li>Manufacturing</li>
                 <li>Sports</li><br>
               </ul>

               <ul class="mobileCasestudies">
                 <li>Retail & eCommerce</li>
                 <li>Health & Life Science</li>
                 <li>Energy & Utilities</li><br>
               </ul>

               <ul class="mobileCasestudies">
                 <li>Logistic & Shipping</li>
                 <li>Media Entertainment</li>
                 <li>Automotive</li>
               </ul>
            </div>
          </a></li>
          <li><a href="/contactus">Contact Us</a></li>
        </ul>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
       <div class="carousel-inner">
         <div class="carousel-item active bannerSlider">
             <div class="design">
                 <h3>Design, automate  and </h3>
                 <h3>implement any industrial</h3>
                 <h3>or business</h3>
                 <p>Whatever task your organisation is does everyday in a repetitive <br>
                   manner, we will automate it with algorithms to foster <br>greater productivity in your endevours</p>
                 <button>Contact Us <i></i></button>
             </div>
             <img src="/images/BuildSystem/Home/someting.png"  alt="">
         </div>

         <div class="carousel-item bannerSlider">
             <div class="design">
                 <h3>Business intelligence and <br> analytics analytics</h3>


                 <p>Comprehend simple insight from complex data using <br> innovative business Intelligence and analytic tools designed <br>exclusively for your business</p>
                 <button>Contact Us <i></i></button>
             </div>
             <img src="/images/BuildSystem/Home/Home02 Hero Img.png"   alt="">
         </div>

         <div class="carousel-item bannerSlider">
             <div class="design">
                 <h3>Digital Marketing</h3>
                 <p>We provide all kinds of digital marketing services that are <br> required to improve your brand visibility in your market & <br> increase ROI</p>
                 <button>Contact Us <i></i></button>
             </div>
             <img src="/images/BuildSystem/Home/Home03HeroImg.png"  alt="">
         </div>

         <div class="carousel-item bannerSlider">
             <div class="design">
                 <h3>Mobile App Development</h3>
                 <p>Whatever the task your organisation do everyday in a repetitive <br> manner, we will automate it with algorithms to foster <br> greater productivity in your endeavours</p>
                 <button>Contact Us <i></i></button>
             </div>
             <img src="/images/BuildSystem/Home/Home04HeroImg.png"  alt="">
         </div>
      </div>
   </div>

    <div class="containBody">
      <div class="howWeAutomate">
           <h3>How We Automate Processes</h3>
           <div class="row contents">
              <div class="col-md-4 a_section">
                <img src="{{ asset('/images/BuildSystem/Home/DesignSystemsIcon.png')}}" alt="">
                <div>
                  <h6>Design Systems</h6>
                  <p>This first stage is were we work in sync with clients to develop detailed documents of the activities our clients do in their organisations. we study and come up with a flow diagram of the activities.</p>
                </div>
              </div>
              <div class="col-md-4 a_section">
                <img src="{{ asset('/images/BuildSystem/Home/AutoProcIcon.png')}}" alt="">
                <div>
                  <h6>Automate Processes</h6>
                  <p>The design stage is followed by choosing technology stacks/framework and using the technologies to write algorithms for automation of the processes detailed in the design stage.</p>
                </div>
              </div>
              <div class="col-md-4 a_section">
                <img src="{{ asset('/images/BuildSystem/Home/ImplementIcon.png')}}" alt="">
                <div>
                  <h6>Impliment</h6>
                  <p>The final stage, this is were the finished products are tested and deployed to the nessary environments or machines for consumption.</p>
                </div>
              </div>
           </div>
       </div>
       <div id="technologyExample" class="carousel slide" data-ride="carousel" data-interval="1000" data-pause="false">
         <div class="carousel-inner">
           <div class="carousel-item active technology">
             <h3>Technologies</h3>
             <div class="technologylist">
               <img src="{{ asset('/images/BuildSystem/Home/Java_Horizontalcopy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Home/02-javascript-1 copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Home/03-react-1 copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Home/04-AngularJS copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Home/05-vuejs copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Home/07-Node-JS copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Home/11-react-Native-1 copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Home/12-php-1 copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Home/14-html-5 copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Home/13-css3 copy.png')}}" alt="">
             </div>
           </div>


           <div class="carousel-item technology">
             <h3>Technologies</h3>
             <div class="technologylist">
               <img src="{{ asset('/images/BuildSystem/Tech - Platform/10-BigCommerce copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Tech - Platform/01-WordPress_blue copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Tech - Platform/02-cakephp-2 copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Tech - Platform/03-Laravel copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Tech - Platform/07-Magento copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Tech - Platform/09-shopify copy.png')}}" alt="">
               <img src="{{ asset('/images/BuildSystem/Tech - Platform/09-woocommerce copy.png')}}" alt="">
             </div>
         </div>

         <div class="carousel-item technology">
           <h3>Technologies</h3>
           <div class="technologylist">
             <img src="{{ asset('/images/BuildSystem/Tech -Databases/01-mysql-official copy.png')}}" alt="">
             <img src="{{ asset('/images/BuildSystem/Tech -Databases/08-google_bigquery copy.png')}}" alt="">
             <img src="{{ asset('/images/BuildSystem/Tech -Databases/10-algolia copy.png')}}" alt="">
             <img src="{{ asset('/images/BuildSystem/Tech -Databases/11-cloud-firebstore copy.png')}}" alt="">
             <img src="{{ asset('/images/BuildSystem/Tech -Databases/12-firebase copy.png')}}" alt="">
           </div>
         </div>
       </div>
       </div>
       <div class="whoWeAre">
         <h3>Who We are</h3>
             <p>Build System is a Nigeria basedICT Company established to deliver superior and innovative High-Tech solutions for both our Offshore and Domestic clients. We offer comprehensive process automation for our corporate clients, SMEs and start-up businesses who are looking for simplified yet effective and innovative ways to run their daily operations.
  With our team of highly skilled developer and our partners across the globe, we are determine to contribute our share of innovative technology towards the United Nation (UN) Sustainable Development Goals (SDGs) 2030 Agenda which recognizes the need to develop knowledge-Base societies which frankly highlights the need for access to Information and Communication Technologies (ICTs) in different way to help resolve some of the social-economic challenges faced by different Nation with regards to Agriculture, Transportation, Healthcare, Qualitative Education, Affordable & Accessible Housing, etc.
  We are ready each day of the week, 24 hours day to partner with you on any project that requires our professional touch. Our support team is always online to 24/7 to attend to your request whenever the need arises. You can also request for a demo presentation on any of our software solution. Thank you as we look forward to a mutually beneficial working relationship with you.</p>
       </div>
       <div class="resources">
           <h3>Resources</h3>
           <p>At Build Systems, we pride our-self with our team of High skilled IT professionals in the area of Programming, Data Analytics, Project Management, UI/UX Designing, Digital Marketing, Research & Development (R&D) that are well experienced and devoted to ensuring you get solutions that are second to none anywhere in the world. Each team are fully equipped with an updated robust data base of industry information and smart workstation to give you world-class solution.Our success story has been our team’s ability to deliver and align the best solutions with the client project.Our other resource includes: </p>
           <div class="forResources">
              <div>
                  <img src="{{ asset('/images/BuildSystem/Home/001-24-hours-delivery.png')}}" alt="">
                  <p>24/7 Powered</p>
                  <p>System Support</p>
              </div>
              <div>
                  <img src="{{ asset('/images/BuildSystem/Home/005-cloud.png')}}" alt="">
                  <p>Cloud Based</p>
                  <p>Resources</p>
              </div>
              <div>
                 <img src="{{ asset('/images/BuildSystem/Home/003-firewall.png')}}" alt="">
                 <p>Firewall Gateway</p>
              </div>
              <div>
                <img src="{{ asset('/images/BuildSystem/Home/004-backup.png')}}" alt="">
                <p>Regular Data</p>
                <p>Backups</p>
              </div>
              <div>
                <img src="{{ asset('/images/BuildSystem/Home/unix.png')}}" alt="">
                <p>Unix Based</p>
                <p>Backups</p>
              </div>
              <div>
                <img src="{{ asset('/images/BuildSystem/Home/disaster recovery.png')}}" alt="">
                <p>Provision of Disaster</p>
                <p>Recovery</p>
              </div>
           </div>
       </div>
       <div class="lastSection">
           <div class="forQuote">
              <h3>Request for a Quote</h3>
              <div class="row first">
                 <div class="col-md-4">
                   <i class="far fa-user"></i>
                   <input type="text" placeholder="Name">
                 </div>
                 <div class="col-md-4">
                   <i class="fas fa-envelope-square"></i>
                   <input type="email" placeholder="Email Address">
                 </div>
                 <div class="col-md-4">
                   <i class="fas fa-phone"></i>
                   <input type="number" placeholder="Telephone">
                 </div>
              </div>

              <div class="row second sec">
                 <div class="col-md-4">
                   <i class="fas fa-pound-sign"></i>
                   <input type="text" placeholder="Your Budget">
                 </div>
                 <div class="col-md-4">
                   <i class="fas fa-location-arrow"></i>
                   <input type="email" placeholder="Country">
                 </div>
                 <div class="col-md-4">
                   <i class="fab fa-skype"></i>
                   <input type="number" placeholder="Skype ID/WatsApp No">
                 </div>
              </div>
                <i class="far fa-sticky-note" id="note"></i><br>
                <textarea placeholder="Send us a message"></textarea>
              <div class="forSubmitButton">
                   <button>SUBMIT A REQUEST <span><i class="fas fa-arrow-right"></i></span></button>
              </div>
           </div>
           <div class="row footer">
              <ul class="col-md-3 footerUl">
                <li>About Us</li>
                <li> >Client Testimony</li>
                <li> >Our Team</li>
                <li> >Jobs</li>
                <li> >Technology Partners</li>
                <li> >Certifications</li>
                <li> >Confidentiality</li>
                <li> >Contact Us</li>
              </ul>
              <ul class="col-md-3 footerUl">
                <li>Services</li>
                <li> >Mobile Apps</li>
                <li> >Software Solutions</li>
                <li> >Web and Ecommerce</li>
                <li> >Testing and QA</li>
                <li> >Real Time Solutions</li>
                <li> >Cloud</li>
                <li> >View All</li>
              </ul>
              <ul class="col-md-3 footerUl">
                <li>Technologies</li>
                <li> >Web</li>
                <li> >Framework</li>
                <li> >Mobile Apps</li>
                <li> >Platforms</li>
                <li> >Database</li>
              </ul>
              <ul class="col-md-3 footerUl">
                <li>Industries</li>
                <li> >Software & Technology</li>
                <li> >Retail & eCommerce</li>
                <li> >Logistic & Shipping</li>
                <li> >Travel & Hospitality</li>
                <li> >Health & LiveScience</li>
                <li> >View All</li>
              </ul>
              <ul class="col-md-3 footerUl">
                <li>Case Studies</li>
                <li> >eBook</li>
                <li> >Webinar</li>
                <li> >White Paper</li>
                <li> >Infographics</li>
                <li> >Tech Blog</li>
                <li> >Retails Blog</li>
                <li> >FAQs</li>
              </ul>
           </div>
           <div class="row Copyright">
              <div class="col-md-4">
                  <p>Copyright @ 2019 By BuildSystems</p>
              </div>
              <div class="col-md-4">
                 <p>Contact Us|Sitemap</p>
              </div>
              <div class="col-md-4">
                  <i class="fab fa-facebook-square"></i>
                  <i class="fab fa-linkedin"></i>
                  <i class="fab fa-slack-hash"></i>
              </div>
           </div>
       </div>
    </div>
     <script type="text/javascript">
         function showStack(param) {
             var elem = param.id;
             var element = document.getElementsByClassName(elem)[0];
             var visibility = element.style.display;
             if(visibility == "none" || visibility == "")
                 element.style.display = "block";
             if(visibility != "none")
                 element.style.display = "none";
         }

         function toggleHeader () {
            var elem = document.getElementsByClassName("items")[0];
            if(elem.style.display == "" || elem.style.display == "none"){
               elem.style.display = "block";
               return;
            }

            if(elem.style.display != "" || elem.style.display != "none"){
               elem.style.display = "none";
               return;
            }

         }
     </script>
  </body>
</html>
