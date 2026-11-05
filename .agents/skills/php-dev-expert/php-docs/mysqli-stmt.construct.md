# Constrói um novo objeto mysqli_stmt

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.construct.php

---

# mysqli\_stmt::\_\_construct

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::\_\_construct — Constrói um novo objeto [mysqli\_stmt](class.mysqli-stmt.md)

### Descrição

public function **mysqli\_stmt::\_\_construct**([mysqli](class.mysqli.md) `$mysql`, [?](language.types.null.md)[string](language.types.string.md) `$query` = **`null`**)

Este método constrói um novo objeto [mysqli\_stmt](class.mysqli-stmt.md).

### Parâmetros

`link`
:   Om objeto [mysqli](class.mysqli.md) válido.

`query`
:   A consulta, como uma string. Se este parâmetro for **`null`**, o
    construtor se comporta de forma idêntica a
    [mysqli\_stmt\_init()](mysqli.stmt-init.md), caso contrário se comporta como
    [mysqli\_prepare()](mysqli.prepare.md).

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `query` agora pode ser nulo. |

### Veja também

- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução
- [mysqli\_stmt\_init()](mysqli.stmt-init.md) - Inicializa uma instrução e retorna um objeto para uso com mysqli\_stmt\_prepare

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
