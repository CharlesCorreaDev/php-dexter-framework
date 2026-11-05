# Retorna a última mensagem de erro de conexão e o valor SQLCODE

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-conn-errormsg.php

---

# db2\_conn\_errormsg

(PECL ibm\_db2 >= 1.0.0)

db2\_conn\_errormsg — 
Retorna a última mensagem de erro de conexão e o valor SQLCODE

### Descrição

function **db2\_conn\_errormsg**([?](language.types.null.md)[resource](language.types.resource.md) `$connection` = **`null`**): [string](language.types.string.md)

**db2\_conn\_errormsg()** retorna uma mensagem de erro e um valor SQLCODE
representando o motivo da falha da última tentativa de conexão com o banco de dados.
Como [db2\_connect()](function.db2-connect.md) retorna **`false`** no caso de uma falha
na tentativa de conexão, não deve ser passado nenhum parâmetro para
**db2\_conn\_errormsg()** para recuperar a mensagem de erro
associada e o valor SQLCODE.

Se, no entanto, a conexão foi bem-sucedida, mas se torna inválida ao longo do tempo,
pode ser passado o parâmetro `connection` para recuperar
a mensagem de erro associada e o valor SQLCODE para uma conexão específica.

### Parâmetros

`connection`
:   Um recurso de conexão associado a uma conexão que inicialmente
    foi bem-sucedida, mas que com o tempo se tornou inválida.

### Valor Retornado

Retorna uma string contendo a mensagem de erro e o valor SQLCODE resultante
de uma tentativa de conexão com falha. Se não houver erro associado à última
tentativa de conexão, **db2\_conn\_errormsg()** retornará uma string
vazia.

### Examples

**Exemplo #1 Recuperando a mensagem de erro retornada por uma tentativa de conexão com falha**

O exemplo a seguir demonstra como retornar uma mensagem de erro e
valor SQLCODE após passar deliberadamente parâmetros inválidos para
[db2\_connect()](function.db2-connect.md).

```
<?php
$conn = db2_connect('nome_invalido', 'usuario_invalido', 'senha_invalida');
if (!$conn) {
    print db2_conn_errormsg();
}
?>
```

O exemplo acima produzirá:

```
[IBM][CLI Driver] SQL1013N  The database alias name
or database name "NOME_INVALIDO" could not be found.  SQLSTATE=42705
 SQLCODE=-1013
```

### Veja também

- [db2\_conn\_error()](function.db2-conn-error.md) - Retorna uma string contendo o SQLSTATE retornado pela última tentativa de conexão
- [db2\_connect()](function.db2-connect.md) - Retorna uma conexão com um banco de dados
- [db2\_stmt\_error()](function.db2-stmt-error.md) - Retorna uma string contendo o SQLSTATE retornado por uma instrução SQL
- [db2\_stmt\_errormsg()](function.db2-stmt-errormsg.md) - Retorna uma string contendo a última mensagem de erro da instrução SQL

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
