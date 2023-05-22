# Serverside Block

A simple starter plugin for serverside block rendering.

1. change the name of the folder 'serverside' to reflect your plugin name, change the key "name" reference in the package.json to the same name
2. search and replace all references to 'my_block' and replace with your own reference
3. search and replace all references to 'my-block' and replace with your own reference
4. search and replace all references to 'My Block' and replace with your own reference
5. replace the description in the package.json with a description of your plugin
6. Upload to the `/wp-content/plugins/` directory
7. Activate the plugin through the 'Plugins' menu in WordPress
8. Place a block in your post/page

## Not to be used as is

The intention of this plugin is to be used as a starting point for serverside rendering, the serverside rendering functionality happens in the 'render_callback' function set in the 'register_block_type' parameter, to modify the behaviour of the rendering you should use the changed render callback function renamed from 'my_block_plugin_render' to your chosen reference.
