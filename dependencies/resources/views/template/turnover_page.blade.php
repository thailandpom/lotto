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
                <h3> <b> ผลประกอบการ</b></h3>
                สามตัวหัว: 503<br>
                สามตัวบน: 446<br>
                สองตัวล่าง: 77<br>
                สามตัวล่าง: 726 258 661 404<br><br>
                ยอดแทงรวมทุกสาย: 11,200.00 | ส่วนลด: 3,395.00 | ยอดเก็บ: 7,805.00<br>
                ได้รางวัล: 0.00 | สุทธิส่งเจ้า: 7,805.00<br><br>
                รายการที่ถูกเรียงตาม ID
                <table class="table" width="500">
                    <tr>
                        <td>เวลา</td>
                        <td>ID</td>
                        <td>สาย</td>
                        <td>แผ่น</td>
                        <td>เลขที่ถูก</td>
                        <td>รายละเอียด </td>
                        <td>ได้รางวัล</td>
                    </tr>
                </table>
                <hr>
                สาย 'lg'<br><br>
                ยอดแทง: 11,200.00 | ส่วนลด: 3,395.00 | ยอดเก็บ: 7,805.00<br>
                ได้รางวัล: 0.00 | สุทธิส่งเจ้า: 7,805.00<br>
                <table class="table" width="500">
                    <tr>
                        <td>เวลา</td>
                        <td>ID</td>
                        <td>สาย</td>
                        <td>แผ่น</td>
                        <td>เลขที่ถูก</td>
                        <td>คำสั่งแทง </td>
                        <td>ส่วนที่ถูก </td>
                        <td>ได้รางวัล</td>
                    </tr>
                </table>
                <hr>
                รายละเอียดกระดาษแต่ละแผ่น
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