<form class="forms-sample" method="POST" action="{{ route('user.store') }}" id="myForm" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="Name">Nama</label>
        <input type="text" name="nama" value="{{ isset($user) ? $user->name : '' }}" class="form-control" id="exampleInputName1" placeholder="Nama">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail3">Alamat Email</label>
        <input type="email" name="email" value="{{ isset($user) ? $user->email : '' }}" class="form-control" id="exampleInputEmail3" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword4">Password</label>
        <input type="password" name="password" value="{{ isset($user) ? $user->password : '' }}" class="form-control" id="exampleInputPassword4" placeholder="Password">
    </div>

    <div class="form-group">
        <label for="avatar">Upload Foto Profile</label>
        <input type="file" class="form-control" required="required" name="avatar"></br>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
</form>