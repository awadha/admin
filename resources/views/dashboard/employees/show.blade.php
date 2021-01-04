@extends('layouts.dashboard.app')
@section("title", "Employee")
@section('content')
    <div class="employee">
        <div class="content-wrapper">

            <section class="content-header">

                <h1>@lang('site.dashboard')</h1>

                <ol class="breadcrumb">
                    <li><a href="{{ route("dashboard.index") }}"><i class="fa fa-home"></i> @lang('site.dashboard')</a> </li>
                    <li><a href="{{ route("dashboard.employees.index") }}"><i class="fa fa-users"></i> @lang('site.employees')</a> </li>
                    <li class="active"><i class="fa fa-user"></i> {{ $employee->name }}</li>
                </ol>
            </section>

            <section class="content">

                <div class="box box-solid">

                    <div class="box-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="box-title">@lang("site.number_employee"):  <span>{{ $employee->number }}</span></h3>
                            </div>
                            <div class="col-md-6 text-left">

                            </div>
                        </div>
                    </div>
                    <div class="box-body border-radius-none">
                        <div class="employee-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="block-img">
                                            <img class="img-thumbnail" title="{{ $employee->name }}" class="thumbnail" src="{{ $employee->image_path }}" alt="@lang("site.name")">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="">
                                            <h4><strong>@lang("site.name"): </strong> {{ $employee->name }}</h4>
                                            <p><strong>@lang("site.age"): </strong> {{ $employee->age }}</p>
                                            <h6><strong>@lang("site.address"): </strong> {{ $employee->address }}</h6>
                                            @php
                                                $cssClass = ($employee->absence === 'present') ? 'green' : 'red';
                                            @endphp
                                            <ul class="info-permanence">
                                                <li>@lang("site.date_employment"):  {{ $employee->date_employment }}</li>
                                                <li>
                                                    @lang("site.status")
                                                    @if ($employee->absence === 'present')
                                                        <p class="{{ $cssClass }}">@lang("site.present")</p>
                                                    @else
                                                        <p class="{{ $cssClass }}">@lang("site.absent")</p>
                                                    @endif

                                                </li>
                                                <span>الدوام الصباحي</span>
                                                <li><strong>@lang('site.attendees')</strong> {{ $employee->attendees }}</li>
                                                <li><strong>@lang('site.leaving')</strong> {{ $employee->leaving }}</li>
                                                <span>الدوام المسائي</span>
                                                <li><strong>@lang('site.attendees')</strong> {{ $employee->afternoonAttendance }}</li>
                                                <li><strong>@lang('site.leaving')</strong> {{ $employee->afternoonLeaving }}</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>@lang("site.salary")</h2>
                            <table class="table text-center">
                                <thead>
                                <tr>
                                    <th>@lang("site.salary")</th>
                                    <th>@lang("site.overtime")</th>
                                    <th>@lang("site.overtimeRate")</th>
                                    <th>@lang("site.abbsentDays")</th>
                                    <th>@lang("site.allowances")</th>
                                    <th>@lang("site.abbsentRate")</th>
                                    <th>@lang("site.advance")</th>
                                    <th>@lang('site.delay')</th>
                                    <td>@lang("site.tax")</td>
                                    <td>@lang("site.insurances")</td>
                                    <td>@lang("site.total")</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $employee->salary }} @lang("site.currency")</td>
                                    <td>{{ $employee->overtime }} @lang("site.hour")</td>
                                    <td>{{ $employee->overtimeRate }} @lang("site.currency")</td>
                                    <td>{{ $employee->abbsentDays }} @lang("site.days")</td>
                                    <td>{{ $employee->abbsentRate }} @lang("site.currency")</td>
                                    <td>{{  $employee->allowances }} @lang("site.currency")</td>
                                    <td>{{ $employee->advance }} @lang("site.currency")</td>
                                    <td>{{ $employee->delay }} @lang("site.currency")</td>
                                    <td>{{ $employee->tax }} ريال </td>
                                    <td>{{ $employee->insurances }} ريال </td>
                                    <td>{{ $employee->total }} @lang("site.currency")</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table text-center">
                                <thead>
                                    <tr class="info">
                                        <th>@lang('site.attendees')</th>
                                        <th>@lang('site.leaving')</th>
                                        <th>@lang("site.late")</th>
                                        <th>@lang('site.leaveEarly')</th>
                                        <th>@lang("site.overtime")</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="warning">
                                        <td> {{ $employee->attendees }} ص</td>
                                        <td>{{ $employee->leaving }} م</td>
                                        <td>{{ $employee->late }} </td>
                                        <td>{{ $employee->leaveEarly }} </td>
                                        <td>{{ $employee->overtime }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="card-container">
                    <span class="pro">@lang("site.number_employee"): {{ $employee->number }}</span>
                    <img  src="{{ $employee->image_path }}" title="{{ $employee->name }}" alt="user"/>
                    <h3>{{ $employee->name }}</h3>
                    <h6>@lang("site.age"): {{ $employee->age }}</h6>
                    <h6><strong>@lang("site.address"): </strong> {{ $employee->address }}</h6>
                    <p> <i class="fa fa-calendar"></i>
                         @lang("site.date_employment"): <br/>  {{ $employee->date_employment }}</p>
                    <div class="buttons">
                        <button class="primary">
                            Message
                        </button>
                        <button class="primary ghost">
                            Following
                        </button>
                    </div>
                    <div class="skills">
                        <h3>@lang("site.salary")</h3>
                        <table class="table text-center">
                            <thead>
                            <tr>
                                <th>@lang("site.salary")</th>
                                <th>@lang("site.overtime")</th>
                                <th>@lang("site.overtimeRate")</th>
                                <th>@lang("site.abbsentDays")</th>
                                <th>@lang("site.allowances")</th>
                                <th>@lang("site.abbsentRate")</th>
                                <th>@lang("site.advance")</th>
                                <th>@lang('site.delay')</th>
                                <td>@lang("site.tax")</td>
                                <td>@lang("site.insurances")</td>
                                <td>@lang("site.total")</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $employee->salary }} @lang("site.currency")</td>
                                <td>{{ $employee->overtime }} @lang("site.hour")</td>
                                <td>{{ $employee->overtimeRate }} @lang("site.currency")</td>
                                <td>{{ $employee->abbsentDays }} @lang("site.days")</td>
                                <td>{{ $employee->abbsentRate }} @lang("site.currency")</td>
                                <td>{{  $employee->allowances }} @lang("site.currency")</td>
                                <td>{{ $employee->advance }} @lang("site.currency")</td>
                                <td>{{ $employee->delay }} @lang("site.currency")</td>
                                <td>{{ $employee->tax }} ريال </td>
                                <td>{{ $employee->insurances }} ريال </td>
                                <td>{{ $employee->total }} @lang("site.currency")</td>
                            </tr>
                            </tbody>
                        </table>
                        <h3>الحضور و الانصراف</h3>
                        <table class="table text-center">
                            <thead>
                            <tr>
                                <th>@lang('site.attendees')</th>
                                <th>@lang('site.leaving')</th>
                                <th>@lang("site.late")</th>
                                <th>@lang('site.leaveEarly')</th>
                                <th>@lang("site.overtime")</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> {{ $employee->attendees }} ص</td>
                                <td>{{ $employee->leaving }} م</td>
                                <td>{{ $employee->late }} </td>
                                <td>{{ $employee->leaveEarly }} </td>
                                <td>{{ $employee->overtime }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section><!-- end of content -->

        </div><!-- end of content wrapper -->
    </div>

@endsection


