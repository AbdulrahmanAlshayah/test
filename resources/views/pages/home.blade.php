@extends('layouts.app')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">لوحة القيادة</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">مشاركة</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">تصدير</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                هذا الأسبوع
            </button>
        </div>
    </div>



    <h2>عنوان القسم</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم الوافد</th>
                    <th scope="col">رقم جواز السفر</th>
                    <th scope="col">تاريخ الإصدار</th>
                    <th scope="col">تاريخ انتهاء الصلاحية</th>
                    <th scope="col">رمز التحقق المرئي</th>
                </tr>
            </thead>
            <tbody>
                @foreach($passports as $passport)
                <tr>
                    <td>{{$passport->user->name}} </td>
                    <td>{{$passport->name}}</td>
                    <td>{{$passport->number}}</td>
                    <td>{{$passport->release}}</td>
                    <td>{{$passport->expiration}}</td>
                    <td>{{$passport->cerification_code}}</td>
                    <td>{{$passport->arrival}}</td>
                    <td>{{$passport->visa_type}}</td>
                    <td>{{$passport->passport_image}}</td>
                    <td>{{$passport->photograph}}</td>
                    <td>{{$passport->job}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</main>
@endsection
