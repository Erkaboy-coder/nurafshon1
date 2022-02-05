@extends('master')

@section('title','Bog\'lanish')
@section('header','Bog\'lanish')


@section('content')



    <div class="site-section bg-light" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-first">
                <div class="col-md-7">
                    <form action="{{route('admin.posts.store')}}" method="post" class="bg-white">

                        @csrf

                        <div class="p-3 p-lg-5 border">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_fname" class="text-black">Ism <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_fname" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_lname" class="text-black">Familiya <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_lname" name="lastname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="c_email" name="email" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_subject" class="text-black">Sarlavha </label>
                                    <input type="text" class="form-control" id="c_subject" name="title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_message" class="text-black">Xabar </label>
                                    <textarea name="description" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Xabar yuborish">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-5">
                    <div class="p-4 border mb-3 bg-white">
                        <p class="h5">Manzil:</p>
                        <p class="mb-4">Toshkent viloyati, Bekobod shaxri.</p>

                        <p class='h5'>Telefon:</p>
                        <p class="mb-4"><a href="#">+998 70 913 00 88</a></p>

                        <p class="h5">Email:</p>
                        <p class="mb-4"><a href="#">pfk.metallurg@mail.ru</a></p>

                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection