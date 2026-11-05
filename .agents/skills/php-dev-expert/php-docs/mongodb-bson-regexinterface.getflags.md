# Retorna as opções de RegexInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-regexinterface.getflags.php

---

# MongoDB\BSON\RegexInterface::getFlags

(mongodb >=1.3.0)

MongoDB\BSON\RegexInterface::getFlags — Retorna as opções de RegexInterface

### Descrição

abstract public function **MongoDB\BSON\RegexInterface::getFlags**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna as opções de RegexInterface.

### Veja também

- [MongoDB\BSON\Regex::getFlags()](mongodb-bson-regex.getflags.md) - Retorna as opções de Regex

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
