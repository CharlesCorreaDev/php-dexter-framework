# Obtém o nome da constante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.getname.php

---

# ReflectionClassConstant::getName

(PHP 7 >= 7.1.0, PHP 8)

ReflectionClassConstant::getName — Obtém o nome da constante

### Descrição

public function **ReflectionClassConstant::getName**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome da constante.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Lança um [Error](class.error.md) caso a propriedade name não tenha sido inicializada. Anteriormente, o método retornava **`false`** em caso de falha. |

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
