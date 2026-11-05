# Gera uma nova chave pública assinada e um desafio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-spki-new.php

---

# openssl\_spki\_new

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

openssl\_spki\_new — Gera uma nova chave pública assinada e um desafio

### Descrição

function **openssl\_spki\_new**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) `$private_key`, [string](language.types.string.md) `$challenge`, [int](language.types.integer.md) `$digest_algo` = **`OPENSSL_ALGO_MD5`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Gera uma chave pública assinada e um desafio usando um algoritmo de hash especificado.

### Parâmetros

`private_key`
:   `private_key` deve ser definido como uma chave privada que foi
    gerada anteriormente por [openssl\_pkey\_new()](function.openssl-pkey-new.md) (ou
    obtida de outra família de funções openssl\_pkey).
    A parte pública correspondente da chave será usada para assinar o
    CSR.

`challenge`
:   O desafio associado à associação ao SPKAC.

`digest_algo`
:   O algoritmo de resumo. Consulte openssl\_get\_md\_method().

### Valor Retornado

Retorna uma chave pública assinada e uma string de desafio ou **`false`** em caso de falha.

### Erros/Exceções

Emite um erro de nível **`E_WARNING`** se um algoritmo de assinatura
desconhecido for passado através do parâmetro `digest_algo`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `private_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` era aceito. |

### Examples

**Exemplo #1 Exemplo de **openssl\_spki\_new()****

Gera um novo SPKAC com o resumo padrão (MD5)

```
<?php
$pkey = openssl_pkey_new('senha secreta');
$spkac = openssl_spki_new($pkey, 'testando');

if ($spkac !== NULL) {
    echo $spkac;
} else {
    echo "Falha de geração de SPKAC";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
MIICRzCCAS8wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDM3V3sS4o4
mB9dczziRnjGAmSp+JwPrHoYMAFGvDNmZGyiWfU586X4BKs++BAj7e/FsAfno0Hd
hN9FwpCNFSox30L03nQvLYJE7f/WqigwBeMRT7Op/xvFks4sT70xP2HRYv4KqP9a
WRcKU6cFH8VxhFhqM2txEIxZKdFLaL28yT7bEDmcglf4JLDdgNMb9rET1dkgtKE6
dOaJHPGjf1uvnOH4YwkQr7n4sLUR3Kdbh0ZJAFuQVDZulo+LLzxBBkqJJcB6FhF+
oXCdHTKZnqAhpWDz+NXYytAmevab6IYm5TWPWsJUv1YKJA5lg2mXbbloIZlN9Mgc
i9fi03bdw+crAgMBAAEWB3Rlc3RpbmcwDQYJKoZIhvcNAQEEBQADggEBALyUvP/o
pPSoWBlorFyZ2RnGwKf9qMpE0q2IJP7G3oDR4LyK/m933DUiZ+YnqThrH/CWb4Ek
y5I3OCyl3S4wCuU1ibZZwDVwYShr5ELp0J9PEf7qMQZOhNsizoC7k+Czb2xB6hYW
sKfsfTKm3cXBtH3fdgc/Z1Z7VSWnAzYo38snqm72NTf5yFRnrQdphNNXi+kn1zHA
lxXRyFDXHOcYsOnwAWfyXFA4QDHQ0ezz0UoCY8gJXovcZb4GRYqOLUAsF2HcNboy
29WN8VqE29sL9QxVZFlwMcqyoLcNnyw38GvNvAGqSvzzbnEFP2MAQXJVe0H0hdp/
MML5G2iNVgNozAo=
```

### Veja também

- [openssl\_spki\_verify()](function.openssl-spki-verify.md) - Verifica uma chave pública assinada e um desafio
- [openssl\_spki\_export\_challenge()](function.openssl-spki-export-challenge.md) - Exporta o desafio associado a uma chave pública assinada e a um desafio
- [openssl\_spki\_export()](function.openssl-spki-export.md) - Exporta uma chave pública assinada válida e formatada em PEM e um desafio
- [openssl\_get\_md\_methods()](function.openssl-get-md-methods.md) - Obtém métodos de resumo disponíveis
- [openssl\_csr\_new()](function.openssl-csr-new.md) - Gera um CSR
- [openssl\_csr\_sign()](function.openssl-csr-sign.md) - Assina um CSR com outro certificado (ou ele mesmo) e gera um certificado

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
