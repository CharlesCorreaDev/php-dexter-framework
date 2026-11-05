# Fecha uma conexão de banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-close.php

---

# db2\_close

(PECL ibm\_db2 >= 1.0.0)

db2\_close — 
Fecha uma conexão de banco de dados

### Descrição

function **db2\_close**([resource](language.types.resource.md) `$connection`): [bool](language.types.boolean.md)

Esta função fecha uma conexão de cliente DB2 criada com
[db2\_connect()](function.db2-connect.md) e retorna os recursos
correspondentes para o servidor de banco de dados.

Se houver tentativa de fechar uma conexão de cliente DB2 persistente criada com
[db2\_pconnect()](function.db2-pconnect.md), a solicitação de fechamento será ignorada e a
conexão de cliente DB2 persistente permanecerá disponível para o próximo chamador.

### Parâmetros

`connection`
:   Especifica uma conexão de cliente DB2 ativa.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Fechando uma conexão**

O exemplo a seguir demonstra uma tentativa bem-sucedida de fechar uma
conexão com um banco de dados IBM DB2, Cloudscape ou Apache Derby.

```
<?php
$conn = db2_connect('SAMPLE', 'db2inst1', 'ibmdb2');
$rc = db2_close($conn);
if ($rc) {
    echo "A conexão foi fechada com sucesso.";
}
?>
```

O exemplo acima produzirá:

```
A conexão foi fechada com sucesso.
```

### Veja também

- [db2\_connect()](function.db2-connect.md) - Retorna uma conexão com um banco de dados
- [db2\_pclose()](function.db2-pclose.md) - Fecha uma conexão persistente a um banco de dados
- [db2\_pconnect()](function.db2-pconnect.md) - Retorna uma conexão persistente a um banco de dados

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
