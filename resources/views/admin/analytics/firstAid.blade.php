@extends('layouts.admin')
@section('content')




{{-- {{ $first_id }} --}}

@foreach ($ar as $key => $value )


<input type="hidden" class="names_2020" value="{{  $value  }}">
<input type="hidden" class="values_2020"  value="{{ $key  }}">
    
@endforeach


<input type="hidden" id="certFica" value="{{ $total_issued_cert }}">






<div class="row">
  <div class="col-md-3">

    <div>
      <canvas id="myChart"></canvas>
    </div>
  
  </div>
  
  





</div>










<input type="hidden" id="ar" value="">






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
        text: GetArrayData('names_2020')[0]
      }
    }
  },
};






window.onload = function() {
			var ctx = document.getElementById('myChart').getContext('2d');
			window.myBar = new Chart(ctx, config );

        };

  </script>




@endsection