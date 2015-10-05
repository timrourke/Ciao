import Ember from 'ember';
export default Ember.Helper.helper(function() {
	var date = new Date();
  return date.getFullYear();
});