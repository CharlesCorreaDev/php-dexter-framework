# CLI Loaded | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5664/cli-loaded

---

Added in OSSN `v6.2`. You can register custom CLI methods like for cron jobs. One of the usecase is for video conversion queue method.

```
<?php
function cli_init(){
		ossn_register_callback('cli', "loaded", 'cli');	
}
function cli($cb, $type, $args){
		if($args['handler'] == 'videoConversionQueue'){		
			$vars = ossn_cli_input(array('guid'));
			if(isset($vars['guid'])){
					 //convert video	
					 ossn_cli_output('conversion started');
					 /// your stuff here
					 ossn_cli_output('conversion stopped');
			}
		}
}
ossn_register_callback('ossn', 'init', 'cli_init');
```
