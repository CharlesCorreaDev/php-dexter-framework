# Define caminho e informação da CA

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.setcapath.php

---

# OAuth::setCAPath

(PECL OAuth >= 0.99.8)

OAuth::setCAPath — Define caminho e informação da CA

### Descrição

public function **OAuth::setCAPath**([string](language.types.string.md) `$ca_path` = ?, [string](language.types.string.md) `$ca_info` = ?): [mixed](language.types.mixed.md)

Define a Autoridade de Certificado (CA), tanto o caminho quanto
a informação.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`ca_path`
:   O caminnho CA sendo definido.

`ca_info`
:   A informação CA sendo definida.

### Valor Retornado

Retorna **`true`** em caso de sucesso, ou **`false`** se `ca_path`
ou `ca_info` forem considerados inválidos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL oauth 1.0.0 | Anteriormente, retornava **`null`** em caso de falha, em vez de **`false`**. |

### Veja também

- [OAuth::getCaPath()](oauth.getcapath.md) - Obtém informação de CA

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
