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
                        <a href="https://ercelearning.com/login/"> سجل الان</a>
                         @endif
                    
                    </h2> 
                    @endif
                    <form method="POST" id="signup-form"  action="{{ route('registerPost') }}" class="signup-form">
                        @csrf
                        <h2 class="form-title" style="text-decoration: underline;">انشاء حساب</h2>
                        <div class="form-group">
                            <span style="font-size: 13px;float: right;color: red;"> اسم المستخدم يجب ان يتكون من حروف صغيرة باللغة الانجليزية </span>
                        <input type="text" class="form-input" value="{{ $username }}" name="username" required id="name" placeholder="اسم المستخدم"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" value="{{ $firstname }}" name="fname" required id="name" placeholder="الاسم الاول"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $lastname }}" name="lname" required id="name" placeholder="الاسم الاخير"/>
                        </div>


                  


                        <div class="form-group">
                            <input type="number" class="form-input"  value="{{ $phone }}" name="phone" required id="name" placeholder="رقم الموبايل"/>
                        </div>


                        <div class="form-group">
                            <input type="number" class="form-input"  value="{{ $age }}"  required name="age" id="name" placeholder="السن"/>
                        </div>

                        <div class="form-group">
                           
                            <select class="form-input" value="{{ $gender }}"  required name="gender">
                                 <option> اختر النوع </option>
                                <option {{ $gender == "male" ? "selected":"" }} value="male"> ذكر </option>
                                <option {{ $gender == "female" ? "selected":"" }} value="female"> انثى </option>
                          
                        </select>
                        
                        </div>

                        <div class="form-group">
                           
                        
                             <select class="form-input" value="{{ $branch }}"  required name="branch">
                            
                              <option selected disabled>اختر الفرع</option>
                              <option {{ $branch == "Nasr City" ? "selected":"" }} value="Nasr City">فرع مدينة نصر</option>
                              <option {{ $branch == "Zeinhom" ? "selected":"" }} value="Zeinhom">فرع زينهم</option>
                              <option {{ $branch == "Giza" ? "selected":"" }} value="Giza">فرع الجيزة</option>
                              <option {{ $branch == "Qalyoubeya" ? "selected":"" }}  value="Qalyoubeya">فرع القليوبية </option>
                              <option {{ $branch == "North Sinai" ? "selected":"" }} value="North Sinai">فرع شمال سيناء </option>
                              <option {{ $branch == "South Sinai" ? "selected":"" }} value="South Sinai">فرع جنوب سيناء </option>
                              <option {{ $branch == "Red Sea" ? "selected":"" }} value="Red Sea">فرع البحر الاحمر </option>
                              <option {{ $branch == "Alexandria" ? "selected":"" }} value="Alexandria">فرع الاسكندرية</option>
                              <option {{ $branch == "Matrouh" ? "selected":"" }} value="Matrouh">فرع مرسى مطروح</option>
                              <option {{ $branch == "Port Said" ? "selected":"" }} value="Port Said">فرع بور سعيد</option>
                              <option {{ $branch == "Ismailia" ? "selected":"" }} value="Ismailia">فرع الاسماعلية </option>
                              <option {{ $branch == "Suez" ? "selected":"" }} value="Suez">فرع السويس </option>
                              <option {{ $branch == "Sharkeya" ? "selected":"" }} value="Sharkeya">فرع الشرقية</option>
                              <option {{ $branch == "Damietta" ? "selected":"" }} value="Damietta">فرع دمياط</option>
                              <option {{ $branch == "Dakahleya" ? "selected":"" }} value="Dakahleya">فرع الدقهلية</option>
                              <option {{ $branch == "Kafr El Sheikh" ? "selected":"" }}  value="Kafr El Sheikh">فرع كفر الشيخ</option>
                              <option {{ $branch == "Gharbeya" ? "selected":"" }} value="Gharbeya">فرع الغربية</option>
                              <option {{ $branch == "Menoufeya" ? "selected":"" }} value="Menoufeya">فرع المنوفية</option>
                              <option {{ $branch == "Beheira" ? "selected":"" }}  value="Beheira">فرع البحيرة</option>
                              <option {{ $branch == "Fayoum" ? "selected":"" }} value="Fayoum">فرع الفيوم </option>
                              <option {{ $branch == "Beni Suef" ? "selected":"" }} value="Beni Suef">فرع بنى سويف </option>
                              <option {{ $branch == "Minya" ? "selected":"" }} value="Minya">فرع المنيا</option>
                              <option {{ $branch == "Assiut" ? "selected":"" }} value="Assiut">فرع اسيوط </option>
                              <option {{ $branch == "Sohag" ? "selected":"" }} value="Sohag">فرع سوهاج</option>
                              <option {{ $branch == "Luxor" ? "selected":"" }} value="Luxor">فرع الاقصر</option>
                              <option {{ $branch == "Aswan" ? "selected":"" }} value="Aswan">فرع اسوان</option>
                              <option {{ $branch == "New Valley" ? "selected":"" }}  value="New Valley">فرع الوادى الجديد</option>
                              <option {{ $branch == "Qena" ? "selected":"" }} value="Qena">فرع قنا </option>
                            
                            </select>
                

                            
                          </div>

                
                        <div class="form-group">
                           
                            <div class="form-group">
                                <select class="form-input" value="{{ $country }}" name="country" id="id_country">
                                <option value="">Select a country...</option>
                                <option value="AF">افغانستان</option>
                                <option value="AX">جزر آلاند</option>
                                <option value="AL">البانيا</option>
                                <option value="DZ">الجزائر</option>
                                <option value="AS">ساموا الأمريكية</option>
                                <option value="AD">أندورا</option>
                                <option value="AO">أنغولا</option>
                                <option value="AI">أنغيلا</option>
                                <option value="AQ">أنتاركتيكا</option>
                                <option value="AG">أنتيغوا وبربودا</option>
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

                            {{-- <select class="form-input" value="{{ $country }}" id="country" required name="country">

                                <option disabled selected>اختر الدولة</option>
                              

                                <option {{ $country == "Afghanistan" ? "selected":"" }} value="Afganistan">افغانستان</option>
                                <option {{ $country == "Albania" ? "selected":"" }} value="Albania">ألبانيا</option>
                                <option {{ $country == "Algeria" ? "selected":"" }} value="Algeria">الجزائر</option>
                                <option {{ $country == "American Samoa" ? "selected":"" }} value="American Samoa">ساموا الأمريكية</option>
                                <option {{ $country == "Andorra" ? "selected":"" }} value="Andorra">أندورا</option>
                                <option {{ $country == "Angola" ? "selected":"" }} value="Angola">أنغولا</option>
                                <option {{ $country == "Anguilla" ? "selected":"" }} value="Anguilla">أنغيلا</option>
                                <option {{ $country == "Antigua & Barbuda" ? "selected":"" }} value="Antigua & Barbuda">أنتيغوا وبربودا.</option>
                                <option {{ $country == "Argentina" ? "selected":"" }} value="Argentina">الأرجنتين</option>
                                <option {{ $country == "Armenia" ? "selected":"" }} value="Armenia">أرمينيا</option>
                                <option {{ $country == "Aruba" ? "selected":"" }} value="Aruba">أروبا</option>
                                <option {{ $country == "Australia" ? "selected":"" }} value="Australia">أستراليا</option>
                                <option {{ $country == "Austria" ? "selected":"" }} value="Austria">النمسا</option>
                                <option {{ $country == "Azerbaijan" ? "selected":"" }} value="Azerbaijan">أذربيجان</option>
                                <option {{ $country == "Bahamas" ? "selected":"" }} value="Bahamas">جزر البهاما</option>
                                <option {{ $country == "Bahrain" ? "selected":"" }} value="Bahrain">البحرين</option>
                                <option {{ $country == "Bangladesh" ? "selected":"" }} value="Bangladesh">بنغلاديش</option>
                                <option {{ $country == "Barbados" ? "selected":"" }} value="Barbados">بربادوس</option>
                                <option {{ $country == "Belarus" ? "selected":"" }} value="Belarus">بيلاروسيا</option>
                                <option {{ $country == "Belgium" ? "selected":"" }} value="Belgium">بلجيكا</option>
                                <option {{ $country == "Belize" ? "selected":"" }} value="Belize">بليز</option>
                                <option {{ $country == "Benin" ? "selected":"" }} value="Benin">بنين</option>
                                <option {{ $country == "Bermuda" ? "selected":"" }} value="Bermuda">برمودا</option>
                                <option {{ $country == "Bhutan" ? "selected":"" }} value="Bhutan">بوتان</option>
                                <option {{ $country == "Bolivia" ? "selected":"" }} value="Bolivia">بوليفيا</option>
                                <option {{ $country == "Bonaire" ? "selected":"" }} value="Bonaire">بونير</option>
                                <option {{ $country == "Bosnia & Herzegovina" ? "selected":"" }} value="Bosnia & Herzegovina">البوسنة والهرسك</option>
                                <option {{ $country == "Botswana" ? "selected":"" }} value="Botswana">بوتسوانا</option>
                                <option {{ $country == "Brazil" ? "selected":"" }} value="Brazil">البرازيل</option>
                                <option {{ $country == "British Indian Ocean Ter" ? "selected":"" }} value="British Indian Ocean Ter">البريطانية الهندية المحيط</option>
                                <option {{ $country == "Brunei" ? "selected":"" }} value="Brunei">بروناي</option>
                                <option {{ $country == "Bulgaria" ? "selected":"" }} value="Bulgaria">بلغاريا</option>
                                <option {{ $country == "Burkina Faso" ? "selected":"" }} value="Burkina Faso">بوركينا فاسو</option>
                                <option {{ $country == "Burundi" ? "selected":"" }} value="Burundi">بوروندي</option>
                                <option {{ $country == "Cambodia" ? "selected":"" }} value="Cambodia">كمبوديا</option>
                                <option {{ $country == "Cameroon" ? "selected":"" }} value="Cameroon">الكاميرون</option>
                                <option {{ $country == "Canada" ? "selected":"" }} value="Canada">كندا</option>
                                <option {{ $country == "Canary Islands" ? "selected":"" }} value="Canary Islands">جزر الكناري</option>
                                <option {{ $country == "Cape Verde" ? "selected":"" }} value="Cape Verde">الرأس الأخضر</option>
                                <option {{ $country == "Cayman Islands" ? "selected":"" }} value="Cayman Islands">جزر كايمان</option>
                                <option {{ $country == "Central African Republic" ? "selected":"" }} value="Central African Republic">جمهورية افريقيا الوسطى</option>
                                <option {{ $country == "Chad" ? "selected":"" }} value="Chad">تشاد</option>
                                <option {{ $country == "Channel Islands" ? "selected":"" }} value="Channel Islands">جزر القناة</option>
                                <option {{ $country == "Chile" ? "selected":"" }} value="Chile">شيلي</option>
                                <option {{ $country == "China" ? "selected":"" }} value="China">الصين</option>
                                <option {{ $country == "Christmas Island" ? "selected":"" }} value="Christmas Island">جزيرة الكريسماس</option>
                                <option {{ $country == "Cocos Island" ? "selected":"" }} value="Cocos Island">جزيرة كوكوس</option>
                                <option {{ $country == "Colombia" ? "selected":"" }} value="Colombia">كولومبيا</option>
                                <option {{ $country == "Comoros" ? "selected":"" }} value="Comoros">جزر القمر</option>
                                <option {{ $country == "Congo" ? "selected":"" }} value="Congo">كونغو</option>
                                <option {{ $country == "Cook Islands" ? "selected":"" }} value="Cook Islands">جزر كوك</option>
                                <option {{ $country == "Costa Rica" ? "selected":"" }} value="Costa Rica">كوستا ريكا</option>
                                <option {{ $country == "Cote DIvoire" ? "selected":"" }} value="Cote DIvoire">ساحل العاج</option>
                                <option {{ $country == "Croatia" ? "selected":"" }} value="Croatia">كرواتيا</option>
                                <option {{ $country == "Cuba" ? "selected":"" }} value="Cuba">كوبا</option>
                                <option {{ $country == "Curacao" ? "selected":"" }} value="Curaco">Curacao</option>
                                <option {{ $country == "Cyprus" ? "selected":"" }} value="Cyprus">قبرص</option>
                                <option {{ $country == "Czech Republic" ? "selected":"" }} value="Czech Republic">الجمهورية التشيكية</option>
                                <option {{ $country == "Denmark" ? "selected":"" }} value="Denmark">الدنمارك</option>
                                <option {{ $country == "Djibouti" ? "selected":"" }} value="Djibouti">جيبوتي</option>
                                <option {{ $country == "Dominica" ? "selected":"" }} value="Dominica">دومينيكا</option>
                                <option {{ $country == "Dominican Republic" ? "selected":"" }} value="Dominican Republic">جمهورية الدومينيكان</option>
                                <option {{ $country == "East Timor" ? "selected":"" }} value="East Timor">تيمور الشرقية</option>
                                <option {{ $country == "Ecuador" ? "selected":"" }} value="Ecuador">الإكوادور</option>
                                <option {{ $country == "Egypt" ? "selected":"" }} value="Egypt">مصر</option>
                                <option {{ $country == "El Salvador" ? "selected":"" }} value="El Salvador">المنقذ</option>
                                <option {{ $country == "Equatorial Guinea" ? "selected":"" }} value="Equatorial Guinea">غينيا الإستوائية</option>
                                <option {{ $country == "Eritrea" ? "selected":"" }} value="Eritrea">إريتريا</option>
                                <option {{ $country == "Estonia" ? "selected":"" }} value="Estonia">إستونيا</option>
                                <option {{ $country == "Ethiopia" ? "selected":"" }} value="Ethiopia">أثيوبيا</option>
                                <option {{ $country == "Falkland Islands" ? "selected":"" }} value="Falkland Islands">جزر فوكلاند</option>
                                <option {{ $country == "Faroe Islands" ? "selected":"" }} value="Faroe Islands">جزر فاروس</option>
                                <option {{ $country == "Fiji" ? "selected":"" }} value="Fiji">فيجي</option>
                                <option {{ $country == "Finland" ? "selected":"" }} value="Finland">فنلندا</option>
                                <option {{ $country == "France" ? "selected":"" }} value="France">فرنسا</option>
                                <option {{ $country == "French Guiana" ? "selected":"" }} value="French Guiana">غيانا الفرنسية</option>
                                <option {{ $country == "French Polynesia" ? "selected":"" }} value="French Polynesia">بولينيزيا الفرنسية</option>
                                <option {{ $country == "French Southern Ter" ? "selected":"" }} value="French Southern Ter">الطبق الجنوبي الفرنسي</option>
                                <option {{ $country == "Gabon" ? "selected":"" }} value="Gabon">غابون</option>
                                <option {{ $country == "Gambia" ? "selected":"" }} value="Gambia">غامبيا</option>
                                <option {{ $country == "Georgia" ? "selected":"" }} value="Georgia">جورجيا</option>
                                <option {{ $country == "Germany" ? "selected":"" }} value="Germany">ألمانيا</option>
                                <option {{ $country == "Ghana" ? "selected":"" }} value="Ghana">غانا</option>
                                <option {{ $country == "Gibraltar" ? "selected":"" }} value="Gibraltar">جبل طارق</option>
                                <option {{ $country == "Great Britain" ? "selected":"" }} value="Great Britain">بريطانيا العظمى</option>
                                <option {{ $country == "Greece" ? "selected":"" }} value="Greece">اليونان</option>
                                <option {{ $country == "Greenland" ? "selected":"" }} value="Greenland">الأرض الخضراء</option>
                                <option {{ $country == "Grenada" ? "selected":"" }} value="Grenada">غرينادا</option>
                                <option {{ $country == "Guadeloupe" ? "selected":"" }} value="Guadeloupe">غواديلوب</option>
                                <option {{ $country == "Guam" ? "selected":"" }} value="Guam">غوام</option>
                                <option {{ $country == "Guatemala" ? "selected":"" }} value="Guatemala">غواتيمالا</option>
                                <option {{ $country == "Guinea" ? "selected":"" }} value="Guinea">غينيا</option>
                                <option {{ $country == "Guyana" ? "selected":"" }} value="Guyana">غيانا</option>
                                <option {{ $country == "Haiti" ? "selected":"" }} value="Haiti">هايتي</option>
                                <option {{ $country == "Hawaii" ? "selected":"" }} value="Hawaii">هاواي</option>
                                <option {{ $country == "Honduras" ? "selected":"" }} value="Honduras">هندوراس</option>
                                <option {{ $country == "Hong Kong" ? "selected":"" }} value="Hong Kong">هونج كونج</option>
                                <option {{ $country == "Hungary" ? "selected":"" }} value="Hungary">هنغاريا</option>
                                <option {{ $country == "Iceland" ? "selected":"" }} value="Iceland">أيسلندا</option>
                                <option {{ $country == "Indonesia" ? "selected":"" }} value="Indonesia">إندونيسيا</option>
                                <option {{ $country == "India" ? "selected":"" }} value="India">الهند</option>
                                <option {{ $country == "Iran" ? "selected":"" }} value="Iran">إيران</option>
                                <option {{ $country == "Iraq" ? "selected":"" }} value="Iraq">العراق</option>
                                <option {{ $country == "Ireland" ? "selected":"" }} value="Ireland">أيرلندا</option>
                                <option {{ $country == "Isle of Man" ? "selected":"" }} value="Isle of Man">جزيرة آيل أوف مان</option>
                                <option {{ $country == "Israel" ? "selected":"" }} value="Israel">إسرائيل</option>
                                <option {{ $country == "Italy" ? "selected":"" }} value="Italy">إيطاليا</option>
                                <option {{ $country == "Jamaica" ? "selected":"" }} value="Jamaica">جامايكا</option>
                                <option {{ $country == "Japan" ? "selected":"" }} value="Japan">اليابان</option>
                                <option {{ $country == "Jordan" ? "selected":"" }} value="Jordan">الأردن</option>
                                <option {{ $country == "Kazakhstan" ? "selected":"" }} value="Kazakhstan">كازاخستان</option>
                                <option {{ $country == "Kenya" ? "selected":"" }} value="Kenya">كينيا</option>
                                <option {{ $country == "Kiribati" ? "selected":"" }} value="Kiribati">كيريباتي</option>
                                <option {{ $country == "Korea North" ? "selected":"" }} value="Korea North">كوريا الشمالية</option>
                                <option {{ $country == "Korea South" ? "selected":"" }} value="Korea Sout">Korea South</option>
                                <option {{ $country == "Kuwait" ? "selected":"" }} value="Kuwait">الكويت</option>
                                <option {{ $country == "Kyrgyzstan" ? "selected":"" }} value="Kyrgyzstan">قيرغيزستان</option>
                                <option {{ $country == "Laos" ? "selected":"" }} value="Laos">لاوس</option>
                                <option {{ $country == "Latvia" ? "selected":"" }} value="Latvia">لاتفيا</option>
                                <option {{ $country == "Lebanon" ? "selected":"" }} value="Lebanon">لبنان</option>
                                <option {{ $country == "Lesotho" ? "selected":"" }} value="Lesotho">ليسوتو</option>
                                <option {{ $country == "Liberia" ? "selected":"" }} value="Liberia">ليبيريا</option>
                                <option {{ $country == "Libya" ? "selected":"" }} value="Libya">ليبيا</option>
                                <option {{ $country == "Liechtenstein" ? "selected":"" }} value="Liechtenstein">ليختنشتاين</option>
                                <option {{ $country == "Lithuania" ? "selected":"" }} value="Lithuania">ليتوانيا</option>
                                <option {{ $country == "Luxembourg" ? "selected":"" }} value="Luxembourg">لوكسمبورغ</option>
                                <option {{ $country == "Macau" ? "selected":"" }} value="Macau">ماكاو</option>
                                <option {{ $country == "Macedonia" ? "selected":"" }} value="Macedonia">مقدونيا</option>
                                <option {{ $country == "Madagascar" ? "selected":"" }} value="Madagascar">مدغشقر</option>
                                <option {{ $country == "Malaysia" ? "selected":"" }} value="Malaysia">ماليزيا</option>
                                <option {{ $country == "Malawi" ? "selected":"" }} value="Malawi">ملاوي</option>
                                <option {{ $country == "Maldives" ? "selected":"" }} value="Maldives">جزر المالديف</option>
                                <option {{ $country == "Mali" ? "selected":"" }} value="Mali">مالي</option>
                                <option {{ $country == "Malta" ? "selected":"" }} value="Malta">مالطا</option>
                                <option {{ $country == "Marshall Islands" ? "selected":"" }} value="Marshall Islands">جزر مارشال</option>
                                <option {{ $country == "Martinique" ? "selected":"" }} value="Martinique">مارتينيك</option>
                                <option {{ $country == "Mauritania" ? "selected":"" }} value="Mauritania">موريتانيا</option>
                                <option {{ $country == "Mauritius" ? "selected":"" }} value="Mauritius">موريشيوس</option>
                                <option {{ $country == "Mayotte" ? "selected":"" }} value="Mayotte">ضائع</option>
                                <option {{ $country == "Mexico" ? "selected":"" }} value="Mexico">المكسيك</option>
                                <option {{ $country == "Midway Islands" ? "selected":"" }} value="Midway Islands">جزر ميدواي</option>
                                <option {{ $country == "Moldova" ? "selected":"" }} value="Moldova">مولدافيا</option>
                                <option {{ $country == "Monaco" ? "selected":"" }} value="Monaco">موناكو</option>
                                <option {{ $country == "Mongolia" ? "selected":"" }} value="Mongolia">منغوليا</option>
                                <option {{ $country == "Montserrat" ? "selected":"" }} value="Montserrat">مونتسيرات</option>
                                <option {{ $country == "Morocco" ? "selected":"" }} value="Morocco">المغرب</option>
                                <option {{ $country == "Mozambique" ? "selected":"" }} value="Mozambique">موزمبيق</option>
                                <option {{ $country == "Myanmar" ? "selected":"" }} value="Myanmar">ميانمار</option>
                                <option {{ $country == "Nambia" ? "selected":"" }} value="Nambia">نامبيا</option>
                                <option {{ $country == "Nauru" ? "selected":"" }} value="Nauru">ناورو</option>
                                <option {{ $country == "Nepal" ? "selected":"" }} value="Nepal">نيبال</option>
                                <option {{ $country == "Netherland Antilles" ? "selected":"" }} value="Netherland Antilles">جزر الأنتيل الهولندية</option>
                                <option {{ $country == "Netherlands (Holland, Europe)" ? "selected":"" }} value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option {{ $country == "Nevis" ? "selected":"" }} value="Nevis">نيفيس</option>
                                <option {{ $country == "New Caledonia" ? "selected":"" }} value="New Caledonia">كاليدونيا الجديدة</option>
                                <option {{ $country == "New Zealand" ? "selected":"" }} value="New Zealand">نيوزيلاندا</option>
                                <option {{ $country == "Nicaragua" ? "selected":"" }} value="Nicaragua">نيكاراغوا</option>
                                <option {{ $country == "Niger" ? "selected":"" }} value="Niger">النيجر</option>
                                <option {{ $country == "Nigeria" ? "selected":"" }} value="Nigeria">نيجيريا</option>
                                <option {{ $country == "Niue" ? "selected":"" }} value="Niue">niue.</option>
                                <option {{ $country == "Norfolk Island" ? "selected":"" }} value="Norfolk Island">جزيرة نورفولك</option>
                                <option {{ $country == "Norway" ? "selected":"" }} value="Norway">النرويج</option>
                                <option {{ $country == "Oman" ? "selected":"" }} value="Oman">سلطنة عمان</option>
                                <option {{ $country == "Pakistan" ? "selected":"" }} value="Pakistan">باكستان</option>
                                <option {{ $country == "Palau Island" ? "selected":"" }} value="Palau Island">جزيرة بالاو</option>
                                <option {{ $country == "Palestine" ? "selected":"" }} value="Palestine">فلسطين</option>
                                <option {{ $country == "Panama" ? "selected":"" }} value="Panama">بنما</option>
                                <option {{ $country == "Papua New Guinea" ? "selected":"" }} value="Papua New Guinea">بابوا غينيا الجديدة</option>
                                <option {{ $country == "Paraguay" ? "selected":"" }} value="Paraguay">باراجواي</option>
                                <option {{ $country == "Peru" ? "selected":"" }} value="Peru">بيرو</option>
                                <option {{ $country == "Philippines" ? "selected":"" }} value="Phillipines">Philippines</option>
                                <option {{ $country == "Pitcairn Island" ? "selected":"" }} value="Pitcairn Island">جزيرة بيتكيرن</option>
                                <option {{ $country == "Poland" ? "selected":"" }} value="Poland">بولندا</option>
                                <option {{ $country == "Portugal" ? "selected":"" }} value="Portugal">البرتغال</option>
                                <option {{ $country == "Puerto Rico" ? "selected":"" }} value="Puerto Rico">بويرتو ريكو</option>
                                <option {{ $country == "Qatar" ? "selected":"" }} value="Qatar">دولة قطر</option>
                                <option {{ $country == "Republic of Montenegro" ? "selected":"" }} value="Republic of Montenegro">جمهورية الجبل الأسود</option>
                                <option {{ $country == "Republic of Serbia" ? "selected":"" }} value="Republic of Serbia">جمهورية صربيا</option>
                                <option {{ $country == "Reunion" ? "selected":"" }} value="Reunion">جمع شمل</option>
                                <option {{ $country == "Romania" ? "selected":"" }} value="Romania">رومانيا</option>
                                <option {{ $country == "Russia" ? "selected":"" }} value="Russia">روسيا</option>
                                <option {{ $country == "Rwanda" ? "selected":"" }} value="Rwanda">رواندا</option>
                                <option {{ $country == "St Barthelemy" ? "selected":"" }} value="St Barthelemy">سانت بارتيليمي</option>
                                <option {{ $country == "St Eustatius" ? "selected":"" }} value="St Eustatius">سانت اوستاتيوس</option>
                                <option {{ $country == "St Helena" ? "selected":"" }} value="St Helena">سانت هيلانة</option>
                                <option {{ $country == "St Kitts-Nevis" ? "selected":"" }} value="St Kitts-Nevis">سانت كيتس نيفيس</option>
                                <option {{ $country == "St Lucia" ? "selected":"" }} value="St Lucia">شارع لوسيا</option>
                                <option {{ $country == "St Maarten" ? "selected":"" }} value="St Maarten">سانت مارتن</option>
                                <option {{ $country == "St Pierre & Miquelon" ? "selected":"" }} value="St Pierre & Miquelon">سانت بيير وميكلون</option>
                                <option {{ $country == "St Vincent & Grenadines" ? "selected":"" }} value="St Vincent & Grenadines">سانت فنسنت وجزر غرينادين</option>
                                <option {{ $country == "Saipan" ? "selected":"" }} value="Saipan">قصة طويلة</option>
                                <option {{ $country == "Samoa" ? "selected":"" }} value="Samoa">ساموا</option>
                                <option {{ $country == "Samoa American" ? "selected":"" }} value="Samoa American">ساموا الأمريكية</option>
                                <option {{ $country == "San Marino" ? "selected":"" }} value="San Marino">سان مارينو</option>
                                <option {{ $country == "Sao Tome & Principe" ? "selected":"" }} value="Sao Tome & Principe">ساو تومي وبرينسيبي</option>
                                <option {{ $country == "Saudi Arabia" ? "selected":"" }} value="Saudi Arabia">المملكة العربية السعودية</option>
                                <option {{ $country == "Senegal" ? "selected":"" }} value="Senegal">السنغال</option>
                                <option {{ $country == "Seychelles" ? "selected":"" }} value="Seychelles">سيشيل</option>
                                <option {{ $country == "Sierra Leone" ? "selected":"" }} value="Sierra Leone">سيرا ليون.</option>
                                <option {{ $country == "Singapore" ? "selected":"" }} value="Singapore">سنغافورة</option>
                                <option {{ $country == "Slovakia" ? "selected":"" }} value="Slovakia">سلوفاكيا</option>
                                <option {{ $country == "Slovenia" ? "selected":"" }} value="Slovenia">سلوفينيا</option>
                                <option {{ $country == "Solomon Islands" ? "selected":"" }} value="Solomon Islands">جزر سليمان</option>
                                <option {{ $country == "Somalia" ? "selected":"" }} value="Somalia">الصومال</option>
                                <option {{ $country == "South Africa" ? "selected":"" }} value="South Africa">جنوب أفريقيا</option>
                                <option {{ $country == "Spain" ? "selected":"" }} value="Spain">إسبانيا</option>
                                <option {{ $country == "Sri Lanka" ? "selected":"" }} value="Sri Lanka">سيريلانكا</option>
                                <option {{ $country == "Sudan" ? "selected":"" }} value="Sudan">السودان</option>
                                <option {{ $country == "Suriname" ? "selected":"" }} value="Suriname">سورينام</option>
                                <option {{ $country == "Swaziland" ? "selected":"" }} value="Swaziland">سوازيلاند</option>
                                <option {{ $country == "Sweden" ? "selected":"" }} value="Sweden">السويد</option>
                                <option {{ $country == "Switzerland" ? "selected":"" }} value="Switzerland">سويسرا</option>
                                <option {{ $country == "Syria" ? "selected":"" }} value="Syria">سوريا</option>
                                <option {{ $country == "Tahiti" ? "selected":"" }} value="Tahiti">تاهيتي</option>
                                <option {{ $country == "Taiwan" ? "selected":"" }} value="Taiwan">تايوان</option>
                                <option {{ $country == "Tajikistan" ? "selected":"" }} value="Tajikistan">طاجيكستان</option>
                                <option {{ $country == "Tanzania" ? "selected":"" }} value="Tanzania">تنزانيا</option>
                                <option {{ $country == "Thailand" ? "selected":"" }} value="Thailand">تايلاند</option>
                                <option {{ $country == "Togo" ? "selected":"" }} value="Togo">توجو</option>
                                <option {{ $country == "Tokelau" ? "selected":"" }} value="Tokelau">Tokelau.</option>
                                <option {{ $country == "Tonga" ? "selected":"" }} value="Tonga">تونغا</option>
                                <option {{ $country == "Trinidad & Tobago" ? "selected":"" }} value="Trinidad & Tobago">ترينيداد وتوباجو.</option>
                                <option {{ $country == "Tunisia" ? "selected":"" }} value="Tunisia">تونس</option>
                                <option {{ $country == "Turkey" ? "selected":"" }} value="Turkey">ديك رومى</option>
                                <option {{ $country == "Turkmenistan" ? "selected":"" }} value="Turkmenistan">تركمانستان</option>
                                <option {{ $country == "Turks & Caicos Is" ? "selected":"" }} value="Turks & Caicos Is">تركس وكايكوس</option>
                                <option {{ $country == "Tuvalu" ? "selected":"" }} value="Tuvalu">توفالو</option>
                                <option {{ $country == "Uganda" ? "selected":"" }} value="Uganda">أوغندا</option>
                                <option {{ $country == "United Kingdom" ? "selected":"" }} value="United Kingdom">المملكة المتحدة</option>
                                <option {{ $country == "Ukraine" ? "selected":"" }} value="Ukraine">أوكرانيا</option>
                                <option {{ $country == "United Arab Emirates" ? "selected":"" }} value="United Arab Erimates">United Arab Emirates</option>
                                <option {{ $country == "United States of America" ? "selected":"" }} value="United States of America">الولايات المتحدة الامريكية</option>
                                <option {{ $country == "Uruguay" ? "selected":"" }} value="Uraguay">Uruguay</option>
                                <option {{ $country == "Uzbekistan" ? "selected":"" }} value="Uzbekistan">أوزبكستان</option>
                                <option {{ $country == "Vanuatu" ? "selected":"" }} value="Vanuatu">فانواتو</option>
                                <option {{ $country == "Vatican City State" ? "selected":"" }} value="Vatican City State">دولة الفاتيكان</option>
                                <option {{ $country == "Venezuela" ? "selected":"" }} value="Venezuela">فنزويلا</option>
                                <option {{ $country == "Vietnam" ? "selected":"" }} value="Vietnam">فيتنام</option>
                                <option {{ $country == "Virgin Islands (Brit)" ? "selected":"" }} value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option {{ $country == "Virgin Islands (USA)" ? "selected":"" }} value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option {{ $country == "Wake Island" ? "selected":"" }} value="Wake Island">ويك آيلاند</option>
                                <option {{ $country == "Wallis & Futana Is" ? "selected":"" }} value="Wallis & Futana Is">Wallis & Futana هو</option>
                                <option {{ $country == "Yemen" ? "selected":"" }} value="Yemen">اليمن</option>
                                <option {{ $country == "Zaire" ? "selected":"" }} value="Zaire">زائير</option>
                                <option {{ $country == "Zambia" ? "selected":"" }} value="Zambia">زامبيا</option>
                                <option {{ $country == "Zimbabwe" ? "selected":"" }} value="Zimbabwe">زيمبابوي</option>
                                </select> --}}



                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input"  value="{{ $email }}" name="email" id="email" required placeholder="البريد الالكتروني"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $mid }}" name="mid" id="name" required placeholder="رقم العضوية "/>
                        </div>
                        
                        
                        <div class="form-group">
                            <span style="font-size: 13px;float: right;color: red;"> رقم جواز السفر لغير المصريين </span>
                            <input type="text" class="form-input"  value="{{ $ID }}" name="ID" id="email"  required placeholder="رقم البطاقة \ رقم جواز السفر"/>
                        </div>

                        <div class="form-group">
                            <span style="font-size: 13px;float: right;color: red;">  (&*#!ّّ%^-؟\)يجب ان تحتوي كلمة السر على حروف كبيرة ورموز وارقام </span>
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

                        <input type="hidden" class="form-input" value="ar" name="langa" id="name" />
                    </form>
                    <p class="loginhere">
                       هل لديك حساب ؟ <a href="https://ercelearning.com/login/" class="loginhere-link"> قم بتسجل الدخول من هنا</a>
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