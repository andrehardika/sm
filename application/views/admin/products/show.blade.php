@layout('_layout/dashboard/index')
@section('title')Detail Produk@endsection

@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="panel">
			<div class="panel-body">
				<img src="{{base_url('assets/images/blank-avatar.png')}}" class="headline" alt="thumbnail">
				<h1 class="title">{{ $product->name }}</h1>
				<span class="label label-primary"><i class="fa fa-clock-o"></i> {{ (!isset($product->category->name)) ? 'Lainnya' : $product->category->name }}</span>
				<span class="label label-success"><i class="fa fa-user"></i> {{ (!isset($product->producer->name)) ? 'Tidak ada produsen' : $product->producer->name }}</span>
				<span class="label label-danger">{{ (is_null($product->tax)) ? 'Belum Termasuk PPN' : 'Termasuk PPN' }}</span>
				{{-- TODO Diskon --}}
				<span class="label label-danger">Diskon</span>
				<span class="label label-warning">Stok: {{ $product->stock }}</span>
				<div class="content">
					<h3>Harga asli:  {{ $product->price }}</h3>
					@if(!is_null($product->tax))
					<h3>Harga total (termasuk pajak, diskon, dan promo): <span class="text-red">{{ $product->price+($product->price*$product->tax) }}</span> </h3>
					@else
					<h3>Harga total (termasuk pajak, diskon, dan promo): <span class="text-red">{{ $product->price }}</span></h3>
					@endif
					{{ $product->description }}
				</div>
			</div>
			<div class="panel-footer">
				<a href="{{ site_url('produk/arsipkan/'.$product->code) }}" class="btn btn-warning"><i class="fa fa-archive"></i> arsipkan</a>
				<a href="{{ site_url('produk') }}" class="btn btn-default"><i class="fa fa-arrow-left"></i> kembali</a>
			</div>
		</div>
	</div>
</div>
@endsection

@section('style')
<style>
	.panel-body{
		padding: 30px;
	}

	.headline{
		width: 100%;
		height: 250px;
		object-fit: cover;
		object-position: center;
		margin-bottom: 20px;
	}
	
	.title{
		margin-bottom: 5px;
	}

	.content{
		margin-top: 20px;
	}

	.content > p{
		font-size: 11pt;
		line-height: 28px;
	}
</style>
@endsection