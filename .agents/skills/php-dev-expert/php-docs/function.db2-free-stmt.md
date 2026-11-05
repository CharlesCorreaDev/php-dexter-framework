# Libera recursos associados ao recurso de instrução indicado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-free-stmt.php

---

# db2\_free\_stmt

(PECL ibm\_db2 >= 1.0.0)

db2\_free\_stmt — 
Libera recursos associados ao recurso de instrução indicado

### Descrição

function **db2\_free\_stmt**([resource](language.types.resource.md) `$stmt`): [bool](language.types.boolean.md)

Libera os recursos do sistema e do banco de dados que estão associados a um recurso de
instrução. Esses recursos são liberados implicitamente quando um script termina, mas
você pode chamar **db2\_free\_stmt()** para liberar explicitamente os
recursos de instrução antes do fim do script.

### Parâmetros

`stmt`
:   Um recurso de instrução válido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [db2\_free\_result()](function.db2-free-result.md) - Libera recursos associados a um conjunto de resultados

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
