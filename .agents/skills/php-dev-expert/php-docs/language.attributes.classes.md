# Declarando Classes de Atributos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.attributes.classes.php

---

## Declarando Classes de Atributos

É recomendado definir uma classe separada para cada atributo.
No caso mais simples, uma classe vazia com a declaração `#[Attribute]`
é suficiente. O atributo pode ser importado do namespace global usando uma
declaração `use`.

**Exemplo #1 Classe de Atributo Simples**

```
<?php

namespace Example;

use Attribute;

#[Attribute]
class MyAttribute
{
}
```

Para restringir os tipos de declarações às quais um atributo pode ser aplicado,
passe uma máscara de bits como o primeiro argumento para a declaração
`#[Attribute]`.

**Exemplo #2 Usando a especificação de destino para restringir onde os atributos podem ser usados**

```
<?php

namespace Example;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_FUNCTION)]
class MyAttribute
{
}
```

Declarar **MyAttribute** em outro tipo agora lançará uma exceção durante a
chamada para [ReflectionAttribute::newInstance()](reflectionattribute.newinstance.md)

Os seguintes alvos podem ser especificados:

- **`Attribute::TARGET_CLASS`**
- **`Attribute::TARGET_FUNCTION`**
- **`Attribute::TARGET_METHOD`**
- **`Attribute::TARGET_PROPERTY`**
- **`Attribute::TARGET_CLASS_CONSTANT`**
- **`Attribute::TARGET_PARAMETER`**
- **`Attribute::TARGET_ALL`**

Por padrão, um atributo só pode ser usado uma vez por declaração. Para permitir
que um atributo seja repetível, especifique-o na máscara de bits da
declaração `#[Attribute]` usando o sinalizador
**`Attribute::IS_REPEATABLE`**.

**Exemplo #3 Usando IS\_REPEATABLE para permitir o atributo em uma declaração várias vezes**

```
<?php

namespace Example;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_FUNCTION | Attribute::IS_REPEATABLE)]
class MyAttribute
{
}
```

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
