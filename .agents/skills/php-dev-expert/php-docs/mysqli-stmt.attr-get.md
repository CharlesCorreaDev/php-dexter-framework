# Usado para obter o valor atual de um atributo de instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.attr-get.php

---

# mysqli\_stmt::attr\_get

# mysqli\_stmt\_attr\_get

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::attr\_get -- mysqli\_stmt\_attr\_get — Usado para obter o valor atual de um atributo de instrução

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::attr\_get**([int](language.types.integer.md) `$attribute`): [int](language.types.integer.md)

Estilo procedural

function **mysqli\_stmt\_attr\_get**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`, [int](language.types.integer.md) `$attribute`): [int](language.types.integer.md)

Obtém o valor atual de um atributo de instrução.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

`attribute`
:   O atributo que se deseja obter.

### Valor Retornado

Retorna o valor do atributo.

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
