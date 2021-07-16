<div class="second-page">
	
	<!-- <div class="card transparent-card card-centered">
		<div class="card-body">
			@foreach ($get_intro as $key=>$post)
			<h3 class="card-title blue">{{$post->title}}</h3>
			<p class="card-text grey5">{{html_entity_decode($post->excerpt)}} </p>
			@endforeach
		</div>
	</div> -->

	{!! get_field("about_title_and_description") !!} 

	{!! get_field("about_4_columns") !!} 

</div>