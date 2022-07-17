@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if ($message = Session::get('success'))

                    <div class="alert alert-success alert-block">

                        <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>

                    </div>

                    @endif
                    @if ($message = Session::get('error'))

                    <div class="alert alert-danger alert-block">

                        <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>

                    </div>

                    @endif
                    <h4 class="alert alert-info" style="text-align:center ;">Join the department with role</h4>
                    <form method="POST" action="{{ route('join') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>
                            <div class="col-md-6">
                                <?php
                                $departments = App\Models\Department::where('status', 1)->get();
                                ?>
                                <select class="form-select" name="department_id" aria-label="Default select example" required>
                                    <option value="" selected>Select the department</option>
                                    @if(count($departments) > 0)
                                    @foreach($departments as $department)
                                    <option value="{{$department->id}}">{{ $department->department_name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                                @error('department_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
                            <div class="col-md-6">
                                <?php
                                $roles = App\Models\Role::where('status', 1)->get();
                                ?>
                                <select class="form-select" name="role_id" aria-label="Default select example" required>
                                    <option value="" selected>Select the Role</option>
                                    @if(count($roles) > 0)
                                    @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{ $role->role_name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                                @error('role_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Join') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


                @if(count($departmentUsers) > 0)
                <div class="container">
                    <h2>Your hierarchy of the  <?php $authdepartment = App\Models\Department::where('id', $authUser->department_id)->first(); echo $authdepartment->department_name; ?> department</h2>
                    <h2 class="level-1 rectangle">
                        @if($authUser != null)
                        <?php
                        $authroles = App\Models\Role::where('id', $authUser->role_id)->first(); ?>
                        {{ Auth::user()->name }} ({{ $authroles->role_name}})
                        @endif
                    </h2>
                    <?php
                    function userRole($roleId)
                    {
                        $userroles = App\Models\Role::where('id', $roleId)->first();
                        //dd($userroles);
                    }
                    ?>
                   
                    @foreach($departmentUsers as $depUser)
                    <ol class="level-2-wrapper">
                        <li>
                            <h3 class="level-2 rectangle">
                                <?php
                                // userRole($depUser->role_id);
                                $userroles = App\Models\Role::where('id', $depUser->role_id)->first();
                                $userinfo = App\Models\User::where('id', $depUser->user_id)->first();
                                ?>
                                {{ $userinfo->name}}<span>({{ $userroles->role_name}} )</span>
                            </h3>
                        </li>
                    </ol>
                    @endforeach
                   
                </div>
                @endif


            </div>
        </div>
    </div>
</div>
@endsection