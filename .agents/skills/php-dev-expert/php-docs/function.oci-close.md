# Fecha uma conexão Oracle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-close.php

---

# oci\_close

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_close — Fecha uma conexão Oracle

### Descrição

function **oci\_close**([resource](language.types.resource.md) `$connection`): [?](language.types.null.md)[bool](language.types.boolean.md)

Remove a definição da conexão `connection`. A conexão do banco de dados subjacente
é fechada se nenhum outro recurso a estiver usando e se ela
foi criada com [oci\_connect()](function.oci-connect.md)
ou [oci\_new\_connect()](function.oci-new-connect.md).

É recomendável fechar conexões que não são mais necessárias
porque isso torna os recursos do banco de dados disponíveis para outros usuários.

### Parâmetros

`connection`
:   Um identificador de conexão Oracle retornado por
    [oci\_connect()](function.oci-connect.md), [oci\_pconnect()](function.oci-pconnect.md),
    ou [oci\_new\_connect()](function.oci-new-connect.md).

### Valor Retornado

Retorna **`null`** quando [oci8.old\_oci\_close\_semantics](oci8.configuration.md#ini.oci8.old-oci-close-semantics) está habilitado,
ou **`true`** caso contrário.

### Examples

**Exemplo #1 Fechando uma conexão**

Os recursos associados a uma conexão devem ser fechados para garantir
que a conexão do banco de dados subjacente seja encerrada corretamente e os
recursos do banco de dados sejam liberados.

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * FROM departments');
$r = oci_execute($stid);
oci_fetch_all($stid, $res);
var_dump($res);

// Libera o identificador da instrução ao fechar a conexão
oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #2 As conexões de banco de dados não são fechadas até que todas as referências sejam fechadas**

A contagem de referência interna de um identificador de conexão deve ser zero
antes que a conexão subjacente ao banco de dados seja fechada.

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * FROM departments');  // isto aumenta a contagem de referência de $conn
oci_execute($stid);
oci_fetch_all($stid, $res);
var_dump($res);

oci_close($conn);

// $conn não é mais utilizável no script, mas a conexão do banco de dados
// subjacente ainda é mantida aberta até que $stid seja liberado.
var_dump($conn);  // exibe NULL

// Enquanto o PHP dorme, consultar a visualização Oracle V$SESSION em uma
// janela de terminal mostrará que o usuário do banco de dados ainda está conectado.
sleep(10);

// Quando $stid é liberado, a conexão com o banco de dados é fisicamente fechada
oci_free_statement($stid);

// Enquanto o PHP dorme, consultar a visualização Oracle V$SESSION em uma
// janela de terminal mostrará que o usuário do banco de dados foi desconectado.
sleep(10);

?>
```

**Exemplo #3 Fechando uma conexão aberta mais de uma vez**

Quando as credenciais do banco de dados são reutilizadas, ambas as conexões devem ser fechadas
antes que a conexão do banco de dados subjacente seja fechada.

```
<?php

$conn1 = oci_connect('hr', 'welcome', 'localhost/XE');

// Usar as mesmas credenciais reutiliza a mesma conexão de banco de dados subjacente
// Quaisquer alterações não confirmadas feitas em $conn1 serão visíveis em $conn2
$conn2 = oci_connect('hr', 'welcome', 'localhost/XE');

// Enquanto o PHP dorme, consultar a visualização Oracle V$SESSION em uma
// janela de terminal mostrará que apenas um usuário do banco de dados está conectado.
sleep(10);

oci_close($conn1); // não fecha a conexão do banco de dados subjacente
var_dump($conn1);  // exibe NULL porque a variável $conn1 não é mais utilizável
var_dump($conn2);  // exibe que $conn2 ainda é um recurso de conexão válido

?>
```

**Exemplo #4 As conexões são fechadas quando as variáveis ​​saem do escopo**

Quando todas as variáveis ​​que referenciam uma conexão saem do escopo e
são liberadas pelo PHP, ocorre uma reversão (se necessário) e a
conexão subjacente ao banco de dados é fechada.

```
<?php

function myfunc() {
    $conn = oci_connect('hr', 'hrpwd', 'localhost/XE');
    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }

    $stid = oci_parse($conn, 'UPDATE mytab SET id = 100');
    oci_execute($stid, OCI_NO_AUTO_COMMIT);
    return "Concluído";
}

$r = myfunc();
// Neste ponto, ocorreu uma reversão e a conexão com o banco de dados subjacente foi liberada.

print $r;  // exibe o valor de retorno da função "Concluído"

?>
```

### Notas

> **Nota**:
>
> Variáveis ​​que têm uma dependência no identificador de conexão,
> como identificadores de declaração retornados
> por [oci\_parse()](function.oci-parse.md), também devem ser liberadas antes que
> a conexão do banco de dados subjacente seja fechada.

> **Nota**:
>
> A função **oci\_close()** não fecha as
> conexões de banco de dados subjacentes criadas
> com [oci\_pconnect()](function.oci-pconnect.md).

### Veja também

- [oci\_connect()](function.oci-connect.md) - Conecta-se a um banco de dados Oracle
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
