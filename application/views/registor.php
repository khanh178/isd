<link href="<?php echo base_url('assets/css/registor.css')?>" type="text/css" rel="stylesheet" media="screen,print"/>
<div id='re-table'>
	<div class='tit'>Đăng ký</div>
</div>
<script> 
$(function(){
	$('#re-table').append(
	    $('<div>',{'id':'form-registor'}).on('keyup',function(e){
			if (e.keyCode==13)
			$('.registor .submit').click();
		}).html(
			f = $('<form>',{'class':'registor'}).append(['Họ tên ','Tài khoản ','Mật khẩu ','Nhập lại mật khẩu ','Email ','SĐT '].map(function(v,i) {
				var j = ["name","user","pass","re-type","email","number"][i];
				return  $("<div>", {'class':'mtb10 tl' }).append('<label class=fb for='+j+' style="letter-spacing:-1px;text-align:left;">'+v+':</label>',
						$("<div>",{ "class":"mb10 mt10" }).css({ background:"white",boxShadow:"inset 0 0 5px 0 #ccc",border:"1px solid #ddd",borderRadius:4,overflow:"hidden",padding:10, width:"500px",}).append(
							$("<input>",{id:j,name:j,type:['text','text','password','password','text','text',][i],placeholder:v}).css({ width:"100%", outline:"none", border:0,resize:"none", background:"none",padding:0, })
							)
						)
			}),   
			$('<div>',{'class':'lab fb',text:'Giới tính :','style':'letter-spacing:-1px;text-align:left;'}).append('<br/><div id="sex-field"><label for="male"> Nam </label><input type="radio" name="gender" id="male" value="male"><label for="female"> Nữ </label><input type="radio" name="gender" id="female" value="female"><label for="other"> Khác </label><input type="radio" name="gender" id="other" value="other"></div>'),
				$('<div>',{'class':'lab fb',text:'Sinh nhật :','style':'letter-spacing:-1px;text-align:left;'}
				).append('<br/><select name="DOBDay"><option> - Ngày - </option><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select><select name="DOBMonth"><option> - Tháng - </option><option value="01">January</option><option value="02">Febuary</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select><select name="DOBYear"><option> - Năm - </option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option></select>'),
				$('<div class="note">Tôi đã đọc và đồng ý với <a href="http://google.com">Điều khoản sử dụng</a> của V-soft.</div>'),
			m = $('<div>',{'class':'registor-thongbao mtb10'}),
			$('<div>',{'class':'di mtb10'}).append(
				$('<div>',{'class':'submit p5 fb bg1',text:'Đăng ký'}).on('click',function(){
					/*var x = $(this);
					if (x.hasClass("chờ"))
					return;
					x.addClass("chờ");
					var name = f.find("#user").val(),
					pass = f.find("#pass").val();*/
					/*if (name && pass) {
						$.post('function.php',{id:'login',name:name,pass:pass},function(echo){
							switch (echo) {
								case "null":
									m.text('*Không để trống [Tên tài khoản] và [Mật khẩu]');
									x.removeClass("chờ");
									break;
								case "error":
									m.text('*Sai [Tên tài khoản] hoặc [Mật khẩu]!');
									x.removeClass("chờ");
									break;
								case "done":
									location.reload();
									break;
							}
						});
					} else {
						m.text('*Không để trống '+(!name ? "[Tài khoản]" :"[Mật khẩu]"));
						x.removeClass("chờ");
					}*/
					var name = f.find("#user").val(),
						pass = f.find("#pass").val();
					if(!name || !pass){
						m.text('*Không để trống '+(!name ? "[Tài khoản]" :"[Mật khẩu]"));
					}
					var data = f.serialize();
					console.log(data);
					$.post(
						'http://localhost:8080/isd/index.php/Registor_controller/index',
						data,
						function(res){
							console.log(res);
							switch(res){
								case "4":
									m.text('*[Tài khoản] đã tồn tại!');
									break;
								case "1":
									m.text('*Điền sai định dạng!');
									break;
								case "2":
									m.text('*[Mật khẩu] không giống nhau !');
									break;
								case "3":
									m.empty();
									$("body").append(
										$("<div>",{ "class":"blurred-div" }).append(
											$("<div>",{'class':'thongbao ffrc fs14 fb'}).append(
													$("<div>",{text:'Chúc mừng bạn đăng ký thành công'}),
													$("<img>",{'width':'50px','height':'50px','src':'<?php echo base_url('assets/images/loading.gif') ?>'}),
													$("<div>",{'class':'fs8 fi',text:'Quay lại trang chủ sau 5 giây'})
												)
										).on("click",function(e){
											if(e.target==this){
												$(".blurred-div, .thongbao").remove();
											}
										})
									)
									setTimeout(function(){
										location.href="http://localhost:8080/isd/index.php/display";
									},5000)
									break;
							}
						});
				})
			) // m (noti và nút)
		) // f ( form đăng nhập : label và input)
	)
) //html()
})
</script>
