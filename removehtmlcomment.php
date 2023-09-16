<?php
	defined('_JEXEC') or die('Access deny');

	class plgContentRemoveHTMLcomment extends JPlugin 
	{
		function onContentPrepare($content, $article, $params, $limit){				
			$subst = "";
			$re = '/<!--(?!<!)[^\[>].*?-->/m';
			$article->text  = preg_replace($re, $subst, $article->text);
		}	
	}


	

