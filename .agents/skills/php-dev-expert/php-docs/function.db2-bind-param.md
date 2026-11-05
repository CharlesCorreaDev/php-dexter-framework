# Vincula uma variável PHP a um parâmetro de instrução SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-bind-param.php

---

# db2\_bind\_param

(PECL ibm\_db2 >= 1.0.0)

db2\_bind\_param — 
Vincula uma variável PHP a um parâmetro de instrução SQL

### Descrição

function **db2\_bind\_param**(  
    [resource](language.types.resource.md) `$stmt`,  
    [int](language.types.integer.md) `$parameter_number`,  
    [string](language.types.string.md) `$variable_name`,  
    [int](language.types.integer.md) `$parameter_type` = **`DB2_PARAM_IN`**,  
    [int](language.types.integer.md) `$data_type` = 0,  
    [int](language.types.integer.md) `$precision` = -1,  
    [int](language.types.integer.md) `$scale` = 0  
): [bool](language.types.boolean.md)

Vincula uma variável PHP a um parâmetro de instrução SQL em um recurso de instrução
retornado por [db2\_prepare()](function.db2-prepare.md). Esta função fornece mais
controle sobre o tipo de parâmetro, tipo de dados, precisão e escala para o
parâmetro do que simplesmente passar a variável como parte do array de entrada
opcional para [db2\_execute()](function.db2-execute.md).

### Parâmetros

`stmt`
:   Uma instrução preparada retornada de [db2\_prepare()](function.db2-prepare.md).

`parameter_number`
:   Especifica a posição, indexada a partir de 1, do parâmetro na instrução
    preparada.

`variable_name`
:   Uma string especificando o nome da variável PHP a ser vinculada ao
    parâmetro especificado por `parameter_number`.

`parameter_type`
:   Uma constante especificando se a variável PHP deve ser vinculada ao
    parâmetro SQL como um parâmetro de entrada (**`DB2_PARAM_IN`**),
    um parâmetro de saída (**`DB2_PARAM_OUT`**) ou como um
    parâmetro que aceita entrada e retorna saída
    (**`DB2_PARAM_INOUT`**). Para evitar sobrecarga de memória, pode-se
    também especificar **`DB2_PARAM_FILE`** para vincular a variável PHP
    ao nome de um arquivo que contém dados de objeto grande (BLOB, CLOB ou
    DBCLOB).

`data_type`
:   Uma constante especificando o tipo de dados SQL como o qual a variável PHP deverá
    ser vinculada: uma das constantes **`DB2_BINARY`**,
    **`DB2_CHAR`**, `DB2_DOUBLE` ou
    **`DB2_LONG`**.

`precision`
:   Especifica a precisão com a qual a variável deve ser vinculada ao
    banco de dados. Este parâmetro também pode ser usado para recuperar valores de saída XML
    de procedimentos armazenados. Um valor não negativo especifica o tamanho máximo
    dos dados XML que serão recuperados do banco de dados. Se este parâmetro
    não for usado, um padrão de 1 MB será assumido para recuperar o valor de saída XML
    do procedimento armazenado.

`scale`
:   Especifica a escala com a qual a variável deve ser vinculada ao
    banco de dados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Vinculando variáveis ​​PHP a uma instrução preparada**

A instrução SQL no exemplo a seguir usa dois parâmetros de entrada na
cláusula WHERE. Chamamos **db2\_bind\_param()** para vincular duas
variáveis ​​PHP aos parâmetros SQL correspondentes. Observe que as variáveis ​​PHP
não precisam ser declaradas ou atribuídas antes da chamada a
**db2\_bind\_param()**; no exemplo,
`$lower_limit` recebe um valor antes da chamada a
**db2\_bind\_param()**, mas `$upper_limit`
recebe um valor após a chamada a
**db2\_bind\_param()**. As variáveis ​​devem ser vinculadas e, para
parâmetros que aceitam entrada, devem ter qualquer valor atribuído, antes de chamar
[db2\_execute()](function.db2-execute.md).

