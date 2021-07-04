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
                                <option>Select Governorate</option>
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
                            <input type="text" class="form-input"  value="Egypt" name="country" id="name" required placeholder="Country"/>

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