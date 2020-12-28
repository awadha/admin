@extends('layouts.dashboard.app')
@section("title", "Employees")
@section('content')
    <div class="employee">
        <div class="content-wrapper">

            <section class="content-header">

                <h1>@lang('site.dashboard')</h1>

                <ol class="breadcrumb">
                    <li><a href="{{ route("dashboard.index") }}"><i class="fa fa-home"></i> @lang('site.dashboard')</a> </li>
                    <li class="active"><i class="fa fa-users"></i> @lang('site.employees')</li>
                </ol>
            </section>

            <section class="content">
                t7uy8i9

                <div class="box box-solid">

                    <div class="box-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="box-title">@lang("site.employees")</h3>
                            </div>
                            <div class="col-md-6 text-left">
                                <div class="add-user">
                                    <button class="btn btn-primary">@lang("site.add") @lang("site.employees")</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body border-radius-none">
                      @if ($employees->count() > 0)
                            <table class="table table-hover text-center">
                                <tbody>
                                <tr>
                                    <th>#</th>
                                    <th>@lang("site.number_employee")</th>
                                    <th>@lang("site.image")</th>
                                    <th>@lang("site.name")</th>
                                    <th>@lang("site.age")</th>
                                    <th>@lang("site.address")</th>
                                    <th>@lang("site.salary")</th>
                                    <th>@lang("site.overtime")</th>
                                    <th>@lang("site.tax")</th>
                                    <th>@lang("site.total")</th>
                                </tr>
                                </tbody>
                                <tbody>
                                @foreach($employees as $index=>$employee)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $employee->number }}</td>
                                    <td><img class="img-thumbnail" src="{{ $employee->image_path }}" alt="@lang("site.name")" /></td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->age }}</td>
                                    <td>{{ $employee->address }}</td>
                                    <td>{{ $employee->salary }} $</td>
                                    <td>{{ $employee->overtime }} </td>
                                    <td>{{ $employee->tax }} %</td>
                                    <td>{{ $employee->calculateTotalSalary() }}</td>
                                    <td><a href="{{ route("dashboard.employee.show", $employee->id) }}"> انتقل الى</a> </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                          <h4 class="alert alert-info text-center">@lang("site.no_data")</h4>
                      @endif
                    </div>
                    <!-- /.box-body -->
                </div>

            </section><!-- end of content -->

        </div><!-- end of content wrapper -->
    </div>

@endsection


