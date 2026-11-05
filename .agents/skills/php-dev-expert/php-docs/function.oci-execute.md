# Executa uma instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-execute.php

---

# oci\_execute

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_execute — Executa uma instrução

### Descrição

function **oci\_execute**([resource](language.types.resource.md) `$statement`, [int](language.types.integer.md) `$mode` = **`OCI_COMMIT_ON_SUCCESS`**): [bool](language.types.boolean.md)

Executa a instrução do parâmetro `statement` anteriormente retornada
por [oci\_parse()](function.oci-parse.md).

Após a execução, instruções como `INSERT` terão
os dados confirmados no banco de dados por padrão. Para instruções
como `SELECT`, a execução executa a lógica da
consulta. Os resultados da consulta podem ser posteriormente obtidos em PHP com
funções como [oci\_fetch\_array()](function.oci-fetch-array.md).

Cada instrução analisada pode ser executada várias vezes, economizando o
custo de nova análise. Isso é comumente usado
para instruções `INSERT` quando os dados são vinculados
com [oci\_bind\_by\_name()](function.oci-bind-by-name.md).

### Parâmetros

`statement`
:   Um identificador de instrução OCI válido.

`mode`
:   Um segundo parâmetro opcional pode ser uma das seguintes constantes:

    **Modos de execução**

    | Constante | Descrição |
    | --- | --- |
    | **`OCI_COMMIT_ON_SUCCESS`** | Confirma automaticamente todas as alterações pendentes para esta conexão quando a instrução for bem-sucedida. Este é o padrão. |
    | **`OCI_DESCRIBE_ONLY`** | Disponibiliza metadados de consulta para funções como [oci\_field\_name()](function.oci-field-name.md), mas não cria um conjunto de resultados. Qualquer chamada de busca subsequente, como [oci\_fetch\_array()](function.oci-fetch-array.md), falhará. |
    | **`OCI_NO_AUTO_COMMIT`** | Não confirma alterações automaticamente. |

    O uso do modo **`OCI_NO_AUTO_COMMIT`** inicia ou continua uma
    transação. As transações são revertidas automaticamente quando
    a conexão é fechada ou quando o script termina. Explicitamente,
    chame [oci\_commit()](function.oci-commit.md) para confirmar uma transação,
    ou [oci\_rollback()](function.oci-rollback.md) para abortá-la.

    Ao inserir ou atualizar dados, o uso de transações é
    recomendado para consistência de dados relacionais e por questões de
    desempenho.

    Se o modo **`OCI_NO_AUTO_COMMIT`** for usado para qualquer
    instrução, incluindo consultas, e
    [oci\_commit()](function.oci-commit.md)
    ou [oci\_rollback()](function.oci-rollback.md) não for
    chamada posteriormente, o OCI8 executará uma reversão no final do
    script, mesmo que nenhum dado tenha sido alterado. Para evitar uma reversão
    desnecessária, muitos scripts não
    usam o modo **`OCI_NO_AUTO_COMMIT`** para consultas ou
    PL/SQL. Tenha cuidado para garantir a consistência transacional
    apropriada para a aplicação ao
    usar **oci\_execute()** com modos diferentes no
    mesmo script.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 **oci\_execute()** para consultas**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');

$stid = oci_parse($conn, 'SELECT * FROM employees');
oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?>
```

**Exemplo #2 Exemplod de **oci\_execute()** sem especificar um modo**

```
<?php

// Antes de executar, crie a tabela:
//   CREATE TABLE MYTABLE (col1 NUMBER);

$conn = oci_connect('hr', 'welcome', 'localhost/XE');

$stid = oci_parse($conn, 'INSERT INTO mytab (col1) VALUES (123)');

oci_execute($stid); // A linha é confirmada e fica imediatamente visível para outros usuários

?>
```

**Exemplo #3 Exemplo de **oci\_execute()** com **`OCI_NO_AUTO_COMMIT`****

```
<?php

// Antes de executar, crie a tabela:
//   CREATE TABLE MYTABLE (col1 NUMBER);

$conn = oci_connect('hr', 'welcome', 'localhost/XE');

$stid = oci_parse($conn, 'INSERT INTO mytab (col1) VALUES (:bv)');
oci_bind_by_name($stid, ':bv', $i, 10);
for ($i = 1; $i <= 5; ++$i) {
    oci_execute($stid, OCI_NO_AUTO_COMMIT);
}
oci_commit($conn);  // confirma todos os novos valores: 1, 2, 3, 4, 5

?>
```

**Exemplo #4 Exemplo de **oci\_execute()** com diferentes modos de confirmação**

```
<?php

// Antes de executar, crie a tabela:
//   CREATE TABLE MYTABLE (col1 NUMBER);

$conn = oci_connect('hr', 'welcome', 'localhost/XE');

$stid = oci_parse($conn, 'INSERT INTO mytab (col1) VALUES (123)');
oci_execute($stid, OCI_NO_AUTO_COMMIT);  // dados não confirmados

$stid = oci_parse($conn, 'INSERT INTO mytab (col1) VALUES (456)');
oci_execute($stid);  // confirma tanto 123 quanto 456

?>
```

**Exemplo #5 Exemplo de **oci\_execute()** com
**`OCI_DESCRIBE_ONLY`****

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');

$stid = oci_parse($conn, 'SELECT * FROM locations');
oci_execute($s, OCI_DESCRIBE_ONLY);
for ($i = 1; $i <= oci_num_fields($stid); ++$i) {
    echo oci_field_name($stid, $i) . "<br>\n";
}

?>
```

### Notas

> **Nota**:
>
> As transações são revertidas automaticamente quando as conexões são
> fechadas ou quando o script termina, o que ocorrer primeiro. Explicitamente
> chame [oci\_commit()](function.oci-commit.md) para confirmar uma transação.
>
> Qualquer chamada para **oci\_execute()** que utilize o modo
> **`OCI_COMMIT_ON_SUCCESS`** explicitamente ou por
> padrão confirmará qualquer transação anterior não confirmada.
>
> Qualquer instrução DDL do Oracle, como `CREATE`
> ou `DROP`, confirmará automaticamente qualquer
> transação não confirmada.

> **Nota**:
>
> Como a função **oci\_execute()** geralmente
> envia a instrução para o
> banco de dados, **oci\_execute()** pode identificar alguns
> erros de sintaxe de instrução que a função
> [oci\_parse()](function.oci-parse.md) (local e mais leve) não consegue.

### Veja também

- [oci\_parse()](function.oci-parse.md) - Prepara uma instrução Oracle para execução

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
