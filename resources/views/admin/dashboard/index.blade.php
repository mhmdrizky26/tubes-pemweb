@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-address-book"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 title="USER">USER</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\User::count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-book-open text-white fa-2x"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 title="BERITA">BERITA</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\Post::count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fa fa-tags text-white fa-2x"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 title="TAGS">TAGS</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\Tag::count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-folder"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 title="KATEGORI">KATEGORI</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\Category::count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fa fa-bell text-white fa-2x"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 title="AGENDA">AGENDA</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\Event::count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <!-- Diagram 1 Adjusted for Full Width -->
                <div class="col-xl-10 col-lg-8 col-md-8">
                    <div class="card h-100">
                        <div class="card-header">
                            <h4 class="card-title">Post Overview</h4>
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-center p-0" style="height: calc(100vh - 500px);">
                            <div id="morris-bar-chart" class="chart-full-width"></div>
                        </div>
                    </div>
                </div>

                <!-- User Feedback Adjusted for Full Width -->
                <div class="col-xl-2 col-lg-4 col-md-4">
                    <div class="card h-100 d-flex flex-column">
                        <div class="card-body text-center d-flex flex-column justify-content-center align-items-center flex-grow-1">
                            <div class="m-t-10 flex-grow-1 d-flex flex-column justify-content-center">
                                <h4 class="card-title">User Feedback</h4>
                                <h2 class="mt-3">385749</h2>
                            </div>
                            <div class="widget-card-circle mt-5 mb-5 flex-grow-1 d-flex justify-content-center align-items-center" id="info-circle-card">
                                <i class="ti-control-shuffle pa"></i>
                            </div>
                            <ul class="widget-line-list m-b-15 flex-grow-1 d-flex flex-column justify-content-center">
                                <li class="border-right">92% <br>
                                    <span class="text-success"><i class="ti-hand-point-up"></i> Positive</span>
                                </li>
                                <li>8% <br>
                                    <span class="text-danger"><i class="ti-hand-point-down"></i> Negative</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>
@endsection

@section('scripts')
<script>
    // Morris bar chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        },{
            y: '2013',
            a: 60,
            b: 75
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['A', 'B'],
        barColors: ['#343957', '#5873FE'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true,
        redrawOnResize: true, // Pastikan grafik di-redraw
    });

    $('#info-circle-card').circleProgress({
        value: 0.70,
        size: 100,
        fill: {
            gradient: ["#a389d5"]
        }
    });

    $('#sidebarToggle').on('click', function () {
        setTimeout(function () {
            Morris.redraw(); // Redraw semua grafik setelah sidebar berubah
        }, 300); // Delay untuk memastikan animasi selesai
    });

    $(window).on('resize', function () {
        Morris.redraw();
    });
</script>
@endsection
