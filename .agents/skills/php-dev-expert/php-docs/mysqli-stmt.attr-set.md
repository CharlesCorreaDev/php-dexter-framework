# Usado para modificar o comportamento de uma instrução preparada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.attr-set.php

---

# mysqli\_stmt::attr\_set

# mysqli\_stmt\_attr\_set

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::attr\_set -- mysqli\_stmt\_attr\_set — Usado para modificar o comportamento de uma instrução preparada

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::attr\_set**([int](language.types.integer.md) `$attribute`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_stmt\_attr\_set**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`, [int](language.types.integer.md) `$attribute`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

Usada para modificar o comportamento de uma instrução preparada. Esta função pode ser
chamada múltiplas vezes para definir vários atributos.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

`attribute`
:   O atributo que se deseja definir. Pode ser um dos seguintes valores:

    **Valores de atributos**

    | Caractere | Descrição |
    | --- | --- |
    | MYSQLI\_STMT\_ATTR\_UPDATE\_MAX\_LENGTH | Definir para **`true`** faz com que [mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md) atualize o valor do metadado `MYSQL_FIELD->max_length`. |
    | MYSQLI\_STMT\_ATTR\_CURSOR\_TYPE | Tipo de cursor a ser aberto para a instrução quando [mysqli\_stmt\_execute()](mysqli-stmt.execute.md) for chamada. `value` pode ser **`MYSQLI_CURSOR_TYPE_NO_CURSOR`** (o padrão) ou **`MYSQLI_CURSOR_TYPE_READ_ONLY`**. |
    | MYSQLI\_STMT\_ATTR\_PREFETCH\_ROWS | Número de linhas a receber do servidor de cada vez ao usar um cursor. `value` pode estar na faixa de 1 até o máximo valor de um inteiro longo sem sinal. O padrão é 1. Removida a partir do PHP 8.4.0. |

    Se a opção **`MYSQLI_STMT_ATTR_CURSOR_TYPE`** for usada com
    **`MYSQLI_CURSOR_TYPE_READ_ONLY`**, um cursor é aberto para a
    instrução quando [mysqli\_stmt\_execute()](mysqli-stmt.execute.md) é chamada. Se já houver
    um cursor aberto de uma chamada anterior de [mysqli\_stmt\_execute()](mysqli-stmt.execute.md),
    o cursor é fechado antes que um novo seja aberto. [mysqli\_stmt\_reset()](mysqli-stmt.reset.md)
    também fecha qualquer cursor aberto antes de preparar a instrução para re-execução.
    [mysqli\_stmt\_free\_result()](mysqli-stmt.free-result.md) fecha qualquer cursor aberto.

    Se for aberto um cursor para uma instrução preparada, a função [mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md)
    é desnecessária.

`value`
:   O valor a designar para o atributo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Veja também

- [» Conector/MySQL mysql\_stmt\_attr\_set()](https://dev.mysql.com/doc/en/mysql-stmt-attr-set.html)

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
