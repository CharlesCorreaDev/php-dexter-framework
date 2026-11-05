# Recupera o endereço atual ao qual o
   soquete do ouvinte está vinculado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventlistener.getsocketname.php

---

# EventListener::getSocketName

(PECL event >= 1.5.0)

EventListener::getSocketName — Recupera o endereço atual ao qual o
soquete do ouvinte está vinculado

### Descrição

public
static
function **EventListener::getSocketName**(
[string](language.types.string.md) `&$address`
, 
[mixed](language.types.mixed.md) `&$port`
 = ?): [bool](language.types.boolean.md)

Recupera o endereço atual ao qual o soquete do ouvinte está vinculado.

### Parâmetros

`address`
:   Parâmetro de saída. Endereço IP dependendo da família de endereços do soquete.

`port`
:   Parâmetro de saída. A porta à qual o soquete está vinculado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
