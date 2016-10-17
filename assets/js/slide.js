$(function(){
				$("#arrow").append(["a","b"].map(function(v,i){
						return "<div class='"+["prev","next"][i]+"'>"+["<",">"][i]+"</div>";
					})  
				).on("click",".next,.prev",function(){
					var next = $(this).hasClass("next"), // Là nút tiếp theo hay ko?
						current = $("#thumb .thumb.current"); // Nút hiện tại
					if (next) { // Xem ảnh tiếp theo
						var next = current.next(); // Nút tiếp theo = nút hiện tại > next
						if (!next.length) // Nếu ko có nút tiếp theo => đang ở nút cuối
							next = $("#thumb .thumb:first"); // Nút tiếp theo = nút đầu tiên
						next.click(); // Bấm vào nút tiếp theo
					} else { // Xem ảnh trước
						var prev = current.prev(); // Nút tiếp theo = nút hiện tại > prev
						if (!prev.length) // Không có nút tiếp theo => đang ở nút đầu
							prev = $("#thumb .thumb:last"); // Nút tiếp theo = nút cuối
						prev.click(); // Bấm vào nút tiếp theo
					}
				});
				$("#slide").append(
					["http://localhost:8080/isd/assets/images/s4.jpg","http://localhost:8080/isd/assets/images/s1.jpeg","http://localhost:8080/isd/assets/images/s3.jpg","http://localhost:8080/isd/assets/images/s5.jpg",].map(function(v,i){
						$("#thumb").append(
							"<div id="+i+" class='thumb'>"+i+"</div>"
						);
						return "<div class='image' style='background-image:url("+v+");'></div>";
				   })
				);
				$("#thumb").on("click",".thumb",function(){
					var i = $(this) // Nút vừa bấm
						.addClass("current") // Thêm class nút hiện tại
						.siblings() // Gọi các nút còn lại
							.removeClass("current") // Bỏ class nút hiện tại
						.end() // Quay về nút vừa bấm
					.index(); // Thứ tự của nút vừa bấm
					$("#slide .image:eq("+i+")") // Gọi ảnh có thứ tự giống nút
						.addClass("current") // Thêm class là ảnh hiện tại
						.fadeIn(500,function(){ // Hiện ảnh đc gọi
							$(this).siblings().removeClass("current").fadeOut(500); // Ẩn các ảnh còn lại
						});
				});
				$("#thumb .thumb:first").click();
});