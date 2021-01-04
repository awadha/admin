@extends('layouts.dashboard.app')
@section("title", "Employees")
@section('content')
    <div class="employee">
        <div class="content-wrapper">

            <section class="content-header">

                <div class="title-top">
                    <h4>@lang('site.employees')</h4>
                </div>

                <ol class="breadcrumb">
                    <li><a href="{{ route("dashboard.index") }}"><i class="fa fa-home"></i> @lang('site.dashboard')</a> </li>
                    <li class="active"><i class="fa fa-users"></i> @lang('site.employees')</li>
                </ol>
            </section>

            <section class="content">

                <div class="box box-solid">

                    <div class="box-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="box-title">@lang("site.employees")</h3>
                            </div>
                            <div class="col-md-6 text-left">
                                <div class="add-user">
                                    <button class="btn btn-primary" disabled>@lang("site.add") @lang("site.employees")</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body border-radius-none">
                      @if ($employees->count() > 0)
                        <form action="{{ route("dashboard.employees.index") }}" method="get">
                            @csrf
                          <div class="col-md-4">
                            <div class="form-group">
                               <input class="form-control" type="search" name="search" placeholder="@lang("site.search")" />
                            </div>
                          </div>
                          <div class="col-md-4">
                            <button class="btn btn-secondary" type="submit"> <i class="fa fa-search"></i> @lang('site.search')</button>
                           </div>
                        </form>
                            <table class="table table-hover text-center">
                                <tbody>
                                <tr>
                                    <th>#</th>
                                    <th>@lang("site.number_employee")</th>
                                    <th>@lang("site.image")</th>
                                    <th>@lang("site.name")</th>
                                    <th>@lang("site.total")</th>
                                    <th>@lang("site.details")</th>
                                </tr>
                                </tbody>
                                <tbody>
                                @foreach($employees as $index=>$employee)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $employee->number }}</td>
                                    <td><img class="img-thumbnail" src="{{ $employee->image_path }}" alt="@lang("site.name")" /></td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->total }}</td>
                                    <td><a class="btn btn-primary" target="_blank" href="{{ route("dashboard.employee.show", $employee->id) }}">@lang("site.moving")</a> </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        @else
                          <h4 class="alert alert-info text-center">@lang("site.no_data")</h4>
                      @endif
                      {{ $employees->appends(request()->query())->links() }}
                    </div>
                    <!-- /.box-body -->

                </div>

            </section><!-- end of content -->

        </div><!-- end of content wrapper -->
    </div>

@endsection


