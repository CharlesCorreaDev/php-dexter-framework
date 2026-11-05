# Lista de outras palavras reservadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.other-reserved-words.php

---

## Lista de outras palavras reservadas

As palavras a seguir não podem ser utilizadas como nome de classes, interfaces, traits ou enumerações.
Anteriormente ao PHP 8.0, também eram proibidas de ser usadas em namespaces.

**Palavras reservadas**

|  |  |  |  |
| --- | --- | --- | --- |
| parent | self | int | float |
| bool | string | true | false |
| null | void (a partir do PHP 7.1) | iterable (a partir do PHP 7.1) | object (a partir do PHP 7.2) |
| mixed (a partir do PHP 8.0) | never (a partir do PHP 8.1) | array (a partir do PHP 8.5) | callable (a partir do PHP 8.5) |

A seguinte lista de palavras tem reservas brandas.
Embora elas possam ser utilizadas como nomes de classes, interfaces, traits e enumerações,
seu uso é altamente desencorajado pois elas podem se
tornar palavras reservadas em versões futuras do PHP.

**Palavras reservadas brandas**

|  |  |  |  |
| --- | --- | --- | --- |
| enum | resource | numeric |  |

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
