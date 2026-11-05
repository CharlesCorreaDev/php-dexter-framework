# Inicializa um novo descritor LOB ou FILE vazio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-new-descriptor.php

---

# oci\_new\_descriptor

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_new\_descriptor — Inicializa um novo descritor LOB ou FILE vazio

### Descrição

function **oci\_new\_descriptor**([resource](language.types.resource.md) `$connection`, [int](language.types.integer.md) `$type` = **`OCI_DTYPE_LOB`**): [?](language.types.null.md)[OCILob](class.ocilob.md)

Aloca recursos para conter descritor ou localizador LOB.

### Parâmetros

`connection`
:   Um identificador de conexão Oracle, retornado por
    [oci\_connect()](function.oci-connect.md) ou [oci\_pconnect()](function.oci-pconnect.md).

`type`
:   Os valores válidos para `type` são:
    **`OCI_DTYPE_FILE`**, **`OCI_DTYPE_LOB`** e
    **`OCI_DTYPE_ROWID`**.

### Valor Retornado

Retorna um novo descritor LOB ou FILE em caso de sucesso, ou **`null`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **oci\_new\_descriptor()****

```
<?php
/* Este script foi projetado para ser chamado a partir de um formulário HTML.
 * Ele espera que $user, $password, $table, $where e $commitsize
 * sejam passados a partir ​​do formulário. O script então exclui
 * as linhas selecionadas usando o ROWID e realiza a confirmação após cada
 * conjunto de linhas $commitsize. (Use com cuidado, não há reversão)
 */
$conn = oci_connect($user, $password);
$stmt = oci_parse($conn, "select rowid from $table $where");
$rowid = oci_new_descriptor($conn, OCI_D_ROWID);
oci_define_by_name($stmt, "ROWID", $rowid);
oci_execute($stmt);
while (oci_fetch($stmt)) {
    $nrows = oci_num_rows($stmt);
    $delete = oci_parse($conn, "delete from $table where ROWID = :rid");
    oci_bind_by_name($delete, ":rid", $rowid, -1, OCI_B_ROWID);
    oci_execute($delete);
    echo "$nrows\n";
    if (($nrows % $commitsize) == 0) {
        oci_commit($conn);
    }
}
$nrows = oci_num_rows($stmt);
echo "$nrows excluídas...\n";
oci_free_statement($stmt);
oci_close($conn);
?>
```

```
<?php
    /* Este script demonstra o upload de arquivos para colunas LOB
     * O campo de formulário usado neste exemplo se parece com este:
     * <form action="upload.php" method="post" enctype="multipart/form-data">
     * <input type="file" name="lob_upload" />
     * ...
     */
  if (!isset($lob_upload) || $lob_upload == 'none'){
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
Upload file: <input type="file" name="lob_upload" /><br />
<input type="submit" value="Upload" /> - <input type="reset" value="Reset" />
</form>
<?php
  } else {

     // $lob_upload contém o nome do arquivo temporário carregado

     // veja também a seção de recursos sobre upload de arquivos,
     // se for necessário usar uploads seguros

     $conn = oci_connect($user, $password);
     $lob = oci_new_descriptor($conn, OCI_D_LOB);
     $stmt = oci_parse($conn, "insert into $table (id, the_blob)
               values(my_seq.NEXTVAL, EMPTY_BLOB()) returning the_blob into :the_blob");
     oci_bind_by_name($stmt, ':the_blob', $lob, -1, OCI_B_BLOB);
     oci_execute($stmt, OCI_DEFAULT);
     if ($lob->savefile($lob_upload)){
        oci_commit($conn);
        echo "Blob enviado com sucesso\n";
     }else{
        echo "Não foi possível enviar o Blob\n";
     }
     $lob->free();
     oci_free_statement($stmt);
     oci_close($conn);
  }
?>
```

**Exemplo #2 Exemplo de **oci\_new\_descriptor()****

```
<?php
/* Chamando procedimentos armazenados PL/SQL que contêm clobs como parâmetros
 * de entrada.
 * Exemplo de assinatura de procedimento armazenado PL/SQL:
 *
 * PROCEDURE save_data
 *   Nome do Argumento              Tipo                    In/Out Padrão?
 *   ------------------------------ ----------------------- ------ --------
 *   KEY                            NUMBER(38)              IN
 *   DATA                           CLOB                    IN
 *
 */

$conn = oci_connect($user, $password);
$stmt = oci_parse($conn, "begin save_data(:key, :data); end;");
$clob = oci_new_descriptor($conn, OCI_D_LOB);
oci_bind_by_name($stmt, ':key', $key);
oci_bind_by_name($stmt, ':data', $clob, -1, OCI_B_CLOB);
$clob->write($data);
oci_execute($stmt, OCI_DEFAULT);
oci_commit($conn);
$clob->free();
oci_free_statement($stmt);
?>
```

### Veja também

- [oci\_bind\_by\_name()](function.oci-bind-by-name.md) - Vincula uma variável PHP a um marcador Oracle

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
