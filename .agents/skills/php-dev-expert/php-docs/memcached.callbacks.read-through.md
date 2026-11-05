# Funções de retorno de cache de leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.callbacks.read-through.php

---

## Funções de retorno de cache de leitura

As funções de retorno do cache de leitura são invocadas quando um item não pode ser
recuperado do servidor. A função recebe o objeto Memcached, a chave solicitada
e a variável de valor por referência. A função é responsável por definir o valor e
retornar true ou false. Se a função retornar true,
o Memcached armazenará o valor preenchido no servidor e o retornará à
função de chamada original. Somente [Memcached::get()](memcached.get.md) e
[Memcached::getByKey()](memcached.getbykey.md) suportam essas funções de retorno,
porque o protocolo memcache não fornece informações sobre quais chaves não foram
encontradas na requisição de multi-chaves.

**Exemplo #1 Exemplo de função de retorno de leitura**

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$profile_info = $m->get('user:'.$user_id, 'user_info_cb');

function user_info_cb($memc, $key, &$value)
{
    $user_id = substr($key, 5);
    /* pesquisa o perfil no banco de dados */
    /* ... */
    $value = $profile_info;
    return true;
}
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
