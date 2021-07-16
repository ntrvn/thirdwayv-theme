<div class="leaders-page" style="clear: both;">
    <div style="margin-top: 48px;">
        <img src="<?php bloginfo('template_url') ?>/assets/images/leaders/leaders-icon.svg" alt="">
        <div class="card transparent-card card-centered card-large">
            <div class="card-body">
                {!! get_field("meet_our_leaders_title") !!} 
            </div>
        </div>
    </div>

    <div class="row leaders-card-container">
        <div class="col leaders-card-items">
            <div class="card transparent-card">
                <div class="card-body">
                    {!! get_field("ceo_title_and_name") !!}
                        <div class="leaders-active">
                            <div class="row">
                                <div class="col">
                                    <button class="btn leaders-btn">know more</button>
                                    <img src="https://www.thirdwayv.com/wp-content/uploads/2021/07/third-page-arrow-down.svg" alt="" class="leader-arrows">
                                </div>
                                <div class="col" style="text-align: right;">
                                    <img src="https://www.thirdwayv.com/wp-content/uploads/2021/07/leaders-linkedIn.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row leaders-know-more" style="">
                            {!! get_field("ceo_description") !!}
                        </div>
                </div>
            </div>
        </div>

        <div class="col leaders-card-items">
            <div class="card transparent-card">
                <div class="card-body">
                    {!! get_field("cto_title_name") !!}
                    <div class="leaders-disabled">
                        <div class="row">
                            <div class="col">
                                <button class="btn leaders-btn">know more</button>
                                <img src="https://www.thirdwayv.com/wp-content/uploads/2021/07/third-page-arrow-down.svg" alt="">
                            </div>
                            <div class="col" style="text-align: right;">
                                <img src="https://www.thirdwayv.com/wp-content/uploads/2021/07/leaders-linkedIn.svg" alt="">
                            </div>
                        </div>
                        <div class="row leaders-know-more" style="padding: 0 15px;">
                            {!! get_field("cto_description") !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col leaders-card-items">
            <div class="card transparent-card">
                <div class="card-body">
                    {!! get_field("vp-biz-dev-title") !!}
                    <div class="leaders-disabled">
                        <div class="row">
                            <div class="col">
                                <button class="btn leaders-btn">know more</button>
                                <img src="https://www.thirdwayv.com/wp-content/uploads/2021/07/third-page-arrow-down.svg" alt="">
                            </div>
                            <div class="col" style="text-align: right;">
                                <img src="https://www.thirdwayv.com/wp-content/uploads/2021/07/leaders-linkedIn.svg" alt="">
                            </div>
                        </div>
                        <div class="row leaders-know-more" style="padding: 0 15px;">
                            {!! get_field("vp_business_development_description") !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col leaders-card-items">
            <div class="card transparent-card">
                <div class="card-body">
                    {!! get_field("vp_engineering_title_and_name") !!}
                    <div class="leaders-disabled">
                        <div class="row">
                            <div class="col">
                                <button class="btn leaders-btn">know more</button>
                                <img src="https://www.thirdwayv.com/wp-content/uploads/2021/07/third-page-arrow-down.svg" alt="">
                            </div>
                            <div class="col" style="text-align: right;">
                                <img src="https://www.thirdwayv.com/wp-content/uploads/2021/07/leaders-linkedIn.svg" alt="">
                            </div>
                        </div>
                        <div class="row leaders-know-more" style="padding: 0 15px;">
                            {!! get_field("vp_engineering_description") !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>