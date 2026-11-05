# Visão Geral das Enumerações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.enumerations.overview.php

---

## Visão Geral das Enumerações

(PHP 8 >= 8.1.0)

Enumerações, ou "Enums", permitem que um desenvolvedor defina um tipo personalizado que está limitado a um
número discreto de valores possíveis. Isso pode ser especialmente útil ao definir um
modelo de domínio, pois permite "tornar estados inválidos irrepresentáveis."

Enumerações aparecem em muitas linguagens com uma variedade de recursos diferentes. No PHP,
Enumerações são um tipo especial de objeto. A enumeração em si é uma classe, e seus possíveis
casos são todos objetos de instância única dessa classe. Isso significa que casos de enumeração são
objetos válidos e podem ser usados em qualquer lugar em que um objeto pode ser usado, incluindo verificações de tipo.

O exemplo mais popular de enumerações é o tipo embutido booleano, que é um
tipo enumerado com valores válidos **`true`** e **`false`**.
Enumerações permitem que os desenvolvedores definam suas próprias enumerações robustas.

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
