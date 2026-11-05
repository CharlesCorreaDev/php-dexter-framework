# CRON tab add custom job | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5666/cron-tab-add-custom-job

---

Since the cronjobs runs (after defined intervals) you can register task in your component. Example

**NOTE this is removed in OSSN 9.6 and onwards** use CLI based commands instead

```
<?php
function cron_init(){
		ossn_register_callback('cron', "loaded", 'cron');	
}
function cron($cb, $type, $args){
			echo ossn_dump($args);
			//set a custom timestamp for your own component
			//as you may not wanted to run task during the interval defined. 
			ossn_cron_set_handler_last_activity('videos');
					 
			ossn_cli_output("Process started", 'success');
			ossn_cli_output("Process issue", 'warning');
					 /// your stuff here
			ossn_cli_output('Process error', "error");
}
ossn_register_callback('ossn', 'init', 'cron_init');
```