```
<?php

$sql = 'SELECT name, breed, weight FROM animals
    WHERE weight > ? AND weight < ?';
$conn = db2_connect($database, $user, $password);
$stmt = db2_prepare($conn, $sql);

// É possível declarar a variável antes de chamar db2_bind_param()
$lower_limit = 1;

db2_bind_param($stmt, 1, "lower_limit", DB2_PARAM_IN);
db2_bind_param($stmt, 2, "upper_limit", DB2_PARAM_IN);

// Também é possível declarar a variável após chamar db2_bind_param()
$upper_limit = 15.0;

if (db2_execute($stmt)) {
    while ($row = db2_fetch_array($stmt)) {
        print "{$row[0]}, {$row[1]}, {$row[2]}\n";
    }
}
?>
```

O exemplo acima produzirá:

```
Pook, cat, 3.2
Rickety Ride, goat, 9.7
Peaches, dog, 12.3
```

**Exemplo #2 Chamando procedimentos armazenados com parâmetros IN e OUT**

O procedimento armazenado match\_animal no exemplo a seguir aceita
três parâmetros diferentes:

1. um parâmetro de entrada (IN) que aceita o nome do primeiro animal como
   entrada
2. um parâmetro de entrada-saída (INOUT) que aceita o nome do segundo
   animal como entrada e retorna a string `TRUE` se um
   animal no banco de dados corresponder a ele
3. um parâmetro de saída (OUT) que retorna a soma do peso dos
   dois animais identificados

Além disso, o procedimento armazenado retorna um conjunto de resultados consistindo de
animais listados em ordem alfabética começando no animal correspondente
ao valor de entrada do primeiro parâmetro e terminando no animal
correspondente ao valor de entrada do segundo parâmetro.

```
<?php

$sql = 'CALL match_animal(?, ?, ?)';
$conn = db2_connect($database, $user, $password);
$stmt = db2_prepare($conn, $sql);

$name = "Peaches";
$second_name = "Rickety Ride";
$weight = 0;

db2_bind_param($stmt, 1, "name", DB2_PARAM_IN);
db2_bind_param($stmt, 2, "second_name", DB2_PARAM_INOUT);
db2_bind_param($stmt, 3, "weight", DB2_PARAM_OUT);

print "Valores dos parâmetros vinculados _antes_ de CALL:\n";
print "  1: {$name} 2: {$second_name} 3: {$weight}\n\n";

if (db2_execute($stmt)) {
    print "Valores dos parâmetros vinculados _after_ CALL:\n";
    print "  1: {$name} 2: {$second_name} 3: {$weight}\n\n";

    print "Resultados:\n";
    while ($row = db2_fetch_array($stmt)) {
        print "  {$row[0]}, {$row[1]}, {$row[2]}\n";
    }
}
?>
```

O exemplo acima produzirá:

```
Valores dos parâmetros vinculados _antes_ de CALL:
  1: Peaches 2: Rickety Ride 3: 0

Valores dos parâmetros vinculados _depois_ de CALL:
  1: Peaches 2: TRUE 3: 22

Resultados:
  Peaches, dog, 12.3
  Pook, cat, 3.2
  Rickety Ride, goat, 9.7
```

**Exemplo #3 Inserindo um objeto binário grande (BLOB) diretamente de um arquivo**

Os dados para objetos grandes são normalmente armazenados em arquivos, como documentos XML
ou arquivos de áudio. Em vez de ler um arquivo inteiro em uma variável PHP
e, em seguida, vincular essa variável PHP a uma instrução SQL, é
possível evitar sobrecarga de memória vinculando o arquivo diretamente ao parâmetro de entrada
da instrução SQL. O exemplo a seguir demonstra como
vincular um arquivo diretamente a uma coluna BLOB.

```
<?php
$stmt = db2_prepare($conn, "INSERT INTO animal_pictures(picture) VALUES (?)");

$picture = "/opt/albums/spook/grooming.jpg";
$rc = db2_bind_param($stmt, 1, "picture", DB2_PARAM_FILE);
$rc = db2_execute($stmt);
?>
```

### Veja também

- [db2\_execute()](function.db2-execute.md) - Executa uma instrução SQL preparada
- [db2\_prepare()](function.db2-prepare.md) - Prepara uma instrução SQL para ser executada

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
