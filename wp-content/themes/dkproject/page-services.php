<?php
/*
Template Name: Services Page
*/
?>
<?php get_header(); ?>

 <div class="breadcrumb-image" style="background-image: url(<?php the_field('breadcrumb_image'); ?>)">
   <?php if( get_field('breadcrumb_image') ): ?>
      <div class="breadrumb-heading">
        <h1><?php the_field('breadcrumb_title'); ?></h1>
      </div>
      <?php endif; ?>
    </div>
    <div class="navigation-breadcrumb">
      <div class="container">
        <div class="breadcrumb">
          <a href="<?php echo get_home_url(); ?>">HOME</a>
          <span>/</span>
          <a href="#" class="active">services</a>
        </div>
      </div>
    </div>
    <div class="details-container service-page">
      <div class="container">
        <div class="main-heading">Services we offer</div>
        <div class="row">
          <div class="col-md-6">
            <div class="service-image">
              <img src="<?php echo get_template_directory_uri().'/assets/images/service-image-1.png'; ?>" class="service-page">
            </div>
          </div>
          <div class="col-md-6">
            <div class="description-content service-page">
              <div class="service-page-heading">ABOUT US</div>
              <div class="service-page-subheading">If your vehicle has clocked 10,000km, you know your logbook service has become due and it’s about time you book one now! A logbook service is the standard examination of your vehicle that determines your vehicle’s health in-depth. It is primarily a service that goes through the vehicle’s safety checks, replacement & repairs and, also takes safety measurements. The name is logbook service as all the procedures mentioned in the manufacturer’s car logbook are closely monitored.</div>
              <div class="service-page-subheading"> If your logbook is up-to-date, that means you have taken care of your vehicle efficiently and everything is in perfect order.</div>
              <div class="service-page-subheading">At DK Projects, our team of expert logbook service mechanics will ensure your service is completed efficiently and everything is as per the manufacturer’s stated standard. If you are ready to book your next logbook vehicle service with us, contact us now!</div>
              <div class="button-global my-b">
                <a href="#" class="global-button pl-55">
                  <span>CONTACT US</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="details-container service-page black">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="description-content service-page">
              <div class="service-page-heading">MAJOR REPAIRS/ OVERHAUL</div>
              <div class="service-page-subheading-white">A well-maintained vehicle ensures your and your family’s safety on the road. Hence, it carries utmost importance and should always be looked upon vigilantly. It is very vital to your safety because repairs can nip all the potential car problems in the bud. As we know you don’t want your vehicle to break down in the middle of nowhere, right? Hence, regular servicing to mend major repairs and overhauls is certainly not to be overlooked.</div>
              <div class="service-page-subheading-white"> At DK Projects, we use state-of-the-art equipment and methodology to keep your vehicle in its best condition and ensure it stays your loyal partner for years to come. From brakes to suspension to major repairs, our skilled technicians can do it all.</div>
              <div class="description white">
                <h3 class="service-page-subheading-white">Our Services include:</h3>
                <ul>
                  <li>Your one-stop destination for car repairs and maintenance services.When it comes to cars, we can do it all.</li>
                  <li>Reliable and trust-worthy services</li>
                  <li>Services are done at your chosen time and date, always as per your </li>
                  <li>convenience</li>
                  <li>All our top-quality services come at pocket-friendly, reasonable prices.</li>
                  <li>On-time completion of the services</li>
                </ul>
              </div>
              <div class="service-page-subheading-white"> If you are ready to make a booking now, contact us at your convenience!</div>
              <div class="button-global my-b">
                <a href="#" class="global-button pl-55">
                  <span>CONTACT US</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-image">
              <img src="<?php echo get_template_directory_uri().'/assets/images/service-image-1.png'; ?>" class="service-page-black">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="details-container service-page">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="service-image">
              <img src="<?php echo get_template_directory_uri().'/assets/images/service-image-1.png'; ?>" class="service-page">
            </div>
          </div>
          <div class="col-md-6">
            <div class="description-content service-page">
              <div class="service-page-heading">DIAGNOSTICS</div>
              <div class="service-page-subheading">A timely diagnosis of your motor vehicle carries immense importance. As a medical check-up is done to ensure you are healthy inside, a car diagnosis is done for your vehicle to ensure everything is in order and thus the safety, security, and peaceful running of your vehicle can be ensured. A current and on-time diagnosis of the vehicle determines any underlying causes and provides helpful insights on repairs and maintenance of your vehicle.</div>
              <div class="service-page-subheading">Our workshop at DK Projects efficiently inspects, diagnose and makes repairs if any at a competitive and cost-effective price. We are fully equipped with the latest technologies and tools that allow our technicians to carry out an effective and accurate diagnosis of your vehicle.</div>
              <div class="service-page-subheading">  Hence, if you want to speak with our skilled mechanics about the correct diagnosis of your motor vehicle, please contact us now today!</div>
              <div class="button-global my-b">
                <a href="#" class="global-button pl-55">
                  <span>CONTACT US</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="details-container service-page black">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="description-content service-page">
              <div class="service-page-heading">WELDING TIG/MIG</div>
              <div class="service-page-subheading-white">MIG (Metal Insert Gas) and TIG (Tungsten Metal Gas) are the two most common types of welding methods found in the auto industry. Both the techniques have their pros and cons. Like when you use the MIG method, the pros are it’s a one-handed operation where you just have to point and shoot to get the work done whereas in TIG you require both hand movements, and there is no splatter which means you can weld inside a vehicle without covering/ stripping the interiors. </div>
              <div class="service-page-subheading-white">We are a team of professional welders and are qualified to do any type of welding no matter the design or size you require. Our work showcases extreme precision that is free of any splatter or sparks. We work with a mission to ensure every client gets smooth and seamless metal works services at affordable rates. Schedule an appointment with us now!</div>
             
              <div class="button-global my-b">
                <a href="#" class="global-button pl-55">
                  <span>CONTACT US</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-image">
              <img src="<?php echo get_template_directory_uri().'/assets/images/service-image-1.png'; ?>" class="service-page-black">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="details-container service-page">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="service-image">
              <img src="<?php echo get_template_directory_uri().'/assets/images/service-image-1.png'; ?>" class="service-page">
            </div>
          </div>
          <div class="col-md-6">
            <div class="description-content service-page">
              <div class="service-page-heading">FABRICATION</div>
              <div class="service-page-subheading">When you are in the business of repairing motor vehicles, you work hard to ensure more and more customers come to your garage with their motor needs and requirements. Every client today needs all services under one umbrella and hence you have to keep up with it to deliver maximum output. Metal fabrication is one such way as by excelling in it your business will be able to repair and replace rare auto parts. </div>
              <div class="service-page-subheading">Our team at DK Projects have done all the hard work to deliver quality fabrication services to our clients. By incorporating various techniques such as bending, machining, welding, etc, we can create a final product for your vehicle. We design, create and install the parts all by ourselves to serve our customers in the best way possible. We also offer services like custom-made car body parts, bumper and trim fabrication and more. We are a team of skilled labour that know the intricacies of installing the right product using innovative tools and methods. Contact us today to book our services at pocket-friendly rates.</div>
               
              <div class="button-global my-b">
                <a href="#" class="global-button pl-55">
                  <span>CONTACT US</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="details-container service-page black">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="description-content service-page">
              <div class="service-page-heading">MAJOR REPAIRS/ OVERHAUL</div>
              <div class="service-page-subheading-white">The exhaust system of your motor vehicle is its lungs which are responsible for efficient fuel consumption and CO2 emissions. Hence, it is mandatory to ensure the quality and condition of the exhaust remains in top-notch condition. it also affects the sound of the car while running.</div>
              <div class="service-page-subheading-white"> Therefore, if you feel your car performance has dropped or there is a change in the noise levels, it is best advised to contact a team of professionals like us at DK Projects. We will fully inspect the vehicle to better understand the concern to advise an effective plan of action.</div>
              <div class="description white">
                <h3 class="service-page-subheading-white">There are several warning signs associated with a faulty exhaust system of your vehicle, so if you spot even one, drop your car for repairs:</h3>
                <ul>
                  <li>As explained above, your car is noisier than before</li>
                  <li>There is an unusual smell coming from the exhaust</li>
                  <li>You can smell fumes in the car</li>
                  <li>convenience</li>
                  <li>There is visible rust on the exhaust pipe</li>
                  <li>There is a drop in your car’s mileage.</li>
                </ul>
              </div>
              <div class="service-page-subheading-white">Our representatives are always ready to help you. So just call us to get answers to your concerns.</div>
              <div class="button-global my-b">
                <a href="#" class="global-button pl-55">
                  <span>CONTACT US</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-image">
              <img src="<?php echo get_template_directory_uri().'/assets/images/service-image-1.png'; ?>" class="service-page-black">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="details-container service-page">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="service-image">
              <img src="<?php echo get_template_directory_uri().'/assets/images/service-image-1.png'; ?>" class="service-page">
            </div>
          </div>
          <div class="col-md-6">
            <div class="description-content service-page">
              <div class="service-page-heading">TURBO AND PERFORMANCE</div>
              <div class="service-page-subheading">Turbo engines are gaining more and more popularity now. It gives the benefit of fuel economy without compromising the performance of the vehicle. For example, a regular car with 2000 cc will have the same performance and power as that of a vehicle with 1500 cc and turbo power. It helps the car in making more power thereby enhancing the driving experience as well.</div>
              <div class="service-page-subheading">Just certain maintenance tips are to be followed to ensure a healthy up-keep of a turbo vehicle like using the right type of fuel, timely cleaning of air filters, changing engine oil regularly, and more.</div>
              <div class="service-page-subheading">When you schedule a service with us, we will take care of all the above-mentioned factors to keep your turbo vehicle shipshape. Contact today.</div>
              <div class="button-global my-b">
                <a href="#" class="global-button pl-55">
                  <span>CONTACT US</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="details-container service-page black">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="description-content service-page">
              <div class="service-page-heading">CLASSIC CAR REPAIRS</div>
              <div class="service-page-subheading-white">The general rule of thumb when it comes to classic car repairs requires the vehicles to be serviced every 6 months or after 10,000 km, whichever is earlier. A deep analysis of your vehicle ensures its reliability and safety, and hence we do a deep inspection of the vehicle to look for potential hidden faults if any. If any abnormal damage or fault is ascertained during the inspection, rest assured you will not just be informed but will also be assisted with the best possible solution for the problem.</div>
              <div class="service-page-subheading-white">From brakes to engine management check-ups, DK Projects have got you covered. We will also inspect clutch, gearbox, cooling system repairs, exhaust, electronic fuel injection, and more. Just call us to get a general overview of your vehicle performance. Get peace of mind while running on the roads. Call us to schedule an appointment today!</div>
              
              <div class="button-global my-b">
                <a href="#" class="global-button pl-55">
                  <span>CONTACT US</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-image">
              <img src="<?php echo get_template_directory_uri().'/assets/images/service-image-1.png'; ?>" class="service-page-black">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="details-container service-page">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="service-image">
              <img src="<?php echo get_template_directory_uri().'/assets/images/service-image-1.png'; ?>" class="service-page">
            </div>
          </div>
          <div class="col-md-6">
            <div class="description-content service-page">
              <div class="service-page-heading">SPECIALISING IN CARBURETTORS</div>
              <div class="service-page-subheading">If we go by the literal definition, a carburettor is a device that is responsible for mixing fuel and air to create an air combustion engine. Like all other major parts, it also requires repairs, reconditioning, and tuning from time to time.</div>
              <div class="service-page-subheading">Our team at DK Projects specialise in all types of services that relate to repairs and tuning of carburettors in the system. We can fix many types of carburettors including Solex, Zenith, Demon, Weber, and more.</div>
              <div class="service-page-subheading">Contact us today to get in touch with the most respected and qualified team of carburettor specialists in Australia. Our team is well known for the knowledge it possesses, they have extensive experience, tools and technology to conduct a quality service for your vehicle. Call us today to book our services.</div>
              <div class="button-global my-b">
                <a href="#" class="global-button pl-55">
                  <span>CONTACT US</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="faq-section">
      <div class="container">
        <div class="row db">
          <div class="faq-heading">
            <p>FREQUENTLY ASKED <span>QUESTIONS</span>
            </p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-10 custom-w">
            <div class="wrapper">
              <?php 
                  if ( get_field('frequently_asked_questions','option')){ 
                  while (has_sub_field('frequently_asked_questions','option')){
                ?>
                   
                
              <div class="container faq">
                <div class="question"><?php the_sub_field('question','option'); ?></div>
                <div class="answercont">
                  <div class="answer">
                   <?php the_sub_field('answer','option'); ?>
                  </div>
                </div>
              </div>
              <?php } } ?>
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>
      </div>
    </div>
   <?php get_footer(); ?>
