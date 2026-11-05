# Comparando Objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.object-comparison.php

---

## Comparando Objetos

Ao usar o operador de comparação (`==`),
as variáveis dos objetos são comparadas de maneira simples, nominalmente: Duas instâncias
de objetos são iguais se possuem os mesmos atributos e valores (valores são comparados com `==`),
e são instâncias da mesma classe.

Ao usar o operador de identidade (`===`),
as variáveis dos objetos serão idênticas, se e somente se, referirem a mesma
instância da mesma classe.

Um exemplo evidenciará essas regras.

**Exemplo #1 Exemplo de comparação de objetos**

```
<?php
function bool2str($bool)
{
    if ($bool === false) {
        return 'FALSO';
    } else {
        return 'VERDADEIRO';
    }
}

function compareObjects(&$o1, &$o2)
{
    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . "\n";
    echo 'o1 != o2 : ' . bool2str($o1 != $o2) . "\n";
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . "\n";
    echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . "\n";
}

class Flag
{
    public $flag;

    function __construct($flag = true) {
        $this->flag = $flag;
    }
}

class OtherFlag
{
    public $flag;

    function __construct($flag = true) {
        $this->flag = $flag;
    }
}

$o = new Flag();
$p = new Flag();
$q = $o;
$r = new OtherFlag();

echo "Duas instâncias da mesma classe\n";
compareObjects($o, $p);

echo "\nDuas referências para a mesma instância\n";
compareObjects($o, $q);

echo "\nInstâncias de duas classes diferentes\n";
compareObjects($o, $r);
?>
```

O exemplo acima produzirá:

```
Duas instâncias da mesma classe
o1 == o2 : VERDADEIRO
o1 != o2 : FALSO
o1 === o2 : FALSO
o1 !== o2 : VERDADEIRO

Duas referências para a mesma instância
o1 == o2 : VERDADEIRO
o1 != o2 : FALSO
o1 === o2 : VERDADEIRO
o1 !== o2 : FALSO

Instâncias de duas classes diferentes
o1 == o2 : FALSO
o1 != o2 : VERDADEIRO
o1 === o2 : FALSO
o1 !== o2 : VERDADEIRO
```

> **Nota**:
>
> Extensões podem definir suas próprias regras para comparação de objetos
> (`==`).

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
