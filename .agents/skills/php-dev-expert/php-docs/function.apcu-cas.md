# Atualiza um valor antigo com um novo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-cas.php

---

# apcu\_cas

(PECL apcu >= 4.0.0)

apcu\_cas — Atualiza um valor antigo com um novo

### Descrição

function **apcu\_cas**([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$old`, [int](language.types.integer.md) `$new`): [bool](language.types.boolean.md)

**apcu\_cas()** atualiza um valor inteiro já existente se o
parâmetro `old` corresponder ao valor armazenado atualmente
com o valor do parâmetro `new`.

### Parâmetros

`key`
:   A chave do valor sendo atualizado.

`old`
:   O valor antigo (o valor atualmente armazenado).

`new`
:   O novo valor com o qual a chave será atualizada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **apcu\_cas()****

```
<?php
apcu_store('foobar', 2);
echo '$foobar = 2', PHP_EOL;
echo '$foobar == 1 ? 2 : 1 = ', (apcu_cas('foobar', 1, 2) ? 'ok' : 'falha'), PHP_EOL;
echo '$foobar == 2 ? 1 : 2 = ', (apcu_cas('foobar', 2, 1) ? 'ok' : 'falha'), PHP_EOL;

echo '$foobar = ', apcu_fetch('foobar'), PHP_EOL;

echo '$f__bar == 1 ? 2 : 1 = ', (apcu_cas('f__bar', 1, 2) ? 'ok' : 'falha'), PHP_EOL;

apcu_store('perfection', 'xyz');
echo '$perfection == 2 ? 1 : 2 = ', (apcu_cas('perfection', 2, 1) ? 'ok' : 'falha épica'), PHP_EOL;

echo '$foobar = ', apcu_fetch('foobar'), PHP_EOL;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
$foobar = 2
$foobar == 1 ? 2 : 1 = falha
$foobar == 2 ? 1 : 2 = ok
$foobar = 1
$f__bar == 1 ? 2 : 1 = falha
$perfection == 2 ? 1 : 2 = falha épica
$foobar = 1
```

### Veja também

- [apcu\_dec()](function.apcu-dec.md) - Decrementa um número armazenado
- [apcu\_store()](function.apcu-store.md) - Armazena uma variável em cache

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
