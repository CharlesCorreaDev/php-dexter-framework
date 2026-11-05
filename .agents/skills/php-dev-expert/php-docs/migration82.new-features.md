# Novas Funcionalidades

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration82.new-features.php

---

## Novas Funcionalidades

### Núcleo do PHP

#### Atributo SensitiveParameter

Adicionado o atributo `#[\SensitiveParameter]` para redigir
dados confidenciais em backtraces.

#### Diretiva INI error\_log\_mode

A diretiva INI [error\_log\_mode](errorfunc.configuration.md#ini.error-log-mode) foi adicionada, permitindo definir
as permissões para o arquivo de log de erros.

#### Propriedades de Enumerações em expressões constantes

Agora é possível buscar propriedades de
[Enumerações](language.enumerations.md)
em expressões constantes.

#### Melhorias no sistema de tipos

Agora é possível usar [null](language.types.null.md) e [false](language.types.singleton.md)
como tipos autônomos.

O tipo [true](language.types.singleton.md) foi adicionado.

Agora é possível combinar tipos de interseção e união.
O tipo precisa ser escrito em DNF.

#### Constantes em Traits

Agora é possível definir constantes em traits.

#### Classes Somente Leitura

Foi adicionado suporte para classes [somente
leitura](language.oop5.basic.md#language.oop5.basic.class.readonly).

### cURL

Adicionada a opção **`CURLINFO_EFFECTIVE_METHOD`**,
que retorna o método HTTP efetivo no valor de retorno de
[curl\_getinfo()](function.curl-getinfo.md).

Expôs [várias novas constantes](migration82.constants.md#migration82.constants.curl) de libcurl 7.62 a 7.80.

Adicionada a função [curl\_upkeep()](function.curl_upkeep.md) para executar qualquer verificação de manutenção de conexão.

### DBA

O driver LMDB agora aceita as flags **`DBA_LMDB_USE_SUB_DIR`** ou
**`DBA_LMDB_NO_SUB_DIR`** para determinar se deve criar um
subdiretório ou não ao criar um arquivo de banco de dados.

### OCI8

Adicionou a diretiva INI [oci8.prefetch\_lob\_size](oci8.configuration.md#ini.oci8.prefetch-lob-size) e a
função [oci\_set\_prefetch\_lob()](function.oci-set-prefetch-lob.md) para ajustar o
desempenho da consulta LOB reduzindo o número de viagens de ida e volta entre bancos de dados PHP e
Oracle ao buscar LOBS.
Isso pode ser usado com o Oracle Database 12.2 ou posterior.

### OpenSSL

Adicionado suporte AEAD para o algoritmo chacha20-poly1305.

### ODBC

Adicionadas as funções [odbc\_connection\_string\_is\_quoted()](function.odbc-connection-string-is-quoted.md),
[odbc\_connection\_string\_should\_quote()](function.odbc-connection-string-should-quote.md) e
[odbc\_connection\_string\_quote()](function.odbc-connection-string-quote.md).
Eles são usados principalmente nos bastidores nas extensões ODBC e PDO\_ODBC,
mas são expostos ao userland para facilitar o teste de unidade e para que os
aplicativos e bibliotecas do usuário executem as próprias citações.

### PCRE

Adicionado suporte para o modificador `n` (NO\_AUTO\_CAPTURE),
que torna os grupos simples `(xyz)` sem captura.
Somente grupos nomeados como `(?<name>xyz)` serão de captura.
Isso afeta apenas quais grupos estão sendo capturados, ainda é possível usar
referências de sub-expressão numeradas e o array de correspondências ainda
conterá resultados numerados.

### Random

Esta é uma nova extensão que organiza e consolida implementações existentes
relacionadas a geradores de números aleatórios.
Novos e melhores RNGs estão disponíveis com problemas de escopo eliminados.

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
