# Recupera um conteúdo existente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-response-abstract.getbody.php

---

# Yaf\_Response\_Abstract::getBody

(Yaf >=1.0.0)

Yaf\_Response\_Abstract::getBody — Recupera um conteúdo existente

### Descrição

public function **Yaf\_Response\_Abstract::getBody**([string](language.types.string.md) `$key` = ?): [mixed](language.types.mixed.md)

Recupera um conteúdo existente.

### Parâmetros

`key`
:   A chave de conteúdo. Se não for especificado, Yaf\_Response\_Abstract::DEFAULT\_BODY
    será usado. Se for **`null`**, todo o conteúdo será retornado
    como um array.
    > **Nota**:
    >
    > Este parâmetro está disponível a partir do Yaf 2.2.0.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Response\_Abstract::getBody()****

```
<?php
$response = new Yaf_Response_Http();

$response->setBody("Olá,")->setBody(" mundo!", "rodape");

var_dump($response->getBody()); // padrão
var_dump($response->getBody(Yaf_Response_Abstract::DEFAULT_BODY)); // o mesmo que o anterior
var_dump($response->getBody("rodape"));
var_dump($response->getBody(NULL)); // obtém tudo
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(4) "Olá,"
string(4) "Olá,"
string(7) " mundo!"
array(2) {
  ["content"]=>
  string(4) "Olá,"
  ["footer"]=>
  string(7) " mundo!"
}
```

### Veja também

- [Yaf\_Response\_Abstract::setBody()](yaf-response-abstract.setbody.md) - Define o conteúdo da resposta
- [Yaf\_Response\_Abstract::appendBody()](yaf-response-abstract.appendbody.md) - Acrescenta ao corpo da resposta
- [Yaf\_Response\_Abstract::prependBody()](yaf-response-abstract.prependbody.md) - prependBody
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
