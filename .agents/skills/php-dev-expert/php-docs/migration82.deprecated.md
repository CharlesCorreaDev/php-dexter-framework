# Funcionalidades Descontinuadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration82.deprecated.php

---

## Funcionalidades Descontinuadas

### Núcleo do PHP

#### Uso de propriedades dinâmicas

A criação de propriedades dinâmicas foi descontinuada a menos que seja ativada pela classe
usando o atributo `#[\AllowDynamicProperties]`.
[stdClass](class.stdclass.md) permite propriedades dinâmicas.
O uso dos métodos mágicos [\_\_get()](language.oop5.overloading.md#object.get)/[\_\_set()](language.oop5.overloading.md#object.set) não é afetado por essa mudança.
Um aviso de descontinuação de propriedades dinâmicas pode ser abordado das seguintes maneiras:

- Declarando a propriedade (preferido).
- Adicionando o atributo `#[\AllowDynamicProperties]` à classe
  (que também se aplica a todas as classes filhas).
- Usando um [WeakMap](class.weakmap.md) se dados adicionais precisarem ser
  associados a um objeto ao qual não se detém posse.

#### Chamáveis relativos

Chamáveis que não são aceitos pela sintaxe `$callable()`
(mas são aceitos por [call\_user\_func()](function.call-user-func.md)) foram descontinuados.
Em particular:

- `"self::method"`
- `"parent::method"`
- `"static::method"`
- `["self", "method"]`
- `["parent", "method"]`
- `["static", "method"]`
- `["Foo", "Bar::method"]`
- `[new Foo, "Bar::method"]`

Isso não afeta chamáveis de métodos normais como
`"A::method"` ou `["A", "method"]`.

#### Estilo de interpolação `"${var}"` e `"${expr}"`

Os estilos de interpolação de string `"${var}"` e `"${expr}"`
foram preteridos.
Use `"$var"/"{$var}"` e `"{${expr}}"`, respectivamente.

### MBString

O uso das 'codificações de texto' `QPrint`, `Base64`,
`Uuencode`, e `HTML-ENTITIES`
foi preterido para todas as funções de MBString.
Diferente das outras codificações de texto suportadas pela MBString,
essas não codificam a sequência de pontos de código Unicode, mas sim uma sequência de bytes brutos.
Não está claro quais deveriam ser os valores de devolução corretos para a maioria das funções de MBString
quando uma dessas não-codificações é especificada.
Além disso, o PHP possui implementações separadas, embutidas, para todas elas;
por exemplo, dados UUencoded podem ser manipulados utilizando
[convert\_uuencode()](function.convert-uuencode.md)/[convert\_uudecode()](function.convert-uudecode.md).

### SPL

O método interno **SplFileInfo::\_bad\_state\_ex()**
for descontinuado.

### Biblioteca Padrão

[utf8\_encode()](function.utf8-encode.md) e [utf8\_decode()](function.utf8-decode.md)
foram descontinuadas.

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
