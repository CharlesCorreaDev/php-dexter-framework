# Objetos e Referências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.references.php

---

## Objetos e Referências

Um dos pontos fortes frequentemente mencionado da POO no PHP, é
que "objetos são passados por referência por padrão". Isto não é completamente verdade.
Esta seção retifica esse pensamento comum usando alguns exemplos.

Uma referência do PHP é um sinônimo, que permite duas variáveis diferentes
escreverem para o mesmo valor. Em PHP, uma variável objeto não contém
o próprio objeto como valor. Ela contém um identificador do objeto que
permite que os acessadores do objeto encontrem o objeto real. Quando um
objeto é enviado por argumento, retornado ou atribuído a outra variável,
as variáveis diferentes não são sinônimos: elas armazenam uma cópia do
identificador, que aponta para o mesmo objeto.

**Exemplo #1 Referências e Objetos**

```
<?php
class A {
    public $foo = 1;
}

$a = new A;
$b = $a;     // $a e $b são cópias do mesmo identificador
             // ($a) = ($b) = <id>
$b->foo = 2;
echo $a->foo."\n";

$c = new A;
$d = &$c;    // $c e $d são referências
             // ($c,$d) = <id>

$d->foo = 2;
echo $c->foo."\n";

$e = new A;

function foo($obj) {
    // ($obj) = ($e) = <id>
    $obj->foo = 2;
}

foo($e);
echo $e->foo."\n";

?>
```

O exemplo acima produzirá:

```
2
2
2
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
