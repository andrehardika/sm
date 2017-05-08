@layout('_layout/dashboard/index')
@section('title')Kategori Produk@endsection

@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-theme">
			<div class="panel-heading">
				<h3 class="panel-title pull-left">Kategori Produk</h3>
				<div class="btn-group pull-right">
					<a href="{{ site_url('kategori/tambah') }}" class="btn btn-xs btn-default"><i class="fa fa-plus"></i></a>
					<button class="btn btn-xs btn-default reload"><i class="fa fa-refresh"></i></button>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-body table-responsive table-full">
				<table class="table table-hover table-striped table-bordered">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th>Nama Kategori</th>
							<th class="text-center">Tanggal Buat</th>
							<th class="text-center">Status</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@if(is_null($categories) || empty($categories))
						<td colspan="5" class="text-center">Belum ada data kategori produk</td>
						@else
						<?php $i=0; ?>
						@foreach($categories as $category)
						<tr>
							<td class="text-center">{{++$i}}</td>
							<td>{{ $category->name }}</td>
							<td class="text-center">{{ date('d/m/Y', strtotime($category->created_at)) }}</td>
							<td class="text-center"><span class="label label-{{ (is_null($category->deleted_at)) ? 'success' : 'danger' }}">{{ (is_null($category->deleted_at)) ? 'aktif' : 'tidak aktif' }}</span></td>
							<td class="text-center">
								<a href="{{ site_url('kategori/sunting/'. $category->id) }}" class="btn btn-xs btn-default" title="sunting"><i class="fa fa-pencil"></i></a>
								<a href="{{ site_url('kategori/hapus/'.$category->id) }}" class="btn btn-xs btn-default" title="hapus" onclick="return confirm('Sub-Kategori dan Produk yang berkaitan dengan kategori ini akan hilang. Anda yakin?')"><i class="fa fa-trash"></i></a>
								@if($category->deleted_at)

								@endif
								<a href="{{ (!is_null($category->deleted_at)) ? site_url('kategori/aktifkan/'.$category->id) : site_url('kategori/nonaktifkan/'.$category->id) }}" class="btn btn-xs btn-{{ (!is_null($category->deleted_at)) ? 'success' : 'danger' }}" title="{{ (!is_null($category->deleted_at)) ? 'aktifkan' : 'non-aktifkan' }}" onclick="alert('Anda yakin? Semua sub-kategori yang berhubungan juga akan terhapus.')"><i class="fa fa-power-off"></i></a>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
			<div class="panel-footer">
				<nav aria-label="...">
					<ul class="pager">
						<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Baru</a></li>
						<li class="next"><a href="#">Lama <span aria-hidden="true">&rarr;</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
@endsection

@section('style')
<style>
	.label{
		display: block;
		width: 100%;
		padding: 8px;
	}

	.btn-xxs{
		padding: 0 5px;
	}
	.pager{
		margin-top: 0;
		margin-bottom: 0;
	}
</style>
@endsection