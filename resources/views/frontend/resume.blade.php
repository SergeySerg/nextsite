@extends('ws-app')

@section('content')

    <div class="col-md-8 resume">

            <ul class="nav nav-tabs">

                <li class="active"><a data-toggle="tab" href="#tab1">{{ trans('base.resume.makeresume') }}</a></li>

                <li><a data-toggle="tab" href="#tab2">{{ trans('base.resume.sendresume') }}</a></li>

            </ul>

            <div class="row">

                <div class="col-md-12">

                    <div class="tab-content">

                        <div id="tab1" class="tab-pane fade in active">

                            <form method="post" id="resume-form" class="r-form" action="">

                                <div class="clearfix">
                                    <label for="name"><h4>{{ trans('base.resume.name') }}</h4></label>
                                    <input id="name" type="text" name="name" required="required" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="birth"><h4>{{ trans('base.resume.birth') }}</h4></label>
                                    <input id="birth" type="date" name="date_birthday" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="address"><h4>{{ trans('base.resume.address') }}</h4></label>
                                    <input id="address" type="text" name="home" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="mobile"><h4>{{ trans('base.resume.mobile') }}</h4></label>
                                    <input id="mobile" type="number" required="required" name="telephone" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="homephone"><h4>{{ trans('base.resume.homephone') }}</h4></label>
                                    <input id="homephone" type="number" name="home_telephone" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="education"><h4>{{ trans('base.resume.education') }}</h4></label>
                                    <textarea id="education" name="education" rows="5" class="form-control" aria-describedby="sizing-addon2"></textarea>
                                </div>

                                <div class="clearfix">
                                    <label for="profession"><h4>{{ trans('base.resume.profession') }}</h4></label>
                                    <input id="specialty" type="text" name="specialty" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="experience"><h4>{{ trans('base.resume.experience') }}<br><sub>{{ trans('base.resume.experiencedescribe') }}</sub></h4></label>
                                    <textarea id="experience" name="experience" rows="5" class="form-control" aria-describedby="sizing-addon2"></textarea>
                                </div>

                                <div class="clearfix">
                                    <label for="tool"><h4>{{ trans('base.resume.tool') }}</h4></label>
                                    <input id="tool" type="text" name="possession" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="salary"><h4>{{ trans('base.resume.salary') }}</h4></label>
                                    <input id="salary" type="text" name="salary" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <input type="submit" value="{{ trans('base.send') }}" id = "resume-send" class="btn btn-primary btn-lg" style="width: 100%;" href="#" role="button">
                                <input type="hidden" name="_method" value='post'/>
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                            </form>

                        </div>

                        <div id="tab2" class="tab-pane fade">
                            <form action="upload" id="upload" class="r-form" enctype="multipart/form-data">
                                <div class="clearfix">
                                    <label for="name"><h4>{{ trans('base.resume.name') }}</h4></label>
                                    <input id="name" type="text" name="name" required="required" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="mobile"><h4>{{ trans('base.resume.mobile') }}</h4></label>
                                    <input id="mobile" accept="doc" type="number" required="required" name="telephone" class="form-control" aria-describedby="sizing-addon2">
                                </div>
                                <div class="clearfix">
                                    <label for="mobile"><h4>{{ trans('base.resume.file') }}</h4></label>
                                    <input type="file" required="required" name="files[]"><br />
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                <input type="submit" value="{{ trans('base.send') }}" class="btn btn-primary btn-lg" role="button">

                            </form>
                            {{--Файл переводов--}}
                            <script>
                                var trans = {
                                    'base.success': '{{ trans('base.success_send_resume') }}',
                                    'base.error': '{{ trans('base.error_send_resume') }}',
                                    'base.error_upload': '{{ trans('base.error_upload') }}'
                                };
                            </script>
                            {{--Файл переводов--}}
                            <script>
                                var form = document.getElementById('upload');
                                var request = new XMLHttpRequest();

                                form.addEventListener('submit', function(e){
                                    e.preventDefault();
                                    var formdata = new FormData(form);

                                    request.open('post', 'upload');
                                    request.addEventListener("load", transferComplete);
                                    request.addEventListener("error", transferFailed);
                                    request.send(formdata);

                                });
                                function transferComplete(data){
                                    console.log(data);

                                    if(data.currentTarget.status == 200){
                                        var response = JSON.parse(data.currentTarget.response);
                                        if (response.success) {
                                            swal(trans['base.success'], "", "success");
                                            jQuery("#upload").trigger("reset");
                                        }
                                        else {
                                            swal(trans['base.error'], response.message, "error");
                                        }
                                    }else{
                                        swal(trans['base.error'], 'Error ' + data.currentTarget.status , "error");
                                    }

                                }
                                function transferFailed() {
                                    alert(trans['base.error_upload']);
                                }
                            </script>
                        </div>

                    </div>

                </div>

            </div>

        </div>

@endsection