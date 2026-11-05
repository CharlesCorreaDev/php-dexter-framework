# Libera recursos associados a um conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-free-result.php

---

# db2\_free\_result

(PECL ibm\_db2 >= 1.0.0)

db2\_free\_result — 
Libera recursos associados a um conjunto de resultados

### Descrição

function **db2\_free\_result**([resource](language.types.resource.md) `$stmt`): [bool](language.types.boolean.md)

Libera os recursos do sistema e do banco de dados que estão associados a um conjunto
de resultados. Esses recursos são liberados implicitamente quando um script termina, mas
**db2\_free\_result()** pode ser chamada para liberar explicitamente os recursos
do conjunto de resultados antes do fim do script.

### Parâmetros

`stmt`
:   Um recurso de instrução válido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [db2\_free\_stmt()](function.db2-free-stmt.md) - Libera recursos associados ao recurso de instrução indicado

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
