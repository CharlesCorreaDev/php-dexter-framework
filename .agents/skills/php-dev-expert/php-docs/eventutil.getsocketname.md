# Recupera o endereço atual ao qual o
   soquete está vinculado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventutil.getsocketname.php

---

# EventUtil::getSocketName

(PECL event >= 1.5.0)

EventUtil::getSocketName — Recupera o endereço atual ao qual o
soquete está vinculado

### Descrição

public
static
function **EventUtil::getSocketName**(
[mixed](language.types.mixed.md) `$socket`
, 
[string](language.types.string.md) `&$address`
, 
[mixed](language.types.mixed.md) `&$port`
 = ?): [bool](language.types.boolean.md)

Recupera o endereço atual ao qual o
`socket`
está vinculado.

### Parâmetros

`socket`
:   Recurso de soquete, fluxo ou um descritor de arquivo de um soquete.

`address`
:   Parâmetro de saída. Endereço IP ou o caminho do soquete de domínio UNIX dependendo
    da família de endereços do soquete.

`port`
:   Parâmetro de saída. A porta à qual o soquete está vinculado. Não tem significado para
    soquetes de domínio UNIX.

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
