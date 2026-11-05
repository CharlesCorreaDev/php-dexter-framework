# Obtém uma linha do resultado como um array associativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-fetch-array.php

---

# odbc\_fetch\_array

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

odbc\_fetch\_array — Obtém uma linha do resultado como um array associativo

### Descrição

function **odbc\_fetch\_array**([Odbc\Result](class.odbc-result.md) `$statement`, [?](language.types.null.md)[int](language.types.integer.md) `$row` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém um [array](language.types.array.md) associativo de uma consulta ODBC.

### Parâmetros

`statement`
:   O objeto de resultado ODBC de [odbc\_exec()](function.odbc-exec.md).

`row`
:   O número da linha a recuperar (base 1). Se omitido ou **`null`**, a
    próxima linha do resultado é buscada, assim como
    [odbc\_fetch\_row()](function.odbc-fetch-row.md) faz. Se o driver não
    suportar a busca de linhas por número, este parâmetro é ignorado.

### Valor Retornado

Retorna um array que corresponde à linha obtida, ou **`false`** se não
houver mais linhas.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `statement` agora espera uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | `row` agora pode ser nulo e seu valor padrão mudou de `-1` para **`null`**, consistente com [odbc\_fetch\_row()](function.odbc-fetch-row.md). |

### Notas

> **Nota**:
>
> Esta função existe quando compilada com suporte DBMaker, IBM DB2 ou UnixODBC.

### Veja também

- [odbc\_fetch\_row()](function.odbc-fetch-row.md) - Obtém uma linha
- [odbc\_fetch\_object()](function.odbc-fetch-object.md) - Obtém um conjunto de resultados como um objeto
- [odbc\_num\_rows()](function.odbc-num-rows.md) - Número de linhas em um resultado

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
