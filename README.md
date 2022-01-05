# blogfolio_wp
This is where we manage the WordPress code that powers the content displayed in the Blogfolio.

# Getting Started

## Installation
1. Install [Local](https://localwp.com/) if you don't already have it.
1. Set up a new WordPress instance in Local.
1. Copy the this repository down to this new WordPress directory.
1. Install plugin dependencies (see dependency section below).
1. Get to coding!

## How to Run
1. Open this project in your favorite code editor.
2. Run [Local](https://localwp.com/).
3. Navigate to `blogfolio.local/wp-admin`. Note that going to just `blogfolio.local` will redirect you to the live `caseyjamesperno.com` site.
4. Log in using the same credentials you would use for the live admin.
5. All changes you made in this project should now show up on this local environment!

## How to Deploy
1. Push your changes to the repository.
2. Open up FileZilla or some FTP client.
3. Connect to the server where the WordPress instance is running.
4. Copy over the appropriate files (will likely be in mu-plugins).
5. Check it on live!

## Dependencies

Many of the custom post types in this project relie on custom fields, so you will need to install that plugin or the entire admin will crash.

1. [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/)

The front end is uses GraphQL instead of the REST API, but in order for WordPress to run a GraphQL server, you need the following plugins:

1. [WP GraphQL](https://wordpress.org/plugins/wp-graphql/)
2. [WP Gratsby](https://wordpress.org/plugins/wp-gatsby/)
3. [WPGraphQL for Advanced Custom Fields](https://wpgraphql.com/acf)

Unfortunately WPGraphQL for Advanced Custom Fields is not yet available on the WordPress Repository, so it will need to be uploaded via FTP.