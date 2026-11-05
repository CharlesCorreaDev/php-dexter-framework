# Namespaces e recursos de linguagem dinâmica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.namespaces.dynamic.php

---

## Namespaces e recursos de linguagem dinâmica

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

A implementação de namespaces do PHP é influenciada por sua natureza dinâmica como linguagem
de programação. Assim, para converter código como o exemplo a seguir em código com namespace:

**Exemplo #1 Acessando elementos dinamicamente**

exemplo1.php:

```
<?php
class nomedaclasse
{
    function __construct()
    {
        echo __METHOD__,"\n";
    }
}
function nomedafuncao()
{
    echo __FUNCTION__,"\n";
}
const nomedaconstante = "global";

$a = 'nomedaclasse';
$obj = new $a; // imprime nomedaclasse::__construct
$b = 'nomedafuncao';
$b(); // imprime nomedafuncao
echo constant('nomedaconstante'), "\n"; // imprime global
```

Deve-se usar o nome totalmente qualificado (nome da classe prefixado com o namespace).
Observe que, como não há diferença entre um nome qualificado e um nome totalmente qualificado
em um nome de classe, nome de função ou nome de constante dinâmico, a barra invertida inicial não
é necessária.

**Exemplo #2 Acessando dinamicamente elementos com namespace**

```
<?php
namespace nomedonamespace;
class nomedaclasse
{
    function __construct()
    {
        echo __METHOD__,"\n";
    }
}
function nomedafuncao()
{
    echo __FUNCTION__,"\n";
}
const nomedaconstante = "comnamespace";

/* note que, ao usar aspas duplas, "\\nomedonamespace\\nomedaclasse" deve ser usado */
$a = '\nomedonamespace\nomedaclasse';
$obj = new $a; // imprime nomedonamespace\nomedaclasse::__construct
$a = 'nomedonamespace\nomedaclasse';
$obj = new $a; // também imprime nomedonamespace\nomedaclasse::__construct
$b = 'nomedonamespace\nomedafuncao';
$b(); // imprime nomedonamespace\nomedafuncao
$b = '\nomedonamespace\nomedafuncao';
$b(); // também imprime nomedonamespace\nomedafuncao
echo constant('\nomedonamespace\nomedaconstante'), "\n"; // imprime comnamespace
echo constant('nomedonamespace\nomedaconstante'), "\n"; // também imprime comnamespace
```

Certifique-se de ler a [nota sobre
escapamento de namespaces em strings](language.namespaces.faq.md#language.namespaces.faq.quote).

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
