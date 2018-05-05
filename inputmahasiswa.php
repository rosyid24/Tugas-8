    <!doctype html public "-//W3C//DTD HTML 4.0 //EN">
    
    <html>
    <head>
           <title>Form Mahasiswa</title>
           <link rel="stylesheet" type="text/css" href="style.css" >
    </head>
    <body>
	     
	    <form action="" method="post"" onsubmit="return validate()" enctype="multipart/form-data">
	    <h1 id="h1"><strong>FORM DATA MAHASISWA</strong></h1><br>
	    
	    <pre>
	    <div class="input">
	    	<fieldset><legend>Data Personal</legend>
	    <label for="nama" >Nama                : <input type="text" minlength="5" maxlength="25" name="txtnama" required=""></label>
	    <label for="nim" >NIM                  : <input type="text" minlength="16" maxlength="16" name="txtnim" onkeypress="return hanyaAngka(event,false)" required=""></label>
	    <label for="tanggal" >Tangal Lahir     : <input type="date" name="tgl" required=""> </label>

	    <label for="email" >Email                : <input type="Email" name="email" required=""></label>
	    <label for="jenis" >Jenis Kelamin   : 
					<input type="radio" name="jenis" value="Laki-Laki" checked>Laki-Laki  
					<input type="radio" name="jenis" value="Perempuan">Perempuan</label>
	    <label for="bakat" >Bakat                : 
	                                <input type="checkbox" name="bakat[]" value="Menari" >Menari <br />
	                                <input type="checkbox" name="bakat[]" value="Musik">Musik <br />
	                                <input type="checkbox" name="bakat[]" value="Olahraga">Olahraga <br />
	                                <input type="checkbox" name="bakat[]" value="Lain -lain">Lain - lain <br /></label>
	    <label for="foto">Foto                   :  <input name="userfile" type="file" onchange="tampilkanPreview(this,'preview')"/><input name="MAX_FILE_SIZE" type="hidden" value="3000000" /></label>
            
            <!--element image untuk menampilkan preview-->
						            <img id="preview" src="" alt="" width="320px"/></fieldset>
		<fieldset><legend>Latar Belakang Keluarga</legend>
		<textarea name="ltr" class="textarea-field" required=""></textarea></fieldset>
        </form>
<br />

	                   	<input type="submit" class="button" name="bhasil" value="Hasil" onsubmit="return validate()">      <input type="reset" class="button" name="bbatal" value="Reset"><br>

	    </pre>
	    	
	    </div>
    </body>

    <script type="text/javascript">
 		function hanyaAngka(e, decimal) {
	    var key;
	    var keychar;
	     if (window.event) {
	         key = window.event.keyCode;
	     } else
	     if (e) {
	         key = e.which;
	     } else return true;
	  
	    keychar = String.fromCharCode(key);
	    if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
	        return true;
	    } else
	    if ((("0123456789").indexOf(keychar) > -1)) {
	        return true;
	    } else
	    if (decimal && (keychar == ".")) {
	        return true;
	    } else return false;
	    }

	    function validate(){
		var chks = document.getElementsByName('bakat[]');
		var hasChecked = false;

		for (var i = 0; i < chks.length; i++)
		{
			if (chks[i].checked)
			{
			hasChecked = true;
			break;
			}
		}

		if (hasChecked == false)
			{
			alert("Anda wajib pilih salah satu bakat!!!");
			return false;
			}

	return true;
	}
	           function tampilkanPreview(gambar,idpreview){
//                membuat objek gambar
                var gb = gambar.files;
                
//                loop untuk merender gambar
                for (var i = 0; i < gb.length; i++){
//                    bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview=document.getElementById(idpreview);            
                    var reader = new FileReader();
                    
                    if (gbPreview.type.match(imageType)) {
//                        jika tipe data sesuai
                        preview.file = gbPreview;
                        reader.onload = (function(element) { 
                            return function(e) { 
                                element.src = e.target.result; 
                            }; 
                        })(preview);

    //                    membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                    }else{
//                        jika tipe data tidak sesuai
                        alert("Type file tidak sesuai. Khusus image.");
                    }
                   
                }    
            }
	</script>

    </html>
