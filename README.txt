MST website notes

We're using custom url format: /%category%/%postname%/
Unfortunately, this breaks the pagination (eg with '/mst-news/page/2', WP
treats 'page' as the name of the post). We're using the Category Pagination
Fix plugin which is a tiny request callback kludge to work around it.
see: 
  http://www.htmlremix.com/projects/category-pagination-wordpress-plugin

A couple of php5 issues in that plugin...
see category-pagination-fix-php-fix.diff
and
https://plugins.trac.wordpress.org/ticket/2224


Download links for publications
-------------------------------

The list of publications on front page displays a download link for the
publication document. This is obtained by extracted the first link from
the post text. A bit hacky, but hey.


Event Dates
-----------

To add an event, create a post and:
1) add it to the "events" category
2) set the event data by adding a custom field called "eventdate".
   The format is "YYYY-MM-DD".

It won't show up in the event list unless you do this.

