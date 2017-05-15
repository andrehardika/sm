@layout('_layout/dashboard/index')
@section('title')Etalase Produk@endsection

@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-theme">
			<div class="panel-heading">
				<h3 class="panel-title pull-left">Daftar Etalase Produk</h3>
				<div class="btn-group pull-right">
					<a href="{{ site_url('produk/tambah') }}" class="btn btn-default btn-sm" title="Tambah produk"><i class="fa fa-plus"></i></a>
					<button class="btn btn-default btn-sm" title="Filter berita"  data-toggle="modal" data-target="#modal-filter"><i class="fa fa-filter"></i></button>
					<button class="btn btn-default btn-sm" title="Arsip berita"><i class="fa fa-archive"></i></button>
					<button class="btn btn-default btn-sm reload" title="segarkan"><i class="fa fa-refresh"></i></button>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-body table-responsive table-full">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th class="text-center">NO</th>
							<th colspan="2">PRODUK</th>
							<th>STOK</th>
							<th class="text-center text-nowrap">AKSI</th>
						</tr>
					</thead>
					<tbody>
					<?php $i=0; ?>
						@foreach($products as $product)
						<tr>
							<td class="text-center">{{++$i}}</td>
							<td>
								<img src="{{base_url('assets/images/blank-avatar.png')}}" alt="thumbnail">
							</td>
							<td>
								<h4>{{ $product->name }}</h4>
								<p>{{ potong_teks(strip_tags($product->description), 217) }}</p>
								<span class="label label-primary">{{ (!isset($product->category->name)) ? 'Lainnya' : $product->category->name }}</span>
								<span class="label label-success">{{ (!isset($product->producer->name)) ? 'Tidak ada produsen' : $product->producer->name }}</span>
								<span class="label label-warning">Harga: {{ $product->price }}</span>
								<span class="label label-danger">{{ (is_null($product->tax)) ? 'Belum Termasuk PPN' : 'Termasuk PPN' }}</span>
								{{-- TODO Diskon --}}
								<span class="label label-danger">Diskon</span>
							</td>
							<td><strong>{{ $product->stock }}</strong></td>
							<td class="text-center text-nowrap">
								<a href="{{ site_url('produk/selengkapnya/'.$product->code) }}" class="btn btn-default btn-xs" title="selengkapnya"><i class="fa fa-ellipsis-h"></i></a>
								<a href="{{ site_url('produk/sunting/'.$product->code) }}" class="btn btn-primary btn-xs" title="sunting"><i class="fa fa-pencil"></i></a>
								<a href="{{ site_url('produk/arsipkan/'.$product->code) }}" class="btn btn-warning btn-xs" title="arsipkan"><i class="fa fa-archive"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="panel-footer">
				<nav aria-label="...">
					<ul class="pager">
						<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Sebelumnya</a></li>
						<li class="next"><a href="#">Selanjutnya <span aria-hidden="true">&rarr;</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
@endsection

@section('modal')
<div class="modal fade" tabindex="-1" role="dialog" id="modal-filter">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Filter Berita</h4>
			</div>
			<div class="modal-body">
				<form action="#">
					<div class="form-group">
						<label for="">Judul</label>
						<input type="text" class="form-control" name="title" placeholder="Judul berita" />
					</div>
					<div class="form-group">
						<label for="">Tanggal Buat</label>
						<div class="input-group">
							<input type="date" class="form-control" name="tgl_Buat[awal]" placeholder="dari">
							<span class="input-group-addon">-</span>
							<input type="date" class="form-control" name="tgl_Buat[akhir]" placeholder="sampai">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="">Penulis</label>
								<input type="text" class="form-control" name="author" placeholder="penulis" />
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="">Status</label>
								<select name="status" class="form-control">
									<option value="" selected>Semua</option>
									<option value="">Terpublikasi</option>
									<option value="">Terjadwal</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="">Urutkan berdasar</label>
						<div class="input-group">
							<select name="status" class="form-control">
								<option value="" selected>Tanggal Buat</option>
								<option value="">Judul</option>
								<option value="">Penulis</option>
								<option value="">Status</option>
							</select>
							<span class="input-group-addon">secara</span>
							<select name="status" class="form-control">
								<option value="" selected>Menaik</option>
								<option value="">Menurun</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<button class="btn btn-primary"><i class="fa fa-filter"></i> Filter</button>
						<button class="btn btn-warning" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('style')
<style>
	td, th{
		vertical-align: middle!important;
		padding-bottom: 10px!important;
	}

	td > img{
		width: 125px;
		height: 100px;
		object-fit: cover;
		object-position: center;
	}

	td > p{
		margin-bottom: 5px;
	}
</style>
@endsection

@section('javascript')
<script>
	$(".modal").on('hide.bs.modal', function(e){
		$(".modal form").trigger('reset');
	});
</script>
@endsection