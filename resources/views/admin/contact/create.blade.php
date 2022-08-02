@extends('admin.admin_master')

@section('admin')

<div class="col-lg-6">
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Create Contact</h2>
    </div>
    <div class="card-body">
    <form action="{{ route('contact.store') }}" method="POST">
    @csrf

<div class="form-group">
    <label for="exampleFormControlInput1">Contact Email</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Contact Email">
</div>
@error('email')
    <span class="text-danger"> {{ $message }}</span>
@enderror
<div class="form-group">
    <label for="exampleFormControlInput2">Contact Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleFormControlInput2" placeholder="Contact Phone">
</div>
@error('phone')
    <span class="text-danger"> {{ $message }}</span>
@enderror
<div class="form-group">
    <label for="exampleFormControlTextarea1">Contact Address</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" placeholder="Contact Address"></textarea>
</div>
@error('address')
    <span class="text-danger"> {{ $message }}</span>
@enderror
<div class="form-footer pt-4 pt-5 mt-4 border-top">
    <button type="submit" class="btn btn-primary btn-default">Submit</button>
</div>
        </form>
    </div>
</div>

@endsection