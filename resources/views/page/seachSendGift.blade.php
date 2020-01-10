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
			<li  class="active"><a href="{{route('send-gift')}}"><em class="fa fa-bar-chart">&nbsp;</em>Quản lý đơn quà tặng</a></li>
			<li><a href="#"><em class="fa fa-bar-chart">&nbsp;</em> Dữ liệu bảng</a></li>
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
				<li class="active">Quản lý đơn quà tặng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý đơn quà tặng</h1>
			</div>
		</div><!--/.row-->
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-9 col-md-6 col-lg-6 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">{{count($send)}}</div>
							<div class="text-muted">Đơn Quà tặng</div>
						</div>
					</div>
				</div>
				<div class="col-xs-9 col-md-6 col-lg-6 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="{{route('seach-send')}}">
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
        					<th>id_children</th>
        					<th>address</th>
        					<th>phone_parent</th>
        					<th>status</th>
        					<th>id_gift</th>
        					<th>Update Status</th>
        					<th>Delete</th>
      					</tr>
    				</thead>
    				<tbody>
    					@foreach($send as $s)
      					<tr>
        					<td>{{$s->id}}</td>
        					<td>{{$s->id_children}}</td>
        					<td>{{$s->address}}</td>
        					<td>{{$s->phone_parent}}</td>
        					<td>{{$s->status}}</td>
        					<td>{{$s->id_gift }}</td>
        					<td><a href="{{route('cn-dh',$s->id)}}"><em class="fa fa-xl fa fa-search color-blue"></em></a></td>
        					<td><a href="{{route('xoa-sendgift',$s->id)}}"><em class="fa fa-xl fas fa-trash color-red"></em></a></td>
      					</tr>
      					@endforeach
    				</tbody>
  				</table>
  			</div>
  		</div>		
</div>
@endsection