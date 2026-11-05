# Número de linhas em um resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-num-rows.php

---

# odbc\_num\_rows

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_num\_rows — Número de linhas em um resultado

### Descrição

function **odbc\_num\_rows**([Odbc\Result](class.odbc-result.md) `$statement`): [int](language.types.integer.md)

Obtém o número de linhas em um resultado ODBC. Para instruções INSERT, UPDATE e DELETE,
**odbc\_num\_rows()** retorna o número de linhas
afetadas. Para SELECT, isto *pode* ser o número
de linhas disponíveis.

### Parâmetros

`statement`
:   O objeto de resultado ODBC retornado pela [odbc\_exec()](function.odbc-exec.md).

### Valor Retornado

Retorna o número de linhas em um resultado ODBC.
Esta função retornará -1 em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `statement` agora espera uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, esperava um [resource](language.types.resource.md). |

### Notas

> **Nota**:
>
> Usar **odbc\_num\_rows()** para determinar o número de linhas
> disponível após um SELECT retornará -1 com muitos drivers.

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
