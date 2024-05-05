@extends('layouts.app')
{{--@section('pageTitle', $pageTitle)--}}

@section('content')



    <div class="m-portlet m-portlet--tab">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
{{--                    <h3 class="m-portlet__head-text"><i class="far fa-edit pr-2"></i>{{$pageTitle}}</h3>--}}
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <a href="" class="btn btn-primary m-btn m-btn--icon"><i
                            class="fas fa-sitemap pr-2"></i>Welcome to the Employee Dashboard</a>
            </div>
        </div>


        !-- Leave application form -->
        <h2>Apply for Leave</h2>
        <form class="m-form m-form--fit m-form--label-align-right"
              action="{{ route('leave_requests.store') }}" method="post" enctype="multipart/form-data">
            @csrf



            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group {{ $errors->has('title_en') ? 'has-danger' : '' }}">
                    <label class="form-control-label"><span class="text-danger">*</span>Type of Leave:</label>
                    <select name="type" id="type">
                        <option value="Casual">Casual Leave</option>
                        <option value="Sick">Sick Leave</option>
                        <option value="Emergency">Emergency Leave</option>
                    </select>
                    @if ($errors->has('title_en'))
                        <div class="form-control-feedback">{{ $errors->first('title_en') }}</div>
                    @endif
                </div>
            </div>






{{--            <label for="type">Type of Leave:</label>--}}
{{--            <select name="type" id="type">--}}
{{--                <option value="Casual">Casual Leave</option>--}}
{{--                <option value="Sick">Sick Leave</option>--}}
{{--                <option value="Emergency">Emergency Leave</option>--}}
{{--            </select><br><br>--}}
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date"><br><br>
            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date"><br><br>
            <label for="reason">Reason:</label><br>
            <textarea id="reason" name="reason" rows="4" cols="50"></textarea><br><br>
            <button type="submit">Submit</button>
        </form>

        <!-- Leave history -->
        <h2>Leave History</h2>
        <ul>
            @foreach($leaveRequests as $leaveRequest)
                <li>Type: {{ $leaveRequest->type }}, Start Date: {{ $leaveRequest->start_date }}, End Date: {{ $leaveRequest->end_date }}, Status: {{ $leaveRequest->status }}</li>
            @endforeach
        </ul>

    </div>










<h1></h1>

<

@endsection