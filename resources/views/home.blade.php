@extends('layouts.main')

@section('content')



                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-notepad"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Total Notes</p>
                                            @php
                                                use App\Http\Controllers\NoteController;
                                                $totalNote = NoteController::total_notes();
                                                echo $totalNote;
                                            @endphp
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-list-ol"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Total Numbers</p>
                                             @php
                                                use App\Http\Controllers\NumberController;
                                                $totalNum = NumberController::total_number();
                                                echo $totalNum;
                                            @endphp
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                </div>
                            </div>
                        </div>
                    </div>
       <div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="content">
            <div class="row">
                <div class="col-xs-5">
                    <div class="icon-big icon-danger text-center">
                        <i class="ti-pulse"></i>
                    </div>
                </div>
                <div class="col-xs-7">
                    <div class="numbers">
                        <p>User IP</p>
                    @php
                        $ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
                        echo $ip;
                    @endphp
                    </div>
                </div>
            </div>
            <div class="footer">
                <hr />
            </div>
        </div>
    </div>
</div>
<!--  <div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="content">
            <div class="row">
                <div class="col-xs-5">
                    <div class="icon-big icon-info text-center">
                        <i class="ti-twitter-alt"></i>
                    </div>
                </div>
                <div class="col-xs-7">
                    <div class="numbers">
                        <p>Followers</p>
                        +45
                    </div>
                </div>
            </div>
            <div class="footer">
                <hr />
                <div class="stats">
                    <i class="ti-reload"></i> Updated now
                </div>
            </div>
        </div>
    </div>
</div> -->
                </div>

@endsection
