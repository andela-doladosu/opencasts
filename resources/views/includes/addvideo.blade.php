
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
        <textarea class="form-control" name="description" placeholder="Description of video"></textarea>
    </div>

    <div class="form-group">
        <label for="title">Category</label>
        <select name="category" class="form-control">
            <option value="PHP">
                PHP
            </option>
            <option value="JAVA">
                Java
            </option>
            <option value="Javascript">
                Javascript
            </option>
            <option value="Laravel">
                Laravel
            </option>
            <option value="Python">
                Python
            </option>
            <option value="Android">
                Android
            </option>
            <option value="Erlang">
                Erlang
            </option>


        </select>
    </div>

    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

<button type="submit" class="btn btn-large btn-success form-control">Add video</button>

</form>


</div>
 @if($errors->any())
    @include('includes.errors')
 @endif
</div>
</div>

