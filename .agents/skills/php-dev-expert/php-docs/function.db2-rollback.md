# Reverte uma transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-rollback.php

---

# db2\_rollback

(PECL ibm\_db2 >= 1.0.0)

db2\_rollback — 
Reverte uma transação

### Descrição

function **db2\_rollback**([resource](language.types.resource.md) `$connection`): [bool](language.types.boolean.md)

Reverte uma transação em andamento no recurso de conexão especificado e
inicia uma nova transação. As aplicações PHP normalmente usam o modo AUTOCOMMIT
por padrão, então **db2\_rollback()** normalmente não tem efeito, a menos que
AUTOCOMMIT tenha sido desativado para o recurso de conexão.

### Parâmetros

`connection`
:   Uma variável de recurso de conexão de banco de dados válida, conforme retornada de
    [db2\_connect()](function.db2-connect.md) ou [db2\_pconnect()](function.db2-pconnect.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Revertendo uma instrução DELETE**

No exemplo a seguir, contamos o número de linhas em uma tabela, desligamos
o modo AUTOCOMMIT em uma conexão de banco de dados, excluímos todas as linhas
na tabela e retornamos a contagem de `0` para provar que as
linhas foram removidas. Em seguida, emitimos **db2\_rollback()**
e retornamos a contagem atualizada de linhas na tabela para mostrar que o número
é o mesmo de antes de emitirmos a instrução DELETE. O retorno ao
estado original da tabela demonstra que a reversão da
transação foi bem-sucedida.

```
<?php
$conn = db2_connect($database, $user, $password);

if ($conn) {
    $stmt = db2_exec($conn, "SELECT count(*) FROM animals");
    $res = db2_fetch_array( $stmt );
    echo $res[0] . "\n";

    // Desliga AUTOCOMMIT
    db2_autocommit($conn, DB2_AUTOCOMMIT_OFF);

    // Exclui todas as linhas de ANIMAIS
    db2_exec($conn, "DELETE FROM animals");

    $stmt = db2_exec($conn, "SELECT count(*) FROM animals");
    $res = db2_fetch_array( $stmt );
    echo $res[0] . "\n";

    // Reverte a instrução DELETE
    db2_rollback( $conn );

    $stmt = db2_exec( $conn, "SELECT count(*) FROM animals" );
    $res = db2_fetch_array( $stmt );
    echo $res[0] . "\n";
    db2_close($conn);
}
?>
```

O exemplo acima produzirá:

```
7
0
7
```

### Veja também

- [db2\_autocommit()](function.db2-autocommit.md) - Retorna ou define o estado AUTOCOMMIT para uma conexão de banco de dados
- [db2\_commit()](function.db2-commit.md) - Confirma uma transação

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
