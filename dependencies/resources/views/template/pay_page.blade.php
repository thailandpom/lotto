@extends('layouts.frontend')

@section('style')

@endsection

@section('content')
<br>
<div class="card" style="padding-left: 5px; margin-right: 50px; margin-left: 220px;">
    <div class="card-body">
        <hr>
        <div class="row">
            <div class="col-xl-6 col-lg-4 col-md-6 col-12">
                <center>
                    <h3> <b> หวยรัฐบาลไทย</b></h3>
                </center>
                <table class="table border-danger table-sm">
                    <thead class="danger-color white-text">
                        <tr>
                            <th scope="col" class="fa-lg"><b>ประเภท</b></th>
                            <th scope="col" class="text-center fa-lg">อัตราจ่าย</th>

                            <th scope="col" class="text-right fa-lg">ส่วนลด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="fa-sm">3 ตัวบน</th>
                            <td class="text-center fa-sm">550</td>
                            <td class="text-right fa-sm">35 บาท</td>
                        </tr>
                        <tr>
                            <th scope="row" class="fa-sm">3 ตัวล่าง</th>
                            <td class="text-center fa-sm">130</td>
                            <td class="text-right fa-sm">35 บาท</td>
                        </tr>
                        <tr>
                            <th scope="row" class="fa-sm">3 ตัวโต๊ด</th>
                            <td class="text-center fa-sm">105</td>
                            <td class="text-right fa-sm">35 บาท</td>
                        </tr>
                        <tr>
                            <th scope="row" class="fa-sm">2 ตัวบน</th>
                            <td class="text-center fa-sm">70</td>
                            <td class="text-right fa-sm">28 บาท</td>
                        </tr>
                        <tr>
                            <th scope="row" class="fa-sm">2 ตัวล่าง</th>
                            <td class="text-center fa-sm">70</td>
                            <td class="text-right fa-sm">28 บาท</td>
                        </tr>
                        <tr>
                            <th scope="row" class="fa-sm">คู่โต๊ดบน</th>
                            <td class="text-center fa-sm">10</td>
                            <td class="text-right fa-sm">35 บาท</td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row" class="fa-sm">วิ่งบน</th>
                            <td class="text-center fa-sm">3</td>
                            <td class="text-right fa-sm">12 บาท</td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row" class="fa-sm">วิ่งล่าง</th>
                            <td class="text-center fa-sm">4</td>
                            <td class="text-right fa-sm">12 บาท</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-xl-6 col-lg-4 col-md-6 col-12">
                <center>
                    <h3> <b> เปลี่ยนอัตราการจ่าย</b></h3>
                </center>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">3 ตัว</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">2 ตัว</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">เลขวิ่ง</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">จ่ายครึ่ง</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">หวยออก</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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