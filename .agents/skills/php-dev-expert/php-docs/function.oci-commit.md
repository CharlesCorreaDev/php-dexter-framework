# Confirma a transação de banco de dados pendente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-commit.php

---

# oci\_commit

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_commit — Confirma a transação de banco de dados pendente

### Descrição

function **oci\_commit**([resource](language.types.resource.md) `$connection`): [bool](language.types.boolean.md)

Confirma a transação pendente para a conexção
Oracle informada em `connection`. Uma confirmação encerra a
transação atual e torna permanentes todas as alterações. Ela libera
todos os bloqueios mantidos.

Uma transação começa quando a primeira instrução SQL que altera os dados
é executada com [oci\_execute()](function.oci-execute.md) usando
o sinalizador **`OCI_NO_AUTO_COMMIT`**. Outras alterações de dados
feitas por outras instruções se tornam parte da mesma
transação. As alterações de dados feitas em uma transação são temporárias
até que a transação seja confirmada ou revertida. Outros usuários
do banco de dados não verão as alterações até que sejam confirmadas.

Ao inserir ou atualizar dados, é recomendado usar transações
para consistência de dados relacionais e por motivos de desempenho.

### Parâmetros

`connection`
:   Um identificador de conexão Oracle, retornado por
    [oci\_connect()](function.oci-connect.md), [oci\_pconnect()](function.oci-pconnect.md) ou [oci\_new\_connect()](function.oci-new-connect.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **oci\_commit()****

```
<?php

// Inserindo em várias tabelas, revertendo as alterações se ocorrer um erro

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
if (!$r) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

?>
```

### Notas

> **Nota**:
>
> As transações são automaticamente revertidas quando você fecha a
> conexão, ou quando o script termina, o que ocorrer primeiro. Você
> precisa chamar explicitamente **oci\_commit()** para confirmar
> a transação.
>
> Qualquer chamada para [oci\_execute()](function.oci-execute.md) que use o modo
> **`OCI_COMMIT_ON_SUCCESS`** explicitamente ou por
> padrão confirmará qualquer transação anterior não confirmada.
>
> Qualquer instrução Oracle DDL como `CREATE`
> ou `DROP` confirmará automaticamente qualquer
> transação não confirmada.

### Veja também

- [oci\_execute()](function.oci-execute.md) - Executa uma instrução
- [oci\_rollback()](function.oci-rollback.md) - Reverte a transação pendente do banco de dados

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
