import Ember from 'ember';
import config from './config/environment';

var Router = Ember.Router.extend({
  location: config.locationType
});

Router.map(function() {
	this.route('users', { path: '/users' });
	this.route('user', function(){
		this.route('index', { path: '/:user_id' });
		this.route('error');
	});
});

export default Router;
