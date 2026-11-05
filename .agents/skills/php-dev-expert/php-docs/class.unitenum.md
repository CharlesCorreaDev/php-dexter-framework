# A interface UnitEnum

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.unitenum.php

---

# A interface UnitEnum

(PHP 8 >= 8.1.0)

## Introdução

A interface **UnitEnum** é aplicada automaticamente a todas
as enumerações pelo motor do PHP. Não pode ser implementada por classes definidas pelo usuário.
Enumerações não podem substituir seus métodos, já que implementações padrão são fornecidas
pelo motor. Está disponível apenas para verificações de tipo.

## Resumo da Interface

interface ****UnitEnum**** {

/\* Métodos \*/

public static function [cases](unitenum.cases.md)(): [array](language.types.array.md)

}

## Índice

- [UnitEnum::cases](unitenum.cases.md) — Gera uma lista de casos de uma enumeração

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
