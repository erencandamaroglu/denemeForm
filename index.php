
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Form Deneme</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/deneme-form/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/deneme-form/style/custom-bootstrap.css"/>
	<link rel="stylesheet" href="/deneme-form/style/custom.css"/>
</head>
<body>
<div class="container">
	<form action="tesekkuler.html">
		<div class="panel panel-primary">
		 <div class="panel-heading">İletişim Formu</div>
			<div class="panel-body">
			
				<div class="row">
					<div class="form-group">
						<div class="col-md-2">
						<label for="ad">Adınız</label>
						</div>
						<div class="col-md-4">
						<input type="text" name="ad" id="ad" class="form-control" placeholder="Ahmet" autofocus/>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group">
						<div class="col-md-2">
						<label for="soy">Soyadınız</label>
						</div>
						<div class="col-md-4">
						<input type="text" name="soy" id="soy" class="form-control" placeholder="Şentürkgiller"/>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group">
						<div class="col-md-2">
						<label for="email">E-Mail</label>
						</div>
						<div class="col-md-4">
						<input type="email" name="email" id="email" class="form-control" placeholder="mailadresi@mail.com" required/>
						</div>
					</div>
				</div>
								
				<div class="row">
					<div class="form-group">
						<div class="col-md-2">
						<label for="tel">Telefon</label>
						</div>
						<div class="col-md-4">
						<input type="text" name="tel" id="tel" class="form-control" placeholder="0598 887 88 55" required/>
						</div>
					</div>
				</div>
							
				<div class="row">
					<div class="form-group">
						<div class="col-md-2">
						<label for="memleket">Memleketiniz</label>
						</div>
						<div class="col-md-4">
						<select name="memleket" id="memleket" class="form-control">
						<option value="01">Adana</option>
						<option value="22">Edirne</option>
						<option value="34">İstanbul</option>
						<option value="55">Samsun</option>
						<option value="57">Sinop</option>
						<option value="58">Sivas</option>
						</select>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group">
						<div class="col-md-2">

						<label for="medeni">Medeni Durum</label>
						</div>
						<div class="col-md-4">
						<div id="ara_input">
						<label for="bekar">Bekar</label>
						<input type="radio" name="medeni" id="bekar">
						<label for="evli">Evli</label>
						<input type="radio" name="medeni" id="evli">
						</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group">
						<div class="col-md-2">
						<label for="cinsiyet">Cinsiyet1</label>
						</div>
						<div class="col-md-4">
						<div id="ara_input">
						<label for="erkek">Erkek</label>
						<input type="radio" name="cinsiyet" id="erkek">
						<label for="kadin">Kadın</label>
						<input type="radio" name="cinsiyet" id="kadin">
						</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<div class="col-md-2">
						<label for="medeni">Eğitim Durmu</label>
						</div>
						<div class="col-md-5">
						<div id="ara_input">
						<label for="ilkokul">İlk Okul</label>
						<input type="radio" name="egitim" id="ilkokul">
						<label for="lise">Lise</label>
						<input type="radio" name="egitim" id="lise">
						<label for="universite">Üniversite</label>
						<input type="radio" name="egitim" id="universite"/>
						<label for="yukseklisans">Yüksek Lisans</label>
						<input type="radio" name="egitim" id="yukseklisans"/>
						</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group">
						<div class="col-md-2">
						<label for="ilgialani">İlgi Alanları</label>
						</div>
						<div class="col-md-6">
						<div id="ara_input">
						<label for="kitap">Kitap</label>
						<input type="checkbox" name="ilgialani" id="kitap">
						<label for="muzik">Müzik</label>
						<input type="checkbox" name="ilgialani" id="muzik">
						<label for="bilgisayar">Bilgisayar</label>
						<input type="checkbox" name="ilgialani" id="bilgisayar"/>
						<label for="gezmek">Gezmek</label>
						<input type="checkbox" name="ilgialani" id="gezmek"/>
						<label for="uyumak">Uyuman</label>
						<input type="checkbox" name="ilgialani" id="uyumak"/>
						</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group">
						<div class="col-md-2">
						<label for="mesaj">Mesaj</label>
						</div>
						<div class="col-md-4">
						<textarea name="mesaj" id="mesaj" cols="2" rows="5" class="form-control" placeholder="Bu alana bize iletmek istediğiniz mesajinizi yazın"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-2">
						<label for=""></label>
						</div>
						
						<div class="col-md-1">
						<input type="submit" value="Gönder" class="btn btn-primary"/>
						</div>
						<div class="col-md-2">
						<a href="tesekkuler.html"><input type="button" value="Teşekkürler Sayfası" class="btn btn-warning"/></a>
						</div>
					</div>
				</div>
								
			</div>
			<div class="panel-footer">Eren Can Damaroğlu</div>
		</div>
		
	</form>
</div>	
	
	<script type="text/javascript" src="/deneme-form/js/bootstrap.min.js"></script>
</body>
</html>