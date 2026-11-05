# A interface Reflector

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflector.php

---

# A interface Reflector

(PHP 5, PHP 7, PHP 8)

## Introdução

**Reflector** é uma interface implementada por todas
as classes de reflexão exportáveis.

## Resumo da Interface

interface ****Reflector****
extends
[Stringable](class.stringable.md) {

/\* Métodos herdados \*/

public function [Stringable::\_\_toString](stringable.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | [Reflector::export()](reflector.export.md) foi removido. |
| 8.0.0 | **Reflector** estende [Stringable](class.stringable.md) agora. Ela herda [Stringable::\_\_toString()](stringable.tostring.md), substituindo **Reflector::\_\_toString()**. |

## Veja também

- [Reflector::export()](reflector.export.md)

## Índice

- [Reflector::export](reflector.export.md) — Exporta

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
