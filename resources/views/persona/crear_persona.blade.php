
@extends('persona.view')
@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

<ol class="breadcrumb" style="width: 89%; margin-left: 12px">
                                <li><i class="fa fa-dashboard"></i>  <a href="index.html">Inicio</a>
                                </li>
                                <li class="active">Formulario de Usuario</li>
                            </ol>

<div class="col-lg-11">
                                <div class="portlet portlet-green">
                          <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4>Registrar Persona</h4>
                                        </div>

                                    
                                        <div class="portlet-widgets">
                                            <a href="#formControls" data-parent="#accordion" data-toggle="collapse"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-collapse in" id="formControls" style="height: auto;">
                                        <div class="portlet-body" style="height:200px;">

                                                        <ul class="nav nav-tabs" id="userTab">
                                    <li class="active"><a data-toggle="tab" href="#overview">Overview</a>
                                    </li>
                                    <li class=""><a data-toggle="tab" href="#profile-settings">Update Profile</a>
                                    </li>
                                </ul>
                                                <div class="form-group">


{!! Form::open(['route'=>'admin.persona.create','method'=>'POST']) !!}
 <div class="form-group">
<div class="col-sm-4">
{!! Form::Label('nombre','Nombre',['class'=>'col-sm-12 control-label']) !!}
{!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'nombre de la persona','required']); !!}

</div>
</div>

 <div class="form-group">
<div class="col-sm-8">
{!! Form::Label('apellido','Apellido',['class'=>'col-sm-12 control-label']) !!}
{!! Form::select('type',['A'=>'Activo','E'=>'Eliminado'],['placeholder'=>'nombre de la per	sona','required','class'=>'form-control']); !!}

</div>
</div>
 <div class="form-group">
<div class="col-sm-12">
 <div class="form-group"> </div>
{!! Form::submit('Registrar',['class'=>'btn btn-primary']); !!}

        <div id="profile-settings" class="tab-pane fade">

           </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>





{!! Form::close() !!}
@endsection







