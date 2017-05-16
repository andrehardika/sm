@layout('_layout/dashboard/index')
@section('title')Sunting Produk@endsection

@section('content')
<div class="row">
	<div class="col-xs-12">
	<a href="{{ site_url('produk') }}" class="btn btn-default break-bottom-10"><i class="fa fa-arrow-left"></i> Kembali</a>
		<div class="panel panel-theme">
			<div class="panel-heading">
				<h3 class="panel-title">Sunting Produk Baru</h3>
			</div>
			<div class="panel-body">
				<form action="{{ site_url('produk/ubah/'.$product->id) }}" method="POST">
				{{$csrf}}
					<div class="form-group">
						<label for="name">Nama Produk</label>
						<input class="form-control" type="text" name="name" placeholder="Nama Produk" required minlength="3" maxlength="100" value="{{ $product->name }}">
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="producer_id">Produsen Produk</label>
								<input name="producer_id" list="produsen" class="form-control" placeholder="masukkan kode atau nama produsen" autocomplete="off" required value="{{ $product->producer_id. ' | '. $product->producer->name }}">
								<datalist id="produsen">
									@foreach($producers as $producer)
									<option value="{{ $producer->id. ' | '.$producer->name }}">
										@endforeach
									</datalist>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="category_id">Kategori Produk (Biarkan kosong jika bukan kategori manapun)</label>
									<input name="category_id" list="kategori" class="form-control" placeholder="masukkan kode atau nama kategori" autocomplete="off" value="{{ (is_null($product->category_id) || empty($product->category_id)) ? '' : $product->category_id. ' | '. $product->category->name }}">
									<datalist id="kategori">
										@foreach($categories as $category)
										<option value="{{ $category->id. ' | '.$category->name }}">
											@endforeach
										</datalist>
									</div>	
								</div>
							</div>
							<div class="form-group">
								<label for="description">Deskripsi Produk</label>
								<textarea class="form-control content" name="description">{{ $product->description }}</textarea>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-3">
										<label for="length">Panjang Produk</label>
										<div class="input-group">
											<input class="form-control" type="number" name="length" placeholder="Panjang Produk" value="{{ $product->length }}">
											<span class="input-group-addon">m</span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-3">
										<label for="width">Lebar Produk</label>
										<div class="input-group">
											<input class="form-control" type="number" name="width" placeholder="Lebar Produk" value="{{ $product->width }}">
											<span class="input-group-addon">m</span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-3">
										<label for="height">Tinggi Produk</label>
										<div class="input-group">
											<input class="form-control" type="number" name="height" placeholder="Tinggi Produk" value="{{ $product->height }}">
											<span class="input-group-addon">m</span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-3">
										<label for="weight">Berat Produk</label>
										<div class="input-group">
											<input class="form-control" type="number" name="weight" placeholder="Berat Produk" value="{{ $product->weight }}">
											<span class="input-group-addon">kg</span>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<label for="stock">Stok Produk</label>
										<input class="form-control" type="number" name="stock" min="1" required placeholder="Stok Produk" value="{{ $product->stock }}">
									</div>
									<div class="col-xs-12 col-sm-6">
										<label for="price">Harga Produk</label>
										<input class="form-control" type="number" name="price" min="0" required placeholder="Harga Produk" value="{{ $product->price }}">
										<div class="checkbox">
											<label>
											<input type="checkbox" name="tax" value="0,1" {{ (is_null($product->tax)) ? '' : 'checked' }}> Termasuk Pajak PPN 10% <span class="text-red">(Harga total akan tertera di halaman produk selengkapnya)</span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="">Gambar Thumbnail (Gambar produk yang dimunculkan pertama kali)</label>
								<input type="file" name="foto" />
								<p class="help-block">Ukuran maksimal file 1 mb</p>
								<img src="{{base_url('assets/images/blank-avatar.png')}}" class="preview" alt="preview">
							</div>
							<div class="form-group">
								<button class="btn btn-primary"><i class="fa fa-send-o"></i> Simpan</button>
								<button class="btn btn-default" type="reset"><i class="fa fa-refresh"></i> bersihkan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		@endsection

		@section('style')
		<style>
			.preview{
				width: 150px;
				height: 150px;
				object-fit: cover;
				object-position: center;
			}
		</style>
		@endsection

		@section('javascript')
		<script src="{{base_url('assets/plugins/tinymce/tinymce.min.js')}}"></script>
		<script>
	// Initialize tinymce
	tinymce.init({selector:'textarea', menubar:false, height:300});
	
	// Initialize preview image
	$("[type='file']").change(function(){
		readURL(this);
	});

	// image preview function
	function readURL(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('.preview').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
@endsection