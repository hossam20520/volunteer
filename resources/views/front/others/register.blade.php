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
                    <form method="POST" id="signup-form"  action="{{ route('registerPostNot') }}" class="signup-form">
                        @csrf

                        <input type="hidden" class="form-input" value="{{ isset($_GET['checkout']) }}" name="checkout" required id="name"/>

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
                            
                            <select class="form-input" value="{{ $city }}" required  name="city">
                                <option>اختر المحافظة </option>
                              <option value="  القاهرة "> القاهرة  </option>
                              <option value=" الأسكندرية "> الأسكندرية </option>
                              <option value=" الإسماعيلية"> الإسماعيلية </option>
                              <option value=" القليوبية "> القليوبية </option>
                              <option value=" أسوان  "> أسوان   </option>
                              <option value=" أسيوط ">  أسيوط  </option>
                              <option value=" البحر الاحمر "> البحر الاحمر </option>
                              <option value=" الأقصر "> الأقصر </option>
                              <option value=" مرسى مطروح"> مرسى مطروح</option>
                              <option value=" بور سعيد"> بور سعيد</option>
                              <option value=" السويس"> السويس </option>
                              <option value=" الشرقية"> الشرقية</option>
                              <option value=" دمياط"> دمياط</option>
                              <option value=" الدقهلية"> الدقهلية</option>
                              <option value=" كفر الشيخ"> كفر الشيخ</option>
                              <option value=" الغربية"> الغربية</option>
                              <option value=" المنوفية"> المنوفية</option>
                              <option value=" البحيرة"> البحيرة</option>
                              <option value=" الفيوم"> الفيوم </option>
                              <option value=" بنى سويف "> بنى سويف </option>
                              <option value=" المنيا"> المنيا</option>
                              <option value=" اسيوط"> اسيوط </option>
                              <option value=" سوهاج"> سوهاج</option>
                              <option value=" الاقصر"> الاقصر</option>
                              <option value=" البحيرة">البحيرة</option>
                              <option value=" الوادى الجديد"> الوادى الجديد</option>
                              <option value="فرع قنا "> قنا </option>
                           


                            </select>

                            
                          </div>

                
                        <div class="form-group">
                           
                            <select class="form-input" value="{{ $country }}" id="country" name="country">
                               
                                <option value="" disabled selected>إختر</option>
                                <option value="أفغانستان">أفغانستان</option>
                                <option value="ألبانيا">ألبانيا</option>
                                <option value="الجزائر">الجزائر</option>
                                <option value="أندورا">أندورا</option>
                                <option value="أنغولا">أنغولا</option>
                                <option value="أنتيغوا وباربودا">أنتيغوا وباربودا</option>
                                <option value="الأرجنتين">الأرجنتين</option>
                                <option value="أرمينيا">أرمينيا</option>
                                <option value="أستراليا">أستراليا</option>
                                <option value="النمسا">النمسا</option>
                                <option value="أذربيجان">أذربيجان</option>
                                <option value="البهاما">البهاما</option>
                                <option value="البحرين">البحرين</option>
                                <option value="بنغلاديش">بنغلاديش</option>
                                <option value="باربادوس">باربادوس</option>
                                <option value="بيلاروسيا">بيلاروسيا</option>
                                <option value="بلجيكا">بلجيكا</option>
                                <option value="بليز">بليز</option>
                                <option value="بنين">بنين</option>
                                <option value="بوتان">بوتان</option>
                                <option value="بوليفيا">بوليفيا</option>
                                <option value="البوسنة والهرسك ">البوسنة والهرسك </option>
                                <option value="بوتسوانا">بوتسوانا</option>
                                <option value="البرازيل">البرازيل</option>
                                <option value="بروناي">بروناي</option>
                                <option value="بلغاريا">بلغاريا</option>
                                <option value="بوركينا فاسو ">بوركينا فاسو </option>
                                <option value="بوروندي">بوروندي</option>
                                <option value="كمبوديا">كمبوديا</option>
                                <option value="الكاميرون">الكاميرون</option>
                                <option value="كندا">كندا</option>
                                <option value="الرأس الأخضر">الرأس الأخضر</option>
                                <option value="جمهورية أفريقيا الوسطى ">جمهورية أفريقيا الوسطى </option>
                                <option value="تشاد">تشاد</option>
                                <option value="تشيلي">تشيلي</option>
                                <option value="الصين">الصين</option>
                                <option value="كولومبيا">كولومبيا</option>
                                <option value="جزر القمر">جزر القمر</option>
                                <option value="كوستاريكا">كوستاريكا</option>
                                <option value="ساحل العاج">ساحل العاج</option>
                                <option value="كرواتيا">كرواتيا</option>
                                <option value="كوبا">كوبا</option>
                                <option value="قبرص">قبرص</option>
                                <option value="التشيك">التشيك</option>
                                <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية</option>
                                <option value="الدنمارك">الدنمارك</option>
                                <option value="جيبوتي">جيبوتي</option>
                                <option value="دومينيكا">دومينيكا</option>
                                <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
                                <option value="تيمور الشرقية ">تيمور الشرقية </option>
                                <option value="الإكوادور">الإكوادور</option>
                                <option value="مصر">مصر</option>
                                <option value="السلفادور">السلفادور</option>
                                <option value="غينيا الاستوائية">غينيا الاستوائية</option>
                                <option value="إريتريا">إريتريا</option>
                                <option value="إستونيا">إستونيا</option>
                                <option value="إثيوبيا">إثيوبيا</option>
                                <option value="فيجي">فيجي</option>
                                <option value="فنلندا">فنلندا</option>
                                <option value="فرنسا">فرنسا</option>
                                <option value="الغابون">الغابون</option>
                                <option value="غامبيا">غامبيا</option>
                                <option value="جورجيا">جورجيا</option>
                                <option value="ألمانيا">ألمانيا</option>
                                <option value="غانا">غانا</option>
                                <option value="اليونان">اليونان</option>
                                <option value="جرينادا">جرينادا</option>
                                <option value="غواتيمالا">غواتيمالا</option>
                                <option value="غينيا">غينيا</option>
                                <option value="غينيا بيساو">غينيا بيساو</option>
                                <option value="غويانا">غويانا</option>
                                <option value="هايتي">هايتي</option>
                                <option value="هندوراس">هندوراس</option>
                                <option value="المجر">المجر</option>
                                <option value="آيسلندا">آيسلندا</option>
                                <option value="الهند">الهند</option>
                                <option value="إندونيسيا">إندونيسيا</option>
                                <option value="إيران">إيران</option>
                                <option value="العراق">العراق</option>
                                <option value="جمهورية أيرلندا ">جمهورية أيرلندا </option>
                                <option value="فلسطين">فلسطين</option>
                                <option value="إيطاليا">إيطاليا</option>
                                <option value="جامايكا">جامايكا</option>
                                <option value="اليابان">اليابان</option>
                                <option value="الأردن">الأردن</option>
                                <option value="كازاخستان">كازاخستان</option>
                                <option value="كينيا">كينيا</option>
                                <option value="كيريباتي">كيريباتي</option>
                                <option value="الكويت">الكويت</option>
                                <option value="قرغيزستان">قرغيزستان</option>
                                <option value="لاوس">لاوس</option>
                                <option value="لاوس">لاوس</option>
                                <option value="لاتفيا">لاتفيا</option>
                                <option value="لبنان">لبنان</option>
                                <option value="ليسوتو">ليسوتو</option>
                                <option value="ليبيريا">ليبيريا</option>
                                <option value="ليبيا">ليبيا</option>
                                <option value="ليختنشتاين">ليختنشتاين</option>
                                <option value="ليتوانيا">ليتوانيا</option>
                                <option value="لوكسمبورغ">لوكسمبورغ</option>
                                <option value="مدغشقر">مدغشقر</option>
                                <option value="مالاوي">مالاوي</option>
                                <option value="ماليزيا">ماليزيا</option>
                                <option value="جزر المالديف">جزر المالديف</option>
                                <option value="مالي">مالي</option>
                                <option value="مالطا">مالطا</option>
                                <option value="جزر مارشال">جزر مارشال</option>
                                <option value="موريتانيا">موريتانيا</option>
                                <option value="موريشيوس">موريشيوس</option>
                                <option value="المكسيك">المكسيك</option>
                                <option value="مايكرونيزيا">مايكرونيزيا</option>
                                <option value="مولدوفا">مولدوفا</option>
                                <option value="موناكو">موناكو</option>
                                <option value="منغوليا">منغوليا</option>
                                <option value="الجبل الأسود">الجبل الأسود</option>
                                <option value="المغرب">المغرب</option>
                                <option value="موزمبيق">موزمبيق</option>
                                <option value="بورما">بورما</option>
                                <option value="ناميبيا">ناميبيا</option>
                                <option value="ناورو">ناورو</option>
                                <option value="نيبال">نيبال</option>
                                <option value="هولندا">هولندا</option>
                                <option value="نيوزيلندا">نيوزيلندا</option>
                                <option value="نيكاراجوا">نيكاراجوا</option>
                                <option value="النيجر">النيجر</option>
                                <option value="نيجيريا">نيجيريا</option>
                                <option value="كوريا الشمالية ">كوريا الشمالية </option>
                                <option value="النرويج">النرويج</option>
                                <option value="سلطنة عمان">سلطنة عمان</option>
                                <option value="باكستان">باكستان</option>
                                <option value="بالاو">بالاو</option>
                                <option value="بنما">بنما</option>
                                <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
                                <option value="باراغواي">باراغواي</option>
                                <option value="بيرو">بيرو</option>
                                <option value="الفلبين">الفلبين</option>
                                <option value="بولندا">بولندا</option>
                                <option value="البرتغال">البرتغال</option>
                                <option value="قطر">قطر</option>
                                <option value="جمهورية الكونغو">جمهورية الكونغو</option>
                                <option value="جمهورية مقدونيا">جمهورية مقدونيا</option>
                                <option value="رومانيا">رومانيا</option>
                                <option value="روسيا">روسيا</option>
                                <option value="رواندا">رواندا</option>
                                <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
                                <option value="سانت لوسيا">سانت لوسيا</option>
                                <option value="سانت فنسينت والجرينادينز">سانت فنسينت والجرينادينز</option>
                                <option value="ساموا">ساموا</option>
                                <option value="سان مارينو">سان مارينو</option>
                                <option value="ساو تومي وبرينسيب">ساو تومي وبرينسيب</option>
                                <option value="السعودية">السعودية</option>
                                <option value="السنغال">السنغال</option>
                                <option value="صربيا">صربيا</option>
                                <option value="سيشيل">سيشيل</option>
                                <option value="سيراليون">سيراليون</option>
                                <option value="سنغافورة">سنغافورة</option>
                                <option value="سلوفاكيا">سلوفاكيا</option>
                                <option value="سلوفينيا">سلوفينيا</option>
                                <option value="جزر سليمان">جزر سليمان</option>
                                <option value="الصومال">الصومال</option>
                                <option value="جنوب أفريقيا">جنوب أفريقيا</option>
                                <option value="كوريا الجنوبية">كوريا الجنوبية</option>
                                <option value="جنوب السودان">جنوب السودان</option>
                                <option value="إسبانيا">إسبانيا</option>
                                <option value="سريلانكا">سريلانكا</option>
                                <option value="السودان">السودان</option>
                                <option value="سورينام">سورينام</option>
                                <option value="سوازيلاند">سوازيلاند</option>
                                <option value="السويد">السويد</option>
                                <option value="سويسرا">سويسرا</option>
                                <option value="سوريا">سوريا</option>
                                <option value="طاجيكستان">طاجيكستان</option>
                                <option value="تنزانيا">تنزانيا</option>
                                <option value="تايلاند">تايلاند</option>
                                <option value="توغو">توغو</option>
                                <option value="تونجا">تونجا</option>
                                <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
                                <option value="تونس">تونس</option>
                                <option value="تركيا">تركيا</option>
                                <option value="تركمانستان">تركمانستان</option>
                                <option value="توفالو">توفالو</option>
                                <option value="أوغندا">أوغندا</option>
                                <option value="أوكرانيا">أوكرانيا</option>
                                <option value="الإمارات العربية المتحدة">الإمارات العربية المتحدة</option>
                                <option value="المملكة المتحدة">المملكة المتحدة</option>
                                <option value="الولايات المتحدة">الولايات المتحدة</option>
                                <option value="أوروغواي">أوروغواي</option>
                                <option value="أوزبكستان">أوزبكستان</option>
                                <option value="فانواتو">فانواتو</option>
                                <option value="فنزويلا">فنزويلا</option>
                                <option value="فيتنام">فيتنام</option>
                                <option value="اليمن">اليمن</option>
                                <option value="زامبيا">زامبيا</option>
                                <option value="زيمبابوي">زيمبابوي</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input"  value="{{ $email }}" name="email" id="email" required placeholder="البريد الالكتروني"/>
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $job }}" name="job" id="name"  placeholder="الوظيفة"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $company }}" name="company" id="name"  placeholder="الشركة"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $eq }}" name="eq" id="name" required placeholder="المؤهل الدراسي"/>
                        </div>


                        
                        <input type="hidden" class="form-input" value="ar" name="langa" id="name" />
            
                        <div class="form-group">
                            <span style="font-size: 13px;float: right;color: red;">  (&*#!ّّ%^-؟\) يجب ان تحتوي كلمة السر على حروف كبيرة ورموز وارقام </span>
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