# Faz cache de uma nova variável no armazenamento de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-add.php

---

# apcu\_add

(PECL apcu >= 4.0.0)

apcu\_add — 
Faz cache de uma nova variável no armazenamento de dados

### Descrição

function **apcu\_add**([string](language.types.string.md) `$key`, [mixed](language.types.mixed.md) `$var`, [int](language.types.integer.md) `$ttl` = 0): [bool](language.types.boolean.md)

function **apcu\_add**([array](language.types.array.md) `$values`, [mixed](language.types.mixed.md) `$unused` = NULL, [int](language.types.integer.md) `$ttl` = 0): [array](language.types.array.md)

Faz cache de uma variável no armazenamento de dados, somente se já não estiver armazenada.

> **Nota**:
>
> Deferentemente de outros mecanismos no PHP, variáveis armazenadas usando
> **apcu\_add()** irão persistir entre requisições (até que o
> valor seja removido do cache).

### Parâmetros

`key`
:   Armazena a variável usando este nome. Uma chave definida por `key` deve
    ser única no cache, portanto tentar usar **apcu\_add()** para
    armazenar dados com uma chave que já existe não substutuirá os
    dados existentes, e ao invés disso retornará **`false`**. Esta é a única
    diferença entre **apcu\_add()** e
    [apcu\_store()](function.apcu-store.md).

`var`
:   A variável a ser armazenada

`ttl`
:   Tempo de vida (Time To Live); armazena `var` no cache por
    `ttl` segundos. Depois que
    `ttl` segundos tiverem decorrido, a variável armazenada será
    excluída do cache (na próxima requisição). Se o parâmetro `ttl`
    não for fornecido (ou se `ttl` for
    `0`), o valor persistirá até que seja removido do
    cache manualmente, ou se não existir mais no cache (em uma limpeza,
    reinício, etc.).

`values`
:   Nomes nas chaves, variáveis no valor.

### Valor Retornado

Retorna TRUE se algo foi efetivamente adicionado ao chace, FALSE caso contrário.
A segunda sintaxe retorna um array com chaves de erros.

### Examples

**Exemplo #1 Um exemplo de **apcu\_add()****

```
<?php
$bar = 'BAR';
apcu_add('foo', $bar);
var_dump(apcu_fetch('foo'));
echo "\n";
$bar = 'NEVER GETS SET';
apcu_add('foo', $bar);
var_dump(apcu_fetch('foo'));
echo "\n";
?>
```

O exemplo acima produzirá:

```
string(3) "BAR"
string(3) "BAR"
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
