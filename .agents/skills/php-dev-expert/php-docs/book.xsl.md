# XSL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.xsl.php

---

# XSL

# Introdução

A extensão XSL implementa o padrão XSL, executando [» transformações XSLT](https://www.w3.org/TR/xslt) usando a [» biblioteca libxslt](https://gitlab.gnome.org/GNOME/libxslt/-/wikis/home)

- [Instalação/Configuração](xsl.setup.md)
  - [Dependências](xsl.requirements.md)
  - [Instalação](xsl.installation.md)
- [Constantes predefinidas](xsl.constants.md)
- [Examples](xsl.examples.md)
  - [Arquivos de exemplo collection.xml e collection.xsl](xsl.examples-collection.md)
  - [Tratamento de erros com funções de tratamento de erros libxml](xsl.examples-errors.md)
- [XSLTProcessor](class.xsltprocessor.md) — A classe XSLTProcessor
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
