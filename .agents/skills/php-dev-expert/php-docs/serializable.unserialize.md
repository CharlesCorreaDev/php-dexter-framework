# Constrói o objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/serializable.unserialize.php

---

# Serializable::unserialize

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

Serializable::unserialize — Constrói o objeto

### Descrição

public function **Serializable::unserialize**([string](language.types.string.md) `$data`): [void](language.types.void.md)

Chamado durante a desserialização do objeto.

> **Nota**:
>
> Este método age como o
> [construtor](language.oop5.decon.md#language.oop5.decon.constructor) do objeto. O método
> [\_\_construct()](language.oop5.decon.md#object.construct) *não será* chamado depois deste
> método.

### Parâmetros

`data`
:   A representação em string do objeto.

### Valor Retornado

O valor de retorno deste método é ignorado.

### Veja também

- [\_\_wakeup()](language.oop5.magic.md#object.wakeup)
- [\_\_unserialize()](language.oop5.magic.md#object.unserialize)

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
