import {registerBlockType} from '@wordpress/blocks';
import {TextControl} from '@wordpress/compontents';
import {RichText, InspectorControls} from '@wordpress/block-editor';
import {__} from '@wordpress/i18n';

registerBlockType('my-block-plugin/my-block', {
    title: __('My Block', 'my-block-plugin'),
    icon: 'smiley',
    category: 'common',
    attributes: {
        title: {
            type: 'string',
            default: '',
        },
        content: {
            type: 'string',
            default: '',
        },
    },
    edit: (props) => {
        const {attributes, setAttributes} = props;

        return <div>hello from backend</div>;
    },
    save: () => {
        return null; // Server-side rendering is handled by the PHP callback
    },
});
