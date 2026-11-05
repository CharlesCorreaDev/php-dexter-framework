# Define um ponto de salvamento de transação nomeado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.savepoint.php

---

# mysqli::savepoint

# mysqli\_savepoint

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

mysqli::savepoint -- mysqli\_savepoint — Define um ponto de salvamento de transação nomeado

### Descrição

Estilo orientado a objetos

public function **mysqli::savepoint**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Estilo procedural:

function **mysqli\_savepoint**([mysqli](class.mysqli.md) `$mysql`, [string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Esta função é idêntica à execução de `` $mysqli->query("SAVEPOINT `$name`"); ``

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`name`
:   O identificador do ponto de salvamento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [mysqli\_release\_savepoint()](mysqli.release-savepoint.md) - Remove o ponto de salvamento nomeado do conjunto de pontos de salvamento da transação atual

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
