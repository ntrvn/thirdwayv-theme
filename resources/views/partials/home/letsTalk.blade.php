<div class="wrapper">
    <section class="">
        {!! get_field("contact_title_and_description") !!}
    </section>

    <section class="lets-talk-form-wrapper">
        <h5 class="text-center" style="margin-bottom: 2vh">Tell us about yourself</h5>
        <form action="">
            <div class="row">
                <div class="col form-group">
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="col form-group">
                    <input type="text" class="form-control" placeholder="Last Name">
                </div>
            </div>
            <div class="row">
                <div class="col-8 form-group">
                    <input type="text" class="form-control" placeholder="Company">
                </div>
                <div class="col-4 form-group">
                    <input type="text" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="row">
                <div class="col-8 form-group">
                    <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="col-4 form-group">
                    <input type="text" class="form-control" placeholder="Country">
                </div>
            </div>
            <div class="row">
                <div class="col form-group">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Medical Devices</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col form-group">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Seamless Connectivity</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <p class="text-left grey5" style="margin-bottom: 0;">Tell us how we can help your enterprise</p>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-check" style="display: flex">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label grey5" for="defaultCheck1">
                            Yes, I'd like to receive news, updates and original content from Thirdwayv
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12" style="margin-top: 5vh">
                    <button type="button" class="btn btn-blue-thirdwayv btn-lg btn-block">Submit</button>
                </div>
            </div>
        </form>
    </section>

</div>