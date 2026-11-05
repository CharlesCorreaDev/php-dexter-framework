# Reverte a transação pendente do banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-rollback.php

---

# oci\_rollback

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_rollback — Reverte a transação pendente do banco de dados

### Descrição

function **oci\_rollback**([resource](language.types.resource.md) `$connection`): [bool](language.types.boolean.md)

Reverte todas as alterações não confirmadas para a conexão
do Oracle definida em `connection` e encerra a transação.
Libera todos os bloqueios mantidos. Todos os `SAVEPOINTS` do Oracle
são apagados.

Uma transação começa quando a primeira instrução SQL que altera os dados
é executada com [oci\_execute()](function.oci-execute.md) usando
a opção **`OCI_NO_AUTO_COMMIT`**. Outras alterações nos dados
feitas por outras instruções tornam-se parte da mesma
transação. As alterações nos dados feitas em uma transação são temporárias
até que a transação seja confirmada ou revertida. Outros usuários
do banco de dados não verão as alterações até que sejam confirmadas.

Ao inserir ou atualizar dados, é recomendado o uso de transações
para consistência de dados relacionais e por questões de desempenho.

### Parâmetros

`connection`
:   Um identificador de conexão Oracle, retornado por
    [oci\_connect()](function.oci-connect.md), [oci\_pconnect()](function.oci-pconnect.md)
    ou [oci\_new\_connect()](function.oci-new-connect.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **oci\_rollback()****

```
<?php

// Insere em várias tabelas, revertendo as alterações se ocorrer um erro

$conn = oci_connect('hr', 'welcome', 'localhost/XE');

$stid = oci_parse($conn, "INSERT INTO mysalary (id, name) VALUES (1, 'Chris')");

// O sinalizador OCI_NO_AUTO_COMMIT informa ao Oracle para não confirmar o INSERT imediatamente
$r = oci_execute($stid, OCI_NO_AUTO_COMMIT);
if (!$r) {
    $e = oci_error($stid);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$stid = oci_parse($conn, 'INSERT INTO myschedule (startday) VALUES (12)');
$r = oci_execute($stid, OCI_NO_AUTO_COMMIT);
if (!$r) {
    $e = oci_error($stid);
    oci_rollback($conn);  // reverte alterações em ambas as tabelas
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

// Confirma as alterações em ambas as tabelas
$r = oci_commit($conn);
if (!r) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

?>
```

**Exemplo #2 Exemplo de reversão para um `SAVEPOINT`**

```
<?php
$stid = oci_parse($conn, 'UPDATE mytab SET id = 1111');
oci_execute($stid, OCI_NO_AUTO_COMMIT);

// Cria o ponto de salvamento
$stid = oci_parse($conn, 'SAVEPOINT mysavepoint');
oci_execute($stid, OCI_NO_AUTO_COMMIT);

$stid = oci_parse($conn, 'UPDATE mytab SET id = 2222');
oci_execute($stid, OCI_NO_AUTO_COMMIT);

// Usa uma instrução SQL explícita para retornar ao ponto de salvamento
$stid = oci_parse($conn, 'ROLLBACK TO SAVEPOINT mysavepoint');
oci_execute($stid, OCI_NO_AUTO_COMMIT);

oci_commit($conn);  // mytab agora tem o ID de 1111
?>
```

### Notas

> **Nota**:
>
> As transações são revertidas automaticamente quando a
> conexão é fechada ou quando o script termina, o que ocorrer primeiro. Deve ser
> chamada explicitamente a função [oci\_commit()](function.oci-commit.md) para confirmar
> a transação.
>
> Qualquer chamada a [oci\_execute()](function.oci-execute.md) que utilize o modo
> **`OCI_COMMIT_ON_SUCCESS`** explicitamente ou por
> padrão confirmará qualquer transação anterior não confirmada.
>
> Qualquer instrução DDL do Oracle, como `CREATE`
> ou `DROP`, confirmará automaticamente qualquer
> transação não confirmada.

### Veja também

- [oci\_commit()](function.oci-commit.md) - Confirma a transação de banco de dados pendente
- [oci\_execute()](function.oci-execute.md) - Executa uma instrução

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
