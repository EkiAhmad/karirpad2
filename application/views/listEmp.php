<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Product List</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
<style>
.dataTables_wrapper .dataTables_paginate .paginate_button {
	box-sizing: border-box;
	display: inline-block;
	min-width: 1.5em;
	padding: 1px;
	margin-left: 2px;
	text-align: center;
	text-decoration: none !important;
	cursor: pointer;
	color: #333 !important;
	border: 1px solid transparent;
	border-radius: 2px;
}
</style>
</head>
<body>
<div class="container">	
    <div class="row">		
        <div class="col-12">	
            <div class="col-md-12">
		        <div class="float-right">
		        	<br>
		        	<a class="btn btn-danger" href="<?php echo site_url('login/logout');?>">Sign Out</a>
		        </div>	
				<br>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Responsive Header -->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-1169273815439326"
					 data-ad-slot="1311700855"
					 data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				<br>
                <h1>Data Barang<br>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#addEmpModal"><span class="fa fa-plus"></span> Add New</a></div><br>
                </h1>
            </div>            
            <table class="table table-striped" id="employeeListing">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
						<th>Kategori</th>
                        <th>Harga</th>
                        <th>Diskon</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="listRecords">                    
                </tbody>
            </table>
        </div>
    </div>
        
</div>	
<form id="saveEmpForm" method="post">
	<div class="modal fade" id="addEmpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">                       
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Nama Barang*</label>
					<div class="col-md-10">
					  <input type="text" name="nama" id="nama" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Kategori*</label>
					<div class="col-md-10">
					  <input type="text" name="kategori" id="kategori" class="form-control" required> 
					</div>
				</div>
				<!-- <div class="form-group row">
					<label class="col-md-2 col-form-label">Foto*</label>
					<div class="col-md-10">
					  <input type="file" name="foto" id="foto" class="form-control" required>
					</div>
				</div> -->
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Harga*</label>
					<div class="col-md-10">
					  <input type="text" name="harga" id="harga" class="form-control" required>
					</div>
				</div>
				<!-- <div class="form-group row">
					<label class="col-md-2 col-form-label">Designation*</label>
					<div class="col-md-10">
					  <input type="text" name="designation" id="designation" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Address*</label>
					<div class="col-md-10">
					  <textarea name="address" id="address" class="form-control" rows="5" required></textarea>
					</div>
				</div> -->
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Save</button>
		  </div>
		</div>
	  </div>
	</div>
</form>
<form id="editEmpForm" method="post">
	<div class="modal fade" id="editEmpModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="editModalLabel">Edit Data</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Nama Barang*</label>
					<div class="col-md-10">
					  <input type="text" name="dataNama" id="dataNama" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Kategori*</label>
					<div class="col-md-10">
					  <input type="text" name="dataKategori" id="dataKategori" class="form-control" required>
					</div>
				</div>				
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Harga*</label>
					<div class="col-md-10">
					  <input type="text" name="dataHarga" id="dataHarga" class="form-control" required>
					</div>
				</div>
				<!-- <div class="form-group row">
					<label class="col-md-2 col-form-label">Designation*</label>
					<div class="col-md-10">
					  <input type="text" name="empDesignation" id="empDesignation" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Address*</label>
					<div class="col-md-10">
					   <textarea name="empAddress" id="empAddress" class="form-control" rows="5" required></textarea>
					</div>
				</div> -->
		  </div>
		  <div class="modal-footer">
			 <input type="hidden" name="empId" id="empId" class="form-control">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Update</button>
		  </div>
		</div>
	  </div>
	</div>
</form>
<form id="deleteEmpForm" method="post">
	<div class="modal fade" id="deleteEmpModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="deleteModalLabel">Delete Data</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			   <strong>Are you sure to delete this record?</strong>
		  </div>
		  <div class="modal-footer">
			<input type="hidden" name="deleteEmpId" id="deleteEmpId" class="form-control">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
			<button type="submit" class="btn btn-primary">Yes</button>
		  </div>
		</div>
	  </div>
	</div>
</form>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/crud_operation.js'?>"></script>
</body>
</html>