@extends('main')

@section('title','|تعديل')

@section('content')
<div class="row"> 
	<!-- to array here !--> 
	 
	 <div class="col-md-7">
	 	{!! Form::model($user, ['route'=>['users.update',$user->id] ,'method' => 'PUT', 'files' => 'ture']) !!}

	 	{{form::label('name', 'الاسم رباعي :')}}
		{{ form::text('name', null , ["class"=>'form-control input-lg' ]) }}

		{{form::label('user_type', 'نوع المستخدم :')}}
					<select class="form-control" name="user_type">
                         <option value='admin'> admin </option>
                         <option value='user'> user </option>  
                         <option value='manager'> manager </option>      	
                    </select>

		{{form::label('email', 'البريد الالكتروني :')}} 
		{{ form::text('email', null,["class"=>'form-control' ]) }}


        {{form::label('gender', 'النوع :')}}
		<select class="form-control" name="gender">
         <option value='ذكر'> ذكر </option>   
         <option value='انثى'> انثى </option> 	
         </select>

		{{form::label('phone', 'رقم الهاتف:',['class'=>'form-spacing-top' ])}}
		{{ form::text('phone', null, ["class"=>'form-control' ]) }}
 
		
        {{form::label('state', 'الولاية :')}}
         <select class="form-control" name="state">
         <option value='الخرطوم'> الخرطوم </option>    	
         </select>

		{{form::label('city', 'المدينة :',['class'=>'form-spacing-top' ])}}
         <select class="form-control" name="city">
         <option value='الخرطوم'> الخرطوم </option>
         <option value='بحري'> بحري </option>  
         <option value='ام درمان'> ام درمان </option>      	
         </select>
		{{form::label('unit', 'الوحدة الاداريه :')}} 
		<select class="form-control" name="unit">
         <option value='الخرطوم'> الخرطوم </option>     	
         </select>

		{{form::label('home_no', 'رقم المنزل :')}}
		{{ form::text('home_no', null, ["class"=>'form-control' ]) }}


        {{form::label('dept_id', 'القسم :')}}
		{{ form::select('dept_id', $depts, null ,['class'=>'form-control']) }}

		{{form::label('Qualification', 'المؤهل :')}}
         <select class="form-control" name="Qualification">
         <option value=' استاذ مشارك'> استاذ مشارك </option>
         <option value='استاذ مساعد'> استاذ مساعد </option>  
         <option value='ماجستير'> ماجستير </option>
         <option value='دبلوم عالي'> دبلوم عالي </option>    
         <option value='بكلاريوس'> بكلاريوس </option>
         <option value='شهادة سودانية'> شهادة سودانية </option>
         </select> 
		{{form::label('grad_id', 'الدرجة الوظيفية :',['class'=>'form-spacing-top' ])}}
		{{ form::select('grad_id', $grads, null, ["class"=>'form-control' ]) }}

		{{form::label('job_id', 'الوظيفه :',['class'=>'form-spacing-top' ])}}
		{{ form::select('job_id', $jobs, null, ["class"=>'form-control' ]) }}

		{{form::label('images', 'تحديث صورة الموظف:'),['class'=>'form-spacing-top' ] }}
		{{form::file('images') }}
		
	</div>
	<div class="col-md-5">
		<div class="well">
			<dl class="dl-horizontal">
			<dt> Create at: </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($user->created_at)) }} </dd>
			</dl>

			<dl class="dl-horizontal">
			<dt> update at </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($user->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					 {{ Html::linkRoute('users.show','الغاء',array($user->id),array('class'=>'btn btn-danger btn-block')) }}
                   
				</div>
				<div class="col-sm-6">
                      {{ Form::submit('حفظ', ['class'=>'btn btn-success btn-block'] )}}
				</div><!-- end form !-->
                 
			</div>
		</div>
	</div>

{!! Form::close() !!}
</div> <!-- end the form !-->

@endsection

