# Novas Funcionalidades

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration73.new-features.php

---

## Novas Funcionalidades

### Núcleo do PHP

#### Sintaxe Heredoc e Nowdoc mais flexível

O marcador de fechamento para strings doc não precisa mais ser seguido por
ponto-e-vírgula ou nova linha. Além disso, o marcador de fechamento pode ser recuado, caso em
que o recuo será retirado de todas as linhas na string do documento.

#### A desconstrução de array suporta atribuições de referência

A desconstrução de array agora suporta atribuições de referência usando a sintaxe
`[&$a, [$b, &$c]] = $d` O mesmo também é suportado
para [list()](function.list.md).

#### O operador Instanceof aceita Literais

`instanceof` agora permite literais como o primeiro operando, caso em
que o resultado é sempre **`false`**.

#### Exceção CompileError em vez de alguns Erros de Compilação

Uma nova exceção [CompileError](class.compileerror.md) foi adicionada, da
qual [ParseError](class.parseerror.md) herda. Um pequeno número de
erros de compilação agora lançará um [CompileError](class.compileerror.md)
em vez de gerar um fatal error. Atualmente, isso afeta apenas erros de compilação
que podem ser lançados por [token\_get\_all()](function.token-get-all.md) no modo
**`TOKEN_PARSE`**, mas mais erros podem ser convertidos
no futuro.

#### Vírgulas à direita são permitidas em chamadas

Agora são permitidas vírgulas à direita em chamadas de função e método.

#### Suporte Argon2id

O argumento de configuração **--with-password-argon2[=dir]**
agora fornece suporte para os hashes Argon2i e Argon2id nas funções
[password\_hash()](function.password-hash.md), [password\_verify()](function.password-verify.md),
[password\_get\_info()](function.password-get-info.md) e
[password\_needs\_rehash()](function.password-needs-rehash.md). As senhas podem ser hash e
verificadas usando a constante **`PASSWORD_ARGON2ID`**.
O suporte para Argon2i e Argon2id nas funções **password\_\*()**
agora requer que o PHP seja vinculado à biblioteca de referência libargon2 ≥
20161029.

### FastCGI Process Manager

Novas opções foram adicionadas para personalizar o log do FPM:

`log_limit`
:   Esta opção global pode ser usada para definir o limite de log para a
    linha registrada, o que permite registrar mensagens com mais de 1024 caracteres
    sem quebrar. Ele também corrige vários problemas de empacotamento.

`log_buffering`
:   Esta opção global permite um registro experimental sem buffer extra.

`decorate_workers_output`
:   Esta opção de pool permite desativar a decoração de saída para a saída dos workers
    quando `catch_workers_output` estiver ativado.

### Funções BC Math

[bcscale()](function.bcscale.md) agora também pode ser usado como getter para
recuperar a escala atual em uso.

### Lightweight Directory Access Protocol

Suporte completo para controles LDAP foi adicionado às funções de consulta [LDAP](book.ldap.md) e
[ldap\_parse\_result()](function.ldap-parse-result.md):

- Um parâmetro `$controls` para enviar controles para
  o servidor em [ldap\_add()](function.ldap-add.md),
  [ldap\_mod\_replace()](function.ldap-mod-replace.md), [ldap\_mod\_add()](function.ldap-mod-add.md),
  [ldap\_mod\_del()](function.ldap-mod-del.md), [ldap\_rename()](function.ldap-rename.md),
  [ldap\_compare()](function.ldap-compare.md), [ldap\_delete()](function.ldap-delete.md),
  [ldap\_modify\_batch()](function.ldap-modify-batch.md),
  [ldap\_search()](function.ldap-search.md), [ldap\_list()](function.ldap-list.md) e
  [ldap\_read()](function.ldap-read.md) foi adicionado.
- O parâmetro de saída `$controls` para obter controles do servidor em
  [ldap\_parse\_result()](function.ldap-parse-result.md) foi adicionado.
