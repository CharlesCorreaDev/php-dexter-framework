# Solicita o próximo conjunto de resultados de um procedimento armazenado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-next-result.php

---

# db2\_next\_result

(PECL ibm\_db2 >= 1.0.0)

db2\_next\_result — 
Solicita o próximo conjunto de resultados de um procedimento armazenado

### Descrição

function **db2\_next\_result**([resource](language.types.resource.md) `$stmt`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Um procedimento armazenado pode retornar zero ou mais conjuntos de resultados. Enquanto se manipula
o primeiro conjunto de resultados exatamente da mesma forma que seriam manipulado os resultados
retornados por uma instrução SELECT simples, para buscar o segundo conjunto de resultados
e os subsequentes de um procedimento armazenado, deve-se chamar a
função **db2\_next\_result()** e retornar o resultado para uma
variável PHP com nome exclusivo.

### Parâmetros

`stmt`
:   Uma instrução preparada retornada de [db2\_exec()](function.db2-exec.md) ou
    [db2\_execute()](function.db2-execute.md).

### Valor Retornado

Retorna um novo recurso de instrução contendo o próximo conjunto de resultados se o
procedimento armazenado retornou outro conjunto de resultados. Retorna **`false`** se o
procedimento armazenado não retornou outro conjunto de resultados.

### Examples

**Exemplo #1 Chamando um procedimento armazenado que retorna vários conjuntos de resultados**

No exemplo a seguir, é chamado um procedimento armazenado que retorna três
conjuntos de resultados. O primeiro conjunto de resultados é buscado diretamente do mesmo
recurso de instrução no qual a instrução CALL é invocada, enquanto o
segundo e o terceiro conjuntos de resultados são buscados de recursos de instrução
retornados de nossas chamadas para a função
**db2\_next\_result()**.

```
<?php
$conn = db2_connect($database, $user, $password);

if ($conn) {
  $stmt = db2_exec($conn, 'CALL multiResults()');

  print "Buscando o primeiro conjunto de resultados\n";
  while ($row = db2_fetch_array($stmt)) {
    var_dump($row);
  }

  print "\nBuscando o segundo conjunto de resultados\n";
  $res = db2_next_result($stmt);
  if ($res) {
    while ($row = db2_fetch_array($res)) {
      var_dump($row);
    }
  }

  print "\nBuscando o terceiro conjunto de resultados\n";
  $res2 = db2_next_result($stmt);
  if ($res2) {
    while ($row = db2_fetch_array($res2)) {
      var_dump($row);
    }
  }

  db2_close($conn);
}
?>
```

O exemplo acima produzirá:

```
Buscando o primeiro conjunto de resultados
array(2) {
  [0]=>
  string(16) "Bubbles         "
  [1]=>
  int(3)
}
array(2) {
  [0]=>
  string(16) "Gizmo           "
  [1]=>
  int(4)
}

Buscando o segundo conjunto de resultados
array(4) {
  [0]=>
  string(16) "Sweater         "
  [1]=>
  int(6)
  [2]=>
  string(5) "llama"
  [3]=>
  string(6) "150.00"
}
array(4) {
  [0]=>
  string(16) "Smarty          "
  [1]=>
  int(2)
  [2]=>
  string(5) "horse"
  [3]=>
  string(6) "350.00"
}

Buscando o terceiro conjunto de resultados
array(1) {
  [0]=>
  string(16) "Bubbles         "
}
array(1) {
  [0]=>
  string(16) "Gizmo           "
}
```

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
