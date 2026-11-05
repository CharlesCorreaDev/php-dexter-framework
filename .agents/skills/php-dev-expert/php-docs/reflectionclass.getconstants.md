# Obtém constantes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getconstants.php

---

# ReflectionClass::getConstants

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getConstants — Obtém constantes

### Descrição

public function **ReflectionClass::getConstants**([?](language.types.null.md)[int](language.types.integer.md) `$filter` = **`null`**): [array](language.types.array.md)

Obtém todas as constantes definidas de uma classe, independentemente da sua visibilidade.

### Parâmetros

`filter`
:   O filtro opcional, para filtrar as visibilidades constantes desejadas. Está configurado usando
    as [constantes ReflectionClassConstant](class.reflectionclassconstant.md#reflectionclassconstant.constants.modifiers),
    e o padrão é todas as visibilidades constantes.

### Valor Retornado

Um [array](language.types.array.md) de constantes, onde as chaves contêm o nome
e os valores o valor das constantes.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `filter` foi adicionado. |

### Veja também

- [ReflectionClass::getConstant()](reflectionclass.getconstant.md) - Obtém uma constante definida

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
