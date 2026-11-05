# Exclui todo o conteúdo do cache do usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-ucache-clear.php

---

# wincache\_ucache\_clear

(PECL wincache >= 1.1.0)

wincache\_ucache\_clear — 
Exclui todo o conteúdo do cache do usuário

### Descrição

function **wincache\_ucache\_clear**(): [bool](language.types.boolean.md)

Limpa/exclui todos os valores armazenados no cache do usuário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Usando **wincache\_ucache\_clear()****

```
<?php
wincache_ucache_set('green', 1);
wincache_ucache_set('red', 2);
wincache_ucache_set('orange', 4);
wincache_ucache_set('blue', 8);
wincache_ucache_set('cyan', 16);
$array1 = array('green', 'red', 'orange', 'blue', 'cyan');
var_dump(wincache_ucache_get($array1));
var_dump(wincache_ucache_clear());
var_dump(wincache_ucache_get($array1));
?>
```

O exemplo acima produzirá:

```
array(5) { ["green"]=> int(1)
           ["red"]=> int(2)
           ["orange"]=> int(4)
           ["blue"]=> int(8)
           ["cyan"]=> int(16) }
bool(true)
bool(false)
```

### Veja também

- [wincache\_ucache\_set()](function.wincache-ucache-set.md) - Adiciona uma variável no cache do usuário e substitui uma variável se ela já existir no cache
- [wincache\_ucache\_add()](function.wincache-ucache-add.md) - Adiciona uma variável no cache do usuário somente se a variável ainda não existir no cache
- [wincache\_ucache\_delete()](function.wincache-ucache-delete.md) - Exclui variáveis ​​do cache do usuário
- [wincache\_ucache\_get()](function.wincache-ucache-get.md) - Obtém uma variável armazenada no cache do usuário
- [wincache\_ucache\_exists()](function.wincache-ucache-exists.md) - Verifica se uma variável existe no cache do usuário
- [wincache\_ucache\_meminfo()](function.wincache-ucache-meminfo.md) - Recupera informações sobre o uso da memória cache do usuário
- [wincache\_ucache\_info()](function.wincache-ucache-info.md) - Recupera informações sobre dados armazenados no cache do usuário

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
