# Verifica se uma função é anônima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunction.isanonymous.php

---

# ReflectionFunction::isAnonymous

(PHP 8 >= 8.2.0)

ReflectionFunction::isAnonymous — Verifica se uma função é anônima

### Descrição

public function **ReflectionFunction::isAnonymous**(): [bool](language.types.boolean.md)

Verifica se uma função é [anônima](functions.anonymous.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a função é anônima, caso contrário **`false`**.

### Examples

**Exemplo #1 Exemplo de **ReflectionFunction::isAnonymous()****

```
<?php

$rf = new ReflectionFunction(function() {});
var_dump($rf->isAnonymous());

$rf = new ReflectionFunction('strlen');
var_dump($rf->isAnonymous());
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

### Veja também

- [Funções anônimas](functions.anonymous.md)

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
