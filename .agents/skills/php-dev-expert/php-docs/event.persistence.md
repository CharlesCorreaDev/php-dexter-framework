# Sobre persistência de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.persistence.php

---

# Sobre persistência de eventos

Por padrão, sempre que um evento pendente se torna ativo (porque seu descritor de arquivo
está pronto para leitura ou gravação, ou porque seu tempo limite expira), ele
se torna não pendente logo antes de sua função de retorno ser executada. Assim, para tornar
o evento pendente novamente, pode-se chamar
[Event::add()](event.add.md)
nele novamente de dentro da função de retorno.

Se o sinalizador
**`Event::PERSIST`**
estiver definido em um evento, entretanto, o evento será
*persistente*.
Isso significa que o evento permanece pendente mesmo quando sua função de retorno é ativada.
O método [Event::del()](event.del.md)
pode ser chamado para torná-lo não pendente.

O tempo limite de um evento persistente é redefinido sempre que a função de retorno do evento é executada.
Assim, se houver um evento com as opções
**`Event::READ`**
`|`
**`Event::PERSIST`**
e um tempo limite de cinco segundos, o evento se tornará ativo:

1. Sempre que o soquete ou descritor de arquivo estiver pronto para leitura.
2. Sempre que cinco segundos se passaram desde a última vez que o evento ficou ativo.

Veja também
[» Programação
de rede rápida e portátil sem bloqueio com Libevent, Sobre Persistência de
Eventos](http://www.wangafu.net/~nickm/libevent-book/Ref4_event.html#_about_event_persistence)

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
