# Adiciona um cabeçalho SOAP à resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapserver.addsoapheader.php

---

# SoapServer::addSoapHeader

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

SoapServer::addSoapHeader — Adiciona um cabeçalho SOAP à resposta

### Descrição

public function **SoapServer::addSoapHeader**([SoapHeader](class.soapheader.md) `$header`): [void](language.types.void.md)

Adiciona um cabeçalho SOAP a ser retornado com a resposta à solicitação atual.

### Parâmetros

`header`
:   O cabeçalho a ser retornado.

### Valor Retornado

Nenhum valor é retornado.

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
