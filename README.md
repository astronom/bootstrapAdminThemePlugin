## Installation

Add this repository as a git submodule, or just place the bootstrapAdminThemePlugin folder in your project's plugins folder.

    git submodule add git://github.com/malcoholm/bootstrapAdminThemePlugin.git plugins/bootstrapAdminThemePlugin

Enable the plugin in your ProjectConfiguration class.

## Usage

Enable the plugin on your module by setting the theme on creation of the admin generator module.

    ./symfony doctrine:generate-admin --theme=bootstrap backend ModelName

or in generator.yml if you've already created your module

    generator:
      param:
        theme:                 bootstrap

## License

bootstrapAdminThemePlugin is licensed under the MIT License.
