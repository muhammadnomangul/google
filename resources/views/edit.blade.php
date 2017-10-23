<html>
<head>
    form edit
    {{ $entries->description }}

</head>
<body>
    <form action="fileentry/add" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="panel-body container-fluid">
            <div class="row row-lg">
                <div class="col-sm-6 col-md-4">
                    <!-- Example Rounded Input -->
                    <div class="example-wrap">
                        <h4 class="example-title">File Title</h4>
                        <input type="text" class="form-control round" name="title" id="inputRounded" value="{{ $entries->title }}">
                    </div>
                    <!-- End Example Rounded Input -->
                </div>
                <div class="col-sm-6 col-md-4">
                    <!-- Example File Upload -->
                    <div class="example-wrap">
                        <h4 class="example-title">File Upload</h4>
                        <div class="form-group">
                            <div class="input-group input-group-file">
                                <input type="text" class="form-control" readonly="">
                                <span class="input-group-btn">
                                                  <span class="btn btn-success btn-file">
                                                    <i class="icon wb-upload" aria-hidden="true"></i>
                                                    <input type="file" name="filefield" value="{{ $entries->original_filename }}" >
                                                  </span>
                                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- End Example File Upload -->
                </div>

                <div class="col-sm-6 col-md-4"> Select Tags

                    <select name="taggs[]"  class="form-control" multiple data-plugin="select2"  }}">

                        @foreach($entries->taggs as $tag)
                            <option value="{{ $tag->id }}">  {{ $tag->name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-sm-6 col-md-4">
                    <!-- Example Rounded Input -->
                    <div class="example-wrap">
                        <h4 class="example-title">File description</h4>
                        <input type="text" class="form-control round" name="description" id="inputRounded" value="{{ $entries->description }}">
                    </div>
                    <!-- End Example Rounded Input -->
                </div>


            </div>
            <div class="col-sm-6 col-md-4">
                <button type="submit" class="btn btn-block btn-primary">Proceed</button>
                <br><br>
            </div>
            <div class="col-sm-6 col-md-4">


            </div>

            <div class="clearfix visible-sm-block"></div>
        </div>
    </form> <!-- End Panel Form Elements -->

</body>
</html>