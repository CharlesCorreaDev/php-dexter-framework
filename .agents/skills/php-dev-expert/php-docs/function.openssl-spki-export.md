# Exporta uma chave pública assinada válida e formatada em PEM e um desafio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-spki-export.php

---

# openssl\_spki\_export

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

openssl\_spki\_export — Exporta uma chave pública assinada válida e formatada em PEM e um desafio

### Descrição

function **openssl\_spki\_export**([string](language.types.string.md) `$spki`): [string](language.types.string.md)|[false](language.types.singleton.md)

Exporta chave pública formatada em PEM de chave pública assinada codificada e desafio

### Parâmetros

`spki`
:   Espera uma chave pública assinada válida e um desafio

### Valor Retornado

Retorna a chave pública formatada em PEM associada ou **`false`** em caso de falha.

### Erros/Exceções

Emite um erro de nível **`E_WARNING`** se um argumento inválido
for passado através do parâmetro `spki`.

### Examples

**Exemplo #1 Exemplo de **openssl\_spki\_export()****

Extrai a chave pública formatada em PEM associada ou **`null`** em caso de falha.

```
<?php
$pkey = openssl_pkey_new('senha secreta');
$spkac = openssl_spki_new($pkey, 'string de desafio');
$pubKey = openssl_spki_export(preg_replace('/SPKAC=/', '', $spkac));

if ($pubKey) {
    echo $pubKey;
}
?>
```

**Exemplo #2 Exemplo de **openssl\_spki\_export()** a partir de <keygen>**

Extrai a chave pública formatada em PEM associada emitida pelo elemento <keygen>

```
<?php
$spkac = openssl_spki_export(preg_replace('/SPKAC=/', '', $_POST['spkac']));
if ($spkac != NULL) {
    echo $spkac;
} else {
    echo "Extração de chave pública falhou";
}
?>
<keygen name="spkac" challenge="string de desafio" keytype="RSA">
```

### Veja também

- [openssl\_spki\_new()](function.openssl-spki-new.md) - Gera uma nova chave pública assinada e um desafio
- [openssl\_spki\_verify()](function.openssl-spki-verify.md) - Verifica uma chave pública assinada e um desafio
- [openssl\_spki\_export\_challenge()](function.openssl-spki-export-challenge.md) - Exporta o desafio associado a uma chave pública assinada e a um desafio
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
