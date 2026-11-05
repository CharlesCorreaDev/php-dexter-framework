# A classe EventBuffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.eventbuffer.php

---

# A classe EventBuffer

(PECL event >= 1.5.0)

## Introdução

**EventBuffer**
representa o "evbuffer" do Libevent, uma funcionalidade de utilitário para E/S
em buffer.

Os buffers de eventos devem ser geralmente úteis para fazer a parte do "buffer"
de E/S de rede com buffer.

## Resumo da classe

class **EventBuffer**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[EOL\_ANY](class.eventbuffer.md#eventbuffer.constants.eol-any) = 0;

const
[int](language.types.integer.md)
[EOL\_CRLF](class.eventbuffer.md#eventbuffer.constants.eol-crlf) = 1;

const
[int](language.types.integer.md)
[EOL\_CRLF\_STRICT](class.eventbuffer.md#eventbuffer.constants.eol-crlf-strict) = 2;

const
[int](language.types.integer.md)
[EOL\_LF](class.eventbuffer.md#eventbuffer.constants.eol-lf) = 3;

const
[int](language.types.integer.md)
[PTR\_SET](class.eventbuffer.md#eventbuffer.constants.ptr-set) = 0;

const
[int](language.types.integer.md)
[PTR\_ADD](class.eventbuffer.md#eventbuffer.constants.ptr-add) = 1;

/\* Propriedades \*/

public
readonly
[int](language.types.integer.md)
[$length](class.eventbuffer.md#eventbuffer.props.length);

public
readonly
[int](language.types.integer.md)
[$contiguous\_space](class.eventbuffer.md#eventbuffer.props.contiguous-space);

/\* Métodos \*/

public
function [add](eventbuffer.add.md)(
[string](language.types.string.md) `$data`
): [bool](language.types.boolean.md)

public
function [addBuffer](eventbuffer.addbuffer.md)(
[EventBuffer](class.eventbuffer.md) `$buf`
): [bool](language.types.boolean.md)

public
function [appendFrom](eventbuffer.appendfrom.md)(
[EventBuffer](class.eventbuffer.md) `$buf`
, 
[int](language.types.integer.md) `$len`
): [int](language.types.integer.md)

public
function [\_\_construct](eventbuffer.construct.md)()

public
function [copyout](eventbuffer.copyout.md)(
[string](language.types.string.md) `&$data`
, 
[int](language.types.integer.md) `$max_bytes`
): [int](language.types.integer.md)

public
function [drain](eventbuffer.drain.md)(
[int](language.types.integer.md) `$len`
): [bool](language.types.boolean.md)

public
function [enableLocking](eventbuffer.enablelocking.md)(): [void](language.types.void.md)

public
function [expand](eventbuffer.expand.md)(
[int](language.types.integer.md) `$len`
): [bool](language.types.boolean.md)

public
function [freeze](eventbuffer.freeze.md)(
[bool](language.types.boolean.md) `$at_front`
): [bool](language.types.boolean.md)

public
function [lock](eventbuffer.lock.md)(): [void](language.types.void.md)

public
function [prepend](eventbuffer.prepend.md)(
[string](language.types.string.md) `$data`
): [bool](language.types.boolean.md)

public
function [prependBuffer](eventbuffer.prependbuffer.md)(
[EventBuffer](class.eventbuffer.md) `$buf`
): [bool](language.types.boolean.md)

public
function [pullup](eventbuffer.pullup.md)(
[int](language.types.integer.md) `$size`
): [string](language.types.string.md)

public
function [read](eventbuffer.read.md)(
[int](language.types.integer.md) `$max_bytes`
): [string](language.types.string.md)

public
function [read](eventbuffer.read.md)(
[mixed](language.types.mixed.md) `$fd`
, 
[int](language.types.integer.md) `$howmuch`
): [int](language.types.integer.md)

public
function [readLine](eventbuffer.readline.md)(
[int](language.types.integer.md) `$eol_style`
): [string](language.types.string.md)

public
function [search](eventbuffer.search.md)(
[string](language.types.string.md) `$what`
, 
[int](language.types.integer.md) `$start`
 = -1
, 
[int](language.types.integer.md) `$end`
 = -1
): [mixed](language.types.mixed.md)

public
function [searchEol](eventbuffer.searcheol.md)(
[int](language.types.integer.md) `$start`
 = -1
, 
[int](language.types.integer.md) `$eol_style`
 =
**`EventBuffer::EOL_ANY`**
): [mixed](language.types.mixed.md)

public
function [substr](eventbuffer.substr.md)(
[int](language.types.integer.md) `$start`
, 
[int](language.types.integer.md) `$length`
 = ?): [string](language.types.string.md)

public
function [unfreeze](eventbuffer.unfreeze.md)(
[bool](language.types.boolean.md) `$at_front`
): [bool](language.types.boolean.md)

public
function [unlock](eventbuffer.unlock.md)(): [bool](language.types.boolean.md)

public
function [write](eventbuffer.write.md)(
[mixed](language.types.mixed.md) `$fd`
, 
[int](language.types.integer.md) `$howmuch`
 = ?): [int](language.types.integer.md)

}

## Propriedades

length
:   O número de bytes armazenados em um buffer de eventos.

contiguous\_space
:   O número de bytes armazenados contiguamente na frente do buffer. Os
    bytes em um buffer podem ser armazenados em vários pedaços separados de memória;
    a propriedade retorna o número de bytes atualmente armazenados no primeiro
    pedaço.

## Constantes predefinidas

**`EventBuffer::EOL_ANY`**
:   O fim da linha é qualquer sequência de qualquer número de caracteres de retorno de carro e
    avanço de linha. Este formato não é muito útil; ele existe principalmente
    para compatibilidade com versões anteriores.

**`EventBuffer::EOL_CRLF`**
:   O final da linha é um retorno de carro opcional, seguido por um
    avanço de linha. (Em outras palavras, é um
    `"\r\n"`
    ou um
    `"\n"`
    .) Este formato é útil na análise de protocolos de Internet baseados em texto,
    uma vez que os padrões geralmente prescrevem um
    `"\r\n"`
    terminador de linha, mas clientes não conformes às vezes enviam apenas
    `"\n"`.

**`EventBuffer::EOL_CRLF_STRICT`**
:   O final de uma linha é um único retorno de carro, seguido por um único
    avanço de linha. (Isso também é conhecido como
    `"\r\n"`.
    Os valores ASCII são
    `0x0D`
    `0x0A`
    ).

**`EventBuffer::EOL_LF`**
:   O final de uma linha é um único caractere de avanço de linha. (Isso também é conhecido
    como
    `"\n"`.
    O valor ASCII é
    `0x0A`
    .)

**`EventBuffer::PTR_SET`**
:   Sinalizador usado como argumento do método
    **EventBuffer::setPosition()**
    Se este sinalizador for especificado, o ponteiro de posição será movido para uma
    posição absoluta dentro do buffer.

**`EventBuffer::PTR_ADD`**
:   O mesmo que
    **`EventBuffer::PTR_SET`**,
    exceto que este sinalizador faz com que o método
    **EventBuffer::setPosition()**
    mova a posição para a frente até o número especificado de
    bytes (em vez de definir a posição absoluta).

## Índice

- [EventBuffer::add](eventbuffer.add.md) — Acrescenta dados ao final de um buffer de eventos
- [EventBuffer::addBuffer](eventbuffer.addbuffer.md) — Move todos os dados de um buffer fornecido para a instância atual do EventBuffer
- [EventBuffer::appendFrom](eventbuffer.appendfrom.md) — Move o número especificado de bytes de um buffer de origem para o
  fim do buffer atual
- [EventBuffer::\_\_construct](eventbuffer.construct.md) — Constrói objeto EventBuffer
- [EventBuffer::copyout](eventbuffer.copyout.md) — Copia um número especificado de bytes da frente do buffer
- [EventBuffer::drain](eventbuffer.drain.md) — Remove o número especificado de bytes da frente do buffer
  sem copiá-lo para lugar nenhum
- [EventBuffer::enableLocking](eventbuffer.enablelocking.md) — Habilita bloqueio
- [EventBuffer::expand](eventbuffer.expand.md) — Reserva espaço no buffer
- [EventBuffer::freeze](eventbuffer.freeze.md) — Impede que chamadas que modificam um buffer de eventos sejam bem-sucedidas
- [EventBuffer::lock](eventbuffer.lock.md) — Adquire uma trava no buffer
- [EventBuffer::prepend](eventbuffer.prepend.md) — Adiciona dados à frente do buffer
- [EventBuffer::prependBuffer](eventbuffer.prependbuffer.md) — Move todos os dados do buffer de origem para a frente do buffer atual
- [EventBuffer::pullup](eventbuffer.pullup.md) — Lineariza os dados dentro do buffer
  e retorna seu conteúdo como uma string
- [EventBuffer::read](eventbuffer.read.md) — Lê dados de um evbuffer e drena os bytes lidos
- [EventBuffer::readFrom](eventbuffer.readfrom.md) — Lê dados de um arquivo no final do buffer
- [EventBuffer::readLine](eventbuffer.readline.md) — Extrai uma linha da frente do buffer
- [EventBuffer::search](eventbuffer.search.md) — Verifica o buffer em busca de uma ocorrência de uma string
- [EventBuffer::searchEol](eventbuffer.searcheol.md) — Verifica o buffer para detectar a ocorrência de um fim de linha
- [EventBuffer::substr](eventbuffer.substr.md) — Subtrai uma parte dos dados do buffer
- [EventBuffer::unfreeze](eventbuffer.unfreeze.md) — Reativa chamadas que modificam um buffer de eventos
- [EventBuffer::unlock](eventbuffer.unlock.md) — Libera a trava adquirida por EventBuffer::lock
- [EventBuffer::write](eventbuffer.write.md) — Grava o conteúdo do buffer em um arquivo ou soquete

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
