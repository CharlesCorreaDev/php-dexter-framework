# Retorna o documento de resultado do comando com falha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-commandexception.getresultdocument.php

---

# MongoDB\Driver\Exception\CommandException::getResultDocument

(mongodb >= 1.5.0)

MongoDB\Driver\Exception\CommandException::getResultDocument — Retorna o documento de resultado do comando com falha

### Descrição

final public function **MongoDB\Driver\Exception\CommandException::getResultDocument**(): [object](language.types.object.md)

Retorna o documento de resultado do comando com falha.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O documento de resultado do comando com falha.

### Veja também

- [MongoDB\Driver\Manager::executeCommand()](mongodb-driver-manager.executecommand.md) - Executa um comando de banco de dados

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
