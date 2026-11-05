# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imap.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`NIL`** ([int](language.types.integer.md))
:   Descontinuado a partir do PHP 8.1.0.

**`OP_DEBUG`** ([int](language.types.integer.md))

**`OP_READONLY`** ([int](language.types.integer.md))
:   Abre a caixa de correio somente leitura

**`OP_ANONYMOUS`** ([int](language.types.integer.md))
:   Não usa ou atualiza um .newsrc para novidades
    (somente NNTP)

**`OP_SHORTCACHE`** ([int](language.types.integer.md))

**`OP_SILENT`** ([int](language.types.integer.md))

**`OP_PROTOTYPE`** ([int](language.types.integer.md))

**`OP_HALFOPEN`** ([int](language.types.integer.md))
:   Para nomes IMAP e NNTP,
    abre uma conexão, mas não abre uma caixa de correio.

**`OP_EXPUNGE`** ([int](language.types.integer.md))

**`OP_SECURE`** ([int](language.types.integer.md))

**`CL_EXPUNGE`** ([int](language.types.integer.md))
:   Expurga silenciosamente a caixa de correio antes de fechar ao
    chamar [imap\_close()](function.imap-close.md)

**`FT_UID`** ([int](language.types.integer.md))
:   O parâmetro é um UID

**`FT_PEEK`** ([int](language.types.integer.md))
:   Não define a opção \Seen se ainda não estiver definida

**`FT_NOT`** ([int](language.types.integer.md))

**`FT_INTERNAL`** ([int](language.types.integer.md))
:   A string de retorno está em formato interno, não será canonizada para CRLF.

**`FT_PREFETCHTEXT`** ([int](language.types.integer.md))

**`ST_UID`** ([int](language.types.integer.md))
:   O argumento de sequência contém UIDs em vez de números de sequência

**`ST_SILENT`** ([int](language.types.integer.md))

**`ST_SET`** ([int](language.types.integer.md))

**`CP_UID`** ([int](language.types.integer.md))
:   Os números de sequência contêm UIDS

**`CP_MOVE`** ([int](language.types.integer.md))
:   Exclui as mensagens da caixa de correio atual após copiar
    com [imap\_mail\_copy()](function.imap-mail-copy.md)

**`SE_UID`** ([int](language.types.integer.md))
:   Retorna UIDs em vez de números de sequência

**`SE_FREE`** ([int](language.types.integer.md))

**`SE_NOPREFETCH`** ([int](language.types.integer.md))
:   Não pré-buscar mensagens pesquisadas

**`SO_FREE`** ([int](language.types.integer.md))

**`SO_NOSERVER`** ([int](language.types.integer.md))

**`SA_MESSAGES`** ([int](language.types.integer.md))

**`SA_RECENT`** ([int](language.types.integer.md))

**`SA_UNSEEN`** ([int](language.types.integer.md))

**`SA_UIDNEXT`** ([int](language.types.integer.md))

**`SA_UIDVALIDITY`** ([int](language.types.integer.md))

**`SA_ALL`** ([int](language.types.integer.md))

**`LATT_NOINFERIORS`** ([int](language.types.integer.md))
:   Esta caixa de correio não tem "filhos" (não há
    caixas de correio abaixo desta).

**`LATT_NOSELECT`** ([int](language.types.integer.md))
:   Este é apenas um contêiner, não uma caixa de correio - não
    pode ser aberto.

**`LATT_MARKED`** ([int](language.types.integer.md))
:   Esta caixa de correio está marcada. Usada somente por UW-IMAPD.

**`LATT_UNMARKED`** ([int](language.types.integer.md))
:   Esta caixa de correio não está marcada. Usada somente por
    UW-IMAPD.

**`LATT_REFERRAL`** ([int](language.types.integer.md))
:   Este contêiner tem uma referência para uma caixa de correio remota.

**`LATT_HASCHILDREN`** ([int](language.types.integer.md))
:   Esta caixa de correio tem caixas filhas selecionáveis.