<!--<div class="portlet-body">
                                <ul class="nav nav-tabs" id="userTab">
                                    <li class="active"><a data-toggle="tab" href="#overview">Overview</a>
                                    </li>
                                    <li class=""><a data-toggle="tab" href="#profile-settings">Update Profile</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="userTabContent">
                                    <div id="overview" class="tab-pane fade active in">

                                        <div class="row">
                                            <div class="col-lg-2 col-md-3">
                                                <a href="#">
                                                    <span class="profile-edit">Edit</span>
                                                </a>
                                                <img alt="" src="img/profile-full.jpg" class="img-responsive img-profile">
                                                <div class="list-group">
                                                    <a class="list-group-item active" href="#">Overview</a>
                                                    <a class="list-group-item" href="#">Messages<span class="badge green">4</span></a>
                                                    <a class="list-group-item" href="#">Alerts<span class="badge orange">9</span></a>
                                                    <a class="list-group-item" href="#">Tasks<span class="badge blue">10</span></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-5">
                                                <h1>John Smith</h1>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam placerat nunc ut tellus tristique, non posuere neque iaculis.</p>
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-map-marker fa-muted"></i> Bayville, FL</li>
                                                    <li><i class="fa fa-user fa-muted"></i> Administrator</li>
                                                    <li><i class="fa fa-group fa-muted"></i> Sales, Marketing, Management</li>
                                                    <li><i class="fa fa-trophy fa-muted"></i> Top Seller</li>
                                                    <li><i class="fa fa-calendar fa-muted"></i> Member Since: 5/13/11</li>
                                                </ul>
                                                <h3>Recent Sales</h3>
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Amount</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
    
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <h3>Contact Details</h3>
                                                <p><i class="fa fa-globe fa-muted fa-fw"></i>  <a href="#">http://www.website.com</a>
                                                </p>
                                                <p><i class="fa fa-phone fa-muted fa-fw"></i> 1+(234) 555-2039</p>
                                                <p><i class="fa fa-building-o fa-muted fa-fw"></i> 8516 Market St.
                                                    <br>Bayville, FL 55555</p>
                                                <p><i class="fa fa-envelope-o fa-muted fa-fw"></i>  <a href="#">j.smith</a>
                                                </p>
                                                <ul class="list-inline">
                                                    <li><a href="#" class="facebook-link"><i class="fa fa-facebook-square fa-2x"></i></a>
                                                    </li>
                                                    <li><a href="#" class="twitter-link"><i class="fa fa-twitter-square fa-2x"></i></a>
                                                    </li>
                                                    <li><a href="#" class="linkedin-link"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                                    </li>
                                                    <li><a href="#" class="google-plus-link"><i class="fa fa-google-plus-square fa-2x"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="profile-settings" class="tab-pane fade">

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <ul class="nav nav-pills nav-stacked" id="userSettings">
                                                    <li class="active"><a data-toggle="tab" href="#basicInformation"><i class="fa fa-user fa-fw"></i> Basic Information</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#profilePicture"><i class="fa fa-picture-o fa-fw"></i> Profile Picture</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#changePassword"><i class="fa fa-lock fa-fw"></i> Change Password</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="tab-content" id="userSettingsContent">
                                                    <div id="basicInformation" class="tab-pane fade in active">
                                                        <form role="form">
                                                            <h4 class="page-header">Personal Information:</h4>
                                                            <div class="form-group">
                                                                <label>First Name</label>
                                                                <input type="text" value="John" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Last Name</label>
                                                                <input type="text" value="Smith" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Phone Number</label>
                                                                <input type="tel" value="1+(234) 555-2039" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <input type="text" value="8516 Market St." class="form-control">
                                                            </div>
                                                            <div class="form-inline">
                                                                <div class="form-group">
                                                                    <label>City</label>
                                                                    <input type="text" value="Bayville" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>State</label>
                                                                    <input type="text" value="FL" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>ZIP</label>
                                                                    <input type="text" value="55555" class="form-control">
                                                                </div>
                                                            </div>
                                                            <h4 class="page-header">Contact Details:</h4>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-envelope-o fa-fw"></i> Email Address</label>
                                                                <input type="email" value="" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-globe fa-fw"></i> Website</label>
                                                                <input type="url" value="http://www.website.com" class="form-control">
                                                            </div>
                                                            <h4 class="page-header">Profile Information:</h4>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-info fa-fw"></i> About</label>
                                                                <textarea rows="3" class="form-control">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam placerat nunc ut tellus tristique, non posuere neque iaculis.</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-building-o fa-fw"></i> Departments</label>
                                                                <select class="form-control" multiple="">
                                                                    <option>Accounting</option>
                                                                    <option>Customer Support</option>
                                                                    <option>Human Resources</option>
                                                                    <option selected="">Management</option>
                                                                    <option selected="">Marketing</option>
                                                                    <option>Production</option>
                                                                    <option>Quality Assurance</option>
                                                                    <option selected="">Sales</option>
                                                                </select>

                                                            </div>
                                                            <h4 class="page-header">Social Profiles:</h4>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-facebook fa-fw"></i> Facebook Profile URL</label>
                                                                <input type="url" value="http://www.facebook.com/john.smith9324" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-linkedin fa-fw"></i> LinkedIn Profile URL</label>
                                                                <input type="url" value="http://www.linkedin.com/u/john.smith923" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-google-plus fa-fw"></i> Google+ Profile URL</label>
                                                                <input type="url" value="http://plus.google.com/john-smith9993" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-twitter fa-fw"></i> Twitter Username</label>
                                                                <input type="text" value="" class="form-control">
                                                            </div>
                                                            <button class="btn btn-default" type="submit">Update Profile</button>
                                                            <button class="btn btn-green">Cancel</button>
                                                        </form>
                                                    </div>
                                                    <div id="profilePicture" class="tab-pane fade">
                                                        <h3>Current Picture:</h3>
                                                        <img alt="" src="img/profile-full.jpg" class="img-responsive img-profile">
                                                        <br>
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>Choose a New Image</label>
                                                                <input type="file">
                                                                <p class="help-block"><i class="fa fa-warning"></i> Image must be no larger than 500x500 pixels. Supported formats: JPG, GIF, PNG</p>
                                                                <button class="btn btn-default" type="submit">Update Profile Picture</button>
                                                                <button class="btn btn-green">Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="changePassword" class="tab-pane fade in">
                                                        <h3>Change Password:</h3>
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>Old Password</label>
                                                                <input type="password" value="" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>New Password</label>
                                                                <input type="password" value="" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Re-Type New Password</label>
                                                                <input type="password" value="" class="form-control">
                                                            </div>
                                                            <button class="btn btn-default" type="submit">Update Password</button>
                                                            <button class="btn btn-green">Cancel</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>