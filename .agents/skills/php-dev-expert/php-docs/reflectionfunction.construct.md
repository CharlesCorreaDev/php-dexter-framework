# Constrói um objeto ReflectionFunction

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunction.construct.php

---

# ReflectionFunction::\_\_construct

(PHP 5, PHP 7, PHP 8)

ReflectionFunction::\_\_construct — Constrói um objeto ReflectionFunction

### Descrição

public function **ReflectionFunction::\_\_construct**([Closure](class.closure.md)|[string](language.types.string.md) `$function`)

Constrói um objeto [ReflectionFunction](class.reflectionfunction.md).

### Parâmetros

`function`
:   O nome da função a ser refletida ou uma [closure](functions.anonymous.md).

### Erros/Exceções

Uma [ReflectionException](class.reflectionexception.md) se o parâmetro `function`
não contém uma função válida.

### Examples

**Exemplo #1 Exemplo de **ReflectionFunction::\_\_construct()****

```
<?php
/**
 * Um contador simples
 *
 * @return    int
 */
function counter1()
{
    static $c = 0;
    return ++$c;
}

/**
 * Outro contador simples
 *
 * @return    int
 */
$counter2 = function()
{
    static $d = 0;
    return ++$d;

};

function dumpReflectionFunction($func)
{
    // Exibe informação básica
    printf(
        "\n\n===> A função do tipo %s '%s'\n".
        "     declarada em %s\n".
        "     linhas %d a %d\n",
        $func->isInternal() ? 'internal' : 'user-defined',
        $func->getName(),
        $func->getFileName(),
        $func->getStartLine(),
        $func->getEndline()
    );

    // Exibe comentário de documentação documentation comment
    printf("---> Documentação:\n %s\n", var_export($func->getDocComment(), true));

    // Exibe variáveis estáticas se existirem
    if ($statics = $func->getStaticVariables())
    {
        printf("---> Variáveis estáticas: %s\n", var_export($statics, true));
    }
}

// Cria uma instância da classe ReflectionFunction
dumpReflectionFunction(new ReflectionFunction('counter1'));
dumpReflectionFunction(new ReflectionFunction($counter2));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
===> A função do tipo user-defined 'counter1'
     declarada em Z:\reflectcounter.php
     linhas 7 a 11
---> Documentação
 '/**
 * Um contador simples
 *
 * @return    int
 */'
---> Variáveis estáticas: array (
  'c' => 0,
)

===> A função do tipo user-defined '{closure}'
     declarada em Z:\reflectcounter.php
     linhas 18 a 23
---> Documentação
 '/**
 * Outro contador simples
 *
 * @return    int
 */'
---> Static variables: array (
  'd' => 0,
)
```

### Veja também

- [ReflectionMethod::\_\_construct()](reflectionmethod.construct.md) - Constrói um ReflectionMethod
- [Construtores](language.oop5.decon.md#language.oop5.decon.constructor)

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