**`LATT_HASNOCHILDREN`** ([int](language.types.integer.md))
:   Esta caixa de correio não tem caixas filhas selecionáveis.

**`SORTDATE`** ([int](language.types.integer.md))
:   Critérios de classificação para [imap\_sort()](function.imap-sort.md):
    data da mensagem

**`SORTARRIVAL`** ([int](language.types.integer.md))
:   Critérios de classificação para [imap\_sort()](function.imap-sort.md):
    data de chegada

**`SORTFROM`** ([int](language.types.integer.md))
:   Critérios de classificação para [imap\_sort()](function.imap-sort.md):
    caixa de correio no primeiro endereço "De:" (From)

**`SORTSUBJECT`** ([int](language.types.integer.md))
:   Critérios de classificação para [imap\_sort()](function.imap-sort.md):
    assunto da mensagem

**`SORTTO`** ([int](language.types.integer.md))
:   Critérios de classificação para [imap\_sort()](function.imap-sort.md):
    caixa de correio no primeiro endereço "Para:" (To)

**`SORTCC`** ([int](language.types.integer.md))
:   Critérios de classificação para [imap\_sort()](function.imap-sort.md):
    caixa de correio no primeiro endereço "Cc:"

**`SORTSIZE`** ([int](language.types.integer.md))
:   Critérios de classificação para [imap\_sort()](function.imap-sort.md):
    tamanho da mensagem em octetos

**`TYPETEXT`** ([int](language.types.integer.md))
:   Tipo de corpo primário: texto não formatado

**`TYPEMULTIPART`** ([int](language.types.integer.md))
:   Tipo de corpo primário: várias partes

**`TYPEMESSAGE`** ([int](language.types.integer.md))
:   Tipo de corpo primário: mensagem encapsulada

**`TYPEAPPLICATION`** ([int](language.types.integer.md))
:   Tipo de corpo primário: dados de aplicação

**`TYPEAUDIO`** ([int](language.types.integer.md))
:   Tipo de corpo primário: áudio

**`TYPEIMAGE`** ([int](language.types.integer.md))
:   Tipo de corpo primário: imagem estática

**`TYPEVIDEO`** ([int](language.types.integer.md))
:   Tipo de corpo primário: vídeo

**`TYPEMODEL`** ([int](language.types.integer.md))
:   Tipo de corpo primário: modelo

**`TYPEOTHER`** ([int](language.types.integer.md))
:   Tipo de corpo primário: desconhecido

**`ENC7BIT`** ([int](language.types.integer.md))
:   Codificação do corpo: dados semânticos SMTP de 7 bits

**`ENC8BIT`** ([int](language.types.integer.md))
:   Codificação do corpo: dados semânticos SMTP de 8 bits

**`ENCBINARY`** ([int](language.types.integer.md))
:   Codificação do corpo: dados binários de 8 bits

**`ENCBASE64`** ([int](language.types.integer.md))
:   Codificação do corpo: dados codificados em base-64

**`ENCQUOTEDPRINTABLE`** ([int](language.types.integer.md))
:   Codificação do corpo: dados de 8 bits como 7 bits legíveis por humanos

**`ENCOTHER`** ([int](language.types.integer.md))
:   Codificação do corpo: desconhecido

**`IMAP_OPENTIMEOUT`** ([int](language.types.integer.md))

**`IMAP_READTIMEOUT`** ([int](language.types.integer.md))

**`IMAP_WRITETIMEOUT`** ([int](language.types.integer.md))

**`IMAP_CLOSETIMEOUT`** ([int](language.types.integer.md))

**`IMAP_GC_ELT`** ([int](language.types.integer.md))
:   Coletor de lixo, limpa elementos de cache de mensagens.

**`IMAP_GC_ENV`** ([int](language.types.integer.md))
:   Coletor de lixo, limpa envelopes e corpos.

**`IMAP_GC_TEXTS`** ([int](language.types.integer.md))
:   Coletor de lixo, limpa textos.

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
