# Obtém informação detalhada sobre uma chave em cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-key-info.php

---

# apcu\_key\_info

(PECL apcu >= 4.0.2)

apcu\_key\_info — 
Obtém informação detalhada sobre uma chave em cache

### Descrição

function **apcu\_key\_info**([string](language.types.string.md) `$key`): [?](language.types.null.md)[array](language.types.array.md)

Obtém informação detalhada sobre a chave em cache

### Parâmetros

`key`
:   Chave para a qual deseja-se obter a informação.

### Valor Retornado

Um array contendo informação detalhada sobre a chave em cache, ou **`null`** se a chave não existir.

### Examples

**Exemplo #1 Um exemplo de **apcu\_key\_info()****

```
<?php
apcu_add('a','b');
var_dump(apcu_key_info('a'));
?>
```

O exemplo acima produzirá:

```
array(7) {
  ["hits"]=>
  int(0)
  ["access_time"]=>
  int(1606701783)
  ["mtime"]=>
  int(1606701783)
  ["creation_time"]=>
  int(1606701783)
  ["deletion_time"]=>
  int(0)
  ["ttl"]=>
  int(0)
  ["refs"]=>
  int(0)
}
```

### Veja também

- [apcu\_store()](function.apcu-store.md) - Armazena uma variável em cache
- [apcu\_fetch()](function.apcu-fetch.md) - Busca uma variável armazenada no cache
- [apcu\_delete()](function.apcu-delete.md) - Remove uma variável armazenada do cache

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
