# Incrementa o valor associado à chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-ucache-inc.php

---

# wincache\_ucache\_inc

(PECL wincache >= 1.1.0)

wincache\_ucache\_inc — 
Incrementa o valor associado à chave

### Descrição

function **wincache\_ucache\_inc**([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$inc_by` = 1, [bool](language.types.boolean.md) `&$success` = ?): [mixed](language.types.mixed.md)

Incrementa o valor associado à chave `key` em 1 ou conforme especificado
por `inc_by`.

### Parâmetros

`key`
:   O parâmetro `key` é a chave usada para armazenar a variável no cache.
    `key` diferencia maiúsculas de minúsculas.

`inc_by`
:   O valor pelo qual a variável associada a `key` será incrementada.
    Se o argumento for um número de ponto flutuante, ele será truncado para o inteiro mais próximo. A variável
    associada a `key` deve ser do tipo `long`, caso contrário,
    a função falha e retorna **`false`**.

`success`
:   Será definido como **`true`** em caso de sucesso e **`false`** em caso de falha.

### Valor Retornado

Retorna o valor incrementado em caso de sucesso e **`false`** em caso de falha.

### Examples

**Exemplo #1 Usando **wincache\_ucache\_inc()****

```
<?php
wincache_ucache_set('counter', 1);
var_dump(wincache_ucache_inc('counter', 2921, $success));
var_dump($success);
?>
```

O exemplo acima produzirá:

```
int(2922)
bool(true)
```

### Veja também

- [wincache\_ucache\_dec()](function.wincache-ucache-dec.md) - Decrementa o valor associado à chave
- [wincache\_ucache\_cas()](function.wincache-ucache-cas.md) - Compara a variável com o valor antigo e atribui um novo valor a ela

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
