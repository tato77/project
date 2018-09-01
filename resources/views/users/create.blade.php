@extends('main')

@section('title','| انشاء رسالة')

@section('content')

<div class="row"> 
	
		<div class="col-md-8 col-md-offset-2">
			        {!! Form::open(['route' => 'users.store', 'data-parsley-validate' => '', 'files' => 'ture' ]) !!}

					{{form::label('')}}
					{{form::text('name',null,array('class' => 'form-control','required' => '','placeholder'=>'اسم الموظف' )) }}

					{{form::label('user_type', 'نوع المستخدم :')}} 
					<select class="form-control" name="user_type">
						<option value='user'> user </option> 
                         <option value='admin'> admin </option>                   
                         <option value='manager'> manager </option>      	
                    </select>  
 
					{{form::label(' ')}}
					{{form::text('email',null,array('class' => 'form-control','required' => '','placeholder'=>'البريد الالكتروني' )) }}

					{{form::label('')}}
					{{form::text('password',null,array('class' => 'form-control','required' => '','placeholder'=>'كلمة المرور' )) }}
 
					{{form::label('')}}
					{{form::text('confirm_password',null,array('class' => 'form-control','required' => '','placeholder'=>'تأكيد كلمة المرور' )) }}
					
					{{form::label('gender', 'النوع :')}}
					
					<select class="form-control" name="gender">
                          <option value='ذكر'> انثى </option>
                          <option value='ذكر'> ذكر </option>        	
                    </select>

					{{form::label('')}}
					{{form::text('phone',null,array('class' => 'form-control','required' => '','placeholder'=>'رقم الهاتف' )) }}

					
					{{form::label('state', 'الولاية:')}}
					
                     <select class="form-control" name="state">
                         <option value='الخرطوم'> الخرطوم </option>
                         <option value='امدرمان'> امدرمان </option> 
                         <option value='بحري'> بحري </option>        	
                    </select>
					{{form::label('city', 'المدينة:')}}
					<select class="form-control" name="city">
                         <option value='الخرطوم'> الخرطوم </option>
                         <option value='امدرمان'> امدرمان </option> 
                         <option value='بحري'> بحري </option>        	
                    </select>

					{{form::label('unit', 'المحلية:')}}
					<select class="form-control" name="unit">
                         <option value='الخرطوم'> الخرطوم </option>
                         <option value='امدرمان'> امدرمان </option> 
                         <option value='بحري'> بحري </option>        	
                    </select>

					{{form::label('')}}
					{{form::text('home_no',null,array('class' => 'form-control','required' => '','placeholder'=>'رقم المنزل' )) }}


					{{form::label('dept_id', 'القسم:')}}
					<select class="form-control" name="dept_id">
						@foreach($depts as $dept)
                         <option value='{{ $dept->id}}'> {{ $dept->name}}</option>
                    	@endforeach
                    </select>

                    {{form::label('Qualification', 'المؤهل:')}}
					<select class="form-control" name="Qualification">
                     <option value=' استاذ مشارك'> استاذ مشارك </option>
			         <option value='استاذ مساعد'> استاذ مساعد </option>  
			         <option value='ماجستير'> ماجستير </option>
			         <option value='دبلوم عالي'> دبلوم عالي </option>    
			         <option value='بكلاريوس'> بكلاريوس </option>
			         <option value='شهادة سودانية'> شهادة سودانية </option>           	
                    </select>
					

					{{form::label('grad_id', 'الدرجة الوظيفية:')}}
					<select class="form-control" name="grad_id">
						@foreach($grads as $grad)
                         <option value='{{ $grad->id}}'> {{ $grad->name}}</option>
                    	@endforeach
                    </select>
					{{form::label('job_id', 'الوظيفه:')}}
					<select class="form-control" name="job_id"> 
						@foreach($jobs as $job)
                         <option value='{{ $job->id}}'> {{ $job->name}}</option>
                    	@endforeach
                    </select>
                    {{form::label('images', 'صورة الموظف:')}}
					{{form::file('images') }}

					{{form::submit('create',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px'))}}

					{!! Form::close() !!}
		</div>
</div>

@endsection
