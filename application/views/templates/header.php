<!DOCTYPE html>
<html>
<head>
<title>Công ty điện tử viễn thông V-soft</title>
<meta charset="UTF-8">
<link href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css" rel="stylesheet" media="screen,print"/>
<link href="<?php echo base_url('assets/css/font-awesome-4.6.3/css/font-awesome.min.css'); ?>" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/include.main.css'); ?>">
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/navigationBar.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/slide.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/information.js'); ?>"></script>
</head>
<body>
<div id='header-wrap'>
	<div id='header'>
		<a href="<?php echo base_url('index.php/display') ?>"> 
			<img src="<?php echo base_url('assets/images/logo.gif') ?>" id='logo'>
		</a>
	</div>
	<div id='scroll-header'>
	</div>
<script type="text/javascript">
$(function(){
	$.post('http://localhost:8080/isd/index.php/login/check',function(session){
		$('#header').append('<hr>').append(
			$('<div>',{'class':'lienhe'}).append(
				$('<p><i class="fa a fa-phone" aria-hidden="true" style="color:#1a75ff"></i>0168.6666.951<i   class="fa b fa-envelope-o" aria-hidden="true" style="color:#1a75ff"></i> dtvienthongvsoft@gmail.com</p>')
			)
		).append($('<div>',{'id':'brand','text':'công ty cổ phần điện tử viễn thông v-soft'})
		).append(
		session.username ? $("<a>",{text:'Xin chào: '+session.username,'class':'welcome','href':'http://localhost:8080/isd/index.php/edit/editprofile?id='+session.id,id:session.id}) : "",
		$('<div>',{'class':'log mb5 di ptb5 pl5 '+(session.loginuser ? "in" : "")}).on("click",function(){
			var x = $(this);
			if (x.hasClass("in")) {
				$.post("http://localhost:8080/isd/index.php/login/logout",{ id:"logout" },function(s){
					if (s==1) {
						window.location.href =('http://localhost:8080/isd/index.php/display');
					}
				});
			} else {
				var f,m;
				$('body').append( 
					$('<div>',{'class':'blurred-div'}).append(
		            	$('<div>',{'id':'form-login'}).on('keyup',function(e){
										if (e.keyCode==13)
										$('.wr-login .submit').click();
						}).html(
							$('<div>',{'class':'wr-login'}).append(
								$('<h2>',{'class':'tieude bg1 p5',text:'Đăng nhập' }),
								f = $('<form>',{'class':'login'}).append(
									['Tài khoản','Mật khẩu'].map(function(v,i) {
										var j = ["user","pass"][i];
										return $("<div>", {'class':'mtb10 tl' }).append('<label class=fb for='+j+' style="letter-spacing:-1px;text-align:left;">'+v+':</label>',
											$("<div>",{ "class":"mb10 mt5" }).css({ background:"white",boxShadow:"inset 0 0 5px 0 #ccc",border:"1px solid #ddd",borderRadius:4,overflow:"hidden",padding:10,}).append(
												$("<input>",{id:j,name:j,type:['text','password'][i],placeholder:v}).css({ width:"100%",outline:"none", border:0,resize:"none", background:"none",padding:0,})
											)
										)
									}),
								$('<div class="note">Tôi đã đọc và đồng ý với <a href="http://google.com">Điều khoản sử dụng</a> của V-soft.</div>'),
								m = $('<div>',{'class':'login-thongbao c2 mtb10'}),
								$('<div>',{'class':'di mtb10'}).append(
									$('<div>',{'class':'submit p5 fb bg1',text:'Đăng nhập'}).on('click',function(){
										var x = $(this);
										if (x.hasClass("chờ"))
										return;
										x.addClass("chờ");
										var name = f.find("#user").val(),
											pass = f.find("#pass").val();
										if (name && pass) {
											$.post('http://localhost:8080/isd/index.php/login/index',{id:'login',name:name,pass:pass},function(echo){
												console.log(echo);
												switch (echo) {
													case "1":
														m.text('*Lỗi hệ thống, vui lòng F5 và thử lại!');
														x.removeClass("chờ");
														break;
													case "3":
														m.text('*Sai [Tên tài khoản] hoặc [Mật khẩu]!');
														x.removeClass("chờ");
														break;
													default:
														session=$.parseJSON(echo);
														if(session.loginuser==true){
															$(".blurred-div").remove();
															$(".log").addClass("in");
															$("<a>",{text:'Xin chào: '+session.username,'class':'welcome','href':'http://localhost:8080/isd/index.php/edit/editprofile?id='+session.id,id:session.id}).insertBefore($(".log"));
														}
														break;
												}
											});
										} else {
											m.text('*Không để trống '+(!name ? "[Tài khoản]" :"[Mật khẩu]"));
											x.removeClass("chờ");
										}
									})
								) // m (noti và nút)
							) // f ( form đăng nhập : label và input)
						).append(
								$('<div class="note" style="margin-bottom:10px;" >Bạn chưa có tài khoản V-soft ID ? <a href="<?php echo base_url('index.php/registor/regist') ?>">Đăng ký</a></div>')
						)
						) //html()
					)
				) //body										
			}
		})
		);
	},"json");

	$('body').on('click',".blurred-div",function(e){
		if(e.target == this) this.remove();
	});
	$('#scroll-header').append(
		$('<div>',{'class':'wr-search'}).append(
			$('<input>',{'class':'','type':'search','placeholder':'Tìm kiếm sản phẩm'})
		).append(
			$('<div>',{'class':'submit'})
		)
	).append(
	$('<p id="cart"><i class="fa fa-shopping-cart" aria-hidden="true"> </i>  giỏ hàng</p>')
	).append(
	$('<p id="payment"><i class="fa fa-money" aria-hidden="true"> </i> thanh toán khi nhận hàng</p>')
	);
})	
</script>
</div>



