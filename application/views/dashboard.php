<html>
    <head>
        <title>UNDANGAN SESAMA UNIPA 2021</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
        <!------ Include the above in your HEAD tag ---------->

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">CETAK UNDANGAN CALON MAHASISWA BARU JALUR SESAMA UNIPA 2021</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="<?php echo site_url();?>dashboard/lihatdata" method="POST">
                               
															<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="nopeserta" placeholder="Masukkan Nomor Peserta">                                        
																				
																	 </div>
                          

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <center><button type="submit" id="btn-login" href="#" class="btn btn-success"><i class="glyphicon glyphicon-search"> </i>&nbsp Lihat Data  </button></center>

                                    </div>
                                </div>


                                <div class="form-group">
																
                                    <div class="col-md-6 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Tidak dapat menemukan No.Peserta ?<br> 
                                        <strong><a href="https://bpak.unipa.ac.id/peserta-lulus-seleksi-siswa-andalan-masuk-unipa-sesama-unipa-tahun-2021/" target="blank">	
                                            KLIK DISINI
                                        </a></strong>
                                        </div>
                                    </div>
																		<div class="col-md-6 control">
                                        <div align="right" style="border-top: 1px solid#888; padding-top:15px; font-size:85%; font-style: italic;" >
                                            <?php echo $jumlahrecord;?> peserta telah mencetak undangan
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
		
    
    </body>
</html>

