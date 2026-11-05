# Configura manipuladores de elementos de início e fim

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-set-element-handler.php

---

# xml\_set\_element\_handler

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_set\_element\_handler — Configura manipuladores de elementos de início e fim

### Descrição

function **xml\_set\_element\_handler**([XMLParser](class.xmlparser.md) `$parser`, [callable](language.types.callable.md)|[string](language.types.string.md)|[null](language.types.null.md) `$start_handler`, [callable](language.types.callable.md)|[string](language.types.string.md)|[null](language.types.null.md) `$end_handler`): [true](language.types.singleton.md)

Define as funções do manipulador de elementos para o `parser` XML.

`start_handler` é chamado quando um novo elemento XML é
aberto. `end_handler` é chamado quando um elemento XML
é fechado.

### Parâmetros

`parser`
:   O analisador XML.

`start_handler`
:   Se **`null`** for passado, o manipulador é redefinido para seu estado padrão.

    **Aviso**

    Uma string vazia também redefine o manipulador,
    entretanto isto foi descontinuado a partir do PHP 8.4.0.

    Se `handler` for um [callable](language.types.callable.md),
    o callable será definido como o manipulador.

    Se `handler` for uma [string](language.types.string.md),
    ela pode ser o nome de um método de um objeto definido com
    [xml\_set\_object()](function.xml-set-object.md).

    **Aviso**

    Isto foi descontinuado a partir do PHP 8.4.0.

    **Aviso**

    A partir do PHP 8.4.0, a função de retorno é verificada quanto à validade ao configurar o manipulador,
    e não quando é chamada.
    Isto significa que [xml\_set\_object()](function.xml-set-object.md) precisa ser chamada antes de
    configurar uma string de método como a função de retorno.
    Entretanto, como este comportamento também foi descontinuado a partir do PHP 8.4.0,
    usar um [callable](language.types.callable.md) adequado para o método é recomendado.

    A assinatura do manipulador deve ser:

    function start\_element\_handler([XMLParser](class.xmlparser.md) `$parser`, [string](language.types.string.md) `$name`, [array](language.types.array.md) `$attributes`): [void](language.types.void.md)

    `parser`
    :   O analisador XML que chama o manipulador.

    `name`
    :   Contém o nome do elemento para o qual este manipulador é chamado.
        Se [case-folding](xml.case-folding.md) estiver em vigor
        para este analisador, o nome do elemento estará em letras maiúsculas.

    `attributes`
    :   Um array associativo com os atributos do elemento.
        O array estará vazio se o elemento não tiver atributos.
        As chaves deste array são os nomes dos atributos,
        os valores são os valores dos atributos.
        Os nomes dos atributos são
        [convertidos para minúsculo](xml.case-folding.md)
        nos mesmos critérios que os nomes dos elementos.
        Os valores dos atributos *não* são convertidos para minúsculo.

        A ordem em que `attributes` é percorrida
        é idêntica à ordem em que os atributos foram declarados.

`end_handler`
:   Se **`null`** for passado, o manipulador é redefinido para seu estado padrão.

    **Aviso**

    Uma string vazia também redefine o manipulador,
    entretanto isto foi descontinuado a partir do PHP 8.4.0.

    Se `handler` for um [callable](language.types.callable.md),
    o callable será definido como o manipulador.

    Se `handler` for uma [string](language.types.string.md),
    ela pode ser o nome de um método de um objeto definido com
    [xml\_set\_object()](function.xml-set-object.md).

    **Aviso**

    Isto foi descontinuado a partir do PHP 8.4.0.

    **Aviso**

    A partir do PHP 8.4.0, a função de retorno é verificada quanto à validade ao configurar o manipulador,
    e não quando é chamada.
    Isto significa que [xml\_set\_object()](function.xml-set-object.md) precisa ser chamada antes de
    configurar uma string de método como a função de retorno.
    Entretanto, como este comportamento também foi descontinuado a partir do PHP 8.4.0,
    usar um [callable](language.types.callable.md) adequado para o método é recomendado.

    A assinatura do manipulador deve ser:

    function end\_element\_handler([XMLParser](class.xmlparser.md) `$parser`, [string](language.types.string.md) `$name`): [void](language.types.void.md)

    `parser`
    :   O analisador XML que chama o manipulador.

    `name`
    :   Contém o nome do elemento para o qual este manipulador é chamado.
        Se [case-folding](xml.case-folding.md) estiver em vigor
        para este analisador, o nome do elemento estará em letras maiúsculas.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Passar uma [string](language.types.string.md) não-[callable](language.types.callable.md) no parâmetro `handler` foi descontinuado, use um chamável apropriado para métodos, ou **`null`** para redefinir o manipulador. |
| 8.4.0 | A validade do manipulador `handler` como um tipo [callable](language.types.callable.md) agora é verificada ao configurar o manipulador ao invés de verificar na chamada. |
| 8.0.0 | O parâmetro `parser` agora espera uma instância de [XMLParser](class.xmlparser.md); anteriormente, um [resource](language.types.resource.md) `xml` válido era esperado. |

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
