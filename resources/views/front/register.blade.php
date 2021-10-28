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
                           
                            <div class="form-group">
                                <select class="form-input" value="{{ $country }}" name="country" id="id_country">
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