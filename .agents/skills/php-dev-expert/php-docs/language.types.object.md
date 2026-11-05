# Objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.object.php

---

## Objetos

### Inicialização de objetos

Para criar um novo [object](language.types.object.md), utilize a instrução `new`
para instanciar uma classe:

**Exemplo #1 Construção de objeto**

```
<?php
class foo
{
    function do_foo()
    {
        echo "Fazendo foo.";
    }
}

$bar = new foo;
$bar->do_foo();
?>
```

Para uma discussão completa, veja o capítulo
[Classes e Objetos](language.oop5.md).

### Convertendo para objetos

Se um [object](language.types.object.md) é convertido para um [object](language.types.object.md), ele não é
modificado. Se um valor de qualquer outro tipo é convertido para um
[object](language.types.object.md), uma nova instância da classe interna [stdClass](class.stdclass.md)
é criada. Se o valor for **`null`**, a nova instância será vazia.
Um [array](language.types.array.md) é convertido para um [object](language.types.object.md) com as propriedades
nomeadas pelas chaves e com seus valores correspondentes.
Antes do PHP 7.1.0, chaves numéricas ficavam inacessíveis a menos que fossem iteradas.

**Exemplo #2 Convertendo para um objeto**

```
<?php
$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'})); // exibe 'bool(true)'

// Descontinuado a partir do PHP 8.1
var_dump(key($obj)); // exibe 'string(1) "1"'
?>
```

Para qualquer outro valor, uma propriedade chamada
`scalar` conterá o valor.

**Exemplo #3 Conversão com `(object)`**

```
<?php
$obj = (object) 'ciao';
echo $obj->scalar;  // exibe 'ciao'
?>
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
