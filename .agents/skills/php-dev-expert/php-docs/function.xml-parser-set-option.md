# Define opções em um analisador XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-parser-set-option.php

---

# xml\_parser\_set\_option

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_parser\_set\_option — Define opções em um analisador XML

### Descrição

function **xml\_parser\_set\_option**([XMLParser](class.xmlparser.md) `$parser`, [int](language.types.integer.md) `$option`, [string](language.types.string.md)|[int](language.types.integer.md)|[bool](language.types.boolean.md) `$value`): [bool](language.types.boolean.md)

Define uma opção em uma analisador XML.

### Parâmetros

`parser`
:   Uma referência ao analisador XML ao qual se deseja definir uma opção.

`option`
:   Qual a opção a definir. Veja abaixo.

    As opções a seguir estão disponíveis:

    **Opções do analisador XML**

    | Constante da opção | Tipo de dados | Descrição |
    | --- | --- | --- |
    | **`XML_OPTION_CASE_FOLDING`** | bool | Controla se [case-folding](xml.case-folding.md) está habilitado para este analisador XML. Ativado por padrão. |
    | **`XML_OPTION_PARSE_HUGE`** | bool | Permite analisar documentos maiores que 10 MB. Esta opção só deve ser habilitada quando o tamanho do documento for limitado, pois isso poderia levar a um DoS. Esta opção só está disponível ao usar libxml2. |
    | **`XML_OPTION_SKIP_TAGSTART`** | integer | Especifica quantos caracteres devem ser ignorados no início do nome de uma etiqueta. |
    | **`XML_OPTION_SKIP_WHITE`** | bool | Controla se deve-se ignorar valores constituídos por espaços em branco. |
    | **`XML_OPTION_TARGET_ENCODING`** | string | Define qual [codificação de destino](xml.encoding.md) será usada neste analisador XML. Por pradrão, é definida com a mesma codificação usada por [xml\_parser\_create()](function.xml-parser-create.md). Codificações de destino suportadas são `ISO-8859-1`, `US-ASCII` e `UTF-8`. |

`value`
:   O novo valor da opção.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) quando um valor inválido é passado
em `option`.

Antes do PHP 8.0.0, passar um valor inválido em
`option` gerava um erro de nível **`E_WARNING`**
e fazia com que a função retornasse **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Adicionada a opção **`XML_OPTION_PARSE_HUGE`**. |
| 8.3.0 | O parâmetro `value` agora aceita booleanos. As opções **`XML_OPTION_CASE_FOLDING`** e **`XML_OPTION_SKIP_WHITE`** são agora opções booleanas. |
| 8.0.0 | O parâmetro `parser` agora espera uma instância de [XMLParser](class.xmlparser.md); anteriormente, um [resource](language.types.resource.md) `xml` válido era esperado. |
| 8.0.0 | Uma exceção [ValueError](class.valueerror.md) agora é lançada se `option` for inválido. |

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
