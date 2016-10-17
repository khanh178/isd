<link href="<?php echo base_url('assets/css/category.css') ?>" type="text/css" rel="stylesheet" media="screen,print"/>
<div class="table" style="height:1200px;">
	<div class='tit'>ĐIỆN THOẠI IPHONE 6S 64GB</div>
	<div id="left-side">
		<img src="product/smartphone/image001.png" style="width:100%; height:100%">
		<div id="nút">
			<button type='button' style="background:#e40046">Mua trực tiếp</button>
			<button type='button'>Cho vào giỏ hàng</button>
		</div>
	</div>
	<div id="right-side">
		<div>Tên SP: ĐIỆN THOẠI IPHONE 6S 64GB</div>
		<div>Giá: 19.990.000₫.</div>
		<ul>
  			<li>Mànhình: Retina HD, 5.5 inches</li>
  			<li>HĐH: iOS 9</li>
  			<li>CPU: A8 64 bit, RAM 1 GB</li>
  			<li>Camera: 8.0MP, 1 SIM</li>
  			<li>Pin: 2915mAh</li>
		</ul>
		<table id="sta" style="width:100%" border="0">
		<tr>
		<th>THÔNG SỐ KỸ THUẬT</th>
		</tr>
		  <tr>
		    <th>Màn hình</th>
			<th>LED-backlit IPS LCD, 4.7",Retina HD</th>			
		  </tr>
		<tr>
		    <th>Hệ điều hành</th>
			<th>iOS 9</th>
		  </tr>
		<tr>
		    <th>Camera sau</th>
		<th>12 MP</th>
		  </tr>
		<tr>
		    <th>Camera trước</th>
		<th>5 MP</th>
		  </tr>
		<tr>
		    <th>Dung lượng pin</th>
		<th>1715 mAh</th>
		  </tr>
		</table>
	</div>
	<div id="sm-phone"></div>
</div>
<script type="text/javascript">
	$(function(){
		$('#sm-phone').append('<hr/>')
		.append($('<div>',{'class':'label','text':'Sản phẩm liên quan'})
			.append($('<div>',{'class':'product'}).append(
	 ([["<img src='product/smartphone/image001.png'>",
		"<p class='name'>Điện thoại iPhone 6s 64GB</p>",
		"<p class='cost'>19.990.000đ</p>",
		"<button type='button'>Cho vào giỏ hàng</button>"],
	   ["<img src='product/smartphone/image003.png'>",
		"<p class='name'>Điện thoại HTC 10</p>",
		"<p class='cost'>16.990.000đ</p>",
		"<button type='button'>Cho vào giỏ hàng</button>"],
	   ["<img src='product/smartphone/image005.png'>",
		"<p class='name'>Điện thoại Samsung Galaxy S7 Edge</p>",
		"<p class='cost'>19.990.000đ</p>",
		"<button type='button'>Cho vào giỏ hàng</button>"],
	   ["<img src='product/smartphone/image007.png'>",
		"<p class='name'>Điện thoại HTC Desire 620G</p>",
		"<p class='cost'>16.990.000đ</p>",
		"<button type='button'>Cho vào giỏ hàng</button>"]]).map(function(v,i){
		return $.isArray(v) ? $("<div>",{ "class":"col" }
			).append(
					v.map(function(j){
						return "<div class=row>"+j+"</div>";
					})
			) : '<div class="row">'+v+'</div>';
	})
))			
)
});	
</script>
<?php include 'footer.php' ?> 