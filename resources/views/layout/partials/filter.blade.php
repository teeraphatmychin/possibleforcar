<?php use App\Product; ?>
<form action="{{ url('/products-filter') }}" method="post">{{ csrf_field() }}
	@if(!empty($url))
		
			<h2>Colors</h2>	
			<div class="panel-group">
				@foreach($categoryArray as $color)
					@if(!empty($_GET['color']))
						<?php $colorArr = explode('-',$_GET['color']) ?>
						@if(in_array($color,$colorArr))
							<?php $colorcheck="checked"; ?>	
						@else
							<?php $colorcheck=""; ?>
						@endif		
					@else
						<?php $colorcheck=""; ?>
					@endif
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<input name="colorFilter[]" onchange="javascript:this.form.submit();" id="{{ $color }}" value="{{ $color }}" type="checkbox" {{ $colorcheck }}>&nbsp;&nbsp;<span class="products-colors">{{ $color }}</span>
							</h4>
						</div>
					</div>
				@endforeach
			</div>

			<div>&nbsp;</div>
		@endif	
	</div>
</form>