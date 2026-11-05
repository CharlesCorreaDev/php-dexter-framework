# Mostra ou retorna uma representação string analisável de uma variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.var-export.php

---

# var\_export

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

var\_export — Mostra ou retorna uma representação string analisável de uma variável

### Descrição

function **var\_export**([mixed](language.types.mixed.md) `$value`, [bool](language.types.boolean.md) `$return` = **`false`**): [?](language.types.null.md)[string](language.types.string.md)

**var\_export()** obtém informação estruturada sobre a
variável informada. Ela é similar a [var\_dump()](function.var-dump.md)
com uma exceção: a representação retornada é um código PHP válido.

### Parâmetros

`value`
:   A variável a ser exportada.

`return`
:   Se usado e definido para **`true`**, **var\_export()** irá retornar
    a representação da variável ao invés de exibí-la.

### Valor Retornado

Retorna a representação da variável quando o parâmetro `return`
é usado e avaliado para **`true`**. Caso contrário, esta função
retornará **`null`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | Nomes de classe exportados agora são completamente qualificadas; anteriormente, a barra invertida no início era omitida. |
| 7.3.0 | Agora exporta objetos [stdClass](class.stdclass.md) como um array convertido para um objeto (`(object) array( ... )`), ao invés de usar o método inexistente **stdClass::\_\_setState()**. O efeito prático é que agora [stdClass](class.stdclass.md) é exportável e o código resultante funcionará até mesmo em versões anteriores do PHP. |

### Examples

**Exemplo #1 Exemplos de **var\_export()****

```
<?php
$a = array (1, 2, array ("a", "b", "c"));
var_export($a);
?>
```

O exemplo acima produzirá:

```
array (
  0 => 1,
  1 => 2,
  2 =>
  array (
    0 => 'a',
    1 => 'b',
    2 => 'c',
  ),
)
```

```
<?php

$b = 3.1;
$v = var_export($b, true);
echo $v;

?>
```

O exemplo acima produzirá:

```
3.1
```

**Exemplo #2 Exportando stdClass (a partir do PHP 7.3.0)**

```
<?php
$person = new stdClass;
$person->name = 'ElePHPant ElePHPantsdotter';
$person->website = 'https://php.net/elephpant.php';

var_export($person);
```

O exemplo acima produzirá:

```
(object) array(
   'name' => 'ElePHPant ElePHPantsdotter',
   'website' => 'https://php.net/elephpant.php',
)
```

**Exemplo #3 Exportando classes**

```
<?php
class A { public $var; }
$a = new A;
$a->var = 5;
var_export($a);
?>
```

O exemplo acima produzirá:

```
\A::__set_state(array(
   'var' => 5,
))
```

**Exemplo #4 Usando [\_\_set\_state()](language.oop5.magic.md#object.set-state)**

```
<?php
class A
{
    public $var1;
    public $var2;

    public static function __set_state($an_array)
    {
        $obj = new A;
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];
        return $obj;
    }
}

$a = new A;
$a->var1 = 5;
$a->var2 = 'foo';

eval('$b = ' . var_export($a, true) . ';'); // $b = A::__set_state(array(
                                            //    'var1' => 5,
                                            //    'var2' => 'foo',
                                            // ));
var_dump($b);
?>
```

O exemplo acima produzirá:

```
object(A)#2 (2) {
  ["var1"]=>
  int(5)
  ["var2"]=>
  string(3) "foo"
}
```

### Notas

> **Nota**:
>
> Variáveis do tipo [resource](language.types.resource.md) não podem ser exportadas por esta
> função.

> **Nota**:
>
> **var\_export()** não lida com referência circular já
> que seria praticamente impossível gerar código PHP analisável para isto.
> Se for desejado fazer algo com a representação completa de um array
> ou objeto, use [serialize()](function.serialize.md).

**Aviso**

Antes do PHP 8.2.0, quando **var\_export()** exporta objetos,
a barra inicial no início não é incluída no nome de classes com namespace para máxima compatibilidade.

> **Nota**:
>
> Para ser possível avaliar o código PHP gerado por **var\_export()**,
> todos os objetos processados devem implementar o método mágico [\_\_set\_state](language.oop5.magic.md#object.set-state). A única exceção é
> [stdClass](class.stdclass.md), que é exportada usando um array convertido para
> um objeto.

### Veja também

- [print\_r()](function.print-r.md) - Exibe informação legível sobre uma variável
- [serialize()](function.serialize.md) - Gera uma representação armazenável de um valor
- [var\_dump()](function.var-dump.md) - Despeja na saída informações sobre uma variável

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
