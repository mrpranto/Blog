@extends("frontend.master")

@section("title","Contact Us")

@section("content")



    <div class="row">


        <div class="col-xs-12 col-sm-6 p-3">
            <div class="col-xs-12 col-sm-12 py-2 border">
                <h2>My Location</h2>
                <hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10326.817439535795!2d90.35128688402101!3d23.780118390011463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0be89363e87%3A0x3795036c15355c82!2sKallyanpur%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1531841434133" width="100%" height="450" frameborder="0" style="border:0"></iframe>


            </div>
        </div>
        <div class="col-xs-12 col-sm-6 p-3">
            <div class="col-xs-12 col-sm-12 py-2 border">
                <h2>Contact form</h2>
                <hr>
                <form class="form-horizontal" action="" method="post">
                    <fieldset>
                        <!-- Name input-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                            </div>
                        </div>

                        <!-- Message body -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea class="form-control" id="message" name="Message" placeholder="Massage" rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary btn-md"> <i class="fa fa-paper-plane"></i>  Send</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>






@endsection