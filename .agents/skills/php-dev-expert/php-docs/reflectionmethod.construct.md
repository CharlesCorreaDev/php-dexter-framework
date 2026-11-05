# Constrói um ReflectionMethod

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.construct.php

---

# ReflectionMethod::\_\_construct

(PHP 5, PHP 7, PHP 8)

ReflectionMethod::\_\_construct — Constrói um ReflectionMethod

### Descrição

public function **ReflectionMethod::\_\_construct**([object](language.types.object.md)|[string](language.types.string.md) `$objectOrMethod`, [string](language.types.string.md) `$method`)

Assinatura alternativa (não suportada com argumentos nomeados):

public function **ReflectionMethod::\_\_construct**([string](language.types.string.md) `$classMethod`)

**Aviso**

A assinatura alternativa foi descontinuada a partir do PHP 8.4.0,
use [ReflectionMethod::createFromMethodName()](reflectionmethod.createfrommethodname.md)
em seu lugar.

Constrói um novo [ReflectionMethod](class.reflectionmethod.md).

### Parâmetros

`objectOrMethod`
:   Nome da classe ou objeto (instância da classe) que contém o método.

`method`
:   Nome do método.

`classMethod`
:   Nome da classe e nome do método delimitados por `::`.

### Erros/Exceções

Um [ReflectionException](class.reflectionexception.md) será lançado se o método fornecido não existir.

### Examples

**Exemplo #1 Exemplo de **ReflectionMethod::\_\_construct()****

```
<?php
class Counter
{
    private static $c = 0;

    /**
     * Contador de incremento
     *
     * @final
     * @static
     * @access  public
     * @return  int
     */
    final public static function increment()
    {
        return ++self::$c;
    }
}

// Cria uma instância da classe ReflectionMethod
$method = new ReflectionMethod('Counter', 'increment');

// Exibe informações básicas
printf(
    "===> O método %s%s%s%s%s%s%s '%s' (que é %s)\n" .
    "     declarado em %s\n" .
    "     linhas %d a %d\n" .
    "     tem os modificadores %d[%s]\n",
        $method->isInternal() ? 'internal' : 'user-defined',
        $method->isAbstract() ? ' abstract' : '',
        $method->isFinal() ? ' final' : '',
        $method->isPublic() ? ' public' : '',
        $method->isPrivate() ? ' private' : '',
        $method->isProtected() ? ' protected' : '',
        $method->isStatic() ? ' static' : '',
        $method->getName(),
        $method->isConstructor() ? 'o construtor' : 'um método normal',
        $method->getFileName(),
        $method->getStartLine(),
        $method->getEndline(),
        $method->getModifiers(),
        implode(' ', Reflection::getModifierNames($method->getModifiers()))
);

// Exibe comentário da documentação
printf("---> Documentação:\n %s\n", var_export($method->getDocComment(), true));

// Exibe variáveis estáticas se existirem
if ($statics= $method->getStaticVariables()) {
    printf("---> Variáveis estáticas: %s\n", var_export($statics, true));
}

// Invoca o método
printf("---> A chamada resulta em: ");
var_dump($method->invoke(NULL));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
===> O método user-defined final public static 'increment' (que é um método normal)
     declarado em in /Users/philip/cvs/phpdoc/test.php
     linhas 14 a 17
     tem os modificadores 261[final public static]
---> Documentação:
 '/**
     * Contador de incremento
     *
     * @final
     * @static
     * @access  public
     * @return  int
     */'
---> A chamada resulta em: int(1)
```

### Veja também

- [ReflectionMethod::export()](reflectionmethod.export.md) - Exporta um método de reflexão
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
