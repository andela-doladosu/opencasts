
<div class="wrapper">

    <div class="content video-add-content">
        <div id="body">


<div id="add-video">
<p class="logo">Add new Video</p>
<form method="post" >
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title">
    </div>

    <div class="form-group">
        <label for="title">Youtube link</label>
        <input type="text" class="form-control" name="url" placeholder="Youtube link">
    </div>

     <div class="form-group">
        <label for="title">Description</label>
        <input type="text" class="form-control" name="description" placeholder="Decription of video">
    </div>

    <div class="form-group">
        <label for="title">Category</label>
        <input type="text" class="form-control" name="category" placeholder="Video category">
    </div>

    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

<button type="submit" class="btn btn-large btn-success">Add video</button>

</form>


</div>
 @if($errors->any())
    @include('includes.errors')
 @endif
</div>
</div>

