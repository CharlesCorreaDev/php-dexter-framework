# Retorna a representação em string deste RegexInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-regexinterface.tostring.php

---

# MongoDB\BSON\RegexInterface::\_\_toString

(mongodb >=1.3.0)

MongoDB\BSON\RegexInterface::\_\_toString — Retorna a representação em string deste RegexInterface

### Descrição

abstract public function **MongoDB\BSON\RegexInterface::\_\_toString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em string deste RegexInterface.

### Veja também

- [MongoDB\BSON\Regex::\_\_toString()](mongodb-bson-regex.tostring.md) - Retorna a representação em string deste Regex

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
