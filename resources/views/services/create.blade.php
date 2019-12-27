@extends('layouts.master')
@push('style')

    @endpush
<style>

</style>
@section('content')
    <!-- header end -->
    <div class="breadcrumb-area pt-205 pb-210" style="background-image: {{url('assets/img/bg/create_service.jpg')}}">
        <div class="container">
{{--            <div class="breadcrumb-content text-center">--}}
{{--                <h2>register</h2>--}}
{{--                <ul>--}}
{{--                    <li><a href="#">home</a></li>--}}
{{--                    <li> register </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="container title">
        <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
            <h1 class="cart-heading" style="padding-top: 30pt">New Service</h1>
            <label for="">Fill in the form below to add a new service</label>
        </div>
    </div>
    <!-- register-area start -->
    <div class="register-area ptb-30">
        <div class="container-fluid">
            <div class="">
                <div class="col-lg-4 col-lg-4 col-lg-4 col-xl-6 ml-auto mr-auto">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="login-form">
                                <form action="{{route('service.create')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name of the Service</label>
                                        <input type="text" name="name" placeholder="Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="service_description">Description of Service</label>
                                        <textarea name="service_description" id="" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="service_location">Available Location of Service</label>
                                        <select name="location" id="service_location" class="mdb-select md-form colorful-select dropdown-primary">
                                            <option value="" disabled selected>Choose service location</option>
                                            <option value="Greater Accra">Greater Accra</option>
                                            <option value="Cape Coast">Cape Coast</option>
                                            <option value="Sekondi">Sekondi</option>
                                            <option value="Sunyani">Sunyani</option>
                                            <option value="Kumasi">Kumasi</option>
                                            <option value="Koforidua">Koforidua</option>
                                            <option value="Ho">Ho</option>
                                            <option value="Nalerigu">Nalerigu</option>
                                            <option value="Bolgatanga">Bolgatanga</option>
                                            <option value="Damango">Damango</option>
                                            <option value="Sefwi Wiawso">Sefwi Wiawso</option>
                                            <option value="Goaso">Goaso</option>
                                            <option value="Techiman">Techiman</option>
                                            <option value="Dambai">Dambai</option>
                                            <option value="Tamale">Tamale</option>
                                            <option value="Wa">Wa</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input name="phone" placeholder="Phone" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_service">What category does this service fall into</label>
                                        <select name="category_id" id="category_service" class="mdb-select md-form colorful-select dropdown-primary" required>
                                            <option value="" disabled selected>Choose service category</option>
                                            <option value="1">Agriculture</option>
                                            <option value="2">Education</option>
                                            <option value="3">Engineering</option>
                                            <option value="4">IT</option>
                                            <option value="5">Media</option>
                                            <option value="6">Events</option>
                                            <option value="7">Sports</option>
                                            <option value="8">Security</option>
                                            <option value="9">Finance</option>
                                            <option value="10">Health</option>
                                            <option value="11">Housing</option>
                                            <option value="12">Artisanry</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Service Email</label>
                                        <input name="email" placeholder="Email" type="email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Average Price for Service</label>
                                        <input name="price" placeholder="Price" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="experience">How many years has this service existed</label>
                                        <select name="experience" id="experience" class="mdb-select md-form colorful-select dropdown-primary">
                                            <option value="" disabled selected>How long this service has been active</option>
                                            <option value="Under 1">0 - 1 year</option>
                                            <option value="1 to 5">1 - 5 years</option>
                                            <option value="Above 5">5+ years</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_of_clients">How many clients have u served</label>
                                        <select name="no_of_clients" id="no_of_clients" class="mdb-select md-form colorful-select dropdown-primary">
                                            <option value="" disabled selected>No. of clients</option>
                                            <option value="0">No client</option>
                                            <option value="5+">5+</option>
                                            <option value="50+">50+</option>
                                            <option value="1000+">1000+</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="business">Is this service a registered business?</label>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="yes_check" value="yes" onclick="check_business()">
                                            <label for="yes_check">Yes</label>
                                            <input type="checkbox" class="form-check-input" id="no_check" value="no" onclick="check_business()">
                                            <label for="no_check">No</label>
                                        </div>
                                    </div>

                                    <div id="business">
                                        <div class="form-group">
                                            <label for="business_name">Name of Business</label>
                                            <input type="text" placeholder="Bunsiness Name" name="business_name" id="business_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="business_description">Describe your Business</label>
                                            <textarea name="business_description" id="business_description" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="tin_no">Tin Number of business</label>
                                            <input type="text"placeholder="Tin number" name="tin_no" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="business_website">Website for business</label>
                                            <input type="text" name="website" id="business_website" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-control-file">
                                        <label for="service_picture">Choose Image to identify this service</label>
                                        <input type="file" name="photo" id="service_picture">
                                        <small class="text-muted"> Required dimension are <em>400x400</em></small>
                                    </div>
                                    <div class="form-group ptb-30" >
                                        <label for="social_media">Social media details</label>
                                        <div class="inline">
{{--                                            <label for="whatsapp">Whatsapp Number</label>--}}
                                            <input type="text" name="whatsapp" id="whatsapp" placeholder="Whatsapp no.">
{{--                                            <label for="facebook">Facebook Username</label>--}}
                                            <input type="text" id="facebook" placeholder="Facebook username" name="facebook">
                                        </div>
                                        <div class="inline">
{{--                                            <label for="instagram">Instagram handle</label>--}}
                                            <input type="text" name="instagram" id="instagram" placeholder="Instagram handle">
{{--                                            <label for="twitter">Twitter handle</label>--}}
                                            <input type="text" name="twitter" id="twitter" placeholder="Twitter handle">
                                        </div>
                                    </div>

                                    <div class="button-box ptb-20">
                                        <button type="submit" class="default-btn float-right">Add Service</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- register-area end -->

@endsection()

    <script>
        window.onload = function () {
            document.getElementById('business').style.display = 'none'
        };
        function check_business(){
            if(document.getElementById('yes_check').checked){
                document.getElementById('business').style.display = 'block'
            }
            else if (document.getElementById('yes_check').checked){
                document.getElementById('business').style.display = 'none'
            }
        }
    </script>

