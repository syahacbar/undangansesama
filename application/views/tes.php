<html>
    <head>
        <title>UNDANGAN SESAMA UNIPA 2022</title>
       <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/select2-bootstrap.min.css">
       
    </head>
    <body>
        <!------ Include the above in your HEAD tag ---------->

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">CETAK UNDANGAN CALON MAHASISWA BARU JALUR SESAMA UNIPA 2022</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="<?php echo site_url();?>dashboard/lihatdata" method="POST">
															<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <!-- <input id="login-username" type="text" class="form-control" name="nopeserta" placeholder="Masukkan Nomor Peserta">  --> 
                                        <select class="form-control" name="nopeserta" id="nopeserta"></select>                                    
																				
																	 </div>
                          
   </body>
</html>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
      $("#nopeserta").select2({
        theme: "bootstrap",
        placeholder: '-- Ketikkan Nama Peserta --',
        minimumInputLength: 2,
        ajax: {
          url: "<?php echo site_url('dashboard/searchPeserta'); ?>",
          dataType: 'json',
          delay: 250,
          processResults: function(data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });
    });
  </script>