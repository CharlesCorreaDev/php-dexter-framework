# Envia resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-response-abstract.response.php

---

# Yaf\_Response\_Abstract::response

(Yaf >=1.0.0)

Yaf\_Response\_Abstract::response — Envia resposta

### Descrição

public function **Yaf\_Response\_Abstract::response**(): [void](language.types.void.md)

Envia resposta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Response\_Abstract::response()****

```
<?php
$response = new Yaf_Response_Http();

$response->setBody("Olá,")->setBody(" mundo!", "rodape");

$response->response();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Olá, mundo!
```

### Veja também

- [Yaf\_Response\_Abstract::setBody()](yaf-response-abstract.setbody.md) - Define o conteúdo da resposta
- [Yaf\_Response\_Abstract::clearBody()](yaf-response-abstract.clearbody.md) - Descarta todo o corpo de resposta existente

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
