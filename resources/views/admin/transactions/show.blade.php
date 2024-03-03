@extends('admin.layouts.admin')

@section('title')
    show transactions
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">تراکنش  : {{ $transaction->id }}</h5>
            </div>
            <hr>

            <div class="row">
                <div class="form-group col-md-3">
                    <label>نام کاربر</label>
                    <input class="form-control" type="text"
                        value="{{ $transaction->user->name == null ? 'کاربر' : $transaction->user->name }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label>شماره سفارش </label>
                    <input class="form-control" type="text"
                        value="{{ $transaction->order->id }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label>وضعیت</label>
                    <input class="form-control" type="text" value="{{ $transaction->status }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label>مبلغ</label>
                    <input class="form-control" type="text" value="{{ $transaction->amount }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label>ref_id </label>
                    <input class="form-control" type="text" value="{{ $transaction->ref_id }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label>token</label>
                    <input class="form-control" type="text" value="{{ $transaction->token }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label> نام درگاه</label>
                    <input class="form-control" type="text" value="{{ $transaction->gateway_name }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label>نوع پرداخت</label>
                    <input class="form-control" type="text" value="{{ $transaction->status}}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label>تاریخ ایجاد</label>
                    <input class="form-control" type="text" value="{{ verta($transaction->created_at) }}" disabled>
                </div>
                <div class="form-group col-md-12">
                    <label>توضیحات</label>
                    <textarea class="form-control" disabled>{{ $transaction->description }}</textarea>
                </div>

            </div>

            <a href="{{ route('admin.transactions.index') }}" class="btn btn-dark mt-5">بازگشت</a>

        </div>

    </div>

@endsection
