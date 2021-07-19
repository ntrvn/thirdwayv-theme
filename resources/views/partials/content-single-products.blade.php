<!doctype html>
<html {!! get_language_attributes() !!}>
    <body @php body_class() @endphp>
        <section class="single-products-container" style="background: url(<?php bloginfo('template_url') ?>/assets/images/products/product-cover-image.svg);">

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

            <!-- <div class="row arrows-container">
                <div class="col arrows">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/arrrow-down-group.svg" alt="" />
                </div>
                <div class="col arrows" style="visibility: hidden">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/arrow-up-group.svg" alt="" />
                </div>
            </div> -->
        </section>
        
        <section 
            class="single-products-detail-container" 
            style="
                background: url(<?php bloginfo('template_url') ?>/assets/images/products/{{get_field("background")}}.svg);
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    height: auto!important;
                    width: 100%;">
            <h1 class="transparent-header" style="margin-top: 10vh">{{get_field("title")}}</h1>
            <div class="single-product-description">
                {!! get_field("description") !!}
            </div>

            <div class="single-product-detail">
                <!-- {!! get_field("detail") !!} -->

<ul class="product-detail-container row">

    <li class="product-detail-item col-6">
        <div class="product-detail-item-right col-12">
            <div>
                <h4 class="blue">
                Generic Features
                </h4>
                <p class="grey2">
                AppAuth was built from the ground up with a “Security by Design” attitude for mission-critical IoT applications.
                </p>
                <p class="grey2" style="margin-bottom: 0">
                - Provides digital cryptographic identity to eachelement of the IoT system
                </p>
                <p class="grey2" style="margin-bottom: 0">
                - Protects the communication links in an IoT network as well as the environment surrounding link endpoints
                </p>
                <p class="grey2" style="margin-bottom: 0">
                - Product delivered as SDKs for the IoT Device, Smartphone and Cloud
                </p>
                <p class="grey2" style="margin-bottom: 0">
                - Works in conjunction with SecureConnectivity or in a standalone fashion
                </p>
                <p class="grey2" style="margin-bottom: 0">
                - Infinite customizations possible to meet specific customer needs
                </p>
            </div>
        </div>
    </li>

    <li class="product-detail-item col-6">
        <div class="product-detail-item-right col-12">
            <div>
                <h4 class=" blue">
                    Cloud
                </h4>
                <p class="grey2" style="margin-bottom: 0">
                    - Lifecycle Management ( new registration, revoking privileges, etc) of Devices & Phones in the IoT network
                </p>
                <p class="grey2" style="margin-bottom: 0">
                    - Helps each IoT element Attest the veracity of the other
                </p>
                <p class="grey2" style="margin-bottom: 0">
                    - Certificate issuance for all components of the IoT system
                </p>
                <p class="grey2" style="margin-bottom: 0">
                    - Offered either as On-premises or as a managed service
                </p>
                <p class="grey2" style="margin-bottom: 0">
                    - Multiple Cloud to Cloud APIs to leverage existing infrastructure
                </p>
            </div>
        </div>
    </li>




    <li class="product-detail-item col-6">
        <div class="product-detail-item-right col-12">
            <div>
                <h4 class=" blue">
                    IOT Device
                </h4>
                <p class="grey2" style="margin-bottom: 0">
                - Validates critical commands that the Device is asked to perform using remote attestation before command execution
                </p>
                <p class="grey2" style="margin-bottom: 0">
                - Device SDKs to support communication semiconductor offerings of multiple silicon partners and a variety of communication protocols
                </p>
            </div>
        </div>
    </li>

        <li class="product-detail-item col-6">
            <div class="product-detail-item-right col-12">
                <div>
                    <h4 class="blue">
                        Smartphone app
                    </h4>
                    <p class="grey2" style="margin-bottom: 0">
                        - Utilizes Hardware root of trust to continually monitor the Phone OS integrity and authenticity
                    </p>

                    <p class="grey2" style="margin-bottom: 0">
                        - Protects the Customer App from Phone OS vulnerabilities and malware attacks
                    </p>

                    <p class="grey2" style="margin-bottom: 0">
                        - Hardens the Customer App against reverse engineering and tampering threats
                    </p>

                    <p class="grey2" style="margin-bottom: 0">
                        - Communication protocol agnostic ( ie supports WiFi, BLE, NFC, LTE, NB-IoT, or anything supported by phone)
                    </p>

                    <p class="grey2" style="margin-bottom: 0">
                        - Enables User authentication by leveraging phone biometric (face or fingerprint) ID resources
                    </p>

                    <p class="grey2" style="margin-bottom: 0">
                        - Support for both Android and iOS
                    </p>
                </div>
            </div>
        </li>

    </ul>
                
</div>


            <div class="row security-panel-container" style="max-width: 99vw; margin: 0 auto; clear: both;">
                <div class="col product-panel col-active">
                    <h4>AppAuth™</h4>
                </div>
                <div class="col product-panel col-disabled">
                    <h4>SeamlessConnect™</h4>
                </div>
                <div class="col product-panel col-disabled">
                    <h4>SecureConnectivity™</h4>
                </div>
                <div class="col product-panel col-disabled">
                    <h4>RecordAuth™</h4>
                </div>
            </div>

            <div style="clear: both;"></div>

        </section>
    </body>
</html>