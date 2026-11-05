# Funções de Rnp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.rnp.php

---

# Funções de Rnp

## Índice

- [rnp\_backend\_string](function.rnp-backend-string.md) — Retorna o nome da biblioteca de back-end criptográfico
- [rnp\_backend\_version](function.rnp-backend-version.md) — Retorna a versão da biblioteca de back-end criptográfico
- [rnp\_decrypt](function.rnp-decrypt.md) — Descriptografa mensagem PGP
- [rnp\_dump\_packets](function.rnp-dump-packets.md) — Despeja informação de fluxo de pacotes OpenPGP em formato legível
- [rnp\_dump\_packets\_to\_json](function.rnp-dump-packets-to-json.md) — Despejar informações de fluxo de pacotes OpenPGP para a string JSON
- [rnp\_ffi\_create](function.rnp-ffi-create.md) — Cria o objeto de nível superior usado para interagir com a biblioteca
- [rnp\_ffi\_destroy](function.rnp-ffi-destroy.md) — Destrói o objeto de nível superior usado para interagir com a biblioteca
- [rnp\_ffi\_set\_pass\_provider](function.rnp-ffi-set-pass-provider.md) — Definir função de retorno do provedor de senha
- [rnp\_import\_keys](function.rnp-import-keys.md) — Importa chaves da string PHP para o chaveiro e recebe JSON descrevendo chaves novas/atualizadas
- [rnp\_import\_signatures](function.rnp-import-signatures.md) — Importa assinaturas independentes para o chaveiro e recebe JSON descrevendo chaves atualizadas
- [rnp\_key\_export](function.rnp-key-export.md) — Exporta uma chave
- [rnp\_key\_export\_autocrypt](function.rnp-key-export-autocrypt.md) — Exporte o mínimo de chaves para o recurso de criptografia automática (apenas 5 pacotes: chave, uid, assinatura,
  subchave de criptografia, assinatura)
- [rnp\_key\_export\_revocation](function.rnp-key-export-revocation.md) — Gera e exporta assinatura de revogação de chave primária
- [rnp\_key\_get\_info](function.rnp-key-get-info.md) — Obtém informação sobre a chave
- [rnp\_key\_remove](function.rnp-key-remove.md) — Remover uma chave de chaveiro(s)
- [rnp\_key\_revoke](function.rnp-key-revoke.md) — Revogar uma chave ou subchave gerando e adicionando assinatura de revogação
- [rnp\_list\_keys](function.rnp-list-keys.md) — Enumera todas as chaves presentes em um chaveiro por tipo de identificador especificado
- [rnp\_load\_keys](function.rnp-load-keys.md) — Carrega chaves da string PHP
- [rnp\_load\_keys\_from\_path](function.rnp-load-keys-from-path.md) — Carrega chaves do caminho especificado
- [rnp\_locate\_key](function.rnp-locate-key.md) — Procura a chave
- [rnp\_op\_encrypt](function.rnp-op-encrypt.md) — Criptografa mensagem
- [rnp\_op\_generate\_key](function.rnp-op-generate-key.md) — Gera chave
- [rnp\_op\_sign](function.rnp-op-sign.md) — Executa operação de assinatura em dados binários, retornar assinatura(s) incorporada(s)
- [rnp\_op\_sign\_cleartext](function.rnp-op-sign-cleartext.md) — Executa operação de assinatura em dados textuais, retornar mensagem assinada em texto não criptografado
- [rnp\_op\_sign\_detached](function.rnp-op-sign-detached.md) — Executa operação de assinatura, retorna assinatura(s) separada(s)
- [rnp\_op\_verify](function.rnp-op-verify.md) — Verifica assinaturas incorporadas ou em texto não criptografado
- [rnp\_op\_verify\_detached](function.rnp-op-verify-detached.md) — Verifica assinaturas separadas
- [rnp\_save\_keys](function.rnp-save-keys.md) — Salva chaves em string PHP
- [rnp\_save\_keys\_to\_path](function.rnp-save-keys-to-path.md) — Salva chaves no caminho especificado
- [rnp\_supported\_features](function.rnp-supported-features.md) — Obtém recursos suportados no formato JSON
- [rnp\_version\_string](function.rnp-version-string.md) — Versão da biblioteca RNP
- [rnp\_version\_string\_full](function.rnp-version-string-full.md) — String da versão completa da biblioteca RNP

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
