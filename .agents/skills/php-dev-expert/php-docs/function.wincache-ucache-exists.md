# Verifica se uma variável existe no cache do usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-ucache-exists.php

---

# wincache\_ucache\_exists

(PECL wincache >= 1.1.0)

wincache\_ucache\_exists — 
Verifica se uma variável existe no cache do usuário

### Descrição

function **wincache\_ucache\_exists**([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

Verifica se uma variável com a chave `key` existe no cache do usuário ou não.

### Parâmetros

`key`
:   O parâmetro `key` é a chave usada para armazenar a variável no cache.
    `key` diferencia maiúsculas de minúsculas.

### Valor Retornado

Retorna **`true`** se a variável com a chave `key` existir,
caso contrário, retorna **`false`**.

### Examples

**Exemplo #1 Usando **wincache\_ucache\_exists()****

```
<?php
if (!wincache_ucache_exists('green'))
    wincache_ucache_set('green', 1);
var_dump(wincache_ucache_exists('green'));
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [wincache\_ucache\_set()](function.wincache-ucache-set.md) - Adiciona uma variável no cache do usuário e substitui uma variável se ela já existir no cache
- [wincache\_ucache\_add()](function.wincache-ucache-add.md) - Adiciona uma variável no cache do usuário somente se a variável ainda não existir no cache
- [wincache\_ucache\_get()](function.wincache-ucache-get.md) - Obtém uma variável armazenada no cache do usuário
- [wincache\_ucache\_clear()](function.wincache-ucache-clear.md) - Exclui todo o conteúdo do cache do usuário
- [wincache\_ucache\_delete()](function.wincache-ucache-delete.md) - Exclui variáveis ​​do cache do usuário
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
