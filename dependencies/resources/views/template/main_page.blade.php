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
                <table>
                    <tr>
                        <td>ชื่อสาย </td>
                        <td><input type="text" id="exampleForm2" class="form-control" size="15"> </td>
                        <td>แผ่นที่ </td>
                        <td><input type="text" id="exampleForm2" class="form-control" size="10"> </td>
                        <td> <a href="" class="btn-sm btn-danger btn">+</a><a href=""
                                class="btn-sm btn-danger btn">-</a><a href="" class="btn-sm btn-danger btn">L</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-xl-6 col-lg-4 col-md-6 col-12">
                <h6> <b> เวลาที่เซิฟเวอร์:</b></h6>
                <p class="text-danger">เลขจ่ายครึ่ง: <br>
                    ผลสลาก สามตัวหัว:
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-4 col-md-6 col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">1/2/3 ตัว</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">เลขวิ่ง</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-4 col-md-6 col-12">

                <a href="" class="btn-sm btn-primary btn">Print</a>
                <p>สาย 'lg' แผ่นที่ 1 : ยอดแทง 11200, ส่วนลด 3395, ยอดเก็บ 7805</p>

                <table class="table">
                    <tr>
                        <td>เวลา</td>
                        <td>ID</td>
                        <td>สาย</td>
                        <td>แผ่น</td>
                        <td>บ/ล</td>
                        <td>รายละเอียด</td>
                    </tr>
                </table>
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