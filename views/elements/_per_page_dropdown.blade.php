
<div class="pull-left">
	<label>Zeige 
		<select id="per-page-dropdown" class="per-page-dropdown">

			@foreach($tableView->present()->perPageOptions() as $length)

				<?php echo $tableView->present()->perPageOptionTagFor( $length ); ?>
				
			@endforeach
		</select> Einträge
	</label>
</div>