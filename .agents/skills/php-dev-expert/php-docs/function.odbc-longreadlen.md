# Manipulação de colunas LONG

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-longreadlen.php

---

# odbc\_longreadlen

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_longreadlen — Manipulação de colunas LONG

### Descrição

function **odbc\_longreadlen**([Odbc\Result](class.odbc-result.md) `$statement`, [int](language.types.integer.md) `$length`): [true](language.types.singleton.md)

Controla a manipulação das colunas `LONG`, `LONGVARCHAR` e `LONGVARBINARY`.
O comprimento padrão pode ser definido usando a diretiva
[uodbc.defaultlrl](odbc.configuration.md#ini.uodbc.defaultlrl) php.ini.

### Parâmetros

`statement`
:   O objeto de resultado ODBC.

`length`
:   O número de bytes retornado pelo PHP é controlado por este
    parâmetro. Se for definido como `0`, dados de coluna LONG são passados
    para o cliente (ou seja, exibidos) quando recuperados com [odbc\_result()](function.odbc-result.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `statement` agora espera uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, esperava um [resource](language.types.resource.md). |

### Notas

> **Nota**:
>
> Manipulação de colunas `LONGVARBINARY` é também afetado por
> [odbc\_binmode()](function.odbc-binmode.md).

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
