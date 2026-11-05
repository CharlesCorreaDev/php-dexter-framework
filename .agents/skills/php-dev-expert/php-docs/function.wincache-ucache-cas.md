# Compara a variável com o valor antigo e atribui um novo valor a ela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-ucache-cas.php

---

# wincache\_ucache\_cas

(PECL wincache >= 1.1.0)

wincache\_ucache\_cas — 
Compara a variável com o valor antigo e atribui um novo valor a ela

### Descrição

function **wincache\_ucache\_cas**([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$old_value`, [int](language.types.integer.md) `$new_value`): [bool](language.types.boolean.md)

Compara a variável associada à chave `key` com o valor antigo em `old_value`
e, se corresponder, atribui o novo valor em `new_value` a ela.

### Parâmetros

`key`
:   O parâmetro `key` é usado para armazenar a variável no cache.
    `key` diferencia maiúsculas de minúsculas.

`old_value`
:   Valor antigo da variável apontada por `key` no cache do usuário.
    O valor deve ser do tipo `long`, caso contrário, a função retorna
    **`false`**.

`new_value`
:   Novo valor que será atribuído ao ponteiro da variável por `key` se uma
    correspondência for encontrada. O valor deve ser do tipo `long`, caso contrário,
    a função retorna **`false`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Usando **wincache\_ucache\_cas()****

```
<?php
wincache_ucache_set('counter', 2922);
var_dump(wincache_ucache_cas('counter', 2922, 1));
var_dump(wincache_ucache_get('counter'));
?>
```

O exemplo acima produzirá:

```
bool(true)
int(1)
```

### Veja também

- [wincache\_ucache\_inc()](function.wincache-ucache-inc.md) - Incrementa o valor associado à chave
- [wincache\_ucache\_dec()](function.wincache-ucache-dec.md) - Decrementa o valor associado à chave

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
