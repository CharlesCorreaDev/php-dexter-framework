# Cria o objeto EvCheck associado à instância atual do laço
  de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.check.php

---

# EvLoop::check

(PECL ev >= 0.2.0)

EvLoop::check — Cria o objeto EvCheck associado à instância atual do laço
de eventos

### Descrição

final
public
function **EvLoop::check**(
[string](language.types.string.md) `$callback`
, 
[string](language.types.string.md) `$data`
 = ?, 
[string](language.types.string.md) `$priority`
 = ?): [EvCheck](class.evcheck.md)

Cria o objeto EvCheck associado à instância atual do laço de eventos.

### Parâmetros

Todos os parâmetros têm o mesmo significado que no método
[EvCheck::\_\_construct()](evcheck.construct.md).

### Valor Retornado

Retorna um objeto EvCheck em caso de sucesso.

### Veja também

- [EvCheck::\_\_construct()](evcheck.construct.md) - Constrói o objeto observador EvCheck

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
