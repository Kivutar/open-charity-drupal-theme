# Drupal theme for Open Charity

This is a single page theme for a charity.

The website is built using mainly CCK and Views.

Demo: http://open-charity.kivutar.me/
Admin access: http://open-charity.kivutar.me/admin

## Modules

Dependancies:

 * empty_front_page
 * views
   * ctools
 * date
 * url
 * fontawesome
   * libraries

I'm also using *blog* and *image*.

## Responsive

The design have 3 modes: mobile, small screen, wide screen.

There are two horizontal media queries breakpoints: 768 and 1250.

This is achieved by using a class called *card* that defaults to float left but will stack on small screens. The gutters are managed using a negative margin in the container. The markup free clearfix hack is used to clear floating.

## Tested on

 * Firefox
 * Chrome
 * Safari
 * Safari Mobile
 * Edge
 * IE 11
