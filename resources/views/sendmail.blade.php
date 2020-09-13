<form method="post" action="/test" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="title">subject:</label>
            <input type="text" class="form-control" name="subject">
        </div>
        <div class="form-group col-md-4">
            <label for="title">Mensaje:</label>
            <input type="text" class="form-control" name="mensaje">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="document">Document:</label>
            <input type="file" class="form-control" name="archivo">
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Upload</button>
        </div>
    </div>
</form>