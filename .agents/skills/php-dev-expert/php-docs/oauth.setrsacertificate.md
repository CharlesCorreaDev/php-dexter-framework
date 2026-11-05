# Define o certificado RSA

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.setrsacertificate.php

---

# OAuth::setRSACertificate

(PECL OAuth >= 1.0.0)

OAuth::setRSACertificate — Define o certificado RSA

### Descrição

public function **OAuth::setRSACertificate**([string](language.types.string.md) `$cert`): [mixed](language.types.mixed.md)

Define o certificado RSA.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`cert`
:   O certificado RSA.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha (ex.: o certificado RSA
não pode ser analisado).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL oauth 1.0.0 | Anteriormente, retornava **`null`** em caso de falha, em vez de **`false`**. |

### Examples

**Exemplo #1 Um exemplo de **OAuth::setRsaCertificate()****

```
<?php
$consume = new OAuth('1234', '', OAUTH_SIG_METHOD_RSASHA1);

$consume->setRSACertificate(file_get_contents('test.pem'));
?>
```

### Veja também

- [OAuth::setCaPath()](oauth.setcapath.md) - Define caminho e informação da CA

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
