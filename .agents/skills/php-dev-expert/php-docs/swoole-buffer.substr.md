# Lê dados do buffer de memória com base no deslocamento e no comprimento. Ou remove dados do buffer de memória.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-buffer.substr.php

---

# Swoole\Buffer::substr

(PECL swoole >= 1.9.0)

Swoole\Buffer::substr — Lê dados do buffer de memória com base no deslocamento e no comprimento. Ou remove dados do buffer de memória.

### Descrição

public function **Swoole\Buffer::substr**([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$length` = ?, [bool](language.types.boolean.md) `$remove` = ?): [string](language.types.string.md)

Se $remove for definido como verdadeiro e $offset for definido como 0, os dados serão removidos do buffer.
A memória para armazenar os dados será liberada quando o objeto de buffer for destruído.

### Parâmetros

`offset`
:   O deslocamento.

`length`
:   O comprimento.

`remove`
:   Informa se devem ser removidos da memória os dados do buffer.

### Valor Retornado

Os dados ou a string lidos do buffer de memória.

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
