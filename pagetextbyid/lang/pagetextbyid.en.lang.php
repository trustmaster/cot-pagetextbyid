<?php
defined('COT_CODE') or die('Wrong URL');

$L['info_desc'] ='Use this plugin to fetch page text by its id or alias using global tags 
like {PHP|pagetextbyid(123)} where 123 is an ID of a page or 
{PHP|pagetextbyid(\'alias\')} where «alias» is an ALIAS of a page'; 

$adminhelp = <<<HELP
<h3>Sample use case</h3>
<pre>
<code>&lt;!-- IF {LIST_CAT|pagetextbyid('$this')} --&gt;
    &lt;a href=&quot;{PHP.last_pagetext.id|cot_url('page','m=edit&amp;id=$this')}&quot;&gt;Edit category description&lt;/a&gt;
    &lt;div&gt;{PHP.last-pagetext.text}&lt;/div&gt;
&lt;!-- ELSE --&gt;
    &lt;a href=&quot;{LIST_CAT|cot_url('page','m=add&amp;c=inc_pages&amp;al=$this')}&quot;&gt;Add category description&lt;/a&gt;
&lt;!-- ENDIF --&gt;
</code>
</pre>
HELP;
