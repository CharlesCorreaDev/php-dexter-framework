# Album photos added | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5616/album-photos-added

---

Triggers after photo(s) added to the album.

```
<?php
function my_component_init(){
		ossn_register_callback('ossn:photo', 'add:multiple', 'my_component_cb');
}
function my_component_cb($callback, $type, array $params){
		//$params[photo_guids] contains OssnFiles guids for newly added photos (as the photos accept multiple uploads in album).
		//$params['album'] contains instance of OssnAlbum.
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```
