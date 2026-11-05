# Descarta todo o corpo de resposta existente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-response-abstract.clearbody.php

---

# Yaf\_Response\_Abstract::clearBody

(Yaf >=1.0.0)

Yaf\_Response\_Abstract::clearBody — Descarta todo o corpo de resposta existente

### Descrição

public function **Yaf\_Response\_Abstract::clearBody**([string](language.types.string.md) `$key` = ?): [bool](language.types.boolean.md)

Limpa o conteúdo existente.

### Parâmetros

`key`
:   A chave de conteúdo. Se não for especificada, todo o conteúdo será
    apagado.
    > **Nota**:
    >
    > Este parâmetro está disponível a partir do Yaf 2.2.0.

### Valor Retornado

### Veja também

- [Yaf\_Response\_Abstract::setBody()](yaf-response-abstract.setbody.md) - Define o conteúdo da resposta
- [Yaf\_Response\_Abstract::appendBody()](yaf-response-abstract.appendbody.md) - Acrescenta ao corpo da resposta
- [Yaf\_Response\_Abstract::prependBody()](yaf-response-abstract.prependbody.md) - prependBody
- [Yaf\_Response\_Abstract::getBody()](yaf-response-abstract.getbody.md) - Recupera um conteúdo existente

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
