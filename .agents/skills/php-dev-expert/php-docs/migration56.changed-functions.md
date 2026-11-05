# Funções alteradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration56.changed-functions.php

---

## Funções alteradas

### Núcleo do PHP

- [crypt()](function.crypt.md) agora irá emitir um erro de nível
  **`E_NOTICE`** se o parâmetro `salt`
  for omitido.
- [substr\_compare()](function.substr-compare.md) agora irá aceitar `0`
  para o parâmetro `length`.
- [unserialize()](function.unserialize.md) agora irá falhar se forem passados dados
  manipulados na tentativa de instanciar um objeto sem
  chamar seu construtor.

### [cURL](book.curl.md)

- Envios de arquivo usando a sintaxe `@file` agora são suportados somente
  se a opção **`CURLOPT_SAFE_UPLOAD`** for definida para
  **`false`**. A classe [CURLFile](class.curlfile.md) deve ser usada no lugar.

### [Mcrypt](book.mcrypt.md)

- O parâmetro `source` de
  [mcrypt\_create\_iv()](function.mcrypt-create-iv.md) agora tem o padrão de
  **`MCRYPT_DEV_URANDOM`** ao invés de
  **`MCRYPT_DEV_RANDOM`**.

### [OpenSSL](book.openssl.md)

- [stream\_socket\_enable\_crypto()](function.stream-socket-enable-crypto.md) agora permite que o parâmetro
  `crypto_type` seja opcional se o
  contexto de SSL do fluxo incluir a nova opção
  `crypto_type`.

### [PostgreSQL](book.pgsql.md)

- [pg\_insert()](function.pg-insert.md), [pg\_select()](function.pg-select.md),
  [pg\_update()](function.pg-update.md) e [pg\_delete()](function.pg-delete.md) não são
  mais experimentais.
- [pg\_send\_execute()](function.pg-send-execute.md),
  [pg\_send\_prepare()](function.pg-send-prepare.md), [pg\_send\_query()](function.pg-send-query.md)
  e [pg\_send\_query\_params()](function.pg-send-query-params.md) não irão mais bloquear até
  a conclusão da escrira da consulta se o fluxo do socket subjacente para a conexão
  do banco de dados for definido para o modo de não-bloqueio.

### [Reflection](book.reflection.md)

- [ReflectionClass::newInstanceWithoutConstructor()](reflectionclass.newinstancewithoutconstructor.md)
  agora permite que classes internas não-finais sejam
  instanciadas.

### [XMLReader](book.xmlreader.md)

- [XMLReader::getAttributeNs()](xmlreader.getattributens.md) e
  [XMLReader::getAttributeNo()](xmlreader.getattributeno.md) agora retornam **`null`** se
  o atributo não puder ser encontrado, como
  [XMLReader::getAttribute()](xmlreader.getattribute.md).

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
