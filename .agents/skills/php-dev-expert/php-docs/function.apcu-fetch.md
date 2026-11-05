# Busca uma variável armazenada no cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-fetch.php

---

# apcu\_fetch

(PECL apcu >= 4.0.0)

apcu\_fetch — 
Busca uma variável armazenada no cache

### Descrição

function **apcu\_fetch**([mixed](language.types.mixed.md) `$key`, [bool](language.types.boolean.md) `&$success` = ?): [mixed](language.types.mixed.md)

Busca uma entrada do cache.

### Parâmetros

`key`
:   O parâmetro `key` contém a chave usada para armazenar o valor (com
    [apcu\_store()](function.apcu-store.md)). Se um array for informado, cada
    elemento é buscado e retornado.

`success`
:   Definido para **`true`** em caso de sucesso e **`false`** em caso de falha.

### Valor Retornado

A variável armazenada ou array de variáveis em caso de sucesso; **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL apcu 3.0.17 | O parâmetro `success` foi adicionado. |

### Examples

**Exemplo #1 Um exemplo de **apcu\_fetch()****

```
<?php
$bar = 'BAR';
apcu_store('foo', $bar);
var_dump(apcu_fetch('foo'));
?>
```

O exemplo acima produzirá:

```
string(3) "BAR"
```

### Veja também

- [apcu\_store()](function.apcu-store.md) - Armazena uma variável em cache
- [apcu\_delete()](function.apcu-delete.md) - Remove uma variável armazenada do cache
- [APCUIterator](class.apcuiterator.md)

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
