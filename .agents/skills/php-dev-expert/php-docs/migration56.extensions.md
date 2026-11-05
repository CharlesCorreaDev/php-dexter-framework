# Outras mudanças a extensões

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration56.extensions.php

---

## Outras mudanças a extensões

### [cURL](book.curl.md)

Um número de constantes marcadas como obsoletas na biblioteca cURL agora foram
removidas:

- **`CURLOPT_CLOSEPOLICY`**
- **`CURLCLOSEPOLICY_CALLBACK`**
- **`CURLCLOSEPOLICY_LEAST_RECENTLY_USED`**
- **`CURLCLOSEPOLICY_LEAST_TRAFFIC`**
- **`CURLCLOSEPOLICY_OLDEST`**
- **`CURLCLOSEPOLICY_SLOWEST`**

### [OCI8](book.oci8.md)

- Foi adicionado suporte para resultados implícitos para o banco de dados Oracle 12c
  através da nova função [oci\_get\_implicit\_resultset()](function.oci-get-implicit-resultset.md).
- Usar `oci_execute($s, OCI_NO_AUTO_COMMIT)` para um
  SELECT não mais inicia desnecessariamente um ROLLBACK interno durante
  o fechamento da conexão.
- Adicionadas sondas DTrace controladas pela opção `--enable-dtrace`
  de configuração.
- [oci\_internal\_debug()](function.oci-internal-debug.md) agora não faz mais nada.
- O formato de saída de [phpinfo()](function.phpinfo.md) para OCI8 foi alterado.

### [Zip](book.zip.md)

Uma opção de configuração `--with-libzip` foi adicionada para usar
uma instalação libzip de sistema. libzip versão 0.11 é requerida, com 0.11.2
o posterior recomendada.

### [MySQLi](book.mysqli.md)

Uma nova opção [mysqli.rollback\_on\_cached\_plink](mysqli.configuration.md#ini.mysqli.rollback-on-cached-plink)
foi adicionada, que controla o comportamento de ROLLBACK em conexões persistentes.

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
