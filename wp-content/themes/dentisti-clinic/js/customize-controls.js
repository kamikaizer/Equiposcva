( function( api ) {

	// Extends our custom "dentisti-clinic" section.
	api.sectionConstructor['dentisti-clinic'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );