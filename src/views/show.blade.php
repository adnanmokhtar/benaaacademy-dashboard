@extends("admin::layouts.master")
@section("content")

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-8">
            <h2>
                <i class="fa fa-tachometer"></i>
                {{ trans("dashboard::dashboard.dashboard") }}
            </h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route("admin.dashboard.show") }}">{{ trans("dashboard::dashboard.dashboard") }}</a>
                </li>
            </ol>
        </div>

        <div class="col-lg-4 text-center">
        </div>
    </div>

    <div class="wrapper wrapper-content fadeInRight">

        @foreach(array_reverse(Action::fire("dashboard.featured")) as $output)
            {!! $output !!}
        @endforeach

        <div class="row" style="margin-top:10px">

            <div class="col-md-4">
                @foreach(Action::fire("dashboard.right") as $output)
                    {!! $output !!}
                @endforeach
            </div>

            <div class="col-md-4">
                @foreach(Action::fire("dashboard.middle") as $output)
                    {!! $output !!}
                @endforeach
            </div>

            <div class="col-md-4">
                @foreach(Action::fire("dashboard.left") as $output)
                    {!! $output !!}
                @endforeach
            </div>

        </div>

    </div>

@stop


