<form method="POST" v-on:submit.prevent="createKeep">
	<div class="modal fade" id="create">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4>New TODO</h4>
					<button type="button" class=" close " data-dismiss='modal' >
						<span>&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<label for="name_TODO">Create TODO</label>
					<input type="text" name="name_TODO" class="form-control" v-model="newKeep"></input>
					<span v-for="error in errors" class="text-danger">@{{ error }}</span>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Save">
				</div>
			</div>
		</div>
	</div>
</form>