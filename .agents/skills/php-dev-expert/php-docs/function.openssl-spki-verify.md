# Verifica uma chave pública assinada e um desafio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-spki-verify.php

---

# openssl\_spki\_verify

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

openssl\_spki\_verify — Verifica uma chave pública assinada e um desafio

### Descrição

function **openssl\_spki\_verify**([string](language.types.string.md) `$spki`): [bool](language.types.boolean.md)

Valida a chave pública assinada e o desafio fornecidos.

### Parâmetros

`spki`
:   Espera uma chave pública assinada válida e um desafio

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Emite um erro de nível **`E_WARNING`** se um argumento inválido
for passado através do parâmetro `spki`.

### Examples

**Exemplo #1 Exemplo de **openssl\_spki\_verify()****

Valida uma chave pública assinada existente e um desafio

```
<?php
$pkey = openssl_pkey_new('senha secreta');
$spkac = openssl_spki_new($pkey, 'string de desafio');

if (openssl_spki_verify(preg_replace('/SPKAC=/', '', $spkac))) {
    echo $spkac;
} else {
    echo "Validação de SPKAC falhou";
}
?>
```

**Exemplo #2 Exemplo de **openssl\_spki\_verify()** a partir de <keygen>**

Valida uma chave pública assinada existente e um desafio emitido pelo elemento <keygen>.

```
<?php
if (openssl_spki_verify(preg_replace('/SPKAC=/', '', $_POST['spkac']))) {
    echo $spkac;
} else {
    echo "Validação de SPKAC falhou";
}
?>
<keygen name="spkac" challenge="string de desafio" keytype="RSA">
```

### Veja também

- [openssl\_spki\_new()](function.openssl-spki-new.md) - Gera uma nova chave pública assinada e um desafio
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
