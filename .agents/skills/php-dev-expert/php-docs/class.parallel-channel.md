# A classe parallel\Channel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parallel-channel.php

---

# A classe parallel\Channel

(0.9.0)

## Channels sem buffer

Um channel sem buffer bloqueará chamadas para [parallel\Channel::send()](parallel-channel.send.md) até que haja um receptor e bloqueará chamadas
para [parallel\Channel::recv()](parallel-channel.recv.md) até que haja um remetente. Isso significa que um channel sem buffer não é apenas uma forma de compartilhar dados entre tarefas,
mas também um método simples de sincronização.

Um channel sem buffer é a maneira mais rápida de compartilhar dados entre tarefas, exigindo menos cópias.

## Channels em buffer

m canal em buffer não bloqueará chamadas para [parallel\Channel::send()](parallel-channel.send.md) até que a capacidade seja atingida, chamadas para
[parallel\Channel::recv()](parallel-channel.recv.md) serão bloqueadas até que haja dados no buffer.

## Closures sobre Channels

Uma característica poderosa dos channels paralelos é que eles permitem a troca de closures entre tarefas (e tempos de execução).

Quando um closure é enviado através de um channel, o closure é armazenado em buffer, isso não altera o buffer do channel que transmite o closure,
mas afeta o escopo estático dentro do closure: O mesmo closure enviado para tempos de execução diferentes, ou o mesmo tempo de execução,
não compartilharão seu escopo estático.

Isso significa que sempre que for executado um closure transmitido por um channel, o estado estático será o mesmo de quando o closure foi armazenado em buffer.

## Channels Anônimos

O construtor de channel anônimo permite ao programador evitar atribuir nomes a cada channel: parallel gerará um nome exclusivo para
channels anônimos.

## Resumo da classe

final
class **parallel\Channel**
{

/\* Construtor Anônimo \*/

public function [\_\_construct](parallel-channel.construct.md)()

public function [\_\_construct](parallel-channel.construct.md)([int](language.types.integer.md) `$capacity`)

/\* Acesso \*/

public function [make](parallel-channel.make.md)([string](language.types.string.md) `$name`): Channel

public function [make](parallel-channel.make.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$capacity`): Channel

public function [open](parallel-channel.open.md)([string](language.types.string.md) `$name`): Channel

/\* Compartilhamento \*/

public function [recv](parallel-channel.recv.md)(): [mixed](language.types.mixed.md)

public function [send](parallel-channel.send.md)([mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

/\* Encerramento \*/

public function [close](parallel-channel.close.md)(): [void](language.types.void.md)

/\* Constante para Buffer Infinito \*/

const
Infinite;

}

## Índice

- [parallel\Channel::\_\_construct](parallel-channel.construct.md) — Construção de canal
- [parallel\Channel::make](parallel-channel.make.md) — Construção de canal
- [parallel\Channel::open](parallel-channel.open.md) — Acesso
- [parallel\Channel::recv](parallel-channel.recv.md) — Compartilhamento
- [parallel\Channel::send](parallel-channel.send.md) — Compartilhamento
- [parallel\Channel::close](parallel-channel.close.md) — Fechamento

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
