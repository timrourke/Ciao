import Ember from 'ember';

export default Ember.Component.extend({
  actions: {
    createUser(newUser) {
    	console.log('clicked');
      this.sendAction('createUser', newUser);
      this.set('newUser', {});
    }
  }
});