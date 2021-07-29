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

                        <div class="form-group">
                            <input type="text" class="form-input" value="{{ $firstname }}" name="fname" required id="name" placeholder="الاسم بالكامل كما هو موضح فى الرقم القومى"/>
                        </div>

                        <div class="form-group">
                          
                             <input type="number" class="form-input" value="{{ $idpassport }}"  name="idpassport" required id="name" placeholder="ادخل رقم القومي "/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input"  name="fullname" value="{{ $fullname }}"  id="name" placeholder="الاسم بالكامل كما هو موضح فى جواز السفر لغير المصريين"/>
                        </div>

                    

                        <div class="form-group">
                           
                             <input type="number" class="form-input"  name="IDNUM"   value="{{ $IDNUM }}" id="name" placeholder="ادخل رقم جواز السفر لغير المصريين"/>
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
                            <input type="number" class="form-input"  value="{{ $phone }}" name="phone" required id="name" placeholder="رقم الموبايل"/>
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
                           
                          <input type="hidden" name="country" value="EGYPT">

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