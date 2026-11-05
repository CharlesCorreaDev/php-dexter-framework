# O que referências não são

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.references.arent.php

---

## O que referências não são

Como dito anteriormente, referências não são ponteiros. Isso significa que
a construção a seguir não funciona como se possa esperar:

```
<?php
function foo(&$var)
{
    $var =& $GLOBALS["baz"];
}

foo($bar);
```

O que acontece é que $var em
foo será ligada com
$bar pelo chamador, mas depois será
re-ligada com [$GLOBALS["baz"]](reserved.variables.globals.md). Não há como
ligar $bar no escopo chamador para outra coisa
utilizando-se o mecanismo de referência, pois $bar não está
disponível na função foo (ela é representada por
$var, mas $var somente tem
o conteúdo da variável e não a vinculação nome-valor na
[tabela de símbolos](features.gc.refcounting-basics.md) do chamador).
Pode-se utilizar [retorno por
referência](language.references.return.md) para referenciar variáveis selecionadas pela função.

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
