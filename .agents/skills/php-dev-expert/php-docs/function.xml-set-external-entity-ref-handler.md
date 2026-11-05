# Configura manipulador de referência de entidade externa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-set-external-entity-ref-handler.php

---

# xml\_set\_external\_entity\_ref\_handler

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_set\_external\_entity\_ref\_handler — Configura manipulador de referência de entidade externa

### Descrição

function **xml\_set\_external\_entity\_ref\_handler**([XMLParser](class.xmlparser.md) `$parser`, [callable](language.types.callable.md)|[string](language.types.string.md)|[null](language.types.null.md) `$handler`): [true](language.types.singleton.md)

Define a função do manipulador de referência de entidade externa para o analisador XML
`parser`.

### Parâmetros

`parser`
:   O analisador XML.

`handler`
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

    function handler(  
        [XMLParser](class.xmlparser.md) `$parser`,  
        [string](language.types.string.md) `$open_entity_names`,  
        [string](language.types.string.md)|[false](language.types.singleton.md) `$base`,  
        [string](language.types.string.md) `$system_id`,  
        [string](language.types.string.md)|[false](language.types.singleton.md) `$public_id`  
    ): [bool](language.types.boolean.md)

    `parser`
    :   O analisador XML que chama o manipulador.

    `open_entity_names`
    :   Uma lista separada por espaços dos nomes das entidades que estão abertas para
        a análise desta entidade (incluindo o nome da entidade
        referenciada).

    `base`
    :   Esta é a base para resolver o identificador do sistema
        (`system_id`) da entidade externa.

    `system_id`
    :   O identificador do sistema conforme especificado na declaração da entidade.

    `public_id`
    :   O identificador público conforme especificado na declaração da entidade, ou
        uma string vazia se nenhuma foi especificada; o espaço em branco no
        identificador público terá sido normalizado conforme exigido pela
        especificação XML.

    O manipulador deve retornar **`true`** se a entidade foi manipulada,
    **`false`** caso contrário.
    Ao retornar **`false`** o analisador XML interromperá a análise e
    [xml\_get\_error\_code()](function.xml-get-error-code.md) retornará
    **`XML_ERROR_EXTERNAL_ENTITY_HANDLING`**.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Passar uma [string](language.types.string.md) não-[callable](language.types.callable.md) no parâmetro `handler` foi descontinuado, use um chamável apropriado para métodos, ou **`null`** para redefinir o manipulador. |
| 8.4.0 | A validade do manipulador `handler` como um tipo [callable](language.types.callable.md) agora é verificada ao configurar o manipulador ao invés de verificar na chamada. |
| 8.0.0 | O parâmetro `parser` agora espera uma instância de [XMLParser](class.xmlparser.md); anteriormente, um [resource](language.types.resource.md) `xml` válido era esperado. |
| 7.3.0 | O valor de retorno do `handler` não é mais ignorado se a extensão tiver sido construída com base em libxml. Anteriormente, o valor de retorno era ignorado e a análise nunca parava. |

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
