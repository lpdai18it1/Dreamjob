@extends('admin')
@section('content')
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img id="image" src="lumino/image/author.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="{{route('trang-admin')}}"><em class="fa fa fa-home">&nbsp;</em> Trang Chủ</a></li>
			<li><a href="{{route('trang-quatang')}}"><em class="fa fa-bar-chart">&nbsp;</em> Quản lý quà tặng</a></li>
			<li><a href="{{route('send-gift')}}"><em class="fa fa-bar-chart">&nbsp;</em>Quản lý đơn quà tặng</a></li>
			<li  class="active"><a href="{{route('trang-children')}}"><em class="fa fa-bar-chart">&nbsp;</em> Quản lý Trẻ</a></li>
			<li><a href="#"><em class="fa fa-bar-chart">&nbsp;</em> Dữ liệu bảng</a></li>
			<li><a href="#"><em class="fa fa-bar-chart">&nbsp;</em> Dữ liệu bảng</a></li>
			<li><a href="#"><em class="fa fa-bar-chart">&nbsp;</em> Dữ liệu bảng</a></li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{route('trang-admin')}}">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Quản lý Trẻ</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý Trẻ</h1>
			</div>
		</div><!--/.row-->
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-9 col-md-6 col-lg-6 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">{{count($chil)}}</div>
							<div class="text-muted">Đơn Quà tặng</div>
						</div>
					</div>
				</div>
				<div class="col-xs-9 col-md-6 col-lg-6 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="#">
					        <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		<div class="row">

		  		<table class="table table-bordered">
    				<thead>
      					<tr>
        					<th>id</th>
        					<th>fullname</th>
        					<th>birthdate</th>
        					<th>gender</th>
        					<th>phone_parent</th>
        					<th>id_parent</th>
        					<th>point</th>
        					<th>hobby</th>
        					<th>Delete</th>
      					</tr>
    				</thead>
    				<tbody>
    					@foreach($chil as $c)
      					<tr>
        					<td>{{$c->id}}</td>
        					<td>{{$c->fullname}}</td>
        					<td>{{$c->birthdate}}</td>
        					<td>{{$c->gender}}</td>
        					<td>{{$c->phone_parent}}</td>
        					<td>{{$c->id_parent}}</td>
        					<td>{{$c->point }}</td>
        					<td>{{$c->hobby }}</td>
        					<td><a href="#"><em class="fa fa-xl fas fa-trash color-red"></em></a></td>
      					</tr>
      					@endforeach
    				</tbody>
  				</table>
  			</div>
  		</div>		
</div>
@endsection