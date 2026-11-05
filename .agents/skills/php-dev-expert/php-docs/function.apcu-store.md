# Armazena uma variável em cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-store.php

---

# apcu\_store

(PECL apcu >= 4.0.0)

apcu\_store — 
Armazena uma variável em cache

### Descrição

function **apcu\_store**([string](language.types.string.md) `$key`, [mixed](language.types.mixed.md) `$var`, [int](language.types.integer.md) `$ttl` = 0): [bool](language.types.boolean.md)

function **apcu\_store**([array](language.types.array.md) `$values`, [mixed](language.types.mixed.md) `$unused` = NULL, [int](language.types.integer.md) `$ttl` = 0): [array](language.types.array.md)

Armazena uma variável em cache.

> **Nota**:
>
> Diferentemente de muitos outros mecanismos no PHP, variáveis armazenadas usando
> **apcu\_store()** persistirão entre requisições (até que
> o valor seja removido do cache).

### Parâmetros

`key`
:   Armazena a variável usando o nome informado em `key`, que
    deve ser única no cache. Portanto, armazenar um segundo valor com o mesmo valor de
    `key` irá substituir o valor original.

`var`
:   A variável a ser armazenada

`ttl`
:   Tempo de Vida (Time To Live); armazena `var` no cache por
    `ttl` segundos. Depois desses
    `ttl` segundos, a variável armazenada será
    excluída do cache (na próxima requisição). Se nenhum parâmetro `ttl`
    for informado (ou se `ttl` for
    `0`), o valor persistirá até que seja removido do
    cache manualmente, ou caso deixe de existir no cache (limpeza,
    reinício, etc.).

`values`
:   Nomes nas chaves, variáveis nos valores.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
A segunda sintaxe retorna um array com chaves de erros.

### Examples

**Exemplo #1 Um exemplo de **apcu\_store()****

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

- [apcu\_add()](function.apcu-add.md) - Faz cache de uma nova variável no armazenamento de dados
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
