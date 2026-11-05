# Uso básico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.examples-overview.php

---

## Uso básico

**Exemplo #1 Exemplo de visão geral da extensão Memcache**

Neste exemplo, um objeto está sendo salvo no cache e, em seguida,
recuperado. Objetos e outros tipos não escalares são serializados
antes de salvar, então é impossível armazenar recursos (ou seja, identificadores
de conexão e outros) no cache.

```
<?php

$memcache = new Memcache;
$memcache->connect('localhost', 11211) or die ("Não foi possível conectar");

$version = $memcache->getVersion();
echo "Versão do servidor: ".$version."<br/>\n";

$tmp_object = new stdClass;
$tmp_object->str_attr = 'test';
$tmp_object->int_attr = 123;

$memcache->set('key', $tmp_object, false, 10) or die ("Falha ao gravar dados no servidor");
echo "Armazene dados no cache (dados irão expirar em 10 segundos)<br/>\n";

$get_result = $memcache->get('key');
echo "Dados do cache:<br/>\n";

var_dump($get_result);

?>
```

**Exemplo #2 Usando o manipulador de sessão Memcache**

```
<?php

$session_save_path = "tcp://$host:$port?persistent=1&weight=2&timeout=2&retry_interval=10,  ,tcp://$host:$port  ";
ini_set('session.save_handler', 'memcache');
ini_set('session.save_path', $session_save_path);

?>
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
