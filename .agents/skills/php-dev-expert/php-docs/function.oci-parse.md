# Prepara uma instrução Oracle para execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-parse.php

---

# oci\_parse

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_parse — Prepara uma instrução Oracle para execução

### Descrição

function **oci\_parse**([resource](language.types.resource.md) `$connection`, [string](language.types.string.md) `$sql`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Prepara `sql` usando
`connection` e retorna o identificador da instrução,
que pode ser usado com [oci\_bind\_by\_name()](function.oci-bind-by-name.md),
[oci\_execute()](function.oci-execute.md) e outras funções.

Identificadores de instrução podem ser liberados
com [oci\_free\_statement()](function.oci-free-statement.md) ou definindo a
variável como **`null`**.

### Parâmetros

`connection`
:   Um identificador de conexão Oracle, retornado por
    [oci\_connect()](function.oci-connect.md), [oci\_pconnect()](function.oci-pconnect.md) ou [oci\_new\_connect()](function.oci-new-connect.md).

`sql`
:   A instrução SQL ou PL/SQL.

    Instruções SQL *não* devem terminar com um
    ponto e vírgula (";"). Instruções PL/SQL
    *devem* terminar com um ponto e vírgula
    (";").

### Valor Retornado

Retorna um identificador de instrução em caso de sucesso, ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **oci\_parse()** para instruções SQL**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');

// Analisa a instrução. Observe que não há ponto e vírgula final na instrução SQL
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

**Exemplo #2 Exemplo de **oci\_parse()** para instruções PL/SQL**

```
<?php

/*
  Antes de executar o programa PHP, crie um procedimento armazenado no
  SQL*Plus ou SQL Developer:

  CREATE OR REPLACE PROCEDURE myproc(p1 IN NUMBER, p2 OUT NUMBER) AS
  BEGIN
      p2 := p1 * 2;
  END;

*/

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$p1 = 8;

// Ao analisar programas PL/SQL, deve haver um ponto e vírgula final na string
$stid = oci_parse($conn, 'begin myproc(:p1, :p2); end;');
oci_bind_by_name($stid, ':p1', $p1);
oci_bind_by_name($stid, ':p2', $p2, 40);

oci_execute($stid);

print "$p2\n";   // exibe 16

oci_free_statement($stid);
oci_close($conn);

?>
```

### Notas

> **Nota**:
>
> Esta função *não* valida
> o `sql`. A única forma de descobrir se
> `sql` é uma instrução SQL ou PL/SQL válida
> é executando-a.

### Veja também

- [oci\_execute()](function.oci-execute.md) - Executa uma instrução
- [oci\_free\_statement()](function.oci-free-statement.md) - Libera todos os recursos associados à instrução ou cursor

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
