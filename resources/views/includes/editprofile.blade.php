
<div class="wrapper">

    <div class="content profile-content">
        <div id="body">


<div id="add-video">
<p class="logo">Edit profile</p>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Username</label>
        <input type="text" class="form-control" name="username" value="{{ $user->username }}" placeholder="username">
    </div>

    <div class="form-group">
        <label for="title">Email</label>
        <input type="email" class="form-control" name="email"  value="{{ $user->email }}"  placeholder="Email">
    </div>

     <div class="form-group">
        <label for="title">Password</label>
        <input type="password" class="form-control" name="password" placeholder="password">
    </div>

    <div class="form-group">
        <label for="title">Avatar</label>
        <input type="file" id="file" class="" name="avatar">
    </div>

    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

<button type="submit" name="update" class="btn btn-large btn-success">Save</button>

</form>

