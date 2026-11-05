# prependBody

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-response-abstract.prependbody.php

---

# Yaf\_Response\_Abstract::prependBody

(Yaf >=1.0.0)

Yaf\_Response\_Abstract::prependBody — prependBody

### Descrição

public function **Yaf\_Response\_Abstract::prependBody**([string](language.types.string.md) `$content`, [string](language.types.string.md) `$key` = ?): [bool](language.types.boolean.md)

Acrescenta um conteúdo ao início de um bloco de conteúdo existente.

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

**Exemplo #1 Exemplo de **Yaf\_Response\_Abstract::prependBody()****

```
<?php
$response = new Yaf_Response_Http();

$response->setBody("mundo!")->prependBody("Olá, ");

echo $response;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Olá, mundo!
```

### Veja também

- [Yaf\_Response\_Abstract::getBody()](yaf-response-abstract.getbody.md) - Recupera um conteúdo existente
- [Yaf\_Response\_Abstract::setBody()](yaf-response-abstract.setbody.md) - Define o conteúdo da resposta
- [Yaf\_Response\_Abstract::appendBody()](yaf-response-abstract.appendbody.md) - Acrescenta ao corpo da resposta
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
