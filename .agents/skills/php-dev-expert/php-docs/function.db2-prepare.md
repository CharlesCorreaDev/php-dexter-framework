# Prepara uma instrução SQL para ser executada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-prepare.php

---

# db2\_prepare

(PECL ibm\_db2 >= 1.0.0)

db2\_prepare — 
Prepara uma instrução SQL para ser executada

### Descrição

function **db2\_prepare**([resource](language.types.resource.md) `$connection`, [string](language.types.string.md) `$statement`, [array](language.types.array.md) `$options` = []): [resource](language.types.resource.md)|[false](language.types.singleton.md)

**db2\_prepare()** cria uma instrução SQL preparada que pode
incluir 0 ou mais marcadores de parâmetros (caracteres `?`)
representando parâmetros para entrada, saída ou entrada/saída. Pode-se passar
parâmetros para a instrução preparada usando
[db2\_bind\_param()](function.db2-bind-param.md), ou apenas para valores de entrada, como um array
passado para [db2\_execute()](function.db2-execute.md).

Existem três vantagens principais em usar instruções preparadas em uma
aplicação:

- *Desempenho*: quando uma instrução é preparada, o
  servidor de banco de dados cria um plano de acesso otimizado para recuperar dados com
  essa instrução. Subsequentemente, emitir a instrução preparada com
  [db2\_execute()](function.db2-execute.md) permite que as instruções reutilizem esse
  plano de acesso e evita a sobrecarga de criar dinamicamente um novo plano de acesso
  para cada instrução emitida.
- *Segurança*: quando uma instrução é preparada, podem ser
  incluídos marcadores de parâmetros para valores de entrada. Quando uma
  instrução preparada é executada com valores de entrada para marcadores, o servidor de banco de dados verifica
  cada valor de entrada para garantir que o tipo corresponda à definição da coluna ou
  definição do parâmetro.
- *Funcionalidade avançada*: Os marcadores de parâmetros não apenas
  permitem que sejam passados valores de entrada para instruções SQL preparadas, eles também
  permitem que sejam recuperados parâmetros OUT e INOUT de procedimentos armazenados
  usando [db2\_bind\_param()](function.db2-bind-param.md).

### Parâmetros

`connection`
:   Uma variável de recurso de conexão de banco de dados válida, conforme retornada de
    [db2\_connect()](function.db2-connect.md) ou [db2\_pconnect()](function.db2-pconnect.md).

`statement`
:   Uma instrução SQL, contendo opcionalmente um ou mais marcadores de parâmetros.

`options`
:   Um array associativo contendo opções de instrução. Você pode usar este
    parâmetro para solicitar um cursor rolável em servidores de banco de dados que
    suportam esta funcionalidade.

    Para uma descrição das opções de instrução válidas, consulte
    [db2\_set\_option()](function.db2-set-option.md).

### Valor Retornado

Retorna um recurso de instrução se a instrução SQL foi analisada com sucesso e
preparada pelo servidor de banco de dados. Retorna **`false`** se o servidor de banco de dados
retornou um erro. Pode-se determinar qual erro foi retornado chamando
[db2\_stmt\_error()](function.db2-stmt-error.md) ou [db2\_stmt\_errormsg()](function.db2-stmt-errormsg.md).

### Examples

**Exemplo #1 Preparando e executando uma instrução SQL com marcadores de parâmetros**

O exemplo a seguir prepara uma instrução INSERT que aceita quatro
marcadores de parâmetros e, em seguida, itera sobre um array de arrays contendo os
valores de entrada a serem passados ​​para [db2\_execute()](function.db2-execute.md).

```
<?php
$animals = array(
    array(0, 'cat', 'Pook', 3.2),
    array(1, 'dog', 'Peaches', 12.3),
    array(2, 'horse', 'Smarty', 350.0),
);

$insert = 'INSERT INTO animals (id, breed, name, weight)
    VALUES (?, ?, ?, ?)';
$stmt = db2_prepare($conn, $insert);
if ($stmt) {
    foreach ($animals as $animal) {
        $result = db2_execute($stmt, $animal);
    }
}
?>
```

### Veja também

- [db2\_bind\_param()](function.db2-bind-param.md) - Vincula uma variável PHP a um parâmetro de instrução SQL
- [db2\_execute()](function.db2-execute.md) - Executa uma instrução SQL preparada
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
