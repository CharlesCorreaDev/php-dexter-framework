# Guarda de Privacidade GNU

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.gnupg.php

---

# Guarda de Privacidade GNU

# Introdução

Este módulo permite interação com o [» gnupg](https://www.gnupg.org/).

- [Instalação/Configuração](gnupg.setup.md)
  - [Dependências](gnupg.requirements.md)
  - [Instalação](gnupg.installation.md)
- [Constantes predefinidas](gnupg.constants.md)
- [Examples](gnupg.examples.md)
  - [Assinatura com texto claro](gnupg.examples-clearsign.md)
- [Funções de GnuPG](ref.gnupg.md)
  - [gnupg\_adddecryptkey](function.gnupg-adddecryptkey.md) — Adiciona uma chave para descriptografia
  - [gnupg\_addencryptkey](function.gnupg-addencryptkey.md) — Adiciona uma chave para criptografia
  - [gnupg\_addsignkey](function.gnupg-addsignkey.md) — Adiciona uma chave para assinatura
  - [gnupg\_cleardecryptkeys](function.gnupg-cleardecryptkeys.md) — Remove todas as chaves que foram definidas para descriptografia antes
  - [gnupg\_clearencryptkeys](function.gnupg-clearencryptkeys.md) — Remove todas as chaves que foram definidas para criptografia antes
  - [gnupg\_clearsignkeys](function.gnupg-clearsignkeys.md) — Remove todas as chaves que foram definidas para assinatura antes
  - [gnupg\_decrypt](function.gnupg-decrypt.md) — Descriptografa um texto fornecido
  - [gnupg\_decryptverify](function.gnupg-decryptverify.md) — Descriptografa e verifica um texto fornecido
  - [gnupg\_deletekey](function.gnupg-deletekey.md) — Exclui uma chave do chaveiro
  - [gnupg\_encrypt](function.gnupg-encrypt.md) — Criptografa um texto fornecido
  - [gnupg\_encryptsign](function.gnupg-encryptsign.md) — Criptografa e assina um texto fornecido
  - [gnupg\_export](function.gnupg-export.md) — Exporta uma chave
  - [gnupg\_getengineinfo](function.gnupg-getengineinfo.md) — Retorna as informações do mecanismo
  - [gnupg\_geterror](function.gnupg-geterror.md) — Retorna o texto de erro, se uma função falhar
  - [gnupg\_geterrorinfo](function.gnupg-geterrorinfo.md) — Retorna as informações de erro
  - [gnupg\_getprotocol](function.gnupg-getprotocol.md) — Retorna o protocolo atualmente ativo para todas as operações
  - [gnupg\_gettrustlist](function.gnupg-gettrustlist.md) — Pesquisa os itens confiáveis
  - [gnupg\_import](function.gnupg-import.md) — Importa uma chave
  - [gnupg\_init](function.gnupg-init.md) — Inicializa uma conexão
  - [gnupg\_keyinfo](function.gnupg-keyinfo.md) — Retorna um array com informações sobre todas as chaves que correspondem ao padrão fornecido
  - [gnupg\_listsignatures](function.gnupg-listsignatures.md) — Lista as assinaturas de clave
  - [gnupg\_setarmor](function.gnupg-setarmor.md) — Alterna a saída blindada
  - [gnupg\_seterrormode](function.gnupg-seterrormode.md) — Define o modo para relato de erros
  - [gnupg\_setsignmode](function.gnupg-setsignmode.md) — Define o modo de assinatura
  - [gnupg\_sign](function.gnupg-sign.md) — Assina um texto fornecido
  - [gnupg\_verify](function.gnupg-verify.md) — Verifica um texto assinado

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
