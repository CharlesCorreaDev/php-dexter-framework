# Opção de Event

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.flags.php

---

# Opção de Event

**`Event::READ`**
Esta opção indica um evento que se torna ativo quando o descritor de arquivo
fornecido (geralmente um recurso de fluxo ou soquete) está pronto para leitura.

**`Event::WRITE`**
Indica um evento que se torna ativo quando o descritor de arquivo fornecido
(geralmente um recurso de fluxo ou soquete) está pronto para gravação.

**`Event::SIGNAL`**
Usado para implementar a detecção de sinal. Consulte "Construindo eventos de sinal" abaixo.

**`Event::TIMEOUT`**
indica um evento que se torna ativo depois de decorrido um tempo limite. A
opção **`Event::TIMEOUT`**
é ignorada ao construir um evento: pode-se definir um tempo limite
quando o evento é
*adicionado*,
ou não. É definido no argumento
`$what`
para a função de retorno quando ocorre um tempo limite.

Consulte também
[» Programação
de rede rápida e portátil sem bloqueio com Libevent, Trabalhando com eventos,
Sinalizadores de eventos](http://www.wangafu.net/~nickm/libevent-book/Ref4_event.html#_the_event_flags)

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
