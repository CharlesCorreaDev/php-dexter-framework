# Remove o ponto de salvamento nomeado do conjunto de pontos de salvamento da transação atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.release-savepoint.php

---

# mysqli::release\_savepoint

# mysqli\_release\_savepoint

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

mysqli::release\_savepoint -- mysqli\_release\_savepoint — Remove o ponto de salvamento nomeado do conjunto de pontos de salvamento da transação atual

### Descrição

Estilo orientado a objetos

public function **mysqli::release\_savepoint**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Estilo procedural:

function **mysqli\_release\_savepoint**([mysqli](class.mysqli.md) `$mysql`, [string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Esta função é idêntica à execução de `` $mysqli->query("RELEASE SAVEPOINT `$name`"); ``.
Esta função não aciona commit ou rollback.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`name`
:   O identificador do ponto de salvamento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [mysqli\_savepoint()](mysqli.savepoint.md) - Define um ponto de salvamento de transação nomeado

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
