# Make your component compatible with CDN (Optional) | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5818/make-your-component-compatible-with-cdn-optional

---

**Since** `OSSN 6.2`

**Description**  
You can make your component compitable work with CDN if it uses files (local storage).

**What to change?**  
There is not much changes you required

1. Change the way you initialize the OssnFile. Just add new method.

```
if(ossn_file_is_cdn_storage_enabled()) {
	$file->setStore('cdn');
}
```

2. Change the view/output in your component `ossn_com.php` file example :

```
case 'photo':
	$file = ossn_get_file(id);
	if($file && $file->subtype == abc && $file->owner_guid == 123){
		$file->output();
	}
break;
```
