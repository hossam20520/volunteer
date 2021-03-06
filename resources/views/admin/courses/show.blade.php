@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.course.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.courses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.id') }}
                        </th>
                        <td>
                            {{ $course->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.course') }}
                        </th>
                        <td>
                            {{ $course->course }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.courseid') }}
                        </th>
                        <td>
                            {{ $course->courseid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.number_of_trainees') }}
                        </th>
                        <td>
                            {{ $course->number_of_trainees }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.department') }}
                        </th>
                        <td>
                            {{ App\Models\Course::DEPARTMENT_SELECT[$course->department] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.courses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>





{{-- 
@foreach ($ar as $key => $value )


<input type="hidden" class="names_2020" value="{{  $value  }}">
<input type="hidden" class="values_2020"  value="{{ $key  }}">
    
@endforeach --}}


{{-- @foreach ($certa as $key => $value)
<input type="hidden" class="names_cert_2020" value="{{  $value  }}">
<input type="hidden" class="values__cert_2020"  value="{{ $key  }}">
@endforeach --}}


<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
  
        <div class="info-box-content">
          <span class="info-box-text">Total Users</span>
          <span class="info-box-number">
            {{ $numberUsers }}
            {{-- <small>%</small> --}}
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- /.col -->
  
    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>
  

    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-address-card"></i></span>
  
        <div class="info-box-content">
          <span class="info-box-text">Total issued certficate </span>
          <span class="info-box-number">{{ $total_issued_cert }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>



    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-address-card"></i></span>
    
          <div class="info-box-content">
            <span class="info-box-text">Total Not issued certficate </span>
            <span class="info-box-number">{{ $numberUsers  - $total_issued_cert }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
    <!-- /.col -->
  </div>












  
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
    //   labels: GetArrayData('names_2020'),
      datasets: [
        {
          label: 'Dataset 1',
          data: GetArrayData('values_2020') ,
          backgroundColor: ['Red']
        }
,
        {
          label: 'Dataset 2',
          data: GetArrayData('values_2020') ,
          backgroundColor: [ 'Green']
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