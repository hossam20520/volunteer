@extends('layouts.admin')
@section('content')






<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total Users</span>
        <span class="info-box-number">
          10
          {{-- <small>%</small> --}}
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book-reader"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total number of courses</span>
        <span class="info-box-number">{{ $total_courses }} </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-hourglass"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total number of trainees</span>
        <span class="info-box-number">760</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-address-card"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total certficate issued</span>
        <span class="info-box-number">{{ $cert }}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>





{{-- {{ $first_id }} --}}

@foreach ($ar as $key => $value )


<input type="hidden" class="names_2020" value="{{  $value  }}">
<input type="hidden" class="values_2020"  value="{{ $key  }}">
    
@endforeach



@foreach ($vol as $key => $value )


<input type="hidden" class="vol_name_20520" value="{{  $value  }}">
<input type="hidden" class="vol_values_20520"  value="{{ $key  }}">
    
@endforeach


@foreach ($youth as $key => $value )


<input type="hidden" class="youth_name_20520" value="{{  $value  }}">
<input type="hidden" class="youth_values_20520"  value="{{ $key  }}">
    
@endforeach





<div class="row">
  <div class="col-md-3">

    <div>
      <canvas id="myChart"></canvas>
    </div>
  
  </div>
  
  
  <div class="col-md-3">
  
    <div>
      <canvas id="myChart_2"></canvas>
    </div>
  
  </div>


  <div class="col-md-3">
  
    <div>
      <canvas id="myChart_3"></canvas>
    </div>
  
  </div>




</div>










<input type="hidden" id="ar" value="">

{{-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"> </script> --}}





<script>

function GetArrayData(className){
    let elemts = document.getElementsByClassName(className);
    let i;
    let emptyArr = [];
    for(i=0; i<elemts.length; i++){
        emptyArr.push(elemts[i].value);
    }

    return emptyArr;
}


// console.log(GetArrayData('names_2020'))


</script>


<script>
const DATA_COUNT = 3;
// const NUMBER_CFG = {count: DATA_COUNT, min: 0, max: 100};
const CHART_COLORS  = ['Red',  'Green', 'Blue']
const data = {
  labels: GetArrayData('names_2020'),
  datasets: [
    {
      label: 'Dataset 1',
      data: GetArrayData('values_2020') ,
      backgroundColor: ['Red',  'Green', 'Blue']
    }

   
  ]
};
  const config = {
  type: 'doughnut',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'First Aid'
      }
    }
  },
};











const DATA_COUNT_2 = 3;
const CHART_COLORS_2  = ['Red',  'Green', 'Blue']
const data_2 = {
  labels: GetArrayData('vol_name_20520'),
  datasets: [
    {
      label: 'Dataset 1',
      data: GetArrayData('vol_values_20520') ,
      backgroundColor: CHART_COLORS_2
    }

   
  ]
};
  const config_2 = {
  type: 'doughnut',
  data: data_2,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Volunteer'
      }
    }
  },
};











const CHART_COLORS_3  = ['Red',  'Green', 'Blue']
const data_3 = {
  labels: GetArrayData('youth_name_20520'),
  datasets: [
    {
      label: 'Dataset 1',
      data: GetArrayData('youth_values_20520') ,
      backgroundColor: CHART_COLORS_3
    }

   
  ]
};
  const config_3 = {
  type: 'doughnut',
  data: data_3,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Health and care department'
      }
    }
  },
};






window.onload = function() {
			var ctx = document.getElementById('myChart').getContext('2d');
			window.myBar = new Chart(ctx, config );

      var ctx_2 = document.getElementById('myChart_2').getContext('2d');
			window.myBar_2 = new Chart(ctx_2, config_2 );


      var ctx_3 = document.getElementById('myChart_3').getContext('2d');
			window.myBar_3 = new Chart(ctx_3, config_3 );

        };

  </script>




@endsection