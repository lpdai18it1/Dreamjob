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
			<li class="active"><a href="{{route('trang-quatang')}}"><em class="fa fa-bar-chart">&nbsp;</em> Quản lý quà tặng</a></li>
			<li><a href="#"><em class="fa fa-bar-chart">&nbsp;</em> Dữ liệu bảng</a></li>
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
				<li class="active"><a href="{{route('trang-quatang')}}">Quản lý Quà Tặng</a>/Sửa quà tặng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sửa quà tặng</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<form action="{{route('sua-quatang',$gift->id)}}" method="post" class="form-horizontal">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row"><h3 style="text-align: center;">@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</h3><br></div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Tên quà tặng*</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="name"  value="{{$gift->name}}" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="quantity">Số lượng*</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="quantity"  value="{{$gift->quantity}}" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="point">Số điểm*</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="point"  value="{{$gift->point}}" required>
							</div>
						</div>
						<div class="form-group">
							<label for="notes" class="control-label col-sm-2">Ghi chú: </label>
							<div class="col-sm-10">
							<textarea name="notes" name="notes" class="ckeditor" >{!! $gift->description !!}</textarea>
							    <script>
                        			CKEDITOR.replace( 'notes' );
               	 				</script>
               	 			</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="image">Ảnh</label>
							<div class="col-sm-10">
 								<input type="file" name="image" class="form-control">
 							</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-2">
    							<button type="submit" name="submit" class="btn btn-info">Submit</button>
							</div>
						</div>					
				</form>
			</div>
		</div>
</div>	
@endsection