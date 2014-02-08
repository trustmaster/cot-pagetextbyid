Page text by ID
===================

Extension for Cotonti CMF. Gets page content by its reference

Description
-----------

Use this plugin to fetch page text by its id or alias using global tags 
like {PHP|pagetextbyid(123)} where 123 is an ID of a page or 
{PHP|pagetextbyid(\'alias\')} where «alias» is an ALIAS of a page/


Requirements
------------

Cotonti Siena branch


Install
-------

* Unpack, copy files to root folder of your site.
* Install via Admin → Extensions menu (`Administration panel → Extensions`)

Usage
-----

Use `pagetextbyid` function with page ID or Alias. Last page data stored in `last_pagetext` variable:


	{PHP|pagetextbyid('alias')}

or

	<!-- IF {PHP|pagetextbyid('alias')} -->
		{PHP.last-pagetext.text}
	<!-- ELSE -->      
		Page {PHP.last-pagetext.pid} not found
	<!-- ENDIF -->


###Sample use case 


    <!-- IF {LIST_CAT|pagetextbyid('$this')} -->
    	<a href="{PHP.last_pagetext.id|cot_url('page','m=edit&id=$this')}">Edit category description</a>
    	<div>{PHP.last-pagetext.text}</div>
    <!-- ELSE -->
    	<a href="{LIST_CAT|cot_url('page','m=add&c=inc_pages&al=$this')}">Add category description</a>
    <!-- ENDIF -->



Licence
-------




Author
------

[Vladimir Sibirov](https://github.com/trustmaster/)

References
----------

* [Cotonti.com](http://Cotonti.com/) -- Home of Cotonti CMF
* [«pagetextbyid» on GitHub](https://github.com/trustmaster/cot-pagetextbyid) -- latest version of `pagetextbyid` on GitHub
