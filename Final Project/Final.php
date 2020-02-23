<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jetstar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="C:\Users\MINH TUAN\Desktop\HK1 18-19\Web-Ứng Dụng\Final Project\Image/Logo.gif"></script> 
	<style>
		a{padding-right:40px; }
		a.DanhSach {margin-right:60px;}
		a.ThongBao {margin-right:600px;margin-left:300px}
		body{padding-top: 10px; }
		hr {padding-top:5px;}
		div{padding-left="50px";}
		div.mySlide{display:none;}
		.dot{height: 15px;width: 15px;margin:2px 0;margin: 0 3px;background-color: #bbb;border-radius: 50%;display: inline-block;transition: background-color 0.6s ease;}
	</style>
	<style>
		.card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  max-width: 300px;
		  margin: auto;
		  text-align: center;
		  font-family: arial;
		}

		.title {
		  color: grey;
		  font-size: 18px;
		}

		button {
		  border: none; 
		  padding: 8px;
		  color: white;
		  background-color: #000;
		  text-align: center;
		  cursor: pointer;
		  width: 100%;
		  font-size: 18px;
		}

		a {
		  font-size: 22px;
		  color: black;
		}

		button:hover, a:hover {
		  opacity: 0.7;
		}
	</style>
	<style>
		.card2 {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  max-width: 100%;
		  max-height: 100%;
		  margin: auto;
		  text-align: center;
		  font-family: arial;
		}

		.title {
		  color: grey;
		  font-size: 18px;
		}

		button {
		  border: none; 
		  padding: 8px;
		  color: white;
		  background-color: #000;
		  text-align: center;
		  cursor: pointer;
		  width: 100%;
		  font-size: 18px;
		}

		a {
		  font-size: 22px;
		  color: black;
		}

		button:hover, a:hover {
		  opacity: 0.7;
		}
	</style>
	</style>
	<style>
		div.wrapper1{
			border-left: 2px solid #000302;
			border-right: 1px solid #000302;
		}
		div.wrapper1:hover{
			border-top: 1px solid #000302;
			border-bottom: 5px solid #0084ff;
			border-left: 1px solid #000302;
			border-right: 1px solid #000302;
		}
		div.wrapper2{
			border-left: 1px solid #000302;
			border-right: 1px solid #000302;
		}
		div.wrapper2:hover{
			border-top: 1px solid #000302;
			border-bottom: 5px solid #0084ff;
			border-left: 1px solid #000302;
			border-right: 1px solid #000302;
		}
		div.wrapper3{
			border-left: 1px solid #000302;
			border-right: 2px solid #000302;
		}
		div.wrapper3:hover{
			border-top: 1px solid #000302;
			border-bottom: 5px solid #0084ff;
			border-left: 1px solid #000302;
			border-right: 1px solid #000302;
		}
		
		div.Set_honor:hover{
			opacity: 0.8;
		}
		div.Set_honor:hover{
			opacity: 1.2;
			border-bottom:1px solid #03fff7;
		}
	</style>
	<style>
		.Gia_re_hang_ngay{
			border-radius: 25px;
		}
	</style>
	

