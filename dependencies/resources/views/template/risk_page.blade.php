@extends('layouts.frontend')

@section('style')

@endsection

@section('content')
<br>
<div class="card" style="padding-left: 5px; margin-right: 50px; margin-left: 220px;">
    <div class="card-body">
        <hr>
        <div class="row">
            <div class="col-xl-12 col-lg-4 col-md-6 col-12">
                <center>
                    <h3> <b> รายงานความเสี่ยง</b></h3>
                </center>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">2ตัวบน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">2ตัวล่าง</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">คู่โต๊ดบน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">3ตัวบน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">3ตัวล่าง</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">3ตัวโต๊ด </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">วิ่งบ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">วิ่งล่าง</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        ยอดแทงทั้งหมด : 5,100 บาท, ส่วนลด : 1,428.00 บาท, เงินที่รับมาจริง : 3,672.00 บาท <br>
                        ต้องการขาดทุนไม่เกิน 350,001 บาท. จึงต้องจัดการให้จ่ายทั้งหมดไม่เกิน 353,673.00 บาท
                        <table class="table" width="500">
                            <tr>
                                <td>เวลา</td>
                                <td>ID</td>
                                <td>คนคีย์</td>
                                <td>สาย</td>
                                <td>แผ่น</td>
                                <td>บ/ล </td>
                                <td>รายละเอียด</td>
                            </tr>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

</div>

@endsection
@section('script')
@endsection