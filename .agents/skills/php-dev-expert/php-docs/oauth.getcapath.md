# Obtém informação de CA

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.getcapath.php

---

# OAuth::getCAPath

(PECL OAuth >= 0.99.8)

OAuth::getCAPath — Obtém informação de CA

### Descrição

public function **OAuth::getCAPath**(): [array](language.types.array.md)

Obtém a informação de Autoridade de Certificado, que inclui
ca\_path e ca\_info definidos por [OAuth::setCaPath()](oauth.setcapath.md).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) de informação de Autoridade de Certificado, especificamente como
chaver `ca_path` e `ca_info` dentro do array
associativo retornado.

### Veja também

- [OAuth::setCAPath()](oauth.setcapath.md) - Define caminho e informação da CA
- [OAuth::getLastResponseInfo()](oauth.getlastresponseinfo.md) - Obtém informação HTTP sobre a última resposta

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
