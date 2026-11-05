# Configura manipulador de instruções de processamento (PI)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-set-processing-instruction-handler.php

---

# xml\_set\_processing\_instruction\_handler

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_set\_processing\_instruction\_handler — 
Configura manipulador de instruções de processamento (PI)

### Descrição

function **xml\_set\_processing\_instruction\_handler**([XMLParser](class.xmlparser.md) `$parser`, [callable](language.types.callable.md)|[string](language.types.string.md)|[null](language.types.null.md) `$handler`): [true](language.types.singleton.md)

Define a função do manipulador de instruções de processamento (PI) para o analisador XML
`parser`.

Uma instrução de processamento tem o seguinte formato:

```
<?target
data
?>
```

**Cuidado**

O código PHP é delimitado pela instrução de processamento
`<?php`.
Como tal, é possível ter código PHP dentro de um documento XML.
No entanto, a tag final PI (`?>`) não deve fazer parte
dos dados.
Se uma tag final PI existir como parte do código PHP incorporado,
o restante do código PHP e a tag final PI "real" serão tratados
como dados de caracteres.

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

    function handler([XMLParser](class.xmlparser.md) `$parser`, [string](language.types.string.md) `$target`, [string](language.types.string.md) `$data`): [void](language.types.void.md)

    `parser`
    :   O analisador XML que chama o manipulador.

    `target`
    :   O alvo da instrução de processamento.

    `data`
    :   Os dados da instrução de processamento.

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
