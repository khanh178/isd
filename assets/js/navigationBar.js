$(function(){
var list1 = ["<a href='./'>Smartphone</a>","<a href='./'>Laptop</a>","<a href='./'>Phụ kiện loa</a>",
"<a href='./'>Router</a>","<a href='./'>Thiết bị trình chiếu</a>","<a href='./'>USB</a>","<a href='./'>Ổ cứng</a>"],
	list2 = ["<a href='./'>Giới thiệu chung</a>","<a href='./'>Hoạt động thực tế</a>","<a href='./'>Đối tác kinh doanh</a>"],
	list3 = ["<a href='./'>abc</a>","<a href='./'>abc</a>","<a href='./'>abc</a>"],
	list4 = ["<a href='./'>abc</a>","<a href='./'>abc</a>","<a href='./'>abc</a>"];
$('#header').append($('<div>',{'id':'menu'}).append(
["<p><i class='fa fa-list-ul' aria-hidden='true'></i> Danh mục sản phẩm</p>","<p><i class='fa fa-home' aria-hidden='true'></i> Trang chủ</p>","Giới thiệu","Catalog","Tin tức"].map(function(v,i){
return $('<a>',{'class':'menu',href:i<2 ? ["http://google.com.vn","http://dantri.com.vn"][i] : i==4 ? "http://lazada.vn" : i==5 ? "contact.php" : "news.php?in="+(i-1) }).append('<div id="point">'+v+'</div>',$('<div>',{"class":"List"} ).append(
(i==0 ? [list1] : i==1 ? [] : i==2 ? [list2] : i==3 ? [list4] : i==4 ? [list4] : i==5 ?[list2] :[] ).map(function(v,i){
	return $.isArray(v) ? $("<div>",{ "class":"col" }).append(
							v.map(function(j){
							return "<div class=row>"+j+"</div>";
							})
						) : '<div class="row">'+v+'</div>';
					}) 
				)
			)
	})
));
})
