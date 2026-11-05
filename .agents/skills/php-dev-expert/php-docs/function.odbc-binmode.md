# Manipulação de dados de colunas binárias

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-binmode.php

---

# odbc\_binmode

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_binmode — Manipulação de dados de colunas binárias

### Descrição

function **odbc\_binmode**([Odbc\Result](class.odbc-result.md) `$statement`, [int](language.types.integer.md) `$mode`): [true](language.types.singleton.md)

Controla a manipulação de dados de colunas binárias. Os tipos SQL ODBC afetados são
`BINARY`, `VARBINARY` e
`LONGVARBINARY`.
O modo padrão pode ser definido usando a diretiva
[uodbc.defaultbinmode](odbc.configuration.md#ini.uodbc.defaultbinmode) do php.ini.

Quando dados SQL binários são convertidos em dados de caracteres C (**`ODBC_BINMODE_CONVERT`**), cada byte
(8 bits) dos dados de origem é representado como dois caracteres ASCII.
Esses caracteres são a representação de caracteres ASCII do
número em sua forma hexadecimal. Por exemplo, um binário
`00000001` é convertido em
`"01"` e um binário `11111111`
é convertido em `"FF"` .

Embora o tratamento das colunas `BINARY` e `VARBINARY`
dependa apenas do "binmode", o tratamento das colunas `LONGVARBINARY`
também depende do "longreadlen":

**Manipulação de LONGVARBINARY**

| binmode | longreadlen | resultado |
| --- | --- | --- |
| **`ODBC_BINMODE_PASSTHRU`** | 0 | intermediário |
| **`ODBC_BINMODE_RETURN`** | 0 | intermediário |
| **`ODBC_BINMODE_CONVERT`** | 0 | intermediário |
| **`ODBC_BINMODE_PASSTHRU`** | >0 | intermediário |
| **`ODBC_BINMODE_RETURN`** | >0 | retorna como está |
| **`ODBC_BINMODE_CONVERT`** | >0 | retorna como char |

Se [odbc\_fetch\_into()](function.odbc-fetch-into.md) for usada, "intermediário" significa que uma
string vazia será retornada para essas colunas.
Se [odbc\_result()](function.odbc-result.md) for usada, "intermediário" significa que os dados são
enviados diretamente ao cliente (ou seja, exibidos).

### Parâmetros

`statement`
:   O objeto de resultado ODBC.

`mode`
:   Valores possíveis para `mode` são:

    - **`ODBC_BINMODE_PASSTHRU`**: Intermediário para dados BINARY
    - **`ODBC_BINMODE_RETURN`**: Retorna como está
    - **`ODBC_BINMODE_CONVERT`**: Converte para "char" e retorna

    > **Nota**:
    >
    > A manipulação de colunas de binários
    > longos também é afetada por [odbc\_longreadlen()](function.odbc-longreadlen.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `statement` agora espera uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, esperava um [resource](language.types.resource.md). |

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