- Suporte para **`LDAP_OPT_SERVER_CONTROLS`** e
  **`LDAP_OPT_CLIENT_CONTROLS`** em
  [ldap\_get\_option()](function.ldap-get-option.md) e
  [ldap\_set\_option()](function.ldap-set-option.md) foi corrigido.

### Functions Multibyte String

#### Suporte completo para Case-Mapping e Case-Folding

Foi adicionado suporte para mapeamento completo de case-mapping e case-folding. Ao contrário do
case-mapping simples, o case-mapping completo pode alterar o comprimento da string. Por
exemplo:

```
<?php
mb_strtoupper("Straße");
// Produces STRAßE on PHP 7.2
// Produces STRASSE on PHP 7.3
?>
```

Os diferentes modos de mapeamento e folding modes estão disponíveis através de
[mb\_convert\_case()](function.mb-convert-case.md):

- **`MB_CASE_LOWER`** (usado por [mb\_strtolower()](function.mb-strtolower.md))
- **`MB_CASE_UPPER`** (usado por [mb\_strtoupper()](function.mb-strtoupper.md))
- **`MB_CASE_TITLE`**
- **`MB_CASE_FOLD`**
- **`MB_CASE_LOWER_SIMPLE`**
- **`MB_CASE_UPPER_SIMPLE`**
- **`MB_CASE_TITLE_SIMPLE`**
- **`MB_CASE_FOLD_SIMPLE`** (usado por operações Case-Insensitive)

Somente o mapeamento de caso completo incondicional e agnóstico de idioma é executado.

#### As operações de string Case-Insensitive usam Case-Folding

As operações de string que não diferenciam maiúsculas de minúsculas agora usam case-folding em vez de
case- mapping durante as comparações. Isso significa que mais caracteres serão
considerados (sem distinção entre maiúsculas e minúsculas) iguais agora.

#### MB\_CASE\_TITLE executa conversão de Title-Case

[mb\_convert\_case()](function.mb-convert-case.md) com **`MB_CASE_TITLE`**
agora executa conversão de maiúsculas e minúsculas com base nas propriedades Unicode
derivadas de Cased e CaseIgnorable. Em particular, isso também melhora o tratamento de
aspas e apóstrofos.

#### Support Unicode 11

As tabelas de dados [Multibyte String](book.mbstring.md) foram
atualizadas para Unicode 11.

#### Suporte Long String

As [funções Multibyte String Functions](ref.mbstring.md) agora
suportam corretamente strings maiores que 2 GB.

#### Melhorias de desempenho

O desempenho da extensão [Multibyte String](book.mbstring.md)
foi significativamente melhorado em todos os aspectos. As maiores
melhorias estão nas funções de conversão de caso.

#### Suporte a Capturas Nomeadas

As funções `mb_ereg_*` agora suportam capturas nomeadas.
Funções de correspondência como [mb\_ereg()](function.mb-ereg.md) agora retornarão capturas
nomeadas usando o número do grupo e o nome, semelhante ao PCRE:

```
<?php
mb_ereg('(?<word>\w+)', '国', $matches);
// => [0 => "国", 1 => "国", "word" => "国"];
?>
```

Além disso, [mb\_ereg\_replace()](function.mb-ereg-replace.md) agora suporta as
notações `\k<>` e `\k''` para fazer referência a capturas
nomeadas na string de substituição:

```
<?php
mb_ereg_replace('\s*(?<word>\w+)\s*', "_\k<word>_\k'word'_", ' foo ');
// => "_foo_foo_"
?>
```

`\k<>` e `\k''` também podem ser usados para referências
numeradas, que também funcionam com números de grupos maiores que 9.

### Readline

O suporte para as opções `completion_append_character` e
`completion_suppress_append` foi adicionado a
[readline\_info()](function.readline-info.md). Essas opções só estão disponíveis se o PHP
estiver vinculado a libreadline (ao invés de libedit).

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
