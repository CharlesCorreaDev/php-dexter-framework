# Exibe o resultado como uma tabela HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-result-all.php

---

# odbc\_result\_all

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_result\_all — Exibe o resultado como uma tabela HTML

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.1.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **odbc\_result\_all**([Odbc\Result](class.odbc-result.md) `$statement`, [string](language.types.string.md) `$format` = ""): [int](language.types.integer.md)|[false](language.types.singleton.md)

Exibe todas as linhas de um objeto de resultado produzido pela função
[odbc\_exec()](function.odbc-exec.md). O resultado é exibido no formato de tabela HTML.
Os dados *não* são escapados.

Esta função não deve ser usada em ambientes de produção; é
destinada para fins de desenvolvimento, para obter um conjunto de resultados renderizado rapidamente.

### Parâmetros

`statement`
:   O objeto de resultado ODBC.

`format`
:   Formatação adicional da tabela em geral.

### Valor Retornado

Retorna o número de linhas no resultado ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `statement` agora espera uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.1.0 | Esta função foi descontinuada. |

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
