MST website notes

We're using custom url format: /%category%/%postname%/
Unfortunately, this breaks the pagination (eg with '/mst-news/page/2', WP
treats 'page' as the name of the post). We're using the Category Pagination
Fix plugin which is a tiny request callback kludge to work around it.
see: 
  http://www.htmlremix.com/projects/category-pagination-wordpress-plugin

A couple of php5 issues in that plugin...
see category-pagination-fix-php-fix.diff



Download links for publications
-------------------------------

The list of publications on front page displays a download link for the
publication document. This is obtained by extracted the first link from
the post text. A bit hacky, but hey.

