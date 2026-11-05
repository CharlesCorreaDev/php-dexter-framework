# Obtém uma linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-fetch-row.php

---

# odbc\_fetch\_row

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_fetch\_row — Obtém uma linha

### Descrição

function **odbc\_fetch\_row**([Odbc\Result](class.odbc-result.md) `$statement`, [?](language.types.null.md)[int](language.types.integer.md) `$row` = **`null`**): [bool](language.types.boolean.md)

Obtém uma linha de dados que foi retornada pela [odbc\_do()](function.odbc-do.md)
ou [odbc\_exec()](function.odbc-exec.md). Depois de **odbc\_fetch\_row()**
ser chamada, os campos desta linha podem ser acessados com
[odbc\_result()](function.odbc-result.md).

### Parâmetros

`statement`
:   O objeto de resultado ODBC.

`row`
:   Se `row` não for especificado,
    **odbc\_fetch\_row()** irá tentar obter a próxima linha
    no conjunto de resultados. Chamadas para **odbc\_fetch\_row()**
    com ou sem `row` podem ser misturadas.

    Para caminhar através do conjunto de resultados mais de uma vez, pode-se usar
    **odbc\_fetch\_row()** com
    `row` 1, e então continuar chamando
    **odbc\_fetch\_row()** sem
    `row` para ver os resultados. Se um driver não
    suportar a obtenção de linhas por números, o parâmetro
    `row` é ignorado.

### Valor Retornado

Retorna **`true`** se houver uma linha, **`false`** caso contrário.

### Erros/Exceções

Um **`E_WARNING`** é emitido quando `row`
for menor ou igual a zero.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `statement` agora espera uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | Um **`E_WARNING`** agora é emitido quando `row` for menor ou igual a zero. |
| 8.0.0 | `row` agora pode ser nulo. |

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
