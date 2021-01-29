@extends('layouts.app')

@section('content')
<div class="container text-white py-5">
    <h1 class="text-center pb-5 text-uppercase text-primary text-underline">Contact</h1>
    <div class="box_term">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <form id="contact-form" method="post" action="" role="form">
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"><label for="form_name">Firstname *</label> <input id="form_name"
                                        type="text" name="name" placeholder="Please enter your firstname *"
                                        required="required" data-error="Firstname is required." class="form-control"
                                        style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label for="form_lastname">Lastname *</label> <input
                                        id="form_lastname" type="text" name="surname"
                                        placeholder="Please enter your lastname *" required="required"
                                        data-error="Lastname is required." class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"><label for="form_email">Email *</label> <input id="form_email"
                                        type="email" name="email" placeholder="Please enter your email *"
                                        required="required" data-error="Valid email is required." class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label for="form_phone">Phone</label> <input id="form_phone"
                                        type="tel" name="phone" placeholder="Please enter your phone"
                                        class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group"><label for="form_message">Message *</label> <textarea
                                        id="form_message" name="message" placeholder="Message for me *" rows="4"
                                        required="required" data-error="Please,leave us a message."
                                        class="form-control"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12"><input type="submit" value="Send message"
                                    class="btn btn-success btn-send"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-3">
                <ul class="list-unstyled">
                    {{-- <li><a href="tel:+840339466132" class="text-warning"><i
                                    class="fa fa-fw fa-lg fa-phone text-danger"></i>
                                +84 033 946 6132</a></li> --}}
                    <li><a href="mail:support@igames789.com" class="text-warning"><i
                                class="fa fa-fw fa-lg fa-envelope text-info"></i>
                            info@inet789.com</a></li>
                    <li><a href="http://www.igames789.com" class="text-warning"><i
                                class="fa fa-fw fa-lg fa-globe text-warning"></i>
                            http://inet789.com/</a></li>
                    <li><a href="http://www.igames789.com" class="text-warning"><i class="fab fa-whatsapp text-success"
                                style="font-size: 1.33333em;"></i>
                            +855 88 789 1777</a></li>
                    <li><a href="http://www.igames789.com" class="text-warning"><i class="fab fa-skype text-primary "
                                style="font-size: 1.33333em;"></i>+885 096 789 1777</a></li>

                </ul> <img src="http://igames789.com/images/qrcode.png" style="width: 147px; height: auto;">
            </div>
            <div class="col-md-3"><img src="http://igames789.com/images/contact.jpeg"
                    style="width: auto; height: 308px;">
            </div>
        </div>
    </div>
</div>
@endsection