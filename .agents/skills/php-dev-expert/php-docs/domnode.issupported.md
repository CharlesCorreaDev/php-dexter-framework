# Verifica se o recurso é suportado para a versão especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.issupported.php

---

# DOMNode::isSupported

(PHP 5, PHP 7, PHP 8)

DOMNode::isSupported — 
Verifica se o recurso é suportado para a versão especificada

### Descrição

public function **DOMNode::isSupported**([string](language.types.string.md) `$feature`, [string](language.types.string.md) `$version`): [bool](language.types.boolean.md)

Verifica se o `feature` solicitado é suportado para a
`version` especificada.

### Parâmetros

`feature`
:   O recurso a ser testado. Veja o exemplo de
    [DOMImplementation::hasFeature()](domimplementation.hasfeature.md) para uma
    lista de recursos.

`version`
:   O número da versão do `feature` a ser testado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [DOMImplementation::hasFeature()](domimplementation.hasfeature.md) - Testa se a implementação DOM implementa um recurso específico

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
