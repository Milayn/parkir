<form class="forms-sample" method="POST" action="{{ route('user.update', $user->id) }}" id="myForm" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="Name">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" value="{{ $user->nama }}" ariadescribedby="nama" >
    </div>
    <div class="form-group">
        <label for="exampleInputEmail3">Alamat Email</label>
        <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" ariadescribedby="email" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword4">Password</label>
        <input type="password" name="password" class="form-control" id="password" value="{{ $user->password }}" ariadescribedby="password" >
    </div>

    <div class="form-group">
        <label for="avatar">Upload Foto Profile</label>
        <input type="file" class="form-control" required="required" name="avatar" value="{{$user->avatar}}"></br>
        <img width="150px" src="{{asset('storage/'.$user->avatar)}}"> 
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
</form>
