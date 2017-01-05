# Kaam
#### By Aimen Khakwani

Kaam is an eccomerce site in Drupal 7. It utilizes a custom theme and modules, and allows user to register/login. Users can then shop items and add them to cart, or post an item to the shop if they want to sell it. View the site <a href="http://dev-kaam.pantheonsite.io/">here</a>

####
<img src="/sites/all/images/screenshot.png" alt="a screenshot of t.he web app">

## Running / Development
* `git clone <repository-url>` this repository
* run MAMP, and in 'Preferences->Web Server' point the Document Root to this folder
* Start Servers in MAMP
* Open 'WebStart page' in MAMP and navigate to 'Tools->phpMyAdmin'
* Import the database from 'the project folder->sites->db-backup'
* In phpMyAdmin, under 'Privileges', add a User with the username/password for the database user
* Navigate to localhost:8888 to view the website

## Further Reading / About Drupal
Drupal is an open source content management platform supporting a variety of
websites ranging from personal weblogs to large community-driven websites. For
more information, see the Drupal website at http://drupal.org/, and join the
Drupal community at http://drupal.org/community.

Legal information about Drupal:
 * Know your rights when using Drupal:
   See LICENSE.txt in the same directory as this document.
 * Learn about the Drupal trademark and logo policy:
   http://drupal.com/trademark

## Configuration and Features
Drupal core (what you get when you download and extract a drupal-x.y.tar.gz or
drupal-x.y.zip file from http://drupal.org/project/drupal) has what you need to
get started with your website. It includes several modules (extensions that add
functionality) for common website features, such as managing content, user
accounts, image uploading, and search. Core comes with many options that allow
site-specific configuration. In addition to the core modules, there are
thousands of contributed modules (for functionality not included with Drupal
core) available for download.

More about configuration:
 * Install, upgrade, and maintain Drupal:
   See INSTALL.txt and UPGRADE.txt in the same directory as this document.
 * Learn about how to use Drupal to create your site:
   http://drupal.org/documentation
 * Download contributed modules to sites/all/modules to extend Drupal's
   functionality:
   http://drupal.org/project/modules
 * See also: "Developing for Drupal" for writing your own modules, below.