</head>
<body>
	<div class="collapse navbar-collapse margin-left="20px" >
		<div class="topnav">
			<img src="Image/Logo.gif" ATL="Logo" Width="124px" height="45px" hspace="180px" >
			<a href="GiaGiam"><font color="black" size="4">Giá giảm</font></a>
			<a href="ChuyenBay"><font color="black" size="4">Chuyến bay</font></a>
			<a href="KhachSan"><font color="black" size="4">Khách sạn</font></a>
			<a href="ThueXe"><font color="black" size="4">Thuê xe</font></a>
			<a href="ClubJetstar"><font color="black" size="4">Club Jetstar</font></a>
			<a href="DanhSach" class="DanhSach	"><font color="black" size="4">Danh sách</font></a>
			<img src="Image/SignIn.png" ATL="SignIn" Width="50px" height="48px"><a href="DangNhap"><font color="black" size="3">Đăng nhập</font></a>
			<a href="DanhSach"><font color="black" size="4">Trợ giúp</font></a>
		</div>
	</div>
	<hr>
	<div class="collapse navbar-collapse"  style="margin-left:-200px" >
		<a class="ThongBao"><b>Thông báo</b></a>
		<img src="Image/quanlydatcho.png" ATL="Logo" Width="32px" height="32px" hspace="0px" ><a class="quanlydatcho"><b>Quản lý đặt chỗ</b></a>
		<img src="Image/thongtinchuyenbay.png" ATL="Logo" Width="32px" height="32px" hspace="0px" ><a class="thongtinchuyenbay"><b>Thông tin chuyến bay</b></a>
		<img src="Image/webcheckin.png" ATL="Logo" Width="32px	" height="32px" hspace="0px"><a class="Webcheckin"><b>Web Check-in</b></a>
		<img src="Image/dangnhapdaily.png" ATL="Logo" Width="32px" height="32px" hspace="0px"><a class="dangnhapdaily"><b>Đăng nhập đại lý</b></a>
	</div>
	<div class="slideshow-container">
		<div class="mySlide">
			<div class="slideshow1"></div>
			<img src="Image/slideshow6.jpg" height=500px width=100%>
		</div>
		<div class="mySlide">
			<div class="slideshow2"></div>
			<img src="Image/image1.jpg" height=500px width=100%>
		</div>		
		<div class="mySlide">
			<div class="slideshow3"></div>
			<img src="Image/bienquynhon.jpg" height=500px width=100%>
		</div>
	</div>
	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span>
	  <span class="dot" onclick="currentSlide(2)"></span>
	  <span class="dot" onclick="currentSlide(3)"></span>
	</div>
	
	
	<!-- Tìm kiếm chuyến bay -->
	<main class="body">
		<div class="container">
			<div class="rowx">
				<div class="input-group mb-3">
					<div class="form-titlex" style="background: #fa9200 none repeat scroll 0px 0px; color: White; border-radius: 24px; font-size: 17px; padding: 10px 12px; width: 1290px;">
						<span><center>TÌM KIẾM CHUYẾN BAY</center></span>		
					</div>
						<form method="POST">
							<div class="rowx">
								<div class="  " style="float: left; margin-right: 25px;">
									<span><b>Điểm bắt đầu</b></span><br>
										<select type="select" style=" width: 275px; margin-top: 3px; height: 30px">
											<optgroup label="Việt Nam">
												<option value="">Buôn Ma Thuột - BMV</option>
												<option value="">Chu Lai - VCL </option>
												<option value="">Đà Lạt - DLI</option>
												<option value="">Đà Nẵng - DAD</option>
												<option value="">Đồng Hới - VDH</option>
												<option value="">Hải Phòng - HPH</option>
												<option value="">Hà Nội - HAN</option>
												<option value="">Hồ Chí Minh - SGN</option>
												<option value="">Huế - HUI</option>
												<option value="">Nha Trang - CXR</option>
												<option value="">Phú Quốc - PQC</option>
												<option value="">Pleiku - PXU</option>
												<option value="">Quy Nhơn - UIH</option>
												<option value="">Thanh Hóa - THD</option>
												<option value="">Tuy Hòa - TBB</option>
												<option value="">Vinh - VII</option>
											</optgroup>
											<optgroup label="Úc">
												<option value="">Adelaide - ADL</option>
												<option value="">Vịnh Byron - BNK</option>
												<option value="">Brisbane - BNE</option>
												<option value="">Cairns - CNS</option>
												<option value="">Canberra - JLM</option>
												<option value="">Darwin - DRW</option>
												<option value="">Gold Coast - OOL</option>
												<option value="">Đảo Hamilton - HTI</option>
												<option value="">Đảo Hayman - HIS</option>
												<option value="">Hobart - HBA</option>
												<option value="">Launceston - LST</option>
												<option value="">Mackay - MKY</option>
												<option value="">Melbourne (Tất cả các sân bay) - VIZ</option>
												<option value="">Melbourne (Tullamarine)- MEL</option>
												<option value="">Melbourne (Avalon) - AVV</option>
												<option value="">Newcastle - Cảng Stephens - NTL</option>
												<option value="">Perth - PER</option>
												<option value="">Sunshine Coast - MCY</option>
												<option value="">Sydney - SYD</option>
												<option value="">Townsville - TVS</option>
												<option value="">Uluru(Ayers Rock) - AYQ</option>
												<option value="">Whitsunday Coast(Proserpine) - PPP</option>
												<option value="">Bussenlton Margaret River - BQB</option>
											</optgroup>
											<optgroup label="Campuchia">
												<option value="">PhnômPênh - PNH</option>
												<option value="">Siem Reap - REP</option>
											</optgroup>
											<optgroup label="Trung Quốc">
												<option value="">Changsha - CSX</option>
												<option value="">Hải Khẩu - HAK</option>
												<option value="">Hàng Châu - HGH</option>
												<option value="">Hợp Phì - HFE</option>
												<option value="">Hong Kong - HKG</option>
												<option value="">Macau - NFM</option>
												<option value="">Quảng Châu - CAN</option>
												<option value="">Quý Dương - KWE</option>
												<option value="">Sanya - SYX</option>
												<option value="">Shanghai - PVG</option>
												<option value="">Shantou - SWA</option>
												<option value="">Đài Bắc - TPE</option>
												<option value="">Vũ Hán - WUH</option>
												<option value="">Trịnh Châu - CGO</option>
												<option value="">Từ Châu - XUZ</option>
												<option value="">Cao Hùng - KHH</option>
												<option value="">Ningbo - NGB</option>
											</optgroup>
											<optgroup label="Quần đảo Cook">
												<option value="">Rarotonga - RAR</option>
											</optgroup>
											<optgroup label="Fiji">
												<option value="">Nadi - NAN</option>
											</optgroup>
											<optgroup label="Indonesia">
												<option value="">Bali(Denpasar) - DPS</option>
												<option value="">Jakarta - CGK</option>
												<option value="">Medan(Kualanamu) - KNO</option>
												<option value="">Surabaya - SUB</option>
											</optgroup>
											<optgroup label="Nhật Bản">
												<option value="">Kochi - KCZ</option>
												<option value="">Fukuoka - FUK</option>
												<option value="">Kagoshima - KOJ</option>
												<option value="">Kumamoto - KMJ</option>
												<option value="">Matsuyama - MYJ</option>
												<option value="">Mijazaki - KMI</option>
												<option value="">Nagoya - NGO</option>
												<option value="">Olita - OIT</option>
												<option value="">Okinawa - OKA</option>
												<option value="">Osaka - KIX</option>
												<option value="">Sapporo - CTS</option>
												<option value="">Takamatsu - TAK</option>
												<option value="">Tokyo - NRT</option>
												<option value="">Miyako - SHI</option>
												<option value="">Nagasaki - NGS</option>
												<option value="">Shonai - SYO</option>
											</optgroup>
											<optgroup label="Malaysia">
												<option value="">Kuala Lumpur - KUL</option>
												<option value="">Penang - PEN</option>
											</optgroup>
											<optgroup label="Myanmar">
												<option value="">Yangon - RGN</option>
											</optgroup>
											<optgroup label="New Zealand">
												<option value="">Auckland - AKL</option>
												<option value="">Christchurch - CHC</option>
												<option value="">Dunedin - DUD</option>
												<option value="">Napier - NPE</option>
												<option value="">Nelson - NSN</option>
												<option value="">New Plymouth - NPL</option>
												<option value="">Palmerston North - PMR</option>
												<option value="">Queenstown - ZQN</option>
												<option value="">Wellington - WLG</option>
											</optgroup>
											<optgroup label="Philippines">
												<option value="">Clark - CRK</option>
												<option value="">Manila - MNL</option>
											</optgroup>
											<optgroup label="Singapore">
												<option value="">Singapore - SIN</option>
											</optgroup>
											<optgroup label="Thái Lan">
												<option value="">Bangkok - BKK</option>
												<option value="">Chiang Mai - CNX</option>
												<option value="">Phuket - HKT</option>
											</optgroup>
											<optgroup label="Mỹ">
												<option value="">Honolulu - HNL</option>
											</optgroup>
											<optgroup label="Hàn Quốc">
												<option value="">Seoul - ICN</option>
											</optgroup>
										</select>
									</div>
									<div class=" " style="float: left; margin-right: 15px;">
										<span><b>Điểm kết thúc</b></span><br>
											<select type="select" style=" width: 275px; margin-top: 3px; height: 30px">
												<optgroup label="Việt Nam">
													<option value="">Chu Lai - VCL</option>
													<option value="">Đồng Hới - VDH</option>
													<option value="">Hải Phòng - HPH</option>
													<option value="">Hà Nội - HAN</option>
													<option value="">Hồ Chí Minh - SGN</option>
													<option value="">Thanh Hóa - THD</option>
													<option value="">Vinh - VII</option>
												</optgroup>
												<optgroup label="Trung Quốc">
													<option value="">Quảng Châu - CAN</option>
												</optgroup>
												<optgroup label="Nhật Bản">
													<option value="">Osaka - KIX</option>
												</optgroup>
											</select>
									</div>
									<div class="rowx" style="float: left; margin-right: 25px;">
										<div class="col-xs-6xx" style="float: left; margin-right: 15px;">
											<span><b>Ngày đi</b></span><br>
											<input class="form-control hasDatepicker" id="depDate" name="depDate" value="06/05/2019" style="border: 0px none; border-radius: 0px; border: 0px none; width: 114px; margin-top: 0px;" type="date">
										</div>
									</div>
									<div class="rowx" style="float: left; margin-right: 15px;">
										<span><b>Ngày về</b></span><br>
										<input class="form-control hasDatepicker" id="depDate" name="depDate" value="06/05/2019" style="border: 0px none; border-radius: 0px; border: 0px none; width: 114px; margin-top: 0px;" type="date">
									</div>
									<div class="rowx" style="float: left; margin-right: 25px;">
										<span><b>Người lớn </b></span><br>
											<select type="select" style=" width: 85px; margin-top: 3px; height: 30px">
												<option value=""> 1 người </option>
												<option value=""> 2 người </option>
												<option value=""> 3 người </option>
												<option value=""> 4 người </option>
												<option value=""> 5 người </option>
												<option value=""> 6 người </option>
												<option value=""> 7 người </option>
												<option value=""> 8 người </option>
												<option value=""> 9 người </option>
												<option value=""> 10 người </option>
											</select>	
									</div>
									<div class="rowx" style="float: left; margin-right: 25px;">
										<span><b>Trẻ em </b></span><br>
											<select type="select" style=" width: 85px; margin-top: 3px; height: 30px">
												<option value=""> 1 bé </option>
												<option value=""> 2 bé </option>
												<option value=""> 3 bé </option>
												<option value=""> 4 bé </option>
												<option value=""> 5 bé </option>
												<option value=""> 6 bé </option>
												<option value=""> 7 bé </option>
												<option value=""> 8 bé </option>
												<option value=""> 9 bé </option>
												<option value=""> 10 bé </option>
											</select>	
									</div>
									<div class="Booking" style= "width: 170px;float: left; margin-top: 15px; margin-right: 0px">
										<button type ="button"> Đặt Vé </button>
									</div>						
						</form>
					</div>
			</div>
		</div>	
	</main>
	<p class = "Line"><h4><center>Vé mở bán đến khi chương trình khuyến mại kết thúc hoặc vé đã bán hết. Số lượng vé có hạn, áp dụng cho một số chuyến bay và ngày bay. Có điều kiện áp dụng. Đặt vé tại Jetstar.com để được hưởng giá vé rẻ nhất</center></h4></p>
	<center>
	<div class="Container" style="margin-left:180;width:80%">
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					  <img src="Image/bali.jpeg" alt="Anh" style="width:100%; height:2%">
						<p class="title">Phòng vé Jetstar Pacific</p>
						<h4>Nay đã có bán vé Vietnam Airlines</h4>
						<p><button>Danh sách phòng vé</button></p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					  <img src="Image/dubai.png" alt="Anh" style="width:100%">
						<p class="title">Săn mây cùng Jetstar</p>
						<h4>Để được bay 1 năm miễn phí</h4>
						<p><button>Tham gia ngay</button></p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					  <img src="Image/london.png" alt="Anh" style="width:100%">
						<p class="title">Dặm và tiền</p>
						<h4>Mua vé dễ dàng</h4>
						<p><button>Tìm hiểu thêm</button></p>
				</div>		  
			</div>
			<div class="col-sm-3">
				<div class="card">
					  <img src="Image/banahill.jpg" alt="Anh" style="width:100%">
						<p class="title">Dặm và tiền</p>
						<h4>Mua vé dễ dàng</h4>
						<p><button>Tìm hiểu thêm</button></p>
				</div>		  
			</div>
		</div>
	</div>
	</center>

	<div class="container" style="width:80%">
		<div class="Gia_re_hang_ngay">
			<center><h2><p class="Gia_re_hang_ngay" style="background-color:#fad65f;">Giá rẻ hàng ngày.Hài lòng khi bay - 19001550</p></h2></center>
		</div>
	</div>

	<div class="container" style="margin-left:20">
		<div class="col-sm-3">
			<div class="row">
				<div class="wrapper1">
					<div class="Set_honor">
						<center>
						<h4><b>Buôn Ma Thuộc</b></h4>
						<p><b>1 tháng 1 - 20 tháng 12 2019</b></p>
						<p>Từ Thành phố Hồ Chí Minh</p>
						<p>Giá lượt về 0đ</p>
						</center>
					</div>	
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="row">
				<div class="wrapper2">
					<center>
					<h4><b>Buôn Ma Thuộc</b></h4>
					<p><b>1 tháng 1 - 20 tháng 12 2019</b></p>
					<p>Từ Thành phố Hồ Chí Minh</p>
					<p>Giá lượt về 0đ</p>
					</center>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="row">
				<div class="wrapper2">
					<center>
					<h4><b>Buôn Ma Thuộc</b></h4>
					<p><b>1 tháng 1 - 20 tháng 12 2019</b></p>
					<p>Từ Thành phố Hồ Chí Minh</p>
					<p>Giá lượt về 0đ</p>
					</center>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="row">
				<div class="wrapper3">
					<center>
						<div class="Set_honor">
							<h4><b>Buôn Ma Thuộc</b></h4>
							<p><b>1 tháng 1 - 20 tháng 12 2019</b></p>
							<p>Từ Thành phố Hồ Chí Minh</p>
							<p>Giá lượt về 0đ</p>
							</center>
						</div>	
				</div>
			</div>
		</div>
	</div>
	<br>

	<div class="Dia_diem">
		<div class="container" style="margin-left:180;width:80%">
			<div class="row">
				<div class="col-sm-4">
					<div class="card2">
						  <img src="Image/bali.jpeg" alt="Anh" style="width:100%; height:2%">
							<p class="title">APhòng vé Jetstar Pacific</p>
							<h4>Nay đã có bán vé Vietnam Airlines</h4>
							<p><button>Danh sách phòng vé</button></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card2">
						  <img src="Image/dubai.png" alt="Anh" style="width:100%">
							<p class="title">Săn mây cùng Jetstar</p>
							<h4>Để được bay 1 năm miễn phí</h4>
							<p><button>Tham gia ngay</button></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row-sm-6">
						<div class="card2">
							  <img src="Image/london.png" alt="Anh" style="width:100%; height:100%">
								<p class="title">Dặm và tiền</p>
								<h4>Mua vé dễ dàng</h4>
								<p><button>Tìm hiểu thêm</button></p>
						</div>		  
					</div>			
				</div>
			</div>
		</div>
	</div>
	
	<div class="Dia_diem">
		<div class="container" style="margin-left:180;width:80%">
			<div class="row">
				<div class="col-sm-4">
					<div class="card2">
						  <img src="Image/bali.jpeg" alt="Anh" style="width:100%; height:2%">
							<p class="title">Phòng vé Jetstar Pacific</p>
							<h4>Nay đã có bán vé Vietnam Airlines</h4>
							<p><button>Danh sách phòng vé</button></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card2">
						  <img src="Image/dubai.png" alt="Anh" style="width:100%">
							<p class="title">Săn mây cùng Jetstar</p>
							<h4>Để được bay 1 năm miễn phí</h4>
							<p><button>Tham gia ngay</button></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row-sm-6">
						<div class="card2">
							  <img src="Image/london.png" alt="Anh" style="width:100%; height:100%">
								<p class="title">Dặm và tiền</p>
								<h4>Mua vé dễ dàng</h4>
								<p><button>Tìm hiểu thêm</button></p>
						</div>		  
					</div>			
				</div>
			</div>
		</div>
	</div>
	
	<div class="Dia_diem">
		<div class="container" style="margin-left:180;width:80%">
			<div class="row">
				<div class="col-sm-4">
					<div class="card2">
						  <img src="Image/bali.jpeg" alt="Anh" style="width:100%; height:2%">
							<p class="title">Phòng vé Jetstar Pacific</p>
							<h4>Nay đã có bán vé Vietnam Airlines</h4>
							<p><button>Danh sách phòng vé</button></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card2">
						  <img src="Image/dubai.png" alt="Anh" style="width:100%">
							<p class="title">Săn mây cùng Jetstar</p>
							<h4>Để được bay 1 năm miễn phí</h4>
							<p><button>Tham gia ngay</button></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card2">
						  <img src="Image/london.png" alt="Anh" style="width:100%; height:100%">
							<p class="title">Dặm và tiền</p>
							<h4>Mua vé dễ dàng</h4>
							<p><button>Tìm hiểu thêm</button></p>
					</div>		  
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<center>
	<div class="Container" style="margin-left:180;width:80%">
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					  <img src="Image/bali.jpeg" alt="Anh" style="width:100%; height:2%">
						<p class="title">Phòng vé Jetstar Pacific</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					  <img src="Image/dubai.png" alt="Anh" style="width:100%">
						<p class="title">Săn mây cùng Jetstar</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					  <img src="Image/london.png" alt="Anh" style="width:100%">
						<p class="title">Dặm và tiền</p>
				</div>		  
			</div>
			<div class="col-sm-3">
				<div class="card">
					  <img src="Image/banahill.jpg" alt="Anh" style="width:100%">
						<p class="title">Dặm và tiền</p>
				</div>		  
			</div>
		</div>
	</div>
	</center>



<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	  var i;
	  var slides = document.getElementsByClassName("mySlide");
	  var dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
</script>
</body>
</html>