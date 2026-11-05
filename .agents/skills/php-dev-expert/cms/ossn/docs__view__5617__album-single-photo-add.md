# Album single photo add | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5617/album-single-photo-add

---

Triggers after photo(s) added to the album.

```
<?php
function my_component_init(){
		ossn_register_callback('ossn:photo', 'add', 'my_component_cb');
}
function my_component_cb($callback, $type, array $params){
		//$params[guid] contains OssnFiles guid for newly added photo.
		//$params['album'] contains instance of OssnAlbum.
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```
