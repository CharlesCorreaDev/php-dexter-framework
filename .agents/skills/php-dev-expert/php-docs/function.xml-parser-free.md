# Libera um analisador XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-parser-free.php

---

# xml\_parser\_free

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_parser\_free — Libera um analisador XML

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.5.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **xml\_parser\_free**([XMLParser](class.xmlparser.md) `$parser`): [bool](language.types.boolean.md)

> **Nota**:
>
> Esta função não tem efeito. Antes do PHP 8.0.0, esta função era usada para fechar o recurso.

Libera o analisador XML informado em `parser`.

**Cuidado**

Além de chamar **xml\_parser\_free()** quando a análise
está terminada, antes do PHP 8.0.0, era necessário também explicitamente remover a
definição da referência ao analisador informado em `parser` para evitar vazamentos de memória,
se o recurso do analisador fosse referenciado de um objeto, e este objeto referenciasse
o recurso do analisador.

### Parâmetros

`parser`
:   Uma referência para o analisador XML a ser liberado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Esta função foi descontinuada. |
| 8.0.0 | O parâmetro `parser` agora espera uma instância de [XMLParser](class.xmlparser.md); anteriormente, um [resource](language.types.resource.md) `xml` válido era esperado. |

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
