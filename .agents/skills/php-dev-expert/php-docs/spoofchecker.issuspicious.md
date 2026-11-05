# Verifica se um texto fornecido contém algum caractere suspeito

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spoofchecker.issuspicious.php

---

# Spoofchecker::isSuspicious

(PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0)

Spoofchecker::isSuspicious — Verifica se um texto fornecido contém algum caractere suspeito

### Descrição

public function **Spoofchecker::isSuspicious**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `&$errorCode` = **`null`**): [bool](language.types.boolean.md)

Verifica se uma string contém algum caractere suspeito como letras que
são quase idênticas visualmente, mas são caracteres Unicode de conjuntos diferentes.

### Parâmetros

`string`
:   String a ser testada.

`errorCode`
:   Esta variável é definida por referência para [int](language.types.integer.md) contendo um erro, se houver
    algum.

### Valor Retornado

Retorna **`true`** se houver caracteres suspeitos, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Spoofchecker::isSuspicious()****

```
<?php
$checker = new Spoofchecker();

$checker->isSuspicious('google.com'); // FALSO: apenas caracteres ASCII

$checker->isSuspicious('Рaypal.com'); // VERDADEIRO
// A primeira letra é do alfabeto cirílico, e não um "P" latino
```

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
