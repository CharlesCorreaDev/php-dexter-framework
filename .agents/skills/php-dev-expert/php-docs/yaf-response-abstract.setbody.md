# Define o conteúdo da resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-response-abstract.setbody.php

---

# Yaf\_Response\_Abstract::setBody

(Yaf >=1.0.0)

Yaf\_Response\_Abstract::setBody — Define o conteúdo da resposta

### Descrição

public function **Yaf\_Response\_Abstract::setBody**([string](language.types.string.md) `$content`, [string](language.types.string.md) `$key` = ?): [bool](language.types.boolean.md)

Define o conteúdo da resposta.

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

### Examples

**Exemplo #1 Exemplo de **Yaf\_Response\_Abstract::setBody()****

```
<?php
$response = new Yaf_Response_Http();

$response->setBody("Olá, ")->setBody(" mundo!", "rodape");

print_r($response);
echo $response;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Yaf_Response_Http Object
(
    [_header:protected] => Array
        (
        )

    [_body:protected] => Array
        (
            [content] => Olá,
            [footer] =>  mundo!
        )

    [_sendheader:protected] => 1
    [_response_code:protected] => 200
)
Olá, mundo!
```

### Veja também

- [Yaf\_Response\_Abstract::getBody()](yaf-response-abstract.getbody.md) - Recupera um conteúdo existente
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
