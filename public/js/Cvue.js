console.log(5 + 6);
new Vue({
	el:'#crud',
	created: function() {
		this.getKeeps();
	},
	data:{
		keeps:[],
		mostrar: false,
		newKeep: '',
		fillKeep: {'id':'','name_TODO':''},
		errors: []
	},
	methods: {
		getKeeps:function() {
			var urlKeeps = 'tasks';
			axios.get(urlKeeps).then(response =>{
				this.keeps = response.data
			});
		},
		deleteKeep: function(keep){
			var url = 'tasks/' + keep.id;
			axios.delete(url).then(response => {
				//refresca el navegador, para simular el reactivo
				this.getKeeps();
				toastr.success('Item Deleted');
			});
		},
		createKeep: function(){
			var url = 'tasks';
			axios.post(url, {
				name_TODO: this.newKeep
			}).then(response => {
				this.getKeeps();
				this.newKeep = '';
				this.errors = [];
				$('#create').modal('hide');
				toastr.success('TODO Created');
			}).catch(error => {
				this.errors = error.response.data
			});
		},
		editKeep: function(keep){
			this.fillKeep.id = keep.id;
			this.fillKeep.name_TODO = keep.name_TODO;
			$('#edit').modal('show');
		},
		updateKeep: function(id){
			var url = 'tasks/'+ id;
			axios.put(url, this.fillKeep).then(response => {
				this.getKeeps();
				this.fillKeep = {'id':'','keep':''};
				this.errors = [];
				$('#edit').modal('hide');
				toastr.success('Update successfully');
			}).catch(error => {
				this.errors = error.response.data;
			});
		},checkKeep: function(keep){
			this.fillKeep.id = keep.id;
			this.fillKeep.done_TODO = keep.done_TODO;
			console.log('mark');
		}
	}
});