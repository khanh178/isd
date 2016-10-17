
<div class="wr-cart">
  <div class="left-col">
  	<div class="product-info">
 
  	</div>
  </div>
  <div class="right-col">
  	<div class="cart-info">

  	</div>
  </div>
  <div class="cleared"></div>
</div>
<script type="text/javascript">
	var data = $.parseJSON("<?php echo addslashes(json_encode($data)); ?>");
	data.map(function(v,i){
		if (v.status==0){
			v.status="Còn";
		}
		else{
			v.status="Hết";
		}
		$(".cart-info").append(
			$("<h2>",{text:v.product_name}),
			$("<ul>",{class:'list-unstyled'}).append(
				$("<li>",{text:'Hãng sãn xuất: '+v.brand}),
				$("<li>",{text:'Còn hàng:' +v.status}),
				$("<li>",{text:'Mã sản phẩm:'+v.product_id})
			),
			$("<ul>",{class:'list-unstyled'}).append(
				$("<h3>",{text:v.selling_price+'.000 VND'}),
				$("<li>",{text:'Giá trước đây: '+v.import_price+'.000 VND'})	
			),
			$("<div>",{class:'form-group hộp'}).append(
				$("<input>",{'type':'text',name:'quantity',size:'2',class:'quantity form-control mtb10','placeholder':'Số lượng...'}),
				$("<button>",{type:'button',class:'btn btn-primary btn-lg btn-block',text: 'Thêm vào giỏ hàng'}).on("click",function(){
						if(!$(".log").hasClass("in")){
							$("body").append(
								$("<div>",{ "class":"blurred-div" }).append(
									$("<div>",{'class':'thongbao ffrc fs14 fb tac'}).append(
											$("<img>",{'width':'50px','height':'50px','src':'http://localhost:8080/isd/assets/images/warning.png'}),
											$("<div>",{text:'Vui lòng đăng nhập để tiếp tục'})
										)
								).on("click",function(e){
									if(e.target==this){
										$(".blurred-div, .thongbao").remove();
									}
								})
							)
						}
						else if(!$(".quantity").val()){
							$("body").append(
								$("<div>",{ "class":"blurred-div" }).append(
									$("<div>",{'class':'thongbao ffrc fs14 fb tac'}).append(
										$("<img>",{'width':'50px','height':'50px','src':'http://localhost:8080/isd/assets/images/warning.png'}),

										$("<div>",{text:'Nhập số lượng để tiếp tục'})
										)
								).on("click",function(e){
									if(e.target==this){
										$(".blurred-div, .thongbao").remove();
									}
								})
							)
						}
						else{
							$.post(
								'http://localhost:8080/isd/index.php/cart_controller/addCart',
								{user_id:$(".welcome").attr('id'),id:v.product_id,quantity:$(".quantity").val()},
								function(res){
									if(res==1){
										alert('ok');
									}
								}
							)
						}
					})
			)
		)

		$(".product-info").append(
			$("<a>",{class:'thumbnail',href:v.product_img,'title':v.product_name}).append(
				$("<figure>",{style:'text-align:center;'}).append(
					$("<img>",{src:v.product_img})
				)
			).on("click",function(e){
				e.preventDefault();
				$('body').append(
					$('<div>',{'class':'blurred-div'}).append(
		            	$('<figure>',{'id':'form-login',class:'tac'}).append(
		            		$("<img>",{src:v.product_img}),
		            		$("<figcaption>",{text:v.brand})
		            	)
					)
				)
			}),
			$("<div>",{class:'grid b1sb bb1 wsn nav_tab' }).append(
				$("<div>",{ class:"brt3 bấmĐc tab", text:"Mô tả"}).click(),
				$("<div>",{ class:"brt3 bấmĐc tab", text:"Đánh giá" })
			),
			$("<div>",{class:'content'})
		).on("click",".tab",function(){
			$(this).removeClass("cb1 pa10 bgc01h ml2").addClass("b1sb bb0 pa10 mb-1 bgcf");
			$(this).siblings().removeClass("b1sb bb0 pa10 mb-1 bgcf").addClass("cb1 pa10 bgc01h ml2");
			if($(this).index()==0){
				$(this).parent().next().html(
					$("<pre>",{text:v.description,class:'mt10 pa10'})
				);
			}
			if($(this).index()==1){
				$(this).parent().next().empty().append(
					$("<div>",{text:'Sản phẩm chưa có đánh giá nào',class:'mt10 pa10'}),
					$("<h3>",{text:'Đánh giá sản phẩm'}),
					$("<label>",{text:'* Tên khách hàng:',style:'display:block;margin:10px 0px;'}),
					$("<input>",{'type':'text',name:'customer-name',class:'form-control'}),
					$("<label>",{class:'',text:'* Đánh giá của khách hàng:',style:'display:block;margin:10px 0px'}),
					$("<textarea>",{name:'text', rows:'5',class:'form-control ha'}),
					$("<button>",{type:'button',class:'btn btn-primary btn-lg btn-block w50 mt10 mlra',text: 'Gửi đi'})
				)
			}

		}).find(".tab:eq(0)").click();

	})
</script>