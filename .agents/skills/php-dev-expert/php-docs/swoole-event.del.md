# Remove um socket do monitor de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-event.del.php

---

# Swoole\Event::del

(PECL swoole >= 1.9.0)

Swoole\Event::del — Remove um socket do monitor de eventos

### Descrição

public static function **Swoole\Event::del**([mixed](language.types.mixed.md) `$sock`): [bool](language.types.boolean.md)

Remove um socket do monitor de eventos.

**Aviso**

Sempre chame Event::del para cancelar o registro do monitoramento de eventos antes de fechar o socket.
A falha em fazê-lo pode resultar em vazamentos de memória.

### Parâmetros

`sock`
:   Descritor de arquivo do socket a ser removido.

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
