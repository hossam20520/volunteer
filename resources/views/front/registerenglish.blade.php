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
                        <h2 class="form-title" style="text-decoration: underline;">Create account</h2>
                        <div class="form-group">
                            <span style="font-size: 13px; color: red;"> Username must be one small word.</span>
                        <input type="text" class="form-input" value="{{ $username }}" name="username" required id="name" placeholder="Username"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" value="{{ $firstname }}" name="fname" id="name" required placeholder="First Name"/>
                        </div>
                        <input type="hidden" class="form-input" value="en" name="langa" id="name" />
                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $lastname }}" name="lname" id="name" required placeholder="Last Name"/>
                        </div>


                  


                        <div class="form-group">
                            <input type="number" class="form-input"  value="{{ $phone }}" name="phone" id="name" required placeholder="Phone Number"/>
                        </div>


                        <div class="form-group">
                            <input type="number" class="form-input"  value="{{ $age }}" name="age" id="name" required  placeholder="Age"/>
                        </div>

                        <div class="form-group">
                           
                            <select class="form-input" value="{{ $gender }}"  required name="gender">
                                 <option> Select Gender </option>
                                <option {{ $gender == "male" ? "selected":"" }} value="male"> Male </option>
                                <option {{ $gender == "female" ? "selected":"" }} value="male"> Female </option>
                          
                        </select>
                        
                        </div>

                        <div class="form-group">
                            
                            <select class="form-input" value="{{ $branch}}" required  name="branch">
              
                                <option selected disabled>Select Branch</option>
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

    <select class="form-input" value="{{ $city }}" required  name="city">
        <option> City </option>
        <option {{ $city == "Alexandria" ? "selected":"" }} value="Alexandria">Alexandria</option>
        <option {{ $city == "Ismailia" ? "selected":"" }} value="Ismailia">Ismailia</option>
        <option {{ $city == "Aswan" ? "selected":"" }} value="Aswan">Aswan</option>
        <option {{ $city == "Asyut" ? "selected":"" }} value="Asyut">Asyut</option>
        <option {{ $city == "Luxor" ? "selected":"" }} value="Luxor">Luxor</option>
        <option {{ $city == "Red_Sea" ? "selected":"" }} value="Red_Sea">Red_Sea</option>
        <option {{ $city == "El_Beheira" ? "selected":"" }} value="El_Beheira">El_Beheira</option>
        <option {{ $city == "Bani Suwayf" ? "selected":"" }} value="Bani Suwayf">Bani Suwayf</option>
        <option {{ $city == "Port Said" ? "selected":"" }} value="Port Said">Port Said</option>
        <option {{ $city == "South Sinai" ? "selected":"" }} value="South Sinai">South Sinai</option>
        <option {{ $city == "Giza" ? "selected":"" }} value="Giza">Giza</option>
        <option {{ $city == "Dakahlia" ? "selected":"" }} value="Dakahlia">Dakahlia</option>
        <option {{ $city == "Damietta" ? "selected":"" }} value="Damietta">Damietta</option>
        <option {{ $city == "Suhaj" ? "selected":"" }} value="Suhaj">Suhaj</option>
        <option {{ $city == "Suez" ? "selected":"" }} value="Suez">Suez</option>
        <option {{ $city == "Ash Sharqia" ? "selected":"" }} value="Ash Sharqia">Ash Sharqia</option>
        <option {{ $city == "North Sinai" ? "selected":"" }} value="North Sinai">North Sinai</option>
        <option {{ $city == "Gharbia" ? "selected":"" }} value="Gharbia">Gharbia</option>
        <option {{ $city == "Al Fayyum" ? "selected":"" }} value="Al Fayyum">Al Fayyum</option>
        <option {{ $city == "Cairo" ? "selected":"" }} value="Cairo">Cairo</option>
        <option {{ $city == "Al Qalyubia" ? "selected":"" }} value="Al Qalyubia">Al Qalyubia</option>
        <option {{ $city == "Qena" ? "selected":"" }} value="Qena">Qena</option>
        <option {{ $city == "Kafr ash Shaykh" ? "selected":"" }} value="Kafr ash Shaykh">Kafr ash Shaykh</option>
        <option {{ $city == "Marsa Matruh" ? "selected":"" }} value="Marsa Matruh">Marsa Matruh</option>
        <option {{ $city == "Menofia" ? "selected":"" }} value="Menofia">Menofia</option>
        <option {{ $city == "Al Minya" ? "selected":"" }} value="Al Minya">Al Minya</option>
        <option {{ $city == "New Valley" ? "selected":"" }} value="New Valley">New Valley</option>
        
    </select>


