<div class="second-page">
    <h1 class="transparent-header">Why Thirdwayv?</h1>
    <div class="card transparent-card card-centered">
        <div class="card-body">
            @foreach ($get_intro as $key=>$post)
            <h3 class="card-title blue">{{$post->title}}</h3>
            <p class="card-text grey5">{{html_entity_decode($post->excerpt)}} </p>
            @endforeach        
        </div>
    </div>

    <h6 class="grey2 margin-header">HERE IS HOW WE DO IT</h6>

    <div class="row" id="card-list-items-container">
        <div class="col">
            <div class="card card-list-items card-active" style="width: 20rem;">
                <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/bw/first.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="card-icon-container">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/first.svg" class="card-list-items-icon">
                    </div>
                    <p class="card-text">End-to-end loT security, from the hardware up</p>
                    <hr class="card-list-items-hr"/>
                    <p class="small-text grey5">We look at   trusted   IoT   connectivity   from   an   end-to-end,   security-by-design perspective –and   from   the   hardware   up.   In   fact,   our   deep  expertise   at   the semiconductor and device level is one of the things that sets us apart: unlike others, we can ensure trust from the inside out, across the entire solutions lifecycle.</p>
                    <p class="small-text grey5">You  might  even  think  of  us  asthe  "nucleus  of  trust"  for  your  entire  service  or application.  That's  because  we  deliver  the  technologies  that  allow  all  the  devices, connections, and applications to "trust" each other before any IoT transaction occurs. All to safeguard you –and your customers –against breaches, tampering, and fraud</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-list-items card-disabled" style="width: 20rem;">
                <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/bw/second.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="card-icon-container">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/second.svg" class="card-list-items-icon">
                    </div>
                    <p class="card-text">Connecting and securing millions of devices</p>
                    <hr class="card-list-items-hr"/>
                    <p class="small-text grey5">We deploy applications ranging from consumer medical devices, to asset tracking, to the connected home, hospital, and car. That's a lot of territory covered, both in terms of  geography  and  functionality.  Proven.  Trusted.  Effective.These  applications  help enterprises like yours raise the bar on patient care and quality of life –and elevate the overall  customer  experience.  Like  we  did  for  them,  we  can  help  you  use  IoT connectivity to deliver on your all brand promises. If not far exceed them.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-list-items card-disabled" style="width: 20rem;">
                <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/bw/third.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="card-icon-container">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/third.svg" class="card-list-items-icon">
                    </div>
                    <p class="card-text">FDA clearancesreceived... enabling partners to meet FDA guidelines</p>
                    <hr class="card-list-items-hr"/>
                    <p class="small-text grey5">When  you're  on  the  forefront  of  technology,  there  are  few  standards  and  best practices already in place. But we're changing that. Our products enable partners to meet   FDA   cybersecurity   guidelines -justby   integrating   with   our   Software Development  Kits.    That  means  we're  creating  new  standards  for  applications  and providing hardware roots of trust for connected medical devices thus,  shortening the time it takes for you to bring those applications to market.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-list-items card-disabled" style="width: 20rem;">
                <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/bw/last.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="card-icon-container">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/last.svg" class="card-list-items-icon">
                    </div>
                    <p class="card-text">End-to-end loT security, from the hardware up</p>
                    <hr class="card-list-items-hr"/>
                    <p class="small-text grey5">Our  software-as  a  service  business  model  delivers  the  fastest  path  to  loT  application deployment. And that translates into the fastest returns on your technology investment.</p>
                    <p class="small-text grey5">Additionally, we can help you scale across multiple applications and quickly incorporate new capabilities. It's done by leveraging proven technology and security assurances that we've already implemented across the healthcare sector. Because if we can get it right in the most highly regulated and safety-critical environment, we can easily adapt what's in-place to yours.</p>
                </div>
            </div>          
        </div>
    </div>
</div>