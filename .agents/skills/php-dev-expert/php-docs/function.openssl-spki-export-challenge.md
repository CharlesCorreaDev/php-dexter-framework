# Exporta o desafio associado a uma chave pública assinada e a um desafio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-spki-export-challenge.php

---

# openssl\_spki\_export\_challenge

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

openssl\_spki\_export\_challenge — Exporta o desafio associado a uma chave pública assinada e a um desafio

### Descrição

function **openssl\_spki\_export\_challenge**([string](language.types.string.md) `$spki`): [string](language.types.string.md)|[false](language.types.singleton.md)

Exporta o desafio a partir da chave pública assinada codificada e do desafio.

### Parâmetros

`spki`
:   Espera uma chave pública assinada válida e um desafio

### Valor Retornado

Retorna a string de desafio associada ou **`false`** em caso de falha.

### Erros/Exceções

Emite um erro de nível **`E_WARNING`** se um argumento inválido
for passado através do parâmetro `spki`.

### Examples

**Exemplo #1 Exemplo de **openssl\_spki\_export\_challenge()****

Extrai a string de desafio associada ou NULL em caso de falha.

```
<?php
$pkey = openssl_pkey_new('senha secreta');
$spkac = openssl_spki_new($pkey, 'string de desafio');
$challenge = openssl_spki_export_challenge(preg_replace('/SPKAC=/', '', $spkac));
?>
```

**Exemplo #2 Exemplo de **openssl\_spki\_export\_challenge()** a partir de <keygen>**

Extrai a string de desafio associada emitida do elemento <keygen>

```
<?php
$challenge = openssl_spki_export_challenge(preg_replace('/SPKAC=/', '', $_POST['spkac']));
?>
<keygen name="spkac" challenge="string de desafio" keytype="RSA">
```

### Veja também

- [openssl\_spki\_new()](function.openssl-spki-new.md) - Gera uma nova chave pública assinada e um desafio
- [openssl\_spki\_verify()](function.openssl-spki-verify.md) - Verifica uma chave pública assinada e um desafio
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
