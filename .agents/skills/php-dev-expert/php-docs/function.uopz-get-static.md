# Obtém as variáveis ​​estáticas do escopo da função ou método

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-get-static.php

---

# uopz\_get\_static

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_get\_static — Obtém as variáveis ​​estáticas do escopo da função ou método

### Descrição

function **uopz\_get\_static**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$function`): [array](language.types.array.md)

function **uopz\_get\_static**([string](language.types.string.md) `$function`): [array](language.types.array.md)

Obtém as variáveis ​​estáticas do escopo da função ou método.

### Parâmetros

`class`
:   O nome da classe.

`function`
:   O nome da função ou do método.

### Valor Retornado

Retorna um [array](language.types.array.md) associativo de nomes de variáveis ​​mapeados para seus
valores atuais em caso de sucesso, ou **`null`** se a função ou método não existir.

A partir do PHP 8.3.0, os inicializadores estáticos são computados durante o tempo de compilação,
ou, se isso não for possível, somente quando a função ou método é executado pela primeira
vez, caso em que o valor da variável estática é relatado como **`null`**
antes da primeira invocação.

### Examples

**Exemplo #1 Uso básico de **uopz\_get\_static()****

```
<?php
function foo() {
    static $bar = 'baz';
}
var_dump(uopz_get_static('foo'));
?>
```

O exemplo acima produzirá:

```
array(1) {
  ["bar"]=>
  string(3) "baz"
}
```

### Veja também

- [ReflectionFunctionAbstract::getStaticVariables()](reflectionfunctionabstract.getstaticvariables.md) - Obtém variáveis estáticas
- [uopz\_set\_static()](function.uopz-set-static.md) - Define as variáveis ​​estáticas no escopo da função ou método

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
