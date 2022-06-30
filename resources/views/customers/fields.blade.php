<form action="{{ route('customers.store') }}" class="forms-sample" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputName1">Nama</label>
        <input type="text" name="name" value="{{ isset($customer) ? $customer->name : '' }}" class="form-control" id="exampleInputName1" placeholder="Nama">
        @if (isset($customer))
        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
        @endif
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Alamat Email</label>
                <input type="email" name="email" value="{{ isset($customer) ? $customer->email : '' }}" class="form-control" id="exampleInputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">No Hp</label>
                <input type="tel" name="phone" value="{{ isset($customer) ? $customer->phone : '' }}" class="form-control" id="exampleInputEmail3" placeholder="No Hp">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword4">Instansi/Sekolah</label>
        <input type="text" name="company" value="{{ isset($customer) ? $customer->company : '' }}" class="form-control" id="exampleInputPassword4" placeholder="Instansi/Sekolah">
    </div>

    <div class="form-group">
        <label for="exampleTextarea1">Alamat</label>
        <textarea class="form-control" name="address" id="exampleTextarea1" rows="4">{{ isset($customer) ? $customer->address : '' }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button class="btn btn-light">Kembali</button>
</form>
