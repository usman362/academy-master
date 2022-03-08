@extends('layouts.app')
@section('content')

<div class="content-page">
    <div class="content">
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="row">
<div class="col-xl-12">
<div class="card">
<div class="card-body">
    <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Dashboard</h4>
</div> <!-- end card body-->
</div> <!-- end card -->
</div><!-- end col-->
</div>


<div class="row">
<div class="col-12">
<div class="card widget-inline">
<div class="card-body p-0">
    <div class="row no-gutters">
        <div class="col-sm-6 col-xl-3">
            <a href="/Course" class="text-secondary">
                <div class="card shadow-none m-0">
                    <div class="card-body text-center">
                        <i class="dripicons-archive text-muted" style="font-size: 24px;"></i>
                        <h3><span>{{$course = App\Models\Course::all()->count()}}</span></h3>
                        <p class="text-muted font-15 mb-0">Number of Lessons</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-xl-3">
            <a href="/Course" class="text-secondary">
                <div class="card shadow-none m-0 border-left">
                    <div class="card-body text-center">
                        <i class="dripicons-camcorder text-muted" style="font-size: 24px;"></i>
                        <h3><span>{{$course = App\Models\Lesson::all()->count()}}</span></h3>
                        <p class="text-muted font-15 mb-0">Number of Exercise</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-xl-3">
            <a href="/Enroll" class="text-secondary">
                <div class="card shadow-none m-0 border-left">
                    <div class="card-body text-center">
                        <i class="dripicons-network-3 text-muted" style="font-size: 24px;"></i>
                        <h3><span>{{$course = App\Models\Enroll::all()->count()}}</span></h3>
                        <p class="text-muted font-15 mb-0">Number of enrolment</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-xl-3">
            <a href="/Student" class="text-secondary">
                <div class="card shadow-none m-0 border-left">
                    <div class="card-body text-center">
                        <i class="dripicons-user-group text-muted" style="font-size: 24px;"></i>
                        <h3><span>{{$course = App\Models\User::where('role','3')->count()}}</span></h3>
                        <p class="text-muted font-15 mb-0">Number of student</p>
                    </div>
                </div>
            </a>
        </div>

    </div> <!-- end row -->
</div>
</div> <!-- end card-box-->
</div> <!-- end col-->
</div>
<div class="row">
<div class="col-xl-12">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-4">Lessons overview</h4>
    <div class="my-4 chartjs-chart" style="height: 202px;">
        <canvas id="project-status-chart"></canvas>
    </div>
    <div class="row text-center mt-2 py-2">
        <div class="col-12">
            <i class="mdi mdi-trending-up text-success mt-3 h3"></i>
            <h3 class="font-weight-normal">
                <span>{{$course = App\Models\Course::all()->count()}}</span>
            </h3>
            <p class="text-muted mb-0">Active Lessons</p>
        </div>
      
    </div>
</div>
</div>
</div>

</div>

<script type="text/javascript">
$('#unpaid-instructor-revenue').mouseenter(function() {
$('#go-to-instructor-revenue').show();
});
$('#unpaid-instructor-revenue').mouseleave(function() {
$('#go-to-instructor-revenue').hide();
});
</script>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>

@endsection