# Retorna o número de campos contidos em um conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-num-fields.php

---

# db2\_num\_fields

(PECL ibm\_db2 >= 1.0.0)

db2\_num\_fields — 
Retorna o número de campos contidos em um conjunto de resultados

### Descrição

function **db2\_num\_fields**([resource](language.types.resource.md) `$stmt`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o número de campos contidos em um conjunto de resultados. Isso é mais útil
para lidar com os conjuntos de resultados retornados por consultas geradas dinamicamente, ou
para conjuntos de resultados retornados por procedimentos armazenados, onde a aplicação não pode
de outra forma saber como recuperar e usar os resultados.

### Parâmetros

`stmt`
:   Um recurso de instrução válido contendo um conjunto de resultados.

### Valor Retornado

Retorna um valor inteiro representando o número de campos no conjunto de resultados
associado ao recurso de instrução especificado. Retorna **`false`** se
o recurso de instrução não for um valor de entrada válido.

### Examples

**Exemplo #1 Recuperando o número de campos em um conjunto de resultados**

O exemplo a seguir demonstra como recuperar o número de campos
retornados em um conjunto de resultados.

```
<?php

$sql = "SELECT id, name, breed, weight FROM animals ORDER BY breed";
$stmt = db2_prepare($conn, $sql);
db2_execute($stmt, $sql);
$columns = db2_num_fields($stmt);

echo "Há {$columns} colunas no conjunto de resultados.";
?>
```

O exemplo acima produzirá:

```
Há 4 colunas no conjunto de resultados.
```

### Veja também

- [db2\_execute()](function.db2-execute.md) - Executa uma instrução SQL preparada
- [db2\_field\_display\_size()](function.db2-field-display-size.md) - Retorna o número máximo de bytes necessários para exibir uma coluna
- [db2\_field\_name()](function.db2-field-name.md) - Retorna o nome da coluna no conjunto de resultados
- [db2\_field\_num()](function.db2-field-num.md) - Retorna a posição da coluna nomeada em um conjunto de resultados
- [db2\_field\_precision()](function.db2-field-precision.md) - Retorna a precisão da coluna indicada em um conjunto de resultados
- [db2\_field\_scale()](function.db2-field-scale.md) - Retorna a escala da coluna indicada em um conjunto de resultados
- [db2\_field\_type()](function.db2-field-type.md) - Retorna o tipo de dados da coluna indicada em um conjunto de resultados
- [db2\_field\_width()](function.db2-field-width.md) - Retorna a largura do valor atual da coluna indicada em um conjunto de resultados

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
