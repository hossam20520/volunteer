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

                        {{-- <input type="hidden" class="form-input" value="fullname" name="f" required id="name" /> --}}

                     

                        <div class="form-group">
                            <input type="text" class="form-input"  name="fname" value="{{ $fname }}"  id="name" placeholder="الاسم الاول "/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input"  name="lname" value="{{ $lname }}"  id="name" placeholder="الاسم الثاني "/>
                        </div>


                        <div class="form-group">
                            <input type="hidden" class="form-input"  name="fullname" value="{{ $fullname }}"  id="name" placeholder="الاسم بالكامل "/>
                        </div>

                        <div class="form-group">
                          
                             <input type="number" class="form-input" value="{{ $idpassport }}"  name="idpassport" required id="name" placeholder="الرقم القومى أو رقم جواز السفر لغير المصريين"/>
                        </div>

                 


                        {{-- <div class="form-group">
                            <input type="hidden" class="form-input"   name="lname"  value="lname" required id="name" placeholder=""/>
                        </div> --}}


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
                            <input type="hidden" class="form-input"  value="00"  required name="nationality" id="name" placeholder="الجنسية"/>


                            <select class="form-input" name="country" id="id_country">
                                <option value="EG">اختر الدولة</option>
                                <option {{ $country == "AF" ? "selected":""   }} value="AF">أفغانستان</option>
                                <option {{ $country == "AX" ? "selected":""   }} value="AX">جزر آلاند</option>
                                <option {{ $country == "AL" ? "selected":""   }} value="AL">ألبانيا</option>
                                <option {{ $country == "DZ" ? "selected":""   }} value="DZ">الجزائر</option>
                                <option {{ $country == "AS" ? "selected":""   }} value="AS">ساموا الأمريكية</option>
                                <option {{ $country == "AD" ? "selected":""   }} value="AD">أندورا</option>
                                <option {{ $country == "AO" ? "selected":""   }} value="AO">أنغولا</option>
                                <option {{ $country == "AI" ? "selected":""   }} value="AI">أنغيلا</option>
                                <option {{ $country == "AQ" ? "selected":""   }} value="AQ">أنتاركتيكا</option>
                                <option {{ $country == "AG" ? "selected":""   }} value="AG">أنتيغوا وبربودا</option>
                                <option {{ $country == "AR" ? "selected":""   }} value="AR">الأرجنتين</option>
                                <option {{ $country == "AM" ? "selected":""   }} value="AM">أرمينيا</option>
                                <option {{ $country == "AW" ? "selected":""   }} value="AW">أروبا</option>
                                <option {{ $country == "AU" ? "selected":""   }} value="AU">أستراليا</option>
                                <option {{ $country == "AT" ? "selected":""   }} value="AT">النمسا</option>
                                <option {{ $country == "AZ" ? "selected":""   }} value="AZ">أذربيجان</option>
                                <option {{ $country == "BS" ? "selected":""   }} value="BS">جزر البهاما</option>
                                <option {{ $country == "BH" ? "selected":""   }} value="BH">البحرين</option>
                                <option {{ $country == "BD" ? "selected":""   }} value="BD">بنغلاديش</option>
                                <option {{ $country == "BB" ? "selected":""   }} value="BB">بربادوس</option>
                                <option {{ $country == "BY" ? "selected":""   }} value="BY">بيلاروسيا</option>
                                <option {{ $country == "BE" ? "selected":""   }} value="BE">بلجيكا</option>
                                <option {{ $country == "BZ" ? "selected":""   }} value="BZ">بليز</option>
                                <option {{ $country == "BJ" ? "selected":""   }} value="BJ">بنين</option>
                                <option {{ $country == "BM" ? "selected":""   }} value="BM">برمودا</option>
                                <option {{ $country == "BT" ? "selected":""   }} value="BT">بوتان</option>
                                <option {{ $country == "BO" ? "selected":""   }} value="BO">بوليفيا (دولة متعددة الجنسيات)</option>
                                <option {{ $country == "BQ" ? "selected":""   }} value="BQ">بونير، سينت أوستاتيوس وسابا</option>
                                <option {{ $country == "BA" ? "selected":""   }} value="BA">البوسنة والهرسك</option>
                                <option {{ $country == "BW" ? "selected":""   }} value="BW">بوتسوانا</option>
                                <option {{ $country == "BV" ? "selected":""   }} value="BV">جزيرة بوجيت</option>
                                <option {{ $country == "BR" ? "selected":""   }} value="BR">البرازيل</option>
                                <option {{ $country == "IO" ? "selected":""   }} value="IO">إقليم المحيط البريطاني الهندي</option>
                                <option {{ $country == "BN" ? "selected":""   }} value="BN">بروناي دار السلام</option>
                                <option {{ $country == "BG" ? "selected":""   }} value="BG">بلغاريا</option>
                                <option {{ $country == "BF" ? "selected":""   }} value="BF">بوركينا فاسو</option>
                                <option {{ $country == "BI" ? "selected":""   }} value="BI">بوروندي</option>
                                <option {{ $country == "CV" ? "selected":""   }} value="CV">كابو فيردي</option>
                                <option {{ $country == "KH" ? "selected":""   }} value="KH">كمبوديا</option>
                                <option {{ $country == "CM" ? "selected":""   }} value="CM">الكاميرون</option>
                                <option {{ $country == "CA" ? "selected":""   }} value="CA">كندا</option>
                                <option {{ $country == "KY" ? "selected":""   }} value="KY">جزر كايمان</option>
                                <option {{ $country == "CF" ? "selected":""   }} value="CF">جمهورية افريقيا الوسطى</option>
                                <option {{ $country == "TD" ? "selected":""   }} value="TD">تشاد</option>
                                <option {{ $country == "CL" ? "selected":""   }} value="CL">شيلي</option>
                                <option {{ $country == "CN" ? "selected":""   }} value="CN">الصين</option>
                                <option {{ $country == "CX" ? "selected":""   }} value="CX">جزيرة الكريسماس</option>
                                <option {{ $country == "CC" ? "selected":""   }} value="CC">جزر كوكوس (كيلينغ)</option>
                                <option {{ $country == "CO" ? "selected":""   }} value="CO">كولومبيا</option>
                                <option {{ $country == "KM" ? "selected":""   }} value="KM">جزر القمر</option>
                                <option {{ $country == "CG" ? "selected":""   }} value="CG">كونغو</option>
                                <option {{ $country == "CD" ? "selected":""   }} value="CD">الكونغو (الجمهورية الديمقراطية)</option>
                                <option {{ $country == "CK" ? "selected":""   }} value="CK">جزر كوك</option>
                                <option {{ $country == "CR" ? "selected":""   }} value="CR">كوستا ريكا</option>
                                <option {{ $country == "CI" ? "selected":""   }} value="CI">ساحل العاج.</option>
                                <option {{ $country == "HR" ? "selected":""   }} value="HR">كرواتيا</option>
                                <option {{ $country == "CU" ? "selected":""   }} value="CU">كوبا</option>
                                <option {{ $country == "CW" ? "selected":""   }} value="CW">كوراساو.</option>
                                <option {{ $country == "CY" ? "selected":""   }} value="CY">قبرص</option>
                                <option {{ $country == "CZ" ? "selected":""   }} value="CZ">تشيكيا</option>
                                <option {{ $country == "DK" ? "selected":""   }} value="DK">الدنمارك</option>
                                <option {{ $country == "DJ" ? "selected":""   }} value="DJ">جيبوتي</option>
                                <option {{ $country == "DM" ? "selected":""   }} value="DM">دومينيكا</option>
                                <option {{ $country == "DO" ? "selected":""   }} value="DO">جمهورية الدومينيكان</option>
                                <option {{ $country == "EC" ? "selected":""   }} value="EC">الإكوادور</option>
                                <option {{ $country == "EG" ? "selected":""   }} value="EG">مصر</option>
                                <option {{ $country == "SV" ? "selected":""   }} value="SV">السلفادور</option>
                                <option {{ $country == "GQ" ? "selected":""   }} value="GQ">غينيا الإستوائية</option>
                                <option {{ $country == "ER" ? "selected":""   }} value="ER">إريتريا</option>
                                <option {{ $country == "EE" ? "selected":""   }} value="EE">إستونيا</option>
                                <option {{ $country == "SZ" ? "selected":""   }} value="SZ">سوازيلاند</option>
                                <option {{ $country == "ET" ? "selected":""   }} value="ET">أثيوبيا</option>
                                <option {{ $country == "FK" ? "selected":""   }} value="FK">جزر فوكلاند (مالفيناس)</option>
                                <option {{ $country == "FO" ? "selected":""   }} value="FO">جزر فاروس</option>
                                <option {{ $country == "FJ" ? "selected":""   }} value="FJ">فيجي</option>
                                <option {{ $country == "FI" ? "selected":""   }} value="FI">فنلندا</option>
                                <option {{ $country == "FR" ? "selected":""   }} value="FR">فرنسا</option>
                                <option {{ $country == "GF" ? "selected":""   }} value="GF">غيانا الفرنسية</option>
                                <option {{ $country == "PF" ? "selected":""   }} value="PF">بولينيزيا الفرنسية</option>
                                <option {{ $country == "TF" ? "selected":""   }} value="TF">المناطق الجنوبية لفرنسا</option>
                                <option {{ $country == "GA" ? "selected":""   }} value="GA">غابون</option>
                                <option {{ $country == "GM" ? "selected":""   }} value="GM">غامبيا</option>
                                <option {{ $country == "GE" ? "selected":""   }} value="GE">جورجيا</option>
                                <option {{ $country == "DE" ? "selected":""   }} value="DE">ألمانيا</option>
                                <option {{ $country == "GH" ? "selected":""   }} value="GH">غانا</option>
                                <option {{ $country == "GI" ? "selected":""   }} value="GI">جبل طارق</option>
                                <option {{ $country == "GR" ? "selected":""   }} value="GR">اليونان</option>
                                <option {{ $country == "GL" ? "selected":""   }} value="GL">الأرض الخضراء</option>
                                <option {{ $country == "GD" ? "selected":""   }} value="GD">غرينادا</option>
                                <option {{ $country == "GP" ? "selected":""   }} value="GP">غواديلوب</option>
                                <option {{ $country == "GU" ? "selected":""   }} value="GU">غوام</option>
                                <option {{ $country == "GT" ? "selected":""   }} value="GT">غواتيمالا</option>
                                <option {{ $country == "GG" ? "selected":""   }} value="GG">غيرنسي</option>
                                <option {{ $country == "GN" ? "selected":""   }} value="GN">غينيا</option>
                                <option {{ $country == "GW" ? "selected":""   }} value="GW">غينيا بيساو</option>
                                <option {{ $country == "GY" ? "selected":""   }} value="GY">غيانا</option>
                                <option {{ $country == "HT" ? "selected":""   }} value="HT">هايتي</option>
                                <option {{ $country == "HM" ? "selected":""   }} value="HM">قلب الجزيرة وجزر ماكدونالز</option>
                                <option {{ $country == "VA" ? "selected":""   }} value="VA">الكرسي الرسولي</option>
                                <option {{ $country == "HN" ? "selected":""   }} value="HN">هندوراس</option>
                                <option {{ $country == "HK" ? "selected":""   }} value="HK">هونج كونج</option>
                                <option {{ $country == "HU" ? "selected":""   }} value="HU">هنغاريا</option>
                                <option {{ $country == "IS" ? "selected":""   }} value="IS">أيسلندا</option>
                                <option {{ $country == "IN" ? "selected":""   }} value="IN">الهند</option>
                                <option {{ $country == "ID" ? "selected":""   }} value="ID">إندونيسيا</option>
                                <option {{ $country == "IR" ? "selected":""   }} value="IR">إيران (جمهورية)</option>
                                <option {{ $country == "IQ" ? "selected":""   }} value="IQ">العراق</option>
                                <option {{ $country == "IE" ? "selected":""   }} value="IE">أيرلندا</option>
                                <option {{ $country == "IM" ? "selected":""   }} value="IM">جزيرة آيل أوف مان</option>
                                <option {{ $country == "IL" ? "selected":""   }} value="IL">إسرائيل</option>
                                <option {{ $country == "IT" ? "selected":""   }} value="IT">إيطاليا</option>
                                <option {{ $country == "JM" ? "selected":""   }} value="JM">جامايكا</option>
                                <option {{ $country == "JP" ? "selected":""   }} value="JP">اليابان</option>
                                <option {{ $country == "JE" ? "selected":""   }} value="JE">جيرسي</option>
                                <option {{ $country == "JO" ? "selected":""   }} value="JO">الأردن</option>
                                <option {{ $country == "KZ" ? "selected":""   }} value="KZ">كازاخستان</option>
                                <option {{ $country == "KE" ? "selected":""   }} value="KE">كينيا</option>
                                <option {{ $country == "KI" ? "selected":""   }} value="KI">كيريباتي</option>
                                <option {{ $country == "KP" ? "selected":""   }} value="KP">كوريا (جمهورية الشعب الديمقراطي)</option>
                                <option {{ $country == "KR" ? "selected":""   }} value="KR">كوريا (جمهورية)</option>
                                <option {{ $country == "KW" ? "selected":""   }} value="KW">الكويت</option>
                                <option {{ $country == "KG" ? "selected":""   }} value="KG">قيرغيزستان</option>
                                <option {{ $country == "LA" ? "selected":""   }} value="LA">جمهورية لاو الديمقراطية الشعبية</option>
                                <option {{ $country == "LV" ? "selected":""   }} value="LV">لاتفيا</option>
                                <option {{ $country == "LB" ? "selected":""   }} value="LB">لبنان</option>
                                <option {{ $country == "LS" ? "selected":""   }} value="LS">ليسوتو</option>
                                <option {{ $country == "LR" ? "selected":""   }} value="LR">ليبيريا</option>
                                <option {{ $country == "LY" ? "selected":""   }} value="LY">ليبيا</option>
                                <option {{ $country == "LI" ? "selected":""   }} value="LI">ليختنشتاين</option>
                                <option {{ $country == "LT" ? "selected":""   }} value="LT">ليتوانيا</option>
                                <option {{ $country == "LU" ? "selected":""   }} value="LU">لوكسمبورغ</option>
                                <option {{ $country == "MO" ? "selected":""   }} value="MO">ماكاو</option>
                                <option {{ $country == "MG" ? "selected":""   }} value="MG">مدغشقر</option>
                                <option {{ $country == "MW" ? "selected":""   }} value="MW">ملاوي</option>
                                <option {{ $country == "MY" ? "selected":""   }} value="MY">ماليزيا</option>
                                <option {{ $country == "MV" ? "selected":""   }} value="MV">جزر المالديف</option>
                                <option {{ $country == "ML" ? "selected":""   }} value="ML">مالي</option>
                                <option {{ $country == "MT" ? "selected":""   }} value="MT">مالطا</option>
                                <option {{ $country == "MH" ? "selected":""   }} value="MH">جزر مارشال</option>
                                <option {{ $country == "MQ" ? "selected":""   }} value="MQ">مارتينيك</option>
                                <option {{ $country == "MR" ? "selected":""   }} value="MR">موريتانيا</option>
                                <option {{ $country == "MU" ? "selected":""   }} value="MU">موريشيوس</option>
                                <option {{ $country == "YT" ? "selected":""   }} value="YT">مايوت</option>
                                <option {{ $country == "MX" ? "selected":""   }} value="MX">المكسيك</option>
                                <option {{ $country == "FM" ? "selected":""   }} value="FM">ميكرونيزيا (الولايات الفيدرالية)</option>
                                <option {{ $country == "MD" ? "selected":""   }} value="MD">مولدافيا (جمهورية)</option>
                                <option {{ $country == "MC" ? "selected":""   }} value="MC">موناكو</option>
                                <option {{ $country == "MN" ? "selected":""   }} value="MN">منغوليا</option>
                                <option {{ $country == "ME" ? "selected":""   }} value="ME">الجبل الأسود</option>
                                <option {{ $country == "MS" ? "selected":""   }} value="MS">مونتسيرات</option>
                                <option {{ $country == "MA" ? "selected":""   }} value="MA">المغرب</option>
                                <option {{ $country == "MZ" ? "selected":""   }} value="MZ">موزمبيق</option>
                                <option {{ $country == "MM" ? "selected":""   }} value="MM">ميانمار</option>
                                <option {{ $country == "NA" ? "selected":""   }} value="NA">ناميبيا</option>
                                <option {{ $country == "NR" ? "selected":""   }} value="NR">ناورو</option>
                                <option {{ $country == "NP" ? "selected":""   }} value="NP">نيبال</option>
                                <option {{ $country == "NL" ? "selected":""   }} value="NL">هولندا</option>
                                <option {{ $country == "NC" ? "selected":""   }} value="NC">كاليدونيا الجديدة</option>
                                <option {{ $country == "NZ" ? "selected":""   }} value="NZ">نيوزيلاندا</option>
                                <option {{ $country == "NI" ? "selected":""   }} value="NI">نيكاراغوا</option>
                                <option {{ $country == "NE" ? "selected":""   }} value="NE">النيجر</option>
                                <option {{ $country == "NG" ? "selected":""   }} value="NG">نيجيريا</option>
                                <option {{ $country == "NU" ? "selected":""   }} value="NU">نييوي</option>
                                <option {{ $country == "NF" ? "selected":""   }} value="NF">جزيرة نورفولك</option>
                                <option {{ $country == "MK" ? "selected":""   }} value="MK">مقدونيا الشمالية</option>
                                <option {{ $country == "MP" ? "selected":""   }} value="MP">جزر مريانا الشمالية</option>
                                <option {{ $country == "NO" ? "selected":""   }} value="NO">النرويج</option>
                                <option {{ $country == "OM" ? "selected":""   }} value="OM">سلطنة عمان</option>
                                <option {{ $country == "PK" ? "selected":""   }} value="PK">باكستان</option>
                                <option {{ $country == "PW" ? "selected":""   }} value="PW">بالاو</option>
                                <option {{ $country == "PS" ? "selected":""   }} value="PS">فلسطين، ولاية</option>
                                <option {{ $country == "PA" ? "selected":""   }} value="PA">بنما</option>
                                <option {{ $country == "PG" ? "selected":""   }} value="PG">بابوا غينيا الجديدة</option>
                                <option {{ $country == "PY" ? "selected":""   }} value="PY">باراجواي</option>
                                <option {{ $country == "PE" ? "selected":""   }} value="PE">بيرو</option>
                                <option {{ $country == "PH" ? "selected":""   }} value="PH">فيلبيني</option>
                                <option {{ $country == "PN" ? "selected":""   }} value="PN">بيتكيرن</option>
                                <option {{ $country == "PL" ? "selected":""   }} value="PL">بولندا</option>
                                <option {{ $country == "PT" ? "selected":""   }} value="PT">البرتغال</option>
                                <option {{ $country == "PR" ? "selected":""   }} value="PR">بويرتو ريكو</option>
                                <option {{ $country == "QA" ? "selected":""   }} value="QA">دولة قطر</option>
                                <option {{ $country == "RE" ? "selected":""   }} value="RE">رونيون</option>
                                <option {{ $country == "RO" ? "selected":""   }} value="RO">رومانيا</option>
                                <option {{ $country == "RU" ? "selected":""   }} value="RU">الاتحاد الروسي</option>
                                <option {{ $country == "RW" ? "selected":""   }} value="RW">رواندا</option>
                                <option {{ $country == "BL" ? "selected":""   }} value="BL">سانت بارثيم </option>
                                <option {{ $country == "SH" ? "selected":""   }} value="SH">سانت هيلانة، الصعود و ترابيسان دا كونا</option>
                                <option {{ $country == "KN" ? "selected":""   }} value="KN">سانت كيتس ونيفيس</option>
                                <option {{ $country == "LC" ? "selected":""   }} value="LC">القديسة لوسيا</option>
                                <option {{ $country == "MF" ? "selected":""   }} value="MF">سانت مارتن (الجزء الفرنسي)</option>
                                <option {{ $country == "PM" ? "selected":""   }} value="PM">سانت بيير وميكلون</option>
                                <option {{ $country == "VC" ? "selected":""   }} value="VC">سانت فنسنت وجزر غرينادين</option>
                                <option {{ $country == "WS" ? "selected":""   }} value="WS">ساموا</option>
                                <option {{ $country == "SM" ? "selected":""   }} value="SM">سان مارينو</option>
                                <option {{ $country == "ST" ? "selected":""   }} value="ST">ساو تومي وبرينسيبي</option>
                                <option {{ $country == "SA" ? "selected":""   }} value="SA">المملكة العربية السعودية</option>
                                <option {{ $country == "SN" ? "selected":""   }} value="SN">السنغال</option>
                                <option {{ $country == "RS" ? "selected":""   }} value="RS">صربيا</option>
                                <option {{ $country == "SC" ? "selected":""   }} value="SC">سيشيل</option>
                                <option {{ $country == "SL" ? "selected":""   }} value="SL">سيرا ليون</option>
                                <option {{ $country == "SG" ? "selected":""   }} value="SG">سنغافورة</option>
                                <option {{ $country == "SX" ? "selected":""   }} value="SX">سينت مارتن (الجزء الهولندي)</option>
                                <option {{ $country == "SK" ? "selected":""   }} value="SK">سلوفاكيا</option>
                                <option {{ $country == "SI" ? "selected":""   }} value="SI">سلوفينيا</option>
                                <option {{ $country == "SB" ? "selected":""   }} value="SB">جزر سليمان</option>
                                <option {{ $country == "SO" ? "selected":""   }} value="SO">الصومال</option>
                                <option {{ $country == "ZA" ? "selected":""   }} value="ZA">جنوب أفريقيا</option>
                                <option {{ $country == "GS" ? "selected":""   }} value="GS">جورجيا الجنوبية وجزر ساندويتش الجنوبية</option>
                                <option {{ $country == "SS" ? "selected":""   }} value="SS">جنوب السودان</option>
                                <option {{ $country == "ES" ? "selected":""   }} value="ES">إسبانيا</option>
                                <option {{ $country == "LK" ? "selected":""   }} value="LK">سيريلانكا</option>
                                <option {{ $country == "SD" ? "selected":""   }} value="SD">السودان</option>
                                <option {{ $country == "SR" ? "selected":""   }} value="SR">سورينام</option>
                                <option {{ $country == "SJ" ? "selected":""   }} value="SJ">سفالبارد وجان ماين</option>
                                <option {{ $country == "SE" ? "selected":""   }} value="SE">السويد</option>
                                <option {{ $country == "CH" ? "selected":""   }} value="CH">سويسرا</option>
                                <option {{ $country == "SY" ? "selected":""   }} value="SY">الجمهورية العربية السورية</option>
                                <option {{ $country == "TW" ? "selected":""   }} value="TW">تايوان</option>
                                <option {{ $country == "TJ" ? "selected":""   }} value="TJ">طاجيكستان</option>
                                <option {{ $country == "TZ" ? "selected":""   }} value="TZ">تنزانيا، جمهورية المملكة المتحدة</option>
                                <option {{ $country == "TH" ? "selected":""   }} value="TH">تايلاند</option>
                                <option {{ $country == "TL" ? "selected":""   }} value="TL">تيمور - ليشتي</option>
                                <option {{ $country == "TG" ? "selected":""   }} value="TG">توجو</option>
                                <option {{ $country == "TK" ? "selected":""   }} value="TK">توكيلاو</option>
                                <option {{ $country == "TO" ? "selected":""   }} value="TO">تونغا</option>
                                <option {{ $country == "TT" ? "selected":""   }} value="TT">ترينداد وتوباغو</option>
                                <option {{ $country == "TN" ? "selected":""   }} value="TN">تونس</option>
                                <option {{ $country == "TR" ? "selected":""   }} value="TR">ديك رومى</option>
                                <option {{ $country == "TM" ? "selected":""   }} value="TM">تركمانستان</option>
                                <option {{ $country == "TC" ? "selected":""   }} value="TC">جزر تركس وكايكوس</option>
                                <option {{ $country == "TV" ? "selected":""   }} value="TV">توفالو</option>
                                <option {{ $country == "UG" ? "selected":""   }} value="UG">أوغندا</option>
                                <option {{ $country == "UA" ? "selected":""   }} value="UA">أوكرانيا</option>
                                <option {{ $country == "AE" ? "selected":""   }} value="AE">الإمارات العربية المتحدة</option>
                                <option {{ $country == "GB" ? "selected":""   }} value="GB">المملكة المتحدة</option>
                                <option {{ $country == "US" ? "selected":""   }} value="US">الولايات المتحدة الأمريكية</option>
                                <option {{ $country == "UM" ? "selected":""   }} value="UM">جزر الولايات المتحدة البعيدة الصغرى</option>
                                <option {{ $country == "UY" ? "selected":""   }} value="UY">أوروجواي</option>
                                <option {{ $country == "UZ" ? "selected":""   }} value="UZ">أوزبكستان</option>
                                <option {{ $country == "VU" ? "selected":""   }} value="VU">فانواتو</option>
                                <option {{ $country == "VE" ? "selected":""   }} value="VE">فنزويلا (جمهورية البوليفارية)</option>
                                <option {{ $country == "VN" ? "selected":""   }} value="VN">فييت نام</option>
                                <option {{ $country == "VG" ? "selected":""   }} value="VG">جزر العذراء البريطانية</option>
                                <option {{ $country == "VI" ? "selected":""   }} value="VI">جزر فيرجن (الولايات المتحدة)</option>
                                <option {{ $country == "WF" ? "selected":""   }} value="WF">واليس وفوتونا</option>
                                <option {{ $country == "EH" ? "selected":""   }} value="EH">الصحراء الغربية</option>
                                <option {{ $country == "YE" ? "selected":""   }} value="YE">اليمن</option>
                                <option {{ $country == "ZM" ? "selected":""   }} value="ZM">زامبيا</option>
                                <option {{ $country == "ZW" ? "selected":""   }} value="ZW">زيمبابوي</option>
                                
                            </select>


                        </div>
              


                  

                

                        <div class="form-group">
                            
                            <select class="form-input" value="{{ $city }}" required  name="city">
                                <option value="Cairo"> المحافظة </option>
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