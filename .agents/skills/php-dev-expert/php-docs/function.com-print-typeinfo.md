# Mostra uma definição de classe PHP para uma interface despachável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.com-print-typeinfo.php

---

# com\_print\_typeinfo

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

com\_print\_typeinfo — Mostra uma definição de classe PHP para uma interface despachável

### Descrição

function **com\_print\_typeinfo**([variant](class.variant.md)|[string](language.types.string.md) `$variant`, [?](language.types.null.md)[string](language.types.string.md) `$dispatch_interface` = **`null`**, [bool](language.types.boolean.md) `$display_sink` = **`false`**): [bool](language.types.boolean.md)

O objetivo desta função é ajudar a gerar um esqueleto de classe para uso como
um coletor de eventos. Pode também ser usada para gerar um despejo de informações de qualquer objeto
COM, desde que ele suporte interfaces de introspecção suficientes
e que seja conhecido o nome da interface que deve ser exibida.

### Parâmetros

`variant`
:   `variant` deve ser uma instância de um objeto COM
    ou o nome de uma biblioteca de tipos (que será resolvida de acordo
    com as regras definidas em [com\_load\_typelib()](function.com-load-typelib.md)).

`dispatch_interface`
:   O nome de uma interface derivada de `IDispatch` a ser exibida.

`display_sink`
:   Se definido como **`true`**, a interface de coleta correspondente será
    exibida no lugar.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [com\_event\_sink()](function.com-event-sink.md) - Conecta eventos de um objeto COM a um objeto PHP
- [com\_load\_typelib()](function.com-load-typelib.md) - Carrega uma biblioteca de tipos

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
