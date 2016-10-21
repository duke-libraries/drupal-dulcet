# Dulcet Theme for DUL Drupal Site

Dulcet is a Drupal 7 theme intended for the [Duke University Libraries website](http://library.duke.edu) beginning 2017. It is a subtheme built on the [Radix](https://www.drupal.org/project/radix) base theme, which relies upon and conveniently incorporates several components for task-running and asset management:

1. [Node.js](https://nodejs.org/en/) & [NPM](https://www.npmjs.com/) for general package management
2. [Gulp](http://gulpjs.com/) for task-running, watching, automation, e.g., compiling Sass to CSS, asset minification.
3. [Bower](https://bower.io/) for package dependency management (e.g., jquery, font-awesome)
4. [Bootstrap 3](http://getbootstrap.com/) HTML, CSS, JS framework.

All custom functions written for the DUL Madlib Drupal theme (ca. 2012 design) have been ported over into Dulcet. We may not have to retain them all. 

- Functions from `madlib/template.php` are now in `dulcet/template.php`
- Functions from `madlib/process` & `madlib/preprocess` are now in `dulcet/includes` in individual files e.g., `html.inc`

# Local Development Requirements
1. npm
2. gulp
3. bower
4. drush
5. jQuery 1.7

See http://docs.radixtheme.org/en/latest/drupal/

# Installation

### DrupalVM
1. Set up a [DrupalVM](https://www.drupalvm.com/), built with Vagrant & Ansible
2. Configure & import sample data & files (_consult internal docs for DUL_)

### Install Requirements
On `vagrant@drupalvm:/vagrant/drupal/web$`

```
$ sudo apt-get install nodejs-legacy
$ sudo apt-get install npm
$ sudo npm install gulp -g
$ sudo npm install bower -g
```
The first line (nodejs-legacy) fixes an [error documented here](http://stackoverflow.com/questions/21168141/cannot-install-packages-using-node-package-manager-in-ubuntu).

Note that drush is already installed via the DrupalVM setup.

More info:
[Radix Drupal theme documentation](http://docs.radixtheme.org/en/latest/drupal/)

### Download Radix & Dulcet Themes

On `vagrant@drupalvm:/vagrant/drupal/web$`

1. Download the Radix base theme, enable it, set to default:

    ```
    $ drush en radix -y; drush vset theme_default radix
    ```

2. Clone the `dulcet` theme into `/sites/all/themes`

    ```
    $ cd /vagrant/drupal/web/sites/all/themes/
    $ git clone https://github.com/duke-libraries/drupal-dulcet.git dulcet
    ```

3. Enable `dulcet` and set as default

    ```
    $ drush en dulcet -y; drush vset theme_default dulcet
    ```

# Initial Setup for Development
1. Get all the package dependencies. This may take a few minutes.

    ```
    $ cd dulcet
    $ npm run setup
    ```

    This will download several node modules and their dependencies (to `node_modules` folder), as well as the bootstrap-sass, font-awesome, and jquery bower components (`to bower_components` folder). Note that these directories are listed in `.gitignore` so they are not part of the code repo.

2. Compile Assets (in dulcet directory)

    ```
    $ gulp
    ```
This compiles Sass to CSS, combines & minifies JS, and watches for live changes in source files as the cue to repeat those steps. Tasks are configured in `gulpfile.js`

# Changing Styles
All styles are expressed via Sass in `dulcet/scss/*`. The `dulcet.styles.scss` file indicates the order which style partials are rendered and in what sequence. As long as `$ gulp` is running, changes are picked up and compiled to `assets/css`.

This initial setup has an unedited theme ("[Paper](http://bootswatch.com/paper/)") from [Bootswatch](http://bootswatch.com/) in:

```
scss
|--bootswatch
   |--_bootswatch.scss
   |--_variables.scss
```

We can experiment with Bootswatch themes by just replacing those two files using those from other themes, available [here on GitHub](https://github.com/thomaspark/bootswatch). Currently unclear whether best to edit those files directly or override them selectively in other .scss files.

The only styles currently added are new Brand Colors in `scss/base/_variables.scss`, and minor rules in `scss/dulcet/_global.scss`

# Additional Setup Related to Migration to Dulcet
1. Add existing breadcrumb & sidebar blocks to equivalent regions in Dulcet.

    E.g.:
    - `Structure > Blocks` `Easy Breadcrumb > Configure` `REGION SETTINGS > Dulcet: Breadcrumb`
    - `Structure > Blocks` `Lilly Menu > Configure` `REGION SETTINGS > Dulcet: Sidebar`

2. Get the [Radix Layouts](https://www.drupal.org/project/radix_layouts) module for panel pages

    In `vagrant@drupalvm:/vagrant/drupal/web/sites/all/themes/dulcet$`

    ```
    drush en radix_layouts -y
    ```
Panel pages can be migrated via `Edit Panel > Layout > Category: Radix`. Then drag & drop blocks between regions.
