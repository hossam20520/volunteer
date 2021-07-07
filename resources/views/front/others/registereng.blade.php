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
                        <a href="https://ercelearning.com/login/"> Login now</a>
                         @endif
                    
                    </h2> 
                    @endif
                    <form method="POST" id="signup-form"  action="{{ route('registerPostNot') }}" class="signup-form">
                        @csrf
                        <input type="hidden" class="form-input" value="{{ isset($_GET['checkout']) }}" name="checkout" required id="name"/>
                        <h2 class="form-title" style="text-decoration: underline;"> Create account</h2>
                        <div class="form-group">
                            <span style="font-size: 13px; color: red;"> Username must be one small word.</span>
                        <input type="text" class="form-input" value="{{ $username }}" name="username" required id="name" placeholder="Username"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" value="{{ $firstname }}" name="fname" required id="name" placeholder="First Name"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $lastname }}" name="lname" required id="name" placeholder="Last Name"/>
                        </div>


                  


                        <div class="form-group">
                            <input type="number" class="form-input"  value="{{ $phone }}" name="phone" required id="name" placeholder="Phone Number"/>
                        </div>


                        <div class="form-group">
                            <input type="number" class="form-input" min="16" value="{{ $age }}"  required name="age" id="name" placeholder="Age"/>
                        </div>

                        <div class="form-group">
                            
                            <select class="form-input" value="{{ $city }}" required name="city">
                                <option selected disabled>Select Governorate</option>
                                <option {{ $city == "Cairo" ? "selected":"" }} value="Cairo">Cairo</option>
                                <option {{ $city == "Alexandria" ? "selected":"" }} value="Alexandria">Alexandria</option>
                                <option {{ $city == "Giza" ? "selected":"" }} value="Giza">Giza</option>
                                <option {{ $city == "Shubra al Khaymah" ? "selected":"" }} value="Shubra al Khaymah">Shubra al Khaymah</option>
                                <option {{ $city == "Halwan" ? "selected":"" }} value="Halwan">Halwan</option>
                                <option {{ $city == "Al Mahallah al Kubra" ? "selected":"" }} value="Al Mahallah al Kubra">Al Mahallah al Kubra</option>
                                <option {{ $city == "Port Said" ? "selected":"" }} value="Port Said">Port Said</option>
                                <option {{ $city == "Madinat as Sadis min Uktubar" ? "selected":"" }} value="Madinat as Sadis min Uktubar">Madinat as Sadis min Uktubar</option>
                                <option {{ $city == "Suez" ? "selected":"" }} value="Suez">Suez</option>
                                <option {{ $city == "Al Mansurah" ? "selected":"" }} value="Al Mansurah">Al Mansurah</option>
                                <option {{ $city == "Tanta" ? "selected":"" }} value="Tanta">Tanta</option>
                                <option {{ $city == "Asyut" ? "selected":"" }} value="Asyut">Asyut</option>
                                <option {{ $city == "Al Fayyum" ? "selected":"" }} value="Al Fayyum">Al Fayyum</option>
                                <option {{ $city == "Az Zaqaziq" ? "selected":"" }} value="Az Zaqaziq">Az Zaqaziq</option>
                                <option {{ $city == "Ismailia" ? "selected":"" }} value="Ismailia">Ismailia</option>
                                <option {{ $city == "Aswan" ? "selected":"" }} value="Aswan">Aswan</option>
                                <option {{ $city == "Kafr ad Dawwar" ? "selected":"" }} value="Kafr ad Dawwar">Kafr ad Dawwar</option>
                                <option {{ $city == "Damanhur" ? "selected":"" }} value="Damanhur">Damanhur</option>
                                <option {{ $city == "Al Minya" ? "selected":"" }} value="Al Minya">Al Minya</option>
                                <option {{ $city == "Damietta" ? "selected":"" }} value="Damietta">Damietta</option>
                                <option {{ $city == "Luxor" ? "selected":"" }} value="Luxor">Luxor</option>
                                <option {{ $city == "Qina" ? "selected":"" }} value="Qina">Qina</option>
                                <option {{ $city == "Suhaj" ? "selected":"" }} value="Suhaj">Suhaj</option>
                                <option {{ $city == "Bani Suwayf" ? "selected":"" }} value="Bani Suwayf">Bani Suwayf</option>
                                <option {{ $city == "Shibin al Kawm" ? "selected":"" }} value="Shibin al Kawm">Shibin al Kawm</option>
                                <option {{ $city == "Al Arish" ? "selected":"" }} value="Al Arish">Al Arish</option>
                                <option {{ $city == "Al Ghardaqah" ? "selected":"" }} value="Al Ghardaqah">Al Ghardaqah</option>
                                <option {{ $city == "Banha" ? "selected":"" }} value="Banha">Banha</option>
                                <option {{ $city == "Kafr ash Shaykh" ? "selected":"" }} value="Kafr ash Shaykh">Kafr ash Shaykh</option>
                                <option {{ $city == "Marsa Matruh" ? "selected":"" }} value="Marsa Matruh">Marsa Matruh</option>
                                <option {{ $city == "Al Kharijah" ? "selected":"" }} value="Al Kharijah">Al Kharijah</option>
                                <option {{ $city == "At Tur" ? "selected":"" }} value="At Tur">At Tur</option>
                                <option {{ $city == "Rafah" ? "selected":"" }} value="Rafah">Rafah</option>
                                <option {{ $city == "Ash Shaykh Zuwayd" ? "selected":"" }} value="Ash Shaykh Zuwayd">Ash Shaykh Zuwayd</option>
                                <option {{ $city == "Bir al Abd" ? "selected":"" }} value="Bir al Abd">Bir al Abd</option>

                                

                            </select>

                            
                          </div>

                
                        <div class="form-group">
                            <select class="form-input" id="country"  value="{{ $country }}" name="country">
                                <option selected disabled>Select Country</option>
                                <option {{ $country == "Afghanistan" ? "selected":"" }} value="Afganistan">Afghanistan</option>
                                <option {{ $country == "Albania" ? "selected":"" }} value="Albania">Albania</option>
                                <option {{ $country == "Algeria" ? "selected":"" }} value="Algeria">Algeria</option>
                                <option {{ $country == "American Samoa" ? "selected":"" }} value="American Samoa">American Samoa</option>
                                <option {{ $country == "Andorra" ? "selected":"" }} value="Andorra">Andorra</option>
                                <option {{ $country == "Angola" ? "selected":"" }} value="Angola">Angola</option>
                                <option {{ $country == "Anguilla" ? "selected":"" }} value="Anguilla">Anguilla</option>
                                <option {{ $country == "Antigua & Barbuda" ? "selected":"" }} value="Antigua & Barbuda">Antigua & Barbuda</option>
                                <option {{ $country == "Argentina" ? "selected":"" }} value="Argentina">Argentina</option>
                                <option {{ $country == "Armenia" ? "selected":"" }} value="Armenia">Armenia</option>
                                <option {{ $country == "Aruba" ? "selected":"" }} value="Aruba">Aruba</option>
                                <option {{ $country == "Australia" ? "selected":"" }} value="Australia">Australia</option>
                                <option {{ $country == "Austria" ? "selected":"" }} value="Austria">Austria</option>
                                <option {{ $country == "Azerbaijan" ? "selected":"" }} value="Azerbaijan">Azerbaijan</option>
                                <option {{ $country == "Bahamas" ? "selected":"" }} value="Bahamas">Bahamas</option>
                                <option {{ $country == "Bahrain" ? "selected":"" }} value="Bahrain">Bahrain</option>
                                <option {{ $country == "Bangladesh" ? "selected":"" }} value="Bangladesh">Bangladesh</option>
                                <option {{ $country == "Barbados" ? "selected":"" }} value="Barbados">Barbados</option>
                                <option {{ $country == "Belarus" ? "selected":"" }} value="Belarus">Belarus</option>
                                <option {{ $country == "Belgium" ? "selected":"" }} value="Belgium">Belgium</option>
                                <option {{ $country == "Belize" ? "selected":"" }} value="Belize">Belize</option>
                                <option {{ $country == "Benin" ? "selected":"" }} value="Benin">Benin</option>
                                <option {{ $country == "Bermuda" ? "selected":"" }} value="Bermuda">Bermuda</option>
                                <option {{ $country == "Bhutan" ? "selected":"" }} value="Bhutan">Bhutan</option>
                                <option {{ $country == "Bolivia" ? "selected":"" }} value="Bolivia">Bolivia</option>
                                <option {{ $country == "Bonaire" ? "selected":"" }} value="Bonaire">Bonaire</option>
                                <option {{ $country == "Bosnia & Herzegovina" ? "selected":"" }} value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                <option {{ $country == "Botswana" ? "selected":"" }} value="Botswana">Botswana</option>
                                <option {{ $country == "Brazil" ? "selected":"" }} value="Brazil">Brazil</option>
                                <option {{ $country == "British Indian Ocean Ter" ? "selected":"" }} value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option {{ $country == "Brunei" ? "selected":"" }} value="Brunei">Brunei</option>
                                <option {{ $country == "Bulgaria" ? "selected":"" }} value="Bulgaria">Bulgaria</option>
                                <option {{ $country == "Burkina Faso" ? "selected":"" }} value="Burkina Faso">Burkina Faso</option>
                                <option {{ $country == "Burundi" ? "selected":"" }} value="Burundi">Burundi</option>
                                <option {{ $country == "Cambodia" ? "selected":"" }} value="Cambodia">Cambodia</option>
                                <option {{ $country == "Cameroon" ? "selected":"" }} value="Cameroon">Cameroon</option>
                                <option {{ $country == "Canada" ? "selected":"" }} value="Canada">Canada</option>
                                <option {{ $country == "Canary Islands" ? "selected":"" }} value="Canary Islands">Canary Islands</option>
                                <option {{ $country == "Cape Verde" ? "selected":"" }} value="Cape Verde">Cape Verde</option>
                                <option {{ $country == "Cayman Islands" ? "selected":"" }} value="Cayman Islands">Cayman Islands</option>
                                <option {{ $country == "Central African Republic" ? "selected":"" }} value="Central African Republic">Central African Republic</option>
                                <option {{ $country == "Chad" ? "selected":"" }} value="Chad">Chad</option>
                                <option {{ $country == "Channel Islands" ? "selected":"" }} value="Channel Islands">Channel Islands</option>
                                <option {{ $country == "Chile" ? "selected":"" }} value="Chile">Chile</option>
                                <option {{ $country == "China" ? "selected":"" }} value="China">China</option>
                                <option {{ $country == "Christmas Island" ? "selected":"" }} value="Christmas Island">Christmas Island</option>
                                <option {{ $country == "Cocos Island" ? "selected":"" }} value="Cocos Island">Cocos Island</option>
                                <option {{ $country == "Colombia" ? "selected":"" }} value="Colombia">Colombia</option>
                                <option {{ $country == "Comoros" ? "selected":"" }} value="Comoros">Comoros</option>
                                <option {{ $country == "Congo" ? "selected":"" }} value="Congo">Congo</option>
                                <option {{ $country == "Cook Islands" ? "selected":"" }} value="Cook Islands">Cook Islands</option>
                                <option {{ $country == "Costa Rica" ? "selected":"" }} value="Costa Rica">Costa Rica</option>
                                <option {{ $country == "Cote DIvoire" ? "selected":"" }} value="Cote DIvoire">Cote DIvoire</option>
                                <option {{ $country == "Croatia" ? "selected":"" }} value="Croatia">Croatia</option>
                                <option {{ $country == "Cuba" ? "selected":"" }} value="Cuba">Cuba</option>
                                <option {{ $country == "Curacao" ? "selected":"" }} value="Curaco">Curacao</option>
                                <option {{ $country == "Cyprus" ? "selected":"" }} value="Cyprus">Cyprus</option>
                                <option {{ $country == "Czech Republic" ? "selected":"" }} value="Czech Republic">Czech Republic</option>
                                <option {{ $country == "Denmark" ? "selected":"" }} value="Denmark">Denmark</option>
                                <option {{ $country == "Djibouti" ? "selected":"" }} value="Djibouti">Djibouti</option>
                                <option {{ $country == "Dominica" ? "selected":"" }} value="Dominica">Dominica</option>
                                <option {{ $country == "Dominican Republic" ? "selected":"" }} value="Dominican Republic">Dominican Republic</option>
                                <option {{ $country == "East Timor" ? "selected":"" }} value="East Timor">East Timor</option>
                                <option {{ $country == "Ecuador" ? "selected":"" }} value="Ecuador">Ecuador</option>
                                <option {{ $country == "Egypt" ? "selected":"" }} value="Egypt">Egypt</option>
                                <option {{ $country == "El Salvador" ? "selected":"" }} value="El Salvador">El Salvador</option>
                                <option {{ $country == "Equatorial Guinea" ? "selected":"" }} value="Equatorial Guinea">Equatorial Guinea</option>
                                <option {{ $country == "Eritrea" ? "selected":"" }} value="Eritrea">Eritrea</option>
                                <option {{ $country == "Estonia" ? "selected":"" }} value="Estonia">Estonia</option>
                                <option {{ $country == "Ethiopia" ? "selected":"" }} value="Ethiopia">Ethiopia</option>
                                <option {{ $country == "Falkland Islands" ? "selected":"" }} value="Falkland Islands">Falkland Islands</option>
                                <option {{ $country == "Faroe Islands" ? "selected":"" }} value="Faroe Islands">Faroe Islands</option>
                                <option {{ $country == "Fiji" ? "selected":"" }} value="Fiji">Fiji</option>
                                <option {{ $country == "Finland" ? "selected":"" }} value="Finland">Finland</option>
                                <option {{ $country == "France" ? "selected":"" }} value="France">France</option>
                                <option {{ $country == "French Guiana" ? "selected":"" }} value="French Guiana">French Guiana</option>
                                <option {{ $country == "French Polynesia" ? "selected":"" }} value="French Polynesia">French Polynesia</option>
                                <option {{ $country == "French Southern Ter" ? "selected":"" }} value="French Southern Ter">French Southern Ter</option>
                                <option {{ $country == "Gabon" ? "selected":"" }} value="Gabon">Gabon</option>
                                <option {{ $country == "Gambia" ? "selected":"" }} value="Gambia">Gambia</option>
                                <option {{ $country == "Georgia" ? "selected":"" }} value="Georgia">Georgia</option>
                                <option {{ $country == "Germany" ? "selected":"" }} value="Germany">Germany</option>
                                <option {{ $country == "Ghana" ? "selected":"" }} value="Ghana">Ghana</option>
                                <option {{ $country == "Gibraltar" ? "selected":"" }} value="Gibraltar">Gibraltar</option>
                                <option {{ $country == "Great Britain" ? "selected":"" }} value="Great Britain">Great Britain</option>
                                <option {{ $country == "Greece" ? "selected":"" }} value="Greece">Greece</option>
                                <option {{ $country == "Greenland" ? "selected":"" }} value="Greenland">Greenland</option>
                                <option {{ $country == "Grenada" ? "selected":"" }} value="Grenada">Grenada</option>
                                <option {{ $country == "Guadeloupe" ? "selected":"" }} value="Guadeloupe">Guadeloupe</option>
                                <option {{ $country == "Guam" ? "selected":"" }} value="Guam">Guam</option>
                                <option {{ $country == "Guatemala" ? "selected":"" }} value="Guatemala">Guatemala</option>
                                <option {{ $country == "Guinea" ? "selected":"" }} value="Guinea">Guinea</option>
                                <option {{ $country == "Guyana" ? "selected":"" }} value="Guyana">Guyana</option>
                                <option {{ $country == "Haiti" ? "selected":"" }} value="Haiti">Haiti</option>
                                <option {{ $country == "Hawaii" ? "selected":"" }} value="Hawaii">Hawaii</option>
                                <option {{ $country == "Honduras" ? "selected":"" }} value="Honduras">Honduras</option>
                                <option {{ $country == "Hong Kong" ? "selected":"" }} value="Hong Kong">Hong Kong</option>
                                <option {{ $country == "Hungary" ? "selected":"" }} value="Hungary">Hungary</option>
                                <option {{ $country == "Iceland" ? "selected":"" }} value="Iceland">Iceland</option>
                                <option {{ $country == "Indonesia" ? "selected":"" }} value="Indonesia">Indonesia</option>
                                <option {{ $country == "India" ? "selected":"" }} value="India">India</option>
                                <option {{ $country == "Iran" ? "selected":"" }} value="Iran">Iran</option>
                                <option {{ $country == "Iraq" ? "selected":"" }} value="Iraq">Iraq</option>
                                <option {{ $country == "Ireland" ? "selected":"" }} value="Ireland">Ireland</option>
                                <option {{ $country == "Isle of Man" ? "selected":"" }} value="Isle of Man">Isle of Man</option>
                                <option {{ $country == "Israel" ? "selected":"" }} value="Israel">Israel</option>
                                <option {{ $country == "Italy" ? "selected":"" }} value="Italy">Italy</option>
                                <option {{ $country == "Jamaica" ? "selected":"" }} value="Jamaica">Jamaica</option>
                                <option {{ $country == "Japan" ? "selected":"" }} value="Japan">Japan</option>
                                <option {{ $country == "Jordan" ? "selected":"" }} value="Jordan">Jordan</option>
                                <option {{ $country == "Kazakhstan" ? "selected":"" }} value="Kazakhstan">Kazakhstan</option>
                                <option {{ $country == "Kenya" ? "selected":"" }} value="Kenya">Kenya</option>
                                <option {{ $country == "Kiribati" ? "selected":"" }} value="Kiribati">Kiribati</option>
                                <option {{ $country == "Korea North" ? "selected":"" }} value="Korea North">Korea North</option>
                                <option {{ $country == "Korea South" ? "selected":"" }} value="Korea Sout">Korea South</option>
                                <option {{ $country == "Kuwait" ? "selected":"" }} value="Kuwait">Kuwait</option>
                                <option {{ $country == "Kyrgyzstan" ? "selected":"" }} value="Kyrgyzstan">Kyrgyzstan</option>
                                <option {{ $country == "Laos" ? "selected":"" }} value="Laos">Laos</option>
                                <option {{ $country == "Latvia" ? "selected":"" }} value="Latvia">Latvia</option>
                                <option {{ $country == "Lebanon" ? "selected":"" }} value="Lebanon">Lebanon</option>
                                <option {{ $country == "Lesotho" ? "selected":"" }} value="Lesotho">Lesotho</option>
                                <option {{ $country == "Liberia" ? "selected":"" }} value="Liberia">Liberia</option>
                                <option {{ $country == "Libya" ? "selected":"" }} value="Libya">Libya</option>
                                <option {{ $country == "Liechtenstein" ? "selected":"" }} value="Liechtenstein">Liechtenstein</option>
                                <option {{ $country == "Lithuania" ? "selected":"" }} value="Lithuania">Lithuania</option>
                                <option {{ $country == "Luxembourg" ? "selected":"" }} value="Luxembourg">Luxembourg</option>
                                <option {{ $country == "Macau" ? "selected":"" }} value="Macau">Macau</option>
                                <option {{ $country == "Macedonia" ? "selected":"" }} value="Macedonia">Macedonia</option>
                                <option {{ $country == "Madagascar" ? "selected":"" }} value="Madagascar">Madagascar</option>
                                <option {{ $country == "Malaysia" ? "selected":"" }} value="Malaysia">Malaysia</option>
                                <option {{ $country == "Malawi" ? "selected":"" }} value="Malawi">Malawi</option>
                                <option {{ $country == "Maldives" ? "selected":"" }} value="Maldives">Maldives</option>
                                <option {{ $country == "Mali" ? "selected":"" }} value="Mali">Mali</option>
                                <option {{ $country == "Malta" ? "selected":"" }} value="Malta">Malta</option>
                                <option {{ $country == "Marshall Islands" ? "selected":"" }} value="Marshall Islands">Marshall Islands</option>
                                <option {{ $country == "Martinique" ? "selected":"" }} value="Martinique">Martinique</option>
                                <option {{ $country == "Mauritania" ? "selected":"" }} value="Mauritania">Mauritania</option>
                                <option {{ $country == "Mauritius" ? "selected":"" }} value="Mauritius">Mauritius</option>
                                <option {{ $country == "Mayotte" ? "selected":"" }} value="Mayotte">Mayotte</option>
                                <option {{ $country == "Mexico" ? "selected":"" }} value="Mexico">Mexico</option>
                                <option {{ $country == "Midway Islands" ? "selected":"" }} value="Midway Islands">Midway Islands</option>
                                <option {{ $country == "Moldova" ? "selected":"" }} value="Moldova">Moldova</option>
                                <option {{ $country == "Monaco" ? "selected":"" }} value="Monaco">Monaco</option>
                                <option {{ $country == "Mongolia" ? "selected":"" }} value="Mongolia">Mongolia</option>
                                <option {{ $country == "Montserrat" ? "selected":"" }} value="Montserrat">Montserrat</option>
                                <option {{ $country == "Morocco" ? "selected":"" }} value="Morocco">Morocco</option>
                                <option {{ $country == "Mozambique" ? "selected":"" }} value="Mozambique">Mozambique</option>
                                <option {{ $country == "Myanmar" ? "selected":"" }} value="Myanmar">Myanmar</option>
                                <option {{ $country == "Nambia" ? "selected":"" }} value="Nambia">Nambia</option>
                                <option {{ $country == "Nauru" ? "selected":"" }} value="Nauru">Nauru</option>
                                <option {{ $country == "Nepal" ? "selected":"" }} value="Nepal">Nepal</option>
                                <option {{ $country == "Netherland Antilles" ? "selected":"" }} value="Netherland Antilles">Netherland Antilles</option>
                                <option {{ $country == "Netherlands (Holland, Europe)" ? "selected":"" }} value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option {{ $country == "Nevis" ? "selected":"" }} value="Nevis">Nevis</option>
                                <option {{ $country == "New Caledonia" ? "selected":"" }} value="New Caledonia">New Caledonia</option>
                                <option {{ $country == "New Zealand" ? "selected":"" }} value="New Zealand">New Zealand</option>
                                <option {{ $country == "Nicaragua" ? "selected":"" }} value="Nicaragua">Nicaragua</option>
                                <option {{ $country == "Niger" ? "selected":"" }} value="Niger">Niger</option>
                                <option {{ $country == "Nigeria" ? "selected":"" }} value="Nigeria">Nigeria</option>
                                <option {{ $country == "Niue" ? "selected":"" }} value="Niue">Niue</option>
                                <option {{ $country == "Norfolk Island" ? "selected":"" }} value="Norfolk Island">Norfolk Island</option>
                                <option {{ $country == "Norway" ? "selected":"" }} value="Norway">Norway</option>
                                <option {{ $country == "Oman" ? "selected":"" }} value="Oman">Oman</option>
                                <option {{ $country == "Pakistan" ? "selected":"" }} value="Pakistan">Pakistan</option>
                                <option {{ $country == "Palau Island" ? "selected":"" }} value="Palau Island">Palau Island</option>
                                <option {{ $country == "Palestine" ? "selected":"" }} value="Palestine">Palestine</option>
                                <option {{ $country == "Panama" ? "selected":"" }} value="Panama">Panama</option>
                                <option {{ $country == "Papua New Guinea" ? "selected":"" }} value="Papua New Guinea">Papua New Guinea</option>
                                <option {{ $country == "Paraguay" ? "selected":"" }} value="Paraguay">Paraguay</option>
                                <option {{ $country == "Peru" ? "selected":"" }} value="Peru">Peru</option>
                                <option {{ $country == "Philippines" ? "selected":"" }} value="Phillipines">Philippines</option>
                                <option {{ $country == "Pitcairn Island" ? "selected":"" }} value="Pitcairn Island">Pitcairn Island</option>
                                <option {{ $country == "Poland" ? "selected":"" }} value="Poland">Poland</option>
                                <option {{ $country == "Portugal" ? "selected":"" }} value="Portugal">Portugal</option>
                                <option {{ $country == "Puerto Rico" ? "selected":"" }} value="Puerto Rico">Puerto Rico</option>
                                <option {{ $country == "Qatar" ? "selected":"" }} value="Qatar">Qatar</option>
                                <option {{ $country == "Republic of Montenegro" ? "selected":"" }} value="Republic of Montenegro">Republic of Montenegro</option>
                                <option {{ $country == "Republic of Serbia" ? "selected":"" }} value="Republic of Serbia">Republic of Serbia</option>
                                <option {{ $country == "Reunion" ? "selected":"" }} value="Reunion">Reunion</option>
                                <option {{ $country == "Romania" ? "selected":"" }} value="Romania">Romania</option>
                                <option {{ $country == "Russia" ? "selected":"" }} value="Russia">Russia</option>
                                <option {{ $country == "Rwanda" ? "selected":"" }} value="Rwanda">Rwanda</option>
                                <option {{ $country == "St Barthelemy" ? "selected":"" }} value="St Barthelemy">St Barthelemy</option>
                                <option {{ $country == "St Eustatius" ? "selected":"" }} value="St Eustatius">St Eustatius</option>
                                <option {{ $country == "St Helena" ? "selected":"" }} value="St Helena">St Helena</option>
                                <option {{ $country == "St Kitts-Nevis" ? "selected":"" }} value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option {{ $country == "St Lucia" ? "selected":"" }} value="St Lucia">St Lucia</option>
                                <option {{ $country == "St Maarten" ? "selected":"" }} value="St Maarten">St Maarten</option>
                                <option {{ $country == "St Pierre & Miquelon" ? "selected":"" }} value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option {{ $country == "St Vincent & Grenadines" ? "selected":"" }} value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option {{ $country == "Saipan" ? "selected":"" }} value="Saipan">Saipan</option>
                                <option {{ $country == "Samoa" ? "selected":"" }} value="Samoa">Samoa</option>
                                <option {{ $country == "Samoa American" ? "selected":"" }} value="Samoa American">Samoa American</option>
                                <option {{ $country == "San Marino" ? "selected":"" }} value="San Marino">San Marino</option>
                                <option {{ $country == "Sao Tome & Principe" ? "selected":"" }} value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option {{ $country == "Saudi Arabia" ? "selected":"" }} value="Saudi Arabia">Saudi Arabia</option>
                                <option {{ $country == "Senegal" ? "selected":"" }} value="Senegal">Senegal</option>
                                <option {{ $country == "Seychelles" ? "selected":"" }} value="Seychelles">Seychelles</option>
                                <option {{ $country == "Sierra Leone" ? "selected":"" }} value="Sierra Leone">Sierra Leone</option>
                                <option {{ $country == "Singapore" ? "selected":"" }} value="Singapore">Singapore</option>
                                <option {{ $country == "Slovakia" ? "selected":"" }} value="Slovakia">Slovakia</option>
                                <option {{ $country == "Slovenia" ? "selected":"" }} value="Slovenia">Slovenia</option>
                                <option {{ $country == "Solomon Islands" ? "selected":"" }} value="Solomon Islands">Solomon Islands</option>
                                <option {{ $country == "Somalia" ? "selected":"" }} value="Somalia">Somalia</option>
                                <option {{ $country == "South Africa" ? "selected":"" }} value="South Africa">South Africa</option>
                                <option {{ $country == "Spain" ? "selected":"" }} value="Spain">Spain</option>
                                <option {{ $country == "Sri Lanka" ? "selected":"" }} value="Sri Lanka">Sri Lanka</option>
                                <option {{ $country == "Sudan" ? "selected":"" }} value="Sudan">Sudan</option>
                                <option {{ $country == "Suriname" ? "selected":"" }} value="Suriname">Suriname</option>
                                <option {{ $country == "Swaziland" ? "selected":"" }} value="Swaziland">Swaziland</option>
                                <option {{ $country == "Sweden" ? "selected":"" }} value="Sweden">Sweden</option>
                                <option {{ $country == "Switzerland" ? "selected":"" }} value="Switzerland">Switzerland</option>
                                <option {{ $country == "Syria" ? "selected":"" }} value="Syria">Syria</option>
                                <option {{ $country == "Tahiti" ? "selected":"" }} value="Tahiti">Tahiti</option>
                                <option {{ $country == "Taiwan" ? "selected":"" }} value="Taiwan">Taiwan</option>
                                <option {{ $country == "Tajikistan" ? "selected":"" }} value="Tajikistan">Tajikistan</option>
                                <option {{ $country == "Tanzania" ? "selected":"" }} value="Tanzania">Tanzania</option>
                                <option {{ $country == "Thailand" ? "selected":"" }} value="Thailand">Thailand</option>
                                <option {{ $country == "Togo" ? "selected":"" }} value="Togo">Togo</option>
                                <option {{ $country == "Tokelau" ? "selected":"" }} value="Tokelau">Tokelau</option>
                                <option {{ $country == "Tonga" ? "selected":"" }} value="Tonga">Tonga</option>
                                <option {{ $country == "Trinidad & Tobago" ? "selected":"" }} value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option {{ $country == "Tunisia" ? "selected":"" }} value="Tunisia">Tunisia</option>
                                <option {{ $country == "Turkey" ? "selected":"" }} value="Turkey">Turkey</option>
                                <option {{ $country == "Turkmenistan" ? "selected":"" }} value="Turkmenistan">Turkmenistan</option>
                                <option {{ $country == "Turks & Caicos Is" ? "selected":"" }} value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option {{ $country == "Tuvalu" ? "selected":"" }} value="Tuvalu">Tuvalu</option>
                                <option {{ $country == "Uganda" ? "selected":"" }} value="Uganda">Uganda</option>
                                <option {{ $country == "United Kingdom" ? "selected":"" }} value="United Kingdom">United Kingdom</option>
                                <option {{ $country == "Ukraine" ? "selected":"" }} value="Ukraine">Ukraine</option>
                                <option {{ $country == "United Arab Emirates" ? "selected":"" }} value="United Arab Erimates">United Arab Emirates</option>
                                <option {{ $country == "United States of America" ? "selected":"" }} value="United States of America">United States of America</option>
                                <option {{ $country == "Uruguay" ? "selected":"" }} value="Uraguay">Uruguay</option>
                                <option {{ $country == "Uzbekistan" ? "selected":"" }} value="Uzbekistan">Uzbekistan</option>
                                <option {{ $country == "Vanuatu" ? "selected":"" }} value="Vanuatu">Vanuatu</option>
                                <option {{ $country == "Vatican City State" ? "selected":"" }} value="Vatican City State">Vatican City State</option>
                                <option {{ $country == "Venezuela" ? "selected":"" }} value="Venezuela">Venezuela</option>
                                <option {{ $country == "Vietnam" ? "selected":"" }} value="Vietnam">Vietnam</option>
                                <option {{ $country == "Virgin Islands (Brit)" ? "selected":"" }} value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option {{ $country == "Virgin Islands (USA)" ? "selected":"" }} value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option {{ $country == "Wake Island" ? "selected":"" }} value="Wake Island">Wake Island</option>
                                <option {{ $country == "Wallis & Futana Is" ? "selected":"" }} value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option {{ $country == "Yemen" ? "selected":"" }} value="Yemen">Yemen</option>
                                <option {{ $country == "Zaire" ? "selected":"" }} value="Zaire">Zaire</option>
                                <option {{ $country == "Zambia" ? "selected":"" }} value="Zambia">Zambia</option>
                                <option {{ $country == "Zimbabwe" ? "selected":"" }} value="Zimbabwe">Zimbabwe</option>
                                
                             </select>

                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input"  value="{{ $email }}" name="email" id="email" required placeholder="Email"/>
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $job }}" name="job" id="name"  placeholder="Job"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $company }}" name="company" id="name"  placeholder="company"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $eq }}" name="eq" id="name" required placeholder="Academic qualification"/>
                        </div>


                        
                      
            
                        <div class="form-group">
                            <span style="font-size: 13px; color: red;"> The password must contain capital letters, symbols and numbers (&*#!ّّ%^-؟\)</span>
                            <input type="text" class="form-input" name="password" id="password"  required placeholder=" Password"/>
                          
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>


                        <div class="form-group">
                            
                            <input type="text" class="form-input" name="confirm" id="passwordcon"  required placeholder="Confirm Password"/>
                            <span toggle="#passwordcon" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <input type="hidden" class="form-input" value="en" name="langa" id="name" />
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            {{-- <label for="agree-term" class="label-agree-term"><span><span></span></span> Accept Terms <a href="#" class="term-service">Terms</a></label> --}}
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" style="background-image: linear-gradient(to left, #eb7474, #e69fde);" class="form-submit" value="Register"/>
                            
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