# O atributo Attribute

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.attribute.php

---

# O atributo Attribute

(PHP 8)

## Introdução

Atributos oferecem a capacidade de adicionar informações estruturadas de metadados
e legíveis por máquina em declarações no código: classes, métodos, funções,
parâmetros, propriedades e constantes de classes podem ser alvos de um atributo.
Os metadados definidos pelos atributos podem ser inspecionados em tempo de execução usando as
[APIs de Reflexão](book.reflection.md).
Dessa forma, os atributos podem ser pensados como uma linguagem de configuração
incorporada diretamente no código.

## Resumo da classe

#[[\Attribute](class.attribute.md)]  
final
class ****Attribute****
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[TARGET\_CLASS](class.attribute.md#attribute.constants.target-class);

const
[int](language.types.integer.md)
[TARGET\_FUNCTION](class.attribute.md#attribute.constants.target-function);

const
[int](language.types.integer.md)
[TARGET\_METHOD](class.attribute.md#attribute.constants.target-method);

const
[int](language.types.integer.md)
[TARGET\_PROPERTY](class.attribute.md#attribute.constants.target-property);

const
[int](language.types.integer.md)
[TARGET\_CLASS\_CONSTANT](class.attribute.md#attribute.constants.target-class-constant);

const
[int](language.types.integer.md)
[TARGET\_PARAMETER](class.attribute.md#attribute.constants.target-parameter);

const
[int](language.types.integer.md)
[TARGET\_CONSTANT](class.attribute.md#attribute.constants.target-constant);

const
[int](language.types.integer.md)
[TARGET\_ALL](class.attribute.md#attribute.constants.target-all);

const
[int](language.types.integer.md)
[IS\_REPEATABLE](class.attribute.md#attribute.constants.is-repeatable);

/\* Propriedades \*/

public
[int](language.types.integer.md)
[$flags](class.attribute.md#attribute.props.flags);

/\* Métodos \*/

public function [\_\_construct](attribute.construct.md)([int](language.types.integer.md) `$flags` = [Attribute::TARGET\_ALL](class.attribute.md#attribute.constants.target-all))

}

## Constantes predefinidas

[Attribute::TARGET\_CLASS](class.attribute.md#attribute.constants.target-class)

[Attribute::TARGET\_FUNCTION](class.attribute.md#attribute.constants.target-function)

[Attribute::TARGET\_METHOD](class.attribute.md#attribute.constants.target-method)

[Attribute::TARGET\_PROPERTY](class.attribute.md#attribute.constants.target-property)

[Attribute::TARGET\_CLASS\_CONSTANT](class.attribute.md#attribute.constants.target-class-constant)

[Attribute::TARGET\_PARAMETER](class.attribute.md#attribute.constants.target-parameter)

[Attribute::TARGET\_CONSTANT](class.attribute.md#attribute.constants.target-constant)

[Attribute::TARGET\_ALL](class.attribute.md#attribute.constants.target-all)

[Attribute::IS\_REPEATABLE](class.attribute.md#attribute.constants.is-repeatable)

## Propriedades

flags

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Adicionada a constante **`Attribute::TARGET_CONSTANT`**. |

## Veja também

[Visão geral dos atributos](language.attributes.md)

## Índice

- [Attribute::\_\_construct](attribute.construct.md) — Constrói uma nova instância da classe Attribute

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
