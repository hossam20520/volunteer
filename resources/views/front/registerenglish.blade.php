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
                            <span style="font-size: 13px;"> Username must be one small word.</span>
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
                            
                            <select class="form-input" value="{{ $city }}" required  name="branch">
                                <option>Branch</option>
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
                            <input type="text" class="form-input"  value="{{ $country }}" name="country" required id="name" placeholder="Country"/>

                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input"  value="{{ $email }}" name="email" id="email" required placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $mid }}" name="mid" id="name" required  placeholder="Membership ID"/>
                        </div>
                        
                        
                        <div class="form-group">
                            <input type="text" class="form-input"  value="{{ $ID }}" name="ID" id="email" required placeholder="National ID "/>
                        </div>

                        <div class="form-group">
                            <span style="font-size: 13px;"> The password must contain capital letters, symbols and numbers</span>
                            <input type="text" class="form-input" name="password" id="password" required placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-input" name="confirm" id="password" placeholder="Confirm password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span> Accept Terms <a href="#" class="term-service">Terms</a></label>
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