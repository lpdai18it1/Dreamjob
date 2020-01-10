<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <style type="text/css">
    	body{
            padding: 0;
            margin: 0;
            width: 99%;
    		font-family: sans-serif;
            background: url("minimalist_tree-wallpaper-1366x768 (1).jpg")no-repeat center bottom fixed;
            -webkit-background-size: cover;  
            -moz-background-size: cover;  
            -o-background-size: cover;  
            background-size: cover;
    	}
    	.con{
    		margin-top: 2%;
    		text-align: center;
    	}
    	.form-control{
    		width: 30%;
    	}
    	form{
    		margin-left: 24%;
    	}
    	#selected{
    		width: 15%;
    	}
    	.anh{
    		height: 60px;
    		width: 50px;
    	}
    	#anhcu{
    		height: 250px;
    		width: 230px;
    	}
    </style>
<body>
	<div class="row">
		<div class="col-lg-12">
			<ol class="breadcrumb">
				<li><a href="{{route('trang-admin')}}">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"><a href="{{route('send-gift')}}">Quản lý đơn quà tặng</a>/Cập nhật trạng thái</li>
			</ol>
		</div>
	</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Cập nhật trạng thái</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
		<div class="col-lg-9">
 			<form action="{{route('cn-dh',$edit->id)}}" method="post" class="form-horizontal">
 			<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="row"><h3 style="text-align: center;">@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</h3><br></div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="tt">Trạng thái</label>
				<div class="col-sm-10">
					<select name="trangthai" class="form-control">
                        <option>Shiper đã nhận hàng</option>
                        <option>Đã nhập kho</option>
                        <option>Đang giao hàng</option>
                        <option>Đã giao hàng thành công</option>
                    </select>
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
</body>
</html>