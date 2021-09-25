// Import __ from i18n internationalization library
// const { __ } = wp.i18n;
// Import registerBlockType() from block building libary
const { registerBlockType } = wp.blocks;
// Import the element creator function (React abstraction layer)
const el = wp.element.createElement;

/**
 * Example of a custom SVG path taken from fontastic
*/
const iconEl = el( 'svg', { width: 26.7, height: 20 },
	el( 'defs', {},
		el( 'style', {}, '.cls-1{fill:none;stroke:#c1272d;stroke-miterlimit:10;}' )
	),
	el( 'path', { d: 'M0,8.54V.14H1.54v3.5H5.3V.14H6.84v8.4H5.3V4.88H1.54V8.54Z' } ),
	el( 'path', { d: 'M8.27,8.54V7.43L9.76,6.17a15.66,15.66,0,0,0,1.3-1.24A7,7,0,0,0,12,3.74a2.23,2.23,0,0,0,.34-1.14A1.53,1.53,0,0,0,12,1.69a1.07,1.07,0,0,0-.93-.39,1.19,1.19,0,0,0-1,.43,1.66,1.66,0,0,0-.33,1H8.28a3,3,0,0,1,.41-1.54,2.33,2.33,0,0,1,1-.92A3.16,3.16,0,0,1,11.14,0a2.7,2.7,0,0,1,2,.7,2.44,2.44,0,0,1,.72,1.82,3.15,3.15,0,0,1-.32,1.36,6.15,6.15,0,0,1-.83,1.27,11,11,0,0,1-1.12,1.14c-.4.36-.79.69-1.16,1h3.63V8.54Z' } ),
	el( 'line', { class: 'cls-1', x1: '0.1', y1: '11.54', x2: '26.7', y2: '11.54' } )
);

registerBlockType( 'pdhaunt-section-header', {
	title: 'Section Header with Line',
	description: 'Section header with using an H2 tag and a bottom full width border.',
	icon: iconEl,
	category: 'text',
	attributes: {
		title: {
			type: 'string',
			default: 'Header',
			selector: 'h2',
		},
	},

	edit: function(props) {
		return el(
			editor.RichText,
			{
				tagName: 'h2',
				className: 'pdhaunt-section-header',
				value: props.attributes.title,
				onChange: function( title ) {
					props.setAttributes( { title: title } );
				}
			}
		);
	},

	save: function(props) {
		return el(
			'h2',
			{},
			props.attributes.title
		);
	},
} );

/* <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.7 12.04">
<defs>
<style>.cls-1{fill:none;stroke:#c1272d;stroke-miterlimit:10;}</style>
</defs>
<path d="M0,8.54V.14H1.54v3.5H5.3V.14H6.84v8.4H5.3V4.88H1.54V8.54Z"/>
<path d="M8.27,8.54V7.43L9.76,6.17a15.66,15.66,0,0,0,1.3-1.24A7,7,0,0,0,12,3.74a2.23,2.23,0,0,0,.34-1.14A1.53,1.53,0,0,0,12,1.69a1.07,1.07,0,0,0-.93-.39,1.19,1.19,0,0,0-1,.43,1.66,1.66,0,0,0-.33,1H8.28a3,3,0,0,1,.41-1.54,2.33,2.33,0,0,1,1-.92A3.16,3.16,0,0,1,11.14,0a2.7,2.7,0,0,1,2,.7,2.44,2.44,0,0,1,.72,1.82,3.15,3.15,0,0,1-.32,1.36,6.15,6.15,0,0,1-.83,1.27,11,11,0,0,1-1.12,1.14c-.4.36-.79.69-1.16,1h3.63V8.54Z"/>
<line class="cls-1" x1="0.1" y1="11.54" x2="26.7" y2="11.54"/></g></g></svg> */