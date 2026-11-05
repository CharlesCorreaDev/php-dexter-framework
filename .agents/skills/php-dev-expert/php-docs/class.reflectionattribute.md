# A classe ReflectionAttribute

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionattribute.php

---

# A classe ReflectionAttribute

(PHP 8)

## Introdução

A classe **ReflectionAttribute** fornece informações sobre
um [Atributo](language.attributes.md).

## Resumo da classe

class ****ReflectionAttribute****
implements
[Reflector](class.reflector.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[IS\_INSTANCEOF](class.reflectionattribute.md#reflectionattribute.constants.is-instanceof);

/\* Propriedades \*/

public
[string](language.types.string.md)
[$name](class.reflectionattribute.md#reflectionattribute.props.name);

/\* Métodos \*/

private function [\_\_construct](reflectionattribute.construct.md)()

public function [getArguments](reflectionattribute.getarguments.md)(): [array](language.types.array.md)

public function [getName](reflectionattribute.getname.md)(): [string](language.types.string.md)

public function [getTarget](reflectionattribute.gettarget.md)(): [int](language.types.integer.md)

public function [isRepeated](reflectionattribute.isrepeated.md)(): [bool](language.types.boolean.md)

public function [newInstance](reflectionattribute.newinstance.md)(): [object](language.types.object.md)

}

## Propriedades

name
:   O nome do atributo.

## Constantes predefinidas

## ReflectionAttribute Flags

**`ReflectionAttribute::IS_INSTANCEOF`** [int](language.types.integer.md)
:   Recupere atributos usando uma
    verificação `instanceof`.

> **Nota**:
>
> Os valores dessas constantes podem mudar entre as versões do PHP.
> É recomendado sempre usar as constantes
> e não confiar diretamente nos valores.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Todas as constantes de classe agora são tipadas. |
| 8.4.0 | Adicionado [ReflectionAttribute::$name](class.reflectionattribute.md#reflectionattribute.props.name). |

## Índice

- [ReflectionAttribute::\_\_construct](reflectionattribute.construct.md) — Construtor privado para evitar a instanciação direta
- [ReflectionAttribute::getArguments](reflectionattribute.getarguments.md) — Obtém os argumentos passados para o atributo
- [ReflectionAttribute::getName](reflectionattribute.getname.md) — Obtém o nome do atributo
- [ReflectionAttribute::getTarget](reflectionattribute.gettarget.md) — Retorna o alvo do atributo como uma máscara de bits
- [ReflectionAttribute::isRepeated](reflectionattribute.isrepeated.md) — Retorna se o atributo deste nome foi repetido em um elemento de código
- [ReflectionAttribute::newInstance](reflectionattribute.newinstance.md) — Instancia a classe de atributo representada por esta classe ReflectionAttribute e argumentos

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
