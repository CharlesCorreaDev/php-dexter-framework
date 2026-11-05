# IMAP, POP3 e NNTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.imap.php

---

# IMAP, POP3 e NNTP

# Introdução

**Aviso**

Esta extensão foi *DESCONTINUADA* e *DESAGREGADA* a partir do PHP 8.4.0.

Essas funções permitem operações com o protocolo IMAP,
bem como com os métodos de acesso NNTP, POP3
e caixa de correio local.

No entanto, esteja avisado de que algumas funções IMAP não funcionarão
corretamente com o protocolo POP.

**Aviso**

A extensão IMAP não é segura para threads; ela não deve ser usada com compilações ZTS.

- [Instalação/Configuração](imap.setup.md)
  - [Dependências](imap.requirements.md)
  - [Instalação](imap.installation.md)
  - [Configurações de Execução](imap.configuration.md)
  - [Tipos de Recurso](imap.resources.md)
- [Constantes predefinidas](imap.constants.md)
- [Funções de IMAP](ref.imap.md)
  - [imap\_8bit](function.imap-8bit.md) — Converte uma string de 8 bits em uma string imprimível escapada
  - [imap\_alerts](function.imap-alerts.md) — Retorna todas as mensagens de alerta IMAP que ocorreram
  - [imap\_append](function.imap-append.md) — Acrescenta uma mensagem de string a uma caixa de correio especificada
  - [imap\_base64](function.imap-base64.md) — Decodifica texto codificado em BASE64
  - [imap\_binary](function.imap-binary.md) — Converte uma string de 8 bits em uma string base64
  - [imap\_body](function.imap-body.md) — Lê o corpo da mensagem
  - [imap\_bodystruct](function.imap-bodystruct.md) — Lê a estrutura de uma seção específica do corpo de uma mensagem específica
  - [imap\_check](function.imap-check.md) — Verifica a caixa de correio atual
  - [imap\_clearflag\_full](function.imap-clearflag-full.md) — Limpa sinalizadores em mensagens
  - [imap\_close](function.imap-close.md) — Fecha um fluxo IMAP
  - [imap\_create](function.imap-create.md) — Sinônimo de imap\_createmailbox
  - [imap\_createmailbox](function.imap-createmailbox.md) — Cria uma nova caixa de correio
  - [imap\_delete](function.imap-delete.md) — Marca uma mensagem para exclusão da caixa de correio atual
  - [imap\_deletemailbox](function.imap-deletemailbox.md) — Exclui uma caixa de correio
  - [imap\_errors](function.imap-errors.md) — Retorna todos os erros IMAP que ocorreram
  - [imap\_expunge](function.imap-expunge.md) — Exclui todas as mensagens marcadas para exclusão
  - [imap\_fetch\_overview](function.imap-fetch-overview.md) — Lê uma visão geral das informações nos cabeçalhos da mensagem fornecida
  - [imap\_fetchbody](function.imap-fetchbody.md) — Busca uma seção específica do corpo da mensagem
  - [imap\_fetchheader](function.imap-fetchheader.md) — Retorna o cabeçalho de uma mensagem
  - [imap\_fetchmime](function.imap-fetchmime.md) — Busca cabeçalhos MIME para uma seção específica da mensagem
  - [imap\_fetchstructure](function.imap-fetchstructure.md) — Lê a estrutura de uma mensagem específica
  - [imap\_fetchtext](function.imap-fetchtext.md) — Sinônimo de imap\_body
  - [imap\_gc](function.imap-gc.md) — Limpa o cache IMAP
  - [imap\_get\_quota](function.imap-get-quota.md) — Recupera as configurações de nível de cota e estatísticas de uso por caixa de correio
  - [imap\_get\_quotaroot](function.imap-get-quotaroot.md) — Recupera as configurações de cota por usuário
  - [imap\_getacl](function.imap-getacl.md) — Obtém a ACL para uma determinada caixa de correio
  - [imap\_getmailboxes](function.imap-getmailboxes.md) — Lê a lista de caixas de correio, retornando informações detalhadas sobre cada uma delas
  - [imap\_getsubscribed](function.imap-getsubscribed.md) — Lista todas as caixas de correio assinadas
  - [imap\_header](function.imap-header.md) — Sinônimo de imap\_headerinfo
  - [imap\_headerinfo](function.imap-headerinfo.md) — Lê o cabeçalho da mensagem
  - [imap\_headers](function.imap-headers.md) — Retorna cabeçalhos para todas as mensagens em uma caixa de correio
  - [imap\_is\_open](function.imap-is-open.md) — Verifica se o fluxo IMAP ainda é válido
  - [imap\_last\_error](function.imap-last-error.md) — Obtém o último erro IMAP que ocorreu durante esta solicitação de página
  - [imap\_list](function.imap-list.md) — Lê a lista de caixas de correio
  - [imap\_listmailbox](function.imap-listmailbox.md) — Sinônimo de imap\_list
  - [imap\_listscan](function.imap-listscan.md) — Retorna a lista de caixas de correio que correspondem ao texto fornecido
  - [imap\_listsubscribed](function.imap-listsubscribed.md) — Sinônimo de imap\_lsub
  - [imap\_lsub](function.imap-lsub.md) — Lista todas as caixas de correio assinadas
  - [imap\_mail](function.imap-mail.md) — Envia uma mensagem de e-mail
  - [imap\_mail\_compose](function.imap-mail-compose.md) — Cria uma mensagem MIME com base nas seções de envelope e corpo fornecidas
  - [imap\_mail\_copy](function.imap-mail-copy.md) — Copia mensagens especificadas para uma caixa de correio
  - [imap\_mail\_move](function.imap-mail-move.md) — Move mensagens especificadas para uma caixa de correio
  - [imap\_mailboxmsginfo](function.imap-mailboxmsginfo.md) — Obtém informações sobre a caixa de correio atual
  - [imap\_mime\_header\_decode](function.imap-mime-header-decode.md) — Decodifica elementos do cabeçalho MIME
  - [imap\_msgno](function.imap-msgno.md) — Obtém o número da sequência da mensagem para o UID fornecido
  - [imap\_mutf7\_to\_utf8](function.imap-mutf7-to-utf8.md) — Decodifica uma string UTF-7 modificada para UTF-8
  - [imap\_num\_msg](function.imap-num-msg.md) — Obtém o número de mensagens na caixa de correio atual
  - [imap\_num\_recent](function.imap-num-recent.md) — Obtém o número de mensagens recentes na caixa de correio atual
  - [imap\_open](function.imap-open.md) — Abre um fluxo IMAP para uma caixa de correio
  - [imap\_ping](function.imap-ping.md) — Verifica se o fluxo IMAP ainda está ativo
  - [imap\_qprint](function.imap-qprint.md) — Converte uma string imprimível escapada em uma string de 8 bits
  - [imap\_rename](function.imap-rename.md) — Sinônimo de imap\_renamemailbox
  - [imap\_renamemailbox](function.imap-renamemailbox.md) — Renomeia uma caixa de correio antiga para uma nova caixa de correio
  - [imap\_reopen](function.imap-reopen.md) — Reabre o fluxo IMAP para uma nova caixa de correio
  - [imap\_rfc822\_parse\_adrlist](function.imap-rfc822-parse-adrlist.md) — Analisa uma string de endereços
  - [imap\_rfc822\_parse\_headers](function.imap-rfc822-parse-headers.md) — Analisa cabeçalhos de e-mail de uma string
  - [imap\_rfc822\_write\_address](function.imap-rfc822-write-address.md) — Retorna um endereço de e-mail formatado corretamente, considerando a caixa de correio, o host e as informações pessoais
  - [imap\_savebody](function.imap-savebody.md) — Salva uma seção específica do corpo em um arquivo
  - [imap\_scan](function.imap-scan.md) — Sinônimo de imap\_listscan
  - [imap\_scanmailbox](function.imap-scanmailbox.md) — Sinônimo de imap\_listscan
  - [imap\_search](function.imap-search.md) — Esta função retorna um array de mensagens que correspondem aos critérios de pesquisa fornecidos
  - [imap\_set\_quota](function.imap-set-quota.md) — Define uma cota para uma determinada caixa de correio
  - [imap\_setacl](function.imap-setacl.md) — Define a ACL para uma determinada caixa de correio
  - [imap\_setflag\_full](function.imap-setflag-full.md) — Define sinalizadores em mensagens
  - [imap\_sort](function.imap-sort.md) — Obtém e classifica mensagens
  - [imap\_status](function.imap-status.md) — Retorna informações de status sobre uma caixa de correio
  - [imap\_subscribe](function.imap-subscribe.md) — Faz inscrição em uma caixa de correio
  - [imap\_thread](function.imap-thread.md) — Retorna uma árvore de mensagens encadeadas
  - [imap\_timeout](function.imap-timeout.md) — Define ou busca o tempo limite do imap
  - [imap\_uid](function.imap-uid.md) — Retorna o UID para o número de sequência da mensagem fornecida
  - [imap\_undelete](function.imap-undelete.md) — Desmarca a mensagem que está marcada como excluída
  - [imap\_unsubscribe](function.imap-unsubscribe.md) — Cancela a inscrição em uma caixa de correio
  - [imap\_utf7\_decode](function.imap-utf7-decode.md) — Decodifica uma string codificada em UTF-7 modificada
  - [imap\_utf7\_encode](function.imap-utf7-encode.md) — Converte string ISO-8859-1 em texto UTF-7 modificado
  - [imap\_utf8](function.imap-utf8.md) — Converte texto codificado em MIME para UTF-8
  - [imap\_utf8\_to\_mutf7](function.imap-utf8-to-mutf7.md) — Codifica uma string UTF-8 para UTF-7 modificado
- [IMAP\Connection](class.imap-connection.md) — A classe IMAP\Connection

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
