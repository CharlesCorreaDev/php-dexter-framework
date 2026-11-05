# Funções do LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.ldap.php

---

# Funções do LDAP

## Índice

- [ldap\_8859\_to\_t61](function.ldap-8859-to-t61.md) — Converte caracteres 8859 para caracteres t61
- [ldap\_add](function.ldap-add.md) — Adiciona entradas ao diretório LDAP
- [ldap\_add\_ext](function.ldap-add-ext.md) — Adiciona entradas ao diretório LDAP
- [ldap\_bind](function.ldap-bind.md) — Faz ligação ao diretório LDAP
- [ldap\_bind\_ext](function.ldap-bind-ext.md) — Faz ligação ao diretório LDAP
- [ldap\_close](function.ldap-close.md) — Sinônimo de ldap\_unbind
- [ldap\_compare](function.ldap-compare.md) — Compara valor de atributo encontrado em entrada especificada com DN
- [ldap\_connect](function.ldap-connect.md) — Conecta a um servidor LDAP
- [ldap\_connect\_wallet](function.ldap-connect-wallet.md) — Conecta a um servidor LDAP
- [ldap\_control\_paged\_result](function.ldap-control-paged-result.md) — Envia controle de paginação LDAP
- [ldap\_control\_paged\_result\_response](function.ldap-control-paged-result-response.md) — Obtém o cookie de paginação LDAP
- [ldap\_count\_entries](function.ldap-count-entries.md) — Conta o número de entradas em uma pesquisa
- [ldap\_count\_references](function.ldap-count-references.md) — Conta o número de referências em um resultado de pesquisa
- [ldap\_delete](function.ldap-delete.md) — Remove uma entrada de um diretório
- [ldap\_delete\_ext](function.ldap-delete-ext.md) — Remove uma entrada de um diretório
- [ldap\_dn2ufn](function.ldap-dn2ufn.md) — Converte DN para um formato mais legível
- [ldap\_err2str](function.ldap-err2str.md) — Converte um número de erro LDAP em uma mensagem de erro string
- [ldap\_errno](function.ldap-errno.md) — Retorna o número de erro LDAP do último comando
- [ldap\_error](function.ldap-error.md) — Retorna a mensagem de erro do último comando LDAP
- [ldap\_escape](function.ldap-escape.md) — Escapa uma string para uso em um filtro LDAP ou DN
- [ldap\_exop](function.ldap-exop.md) — Realiza uma operação estendida
- [ldap\_exop\_passwd](function.ldap-exop-passwd.md) — Facilitador para operação estendida PASSWD
- [ldap\_exop\_refresh](function.ldap-exop-refresh.md) — Facilitador para operação estendida REFRESH
- [ldap\_exop\_sync](function.ldap-exop-sync.md) — Realiza uma operação estendida
- [ldap\_exop\_whoami](function.ldap-exop-whoami.md) — Facilitador para operação estendida WHOAMI
- [ldap\_explode\_dn](function.ldap-explode-dn.md) — Separa o DN em seus componentes
- [ldap\_first\_attribute](function.ldap-first-attribute.md) — Retorna o primeiro atributo
- [ldap\_first\_entry](function.ldap-first-entry.md) — Retorna o ID do primeiro resultado
- [ldap\_first\_reference](function.ldap-first-reference.md) — Retorna a primeira referência
- [ldap\_free\_result](function.ldap-free-result.md) — Libera memória do resultado
- [ldap\_get\_attributes](function.ldap-get-attributes.md) — Obtém atributos de uma entrada de resultado de pesquisa
- [ldap\_get\_dn](function.ldap-get-dn.md) — Obtém o DN de uma entrada de resultado
- [ldap\_get\_entries](function.ldap-get-entries.md) — Obtém todas as entradas do resultado
- [ldap\_get\_option](function.ldap-get-option.md) — Obtém o valor atual para a opção informada
- [ldap\_get\_values](function.ldap-get-values.md) — Obtém todos os valores de uma entrada de resultado
- [ldap\_get\_values\_len](function.ldap-get-values-len.md) — Obtém todos os valores binários de uma entrada de resultado
- [ldap\_list](function.ldap-list.md) — Pesquisa de nível único
- [ldap\_mod\_add](function.ldap-mod-add.md) — Adiciona valores aos atributos atuais
- [ldap\_mod\_add\_ext](function.ldap-mod_add-ext.md) — Adiciona valores aos atributos atuais
- [ldap\_mod\_del](function.ldap-mod-del.md) — Deleta valores dos atributos atuais
- [ldap\_mod\_del\_ext](function.ldap-mod_del-ext.md) — Deleta valores dos atributos atuais
- [ldap\_mod\_replace](function.ldap-mod-replace.md) — Substitui valores de atributos por novos valores
- [ldap\_mod\_replace\_ext](function.ldap-mod_replace-ext.md) — Substitui valores de atributos com novos valores
- [ldap\_modify](function.ldap-modify.md) — Sinônimo de ldap\_mod\_replace
- [ldap\_modify\_batch](function.ldap-modify-batch.md) — Executa modificações em lote em uma entrada LDAP
- [ldap\_next\_attribute](function.ldap-next-attribute.md) — Obtém o próximo atributo no resultado
- [ldap\_next\_entry](function.ldap-next-entry.md) — Obtém a próxima entrada do resultado
- [ldap\_next\_reference](function.ldap-next-reference.md) — Obtém a próxima referência
- [ldap\_parse\_exop](function.ldap-parse-exop.md) — Interpreta o objeto de resultado de uma operação estendida LDAP
- [ldap\_parse\_reference](function.ldap-parse-reference.md) — Extrai informação de entrada de referência
- [ldap\_parse\_result](function.ldap-parse-result.md) — Extrai informação de resultado
- [ldap\_read](function.ldap-read.md) — Lê uma entrada
- [ldap\_rename](function.ldap-rename.md) — Modifica o nome de uma entrada
- [ldap\_rename\_ext](function.ldap-rename-ext.md) — Modifica o nome de uma entrada
- [ldap\_sasl\_bind](function.ldap-sasl-bind.md) — Faz ligação ao diretório LDAP usando SASL
- [ldap\_search](function.ldap-search.md) — Pesquisa árvore LDAP
- [ldap\_set\_option](function.ldap-set-option.md) — Define o valor para a opção informada
- [ldap\_set\_rebind\_proc](function.ldap-set-rebind-proc.md) — Define uma função de retorno para fazer religações na busca de referências
- [ldap\_sort](function.ldap-sort.md) — Ordena entradas de resultado LDAP no lado do cliente
- [ldap\_start\_tls](function.ldap-start-tls.md) — Inicia TLS
- [ldap\_t61\_to\_8859](function.ldap-t61-to-8859.md) — Traduz caracteres t61 para caracteres 8859
- [ldap\_unbind](function.ldap-unbind.md) — Desliga-se do diretório LDAP

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
