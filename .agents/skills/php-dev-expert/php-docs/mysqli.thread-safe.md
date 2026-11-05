# Retorna se a segurança de thread é dada ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.thread-safe.php

---

# mysqli::thread\_safe

# mysqli\_thread\_safe

(PHP 5, PHP 7, PHP 8)

mysqli::thread\_safe -- mysqli\_thread\_safe — Retorna se a segurança de thread é dada ou não

### Descrição

Estilo orientado a objetos

public function **mysqli::thread\_safe**(): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_thread\_safe**(): [bool](language.types.boolean.md)

Informa se a biblioteca cliente é compilada como thread-safe.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a biblioteca cliente for thread-safe, caso contrário, **`false`**.

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
