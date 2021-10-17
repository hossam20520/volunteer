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
         
            <div class="container">
               
                <div class="signup-content">
                    @if(Session::has('message'))
                    <h2 class="form-title  {{ Session::get('alert-class') }}">{{ Session::get('message') }} 
                         @if(Session::get('alert-class') == "success-2020")
                        <a href="https://ercelearning.com/login/"> سجل الان</a>
                         @endif
                    
                    </h2> 
                    @endif
                      <form method="POST" id="signup-form"  action="{{ route('registerPostNot') }}" class="signup-form">
                        @csrf

                        <input type="hidden" class="form-input" value="{{ isset($_GET['checkout']) }}" name="checkout" required id="name"/>

                        <h2 class="form-title" style="text-decoration: underline;">انشاء حساب</h2>
                        <div class="form-group">
                            <span style="font-size: 13px;float: right;color: red;"> اسم المستخدم يجب ان يتكون من حروف صغيرة باللغة الانجليزية </span>
                        <input type="text" class="form-input" value="{{ $username }}" name="username" required id="name" placeholder="اسم المستخدم"/>
                        </div>

                        {{-- <div class="form-group">
                           
                        </div> --}}

                        <input type="hidden" class="form-input" value="fname" name="fname" required id="name" />

                        <div class="form-group">
                            <input type="text" class="form-input"  name="fullname" value="{{ $fullname }}"  id="name" placeholder="الاسم بالكامل "/>
                        </div>

                        <div class="form-group">
                          
                             <input type="number" class="form-input" value="{{ $idpassport }}"  name="idpassport" required id="name" placeholder="الرقم القومى أو رقم جواز السفر لغير المصريين"/>
                        </div>

                 


                        <div class="form-group">
                            <input type="hidden" class="form-input"   name="lname"  value="lname" required id="name" placeholder=""/>
                        </div>


                        <div class="form-group">
                           
                            <select class="form-input" value="{{ $gender }}"  required name="gender">
                                 <option>  النوع </option>
                                <option {{ $gender == "male" ? "selected":"" }} value="male"> ذكر </option>
                                <option {{ $gender == "female" ? "selected":"" }} value="female"> انثى </option>
                          
                        </select>
                        
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-input"  value="{{ $age }}"  required name="age" id="name" placeholder="السن"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $nationality }}"  required name="nationality" id="name" placeholder="الجنسية"/>
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
                            <input type="email" class="form-input"  value="{{ $email }}" name="email" id="email" required placeholder="البريد الالكتروني"/>
                        </div>

                          
                        <div class="form-group">
                            <input type="number" class="form-input"  value="{{ $phone }}" name="phone" required id="name" placeholder="رقم الهاتف المحمول"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $job }}" name="job" id="name"  placeholder="الوظيفة"/>
                        </div>
                     
                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $company }}" name="company" id="name"  placeholder="جهة العمل"/>
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $eq }}" name="eq" id="name" required placeholder="المؤهل الدراسي"/>
                        </div>
                
                        <div class="form-group">
                           
                          {{-- <input type="hidden" name="country" value="EGYPT"> --}}


                          <select class="form-input" value="{{ $country }}" name="country" id="id_country">
                            <option value="">Select a country...</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia (Plurinational State of)</option>
                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="CV">Cabo Verde</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo (the Democratic Republic of the)</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Côte d'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curaçao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czechia</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="SZ">Eswatini</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and McDonald Islands</option>
                            <option value="VA">Holy See</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran (Islamic Republic of)</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea (the Democratic People's Republic of)</option>
                            <option value="KR">Korea (the Republic of)</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia (Federated States of)</option>
                            <option value="MD">Moldova (the Republic of)</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MK">North Macedonia</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestine, State of</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Réunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthélemy</option>
                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="MF">Saint Martin (French part)</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten (Dutch part)</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, the United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela (Bolivarian Republic of)</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands (British)</option>
                            <option value="VI">Virgin Islands (U.S.)</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>



                        </div>

                       
                   

              


                        
                        <input type="hidden" class="form-input" value="ar" name="langa" id="name" />
            
                        <div class="form-group">
                            <span style="font-size: 13px;float: right;color: red;">   (يجب ألا تقل عن ٨ أحرف) (&*#!ّّ%^-؟\) يجب ان تحتوي كلمة السر على حروف كبيرة ورموز وارقام </span>
                            <input type="text" class="form-input" name="password" id="password"  required placeholder="كلمة السر"/>
                          
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>


                        <div class="form-group">
                            
                            <input type="text" class="form-input" name="confirm" id="passwordcon"  required placeholder="تأكيد كلمة السر"/>
                            <span toggle="#passwordcon" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            {{-- <label for="agree-term" class="label-agree-term"><span><span></span></span>انا موافق على الشروط  <a href="#" class="term-service">الشروط</a></label> --}}
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" style="background-image: linear-gradient(to left, #eb7474, #e69fde);" class="form-submit" value="تسجيل"/>
                            
                        </div>
                    </form>
                    <p class="loginhere">
                       هل لديك حساب ؟ <a href="https://ercelearning.com/login/" class="loginhere-link"> قم بتسجيل الدخول من هنا</a>
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