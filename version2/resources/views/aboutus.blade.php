<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BuildSystems</title>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
  <body>
     <div class="header">
         <ul>
           <li><img src="{{ asset('/images/BuildSystem/Home/logo.png')}}" alt=""></li>
           <li><a href="/">Home</a></li>
           <li id="aboutID"><a href="/aboutus">About Us
              <div class="forAbout">
                <ul class="about">
                  <li>About Us</li><br>
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
           <!-- <li><a href="/banner">banner</a></li> -->
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
      <div class="aboutPage">
          <div class="theAbout">
              <h3>About Us</h3>
              <p>Build System is a Nigeria/USA based ICT Company established to deliver superior and innovative HighTech solutions for both our Offshore and Domestic clients. We offer comprehensive process automation
for our corporate clients,
</p>
          </div>
          <img src="/images/BuildSystem/AboutUs/AboutImg.png" alt="">
      </div>
      <div class="remainingP">
         <p>
           SMEs and start-up businesses who are looking for simplified yet effective and
           innovative ways to run their daily operations.
           With our team of highly skilled developer and our strategy partners across the globe, we are determine
           to contribute our share of innovative technology towards the United Nation (UN) Sustainable
           Development Goals (SDGs) 2030 Agenda which recognizes the need to develop a knowledge-Base
           societies which frankly highlights the need for access to Information and Communication Technologies
           (ICTs) in different way to help resolve some of the social-economic challenges faced by different Nation
           with regards to Agriculture, Transportation, Healthcare, Qualitative Education, Affordable & Accessible
           Housing, etc.
           We are ready each day of the week, 24 hours day to partner with you on any project that requires our
           professional touch. Our support team is always online to 24/7 to attend to your request whenever the
           need arises. You can also request for a demo presentation on any of our software solution.
           With the renew commitment by many government both in Africa and other parts of the world to
           consolidate most of their operation with new technology to achieve a more efficient workforce and a
           better service delivery to its citizen, Build Systems intends to seek growth of its businesses by investing
           heavily in our Research & Development Department with focus on both existing and new ICT related
           product & services in a carefully measured way create more opportunity for expansion and market
           visibility.
           The company intends to deliver ICT solutions to 100, 000 users by the end of 2019 and another 100,000
           users by 2020. By providing these solution in both the Nigerian/USA market, we hope to generate saving
           of up to $500,000 per annum when these applications are in full scale. The company intends to also take
           advantage of the opportunities arising from the renew commitment by State and federal governments
           to integrate ICT solutions in their operations by developing strong enterprise applications that will
           reposition their present system to a more proficient structure. Our opportunity within the government
           lies in the departments that are grappling with budget constraints and at the same time in need of
           efficient services. We will deliver these services and give the agencies value for their money.
         </p>
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
