# Verifica se há mais resultados de uma consulta múltipla

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.more-results.php

---

# mysqli\_stmt::more\_results

# mysqli\_stmt\_more\_results

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

mysqli\_stmt::more\_results -- mysqli\_stmt\_more\_results — Verifica se há mais resultados de uma consulta múltipla

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::more\_results**(): [bool](language.types.boolean.md)

Estilo procedural:

function **mysqli\_stmt\_more\_results**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [bool](language.types.boolean.md)

Verifica se há mais resultados de uma consulta múltipla.

> **Nota**:
>
> Disponível apenas com o [mysqlnd](book.mysqlnd.md).

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Retorna **`true`** se houver mais resultados, caso contrário retorna **`false`**.

### Veja também

- [mysqli\_stmt::next\_result()](mysqli-stmt.next-result.md) - Lê o próximo resultado de uma consulta múltipla
- [mysqli::multi\_query()](mysqli.multi-query.md) - Executa uma ou mais consultas no banco de dados

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
