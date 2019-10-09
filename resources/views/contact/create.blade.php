@extends('layouts.appMaxwell')
@section('content')
    <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
    <div class="ttr_contact_html_row0 row">
        <div class="post_column col-lg-12 col-md-10 col-sm-10 col-xs-12">
            <div class="ttr_contact_html_column00">
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                <div class="html_content"><br style="line-height:1.375;" /><p style="margin:0.12em 0em 0em 0.5em;line-height:1.375;">
                    <div class="contactformdiv" style="margin:10px 10px 10px 10px;">
                        <form id="ContactForm5" class="form-horizontal" role="form" method="post" action="/contact" style="float:left;width:100%;">
                            <div class="form-group">
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Name</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" data-vali="novalidation" name="name" />
                                    <div>{{$errors->first('name')}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Email</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" data-vali="novalidation" name="email" />
                                    <div>{{$errors->first('email')}}</div>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Subject</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" data-vali="novalidation" name="subject" />
                                    <div>{{$errors->first('subject')}}</div>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Message</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <textarea class="form-control comment" name="message" rows="4"></textarea>
                                </div>
                            </div>
                            @csrf
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-4">
                                    <input type="submit" class="pull-left btn btn-md btn-default" id="submitform" name="submit" value="Send Message" />
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                            <div class="success"></div>
                            <div class="req_field"></div>
                            <div style="clear: both;"></div>
                        </form>
                        <div style="clear: both;"></div>
                    </div>
                </div>
                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                <div style="clear:both;"></div>
            </div>
        </div>
        <div class=" visible-lg-block visible-xs-block" style="clear: both;"></div>
    </div>
    <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
    @endsection
