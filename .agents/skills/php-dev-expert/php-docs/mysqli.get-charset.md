# Retorna um objeto de conjunto de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.get-charset.php

---

# mysqli::get\_charset

# mysqli\_get\_charset

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

mysqli::get\_charset -- mysqli\_get\_charset — Retorna um objeto de conjunto de caracteres

### Descrição

Estilo orientado a objetos

public function **mysqli::get\_charset**(): [?](language.types.null.md)[object](language.types.object.md)

Estilo procedural

function **mysqli\_get\_charset**([mysqli](class.mysqli.md) `$mysql`): [?](language.types.null.md)[object](language.types.object.md)

Retorna um objeto de conjunto de caracteres fornecendo várias propriedades
do conjunto de caracteres ativo atual.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

A função retorna um objeto de conjunto de caracteres com as seguintes propriedades:

`charset`
:   Nome do conjunto de caracteres

`collation`
:   Nome do agrupamento

`dir`
:   Diretório do qual a descrição do conjunto de caracteres foi obtida ou "" para conjuntos de caracteres integrados

`min_length`
:   Comprimento mínimo de caracteres em bytes

`max_length`
:   Comprimento máximo de caracteres em bytes

`number`
:   Número interno do conjunto de caracteres

`state`
:   A partir do PHP 8.2.0, é sempre `1`

### Examples

**Exemplo #1 Exemplo de **mysqli::get\_charset()****

Estilo orientado a objetos

```
<?php
  $db = mysqli_init();
  $db->real_connect("localhost","root","","test");
  $db->set_charset('latin1');
  var_dump($db->get_charset());
?>
```

Estilo procedural

```
<?php
  $db = mysqli_init();
  mysqli_real_connect($db, "localhost","root","","test");
  mysqli_set_charset($db, 'latin1');
  var_dump(mysqli_get_charset($db));
?>
```

Os exemplos acima produzirão:

```
object(stdClass)#2 (7) {
  ["charset"]=>
  string(6) "latin1"
  ["collation"]=>
  string(17) "latin1_swedish_ci"
  ["dir"]=>
  string(0) ""
  ["min_length"]=>
  int(1)
  ["max_length"]=>
  int(1)
  ["number"]=>
  int(8)
  ["state"]=>
  int(1)
}
```

### Veja também

- [mysqli\_character\_set\_name()](mysqli.character-set-name.md) - Retorna o conjunto de caracteres atual da conexão com o banco de dados
- [mysqli\_set\_charset()](mysqli.set-charset.md) - Define o conjunto de caracteres do cliente

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
