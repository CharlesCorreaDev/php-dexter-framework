# Retorna uma string contendo o SQLSTATE retornado pela última tentativa de conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-conn-error.php

---

# db2\_conn\_error

(PECL ibm\_db2 >= 1.0.0)

db2\_conn\_error — 
Retorna uma string contendo o SQLSTATE retornado pela última tentativa de conexão

### Descrição

function **db2\_conn\_error**([?](language.types.null.md)[resource](language.types.resource.md) `$connection` = **`null`**): [string](language.types.string.md)

**db2\_conn\_error()** retorna um valor SQLSTATE representando
o motivo da falha da última tentativa de conexão com um banco de dados. Como
[db2\_connect()](function.db2-connect.md) retorna **`false`** no caso de uma falha
na tentativa de conexão, não se passa nenhum parâmetro para
**db2\_conn\_error()** para recuperar o valor SQLSTATE.

Se, no entanto, a conexão foi bem-sucedida, mas se torna inválida ao longo do tempo,
pode ser passado o parâmetro `connection` para recuperar
o valor SQLSTATE para uma conexão específica.

Para saber o que o valor SQLSTATE significa, pode ser emitido o seguinte comando
em um prompt do Processador de Linha de Comando do DB2:
**`db2 '? sqlstate-value'`**. Também pode
ser chamada a função [db2\_conn\_errormsg()](function.db2-conn-errormsg.md) para recuperar uma
mensagem de erro explícita e o valor SQLCODE associado.

### Parâmetros

`connection`
:   Um recurso de conexão associado a uma conexão que inicialmente
    foi bem-sucedida, mas que com o tempo se tornou inválida.

### Valor Retornado

Retorna o valor SQLSTATE resultante de uma tentativa de conexão com falha.
Retorna uma string vazia se não houver erro associado à última
tentativa de conexão.

### Examples

**Exemplo #1 Recuperando um valor SQLSTATE para uma tentativa de conexão com falha**

O exemplo a seguir demonstra como retornar um valor SQLSTATE
após passar deliberadamente parâmetros inválidos para
[db2\_connect()](function.db2-connect.md).

```
<?php
$conn = db2_connect('nome_invalido', 'usuario_invalido', 'senha_invalida');
if (!$conn) {
    print "Valor SQLSTATE: " . db2_conn_error();
}
?>
```

O exemplo acima produzirá:

```
Valor SQLSTATE: 08001
```

### Veja também

- [db2\_conn\_errormsg()](function.db2-conn-errormsg.md) - Retorna a última mensagem de erro de conexão e o valor SQLCODE
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
