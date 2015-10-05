import Ember from 'ember';
export default Ember.Route.extend({
	model(params) {
		return this.store.find('user', { reload: true });
	},
	actions: {
    error(error, transition) {
    	console.error(error);
      if (error) {
        return this.transitionTo('/users');
      }
    }
  }
});