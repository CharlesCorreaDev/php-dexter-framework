# A classe mysqli_warning

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysqli-warning.php

---

# A classe mysqli\_warning

(PHP 5, PHP 7, PHP 8)

## Introdução

Representa um aviso do MySQL.

## Resumo da classe

final
class ****mysqli\_warning****
{

/\* Propriedades \*/

public
[string](language.types.string.md)
[$message](class.mysqli-warning.md#mysqli-warning.props.message);

public
[string](language.types.string.md)
[$sqlstate](class.mysqli-warning.md#mysqli-warning.props.sqlstate);

public
[int](language.types.integer.md)
[$errno](class.mysqli-warning.md#mysqli-warning.props.errno);

/\* Métodos \*/

private function [\_\_construct](mysqli-warning.construct.md)()

public function [next](mysqli-warning.next.md)(): [bool](language.types.boolean.md)

}

## Propriedades

message
:   string da Mensagem

sqlstate
:   Estado SQL

errno
:   Número do erro

## Índice

- [mysqli\_warning::\_\_construct](mysqli-warning.construct.md) — Construtor privado para proibir instanciação direta
- [mysqli\_warning::next](mysqli-warning.next.md) — Busca o próximo aviso

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
