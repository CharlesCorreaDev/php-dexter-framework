# Acrescenta ao corpo da resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-response-abstract.appendbody.php

---

# Yaf\_Response\_Abstract::appendBody

(Yaf >=1.0.0)

Yaf\_Response\_Abstract::appendBody — Acrescenta ao corpo da resposta

### Descrição

public function **Yaf\_Response\_Abstract::appendBody**([string](language.types.string.md) `$content`, [string](language.types.string.md) `$key` = ?): [bool](language.types.boolean.md)

Acrescenta um conteúdo a um bloco de conteúdo existente.

### Parâmetros

`body`
:   String com o conteúdo.

`key`
:   A chave de conteúdo. Um conteúdo pode ser especificado com uma chave.
    Se não for especificado, Yaf\_Response\_Abstract::DEFAULT\_BODY será usado.
    > **Nota**:
    >
    > Este parâmetro está disponível a partir do Yaf 2.2.0.

### Valor Retornado

Um booleano.

### Examples

**Exemplo #1 Exemplo de **Yaf\_Response\_Abstract::appendBody()****

```
<?php
$response = new Yaf_Response_Http();

$response->setBody("Olá,")->appendBody(" mundo!");

echo $response;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Olá, mundo!
```

### Veja também

- [Yaf\_Config\_Ini](class.yaf-config-ini.md)
- [Yaf\_Response\_Abstract::getBody()](yaf-response-abstract.getbody.md) - Recupera um conteúdo existente
- [Yaf\_Response\_Abstract::setBody()](yaf-response-abstract.setbody.md) - Define o conteúdo da resposta
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
