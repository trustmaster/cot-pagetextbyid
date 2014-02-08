<?php
defined('COT_CODE') or die('Wrong URL');

$L['info_desc'] ='Позволяет извлекать из БД текст указанной страницы (например для размещения 
в произвольном месте шаблона). Из шаблона можно вызвать указав ID или Alias страницы: {PHP|pagetextbyid(123)}, где 123 — это 
ID искомой страницы. Или {PHP|pagetextbyid(\'alias\')}, где «alias» это псевдоним страницы'; 

$adminhelp = <<<HELP
<h3>Пример использоавния</h3>
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
