# Cria uma instância de um observador EvCheck parado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evcheck.createstopped.php

---

# EvCheck::createStopped

(PECL ev >= 0.2.0)

EvCheck::createStopped — Cria uma instância de um observador EvCheck parado

### Descrição

final
public
static
function **EvCheck::createStopped**(
[string](language.types.string.md) `$callback`
, 
[string](language.types.string.md) `$data`
 = ?, 
[string](language.types.string.md) `$priority`
 = ?): [object](language.types.object.md)

Cria uma instância de um observador EvCheck parado.

### Parâmetros

`callback`
:   Consulte [funções
    de retorno observadoras](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados ao observador.

`priority`
:   [Prioridade de observadores](class.ev.md#ev.constants.watcher-pri)

### Valor Retornado

Retorna um objeto EvCheck em caso de sucesso.

### Veja também

- [EvPrepare](class.evprepare.md)

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
