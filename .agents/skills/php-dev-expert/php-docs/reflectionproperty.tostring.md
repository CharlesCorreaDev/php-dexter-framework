# Para string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.tostring.php

---

# ReflectionProperty::\_\_toString

(PHP 5, PHP 7, PHP 8)

ReflectionProperty::\_\_toString — Para string

### Descrição

public function **ReflectionProperty::\_\_toString**(): [string](language.types.string.md)

Retorna a representação de string da propriedade.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma representação em string representation desta instância de [ReflectionProperty](class.reflectionproperty.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O comentário do documento anexado agora é incluído. |

### Veja também

- [\_\_toString()](language.oop5.magic.md#object.tostring)

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
