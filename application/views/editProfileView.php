<div class="wr-edit">
	<div class="edit-profile m10">
		<div class="wr-edit-info di vt">
			<div class="tieude tc">
				<div class="text mb10 ffrc fs24 di vt">Thông tin tài khoản</div>
			
			</div>
			<div class="info wr-show ptb10">
				<div>
					<div class="avatar di vt">
						<div style="width:150px;height:150px;background:url(http://localhost:8080/isd/assets/images/noava.png) no-repeat;background-size: cover;border-radius:75px; margin: 10px 20px">
						</div>
					</div>
					<div class="infomation di vt">
						<div class="wr-tieude">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wr-option di vt">
			<a class="a-submit">
				<div class="submit submit0 mtb5 ptb5 tc ffrc fs14 admintool-2" >Thông tin người dùng </div>
			</a>
			<a class="a-submit">
				<div class="submit submit1 mtb5 ptb5 tc ffrc fs14 admintool-2" >Quản lý giỏ hàng</div>
			</a>
			<a class="a-submit">
				<div class="submit submit2 mtb5 ptb5 tc ffrc fs14 admintool-2" >Đổi mật khẩu</div>
			</a>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(function(){
		var s = $.parseJSON("<?php echo addslashes(json_encode($data)); ?>");
		s.map(function(v,i){
			var chucvu ="";
			var name=v.username;
			if(v.level=='1'){
				chucvu="User";
			}
			else{
				chucvu="Admin";
			}
			$('.wr-tieude').append(
				$("<div>",{class:'ffrc fs14 mtb10'}).append(
					$("<div>",{class:'di vm fb',text:'Tên tài khoản:'}),
					$("<div>",{class:'di vm ml10',text:v.username})
				),
				$("<div>",{class:'ffrc fs14 mtb10'}).append(
					$("<div>",{class:'di vm fb',text:'Chức vụ:'}),
					$("<div>",{class:'di vm ml10',text:chucvu})
				),
				$("<div>",{class:'ffrc fs14 mtb10'}).append(
					$("<div>",{class:'di vm fb',text:'Email :'}),
					$("<div>",{class:'di vm ml10',text:v.email})
				)
			)
		})
		$(".submit0").on("click",function(){
			location.reload();
		})
		$(".submit1").on("click",function(){
			var url= window.location.href;
			var id = url.split("=");
			$.post(
				'http://localhost:8080/isd/index.php/cart_controller/viewCart',
				{id:id[1]},
				function(res){
					console.log(res);
						$(".wr-edit-info").empty().append(
							$("<div>",{class:"tc"}).append($("<div>",{class:'text mb10 ffrc fs24 di vt tc',text:'Quản lý giỏ hàng'})),
							$("<table>",{ class:"optimized w1" }).append(
								$("<thead>").append(
									$("<tr>").append(
										$("<td>",{text:'STT'}),
										$("<td>",{text:'Hãng'}),
										$("<td>",{text:'Tên SP'}),
										$("<td>",{text:'Giá'}),
										$("<td>",{text:'Số lượng'}),
										$("<td>",{text:'',style:'display:none;'}),
										$("<td>",{text:''})
									)
								),
								$("<tbody>").append(
									$.map(res,function(v,i){
										return $("<tr>").append(
											$("<td>",{text:''}),
											$("<td>",{text:v.brand}),
											$("<td>",{text:v.product_name}),
											$("<td>",{text:v.selling_price}),
											$("<td>",{text:v.quantity}),
											$("<td>",{text:v.product_id,style:'display:none;'}),
											$("<td>").append($("<img>",{src:'<?php echo base_url('assets/images/delete.ico') ?>',style:'width:25px;'})).on("click",function(){
												var a = $(this);
												var data=$(this).prev().text();
												$.post(
													'http://localhost:8080/isd/index.php/cart_controller/deleteCart',
													{data:data},
													function(res){
														if(res==1){
															a.parent().remove();
														}
													}
												)
											})
										)
									})
								)
								
							)
							
						)
					
				},'json'
			)
			
		})
		$(".submit2").on("click",function(){
			$(".wr-edit-info").html(
				$("<div>",{class:'tieude tc'}).append(
					$("<div>",{class:'text mb10 ffrc fs24 vt',text:'Đổi mật khẩu'}),
					$("<form>",{class:'cp-form'}).append(
						$("<table>",{class:'change-password'}).append(
							$("<tr>").append(
								$("<td>").append($("<label>",{text:' Mật khẩu cũ: ',class:'db'})),
								$("<td>").append($("<input>",{type:'password',class:'cp-input',name:'oldPass'}))
							),
							$("<tr>").append(
								$("<td>").append($("<label>",{text:' Mật khẩu mới: ',class:'db'})),
								$("<td>").append($("<input>",{type:'password',class:'cp-input',name:'newPass'}))
							),
							$("<tr>").append(
								$("<td>").append($("<label>",{text:' Xác nhận lại: ',class:'db'})),
								$("<td>").append($("<input>",{type:'password',class:'cp-input',name:'reType'}))
							)
						)
					),
					
					$("<div>",{class:'message'}),
					$("<div>",{class:'button',text:'Đổi mật khẩu',}).click(function(){
						var url= window.location.href;
						var id = url.split("?");
						var data=$('.cp-form').serialize()+"&"+id[1];
						console.log(data);
						$.post(
							'http://localhost:8080/isd/index.php/edit/changePassword',
							data,
							function(res){
								console.log(res);
								if(res=='4'){
									$('.message').html("Vui lòng không để trống! ");
								}
								if(res=='1'){
									$('.message').html("[Mật khẩu nhập lại] không đúng!");
								}
								if(res=='2'){
									$("body").append(
										$("<div>",{ "class":"blurred-div" }).append(
											$("<div>",{'class':'thongbao ffrc fs14 fb'}).append(
													$("<img>",{'width':'50px','height':'50px','src':'warning.png'}),
													$("<div>",{text:'Đổi mật khẩu thành công !'})
												)
										).on("click",function(e){
											if(e.target==this){
												$(".blurred-div, .thongbao").remove();
											}
										})
									)
								}
								if(res=='3'){
									$('.message').html("Sai mật khẩu");
								}
							}
						)
					})
				)
			)
		})
	})
		

</script>