<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>
  
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('front/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

    <style> 


.danger-2020{
    background-color: red;
    color:white;
}

.success-2020{
    background-color: #2fce88;
    color:white;
}


    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
               
                <div class="signup-content">
                    @if(Session::has('message'))
                    <h2 class="form-title  {{ Session::get('alert-class') }}">{{ Session::get('message') }} 
                         @if(Session::get('alert-class') == "success-2020")
                    <a href="https://ercelearning.com/login/"> Login Now</a>
                         @endif
                    
                    </h2> 
                    @endif
                    <form method="POST" id="signup-form"  action="{{ route('registerPost') }}" class="signup-form">
                        @csrf
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <span> Username Must be one word </span>
                        <input type="text" class="form-input" value="{{ $username }}" name="username" id="name" placeholder="username"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" value="{{ $firstname }}" name="fname" id="name" placeholder="First Name"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $lastname }}" name="lname" id="name" placeholder="last Name"/>
                        </div>


                  


                        <div class="form-group">
                            <input type="number" class="form-input"  value="{{ $lastname }}" name="Your phone" id="name" placeholder="Phone"/>
                        </div>


                        <div class="form-group">
                            <input type="number" class="form-input"  value="{{ $lastname }}" name="age" id="name" placeholder="Age"/>
                        </div>

                        <div class="form-group">
                            
                            <select class="form-input" value="{{ $branch }}"  name="branch">
                                <option>Select branch</option>
                              <option value="فرع مدينة نصر ">فرع مدينة نصر </option>
                              <option value="فرع زينهم">فرع زينهم</option>
                              <option value="فرع الجيزة">فرع الجيزة</option>
                              <option value="فرع القليوبية ">فرع القليوبية </option>
                              <option value="فرع شمال سيناء ">فرع شمال سيناء </option>
                              <option value="فرع جنوب سيناء">فرع جنوب سيناء </option>
                              <option value="فرع البحر الاحمر ">فرع البحر الاحمر </option>
                              <option value="فرع الاسكندرية">فرع الاسكندرية</option>
                              <option value="فرع مرسى مطروح">فرع مرسى مطروح</option>
                              <option value="فرع بور سعيد">فرع بور سعيد</option>
                              <option value="فرع السويس">فرع السويس </option>
                              <option value="فرع الشرقية">فرع الشرقية</option>
                              <option value="فرع دمياط">فرع دمياط</option>
                              <option value="فرع الدقهلية">فرع الدقهلية</option>
                              <option value="فرع كفر الشيخ">فرع كفر الشيخ</option>
                              <option value="فرع الغربية">فرع الغربية</option>
                              <option value="فرع المنوفية">فرع المنوفية</option>
                              <option value="فرع البحيرة">فرع البحيرة</option>
                              <option value="فرع الفيوم">فرع الفيوم </option>
                              <option value="فرع بنى سويف ">فرع بنى سويف </option>
                              <option value="فرع المنيا">فرع المنيا</option>
                              <option value="فرع اسيوط">فرع اسيوط </option>
                              <option value="فرع سوهاج">فرع سوهاج</option>
                              <option value="فرع الاقصر">فرع الاقصر</option>
                              <option value="فرع اسوان">فرع اسوان</option>
                              <option value="فرع الوادى الجديد">فرع الوادى الجديد</option>
                              <option value="فرع قنا ">فرع قنا </option>


                            </select>

                            
                          </div>
 
                          <div class="form-group">  
                              
                            <select class="form-input" value="{{ $city }}" required  name="city">
                                <option> المحافظة </option>
                                <option {{ $city == "Alexandria" ? "selected":"" }} value="Alexandria">الإسكندرية</option>
                                <option {{ $city == "Ismailia" ? "selected":"" }} value="Ismailia">الإسماعيلية</option>
                                <option {{ $city == "Aswan" ? "selected":"" }} value="Aswan">أسوان</option>
                                <option {{ $city == "Asyut" ? "selected":"" }} value="Asyut">أسيوط</option>
                                <option {{ $city == "Luxor" ? "selected":"" }} value="Luxor">الاقصر</option>
                                <option {{ $city == "Red_Sea" ? "selected":"" }} value="Red_Sea">البحر الاحمر</option>
                                <option {{ $city == "El_Beheira" ? "selected":"" }} value="El_Beheira">البحيرة</option>
                                <option {{ $city == "Bani Suwayf" ? "selected":"" }} value="Bani Suwayf">بني السويف</option>
                                <option {{ $city == "Port Said" ? "selected":"" }} value="Port Said">بورسعيد</option>
                                <option {{ $city == "South Sinai" ? "selected":"" }} value="South Sinai">جنوب سيناء</option>
                                <option {{ $city == "Giza" ? "selected":"" }} value="Giza">الجيزة</option>
                                <option {{ $city == "Dakahlia" ? "selected":"" }} value="Dakahlia">الدقهلية</option>
                                <option {{ $city == "Damietta" ? "selected":"" }} value="Damietta">دمياط</option>
                                <option {{ $city == "Suhaj" ? "selected":"" }} value="Suhaj">سوهاج</option>
                                <option {{ $city == "Suez" ? "selected":"" }} value="Suez">السويس</option>
                                <option {{ $city == "Ash Sharqia" ? "selected":"" }} value="Ash Sharqia">الشرقية</option>
                                <option {{ $city == "North Sinai" ? "selected":"" }} value="North Sinai">شمال سيناء</option>
                                <option {{ $city == "Gharbia" ? "selected":"" }} value="Gharbia">الغربية</option>
                                <option {{ $city == "Al Fayyum" ? "selected":"" }} value="Al Fayyum">ألفيوم</option>
                                <option {{ $city == "Cairo" ? "selected":"" }} value="Cairo">القاهرة</option>
                                <option {{ $city == "Al Qalyubia" ? "selected":"" }} value="Al Qalyubia">القليوبية</option>
                                <option {{ $city == "Qena" ? "selected":"" }} value="Qena">قنا</option>
                                <option {{ $city == "Kafr ash Shaykh" ? "selected":"" }} value="Kafr ash Shaykh">كفر الشيخ</option>
                                <option {{ $city == "Marsa Matruh" ? "selected":"" }} value="Marsa Matruh">مرسى مطروح</option>
                                <option {{ $city == "Menofia" ? "selected":"" }} value="Menofia">المنوفية</option>
                                <option {{ $city == "Al Minya" ? "selected":"" }} value="Al Minya">المنيا</option>
                                <option {{ $city == "New Valley" ? "selected":"" }} value="New Valley">الوادي الجديد</option>
                                
                            </select>
                        
                        </div>
                
                        <div class="form-group">
                         
                            <select class="form-input" value="{{ $country }}" id="country" name="country">
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote DIvoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="India">India</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                             </select>

                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input"  value="{{ $email }}" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $lastname }}" name="mid" id="name" placeholder="Membership ID"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $ID }}" name="ID" id="email" placeholder="National ID / Passport Number"/>
                        </div>

                        <div class="form-group">
                            <span> The password must contain capital letters, symbols and numbers</span>
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-input" name="confirm" id="passwordcon" placeholder="Confirm password"/>
                            <span toggle="#passwordcon" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            {{-- <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label> --}}
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="https://ercelearning.com/login/" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>
</body><
</html>