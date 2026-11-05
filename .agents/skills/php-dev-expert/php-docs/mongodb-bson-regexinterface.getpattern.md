# Retorna a expressão regular de RegexInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-regexinterface.getpattern.php

---

# MongoDB\BSON\RegexInterface::getPattern

(mongodb >=1.3.0)

MongoDB\BSON\RegexInterface::getPattern — Retorna a expressão regular de RegexInterface

### Descrição

abstract public function **MongoDB\BSON\RegexInterface::getPattern**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a expressão regular de RegexInterface.

### Veja também

- [MongoDB\BSON\Regex::getPattern()](mongodb-bson-regex.getpattern.md) - Retorna a expressão regular de Regex

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
