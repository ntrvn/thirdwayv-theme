@extends('layouts.app')

@section('content')

<section 
    class="single-case-studies-container" 
    style="
        background: url(<?php bloginfo('template_url') ?>/assets/images/careers-cover.svg);
        background-repeat: no-repeat;
        background-size: cover;
    ">
    <h2 class="single-case-header">What you can expect at Thirdwayv</h2>

    <div class="follow-container" style="top: 30vh">
        <div class="">
            <h5>FOLLOW US</h5>
        </div>
        <div class="icons">
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-messenger"></i>
            <i class="bi bi-linkedin"></i>        
        </div>
    </div>

    <div class="row arrows-container">
        <div class="col arrows">
            <img src="<?php bloginfo('template_url') ?>/assets/images/arrrow-down-group.svg" alt="" />
        </div>
        <div class="col arrows" style="visibility: hidden">
            <img src="<?php bloginfo('template_url') ?>/assets/images/arrow-up-group.svg" alt="" />
        </div>
    </div>
</section>

<section class="careers-screen-container">
    <h2 class="transparent-header" style="margin-top: 0">Careers</h2>

    <div class="careers-description">
        <p class="grey2">
            Whether you walk into our offices or join one of our remote project teams, you'll find two qualities that emerge across our workforce – curiosity and commitment. In fact, the instinct to question "what if?" and the desire to "make it so" has inspired a culture of:
        </p>
    </div>

    <div class="row careers-detail-container">
        <div class="col">
            <div class="career-detail-circle">
                <h5 class="blue">Collaboration</h5>
            </div>
            <div class="career-detail-text">
                <p class="grey2">
                    We believe that knowledge transfers up, down, and across roles and responsibilities. We all have something to learn from each other, and knowledge sharing drives our success.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="career-detail-circle">
                <h5 class="blue">Transparency</h5>
            </div>
            <div class="career-detail-text">
                <p class="grey2">
                    Our own connectivity as a team is dependent upon our openness with each other. None of us works in a vacuum. None of us succeeds alone.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="career-detail-circle">
                <h5 class="blue">Ideation</h5>
            </div>
            <div class="career-detail-text">
                <p class="grey2">
                    We work in an age of infinite possibilities – and of infinite threats to them. That's why we consider solutions from all angles, in a rigorous, iterative process
                </p>
            </div>
        </div>
        <div class="col">
            <div class="career-detail-circle">
                <h5 class="blue">Ownership</h5>
            </div>
            <div class="career-detail-text">
                <p class="grey2">
                    Each of us operates with our own degree of autonomy. None of us requires permission to excel. And pride of ownership abounds across all our disciplines.
                </p>
            </div>
        </div>
    </div>

    <div class="careers-benefit-summary">
        <h5 class="blue">Working with us has its benefits</h5>
        <p class="grey2">
            Thirdwayv promotes diversity, equal pay between genders, and an environment of inclusion and support. Because if we can't rally behind and trust in each other, how can our clients trust in us? We also offer:
        </p>
    </div>

    <div class="row careers-perks-container">
        <div class="col careers-panel">
            <div>
                <h5 class="grey2">
                    Full benefits
                </h5>
                <p class="grey2">
                    You'll be eligible for medical, dental, and vision through a leading healthcare provider.
                </p>
            </div>
        </div>
        <div class="col careers-panel">
            <div>
                <h5 class="grey2">
                    Mentorship
                </h5>
                <p class="grey2">
                    You'll identify your preferred career path and we'll help you reach your goals.
                </p>
            </div>
        </div>
        <div class="col careers-panel">
            <div>
                <h5 class="grey2">
                    Performance rewards
                </h5>
                <p class="grey2">
                    You'll be recognized for your value-adding achievements and reminded that you're valued too.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="careers-screen-container">
    <h2 class="transparent-header" style="margin-top: 0">Open Positions</h2>

    <div class="careers-description">
        <p class="grey2">
            Some would say that Thirdwayv’s hiring process is super selective.  We agree!  Unless candidates share our passions and have developed deep domain expertise in their work function, they will not be happy Thirdwayv employees.  With that in mind, we are looking for two categories of individuals: 
        </p>
    </div>

    <div class="careers-requirements row">
        <div class="col">
            <div>
                <h5 class="grey2">
                    Technical stars proficient in software (embedded, mobile & cloud applications, cloud infrastructure), hardware prototyping & wireless (BLE, NFC, WiFi, LTE-M1, NB-IOT, LORA, etc) product development.
                </h5>
            </div>
        </div>
        <div class="col">
            <div>
                <h5 class="grey2">
                    Business development experts with demonstrated proficiency in managing Internet of Things businesses in the Healthcare, Industrial Automation, Automotive and Cyber Security/Certificate Authority sectors.
                </h5>
            </div>
        </div>
    </div>

    <p class="grey2 careers-resume">Should you feel that you meet either of these two requirements, please send us your <strong>CV/resume</strong> to <span class="blue">info@thirdwayv.com.</span></p>
    <h5 class="grey2 careers-resume">We look forward to hearing from you!</h5>

</section>

@endsection