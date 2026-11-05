# Verifica se há mais algum resultado de uma consulta múltipla

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.more-results.php

---

# mysqli::more\_results

# mysqli\_more\_results

(PHP 5, PHP 7, PHP 8)

mysqli::more\_results -- mysqli\_more\_results — Verifica se há mais algum resultado de uma consulta múltipla

### Descrição

Estilo orientado a objetos

public function **mysqli::more\_results**(): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_more\_results**([mysqli](class.mysqli.md) `$mysql`): [bool](language.types.boolean.md)

Indica se um ou mais conjuntos de resultados estão disponíveis de uma chamada
anterior a [mysqli\_multi\_query()](mysqli.multi-query.md).

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Retorna **`true`** se um ou mais conjuntos de resultados (incluindo erros) estão disponíveis de uma chamada
anterior a [mysqli\_multi\_query()](mysqli.multi-query.md), caso contrário **`false`**.

### Examples

Consulte [mysqli\_multi\_query()](mysqli.multi-query.md).

### Veja também

- [mysqli\_multi\_query()](mysqli.multi-query.md) - Executa uma ou mais consultas no banco de dados
- [mysqli\_next\_result()](mysqli.next-result.md) - Prepara o próximo resultado de multi\_query
- [mysqli\_store\_result()](mysqli.store-result.md) - Transfere um conjunto de resultados da última consulta
- [mysqli\_use\_result()](mysqli.use-result.md) - Inicia uma recuperação de conjunto de resultados

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
