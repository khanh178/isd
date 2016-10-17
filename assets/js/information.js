$(function(){
	$("#footer-bottom").append(
		([["<div id='title'>công ty cổ phần điện tử viễn thông v-soft</div>",
			"<div><p><h>Địa chỉ :</h> Tầng 14 - Tòa nhà Vinaconex 9 - Đường Phạm Hùng - Mễ Trì - Từ Liêm - Hà Nội</p></div>",
			"<div><p><h>SĐT :</h> 01686666951 | 0912040039</p></div>",
			"<div><p><h>E-mail :</h> dtvienthongvsoft@gmail.com - <h>Website : www.dtvtvsoft.com</h></p></div>"],
		["<div id='title'>chăm sóc khách hàng</div>",
			"<a href='http://google.com'>Hướng dẫn mua hàng</a>",
			"<a href='http://google.com'>Hình thức thanh toán</a>",
			"<a href='http://google.com'>Chính sách vận chuyển</a>",
			"<a href='http://google.com'>Điều khoản sử dụng</a>"],
		["<div id='title'>Đối tác</div>",
			"<img src='http://www.v-soft.com.vn/images/stories/anhdaidien/doitac/mobi.jpg'><img src='http://www.v-soft.com.vn/images/stories/anhdaidien/doitac/vtn.jpg'><img src='http://www.v-soft.com.vn/images/stories/anhdaidien/doitac/vina.jpg'>",
			"<img src='http://www.v-soft.com.vn/images/stories/anhdaidien/doitac/viettel.jpg'><img src='http://www.v-soft.com.vn/images/stories/anhdaidien/doitac/s-fone.jpg'><img src='http://www.v-soft.com.vn/images/stories/anhdaidien/doitac/bee-line.jpg'>"]]).map(function(v,i){
			return $.isArray(v) ? $("<div>",{ "class":"col" }
				).append(
						v.map(function(j){
							return "<div class=row>"+j+"</div>";
						})// Array.join(): Join các phần tử trong mảng = <br>, ví dụ: [1,2,3,...].join("-") = 1-2-3-...
				) : '<div class="row">'+v+'</div>';
		})
	)
})
