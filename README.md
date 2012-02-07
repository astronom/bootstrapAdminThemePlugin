# Installation

Extract the bootstrapAdminThemePlugin directory into the /plugins directory and enable the plugin in your ProjectConfiguration class.

## Usage

Enable the plugin by setting the theme on creation of the admin generator module.

e.g.

    ./symfony doctrine:generate-admin --theme=bootstrap backend ModelName

or in generator.yml if you've already created your module

    generator:
      param:
        theme:                 bootstrap

## License (MIT)

bootstrapAdminThemePlugin is licensed under the MIT License.
