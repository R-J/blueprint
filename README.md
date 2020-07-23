# Vanilla Forums Plugin Blueprint

The repo shows different complexities of plugins for Vanilla forums. The master branch is useless. All code is in the branches of this repository.


## Naming Conventions

This section is not about [coding standards](https://github.com/vanilla/standards). It's only about what you need to "brand" those examples if you want to create a plugin with a better name than "blueprint".
These are only conventions: not following them might break your plugin, some might not.
Most important principle in the naming convention is the "key". Let's use "foo-bar" as an example key.

1. Plugins need to have a unique key which should consist of lowercase alphanumeric charcters. The "-" character should be used as a word separator.
2. A plugin must reside in its own subfolder of the /plugins folder, named like the chosen key. ("/plugins/foo-bar")
3. There must be a file in that subfolder with meta information, named [addon.json](https://success.vanillaforums.com/kb/articles/151-the-addon-json-file) and that json file needs to have an entry `"key:" "foo-bar"`
4. The plugin file
4.1 defines a php class wich name must start with an uppercased camel case of the key and needs to end with "Plugin" ("FooBarPlugin")
4.2 must extend the Gdn_Plugin class (`class FooBarPlugin extends Gdn_Plugin {`)
4.3 should be named like the classname ("FooBarPlugin.php"), can be named "class.foobar.plugin.php".


## Preparation

As a result of this naming conventions, when you use this repo and want to customize it, you have to change at least
- the folder name
- the addon.json entry "key"
- the plugins file name
- the class name in the plugins file
- the addon.json entry "className"


## What's in This Repo

This is a work in progress. Below you find the names of the branches that I plan to implement or at least what I can think of would make good examples. If this repo doesn't have such a branch name yet, the example isn't implemented yet.
If you have a suggestion, create an issue.
If you would like to see one of the not-yet-implemented examples soon, create an issue.

Those are the branches that this repo should contain one day:

- minimum: just what you absolutely need to get started. No example code included.
- page-frontend: add a custom page which looks similar to the discussions index
- page-backend: add a dashboard page
- structure: shows how to create a table or alter an existing table
- permission: create custom permissions and uses them
- module: create a module for the sidebar
- configuration-module: how to set up a configuration page for your plugin fast
- addon-json-commented: shows a lot of the possible keys of the addon.json together with a small comment.

