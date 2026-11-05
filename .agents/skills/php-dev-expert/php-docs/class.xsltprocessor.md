# A classe XSLTProcessor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.xsltprocessor.php

---

# A classe XSLTProcessor

(PHP 5, PHP 7, PHP 8)

## Introdução

## Resumo da classe

class ****XSLTProcessor****
{

/\* Propriedades \*/

public
[bool](language.types.boolean.md)
[$doXInclude](class.xsltprocessor.md#xsltprocessor.props.doxinclude) = false;

public
[bool](language.types.boolean.md)
[$cloneDocument](class.xsltprocessor.md#xsltprocessor.props.clonedocument) = false;

public
[int](language.types.integer.md)
[$maxTemplateDepth](class.xsltprocessor.md#xsltprocessor.props.maxtemplatedepth);

public
[int](language.types.integer.md)
[$maxTemplateVars](class.xsltprocessor.md#xsltprocessor.props.maxtemplatevars);

/\* Métodos \*/

public function [getParameter](xsltprocessor.getparameter.md)([string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$name`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getSecurityPrefs](xsltprocessor.getsecurityprefs.md)(): [int](language.types.integer.md)

public function [hasExsltSupport](xsltprocessor.hasexsltsupport.md)(): [bool](language.types.boolean.md)

public function [importStylesheet](xsltprocessor.importstylesheet.md)([object](language.types.object.md) `$stylesheet`): [bool](language.types.boolean.md)

public function [registerPHPFunctionNS](xsltprocessor.registerphpfunctionns.md)([string](language.types.string.md) `$namespaceURI`, [string](language.types.string.md) `$name`, [callable](language.types.callable.md) `$callable`): [void](language.types.void.md)

public function [registerPHPFunctions](xsltprocessor.registerphpfunctions.md)([array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$functions` = **`null`**): [void](language.types.void.md)

public function [removeParameter](xsltprocessor.removeparameter.md)([string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [setParameter](xsltprocessor.setparameter.md)([string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function [setParameter](xsltprocessor.setparameter.md)([string](language.types.string.md) `$namespace`, [array](language.types.array.md) `$options`): [bool](language.types.boolean.md)

public function [setProfiling](xsltprocessor.setprofiling.md)([?](language.types.null.md)[string](language.types.string.md) `$filename`): [true](language.types.singleton.md)

public function [setSecurityPrefs](xsltprocessor.setsecurityprefs.md)([int](language.types.integer.md) `$preferences`): [int](language.types.integer.md)

public function [transformToDoc](xsltprocessor.transformtodoc.md)([object](language.types.object.md) `$document`, [?](language.types.null.md)[string](language.types.string.md) `$returnClass` = **`null`**): [object](language.types.object.md)|[false](language.types.singleton.md)

public function [transformToUri](xsltprocessor.transformtouri.md)([object](language.types.object.md) `$document`, [string](language.types.string.md) `$uri`): [int](language.types.integer.md)

public function [transformToXml](xsltprocessor.transformtoxml.md)([object](language.types.object.md) `$document`): [string](language.types.string.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

}

## Propriedades

doXInclude
:   Informa se devem ser realizados xIncludes.

cloneDocument
:   Informa se devem ser realizada transformação em um clone do documento.

maxTemplateDepth
:   A profundidade máxima de recursão do modelo.

maxTemplateVars
:   O número máximo de variáveis ​​no modelo.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As propriedades doXInclude e cloneDocument agora são definidas explicitamente na classe. |
| 8.4.0 | Adicionadas as propriedades maxTemplateDepth e maxTemplateVars. |

## Índice

- [XSLTProcessor::\_\_construct](xsltprocessor.construct.md) — Cria um novo objeto XSLTProcessor
- [XSLTProcessor::getParameter](xsltprocessor.getparameter.md) — Obtém o valor de um parâmetro
- [XSLTProcessor::getSecurityPrefs](xsltprocessor.getsecurityprefs.md) — Obtém as preferências de segurança
- [XSLTProcessor::hasExsltSupport](xsltprocessor.hasexsltsupport.md) — Verifica se o PHP tem suporte a EXSLT
- [XSLTProcessor::importStylesheet](xsltprocessor.importstylesheet.md) — Importa folha de estilos
- [XSLTProcessor::registerPHPFunctionNS](xsltprocessor.registerphpfunctionns.md) — Registra uma função PHP como uma função XSLT com namespace
- [XSLTProcessor::registerPHPFunctions](xsltprocessor.registerphpfunctions.md) — Habilita o uso de funções do PHP como funções XSLT
- [XSLTProcessor::removeParameter](xsltprocessor.removeparameter.md) — Remove parâmetro
- [XSLTProcessor::setParameter](xsltprocessor.setparameter.md) — Define um valor para um parâmetro
- [XSLTProcessor::setProfiling](xsltprocessor.setprofiling.md) — Define o arquivo de saída de perfil
- [XSLTProcessor::setSecurityPrefs](xsltprocessor.setsecurityprefs.md) — Define preferências de segurança
- [XSLTProcessor::transformToDoc](xsltprocessor.transformtodoc.md) — Transforma em um documento
- [XSLTProcessor::transformToURI](xsltprocessor.transformtouri.md) — Transforma em URI
- [XSLTProcessor::transformToXml](xsltprocessor.transformtoxml.md) — Transforma em XML

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
