import Ember from 'ember';
export default Ember.Route.extend({
	model() {
		return {
			users: this.store.find('user'),
			newUser: {}
		};
	},

	actions: {
		
		createUser(data) {
			let newUser = this.store.createRecord('user', {
				first_name: data.first_name,
				last_name: data.last_name,
				company: data.company,
				email: data.email,
				is_admin: false
			});

			newUser.save().then(function(data){
				this.store.push(data)
			});
		}
	}
});