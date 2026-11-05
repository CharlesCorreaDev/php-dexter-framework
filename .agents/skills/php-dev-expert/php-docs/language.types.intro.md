# Introdução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.intro.php

---

## Introdução

Cada expressão no PHP tem um dos seguintes
tipos ou valores internos:

- [null](language.types.null.md)
- [bool](language.types.boolean.md)
- [int](language.types.integer.md)
- [float](language.types.float.md) (número de ponto flutuante)
- [string](language.types.string.md)
- [array](language.types.array.md)
- [object](language.types.object.md)
- [callable](language.types.callable.md)
- [resource](language.types.resource.md)

O PHP é uma linguagem com tipagem dinâmica, o que significa que por padrão não
existe a necessidade de especificar o tipo de uma variável, já que isso será
determinado em tempo de execução. Entretanto, é possível restringir estaticamente os tipos
através do uso de
[declarações de tipo](language.types.declarations.md).
Os diferentes tipos suportados pelo PHP podem ser encontrados na página
de [sistema de tipos](language.types.type-system.md).

Os tipos restringem quais operações podem ser realizadas nos valores.
Entretanto, se uma expressão ou variável for utilizada numa operação que
o tipo não suporte, o PHP tentará
[transformar o valor](language.types.type-juggling.md)
em um tipo que suporte a operação.
Esse processo depende do contexto de onde o valor é utilizado.
Para mais informações, veja a seção sobre
[Transformações de tipos](language.types.type-juggling.md).

**Dica**

[A tabela de comparação de tipos](types.comparisons.md)
também pode ser útil, pelos vários exemplos de comparação de valores
demonstrados.

> **Nota**:
>
> É possível forçar a reavaliação de uma expressão para um tipo específico
> através do uso de [cast](language.types.type-juggling.md#language.types.typecasting).
> Uma variável pode ser modificada para um tipo através da função
> [settype()](function.settype.md).

Para verificar o valor e tipo de uma
[expressão](language.expressions.md),
utilize a função[var\_dump()](function.var-dump.md).
Para extrair o tipo de uma
[expressão](language.expressions.md),
utilize a função [get\_debug\_type()](function.get-debug-type.md).
Para apenas validar se uma expressão é de um certo tipo, utilize as funções
`is_type`.

**Exemplo #1 Tipos diferentes**

```
<?php
$a_bool = true;   // um valor booleano
$a_str  = "foo";  // um texto
$a_str2 = 'foo';  // um texto
$an_int = 12;     // um inteiro

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str), "\n";

// Se essa variável contiver um inteiro, aumenta o número em quatro
if (is_int($an_int)) {
    $an_int += 4;
}
var_dump($an_int);

// Se $a_bool for um texto, exibe
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>
```

Saída do exemplo acima no PHP 8:

```
bool
string
int(16)
```

> **Nota**:
>
> [get\_debug\_type()](function.get-debug-type.md) tornou-se disponível no PHP 8.0.0.
> Antes dessa versão, a função [gettype()](function.gettype.md) podia ser utilizada.
> Entretanto, a função antiga não retorna nomes bem definidos.

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
