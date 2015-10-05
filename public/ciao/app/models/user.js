import DS from "ember-data";
import EmberValidations from 'ember-validations';

export default DS.Model.extend(EmberValidations, {
	validations: {
		first_name: {
			presence: true
		},
		email: {
			presence: true
		}
	},
	first_name: DS.attr('string'),
	last_name: DS.attr('string'),
	company: DS.attr('string'),
	email: DS.attr('string'),
	is_admin: DS.attr('boolean', { defaultValue: false }),
	created_at: DS.attr('date'),
	updated_at: DS.attr('date')
});