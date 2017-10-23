@extends('basic')
@section('grid')


    <div class="page animsition">
        <div class="page-header">
            <h1 class="page-title">Projects</h1>
            <div class="page-header-actions">

                <form>
                    <div class="input-search input-search-dark">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
        <div class="page-content">
            <div class="projects-wrap">
                <ul class="blocks blocks-100 blocks-xlg-5 blocks-md-4 blocks-sm-3 blocks-xs-2">
                    @foreach($entries as $entry)
                        <li>
                            <div class="panel">
                                <figure class="overlay overlay-hover animation-hover">
                                    <img class="caption-figure" src="{{route('getentry', $entry->filename)}}">
                                    <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-pure btn-default"><a href="/edit/{{$entry->id}}">Edit</a>
                                            <button type="button" class="btn btn-icon btn-pure btn-default"><i class="icon wb-trash" aria-hidden="true"></i></button>
                                        {{--</div>--}}
                                        <button type="button" class="btn btn-outline btn-default project-button">View Project</button>
                                    </figcaption>
                                </figure>
                                <div class="panel-body">
                                    <div class="row row-lg">
                                        <div class="example-wrap">
                                            @unless($entry->taggs->isEmpty())
                                                <h5>Tags</h5>
                                                @foreach($entry->taggs as $tag)
                                                    <div class="example">
                                                        <span class="label label-primary">{{ $tag->name }}</span>
                                                    </div>
                                                @endforeach
                                                <div class="time pull-right">{{ $entry->created_at }}</div>
                                                <div class="title">{{ $entry->title }}</div>
                                                <div class="text">{{ $entry->description }}</div>
                                            @endunless
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection



@section('form')
    <div class="page animsition">
        <div class="page-header">
            <h1 class="page-title">Form General Elements</h1>
        </div>
        <div class="page-content">
            <!-- Panel Form Elements -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Elements</h3>
                </div>
                <form action="fileentry/add" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="panel-body container-fluid">
                        <div class="row row-lg">
                            <div class="col-sm-6 col-md-4">
                                <!-- Example Rounded Input -->
                                <div class="example-wrap">
                                    <h4 class="example-title">File Title</h4>
                                    <input type="text" class="form-control round" name="title" id="inputRounded">
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
                                                <input type="file" name="filefield" >
                                              </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Example File Upload -->
                            </div>

                            <div class="col-sm-6 col-md-4"> Select Tags
                                <select name="taggs[]"  class="form-control" multiple data-plugin="select2">
                                    {{$select_tag = App\Tagg::all()}}
                                    @foreach($select_tag As $item)
                                        <option value="{{$item['id']}}">  {{ $item['name'] }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="clearfix visible-sm-block"></div>
                            <div class="col-sm-6">
                                <!-- Example Textarea -->
                                <div class="example-wrap">
                                    <h4 class="example-title">File Description</h4>
                                    <textarea class="form-control" name="description" id="textareaDefault" rows="3"></textarea>
                                </div>
                                <!-- End Example Textarea -->
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


            </div> <!-- End Panel Input Groups -->
        </div>
    </div>
@endsection
<!-- End Page -->

