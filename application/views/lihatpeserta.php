<html>
    <head>
        <title>Undangan SESAMA UNIPA 2021</title>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>

	<body>
  <div class="container">  
	<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">   
	<div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><center>PESERTA LULUS SELEKSI JALUR SESAMA UNIPA TAHUN 2021</div>
                            </center></div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" action="<?php echo site_url();?>dashboard/cetak" method="POST">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">No. Peserta</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nopeserta" value="<?php echo $pesertum['nopendaftar']; ?>" readonly>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Nama</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" value="<?php echo strtoupper($pesertum['namapendaftar']); ?>" readonly>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Asal Sekolah</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" value="<?php echo strtoupper($pesertum['asalslta']); ?>" readonly>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Program Studi</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" value="<?php echo strtoupper($pesertum['namaprodi']); ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Jenjang</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="passwd" value="<?php echo strtoupper($pesertum['jenjang']); ?>" readonly>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Fakultas</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="icode" value="<?php echo strtoupper($pesertum['namafakultas']); ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <a class="btn btn-primary" id="signinlink" href="<?php echo site_url();?>dashboard"><i class="glyphicon glyphicon-chevron-left"></i> &nbsp Kembali</a>
																				<button type="submit" id="btn-signup" type="button" class="btn btn-info"><i class="glyphicon glyphicon-print"></i> &nbsp Cetak</button>
                                         
                                    </div>
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
          </div>     
          </div>      
         </div> 
         
	</body>
</html>
