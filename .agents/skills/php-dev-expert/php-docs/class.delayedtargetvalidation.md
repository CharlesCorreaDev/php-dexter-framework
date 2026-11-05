# O atributo DelayedTargetValidation

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.delayedtargetvalidation.php

---

# O atributo DelayedTargetValidation

(PHP 8 >= 8.5.0)

## Introdução

Este atributo atrasa os erros de validação de destino para atributos internos
do momento da compilação até o momento em que o atributo é instanciado por meio da API de Reflexão.

Quando aplicado a uma declaração, qualquer uso inválido de atributos internos
no mesmo destino não acionará um erro de tempo de compilação. Em vez disso, a
validação é adiada e realizada quando o atributo é instanciado
por meio de [ReflectionAttribute::newInstance()](reflectionattribute.newinstance.md).

Isso visa principalmente a compatibilidade futura, permitindo que o código
use atributos que podem obter destinos válidos adicionais em versões futuras do PHP
sem quebrar em versões mais antigas.

## Resumo da classe

#[[\Attribute](class.attribute.md)]  
final
class ****DelayedTargetValidation****
{

}

## Examples

**Exemplo #1 Atrasar a validação de um destino inválido**

```
<?php

class Base {
    protected function foo(): void {}
}

class Child extends Base {

    #[\DelayedTargetValidation]
    #[\Override]
    public const NAME = 'child';

    #[\Override]
    protected function foo(): void {}
}
```

Em versões do PHP onde [Override](class.override.md) não é permitido em
constantes de classe, isso não produz um erro de tempo de compilação.

**Exemplo #2 A validação ocorre durante a reflexão**

```
<?php

$reflection = new ReflectionClassConstant(Child::class, 'NAME');

foreach ($reflection->getAttributes() as $attribute) {
    $attribute->newInstance(); // Pode lançar exceção se for inválido
}
```

Quando qualquer atributo aplicado ao mesmo destino (exceto o próprio
DelayedTargetValidation) é instanciado via reflexão usando
[ReflectionAttribute::newInstance()](reflectionattribute.newinstance.md),
a validação do destino é realizada e uma exceção pode ser lançada se o atributo
for usado em um destino não suportado.

## Notas

Este atributo afeta apenas a validação de destino dos atributos internos.

Não suprime a validação funcional realizada por esses atributos.
Por exemplo, [Override](class.override.md) ainda emitirá um erro se um
método não sobrescrever de fato um método pai.

## Veja também

- [Visão geral de atributos](language.attributes.md)
- [Override](class.override.md)

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
