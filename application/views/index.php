<div id="slide-wrap">
		<div id="slide"></div>
		<div id="arrow"></div>
		<div id="thumb"></div>
</div>
<div class='table'></div>

<script type="text/javascript">
	$(function(){
		var data = $.parseJSON("<?php echo addslashes(json_encode($data)); ?>"); // encode $data thành json rồi parse lại thành object js
		console.log(data);

		var cat = { 1:"Router", 2:"tên 2", 3:"cat 3", 4:"abc", 5:"trinh-chieu", 6:"usb", 7:"hardware" };
		$(".table").append(
			$.map(cat,function(v,i){
				return $("<div>",{ id:"cat"+i }).append( 
					'<div class="label">'+v+'</div><hr><div class="product"></div><div class="prev"><</div><div class="next">></div>'
				);
			})
		).on("click",".prev,.next",function(){
			var x = $(this),
				prev = x.hasClass("prev"),
				next = 1, // Số lượng ô next
				list = x.siblings(".product"),
				width = list.width(); // Chiều rộng
			list.animate({
				scrollLeft:(prev ? "-" : "+")+"="+(width/4*next), // list: cái khung, animate: chuyển động, scrollLeft: cuộn trái, prev: đang bấm nút prev, += cộng dồn, -= trừ dồn.
			},350,function(){
				var left = list.scrollLeft();  //// lấy xem thanh cuộn đang cách lề trái bao nhiêu, =0 nghĩa là chưa cuộn
				list.siblings(".next")[left+width>=list[0].scrollWidth ? "hide" : "show"]();
				// tương tự, list[0].scrollWidth = tổng chiều rộng của list sp, lèft là phần bị cuộn trái, width là chiều rộng nhìn thấy đc của list. 
				list.siblings(".prev")[left ? "show" : "hide"]().siblings(".next")[left+width>=list[0].scrollWidth ? "hide" : "show"](); // cái này để ẩn nút nào ko dùng đc, ví dụ hết bên trái rồi tiì prev ẩn, hết phải thì next ẩn. 
			}); 
		});
		data.map(function(v,i){ 
			$("#cat"+v.category_id+" .product").append(
				$("<div>",{ class:"col" }).append(
					["<img src="+v.product_img+">",
					"<p class='name'>"+v.product_name+"</p>",
					"<p class='cost'>"+v.selling_price+"</p>",
					"<button type='button' class='cart' id='"+v.product_id+"'>Cho vào giỏ hàng</button>"].map(function(u){
						return "<div class=row>"+u+"</div>";
					})
				)
			)
		});
		$(".table .prev").click();

		$(".cart").on("click",function(){
			var id = $(this).attr("id");
			window.location.replace("http://localhost:8080/isd/index.php/cart_controller/index?id="+id);
		})
	});
</script>
</div>
