console.log(5 + 6);
new Vue({
	el:'#crud',
	created: function() {
		this.getKeeps();
	},
	data:{
		keeps:[],
		newKeep: '',
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
		}
	}
});