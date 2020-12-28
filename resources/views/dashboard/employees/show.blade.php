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
                                            <img title="{{ $employee->name }}" class="thumbnail" src="{{ $employee->image_path }}" alt="@lang("site.name")">
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
                                            <ul>
                                                <li>@lang("site.date_employment"):  {{ $employee->date_employment }}</li>

                                                <li>
                                                    @lang("site.status")
                                                    @if ($employee->absence === 'present')
                                                        <span class="{{ $cssClass }}">@lang("site.present")</span>
                                                    @else
                                                        <span class="{{ $cssClass }}">@lang("site.absent")</span>
                                                    @endif

                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>@lang("site.salary")</h2>
                        <table class="table text-center">
                            <thead>
                            <tr>
                                <th>@lang("site.salary")</th>
                                <td>@lang("site.overtime")</td>
                                <td>@lang("site.overtimeRate")</td>
                                <td>@lang("site.abbsentDays")</td>
                                <td>@lang("site.abbsentRate")</td>
                                <td>@lang("site.advance")</td>
                                <td>@lang("site.tax")</td>
                                <td>@lang("site.insurances")</td>
                                <td>@lang("site.total")</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $employee->salary }}</td>
                                <td>{{ $employee->overtime }}</td>
                                <td>{{ $employee->overtimeRate }}</td>
                                <td>{{ $employee->abbsentDays }}</td>
                                <td>{{ $employee->abbsentRate }}</td>
                                <td>{{ $employee->advance }}</td>
                                <td>{{ $employee->tax }} % </td>
                                <td>{{ $employee->insurances }} %</td>
                                <td>{{ $employee->calculateTotalSalary() }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>

            </section><!-- end of content -->

        </div><!-- end of content wrapper -->
    </div>

@endsection


