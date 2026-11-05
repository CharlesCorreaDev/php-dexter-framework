# Retorna uma string contendo o SQLSTATE retornado por uma instrução SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-stmt-error.php

---

# db2\_stmt\_error

(PECL ibm\_db2 >= 1.0.0)

db2\_stmt\_error — 
Retorna uma string contendo o SQLSTATE retornado por uma instrução SQL

### Descrição

function **db2\_stmt\_error**([?](language.types.null.md)[resource](language.types.resource.md) `$stmt` = **`null`**): [string](language.types.string.md)

Retorna uma string contendo o valor SQLSTATE retornado por uma instrução SQL.

Se não for passado um recurso de instrução como um argumento para
**db2\_stmt\_error()**, o driver retornará o valor SQLSTATE
associado à última tentativa de retornar um recurso de instrução, por
exemplo, de [db2\_prepare()](function.db2-prepare.md) ou
[db2\_exec()](function.db2-exec.md).

Para saber o que o valor SQLSTATE significa, pode ser emitido o seguinte comando
em um prompt do Processador de Linha de Comando do DB2:
**`db2 '? sqlstate-value'`**. Pode
também ser chamada a função [db2\_stmt\_errormsg()](function.db2-stmt-errormsg.md) para recuperar uma
mensagem de erro explícita e o valor SQLCODE associado.

### Parâmetros

`stmt`
:   Um recurso de instrução válido.

### Valor Retornado

Retorna uma string contendo um valor SQLSTATE.

### Veja também

- [db2\_conn\_error()](function.db2-conn-error.md) - Retorna uma string contendo o SQLSTATE retornado pela última tentativa de conexão
- [db2\_conn\_errormsg()](function.db2-conn-errormsg.md) - Retorna a última mensagem de erro de conexão e o valor SQLCODE
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
