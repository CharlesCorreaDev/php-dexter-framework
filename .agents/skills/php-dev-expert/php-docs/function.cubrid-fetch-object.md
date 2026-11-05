# Busca a próxima linha e retorna-a como um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-fetch-object.php

---

# cubrid\_fetch\_object

(PECL CUBRID >= 8.3.0)

cubrid\_fetch\_object — Busca a próxima linha e retorna-a como um objeto

### Descrição

function **cubrid\_fetch\_object**(  
    [resource](language.types.resource.md) `$result`,  
    [string](language.types.string.md) `$class_name` = ?,  
    [array](language.types.array.md) `$params` = ?,  
    [int](language.types.integer.md) `$type` = ?  
): [object](language.types.object.md)

Esta função retorna um objeto com os nomes das colunas do conjunto de resultados
como propriedades. Os valores dessas propriedades são extraídos da linha
atual do resultado.

### Parâmetros

`result`
:   `result` vem de uma chamada a [cubrid\_execute()](function.cubrid-execute.md)

`class_name`
:   O nome da classe a ser instanciada. Se não for especificado, é retornado
    um objeto [stdClass](class.stdclass.md) (stdClass é a classe vazia genérica
    do PHP usada ao converter outros tipos para objetos).

`params`
:   Um [array](language.types.array.md) opcional de parâmetros a serem passados ​​ao construtor
    para objetos `class_name`.

`type`
:   O tipo só pode ser CUBRID\_LOB, este parâmetro será utilizado somente
    quando for necessário operar o objeto LOB.

### Valor Retornado

Um objeto em caso de sucesso.

**`false`**, quando não houver mais linhas; NULL em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_fetch\_object()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");
$res = cubrid_execute($conn, "SELECT * FROM code");

var_dump(cubrid_fetch_object($res));

// se for desejado operar em objeto LOB, pode-se usar cubrid_fetch_object($res, CUBRID_LOB)

class demodb_code {
    public $s_name = null;
    public $f_name = null;

    public function toString() {
        var_dump($this);
    }
}

var_dump(cubrid_fetch_object($res, "demodb_code"));

// se for desejado operar em objeto LOB, pode-se usar cubrid_fetch_object($res, "demodb_code", CUBRID_LOB)

class demodb_code_construct extends demodb_code {
    public function __construct($s, $f) {
        $this->s_name = $s;
        $this->f_name = $f;
    }
}

var_dump(cubrid_fetch_object($res, 'demodb_code_construct', array('s_name', 'f_name')));

// se for desejado operar em objeto LOB, pode-se usar cubrid_fetch_object($res, 'demodb_code_construct', array('s_name', 'f_name'), CUBRID_LOB)

var_dump(cubrid_fetch_object($res));

cubrid_close_request($res);
cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
object(stdClass)#1 (2) {
  ["s_name"]=>
  string(1) "X"
  ["f_name"]=>
  string(5) "Mixed"
}
object(demodb_code)#1 (2) {
  ["s_name"]=>
  string(1) "W"
  ["f_name"]=>
  string(5) "Woman"
}
object(demodb_code_construct)#1 (2) {
  ["s_name"]=>
  string(6) "s_name"
  ["f_name"]=>
  string(6) "f_name"
}
object(stdClass)#1 (2) {
  ["s_name"]=>
  string(1) "B"
  ["f_name"]=>
  string(6) "Bronze"
}
```

### Veja também

- [cubrid\_execute()](function.cubrid-execute.md) - Executa uma instrução preparada SQL
- [cubrid\_fetch()](function.cubrid-fetch.md) - Busca a próxima linha do conjunto de resultados
- [cubrid\_fetch\_array()](function.cubrid-fetch-array.md) - Busca uma linha de resultado como um array associativo, numérico ou ambos
- [cubrid\_fetch\_assoc()](function.cubrid-fetch-assoc.md) - Retorna o array associativo que corresponde à linha buscada
- [cubrid\_fetch\_row()](function.cubrid-fetch-row.md) - Retorna um array numérico com os valores da linha atual

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