</div>

                
           <div class="form-group">
            <select class="form-input" value="{{ $country }}" name="country" id="id_country">
            <option value="EG">Select a country...</option>
            <option {{ $country == "AF" ? "selected":""   }} value="AF">Afghanistan</option>
            <option {{ $country == "AX" ? "selected":""   }} value="AX">Ã…land Islands</option>
            <option {{ $country == "AL" ? "selected":""   }} value="AL">Albania</option>
            <option {{ $country == "DZ" ? "selected":""   }} value="DZ">Algeria</option>
            <option {{ $country == "AS" ? "selected":""   }} value="AS">American Samoa</option>
            <option {{ $country == "AD" ? "selected":""   }} value="AD">Andorra</option>
            <option {{ $country == "AO" ? "selected":""   }} value="AO">Angola</option>
            <option {{ $country == "AI" ? "selected":""   }} value="AI">Anguilla</option>
            <option {{ $country == "AQ" ? "selected":""   }} value="AQ">Antarctica</option>
            <option {{ $country == "AG" ? "selected":""   }} value="AG">Antigua and Barbuda</option>
            <option {{ $country == "AR" ? "selected":""   }} value="AR">Argentina</option>
            <option {{ $country == "AM" ? "selected":""   }} value="AM">Armenia</option>
            <option {{ $country == "AW" ? "selected":""   }} value="AW">Aruba</option>
            <option {{ $country == "AU" ? "selected":""   }} value="AU">Australia</option>
            <option {{ $country == "AT" ? "selected":""   }} value="AT">Austria</option>
            <option {{ $country == "AZ" ? "selected":""   }} value="AZ">Azerbaijan</option>
            <option {{ $country == "BS" ? "selected":""   }} value="BS">Bahamas</option>
            <option {{ $country == "BH" ? "selected":""   }} value="BH">Bahrain</option>
            <option {{ $country == "BD" ? "selected":""   }} value="BD">Bangladesh</option>
            <option {{ $country == "BB" ? "selected":""   }} value="BB">Barbados</option>
            <option {{ $country == "BY" ? "selected":""   }} value="BY">Belarus</option>
            <option {{ $country == "BE" ? "selected":""   }} value="BE">Belgium</option>
            <option {{ $country == "BZ" ? "selected":""   }} value="BZ">Belize</option>
            <option {{ $country == "BJ" ? "selected":""   }} value="BJ">Benin</option>
            <option {{ $country == "BM" ? "selected":""   }} value="BM">Bermuda</option>
            <option {{ $country == "BT" ? "selected":""   }} value="BT">Bhutan</option>
            <option {{ $country == "BO" ? "selected":""   }} value="BO">Bolivia (Plurinational State of)</option>
            <option {{ $country == "BQ" ? "selected":""   }} value="BQ">Bonaire, Sint Eustatius and Saba</option>
            <option {{ $country == "BA" ? "selected":""   }} value="BA">Bosnia and Herzegovina</option>
            <option {{ $country == "BW" ? "selected":""   }} value="BW">Botswana</option>
            <option {{ $country == "BV" ? "selected":""   }} value="BV">Bouvet Island</option>
            <option {{ $country == "BR" ? "selected":""   }} value="BR">Brazil</option>
            <option {{ $country == "IO" ? "selected":""   }} value="IO">British Indian Ocean Territory</option>
            <option {{ $country == "BN" ? "selected":""   }} value="BN">Brunei Darussalam</option>
            <option {{ $country == "BG" ? "selected":""   }} value="BG">Bulgaria</option>
            <option {{ $country == "BF" ? "selected":""   }} value="BF">Burkina Faso</option>
            <option {{ $country == "BI" ? "selected":""   }} value="BI">Burundi</option>
            <option {{ $country == "CV" ? "selected":""   }} value="CV">Cabo Verde</option>
            <option {{ $country == "KH" ? "selected":""   }} value="KH">Cambodia</option>
            <option {{ $country == "CM" ? "selected":""   }} value="CM">Cameroon</option>
            <option {{ $country == "CA" ? "selected":""   }} value="CA">Canada</option>
            <option {{ $country == "KY" ? "selected":""   }} value="KY">Cayman Islands</option>
            <option {{ $country == "CF" ? "selected":""   }} value="CF">Central African Republic</option>
            <option {{ $country == "TD" ? "selected":""   }} value="TD">Chad</option>
            <option {{ $country == "CL" ? "selected":""   }} value="CL">Chile</option>
            <option {{ $country == "CN" ? "selected":""   }} value="CN">China</option>
            <option {{ $country == "CX" ? "selected":""   }} value="CX">Christmas Island</option>
            <option {{ $country == "CC" ? "selected":""   }} value="CC">Cocos (Keeling) Islands</option>
            <option {{ $country == "CO" ? "selected":""   }} value="CO">Colombia</option>
            <option {{ $country == "KM" ? "selected":""   }} value="KM">Comoros</option>
            <option {{ $country == "CG" ? "selected":""   }} value="CG">Congo</option>
            <option {{ $country == "CD" ? "selected":""   }} value="CD">Congo (the Democratic Republic of the)</option>
            <option {{ $country == "CK" ? "selected":""   }} value="CK">Cook Islands</option>
            <option {{ $country == "CR" ? "selected":""   }} value="CR">Costa Rica</option>
            <option {{ $country == "CI" ? "selected":""   }} value="CI">CÃ´te d'Ivoire</option>
            <option {{ $country == "HR" ? "selected":""   }} value="HR">Croatia</option>
            <option {{ $country == "CU" ? "selected":""   }} value="CU">Cuba</option>
            <option {{ $country == "CW" ? "selected":""   }} value="CW">CuraÃ§ao</option>
            <option {{ $country == "CY" ? "selected":""   }} value="CY">Cyprus</option>
            <option {{ $country == "CZ" ? "selected":""   }} value="CZ">Czechia</option>
            <option {{ $country == "DK" ? "selected":""   }} value="DK">Denmark</option>
            <option {{ $country == "DJ" ? "selected":""   }} value="DJ">Djibouti</option>
            <option {{ $country == "DM" ? "selected":""   }} value="DM">Dominica</option>
            <option {{ $country == "DO" ? "selected":""   }} value="DO">Dominican Republic</option>
            <option {{ $country == "EC" ? "selected":""   }} value="EC">Ecuador</option>
            <option {{ $country == "EG" ? "selected":""   }} value="EG">Egypt</option>
            <option {{ $country == "SV" ? "selected":""   }} value="SV">El Salvador</option>
            <option {{ $country == "GQ" ? "selected":""   }} value="GQ">Equatorial Guinea</option>
            <option {{ $country == "ER" ? "selected":""   }} value="ER">Eritrea</option>
            <option {{ $country == "EE" ? "selected":""   }} value="EE">Estonia</option>
            <option {{ $country == "SZ" ? "selected":""   }} value="SZ">Eswatini</option>
            <option {{ $country == "ET" ? "selected":""   }} value="ET">Ethiopia</option>
            <option {{ $country == "FK" ? "selected":""   }} value="FK">Falkland Islands (Malvinas)</option>
            <option {{ $country == "FO" ? "selected":""   }} value="FO">Faroe Islands</option>
            <option {{ $country == "FJ" ? "selected":""   }} value="FJ">Fiji</option>
            <option {{ $country == "FI" ? "selected":""   }} value="FI">Finland</option>
            <option {{ $country == "FR" ? "selected":""   }} value="FR">France</option>
            <option {{ $country == "GF" ? "selected":""   }} value="GF">French Guiana</option>
            <option {{ $country == "PF" ? "selected":""   }} value="PF">French Polynesia</option>
            <option {{ $country == "TF" ? "selected":""   }} value="TF">French Southern Territories</option>
            <option {{ $country == "GA" ? "selected":""   }} value="GA">Gabon</option>
            <option {{ $country == "GM" ? "selected":""   }} value="GM">Gambia</option>
            <option {{ $country == "GE" ? "selected":""   }} value="GE">Georgia</option>
            <option {{ $country == "DE" ? "selected":""   }} value="DE">Germany</option>
            <option {{ $country == "GH" ? "selected":""   }} value="GH">Ghana</option>
            <option {{ $country == "GI" ? "selected":""   }} value="GI">Gibraltar</option>
            <option {{ $country == "GR" ? "selected":""   }} value="GR">Greece</option>
            <option {{ $country == "GL" ? "selected":""   }} value="GL">Greenland</option>
            <option {{ $country == "GD" ? "selected":""   }} value="GD">Grenada</option>
            <option {{ $country == "GP" ? "selected":""   }} value="GP">Guadeloupe</option>
            <option {{ $country == "GU" ? "selected":""   }} value="GU">Guam</option>
            <option {{ $country == "GT" ? "selected":""   }} value="GT">Guatemala</option>
            <option {{ $country == "GG" ? "selected":""   }} value="GG">Guernsey</option>
            <option {{ $country == "GN" ? "selected":""   }} value="GN">Guinea</option>
            <option {{ $country == "GW" ? "selected":""   }} value="GW">Guinea-Bissau</option>
            <option {{ $country == "GY" ? "selected":""   }} value="GY">Guyana</option>
            <option {{ $country == "HT" ? "selected":""   }} value="HT">Haiti</option>
            <option {{ $country == "HM" ? "selected":""   }} value="HM">Heard Island and McDonald Islands</option>
            <option {{ $country == "VA" ? "selected":""   }} value="VA">Holy See</option>
            <option {{ $country == "HN" ? "selected":""   }} value="HN">Honduras</option>
            <option {{ $country == "HK" ? "selected":""   }} value="HK">Hong Kong</option>
            <option {{ $country == "HU" ? "selected":""   }} value="HU">Hungary</option>
            <option {{ $country == "IS" ? "selected":""   }} value="IS">Iceland</option>
            <option {{ $country == "IN" ? "selected":""   }} value="IN">India</option>
            <option {{ $country == "ID" ? "selected":""   }} value="ID">Indonesia</option>
            <option {{ $country == "IR" ? "selected":""   }} value="IR">Iran (Islamic Republic of)</option>
            <option {{ $country == "IQ" ? "selected":""   }} value="IQ">Iraq</option>
            <option {{ $country == "IE" ? "selected":""   }} value="IE">Ireland</option>
            <option {{ $country == "IM" ? "selected":""   }} value="IM">Isle of Man</option>
            <option {{ $country == "IL" ? "selected":""   }} value="IL">Israel</option>
            <option {{ $country == "IT" ? "selected":""   }} value="IT">Italy</option>
            <option {{ $country == "JM" ? "selected":""   }} value="JM">Jamaica</option>
            <option {{ $country == "JP" ? "selected":""   }} value="JP">Japan</option>
            <option {{ $country == "JE" ? "selected":""   }} value="JE">Jersey</option>
            <option {{ $country == "JO" ? "selected":""   }} value="JO">Jordan</option>
            <option {{ $country == "KZ" ? "selected":""   }} value="KZ">Kazakhstan</option>
            <option {{ $country == "KE" ? "selected":""   }} value="KE">Kenya</option>
            <option {{ $country == "KI" ? "selected":""   }} value="KI">Kiribati</option>
            <option {{ $country == "KP" ? "selected":""   }} value="KP">Korea (the Democratic People's Republic of)</option>
            <option {{ $country == "KR" ? "selected":""   }} value="KR">Korea (the Republic of)</option>
            <option {{ $country == "KW" ? "selected":""   }} value="KW">Kuwait</option>
            <option {{ $country == "KG" ? "selected":""   }} value="KG">Kyrgyzstan</option>
            <option {{ $country == "LA" ? "selected":""   }} value="LA">Lao People's Democratic Republic</option>
            <option {{ $country == "LV" ? "selected":""   }} value="LV">Latvia</option>
            <option {{ $country == "LB" ? "selected":""   }} value="LB">Lebanon</option>
            <option {{ $country == "LS" ? "selected":""   }} value="LS">Lesotho</option>
            <option {{ $country == "LR" ? "selected":""   }} value="LR">Liberia</option>
            <option {{ $country == "LY" ? "selected":""   }} value="LY">Libya</option>
            <option {{ $country == "LI" ? "selected":""   }} value="LI">Liechtenstein</option>
            <option {{ $country == "LT" ? "selected":""   }} value="LT">Lithuania</option>
            <option {{ $country == "LU" ? "selected":""   }} value="LU">Luxembourg</option>
            <option {{ $country == "MO" ? "selected":""   }} value="MO">Macao</option>
            <option {{ $country == "MG" ? "selected":""   }} value="MG">Madagascar</option>
            <option {{ $country == "MW" ? "selected":""   }} value="MW">Malawi</option>
            <option {{ $country == "MY" ? "selected":""   }} value="MY">Malaysia</option>
            <option {{ $country == "MV" ? "selected":""   }} value="MV">Maldives</option>
            <option {{ $country == "ML" ? "selected":""   }} value="ML">Mali</option>
            <option {{ $country == "MT" ? "selected":""   }} value="MT">Malta</option>
            <option {{ $country == "MH" ? "selected":""   }} value="MH">Marshall Islands</option>
            <option {{ $country == "MQ" ? "selected":""   }} value="MQ">Martinique</option>
            <option {{ $country == "MR" ? "selected":""   }} value="MR">Mauritania</option>
            <option {{ $country == "MU" ? "selected":""   }} value="MU">Mauritius</option>
            <option {{ $country == "YT" ? "selected":""   }} value="YT">Mayotte</option>
            <option {{ $country == "MX" ? "selected":""   }} value="MX">Mexico</option>
            <option {{ $country == "FM" ? "selected":""   }} value="FM">Micronesia (Federated States of)</option>
            <option {{ $country == "MD" ? "selected":""   }} value="MD">Moldova (the Republic of)</option>
            <option {{ $country == "MC" ? "selected":""   }} value="MC">Monaco</option>
            <option {{ $country == "MN" ? "selected":""   }} value="MN">Mongolia</option>
            <option {{ $country == "ME" ? "selected":""   }} value="ME">Montenegro</option>
            <option {{ $country == "MS" ? "selected":""   }} value="MS">Montserrat</option>
            <option {{ $country == "MA" ? "selected":""   }} value="MA">Morocco</option>
            <option {{ $country == "MZ" ? "selected":""   }} value="MZ">Mozambique</option>
            <option {{ $country == "MM" ? "selected":""   }} value="MM">Myanmar</option>
            <option {{ $country == "NA" ? "selected":""   }} value="NA">Namibia</option>
            <option {{ $country == "NR" ? "selected":""   }} value="NR">Nauru</option>
            <option {{ $country == "NP" ? "selected":""   }} value="NP">Nepal</option>
            <option {{ $country == "NL" ? "selected":""   }} value="NL">Netherlands</option>
            <option {{ $country == "NC" ? "selected":""   }} value="NC">New Caledonia</option>
            <option {{ $country == "NZ" ? "selected":""   }} value="NZ">New Zealand</option>
            <option {{ $country == "NI" ? "selected":""   }} value="NI">Nicaragua</option>
            <option {{ $country == "NE" ? "selected":""   }} value="NE">Niger</option>
            <option {{ $country == "NG" ? "selected":""   }} value="NG">Nigeria</option>
            <option {{ $country == "NU" ? "selected":""   }} value="NU">Niue</option>
            <option {{ $country == "NF" ? "selected":""   }} value="NF">Norfolk Island</option>
            <option {{ $country == "MK" ? "selected":""   }} value="MK">North Macedonia</option>
            <option {{ $country == "MP" ? "selected":""   }} value="MP">Northern Mariana Islands</option>
            <option {{ $country == "NO" ? "selected":""   }} value="NO">Norway</option>
            <option {{ $country == "OM" ? "selected":""   }} value="OM">Oman</option>
            <option {{ $country == "PK" ? "selected":""   }} value="PK">Pakistan</option>
            <option {{ $country == "PW" ? "selected":""   }} value="PW">Palau</option>
            <option {{ $country == "PS" ? "selected":""   }} value="PS">Palestine, State of</option>
            <option {{ $country == "PA" ? "selected":""   }} value="PA">Panama</option>
            <option {{ $country == "PG" ? "selected":""   }} value="PG">Papua New Guinea</option>
            <option {{ $country == "PY" ? "selected":""   }} value="PY">Paraguay</option>
            <option {{ $country == "PE" ? "selected":""   }} value="PE">Peru</option>
            <option {{ $country == "PH" ? "selected":""   }} value="PH">Philippines</option>
            <option {{ $country == "PN" ? "selected":""   }} value="PN">Pitcairn</option>
            <option {{ $country == "PL" ? "selected":""   }} value="PL">Poland</option>
            <option {{ $country == "PT" ? "selected":""   }} value="PT">Portugal</option>
            <option {{ $country == "PR" ? "selected":""   }} value="PR">Puerto Rico</option>
            <option {{ $country == "QA" ? "selected":""   }} value="QA">Qatar</option>
            <option {{ $country == "RE" ? "selected":""   }} value="RE">RÃ©union</option>
            <option {{ $country == "RO" ? "selected":""   }} value="RO">Romania</option>
            <option {{ $country == "RU" ? "selected":""   }} value="RU">Russian Federation</option>
            <option {{ $country == "RW" ? "selected":""   }} value="RW">Rwanda</option>
            <option {{ $country == "BL" ? "selected":""   }} value="BL">Saint BarthÃ©lemy</option>
            <option {{ $country == "SH" ? "selected":""   }} value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
            <option {{ $country == "KN" ? "selected":""   }} value="KN">Saint Kitts and Nevis</option>
            <option {{ $country == "LC" ? "selected":""   }} value="LC">Saint Lucia</option>
            <option {{ $country == "MF" ? "selected":""   }} value="MF">Saint Martin (French part)</option>
            <option {{ $country == "PM" ? "selected":""   }} value="PM">Saint Pierre and Miquelon</option>
            <option {{ $country == "VC" ? "selected":""   }} value="VC">Saint Vincent and the Grenadines</option>
            <option {{ $country == "WS" ? "selected":""   }} value="WS">Samoa</option>
            <option {{ $country == "SM" ? "selected":""   }} value="SM">San Marino</option>
            <option {{ $country == "ST" ? "selected":""   }} value="ST">Sao Tome and Principe</option>
            <option {{ $country == "SA" ? "selected":""   }} value="SA">Saudi Arabia</option>
            <option {{ $country == "SN" ? "selected":""   }} value="SN">Senegal</option>
            <option {{ $country == "RS" ? "selected":""   }} value="RS">Serbia</option>
            <option {{ $country == "SC" ? "selected":""   }} value="SC">Seychelles</option>
            <option {{ $country == "SL" ? "selected":""   }} value="SL">Sierra Leone</option>
            <option {{ $country == "SG" ? "selected":""   }} value="SG">Singapore</option>
            <option {{ $country == "SX" ? "selected":""   }} value="SX">Sint Maarten (Dutch part)</option>
            <option {{ $country == "SK" ? "selected":""   }} value="SK">Slovakia</option>
            <option {{ $country == "SI" ? "selected":""   }} value="SI">Slovenia</option>
            <option {{ $country == "SB" ? "selected":""   }} value="SB">Solomon Islands</option>
            <option {{ $country == "SO" ? "selected":""   }} value="SO">Somalia</option>
            <option {{ $country == "ZA" ? "selected":""   }} value="ZA">South Africa</option>
            <option {{ $country == "GS" ? "selected":""   }} value="GS">South Georgia and the South Sandwich Islands</option>
            <option {{ $country == "SS" ? "selected":""   }} value="SS">South Sudan</option>
            <option {{ $country == "ES" ? "selected":""   }} value="ES">Spain</option>
            <option {{ $country == "LK" ? "selected":""   }} value="LK">Sri Lanka</option>
            <option {{ $country == "SD" ? "selected":""   }} value="SD">Sudan</option>
            <option {{ $country == "SR" ? "selected":""   }} value="SR">Suriname</option>
            <option {{ $country == "SJ" ? "selected":""   }} value="SJ">Svalbard and Jan Mayen</option>
            <option {{ $country == "SE" ? "selected":""   }} value="SE">Sweden</option>
            <option {{ $country == "CH" ? "selected":""   }} value="CH">Switzerland</option>
            <option {{ $country == "SY" ? "selected":""   }} value="SY">Syrian Arab Republic</option>
            <option {{ $country == "TW" ? "selected":""   }} value="TW">Taiwan</option>
            <option {{ $country == "TJ" ? "selected":""   }} value="TJ">Tajikistan</option>
            <option {{ $country == "TZ" ? "selected":""   }} value="TZ">Tanzania, the United Republic of</option>
            <option {{ $country == "TH" ? "selected":""   }} value="TH">Thailand</option>
            <option {{ $country == "TL" ? "selected":""   }} value="TL">Timor-Leste</option>
            <option {{ $country == "TG" ? "selected":""   }} value="TG">Togo</option>
            <option {{ $country == "TK" ? "selected":""   }} value="TK">Tokelau</option>
            <option {{ $country == "TO" ? "selected":""   }} value="TO">Tonga</option>
            <option {{ $country == "TT" ? "selected":""   }} value="TT">Trinidad and Tobago</option>
            <option {{ $country == "TN" ? "selected":""   }} value="TN">Tunisia</option>
            <option {{ $country == "TR" ? "selected":""   }} value="TR">Turkey</option>
            <option {{ $country == "TM" ? "selected":""   }} value="TM">Turkmenistan</option>
            <option {{ $country == "TC" ? "selected":""   }} value="TC">Turks and Caicos Islands</option>
            <option {{ $country == "TV" ? "selected":""   }} value="TV">Tuvalu</option>
            <option {{ $country == "UG" ? "selected":""   }} value="UG">Uganda</option>
            <option {{ $country == "UA" ? "selected":""   }} value="UA">Ukraine</option>
            <option {{ $country == "AE" ? "selected":""   }} value="AE">United Arab Emirates</option>
            <option {{ $country == "GB" ? "selected":""   }} value="GB">United Kingdom</option>
            <option {{ $country == "US" ? "selected":""   }} value="US">United States</option>
            <option {{ $country == "UM" ? "selected":""   }} value="UM">United States Minor Outlying Islands</option>
            <option {{ $country == "UY" ? "selected":""   }} value="UY">Uruguay</option>
            <option {{ $country == "UZ" ? "selected":""   }} value="UZ">Uzbekistan</option>
            <option {{ $country == "VU" ? "selected":""   }} value="VU">Vanuatu</option>
            <option {{ $country == "VE" ? "selected":""   }} value="VE">Venezuela (Bolivarian Republic of)</option>
            <option {{ $country == "VN" ? "selected":""   }} value="VN">Viet Nam</option>
            <option {{ $country == "VG" ? "selected":""   }} value="VG">Virgin Islands (British)</option>
            <option {{ $country == "VI" ? "selected":""   }} value="VI">Virgin Islands (U.S.)</option>
            <option {{ $country == "WF" ? "selected":""   }} value="WF">Wallis and Futuna</option>
            <option {{ $country == "EH" ? "selected":""   }} value="EH">Western Sahara</option>
            <option {{ $country == "YE" ? "selected":""   }} value="YE">Yemen</option>
            <option {{ $country == "ZM" ? "selected":""   }} value="ZM">Zambia</option>
            
        </select>

         

                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input"  value="{{ $email }}" name="email" id="email" required placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $mid }}" name="mid" id="name" required  placeholder="Membership ID"/>
                        </div>
                        
                        
                        <div class="form-group">
                            <span style="font-size: 13px; color: red;"> Passport Number not for Egyptians </span>
                            <input type="text" class="form-input"  value="{{ $ID }}" name="ID" id="email" required placeholder="National ID / Passport Number"/>
                        </div>

                        <div class="form-group">
                            <span style="font-size: 13px; color: red;"> The password must contain capital letters, symbols and numbers(&*#!ّّ%^-؟\)</span>
                            <input type="text" class="form-input" name="password" id="password" required placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-input" name="confirm" id="passwordcon" placeholder="Confirm password"/>
                            <span toggle="#passwordcon" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            {{-- <label for="agree-term" class="label-agree-term"><span><span></span></span> Accept Terms <a href="#" class="term-service">Terms</a></label> --}}
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" style="background-image: linear-gradient(to left, #eb7474, #e69fde);" value="Register"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have an account ? <a href="https://ercelearning.com/login/" class="loginhere-link"> Login from here </a>
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